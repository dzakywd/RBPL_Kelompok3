@extends('template')

@section('atas')
<!--<body data-spy="scroll" data-target="#scrollnav">-->
<h3 class="text-center">Database Reg. Event</h3>
@endsection

@section('bawah')
    <div class="container-fluid">

        <div class="row content">
            <div class=" col-xl-12 col-lg-12">
                <div class="row">
                    @foreach($regist_forms as $p)
                    <div class="col-12">
                        <div class="p-4 rounded-4 shadow-effect white">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <img width="90 px" src="{{ url('/POSTER_EVENT_DB/'.$p->eventPoster) }}" class="img-fluid">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <h4>{{ $p->title }}</h4>
                                <p class="mb-2">{{ $p->eventLocation }} - {{ $p->category }} </p>
                                <p class="mb-0">{{ $p->eventDetail }}</p>
                                <p>
                                    <a class="btn" href="#popup" role="button">Detail</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
        </div>

        @foreach($regist_forms as $p)
        <div class="popup" id="popup">
            <div class="popup-content">
                <div class="popup-img">
                    <img width="90 px" src="{{ url('/POSTER_EVENT_DB/'.$p->eventPoster) }}">
                </div>
                <div class="popup-general">
                    <h4>General Information</h4>
                    <div class="col-4">
                        <h5>Event Name</h5>
                        <p>{{ $p->title }}</p>
                    </div>
                    <div class="col-4">
                        <h5>Location</h5>
                        <P>{{ $p->eventLocation }}</P>
                    </div>
                    <div class="col-4">
                        <h5>Category</h5>
                        <P>{{ $p->category }}</P>
                    </div>
                </div>
                <div class="popup-details">
                    <h5>Event Details</h5>
                    <p>{{ $p->eventDetail }}</p>
                </div>
                <div class="btn">
                    <button>Approve</button>
                    <button>Reject</button>
                </div>
            </div>

        </div>
        @endforeach
    </div>
@endsection
</body>
<html>
