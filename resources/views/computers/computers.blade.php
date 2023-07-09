@extends('layout')

@section('title','Computers')
@section('cnotent')
<div>
    <ui class="flex flex-col justify-center my-7 gap-3">
        <a href="http://127.0.0.1:8000/computres/4" class="hover:text-fuchsia-600">
            <li class="p-3 border-4 rounded-xl text-xl list-none">
                <strong>Samsung</strong> from <strong>KOR</strong> <span class="">95$</span>
            </li>
        </a>
    </ui>
</div>
@endsection