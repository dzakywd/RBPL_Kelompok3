<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JalanKuy Inc.</title>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins&display=swap" rel="stylesheet">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
*{
    font-family: 'Lexend', sans-serif;
    padding: 0;
    margin: 0;
}

.container{
    display: flex;
    /* grid-template-columns: 20% 60% 20%; */
    background-color: #ECEADD;
}
@media (min-width: 992px) {
    .sidebar-kiri{
        /* order: 1; */
        width: 300px;
        background: white;
        border-radius: 0 25px 25px 0;
    }

    .sidebar-kiri .logo{
        display: flex;
    }

    .sidebar-kiri .logo img{
        margin: 25px auto;
    }

    .sidebar-kiri .list{
        display: flex;
        width: 240px;
        height: 71px;
        left: 201px;
        top: 208px;
        border-radius: 22px;
        margin: 25px 25px;
        padding-left: 10px ;
    }

    .sidebar-kiri .list:hover{
        background: #FFC68F;
        transition: ease-in-out 100ms;
    }


    .sidebar-kiri .list .icon{
        display: flex;
        height: 40px;
        width: 40px;
        margin: auto 0;
    }

    .sidebar-kiri .list .menu{
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

    .content{
        order: 2;
        flex-grow: 10;
        background-color: #ECEADD;;
    }

    .sidebar-kanan{
        display: grid;
        grid-template-rows: 70% 5% 25%;
        order: 3;
        width: 300px;
        height: 100vh;
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162007.jpg?w=740&t=st=1684284565~exp=1684285165~hmac=df08a23e4806ce7c2de03875c1c4471337375643ba3815704d925e0817456dbf ");
        background-size: cover;
        border-radius: 25px 0 0 25px;
    }

    .sidebar-kanan .profilepic{
        grid-row: 1;
        align-items: center;
        margin: 90px auto 0;
        width: 120px;
        height: 120px;
        background-image: url("Logo Icon/profpic.svg"); /*nanti ambil dr database*/
        background-size: cover;
        border-radius: 100%;
    }

    .sidebar-kanan .intro{
        grid-row: 2;
        margin: auto;
        display: flex;
        height: 33px;
        font-family: 'Lexend';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 30px;
        display: flex;
        align-items: center;
        text-align: center;
        color: rgba(255, 255, 255, 0.77);
    }

    .sidebar-kanan .login{
        grid-row: 3;
        margin: 0 auto;
        display: flex;
        width: 130px;
        height: 50px;
        background: #F3E177;
        border-radius: 14px;
    }

    .sidebar-kanan .login p{
        margin: auto;
    }
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
body {
    background: var(--background-base);
    color: var(--biru-paling-tua);
    font-family: var(--font-base), sans-serif;
}

.bg-base {
    background:  var(--background-base);
    margin: 10px;
    border-radius: 30px;
    border-collapse: separate;
    border-spacing: 15px 50px;
}
.white {
    background: white;
    margin: 10px;
    border-radius: 30px;
    border-collapse: separate;
    border-spacing: 15px 50px;
}
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
}

.btn-brand {
    background-color: var(--orange-muda);
    border-color: var(--color-brand);
    color: var(--background-base);
}

.btn-brand:hover,
.btn-brand:focus {
    background-color: var(--biru-muda);
    color: var(--background-base);
    border-color: var(--biru-paling-tua);
}

/* POP UP ADMIN */
.popup {
width: 100%;
height: 100vh;
background-color: rgba(0, 0, 0, 0.3);
position: fixed;
top: 0;
left: 0;

opacity: 0;

}

#popup:target {
    opacity: 1;
    visibility: visible;

}

.popup-content {
    width: 50%;
    background-color: white;
    box-shadow: 0 20px rgba(0, 0, 0, 0.3);
}

.popup-img {
    display: flex;
    width: 100%;
    margin-bottom: 30px;
}


</style>
</head>
<body>
    <div class="container">
        <div class="sidebar-kiri fixed-top">

            <div class="logo">
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

                <div class="icon">
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
                    <img src="Logo Icon/Notification.svg" alt="">
                </div>

                <div class="menu">
                    Notification
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
        </div>

        <div class="content">
            <p>tengah</p>
        </div>

        <div class="sidebar-kanan fixed fluid-right">
            <div class="tombol">

            </div>
            <div class="profilepic">
                <img src="" alt="">
            </div>
            <div class="name">

            </div>
            <div class="status">

            </div>
            <div class="intro">
                <p>Login to explore more!</p>
            </div>
            <div class="login">
                <p>Sign In</p>
            </div>
        </div>

	@yield('atas')

	<br>
	<br>

	@yield('bawah')
    <br>
    <br>
</div>
</body>
</html>
