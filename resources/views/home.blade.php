@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Welcome to Your Dashbpoard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/person/create">Register Member</a><br>
                    <a href="/person/viewall">View Member(s)</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
