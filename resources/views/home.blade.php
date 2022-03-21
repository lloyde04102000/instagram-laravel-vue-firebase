@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-header">
            Add INSTA User
        </div>
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add User
            </button>
        </div>
    </div>

    @include('add')

    <div class="card">
        <div class="card-header">
            Users' Table
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($insta_users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->email_address }}</td>
                        <td>{{ $item->contact_number }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <a href="{{ '#update' . $item->id }}" title="Edit User" data-toggle="modal"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                            <form method="POST" action="{{ url('insta' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm('&quot;Confirm Delete?&quot')"><i class="fa fa-trash-alt" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    @include('edit')
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="example"></div>

    <script src="{{ mix('js/app.js') }}"></script>
</div>
@endsection
