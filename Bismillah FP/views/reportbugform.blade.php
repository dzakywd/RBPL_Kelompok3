<!DOCTYPE html>
<html>
<head>
	<title>Report a Bug</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JalanKuy Inc.</title>
       <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins&display=swap" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style></style>
</head>


<body style="background: url('https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162007.jpg?w=740&t=st=1684284565~exp=1684285165~hmac=df08a23e4806ce7c2de03875c1c4471337375643ba3815704d925e0817456dbf') no-repeat center fixed; background-size: cover">
    <div class="container align-items-center display-flex" style="margin-top: 30px;">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col col-lg-10 height-100 d-inline-block" style="background-color:  #eceadd; margin: auto; border-radius: 15px;">
                <h5 style="margin-top: 10px; margin-bottom: 10px;">Settings</h5>
            </div>
            <div class="col-md-2 sm-2 justify-content-center">
                <i class="fa fa-bell-o w-" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 justify-content-center" style="background-color:  #eceadd; margin: auto; border-radius: 15px;">
                <div class="container" style="margin-top: 20px; margin-bottom: 70px;">
                    <div class="row">
                        <div class="col-lg-1 md-2">
                            <a href="/settings" class="button"><img src="https://api.iconify.design/ion/arrow-back-circle.svg" style="width:34px; height:34px">
                            </a>
                        </div>
                        <div class="col-lg-10 md-10">
                            <form action="/settings/reportbug/success" method="post">
                                <div class="row">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                                    <h4 style="margin-bottom: 20px;">Report a Bug</h4>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="reportdetails" id="reportdetails" placeholder="What is the problem?" style="height: 200px; width:800px; margin-bottom: 10px; border-radius: 15px; background-color: #D9D9D9"></textarea>
                                    <input type="date" value="<?php echo date("Y-m-d");?>" name="reportdate" id="reportdate" style="margin-bottom: 10px;border-radius: 10px; background-color: #D9D9D9;">
                                </div>
                                <div class="d-flex flex-row-reverse justify-content-end">
                                    <input type="submit" class="btn" value="simpan" title="Send!" style="border-radius: 10px; background-color: #FFC68F;">
                                </div>
                            </form>
                      </div>
                      <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
