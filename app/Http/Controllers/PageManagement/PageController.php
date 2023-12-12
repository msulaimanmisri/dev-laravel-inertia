<?php

namespace App\Http\Controllers\PageManagement;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class PageController extends Controller
{
    /**
     * render index
     */
    public function index()
    {
        return Inertia::render('Welcome');
    }

}
