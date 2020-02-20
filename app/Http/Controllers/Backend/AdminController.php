<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Show the profile for the given admin.
     *
     * @return View
     */
    public function index()
    {
        return view('admin.dashboards.index');
    }
}
