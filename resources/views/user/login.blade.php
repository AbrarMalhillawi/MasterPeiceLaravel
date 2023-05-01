<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('CSS/Login.css') }}">
</head>
<body>

    <div class="Head">
        <nav class="navFlex">

            <img class="Logo" src="../Images/logo.gif">

            <ul>
                <li><a href="/homepage">Home</a></li>
                <li><a href="">Salonat</a></li>
                <li><a href="">Home Services</a></li>
                {{-- <li><a href="">PRODUCT</a></li> --}}
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                @if (!Auth::user())
                        <li><a href="/regester">Rergeter</a></li>
                       <li><a href="/login"  style="color:rgb(166, 29, 116);">Login</a></li>
    
                       @else
                       {{-- <li><a href="/Account">Account</a></li> --}}
                      <li><a href="{{route('logout')}}">Logout</a></li>
                       <a href="/userProfile"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        </svg> </a>
    
                        @endif
            </ul>

                <div class="SearchBar">
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>


               

        </nav>


                <div class="LoginForm">
                    <h2><b> LOGIN </b></h2>

                    <form action="{{route('go.login')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <label for="">E-mail</label>
                            <br>
                            <input type="email" name="email" placeholder="Please Enter Your Username or E-mail " class="@error('email') is-invalid @enderror">
                            @error('email')
                        <div class="error">{{ $message }}</div>
                @enderror
                            <br><br>
                            <label for="">Password</label>
                            <br>
                            <input type="password" name="password"  placeholder="Please Enter Your Password" class="@error('password') is-invalid @enderror">
                            @error('password')
                        <div class="error">{{ $message }}</div>
                @enderror
                            @if(session()->has('message'))
                                <div class="alert alert-danger">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <br><br>
                            <button id="Register" >
                                <a href="/regester" >REGISTER</a>
                            </button>
                            <button id="Login" type="submit">
                              login
                            </button>
                       </form>
                </div>
    </div>


