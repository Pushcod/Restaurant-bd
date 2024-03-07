<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('admin.menus.index',[
            'menus' => SpladeTable::for(Menu::class)
            ->withGlobalSearch(columns:['name'])
            ->column('name',label: "Название блюда", sortable:true)
            ->column('description',label: "Описание Блюда")
            ->column('image', label: "Изображение")
            ->column('time',label: "Время готовки(Д.|Ч.|мин.)")
            ->column('cost',label: 'Цена блюда(₽)')
            ->column('cheffood',label: "Блюдо от шефа")
            ->column('isActive',label: "Активность блюда")
            ->paginate(10)
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->name = $request->input('name');
        $menu->cost = $request->input('cost');
        $menu->time = $request->input('time');
        $menu->description = $request->input('description');
        $menu->image = $request->file('image')->store('public/menu');
        $menu->cheffood = $request->boolean('cheffood');
        $menu->isActive = $request->input('isActive');
        $menu->save();
        Toast::title('меню добавлено');
        return redirect()->route('menus.index');
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
