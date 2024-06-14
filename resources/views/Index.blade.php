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
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" npm install --save aos@nextC/>
    <link rel="stylesheet" href="{{ asset('css/Index.css') }}">
    
</head>
<body>
    <center>
    <img class="bg" data-aos="fade-down" src = "{{URL ('images/backhead.png') }}"></img>
    </center>
<header>
    <a href="{{ url('/') }}" id="home">
        <img class="logo" src="{{URL ('images/logo.png') }}" alt="Logo">
    </a>
    <nav class="navigation">
        <a class="nav-link nav-link-ltr" href="#top" id="Top">Top</a>
        <a class="nav-link nav-link-ltr" href="#Desc" id="AboutUs">About Us</a>
        <a class="nav-link nav-link-ltr" href="/Menu" id="MenuLink">Menu</a>
        <a class="nav-link nav-link-ltr" href="/reviews" id="Review">Reviews</a>
    </nav>
</header>     

    <h1 class ="judul" data-aos="flip-down"> BEST SELLING! </h1>

    <div class ="row1" data-aos="fade-up" 
    data-aos-anchor-placement="center-bottom">
        <button class = "makan1">
                <img class = "imeg" src = "{{URL ('images/ayamduk.png') }}"></img>
                <p class = "up">NASI UDUK AYAM PENYET</p>
                <p class = "harga">Rp 15,000<p>
            </button>
        <button class = "makan1">
                <img class = "imeg" src = "{{URL ('images/telurduk.png') }}"></img>
                <p class = "up">NASI UDUK TELUR KECAP</p>
                <p class = "harga">Rp 15,000<p>
            </button>
        <button class = "makan1">
                <img class = "imeg" src = "{{URL ('images/choipan.png') }}"></img>
                <p class = "up">CHOIPAN</p>
                <p class = "harga">Rp 3,000<p>
            </button>
    </div>
    

    <div class ="row2" data-aos="fade-up" 
    data-aos-anchor-placement="center-bottom">
        <button class = "minum1">
                <img class = "imeg" src = "{{URL ('images/soya.png') }}"></img>
                <p class = "up">SUSU SOYA</p>
                <p class = "harga">Rp 8,000<p>
            </button>
        <button class = "minum1">
                <img class = "imeg" src = "{{URL ('images/cehun.png') }}"></img>
                <p class = "up">CE HUN TIAO</p>
                <p class = "harga">Rp 15,000<p>
            </button>
        <button class = "minum1">
                <img class = "imeg" src = "{{URL ('images/tehobeng.png') }}"></img>
                <p class = "up">TEH OBENG</p>
                <p class = "harga">Rp 6,000<p>
            </button>
    </div>

<center>
    <button class="menu" id="viewMenu" data-aos="fade-up" 
    data-aos-anchor-placement="center-bottom">VIEW MENU</button>
</center>

<div class="abtus" id="Desc" div data-aos="zoom-out-up">
    <img class = "abt" data-aos="fade-left" src = "{{URL ('images/Aboutus.png') }}"></img>
    <h1 class="teks3" data-aos="flip-down"> ABOUT US </h1>
    <p class="teks4" data-aos="flip-down">Pondok Rumah Makan adalah tempat kuliner yang memberikan cita rasa unik. 
        Pendiri kami terjun ke industri kuliner untuk menciptakan bisnis yang tidak hanya menawarkan makanan dan minuman 
        lezat tetapi juga memperkenalkan cita rasa unik dari kampung halaman mereka. Passion dan dedikasi ini menjadi dasar 
        perusahaan kami, yang berupaya menghadirkan hidangan yang autentik kepada pelanggan.</p>
    <img class = "us" src = "{{URL ('images/Union.png') }}"><img>
</div>

<div data-aos="zoom-out-right">
<img class = "circle" src="{{URL ('images/circle1.png') }}"></img>
<right>
    <h1 class="judul1" data-aos="zoom-in-up">GIVE YOUR COMMENTS</h1>
    <h5 class= "teks" data-aos="fade-up-bottom">what do you think of our restaurant?
        <br>give your opinion and ratings!</h5>
        <button class="menu1" id="reviewS" data-aos="zoom-in-up">ADD YOURS</button>
</right>
</div>

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
            <img class = "SOSMED" id="insta"src = "{{URL ('images/IG.png') }}">
            <p class = "fb" >@pondokrumahdekor</p> </img>
    </div>

    <div class = "SOSMEDBX2">
        <img class = "SOSMED2" id="fabo" src = "{{URL ('images/FB.png') }}">
        <p class = "fb" >Pondok Rumah Dekor</p> </img>
    </div>

    <script src="{{ asset('js/Index.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>