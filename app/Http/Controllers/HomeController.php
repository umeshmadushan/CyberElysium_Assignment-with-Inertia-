<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use domain\Facades\StudentFacade;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $response['students'] = StudentFacade::all();
        return Inertia::render('Dashboard/Index');
    }
}
