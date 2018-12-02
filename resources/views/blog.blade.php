@extends('layouts.blog')

@section('content')
    <div class="container box">
        <div class="title">
          <h3>Users messages</h3>
        </div>
        <div class="msgBox">
            @if(count($msgs) > 0)
                @foreach($msgs as $msg)
                    <div class="msgs">
                        <h4>From: {{ $msg->name }}</h4>
                        <p>{{ $msg->message }}</p>
                        <a href="/blog/{{ $msg->id }}">View <i class="fas fa-eye"></i></i></a>
                    </div>
                @endforeach
                {{$msgs->links()}}
            @else
                <h4>No posts found</h4>
            @endif
        </div>
    </div>    
@endsection