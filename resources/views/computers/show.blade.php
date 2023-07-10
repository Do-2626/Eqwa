@extends('layout')

@section('title','Show')
@section('cnotent')
<h3>
    <trong>{{ ($computer['name']) }}</strong> is from <strong>{{ ($computer['origin']) }}</strong>
        <strong>{{ ($computer['price']) }}$</strong>
</h3>
<div class="flex items-center gap-1 mt-8">
    <form action="{{ route('computers.destroy',['computer' => $computer['id']]) }}" method="post">
        @csrf
        @method('DELETE')
        <button value="delete" class="" type="submit">
            Delete
        </button>
    </form>
    <a href="{{ route('computers.edit', ['computer'=>$computer['id']] ) }}">
        <div class="">
            <button type="submit">
                Edit
            </button>
        </div>
    </a>
</div>
@endsection