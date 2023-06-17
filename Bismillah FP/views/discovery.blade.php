<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discovery</title>

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
            background-color: #ECEADD;
        }

        #sidebar-kiri{
            background-color: yellow;
            width: 300px;
            background: white;
            border-radius: 0 25px 25px 0;
        }

        #sidebar-kiri .logo{
            display: flex;
        }

        #sidebar-kiri .logo img{
            margin: 25px auto;
        }

        #sidebar-kiri .list{
            display: flex;
            width: 240px;
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
            font-size: 20px;
            line-height: 40px;
            display: flex;
            align-items: center;
            color: #143362;
            margin-left: 10px;
        }

        #content{
            padding: 30px;
            position: relative;
            overflow-y: scroll;
            max-height: 100%;
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

        #content #searchbar{
            padding-right: 0;
        }

        #content #search{
            /* width: 800px;*/
            height: 50px;
            /* margin-right: 150px; */
            background: #C9DAE8;
            border-radius: 14px;
            border: none;
            outline: none;
            padding-right: 0px;
        }

        #content #search-btn{
            width: 128px;
            height: 50px;
            background: #FFC68F;
            border-radius: 14px;
            border: none;
            outline: none;
            padding: 0;
        }

        #content #filter{
            max-width: 50px;
            padding: 0;
            margin: 0 auto;
        }

        #content #notif{
            max-width: 50px;
            padding: 0;
            margin: 0 22px 0 10px;
        }

        #content #mini-profile{
            max-width: 50px;
            height: 50px;
            background-image: url("Logo Icon/Mark.svg"); /*nanti ambil dr database*/
            background-size: cover;
            border-radius: 100%;
            padding:0;
            margin-right: 15px;
        }

        #popular{
            background-color: #D9D9D9;
            mix-blend-mode: darken;
            border-radius: 20px;
            padding: 30px;
        }

        .wrapper{
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;
        }

        .wrapper::-webkit-scrollbar{
            width:0;
        }

        #discover{
            width:160px;
            background-color: #D9D9D9;
            mix-blend-mode: darken;
            border-radius: 20px;
            border: none;
            outline: none;
            display: flex;
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        #discover .card-img-top{
            padding: 15px;
        }

        #discover .card-body{
            padding:0;
        }

        #discover .card-title{
            margin: 0 15px 10px 15px
        }

        #sidebar-kanan{
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162007.jpg?w=740&t=st=1684284565~exp=1684285165~hmac=df08a23e4806ce7c2de03875c1c4471337375643ba3815704d925e0817456dbf ");
            background-size: cover;
            border-radius: 25px 0 0 25px;
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

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" id="overall">
            <div class="col-2.5" id="sidebar-kiri">
                <div class="logo" id="logo">
                    <img src="Logo Icon/Logo Ipsum.svg" alt="">
                </div>

                <div class="list">

                    <div class="icon">
                        <img src="Logo Icon/Dashboard.svg" alt="" id="icon">
                    </div>

                    <div class="menu">
                        Dashboard
                    </div>

                </div>

                <div class="list">
                    <div class="icon" style="margin-top: 10px">
                        <img src="Logo Icon/Discovery.svg" alt="">
                    </div>

                    <div class="menu">
                        Discovery
                    </div>
                </div>

                <div class="list">
                    <div class="icon">
                        <img src="Logo Icon/Bookmark.svg" alt="">
                    </div>

                    <div class="menu">
                        Bookmark
                    </div>
                </div>

                <div class="list">
                    <div class="icon">
                        <img src="Logo Icon/Register Event.svg" alt="">
                    </div>

                    <div class="menu">
                        Register Event
                    </div>
                </div>

                <div class="list">
                    <div class="icon">
                        <img src="Logo Icon/Setting.svg" alt="">
                    </div>

                    <div class="menu">
                        Settings
                    </div>
                </div>

                <div class="list">
                    <div class="icon">
                        <img src="Logo Icon/Logout.svg" alt="">
                    </div>

                    <div class="menu">
                        Logout
                    </div>
                </div>
            </div>

            <div class="col" id="content">
                <h2>Discovery</h2>

                <form>
                    <div class="row">
                        <div class="col-7" id="searchbar">
                            <input type="text" class="container-fluid" id="search" name="cari" placeholder="Search for your favourite destination" value="{{ old('cari') }}">
                        </div>

                        <div class="col-2" id="searchbar" action="/dashboard/results" method="GET">
                            <button type="submit" class="search-btn" id="search-btn">
                                Search
                            </button>
                        </div>

                        <div class="col-1" id="filter">
                            <!--  <iconify-icon icon="ic:outline-notifications-none"></iconify-icon> -->
                            <iconify-icon icon="ri:equalizer-line" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 14px; padding: 5px;"></iconify-icon>
                        </div>

                        <div class="col-1" id="notif">
                            <iconify-icon icon="ic:outline-notifications-none" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 100%; padding: 5px;"></iconify-icon>
                        </div>

                        <div class="col-1 btn"  id="mini-profile">
                            <!-- <img src="Logo Icon/Mark.svg" alt=""> -->
                        </div>
                    </div>
                </form>

                <h2>Popular</h2>
                    <div class="wrapper">
                        @if ($popularEvents->count() > 0)
                        @foreach ($popularEvents as $e)
                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">{{ $e->title }}</h6>
                            </div>
                        </div>
                        @else
                            <p>No popular events found.</p>
                        @endif
                        @endforeach

                    <h2>Recommended</h2>
                    <div class="wrapper">
                        @if ($recommendedEvents->count() > 0)
                        @foreach ($recommendedEvents as $event)
                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">{{ $e->title }}</h6>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <p>No recommended events found.</p>
                        @endif

                    <h2>Near Me</h2>
                    <div class="wrapper" style="margin:0">
                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-2" id="sidebar-kanan">
                <div class="tombol">
                    <img src="Logo Icon/Hide.svg" alt="" id="hide">
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

    $(document).ready(function () {
      $("#mini-profile").click(function () {
        $("#sidebar-kanan").toggle();
        $("#content").toggleClass("");
      });
    });

    </script>
</body>
</html>
