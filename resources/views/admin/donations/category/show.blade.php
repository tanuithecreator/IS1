@extends('admin.donation.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show donation Detail
                            <a href="{{ url('donation') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Name</label>
                            <p>
                                {{ $donation->name }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <p>
                                {!! $donation->description !!}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Status</label>
                            <br/>
                            <p>
                                {{ $donation->status == 1 ? 'checked':'' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection