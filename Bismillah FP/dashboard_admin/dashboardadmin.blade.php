@extends('template')

@section('atas')
<!--<body data-spy="scroll" data-target="#scrollnav">-->
<h3 class="text-center">Database Reg. Event</h3>
@endsection

@section('bawah')
    <div class="container">

        <!--<div class="row">
            <div class="col-lg-12 pb-3">
                <h6 class="text-brand">Project</h6>
                <h3 class="mb-4">My project during class </h3>
            </div>
        </div>-->

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach($regist_forms as $p)
                    <div class="col-12">
                        <div class="p-4 rounded-4 shadow-effect bg-base">
                            <img width="150 px" src="{{ url('/POSTER_EVENT_DB/'.$p->eventPoster) }}">
                            <h4>{{ $p->title }}</h4>
                            <p class="mb-2">{{ $p->eventLocation }} "-"" {{ $p->category }} - </p>
                            <p class="mb-0">{{ $p->eventDetail }}</p>
                            <p>
                                <a class="btn" href="Tugas1.docx" role="button" target="_blank">Detail</a>
                            </p>
                        </div>
                    </div>
                    @endforeach

                </div>
        </div>
    </div>
@endsection
</body>
<html>
