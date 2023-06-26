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
                        <h6 class="m-0 font-weight-bold text-white">Chats</h6>
                    </div>

                    <div class="col-lg-9 col-md-9">
                        <div class="card chat-card">
                            <div class="card-header">
                                <h5>Chat</h5>
                                <div class="card-header-right">
                                    <div class="btn-group card-option">
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="feather icon-more-horizontal"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @foreach($chats as $chat)
                                    <div class="row m-b-20 received-chat">
                                        <div class="col-md-8 border border-dark">
                                            <h6 class="font-weight-bolder">{{ $chat->user->name }}</h6>
                                            <span> ({{ $chat->created_at }})</span>
                                            <div class="msg">
                                                <p class="m-b-0">{{ $chat->message }}</p>
                                            </div>

                                            <div class="justify-content-end border border-warning">
                                                @if($chat->message === 'hi')
                                                    <p class="float-right">how can we help you</p>
                                                @else
                                                    <p class="float-right">Sorry i didnt understand your question</p>
                                                @endif

                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                @endforeach
                                <div class="form-group m-t-15">
                                    <form action="{{ route('chats.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control">
                                        <input type="text" name="message" class="form-control" placeholder="Send Message">
                                        <div class="form-icon">
                                            <button type="submit" class="btn btn-primary btn-icon">
                                                <i class="feather icon-message-circle">Submit</i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->




@endsection
