<?php

namespace App\Http\Controllers\Admin\Contracts;

use App\Services\Basic\Repositories\CRUDLangRepository;
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
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CRUDLangController extends AdminBaseController
{
    protected CRUDLangRepository $CRUDRepository;
    protected Model $item;
    protected Model $itemLangs;
    protected string $routeId;
    protected string $routeGroup;
    protected string $viewGroup;
    protected ?FormRequest $createFormRequest = null;
    protected ?FormRequest $updateFormRequest = null;
    protected ?FormRequest $createFormLangsRequest = null;
    protected ?FormRequest $updateFormLangsRequest = null;

    public function index(): Response
    {
        $items = $this->CRUDRepository->getPaginated();

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
                'itemLangs' => $this->itemLangs->getEmptyData(),
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

        if ($this->createFormLangsRequest) {
            $validator = Validator::make($request->toArray()['dataLangs'], $this->createFormLangsRequest->rules());
            if ($validator->fails()) {
                return redirect(url()->previous())->withErrors($validator);
            }
        }

        $this->CRUDRepository->create($request->toArray());

        return Redirect::route('admin.' . $this->routeGroup . '.index');
    }

    public function edit(int $id): Response
    {
        $model = $this->CRUDRepository->getById($id, ['langs']);
        $modelLangs = $model->langs->keyBy('lang')->toArray();

        foreach (LaravelLocalization::getSupportedLocales() as $language) {
            if (empty($modelLangs[$language['code']])) {
                $modelLangs[$language['code']] = $this->itemLangs->getEmptyData()[$language['code']];
            }
        }

        return Inertia::render(
            $this->viewGroup . '/Edit',
            array_merge([
                'item' => $model->toArray(),
                'itemLangs' => $modelLangs,
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

            if ($this->updateFormLangsRequest) {
                $validator = Validator::make($request->toArray()['dataLangs'], $this->updateFormLangsRequest->rules());
                if ($validator->fails()) {
                    return redirect(url()->previous())->withErrors($validator);
                }
            }

            $model = $this->CRUDRepository->update($request->{$this->routeId}, $request->toArray());

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
