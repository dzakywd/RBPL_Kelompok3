<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn.dribbble.com/userupload/7740149/file/original-48a39c2d5d7d49ba6a384eea98e116f0.png?compress=1&resize=400x333" style="width=100%">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <style>
        *{
            font-family: 'Lexend', sans-serif;
        }

        .container-fluid{
        }

        #sidebar-kiri{
            background-color: yellow;
            width: 250px;
            background: white;
            border-radius: 0 25px 25px 0;
            position: -webkit-sticky;
        }

        #sidebar-kiri .logo{
            display: flex;
        }

        #sidebar-kiri .logo img{
            margin: 25px auto;
        }

        #sidebar-kiri .list{
            display: flex;
            width: 200px;
            height: 71px;
            left: 201px;
            top: 208px;
            border-radius: 22px;
            margin: 25px 25px;
            padding-left: 10px ;
        }

        #sidebar-kiri .list:hover{
            background: #FFC68F;
            transition: ease-in-out 50ms;
        }

        #sidebar-kiri .list .icon{
            /* display: flex; */
            height: 40px;
            width: 40px;
            margin: auto 0;
        }

        #sidebar-kiri .list .menu{
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 15px;
            line-height: 40px;
            display: flex;
            align-items: center;
            color: #143362;
            margin-left: 10px;
        }
        .overall {
            width:100%;
        }
        #content{
            padding: 30px;
            position: relative;
            overflow-y: scroll;
            max-height: 100%;
            width: 75%;
            float:left;
        }
        #content::after{
            clear:both;
        }
        #content::-webkit-scrollbar{
            width:0;
        }

        #content h2{
            /* width: 300px;
            height: 48px; */
            margin: 0;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: bold;
            font-size: 25px;
            line-height: 48px;
            align-items: center;
            color: #143362;
        }

        #content h3{
            /* width: 327px;
            height: 23px; */
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 22px;
            color: #5F647E;
        }

        #sidebar-kanan{
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162007.jpg?w=740&t=st=1684284565~exp=1684285165~hmac=df08a23e4806ce7c2de03875c1c4471337375643ba3815704d925e0817456dbf ");
            background-size: cover;
            border-radius: 25px 0 0 25px;
            width:25%;
            float:left;
        }

        #sidebar-kanan .tombol{
            grid-row: 1;
            margin-top: 10px;
        }

        #sidebar-kanan .tombol #hide{
            margin: 20px;
            height: 35px;
            width: 35px;
        }

        #sidebar-kanan .tombol #lonceng{
            float: right;
            margin: 20px;
            height: 35px;
            width: 35px;
        }

        #sidebar-kanan .profilepic{
            margin: auto auto;
            width: 120px;
            height: 120px;
            background-image: url("Logo Icon/Mark.svg"); /*nanti ambil dr database */
            background-size: cover;
            border-radius: 100%;
        }

        #sidebar-kanan #name{
            margin: 0 auto;
            margin-top: 10px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            color: #FFFFFF;
        }

        #sidebar-kanan #status{
            margin: 0 auto;
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.85);

        }

        #sidebar-kanan #intro{
            margin: auto;
            margin-top: 250px;
            height: 33px;
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 30px;
            align-items: center;
            text-align: center;
            color: rgba(255, 255, 255, 0.77);
        }

        #sidebar-kanan #generate{
            position: relative;
            margin-left: 48px;
            width: 130px;
            height: 50px;
            background: #F3E177;
            border-radius: 14px;
        }

        .icon iconify-icon{
            font-size: 30px;
            color:#143362;
        }

        :root {
            --sidbar-width: 240px;
            --background-base: #ECEADD;
            --biru-paling-tua: #143362;
            --biru-tengah: #3569A5;
            --biru-muda: #69A8DB;
            --biru-paling-muda: #C9DAE8;
            --kuning: #F3E177;
            --orange-tua: #FD7B46;
            --orange-muda:#FFC68F;
        }

        /* esty punya */
        .list {
            cursor: pointer;
            padding: 0px;
            margin:0px;
        }

        .bg-settings {
            background-color:  white;
            margin: auto;
            border-radius: 15px;
        }

        .title-settings {
            font-family: poppins;
            font-size: 20px;
            font-weight: 900;
            color: #143362;
        }

        /* jopi punya */
        .btn {
            margin-top: 15px;
            padding: 8px 18px;
            font-weight: 600;
            margin: 10px;
            border-radius: 30px;
            border-collapse: separate;
            border-spacing: 15px 50px;
            background: var(--orange-muda);
            position: right;
            color: var(--biru-paling-tua);
            border: none;
            outline: none;
        }

        .btnkotak {
            margin-top: 15px;
            padding: 8px 18px;
            font-weight: 600;
            margin: 10px;
            border-radius: 15px;
            border-collapse: separate;
            background: var(--orange-muda);
            position: right;
            color: var(--biru-paling-tua);
            border: none;
            outline: none;
        }
        .whitecard {
            background: white;
            margin: 10px;
            border-radius: 30px;
            border-collapse: separate;
            border-spacing: 15px 50px;
        }
        .darkcard {
            background:#D9D9D9;
            margin: 10px;
            border-radius: 30px;
            border-collapse: separate;
            border-spacing: 15px 50px;
        }
        .judul1 {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 48px;
            display: flex;
            align-items: center;
            color: var(--biru-paling-tua);
            padding: 0px;
        }

        .judul2{
            left: 131px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 27px;
            line-height: 48px;
            display: flex;
            align-items: center;
            color: var(--biru-paling-tua);
        }

        .subjudul {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
            display: flex;
            align-items: center;
            color: #5F647E;
        }
        
        /* jihan punya */
        
        /* HIDE INPUT NUMBER ARROWS */
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }

        .head-of-DE {
            background-color: #D9D9D9;
            color: var(--biru-paling-tua);
            padding-top: 7px;
            padding-bottom: 5px;
            padding-left: 20px;
            border-radius: 15px;
            align-items: center;
        }

        .head-of-DE a, i {
            color:var(--biru-paling-tua);
            width: 20px;
            height: 20px;
        }

        .content-of-DE {
            border-radius: 15px;
            padding-top: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
            padding-left: 30px;
            background-image: linear-gradient(180deg,rgba(255, 255, 255, 0.2), #d9d9d9), url("https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162007.jpg?w=740&t=st=1684284565~exp=1684285165~hmac=df08a23e4806ce7c2de03875c1c4471337375643ba3815704d925e0817456dbf%20");
            background-size: cover;
        }

        .content-of-DE h3 {
            color:var(--biru-paling-tua);
        }

        .content-of-DE textarea {
            background-color: var(--biru-paling-muda);
            border-radius: 15px;
        }

        .content-of-DE .card {
            border-radius: 15px;
            margin-bottom: 20px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .content-of-DE .btn1 {
            padding: 5px 15px;
            font-weight: 600;
            border-radius: 15px;
            background: var(--orange-muda);
        }

        .content-of-DE .btn2 {
            color: white;
            background: var(--orange-tua);
            border-radius: 12px;
            padding: 10px 20px;
        }

        .copied-message {
            background: white;
            border-radius: 15px;
            padding: 5px 10px;
            align-items: center;
            margin: auto;
            width: 500px;
            z-index: 1;
            position: absolute;
            top: 25px;
            left: 1px;
            right: 1px;
            box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
            opacity: 0;
            pointer-events: none;
            /* transform: translate(-50%, -50%) scale(1.2); */
            transition: top 0s 0.2s ease-in-out,
                        opacity 0.2s 0s ease-in-out,
                        transform 0.2s 0s ease-in-out;
        }

        .copied-message h5 {
            color:black;
            margin: auto;
        }

        .copied-message p {
            color:#666666;
            font-size: 13px;
            margin: auto;
        }

        .content-of-RF {
            border-radius: 15px;
            padding-top: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
            padding-left: 30px;
            background-image: linear-gradient(rgba(255,255,255,0.6), rgba(255,255,255,0.6)), url("https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162007.jpg?w=740&t=st=1684284565~exp=1684285165~hmac=df08a23e4806ce7c2de03875c1c4471337375643ba3815704d925e0817456dbf%20");
            background-size: cover;
        }

        .content-of-RF .btn {
            padding: 5px 15px;
            font-weight: 600;
            border-radius: 10px;
            background: var(--orange-muda);
            color: var(--biru-paling-tua);
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="background: url('https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162007.jpg?w=740&t=st=1684284565~exp=1684285165~hmac=df08a23e4806ce7c2de03875c1c4471337375643ba3815704d925e0817456dbf') no-repeat center fixed; background-size: cover">
        <div class="row" id="overall"> <!--style kalo background polos "background-color: #eceadd; background-size: cover"-->
            <div class="col-2.5" id="sidebar-kiri">
                <div class="logo" id="logo">
                    <img src="https://cdn.dribbble.com/userupload/7740475/file/original-1c2b7b06e20f7bc7575aa8c140e77724.png?compress=1&resize=600x400" alt="" style="max-width: 149px; height: auto;">
                </div>

                <div class="list">
                    <div class="icon">
                        <iconify-icon icon="bx:home-alt"></iconify-icon>
                    </div>
                    <div class="menu">
                        Dashboard
                    </div>
                </div>

                <div class="list">
                    <div class="icon" style="margin-top: 10px">
                        <iconify-icon icon="ci:paper-plane"></iconify-icon>
                    </div>

                    <div class="menu">
                        Discovery
                    </div>
                </div>

                <div class="list">
                    <div class="icon">
                        <iconify-icon icon="material-symbols:collections-bookmark-outline"></iconify-icon>
                    </div>

                    <div class="menu">
                        Bookmark
                    </div>
                </div>

                <div class="list">
                    <div class="icon">
                        <iconify-icon icon="mdi:event-add"></iconify-icon>
                    </div>

                    <div class="menu">
                        Register Event
                    </div>
                </div>

                <div class="list">
                    <div class="icon">
                        <iconify-icon icon="eva:settings-2-outline"></iconify-icon>
                    </div>

                    <div class="menu">
                        Settings
                    </div>
                </div>

                <div class="list">
                    <div class="icon">
                        <iconify-icon icon="ri:logout-circle-line"></iconify-icon>
                    </div>

                    <div class="menu">
                        Logout
                    </div>
                </div>
            </div>
            <div class="col" id="content">
                @yield('body')
            </div>

            <div class="col-2" id="sidebar-kanan">
                <div class="tombol">
                    <img src="Logo Icon/Hide.svg" alt="" id="hide">
                    <!-- <a href="javascript:void(0)" class="closebtn" onclick="hide()">
                        <img src="Logo Icon/Hide.svg" alt="" id="hide">
                    </a> -->
                    <!-- <button class="btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <img src="Logo Icon/Hide.svg" alt="" id="hide">
                    </button> -->
                    <!-- <a class="hide" data-toggle="collapse" href="#sidebar-kanan" role="button" aria-expanded="false" aria-controls="sidebar-kanan">
                        <img src="Logo Icon/Hide.svg" alt="" id="hide">
                    </a> -->
                    <img src="Logo Icon/Lonceng.svg" alt="" id="lonceng">
                </div>

                <div class="profilepic">
                    <img src="" alt="">
                </div>

                <div class="text-center" id="name">
                    Mark Lee
                </div>

                <div class="text-center" id="status">
                    Music Enthusiast
                </div>

                <div class="text-center" id="intro">
                    <p>Dont know what to do?</p>
                </div>

                <button type="button" class="btn" id="generate">
                    Generate!
                </button>
            </div>
        </div>
        </div>
    </div>
    <script>
        function show() {
          document.getElementById("sidebar-kanan").style.width = "300px";
        //   document.getElementById("content").style.marginLeft = "250px";
        }

        function hide() {
          document.getElementById("sidebar-kanan").style.width = "0";
        //   document.getElementById("content").style.marginLeft = "0";
        }

        $(document).ready(function () {
          $("#hide").click(function () {
            $("#sidebar-kanan").toggle();
            $("#content").toggleClass("ml-0");
          });
        });

        </script>
</body>
</html>
