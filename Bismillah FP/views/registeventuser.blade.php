@extends('templatenobg2')
@section('body')
    <div class="container display-flex align-items-center">
        <div class="row">
            <div class="col-lg-9" style="background-color: #D9D9D9; margin: auto auto auto 20px; border-radius: 15px;">
                <h5  class="title-settings" style="margin-top: 10px; margin-bottom: 10px;">Register Event</h5>
            </div>
            <div class="col-lg-2 d-flex justify-content-center align-items-center" style="margin-right: 10px;">
                <iconify-icon icon="ic:outline-notifications-none" style="font-size: 28px; color: black; background-color: #FFC68F; border-radius: 100%; padding: 7px;"></iconify-icon>
                <iconify-icon icon="iconamoon:profile-circle-fill" style="font-size: 50px; color: #143362; opacity: 70%; vertical-align: -0.09em;"></iconify-icon>
            </div>

            <div class="col-xl-12 col-lg-12">
                <div class="row">
                    @foreach($regist_forms as $p)
                    <div class="col-12" id="set_dtl">
                        <div class="p-4 whitecard rounded-4 shadow-effect white">
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-lg-2">
                                    <img width="90 px" src="{{ url('/POSTER_EVENT_DB/'.$p->event_poster) }}" class="img-fluid image">
                                </div>
                                <div class="col-lg-10 content-event">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="judul1">{{ $p->title }}</h4>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-event">{{ $p->eventLocation }} - {{ $p->category }}</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="text-event"><iconify-icon icon="uil:calender" style="font-size: 20px; color: #143362; vertical-align: -0.2em;"></iconify-icon>  <span>26-25 september 2023</span></p>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-0 text-truncate text-event" style="max-width: 150px;">{{ $p->eventDetail }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top row d-flex justify-content-end">
                                <a class="btn" data-toggle="modal" data-target="" role="button">Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div>
                    <a href=""><iconify-icon icon="mdi:add-bold" style="font-size: 40px; color:#143362; background-color:#FFC68F; border-radius: 100%; padding: 10px; position: fixed; bottom: 2em; display: flex;"></iconify-icon></a>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--

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
 --}}

