<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia as inertia;

class PageController extends Controller
{
    /**
     * Render Index page
     */
    public function index()
    {
        $username = "Sulaiman Misri";
        $frameworks = ['Laravel', 'Vue', 'Inertia'];

        return inertia::render('Index', compact('username', 'frameworks'));
    }

    /**
     * Render list of clients
     */
    public function clients()
    {
        return inertia::render('Clients');
    }

    /**
     * Render list of services
     */
    public function services()
    {
        return inertia::render('Services');
    }
}
