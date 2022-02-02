<?php
namespace App\Http\Controllers;

use App\Models\Widget;
use Illuminate\Http\Request;

class WidgetsController extends Controller
{
    public function index()
    {
        return inertia('Index', [
            'widgets' => Widget::all()
        ]);
    }

    public function create()
    {
        return inertia('Create');
    }

    public function store(Request $request)
    {
    }
}
