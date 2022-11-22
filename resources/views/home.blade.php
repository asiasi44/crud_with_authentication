@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
            </div>
            <br>
            <a class = "btn btn-info" href="{{ url('/crud') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Go to crud page</a>
        </div>
    </div>
</div>
@endsection
