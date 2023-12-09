<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CronJob\Models\CronJob;
use App\Services\Translation\Repositories\TranslationRepository;
use App\Services\Translation\Requests\TranslationCreateRequest;
use App\Services\Translation\Services\GoogleSheetTranslatorService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;

class TranslationController extends Controller
{
    public function index(Request $request, TranslationRepository $translationRepository): JsonResponse|Response
    {
        $filters = [
            'group' => $request->get('group'),
            'key' => $request->get('key'),
            'value' => $request->get('value')
        ];
        $entities = $translationRepository->getPaginatedList($filters);

        return Inertia::render('Translation/List', [
            'entities' => $entities,
            'filters' => $filters
        ]);
    }

    public function create(): Response
    {
        $locales = config('laravellocalization.supportedLocales');

        return Inertia::render('Translation/Create', [
            'locales' => $locales
        ]);
    }

    public function store(
        TranslationCreateRequest $request,
        TranslationRepository    $translationRepository
    ): RedirectResponse
    {
        try {
            $data = $request->only(['group', 'key', 'text']);
            $data['text'] = array_map(fn($value) => $value ?? '', $data['text']);
            $translationRepository->create($data);

            Session::flash('message.text', 'Stored!');
            Session::flash('message.status', 'green');
        } catch (Exception $exception) {
            Session::flash('message.text', $exception->getMessage());
            Session::flash('message.status', 'red');
        }

        return Redirect::route('admin.translations.index');
    }

    public function edit(int $translation, TranslationRepository $translationRepository): Response
    {
        $entity = $translationRepository->getById($translation);
        $locales = config('laravellocalization.supportedLocales');

        return Inertia::render('Translation/Edit', [
            'entity' => $entity,
            'locales' => $locales
        ]);
    }

    public function update(
        int                      $translation,
        TranslationCreateRequest $request,
        TranslationRepository    $translationRepository
    ): RedirectResponse
    {
        try {
            $data = $request->only(['group', 'key', 'text']);
            $data['text'] = array_map(fn($value) => $value ?? '', $data['text']);
            $entity = $translationRepository->update($translation, $data);

            Session::flash('message.text', 'Stored!');
            Session::flash('message.status', 'green');
        } catch (Exception $exception) {
            Session::flash('message.text', $exception->getMessage());
            Session::flash('message.status', 'red');
        }

        return Redirect::route('admin.translations.edit', ['translation' => $entity->id]);
    }

    public function destroy(int $id, TranslationRepository $translationRepository)
    {
        try {
            $translationRepository->delete($id);

            Session::flash('message.text', 'Deleted!');
            Session::flash('message.status', 'green');
        } catch (Exception $exception) {
            Session::flash('message.text', $exception->getMessage());
            Session::flash('message.status', 'red');
        }

        return Redirect::route('admin.translations.index');
    }

    public function googleSheetSync()
    {
        try {
            CronJob::create([
                'action' => 'translation-sync',
                'status' => CronJob::STATUS_IN_QUEUE
            ]);

            Session::flash('message.text', 'Translations will be updated in 5 minutes!');
            Session::flash('message.status', 'green');
        } catch (Exception $exception) {
            Session::flash('message.text', $exception->getMessage());
            Session::flash('message.status', 'red');
        }

        return Redirect::route('admin.translations.index');
    }
}
