<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/Register.css">
</head>
<body>

    <div class="Head">
        <nav class="navFlex">

            <img class="Logo" src="../Images/logo.gif">

            <ul>
                <li><a href="/homepage">HOME</a></li>
                <li><a href="">Salonat</a></li>
                <li><a href="">Home Services</a></li>
                {{-- <li><a href="">PRODUCT</a></li> --}}
                <li><a href="">ABOUT</a></li>
                <li><a href="">CONTACT</a></li>
                <li><a href="/login">LOGIN</a></li>
            </ul>

                <div class="SearchBar">
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>


                <div class="icons">
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg> </a>
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="6" cy="19" r="2"></circle>
                        <circle cx="17" cy="19" r="2"></circle>
                        <path d="M17 17h-11v-14h-2"></path>
                        <path d="M6 5l14 1l-1 7h-13"></path>
                    </svg> </a>
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <line x1="3.6" y1="9" x2="20.4" y2="9"></line>
                        <line x1="3.6" y1="15" x2="20.4" y2="15"></line>
                        <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                        <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                    </svg> </a>
                </div>

        </nav>


                <div class="LoginForm">
                    <h2><b> REGISTER </b></h2>
                    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                            <label for="">UserName</label>
                            <br>
                            <input type="text" name="name" placeholder="Please Enter Your Username or E-mail "class="@error('name') is-invalid @enderror" value="{{ old('name')}}">
                            @error('name')
                            <div class="error">{{ $message }}</div>
                    @enderror
                            <br>
                            <label for="">Email Address</label>
                            <br>
                            <input type="email" name="email" placeholder="Please Enter Your E-mail " class="@error('email') is-invalid @enderror" value="{{ old('email')}}">
                            @error('email')
                            <div class="error">{{ $message }}</div>
                              @enderror
                            <br>
    
    
                            <label for="">Phone number</label>
                            <br>
                            <input type="text" name="phone" placeholder="Please Enter Your Username or E-mail "class="@error('phone') is-invalid @enderror" value="{{ old('phone')}}">
                            @error('phone')
                            <div class="error">{{ $message }}</div>
                    @enderror
                            <br>
    
                            <label for="">Password</label>
                            <br>
                            <input type="password" name="password"  placeholder="Please Enter Your Password" class="@error('password') is-invalid @enderror" value="{{ old('password')}}">
                            @error('password')
                            <div class="error">{{ $message }}</div>
                    @enderror
                            <br>
    
    
    
                            <button id="Register" type="submit">
                                Sign UP
                            </button>
                            <button id="Login">
                                <a href="/login" >LOGIN</a>
                            </button>
    
                       </form>
                </div>
    </div>