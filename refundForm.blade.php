<!DOCTYPE html>
<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>JalanKuy: Refund Form</title>
    <style>
        body {background-color: #eceadd;}
        /* h1 {color: red;}
        p {color: blue;} */

        .container {
            padding: 5px 0px 10px 0px;
        }

        /* .container1 {
            padding: 10px 20px 0px 20px;
        } */

        input[type=text], input[type=number], textarea {
            width: 100%;
        }

        input[type=date] {
            width: 50%
        }

        input[type=text], input[type=number], input[type=date]{
            height: 30px;
        }

        input[type=file]{
            height: 45px;
        }

        .button1 {
            background-color: #143362;
            border: none;
            color: white;
            font-size: 10px;
            cursor: pointer;
        }

        .button2 {
            background-color: #FFC68F;
        }

    </style>
</head>
<body>

    <div class="container">
        <a href="/admin" class="button1" role="button">Back</a>
        <h1>Refund Form</h1>
    </div>

	<div class="container">
        @foreach($regist_form as $r)
        <h3>Event Details</h3>
        <form> {{ csrf_field() }}

            <div class="form-group">
                <b><label for="title">Title:</label></b>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter your event name here" value="{{ $r->title }}" disabled>
            </div>

            <div class="form-group">
                <b><label for="location">Location:</label></b>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter your event location here" value="{{ $r->location }}" disabled>
            </div>

            <div class="form-group">
                <b><label for="category">Category:</label></b>
                <input type="text" class="form-control" id="category" name="category" placeholder="Choose your event category" value="{{ $r->category }}" disabled>
            </div>

            <div class="form-group">
                <b><label for="price">Ticket Price:</label></b>
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter 0 if your event is free" value="{{ $r->ticket_price }}" disabled>
            </div>

            <div class="form-group">
                <table style="width:100%">
                    <tr>
                      <td><b><label for="startDate">Start Date:</label></b><br></td>
                      <td><b><label for="endDate">End Date:</label></b><br></td>
                    </tr>
                    <tr>
                      <td><input type="date" name="startDate" id="startDate" class="form-control" placeholder="DD/MM/YYYY"value="{{ $r->start_date }}" disabled></td>
                      <td><input type="date" name="endDate" id="endDate" class="form-control" placeholder="DD/MM/YYYY" value="{{ $r->end_date }}" disabled></td>
                    </tr>
                  </table>
            </div>

            <div class="form-group">
                <b><label for="eventDetails">Event Details:</label></b>
                <textarea rows="5" type="text" class="form-control" id="eventDetails" name="eventDetails" placeholder="Enter description about your event" disabled>{{ $r->event_detail }}</textarea>
            </div>

            <div class="form-group">
                <b><label for="accNumber">Account Number:</label></b>
                <input type="number" class="form-control" id="accNumber" name="accNumber" placeholder="Enter your account number for payment" value="{{ $r->account_number }}" disabled>
            </div>
        </form>
        @endforeach
    </div>

    <div class="container">
        @foreach($regist_form as $r)
        <h3>Rejected Detail</h3>
        <form action="/admin/refund-form/upload" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            <input type="hidden" name="id_form" id="id_form" value="{{ $r->id_form }}">

            <div class="form-group">
                <b><label for="issue">Detail Issue:</label></b>
                <textarea rows="5" type="text" class="form-control" id="issue" placeholder="Enter the reason for rejecting this event" name="issue"></textarea>
            </div>

            <div class="form-group">
                <b><label for="refund_proof">Proof of Refund:</label></b><br>
                <input type="file" class="form-control" id="refund_proof" placeholder="Enter the reason for rejecting this event" name="refund_proof">
            </div>

            <div class="row justify-content-center">
                <input type="submit" value="Submit" class="btn button2">
            </div>
        </form>
        @endforeach
    </div>

</body>
</html>
