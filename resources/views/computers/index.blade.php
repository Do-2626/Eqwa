@extends('layout')

@section('title','Computers')
@section('cnotent')
<div>
    <ui class="flex flex-col  justify-center my-7 gap-3">
        @if(count($computers) > 0)
        @foreach($computers as $computer)
        <hr class="border-t-2">
        <div class="flex items-center justify-between gap-4">
            <a href="{{ route('computers.show', ['computer'=>$computer['id']] ) }}" class="hover:text-fuchsia-600">
                <li class="p-3 rounded-xl text-xl list-none">
                    <strong>{{ $computer['name'] }}</strong> from <strong>KOR</strong> <span class="">95$</span>
                </li>
            </a>
            <div class="mr-8">
                <!-- in index -->
                <button type="submit">
                    Edit
                </button>
            </div>
        </div>

        @endforeach
        @else
        <p>There are on computers to display</p>
        @endif
    </ui>

</div>
@endsection

@section('Create')
<button type="submit">
    Create
</button>
@endsection