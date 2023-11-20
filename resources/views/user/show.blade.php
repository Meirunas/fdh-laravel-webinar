@extends('layouts.app')

@section('styles')
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Show User: {{ $user->name . ' ' . $user->surname }}</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-4 col-form-label">First Name: </label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="name"
                                value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="surname" class="col-sm-4 col-form-label">Surname: </label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="surname"
                                value="{{ $user->surname }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-4 col-form-label">Email: </label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="email"
                                value="{{ $user->email }}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-secondary" href="{{ route('users.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
