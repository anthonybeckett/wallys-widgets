<?php
namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\OrderProcessRequest;

class OrderController extends Controller
{
    public function index()
    {
        return inertia('OrderReceived', [
            'data' => json_decode(Session::get('order')->data)
        ]);
    }

    public function process(OrderProcessRequest $request)
    {
        $orderService = new OrderService();

        $results = $orderService->process((int) $request->qty);

        return redirect('/order/received')->with(['order' => $results]);
    }
}
