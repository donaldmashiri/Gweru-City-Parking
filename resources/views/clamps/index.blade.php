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

                   <h3>
                       @include('partials.errors')
                   </h3>

                    <div
                        class="card-header bg-gradient-success py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Clamps</h6>
                        <div class="justify-content-end">
                            <a href="{{ route('clamps.create') }}" class="btn btn-primary btn-sm justify-content-end" >Add Clamp</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <h1>All Clamps</h1>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ref#</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Plate Number</th>
                                <th>Vehicle Owner</th>
                                <th>Image</th>
                                <th>Reason</th>
                                <th>Clamped By</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clamps as $clamp)
                                <tr>
                                    <td>GCC-00{{ $clamp->id }}</td>
                                    <td>{{ $clamp->latitude }}</td>
                                    <td>{{ $clamp->longitude }}</td>
                                    <td>{{ $clamp->plate_number }}</td>
                                    <td>{{ $clamp->user->name }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $clamp->image) }}" alt="Clamp Image" width="100" height="60">
{{--                                        <img src="{{ asset('storage/' . $clamp->image) }}" alt="Clamp Image">--}}
                                    </td>
                                    <td>{{ $clamp->reason }}</td>
                                    <td>Marshalls</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->




@endsection
