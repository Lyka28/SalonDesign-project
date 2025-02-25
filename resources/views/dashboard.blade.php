@extends('layout')

@section('content')

<div class="containerdash">
    <nav>
        <div class="navtabs">
            <div class="navtabs2">
                <div class="servicestabs">
                    <img class="logodash" src="{{ url('img/logo.png') }}" style="width: 66px;" alt="logo">
                    <a href="">Services</a>
                    <a href="">Products</a>
                    <a href="">About</a>
                    <a href="">Contact Us</a>
                </div>
                    
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> {{ $data->email }}</a>            
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="logout">Logout</a>
                    </div>
                </div>

                <div class="col-md-2 forsearch">
                    <input type="text" class="form-control search" placeholder=" ">
                    <img class="logosearchicon" src="{{ url('img/icons8-search-30.png') }}" style="width: 30px;" alt="logo">
                </div>

                <div class="forcart">
                    <img class="logocarticon" src="{{ url('img/icons8-shopping-cart-48.png') }}" style="width: 30px;" alt="logo">
                </div>
            </div>

        </div>    
    </nav>

    <main>
        <div class="main">
            <div class="col-md-6 welcome">
                <p class="welcomeletter">WELCOME TO BEAUTY SALON</p> <br>
                <p class="elevate"> Elevate Your Beauty, Elevate Your Life. <br>
                    The Ultimate Salon Destination. <br>
                    Come and visit us and get ready to </p>
                <button class="btn btn-block btn-primary btnbooknow" type="submit" >Book Now</button>
            </div>
            <div class="col-md-6 mainimage">
                <img class="imagegirl" src="{{ url('img/averie-woodareditedbrightness.png') }}" alt="logo">
            </div>
        </div>
    </main>

    <div class="col-md-12 linedash"></div>


    <div class="content1">
        <div class="servicesmenu">Services Menu</div>
        <div class="menuphoto">
            <div class="menu1"><img class="img1" src="{{ url('img/hair2.jpg') }}" alt=""></div>
            <div class="menu2"><img class="img2" src="{{ url('img/nail.jpg') }}" alt=""></div>
            <div class="menu3"><img class="img3" src="{{ url('img/facial1.jpg') }}" alt=""></div>
            <div class="menu4"><img class="img4" src="{{ url('img/barber.jpg') }}" alt=""></div>
        </div>
    </div>



    <footer class="footerdash">
        <div class="footermedia">
            <img src="{{ url('img/logo.png') }}" style="width: 30px;" alt="">
            <a href="">shopkaz@gmail.com</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
            <img src="{{ url('img/logo.png') }}" style="width: 30px;" alt="">
            <a href="">insta.shopkaz@gmail.com</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
            <img src="{{ url('img/logo.png') }}" style="width: 30px;" alt="">
            <a href="">customerservice_kaz@gmail.com</a>
        </div>
    </footer>

</div>
@endsection
  

