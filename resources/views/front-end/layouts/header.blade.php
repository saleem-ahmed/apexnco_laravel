<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About us</title>
    <link rel="shortcut icon" href="{{asset('front-end')}}/Assests/images/Apex Logo-1 1.png" type="image/x-icon">
    <!-- font awosome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('front-end')}}/style.css" />
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
 
 <!-- navbar starts here -->
 <nav>
            <div class="Nav-bar">
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('front-end')}}/Assests/images/Apex Logo-1 1.svg" alt="logo">
                    </a>
                </div>

                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>

                <div class="nav__link hide">
                    <a href="/">Home</a>
                    <a href="{{ url('/about') }}">ABOUT US</a>
                    <a href="http://127.0.0.1:8000/#services">SERVICES</a>
                    <a href="#portfoilo">PORTFOLIOS</a>
                    <a href="#contact">CONTACT US</a>
                </div>
            </div>
        </nav>
        <!-- navbar ends here -->