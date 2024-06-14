<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Lobster&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet' href='https://icons8.com/icons/set/ellipsis'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" npm install --save aos@nextC/>
    <link rel="stylesheet" href="{{ asset('css/Create.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <header>
        <a href="{{ url('/') }}" id="home">
            <img class="logo" src="{{URL ('images/logo.png') }}" alt="Logo">
        </a>
        <nav class="navigation">
            <a class="nav-link nav-link-ltr" href="#top" id="Top">Top</a>
            <a class="nav-link nav-link-ltr" href="http://127.0.0.1:8000/#Desc" id="AboutUs">About Us</a>
            <a class="nav-link nav-link-ltr" href="/menu" id="MenuLink">Menu</a>
            <a class="nav-link nav-link-ltr" href="/reviews" id="Review">Reviews</a>
        </nav>
    </header>
    <form action="/store" method="post" class="komen">
        @csrf
        <button type="button" class="cancel">Cancel</button>
        <p class="write">Write a Review</p>
        <button type="submit" class="share" name="submit" value="submit">Share</button>
        <div class="rating1" id="userRating">
            <span class="fa fa-star" data-rating="1"></span>
            <span class="fa fa-star" data-rating="2"></span>
            <span class="fa fa-star" data-rating="3"></span>
            <span class="fa fa-star" data-rating="4"></span>
            <span class="fa fa-star" data-rating="5"></span>
            <input type="hidden" name="bintang" id="bintang">
        </div>
        <center>
            <div class="comment-form">
                <input type="text" class="usn" placeholder="Username" name="nama" required>
                <textarea id="comment" class="comment-text" name="comment" rows="10" placeholder="Type here..." required></textarea>
            </div>
        </center>
    </form>

    <script src="{{ asset('/js/Create.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
