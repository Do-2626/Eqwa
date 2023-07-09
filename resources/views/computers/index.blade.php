@extends('layout')

@section('title','Computers')
@section('cnotent')
<div>
    <ui class="flex flex-col justify-center my-7 gap-3">
        @foreach($c as $computer)
        <a href="http://127.0.0.1:8000/computres/4" class="hover:text-fuchsia-600">
            <li class="p-3 border-4 rounded-xl text-xl list-none">
                <strong>{{ $computer['name'] }}</strong> from <strong>KOR</strong> <span class="">95$</span>
            </li>
        </a>
        @endforeach
    </ui>
</div>
@endsection