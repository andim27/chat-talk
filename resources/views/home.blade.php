@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Team view</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row justify-content-center">
                        {{--<user-component></user-component>--}}
                        <chat-component></chat-component>
                        <send-component></send-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
