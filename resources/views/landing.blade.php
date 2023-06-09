@extends('layout.app')

@section('content')
<h1>You are on the Landing Page</h1>


@if(auth()->check())
<div>
    Para lang sa mga nakalogin
</div>
@endif
@endsection

@section('title')
    Landing Page
@endsection