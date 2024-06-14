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
    <link rel="stylesheet" href="{{ asset('css/Reviews.css') }}">
    
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
            <a class = "nav-link nav-link-ltr" href="/reviews" id="Review">Reviews</a>
        </nav>
    </header> 

    <h1 data-aos="fade-down"
    data-aos-anchor-placement="center-center" class ="judul">TESTIMONIAL</h1>
    
    <center>
    <pre data-aos="fade-down"
    data-aos-anchor-placement="center-center" class = "give"> give  your  ratings  and  review  on  our 
restaurant! </pre>   
        <button data-aos="fade-up"
        data-aos-anchor="#example-anchor"  class="menu" id="menu" onclick="redirectToReview()">Comment</button>
    </center>

    @foreach($comments as $comment)
    <div data-aos="fade-up"
    data-aos-anchor="#example-anchor"  class="box">
        <div class="rating">
            @for($i = 1; $i <= 5; $i++)
                <span class="fa fa-star{{ $i <= $comment->bintang ? ' checked' : '' }}" data-rating="{{ $i }}"></span>
            @endfor
        </div>

        <div class="dot" onclick="toggleSelectionBox(event, '{{ $comment->id }}')">
            <i class="fa-solid fa-ellipsis-vertical fa-2x"></i>
            <div class="selection-box" id="selectionBox-{{ $comment->id }}">
                <div class="edit-box" onclick="editComment({{ $comment->id }})">
                    <a style="color: black;" href="/edit/{{ $comment->id }}" onclick="event.stopPropagation();">Edit</a>
                </div>
                <div class="delete-box" id="buttonContainer">
                    <form action="/delete/{{ $comment->id }}" method="POST" onsubmit="event.stopPropagation();">
                        @csrf
                        @method('DELETE')
                        <button class="delete-box" id="deleteButton">Delete</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <p class="Nama">Username : {{ $comment->nama }}</p>
            <p class="Nama1">Comment : {{ $comment->comment }}</p>
        </div>
    </div>
    <br><br><br>
    @endforeach

<div class="foot">
    <br><br><br>
    <pre class ="footer">
        <b>Pondok Rumah Dekor</b>

        <b>Person responsible</b>
            Junita Chen

        <b>Address</b> 
            Ruko Greenland Blok F1 No.8
            
        <b>Operational Hour</b> 
            Senin - Sabtu (07:00 - 20:00)

        <b>Telephone number</b> 
            0813 6380 3355
    </pre>
    <iframe class="mapmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0516970558597!2d104.04937199999999!3d1.1232049999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9897c21865185%3A0x7991bca8d9fc32c8!2sRumah%20Dekor!5e0!3m2!1sid!2sid!4v1712499180944!5m2!1sid!2sid" 
    width="720" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    <div class = "SOSMEDBX1">
        <img class = "SOSMED" id="insta" width="70" height="70" src = "{{URL ('images/IG.png') }}">
        <p style ="font-size: 12px; font-family:Kantumruy Pro, sans-serif;">@pondokrumahdekor</p> </img>
    </div>

    <div class = "SOSMEDBX2">
        <img class = "SOSMED2" id="fabo" width="70" height="70"src = "{{URL ('images/FB.png') }}">
        <p style ="font-size: 12px; font-family:Kantumruy Pro, sans-serif;">Pondok Rumah Dekor</p> </img>
    </div>
</div>

    <script src="{{ asset('/js/Reviews.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
