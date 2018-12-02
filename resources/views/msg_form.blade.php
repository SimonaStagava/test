@extends('layouts.msg_form');

@section('content')
    <div class="formTitle">
        <h3><b>Write some message</b></h3>
    </div>
    <div class="container formBox">

    @include('partials.errors')

        <div class="form">
            {!! Form::open(['url' => 'blog', 'method' => 'POST']) !!}
            <div class="msgForm">

                @csrf

                {{Form::label('name', 'Your name')}}
                {{Form::text('name', '', ['placeholder' => 'Name'])}}
            </div>
            <div class="msgForm">
                {{Form::label('email', 'Your email')}}
                {{Form::email('email', '', ['placeholder' => 'example@gmail.com'])}}
            </div>
            <div class="msgForm">
                {{Form::label('message', 'Your message')}}
                {{-- {{Form::textarea('message', '', ['placeholder' => 'Write your message here...'])}} --}}
                <textarea name="message" type="text" placeholder="Write your message here..."></textarea>
            </div>
            {{Form::submit('SUBMIT', ['class' => 'btn'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection