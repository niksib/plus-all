<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\AdminBaseController;
use Inertia\Inertia;
use Inertia\Response;

class FileManagerController extends AdminBaseController
{
    public function index(): Response
    {
        return Inertia::render('FileManager/Index');
    }
}
