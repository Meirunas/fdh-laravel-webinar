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
                    <h4 class="card-title">Edit User: {{ $user->name . ' ' . $user->surname }}</h4>
                </div>
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">First Name</label>
                            <input type="text" name="name" class="form-control" placeholder="First Name"
                                value="{{ $user->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="surname" class="form-label">Surname</label>
                            <input type="text" name="surname" class="form-control" placeholder="Surname"
                                value="{{ $user->surname }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email"
                                value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-secondary" href="{{ route('users.index') }}">Cancel</a>
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
