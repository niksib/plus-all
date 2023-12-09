<?php

namespace App\Http\Controllers\Admin\Contracts;

use App\Services\Basic\Repositories\CRUDRepository;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Inertia\Response;

class CRUDController extends AdminBaseController
{
    protected CRUDRepository $CRUDRepository;
    protected Model $item;
    protected string $routeId;
    protected string $routeGroup;
    protected string $viewGroup;
    protected ?FormRequest $createFormRequest = null;
    protected ?FormRequest $updateFormRequest = null;

    public function index(): Response
    {
        $items = $this->CRUDRepository->getPaginatedList();

        return Inertia::render($this->viewGroup . '/List', [
            'items' => $items,
        ]);
    }

    public function create(): Response
    {
        return Inertia::render(
            $this->viewGroup . '/Create',
            array_merge([
                'item' => $this->item->getEmptyData(),
            ], $this->getFormVariables())
        );
    }

    public function store(Request $request): RedirectResponse
    {
        if ($this->createFormRequest) {
            $validator = Validator::make($request->toArray()['data'], $this->createFormRequest->rules());
            if ($validator->fails()) {
                return redirect(url()->previous())->withErrors($validator);
            }
        }

        $this->CRUDRepository->create($request->toArray()['data']);

        return Redirect::route('admin.' . $this->routeGroup . '.index');
    }

    public function edit(int $id): Response
    {
        $model = $this->CRUDRepository->getById($id);

        return Inertia::render(
            $this->viewGroup . '/Edit',
            array_merge([
                'item' => $model->toArray(),
            ], $this->getFormVariables())
        );
    }

    public function update(Request $request): RedirectResponse
    {
        try {
            if ($this->updateFormRequest) {
                $this->updateFormRequest->id = $request->{$this->routeId};
                $validator = Validator::make($request->toArray()['data'], $this->updateFormRequest->rules());
                if ($validator->fails()) {
                    return redirect(url()->previous())->withErrors($validator);
                }
            }

            $model = $this->CRUDRepository->update($request->{$this->routeId}, $request->toArray()['data']);

            Session::flash('message.text', 'Stored!');
            Session::flash('message.status', 'green');
        } catch (Exception $exception) {
            Session::flash('message.text', $exception->getMessage());
            Session::flash('message.status', 'red');

            return Redirect::back();
        }

        return Redirect::route('admin.' . $this->routeGroup . '.edit', [$this->routeId => $model->id]);
    }

    public function destroy(Request $request): RedirectResponse
    {
        $this->CRUDRepository->delete($request->{$this->routeId});

        return Redirect::route('admin.' . $this->routeGroup . '.index');
    }

    protected function getFormVariables(): array
    {
        return [];
    }
}
