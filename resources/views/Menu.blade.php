<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
</head>
<body>

    <header>
        <a href="{{ url('/') }}" id="home">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
        <nav class="navigation">
            <a class="nav-link nav-link-ltr" href="#top" id="Top">Top</a>
            <a class="nav-link nav-link-ltr" href="#Desc" id="AboutUs">About Us</a>
            <a class="nav-link nav-link-ltr" href="/menu" id="MenuLink">Menu</a>
            <a class="nav-link nav-link-ltr" href="/reviews" id="Review">Reviews</a>
        </nav>
    </header> 

    <h1 class="judul" data-aos="fade-down">MAIN MENU</h1>

    <h2 class="kepala" data-aos="flip-up">FOOD</h2>

    <div data-aos="flip-up" id="default-carousel" class="relative w-full" data-carousel="slide"></div>
    <div data-aos="fade-up" data-aos-offset="500" data-aos-anchor="#example-anchor" data-aos-duration="500" class="drink food">
        <button class="makan1">
            <img class="imeg" src="{{ asset('images/ayamduk.png') }}" alt="NASI UDUK AYAM PENYRT">
            <p class="up">NASI UDUK AYAM PENYRT</p>
            <p class="harga">Rp 15,000</p>
        </button>
        <button class="makan1">
            <img class="imeg" src="{{ asset('images/telurduk.png') }}" alt="NASI UDUK TELUR KECAP">
            <p class="up">NASI UDUK TELUR KECAP</p>
            <p class="harga">Rp 15,000</p>
        </button>
        <button class="makan1">
            <img class="imeg" src="{{ asset('images/soto.png') }}" alt="SOTO AYAM">
            <p class="up">SOTO AYAM</p>
            <p class="harga">Rp 20,000</p> 
        </button>
        <button class="makan1">
            <img class="imeg" src="{{ asset('images/3T.png') }}" alt="3T">
            <p class="up">3T</p>
            <p class="harga">Rp 15,000</p> 
        </button>
    </div>
    <h2 data-aos="flip-up" class="kepala"></h2>
    <div data-aos="fade-up" data-aos-offset="500" data-aos-anchor="#example-anchor" data-aos-duration="500" class="food">
        @foreach ($foodProducts as $product)
        <button class="makan1">
            <img class="imeg" src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
            <p class="up">{{ $product->name }}</p>
            <p class="harga">Rp {{ $product->price }}</p>
        </button>
        @endforeach
    </div>

    <h2 data-aos="flip-up" class="kepala">DRINK</h2>
    <div data-aos="fade-up" data-aos-offset="500" data-aos-anchor="#example-anchor" data-aos-duration="500" class="drink">
        <button class="minum1">
            <img class="imeg" src="{{ asset('images/cehun.png') }}" alt="CE HUN TIAO">
            <p class="up">CE HUN TIAO</p>
            <p class="harga">Rp 15,000</p>
        </button>
        <button class="minum1">
            <img class="imeg" src="{{ asset('images/soya.png') }}" alt="SUSU SOYA">
            <p class="up">SUSU SOYA</p>
            <p class="harga">Rp 8,000</p>
        </button>
        <button class="minum1">
            <img class="imeg" src="{{ asset('images/kacang.png') }}" alt="SRI KACANG HIJAU">
            <p class="up">SRI KACANG HIJAU</p>
            <p class="harga">Rp 20,000</p> 
        </button>
        <button class="minum1">
            <img class="imeg" src="{{ asset('images/kopi.png') }}" alt="KOPI O">
            <p class="up">KOPI O</p>
            <p class="harga">Rp 15,000</p> 
        </button>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div data-aos="fade-up" data-aos-offset="500" data-aos-anchor="#example-anchor" data-aos-duration="500" class="drink">
        @foreach ($drinkProducts as $product)
        <button class="minum1">
            <img class="imeg" src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
            <p class="up">{{ $product->name }}</p>
            <p class="harga">Rp {{ $product->price }}</p>
        </button>
        @endforeach
    </div>

    <div class="foot">
        <br><br><br>
        <pre class="footer">
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
    
        <div class="SOSMEDBX1">
            <img class="SOSMED" id="insta" width="70" height="70" src="{{ asset('images/IG.png') }}" alt="Instagram">
            <p style="font-size: 12px; font-family: Kantumruy Pro, sans-serif;">@pondokrumahdekor</p>
        </div>

        <div class="SOSMEDBX2">
            <img class="SOSMED2" id="fabo" width="70" height="70" src="{{ asset('images/FB.png') }}" alt="Facebook">
            <p style="font-size: 12px; font-family: Kantumruy Pro, sans-serif;">Pondok Rumah Dekor</p>
        </div>
    </div>

    <script src="{{ asset('js/Menu.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
