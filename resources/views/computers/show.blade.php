@extends('layout')

@section('title','Show')
@section('cnotent')
<h3><strong>{{ ($computer['name']) }}</strong> is from <strong>{{ ($computer['origin']) }}</strong></h3>
@endsection