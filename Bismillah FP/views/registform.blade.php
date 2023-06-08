@extends('template')

@section('atas')
<body data-spy="scroll" data-target="#scrollnav">
@endsection

@section('bawah')
<div class="container-fluid content">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">

            </div>
            <div class="row">
                <div margin="20px">
                    <h3>Event Organizer</h3>
                </div>
                <br>
            </div>
            <div class="row-7">
                <div class="col-md">

                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif

                    <form class="form-horizontal" action="/upload/proses" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="organizer">Organizer:</label>
                            <div class="col-sm-10">
                                <input type="text" name="organizer" class="form-control" id="organizer" placeholder="Masukkan Event Organizer">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="address">Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" class="form-control" id="address"
                                    placeholder="Masukkan alamat Anda">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="email">Contact: </label>
                            <div class="col-sm-10">
                                <input type="text" name="contact" class="form-control" id="contact" placeholder="Masukkan contact Anda">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="email">Email: </label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="idcard">Identity Card</label>
                            <div class="col-sm-10">
                                <input type="file" name="idcard" class="form-control" id="idcard">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="eventlocation">Location</label>
                            <div class="col-sm-10">
                                <input type="text" name="eventlocation" class="form-control" id="eventlocation"
                                    placeholder="Masukkan lokasi Anda">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="category">Category</label>
                            <div class="col-sm-10">
                                <input type="text" name="category" class="form-control" id="category" placeholder="Masukkan kategori Anda">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="ticketprice">Price</label>
                            <div class="col-sm-10">
                                <input type="text" name="ticketprice" class="form-control" id="ticketprice" placeholder="Masukkan ticket price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="startdate">Start Date</label>
                            <div class="col-sm-10">
                                <input type="date" name="startdate" class="form-control" id="startdate"
                                    placeholder="Masukkan start date Anda">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="enddate">End Date</label>
                            <div class="col-sm-10">
                                <input type="date" name="enddate" class="form-control" id="enddate" placeholder="Masukkan end date Anda">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="eventdetail">Event Detail</label>
                            <div class="col-sm-10">
                                <textarea name="eventdetail" class="form-control" id="eventdetail" placeholder="Masukkan event detail"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="accountNumber">Account Number: </label>
                            <div class="col-sm-10">
                                <input type="text" name="accountNumber" class="form-control" id="accountNumber" placeholder="Masukkan Account Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="payproof">Payment Proof</label>
                            <div class="col-sm-10">
                                <input type="file" name="payproof" class="form-control" id="payproof">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="poster">Event Poster</label>
                            <div class="col-sm-10">
                                <input type="file" name="poster" class="form-control" id="poster">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" value="Upload">Simpan data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</div>
</body>
</html>
