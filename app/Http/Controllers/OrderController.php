<?php
namespace App\Http\Controllers;

use App\Http\Requests\OrderProcessRequest;
use App\Services\OrderService;

class OrderController extends Controller
{
    public function index()
    {
    }

    public function process(OrderProcessRequest $request)
    {
        $orderService = new OrderService();
        $orderService->process((int) $request->qty);
    }
}
