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
                        <h6 class="m-0 font-weight-bold text-white">Add Clamps</h6>
                        <div class="justify-content-end">
                            <a href="{{ route('clamps.index') }}" class="btn btn-success btn-sm justify-content-end" >Back</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <button id="coordinatesBtn" class="btn btn-primary">Get Coordinates</button>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Coordinates</h3>
                                    <div id="coordinates" class="alert alert-info"></div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Current Time</h3>
                                    <div id="currentTime" class="alert alert-info"></div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <form action="{{ route('clamps.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <input type="text" id="latitudevalue" name="latitude" value="">
                                            <input type="text" id="longitudevalue" name="longitude" value="">

                                            <div class="form-group col-md-12">
                                                <h3>Upload Photo</h3>
                                                <input type="file" name="image" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <h3>Reason for Clamp</h3>
                                                <textarea class="form-control" name="reason" id="" cols="15" rows="3"></textarea>
                                            </div>

                                            <div class="col-md-8 mt-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    function getCoordinates() {
                                        if (navigator.geolocation) {
                                            navigator.geolocation.getCurrentPosition(showCoordinates);
                                        } else {
                                            console.log("Geolocation is not supported by this browser.");
                                        }
                                    }

                                    function showCoordinates(position) {
                                        var latitude = position.coords.latitude;
                                        var longitude = position.coords.longitude;
                                        var coordinates = "GPS Coordinates: " + latitude + ", " + longitude;
                                        document.getElementById("coordinates").innerHTML = coordinates;
                                        document.getElementById("latitudevalue").value = latitude;
                                        document.getElementById("longitudevalue").value = longitude;
                                    }

                                    function getCurrentTime() {
                                        var currentTime = new Date().toLocaleString();
                                        document.getElementById("currentTime").innerHTML = "Current Time: " + currentTime;
                                    }

                                    document.getElementById("coordinatesBtn").addEventListener("click", function() {
                                        getCoordinates();
                                        getCurrentTime();
                                    });
                                });
                            </script>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

@endsection
