<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'lorem' => '1233333',
        ]);
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function admin()
    {
        return Inertia::render('Admin/Index');
    }
}
