<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn.dribbble.com/userupload/7740149/file/original-48a39c2d5d7d49ba6a384eea98e116f0.png?compress=1&resize=400x333" style="width=100%">
    <title>Admin JalanKuy</title>

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
            font-size: 15px;
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

        .icon iconify-icon{
            font-size: 30px;
            color:#143362;
        }

        /* esty punya */
        .list {
            cursor: pointer;
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
        .container-fluid {
            background-color: #D9D9D9;
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

        .btn-modal {
            margin-top: 15px;
            padding: 8px 18px;
            font-weight: 400;
            margin: 10px;
            border-radius: 30px;
            border-collapse: separate;
            border-spacing: 15px 50px;
            position: right;
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
            margin: 10px 10px 20px 10px;
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
            line-height: 48px;
            display: flex;
            align-items: center;
            color: var(--biru-paling-tua);
        }

        .subjudul {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 400;
            display: flex;
            align-items: center;
            color: #5F647E;
        }

        .content-event {
            text-align: left;
        }

        .title-modal {
            font-family: poppins;
            color: var(--biru-paling-tua);
            text-decoration: underline;
            font-weight: 700;
        }

        .subtitle-form {
            color: var(--biru-paling-tua);
            font-size: 12px;
        }

        .text-event {
            color: var(--biru-paling-tua);
        }

    </style>
</head>
<body>
    <div class="container-fluid" style="">
        <div class="row" id="overall">
            <div class="col-2.5" id="sidebar-kiri">
                <div class="logo" id="logo">
                    <img src="https://cdn.dribbble.com/userupload/7740475/file/original-1c2b7b06e20f7bc7575aa8c140e77724.png?compress=1&resize=600x400" alt="" style="max-width: 149px; height: auto;">
                </div>

                <div class="list">

                    <div class="icon">
                        <iconify-icon icon="mdi:email-arrow-left-outline"></iconify-icon>
                    </div>

                    <div class="menu">
                        Dashboard
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
        </div>
    </div>
</body>
</html>
