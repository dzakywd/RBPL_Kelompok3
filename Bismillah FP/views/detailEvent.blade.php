@extends('template')

@section('atas')
@foreach($event as $e)
<br>
<div class="head-of-DE">
    <h2><b><a href="/discovery"><iconify-icon icon="mdi:arrow-left-circle"></iconify-icon></a> {{ $e->title }}<b></h2>
</div>
@endforeach
@endsection

@section('bawah')
@foreach($event as $e)
<div class="content-of-DE">

    <div class="row">
        <div class="col-lg-3" style="background-color:lavender;">
            <img src="{{ url('/data_file/'.$e->event_logo) }}" class="rounded" alt="Event Logo of" width="200px" height="200px">
        </div>
        <div class="col-lg-7" style="background-color:lavenderblush;">
            <p><iconify-icon icon="lucide:calendar"></iconify-icon> {{ $e->start_date }} until {{ $e->end_date }}</p>
            <p><iconify-icon icon="mi:location"></iconify-icon> {{ $e->location }}</p>
            <p>Rating: {{ $e->event_rating }}</p>
            <a href="{{ $e->event_website }}" target="blend" class="btn" role="button" style="background-color: #FD7B46; color: white;">Get a Ticket</a>
        </div>
        <div class="col-lg-2" style="background-color:pink;">bookmark</div>
    </div>

    <br>

    <h3><b>About</b></h3>
	<p style="text-align:justify;">{{ $e->event_detail }}</p>
    <br>

    <h3><b>Last Time With Us</b></h3>
        <div id="foto" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
            <li data-target="#foto" data-slide-to="0" class="active"></li>
            <li data-target="#foto" data-slide-to="1"></li>
            <li data-target="#foto" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('/data_file/'.$e->event_poster) }}" alt="Foto1" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="{{ url('/data_file/'.$e->event_poster) }}" alt="Foto2" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="{{ url('/data_file/'.$e->event_poster) }}" alt="Foto3" width="1100" height="500">
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#foto" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#foto" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    <br>
    <br>

    <h3><b>What People Say About Us</b></h3>
    @foreach ($rating as $r)
        <div class="card">
            <div class="card-body">
                <h4><b>{{ $r->nama }}</b></h4>
                <p>Rating: {{ $r->rating }} out of 5</p>
                <p style="text-align:justify;">{{ $r->review }}</p>
                <hr>
                <p>waktu ngasih komen</p>
            </div>
        </div>
    @endforeach

    <div class="card">
        <div class="card-body">
            <h4><b>nama user yang login saat ini</b></h4>
            <form action="xxx" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id_event" id="id_event" value="{{ $r->id_event }}">

                {{-- <div class="form-group row">
                    <label class="col-sm-1" for="rating"><b>Rating:</b></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="rating" name="rating" placeholder="Enter 1-5 for this event">
                    </div>
                    <label class="col-sm-8">out for 5</label>
                </div> --}}
                <div class="form-inline">
                    <label for="rating" class="mr-sm-3 mb-3"><b>Rating: </b></label>
                    <input type="number" class="form-control mr-sm-3 mb-3" id="rating" name="rating" placeholder="Enter 1-5 for this event">
                    <label class="mb-3"> out for 5</label>
                </div>

                <div class="form-group row">
                    <div class="col-sm-11">
                        <textarea type="text" class="form-control" id="review" placeholder="Share your thought about this event" name="review"></textarea>
                    </div>
                    <div class="col-sm-1" style="margin: auto">
                        <button type="button" class="btn1"><iconify-icon icon="iconamoon:send"></iconify-icon></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br>

</div>
@endforeach

@endsection
