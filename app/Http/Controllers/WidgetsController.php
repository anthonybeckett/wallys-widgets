<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WidgetsController extends Controller
{
    public function index()
    {
        return inertia('Index');
    }

    public function create()
    {
        return inertia('Create');
    }

    public function store(Request $request)
    {
    }
}
