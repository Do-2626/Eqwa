@extends('layout')

@section('title','Computers')
@section('cnotent')
<div>
    <ui class="flex flex-col  items-center my-7 gap-3">
        @if(count($computers) > 0)
        @foreach($computers as $computer)
        <hr class="border-t-2 w-40">
        <div class="flex items-center justify-between gap-4">
            <a href="{{ route('computers.show', ['computer'=>$computer['id']] ) }}" class="hover:text-fuchsia-600 hover:border border-gray-100 transition-transform">
                <li class="p-3 rounded-xl text-xl list-none">
                    <strong>{{ $computer['name'] }}</strong> from <strong>{{ $computer['origin'] }}</strong> <span
                        class="">{{ $computer['price'] }}$</span>
                </li>
            </a>

        </div>

        @endforeach
        @else
        <p>There are on computers to display</p>
        @endif
    </ui>

</div>
@endsection

@section('Create')
<a href="{{ route('computers.create') }}">
    <button type="submit">
        Create
    </button>
</a>
@endsection