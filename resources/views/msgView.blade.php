@extends('layouts.msgView')

@section('content')
    <div class="title">
        <h3>Message sent from {{$name->name}}</h3>
    </div>
    <div class="msgView">
        <div>
        <p>{{$name->message}}</p>
        <p>{{$name->created_at}}</p>
        <p>{{$name->email}}</p>
        </div>
    </div>
@endsection