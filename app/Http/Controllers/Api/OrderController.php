<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\TelegramService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $telegram;

    public function __construct(TelegramService $telegramService)
    {
        $this->telegram = $telegramService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required'
        ]);

        $order = Order::create($request->all());

        $this->telegram->sendMessage('Incoming Order');

        return response()->json([
            'message' => 'Order created',
            'date' => $order
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
