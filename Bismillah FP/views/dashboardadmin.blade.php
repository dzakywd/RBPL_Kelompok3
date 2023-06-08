@extends('template')

@section('atas')
<!--<body data-spy="scroll" data-target="#scrollnav">-->
{{-- <h3 class="text-center">Database Reg. Event</h3> --}}
@endsection

@section('bawah')
    <div class="container-fluid">

        <div class="row content">
            <div class=" col-xl-12 col-lg-12">
                <div class="row">
                    @foreach($regist_forms as $p)
                    <div class="col-12" id="set_dtl">
                        <div class="p-4 rounded-4 shadow-effect white">
                            <div class="col-5">
                                <img width="90 px" src="{{ url('/POSTER_EVENT_DB/'.$p->eventPoster) }}" class="img-fluid image">
                            </div>
                            <div class="col-7">
                                <div class="row">
                                    <h4>{{ $p->title }}</h4>
                                </div>
                                <div class="row">
                                    {{ $p->eventLocation }} - {{ $p->category }}
                                </div>
                                <div class="row">
                                    <p class="mb-0 text-truncate" style="max-width: 150px;">{{ $p->eventDetail }}</p>
                                </div>
                                {{-- <p class="mb-2">{{ $p->eventLocation }} - {{ $p->category }} </p> --}}

                                <p>
                                    <a class="btn" data-toggle="modal" data-target="#popupEvent" role="button">Detail</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
        </div>
        <div class="modal fade" id="popupEvent" tabindex="-1" role="dialog" aria-labelledby="popupEvent" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="popTitle">Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-left">
                                General Information
                                <div class="row">
                                    <div class="col-2">
                                        <img width="90 px" src="{{ url('/POSTER_EVENT_DB/'.$p->eventPoster) }}" class="img-fluid image">
                                    </div>
                                    <div class="col-5">
                                        <div class="row">
                                            <div id="title">
                                                {{ $p->title }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div id="category">
                                                {{ $p->category}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-5">
                                        <div>
                                            {{ $p->startDate}}
                                        </div>
                                    </div>
                                </div>

                                    Event Details:
                                    <span>
                                        {{ $p->eventDetail }}
                                    </span>

                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Reject</button>
                  <button type="button" class="btn btn-primary">Accept</button>
                </div>
              </div>
            </div>
          </div>
@endsection
</body>

<script>
    $(document).ready(function()
    $(document).on('click', '#set_dtl', function() (
    var title = $(p).data('title'):
    var category = $(p).data('category');
    var eventDetail = s(p).data('eventDetail'):
    var eventLocation = $(p).data('eventLocation');
    var eventPoster = $(p).data('eventPoster');
    $('#title' ).text(title);
    f('#category' ).text(category)
    $('#eventDetail').text(eventDetail):
    $('#eventLocation').text(eventLocation);
    $('#image').prop('src', '/POSTER_EVENT_DB/'+$eventPoster);

</script>
<html>
