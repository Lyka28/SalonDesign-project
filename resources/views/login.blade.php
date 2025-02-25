@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6 box1">
            <div class="col-md-12">
                <p class="logintext">Trusted Beauty Experts, Unparalleled Results </br>Where Artistry Meets Innovation.</p>
            </div>
        </div>

        <div class="col-md-6 box2">    
            <div class="logo">  
                <img src="{{ url('img/logo.png') }}" style="width: 66px;" alt="logo">
            </div>

            <div class="col-md-6 loginform">
                <h2 style="text-align: center">Login</h2>
                <br>
                <form action="{{ url('/login-user') }}" method="POST"> 

                    @if (Session::has('success'))                                   
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif   
                    
                    @if (Session::has('fail'))                                       
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif 

                @csrf
                    <div class="form-group col-md-12" style="margin: 0%">
                        <input type="text" name="email" class="form-control"  placeholder="Email">
                        <br>
                        <input type="password" name="password" class="form-control"  placeholder="Password">
                    </div>
                    <br>
                    <div class="form-group col-md-12" style="margin: 0%">
                        <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>

                    <a href="" class="forgotyourpass">Forgot your password?</a>

                </form>
            </div>

            <div class="col-md-6 continuewith" style="text-align: center">
                <p style="">or continue with</p>
                <img src="{{ url('img/logo.png') }}" style="width: 66px;" alt=""> 
                <img src="{{ url('img/logo.png') }}" style="width: 66px;" alt=""> 
                <img src="{{ url('img/logo.png') }}" style="width: 66px;" alt="">
            </div>

            <div class="donthaveanaccount col-md-6">
                <p>Don't have an account yet? <a href="registration" style="color: red">Register here!!!</a></p>
            </div>    

        </div>
    </div>

    <div class="col-md-12 line"></div>
    
    <div class="row">
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