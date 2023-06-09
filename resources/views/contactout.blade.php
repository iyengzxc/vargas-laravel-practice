@extends('layout.app')

@section('content')
   <h1>Thank you {{ $name }}</h1>
   <p>Your message "{{$message}}" has been submitted.</p>
   <p>Submitted by your email address {{$email}}</p>
@endsection

@section('title')
    Contact Us Page - Output
@endsection