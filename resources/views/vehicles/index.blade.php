@extends('layouts.header')

@extends('layouts.topbar')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-10">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->

                    <div
                        class="card-header bg-gradient-success py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Your Vehicles</h6>
                        <div class="justify-content-end">
                            <a href="{{ route('vehicles.create') }}" class="btn btn-success btn-sm justify-content-end" > Add Vehicle</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header font-weight-bolder">User Vehicles</div>
                            <div class="card-body">
                                @if($vehicles->count()> 0)
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">Make</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">plate_number</th>
                                            <th scope="col">Date added</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($vehicles as $vehicle)
                                            <tr>
                                                <th>{{ $vehicle->id }}</th>
                                                <th>{{ $vehicle->year }}</th>
                                                <th>{{ $vehicle->make }}</th>
                                                <th>{{ $vehicle->model }}</th>
                                                <th>{{ $vehicle->plate_number }}</th>
                                                <th>{{ $vehicle->created_at }}</th>
                                                <th>
                                                    <a href="" class="btn btn-info">Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h3 class='text-center alert alert-danger'>No Vehicles added</h3>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

{{--    <!-- Modal -->--}}
{{--    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header bg-gradient-primary text-white">--}}
{{--                    <h5 class="modal-title " id="staticBackdropLabel">Add Driver</h5>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <form method="POST" action="{{ route('users.store') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="national_id" class="col-md-4 col-form-label text-md-end">{{ __('National ID') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="national_id" type="text" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" required autocomplete="national_id">--}}

{{--                                @error('national_id')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="dob" class="col-md-4 col-form-label text-md-end">{{ __('Date Of Birth') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('national_id') }}" required autocomplete="dob">--}}

{{--                                @error('dob')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Submit') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


@endsection
