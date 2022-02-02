<?php
namespace App\Http\Controllers;

use App\Http\Requests\WidgetStoreRequest;
use App\Models\Widget;

class WidgetsController extends Controller
{
    public function index()
    {
        return inertia('Index', [
            'widgets' => Widget::orderBy('qty')->get()
        ]);
    }

    public function create()
    {
        return inertia('Create');
    }

    public function store(WidgetStoreRequest $request)
    {
        Widget::create([
            'qty' => $request->qty
        ]);

        return redirect('/');
    }
}
