<?php

namespace App\Http\Controllers;

use App\Models\Computer;

use Illuminate\Http\Request;

class ComputresController extends Controller
{

    private static function getData()
    {
        return [
            // ['id' => 1, 'name' => 'Apple', 'origin' => 'USA'],
            // ['id' => 2, 'name' => 'Dell', 'origin' => 'USA'],
            // ['id' => 3, 'name' => 'HP', 'origin' => 'USA'],
            // ['id' => 4, 'name' => 'Lenovo', 'origin' => 'CHN'],
            // ['id' => 5, 'name' => 'Asus', 'origin' => 'TWN']
            // ['id' => 6, 'name' => 'Acer', 'origin' => 'TWN'],
            // ['id' => 1, 'name' => 'MSI', 'origin' => 'TWN'],
            // ['id' => 1, 'name' => 'Samsung', 'origin' => 'KOR'],
            // ['id' => 1, 'name' => 'LG', 'origin' => 'KOR'],
            // ['id' => 1, 'name' => 'Fujitsu', 'origin' => 'JPN'],
            // ['id' => 1, 'name' => 'Toshiba', 'origin' => 'JPN'],
            // ['id' => 1, 'name' => 'Sony', 'origin' => 'JPN'],
            // ['id' => 1, 'name' => 'NEC', 'origin' => 'JPN'],
            // ['id' => 1, 'name' => 'Panasonic', 'origin' => 'JPN'],
            // ['id' => 1, 'name' => 'Sharp', 'origin' => 'JPN'],
            // ['id' => 1, 'name' => 'IBM', 'origin' => 'USA'],
            // ['id' => 1, 'name' => 'Compaq', 'origin' => 'USA'],

        ];
    }

    // _________________________________________________________
    public function index()
    {
        return view('computers.index', [
            'computers' => Computer::all()
        ]);
    }
    // _________________________________________________________
    public function create()
    {
        return view('computers.create');
    }
    // _________________________________________________________

    public function store(Request $request)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required|integer'
        ]);

        $computer = new Computer();
        $computer->name = strip_tags($request->input('computer-name'));
        $computer->origin = strip_tags($request->input('computer-origin'));
        $computer->price = strip_tags($request->input('computer-price'));

        $computer->save();

        return redirect()->route('computers.index');

    }
    // _________________________________________________________

    public function show(string $id)
    {
        return view('computers.show', [
            'computer' => Computer::findOrFail($id)
        ]);
    }

    // _________________________________________________________

    public function edit(string $id)
    {
        return view('computers.edit', [
            'computer' => Computer::findOrFail($id)
        ]);
    }
    // _________________________________________________________


    public function update(Request $request, string $id)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required|integer'
        ]);

        $to_updare = Computer::findOrFail($id);

        $to_updare->name = strip_tags($request->input('computer-name'));
        $to_updare->origin = strip_tags($request->input('computer-origin'));
        $to_updare->price = strip_tags($request->input('computer-price'));

        $to_updare->save();

        return redirect()->route('computers.show', $id);
    }
    // _________________________________________________________

    public function destroy(string $id)
    {
            $to_delete = Computer::findOrFail($id);
            $to_delete->delete();
            return redirect()->route('computers.index');
    }
}