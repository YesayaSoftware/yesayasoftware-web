<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Create a new ThreadsController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Dashboard view
     */
    public function index()
    {
        $this->authorize('admin', auth()->user());

        return view('dashboard');
    }
}
