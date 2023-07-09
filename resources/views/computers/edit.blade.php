@extends('layout')

@section('title','Edit computer')
@section('cnotent')
<div class="max-w-7xl mx-auto ">
    <div class="flex justify-center rounded-xl bg-white w-[380px]">
        <form class="flex flex-col items-center justify-center my-7 gap-2 p-6" action="{{ route('computers.store') }}"
            method="post">
            @csrf
            <div class="w-full my-1">
                <label for="computer-name" class="text-xl">Computer Name</label>
                <input id="computer-name" name="computer-name" value="{{$computer->name}}"  type="text"
                    class="w-80 text-lg border p-2">
                @error('computer-name')
                <p class="m-0 text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="w-full my-1">
                <label for="computer-origin" class="text-xl">Computer Origin</label>
                <input id="computer-origin" name="computer-origin" value="{{$computer->origin}}" type="text"
                    class="w-80 text-lg border p-2">
                @error('computer-origin')
                <p class="m-0 text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="w-full my-1">
                <label for="computer-price" class="text-xl">Computer price </label>
                <input id="computer-price" name="computer-price" value="{{$computer->price}}" type="text"
                    class="w-80 text-lg border p-2">
                @error('computer-price')
                <p class="m-0 text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div>
                <button class="mt-8" type="submit">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
@endsection