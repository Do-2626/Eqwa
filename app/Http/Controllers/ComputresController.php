<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputresController extends Controller
{

    private static function getData()
    {
        return [
            ['id' => 1, 'name' => 'Apple', 'origin' => 'USA'],
            ['id' => 2, 'name' => 'Dell', 'origin' => 'USA'],
            ['id' => 3, 'name' => 'HP', 'origin' => 'USA'],
            ['id' => 4, 'name' => 'Lenovo', 'origin' => 'CHN'],
            ['id' => 5, 'name' => 'Asus', 'origin' => 'TWN']
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
            'computers' => self::getData()
        ]);
    }
    // _________________________________________________________
    public function create()
    {
        //
    }
    // _________________________________________________________

    public function store(Request $request)
    {
        //
    }
    // _________________________________________________________

    public function show(string $id)
    {
        $computers = self::getData();
        $index = array_search($id, array_column($computers,'id'));

        if($index === false){
            abort(404);
        }
        return view('computers.show',[
            'computer' => $computers[$index]
        ]);
    }

    // _________________________________________________________

    public function edit(string $id)
    {
        //
    }
    // _________________________________________________________


    public function update(Request $request, string $id)
    {
        //
    }
    // _________________________________________________________

    public function destroy(string $id)
    {
        //
    }
}