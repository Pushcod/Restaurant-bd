<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('admin.clients.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->input('name');
        $client->number_client = $request->input('number_client');
        $client->number_phone = $request->input('number_phone');
        $client->number_table = $request->boolean('number_table');
        $client->email = $request->input('email');
        $client->count_client = $request->boolean('count_client');
        $client->date_up = $request->date('date_up');
        $client->date_create = $request->date('date_create');
        $client->isActive = $request->input('isActive');
        $client->save();
        Toast::title('Категория добавлена');
        return redirect()->route('clients.index');
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
