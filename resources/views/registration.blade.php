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

            <div class="col-md-6 regform">
                <h2 style="text-align: center">Sign Up</h2>
                <br>


                <form action="{{ url('/register-user') }}" method="POST">

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
                        <input type="text" class="form-control"  placeholder="Full Name" name="name" value="{{ old('name') }}">
                        <span class="text-danger">                                              
                            @error('name') {{ $message }}@enderror
                        </span>
                        <br>

                        <input type="text" class="form-control"  placeholder="Email" name="email" value="{{ old('email') }}">
                        <span class="text-danger">                                              
                            @error('email') {{ $message }}@enderror
                        </span>
                        <br>

                        <input type="password" class="form-control"  placeholder="Password" name="password" value="{{ old('password') }}">
                        <span class="text-danger">                                              
                            @error('password') {{ $message }}@enderror
                        </span>
                    </div>
                    <br>
                    <div class="form-group col-md-12" style="margin: 0%">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>  

                </form>
            </div>

            <div class="col-md-6 continuewith" style="">
                <p style="">or continue with</p>
                <img src="{{ url('img/logo.png') }}" style="width: 66px;" alt=""> 
                <img src="{{ url('img/logo.png') }}" style="width: 66px;" alt=""> 
                <img src="{{ url('img/logo.png') }}" style="width: 66px;" alt="">
            </div>

            <div class="alreadyhave col-md-6">
                <p>Already have an account?<a href="login" style="color: red"> Login here!!!</a></p>
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