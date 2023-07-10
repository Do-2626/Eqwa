@extends('layout')

@section('title','Edit computer')
@section('cnotent')
<div class="max-w-7xl mx-auto ">
    <div class="flex justify-center rounded-xl bg-white w-[100%]">
        <form class="flex flex-col items-center justify-center my-2 w-[100%] gap-2 p-6"
            action="{{ route('computers.update',  ['computer'=>$computer['id']]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="flex flex-col w-full my-1">
                <label for="computer-name" class="text-xl">Computer Name</label>
                <input id="computer-name" name="computer-name" value="{{$computer->name}}" type="text"
                    class="text-lg border p-2">
                @error('computer-name')
                <p class="m-0 text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col w-full my-1">
                <label for="computer-origin" class="text-xl">Computer Origin</label>
                <input id="computer-origin" name="computer-origin" value="{{$computer->origin}}" type="text"
                    class="text-lg border p-2">
                @error('computer-origin')
                <p class="m-0 text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col w-full my-1">
                <label for="computer-price" class="text-xl">Computer price </label>
                <input id="computer-price" name="computer-price" value="{{$computer->price}}" type="text"
                    class="text-lg border p-2">
                @error('computer-price')
                <p class="m-0 text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div>
                <button class="mt-8" type="submit">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection