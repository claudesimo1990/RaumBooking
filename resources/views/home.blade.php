@extends('layouts.master2')



@section('nav')

@include('includes.nav')

@stop
<br><br><br><br><br><br>
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
<br><br><br><br><br><br>
@endsection
