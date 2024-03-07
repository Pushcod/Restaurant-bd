<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('admin.orders.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menu::pluck('name','id')->toArray();
        $clients = Client::pluck('name','id')->toArray();
         return view('admin.orders.create', compact('menus','clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->name = $request->input('name');
        $order->menu_id = $request->input('menu_id');
        $order->client_id = $request->input('client_id');
        $order->date_up = $request->date('date_up');
        $order->isActive = $request->input('isActive');
        $order->save();
        Toast::title('Категория добавлена');
        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
