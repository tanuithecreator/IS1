@extends('admin.donations.category.layout')

@section('content')

    <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @session('status')
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endsession

                    <div class="card">
                        <div class="card-header">
                            <h4>donations List
                                <a href="{{ url('donation/create') }}" class="btn btn-primary float-end">Add donation</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-stiped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($donations as $donation)
                                    <tr>
                                        <td>{{ $donation->id }}</td>
                                        <td>{{ $donation->name }}</td>
                                        <td>{{ $donation->amount }}</td>
                                        <td>
                                            <a href="{{ route('donation.edit', $donation->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ route('donation.show', $donation->id) }}" class="btn btn-info">Show</a>

                                            <form action="{{ route('donation.destroy', $donation->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $donations->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection