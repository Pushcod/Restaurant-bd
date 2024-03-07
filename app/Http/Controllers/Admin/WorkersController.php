<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('admin.workers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.workers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $worker = new Worker();
        $worker->name = $request->input('name');
        $worker->passport = $request->input('passport');
        $worker->number = $request->input('number');
        $worker->email = $request->input('email');
        $worker->home = $request->input('home');
        $worker->exp = $request->boolean('exp');
        $worker->worktime = $request->input('worktime');
        $worker->jobtitle = $request->input('jobtitle');
        $worker->salary = $request->boolean('salary');
        $worker->isActive = $request->input('isActive');
        $worker->save();
        Toast::title('Работник добавлен');
        return redirect()->route('workers.index');
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
