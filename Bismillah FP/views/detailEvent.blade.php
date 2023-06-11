@extends('template')

@section('atas')

<script>
    function share_link() {
        var copy_link = document.getElementById("website_link");
        const content = document.querySelector(".content-of-DE"),
        copied = content.querySelector(".copied-message");

        copy_link.select();
        copy_link.setSelectionRange(0, 99999);

        navigator.clipboard.writeText(copy_link.value);

        copied.style.opacity = "1";
        setTimeout(() => {
            copied.style.opacity = "0";
        }, 3000);
    }
</script>

@foreach($event as $e)
<br>
<div class="head-of-DE">
    <h2><b>
        <a href="/discovery">
            <iconify-icon icon="mdi:arrow-left-circle" style="vertical-align: -0.175em;"></iconify-icon>
        </a> {{ $e->title }}<b></h2>
</div>
@endforeach
@endsection

@section('bawah')
@foreach($event as $e)
<div class="content-of-DE">

    <div class="row">
        <div class="col-lg-3">
            <img src="{{ url('/data_file/'.$e->event_logo) }}" class="rounded" alt="Event Logo of {{ $e->title }}" width="200px" height="200px">
        </div>
        <div class="col-lg-7" style="margin:auto">
            <p><iconify-icon icon="material-symbols:calendar-month" width="23" height="23" style="vertical-align: -0.31em;"></iconify-icon>
                {{ $e->start_date }} until {{ $e->end_date }}
            </p>

            <p><iconify-icon icon="mi:location" width="23" height="23" style="vertical-align: -0.35em;"></iconify-icon>
                {{ $e->location }}
            </p>

            <p>Rating: {{ $e->event_rating }} out of 5</p>
            <a href="{{ $e->event_website }}" target="blend" class="btn2" role="button">Get a Ticket</a>

            <button style="background: none; border:none; color: var(--biru-paling-tua)" onclick="share_link()">
                <iconify-icon icon="material-symbols:share" width="28" height="28" style="vertical-align: -0.5em;"></iconify-icon>
            </button>
            <input type="text" value="{{url('detail-event/'.$e->id_event)}}" id="website_link" style="opacity: 0; pointer-events: none;">
        </div>
        <div class="col-lg-2">
            <a style="color: var(--biru-paling-tua)">
                <iconify-icon icon="material-symbols:bookmark-outline" width="35" height="35" style="float:right"></iconify-icon>
            </a>
        </div>
    </div>

    <div class="copied-message row">
        <div class="col-lg-2">
            <iconify-icon icon="icon-park-outline:check-one" width="40" height="40" style="float: right; color: #47D065"></iconify-icon>
        </div>
        <div class="col-lg-10">
            <h5><b>Copied to Clipboard!<b></h5>
            <p>The link into this page has been copied to your clipboard</p>
        </div>
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
            <form action="/detail-event/upload-review" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id_event" id="id_event" value="{{ $e->id_event }}">

                <div class="form-inline">
                    <label for="rating" class="mr-sm-3 mb-3"><b>Rating: </b></label>
                    <input type="number" class="form-control mr-sm-3 mb-3" id="rating" name="rating" placeholder="Enter 1-5 for this event">
                    <label class="mb-3"> out for 5</label>
                </div>

                <div class="form-group row">
                    <div class="col-sm-11">
                        <textarea type="text" class="form-control" id="review" placeholder="Share your thought about this event" name="review"></textarea>
                    </div>
                    <div class="col-sm-1" style="margin: auto;">
                        <button type="submit" class="btn1"><iconify-icon icon="iconamoon:send"></iconify-icon></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br>

</div>
@endforeach

@endsection
