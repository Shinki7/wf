<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <style>
        ::-webkit-scrollbar{
            width: 5px;
            transition: 0.5s;
        }

        ::-webkit-scrollbar-track{
            border-radius: 1px;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.25);
        }
        ::-webkit-scrollbar-thumb{
            border-radius: 1px;
            background-color: #01003F;
            transition: 1s;
        }
        ::-webkit-scrollbar-thumb:hover{
            background-color: #000;
        }
    </style>
    <title>BARBER</title>
</head>
<body>
<!--Hub-->
<div class="social">
    <div class="container">
        <a href="https://github.com/Shinki7"><i class="fa-brands fa-github"></i></a>
        <a href="https://github.com/Shinki7/wf"><i class="fa-solid fa-code-branch"></i></a>
    </div>
</div>

    <!--Navbar-->
    <header>
        <a href=""><img src="asset/Logo.png" id="logo"></a>
        <div class="wrap">
            <div class="navbar">
                <ul>
                    <a href="">Home</i></a>
                    <a href="#location">Location</i></a>
                    <a href="#about">About</i></a>
                </ul>
            </div>
        </div>
    </header>

<!--Banner-->
<div class="banner">
    <div class="text">
            <h1 class="title">
                BARBER
            </h1>
            <p class="txt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in efficitur ex. Nullam pharetra dictum mi. Praesent eget metus sapien. 
                Vivamus lacinia mauris non turpis luctus, nec tincidunt velit eleifend. Vestibulum ullamcorper, tellus eu pharetra suscipit, ante turpis auctor purus, vel rhoncus velit tortor et dolor. 
                Morbi semper interdum pretium. Vestibulum lacinia pretium efficitur. Curabitur suscipit condimentum feugiat. 
                Vivamus aliquet orci tortor, in gravida libero consectetur eget.Aliquam non varius sapien, eget fringilla lectus. Vivamus feugiat ex eu elit faucibus placerat. 
                Mauris quis commodo ipsum. Curabitur nibh risus, laoreet ut dapibus sit amet, sollicitudin vel turpis. Suspendisse egestas pharetra ornare. Nunc ac arcu tristique, lobortis orci quis, bibendum felis. 
                Donec gravida neque eu finibus condimentum.
            </p>
    </div>
</div>
<div class="button">
    <a href="#service">Service</a>
</div>

<!--About-->
<div class="abt" id="about">
    <h2>ABOUT</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in efficitur ex. Nullam pharetra dictum mi. Praesent eget metus sapien. 
        Vivamus lacinia mauris non turpis luctus, nec tincidunt velit eleifend. Vestibulum ullamcorper, tellus eu pharetra suscipit, 
        ante turpis auctor purus, vel rhoncus velit tortor et dolor. Morbi semper interdum pretium. Vestibulum lacinia pretium efficitur. 
        Curabitur suscipit condimentum feugiat. Vivamus aliquet orci tortor, in gravida libero consectetur eget. Aliquam non varius sapien, eget fringilla lectus. Vivamus feugiat ex eu elit faucibus placerat. 
        Mauris quis commodo ipsum. Curabitur nibh risus, laoreet ut dapibus sit amet, sollicitudin vel turpis. Suspendisse egestas pharetra ornare. Nunc ac arcu tristique, lobortis orci quis, bibendum felis. 
        Donec gravida neque eu finibus condimentum.</p>
</div>
<!--Loader-->
<div class="bg-loader">
    <div class="loader"></div>
</div>

<!--Services-->
<section class="service" id="service">
    <div class="container">
        <h3>SERVICES</h3>
        <div class="box">
            <div class="col-4">
                <div class="icon"><i class="fa-solid fa-scissors"></i></div>
                <h4>HAIRCUT</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fa-solid fa-bottle-droplet"></i></div>
                <h4>COLORING</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fa-solid fa-spray-can-sparkles"></i></div>
                <h4>STYLING</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fa-solid fa-shower"></i></div>
                <h4>HAIR WASH</h4>
            </div>
        </div>
            <div class="box">
                <div class="btn"><a href="/pg/log.html">Reserve Now</a></div>
            </div>
        </div>
</section>

<!--Location-->
<section class="loc" id="location">
    <div class="container">
        <h3>LOCATION</h3>
            <div class="map">
                <center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3927.2815833662366!2d123.6202825!3d-10.1577514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569cb07c5c9f13%3A0xd499d54bad302f6f!2sOYO%202814%20Debitos%20Hotel!5e0!3m2!1sen!2sid!4v1664887088580!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
            </div>
    </div>
</section>

<!-- footer -->
<footer>
    <div class="container">
        <small>Made By Alexander J Aten & Reinhard L. D. Copyright &copy; 2022. All Rights Reserved To All The Property Owner.</small>
    </div>
</footer>

</body>
<script src="js/script.js"></script>
</html>

<?php



?>