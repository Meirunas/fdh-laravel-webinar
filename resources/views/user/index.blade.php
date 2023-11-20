@extends('layouts.app')

@section('styles')
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        User List
                        <a class="btn btn-success float-end" href="{{ route('users.create') }}">Add New User</a>
                    </h4>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" style="margin-top: 20px;">
                            <tr>
                                <th class="text-center">No</th>
                                <th>First Name</th>
                                <th>Surname</th>
                                <th>Email</th>
                                <th class="text-center" width="240px">Action</th>
                            </tr>
                            @forelse ($users as $user)
                                <tr>
                                    <td class="text-center">{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->surname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                                            <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Show</a>

                                            <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No data available in table</td>
                                </tr>
                            @endforelse
                        </table>
                        {!! $users->links() !!}
                    </div>
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





