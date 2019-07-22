@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chat</div>

                <div class="card-body">
                    <div class="chat p-3 border">
                        @foreach($AllMessage as $message)
                            <div class="w-100">
                                @if(auth()->check() && $message->user_id == Auth::user()->id)
                                    <p class="text-right text-info">{{$message->message}}:{{$message->getUser->name}}</p>
                                @else
                                    <p class="text-left">{{$message->getUser->name}}:{{$message->message}}</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <form action="{{ route('create.chat') }}" method="post">
                        @csrf
                        <div class="form-group mt-2 mb-2">
                            @if ($errors->has('message'))
                                <p role="alert" class='text-danger'><strong>{{ $errors->first('message') }}</strong></p>
                            @endif
                            <textarea name="message" required="required" class="form-control"></textarea>
                        </div>
                        <div>
                            <button class="w-100 btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
