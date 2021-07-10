<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('./css/style.css')}}">
    <script src="{{url('./js/script.js')}}"></script>
    <title>Fave</title>
</head>
<body>

   <nav id="navbar">
        <div class="container">
            <div class="nav-logo">
                <a href="index.html">
                    <img src="{{url('./Assets/logo-website.png')}}" alt="">
                </a>
            </div>
            <ul class="nav-list category">
                {{--<li class="nav-item"><a href="Category.html">All</a></li>--}}
                <li class="nav-item"><a href="#">Women</a></li>
                <li class="nav-item"><a href="#">Men</a></li>
            </ul>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#">
                        <img src="{{url('./Assets/home-shopping-cart.png')}}" alt="">
                    </a>
                </li>
                @if (auth()->check())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" 
                        id="login-btn">LOGOUT</a></li>
                    </form>
                @else
                <li class="nav-item"><a href="/login" id="login-btn">LOGIN</a></li>
                @endif
                
            </ul>
        </div>
    </nav>
    <section class="landing-section">
        <div class="container">
            <div class="landing-title">
                <p>WHERE YOU ARE MORE THAN <span>NUMBER ONE.</span></p>
            </div>
            <div class="new-arrival">
                <div class="title">
                    <p>NEW ARRIVALS</p>
                </div>
                <div class="item">
                    <img src="{{url('./Assets/home-arrival-1.png')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{url('./Assets/home-arrival-2.png')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{url('./Assets/home-arrival-3.png')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{url('./Assets/home-arrival-4.png')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{url('./Assets/home-arrival-5.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="promo-section">
        <div class="container">
            <h1>SPECIAL OFFER! <span>ONLY THIS WEEK</span></h1>
            <h2 id="countdown">05 Days 12 Hours 23 Minutes Left</h2>
            <div class="promo-content">
                <div class="promo-item">
                    <div class="promo-img">
                        <img src=" {{url('./Assets/hawaian-red-dress.png')}}" alt="">
                        <span><a href="#"> 30% OFF</a></span>
                    </div>
                    <div class="promo-text">
                        <h3>30% OFF FOR ALL HAWAIAN RED DRESS</h3>
                        <p>Summer is near! Never be stuck in a style rut anymore with these easy-to-pair bodycon and flared fits.</p>
                        <div class="promo-hot">
                            <img src=" {{url('./Assets/home-hot-icon.pn')}}g" alt="">
                            <p>12 left!</p>
                        </div>
                    </div>
                </div>
                <div class="promo-item">
                    <div class="promo-img">
                        <img src="{{url('./Assets/black-active-set.png')}}" alt="">
                        <span><a href="#"> 70% OFF</a></span>
                    </div>
                    <div class="promo-text">
                        <h3>70% OFF FOR ALL BLACK ACTIVE SET</h3>
                        <p>Time to make your move with activewear essentials that are designed for peak performance.</p>
                        <div class="promo-hot">
                            <img src="{{url('./Assets/home-hot-icon.png')}}" alt="">
                            <p>8 left!</p>
                        </div>     
                    </div>
                </div>
                <div class="promo-item">
                    <div class="promo-img">
                        <img src="{{url('./Assets/maternity-dress.png')}}" alt="">
                        <span><a href="#"> 20% OFF</a></span>
                    </div>
                    <div class="promo-text">
                        <h3>20% FOR ALL MATERNITY DRESS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id rutrum vitae velit imperdiet.</p>
                        <div class="promo-hot">
                            <img src="{{url('./Assets/home-hot-icon.png')}}" alt="">
                            <p>10 left!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="overview-section">
        <div class="container">
            <div class="overview-box">
                <img src="{{url('./Assets/home-women-wear.png')}}" alt="">
                <div class="overview-content">
                    <h1>WOMEN WEAR</h1>
                    <p>Romantic, trendy or casual – shop our full selection of ladies’ wear here.</p>
                    <div>
                        <a href="/category/women">SHOP NOW <span><img src="{{url('./Assets/arrow-right.png')}}" alt=""></span></a>
                    </div>
                </div>
            </div>
            <div class="overview-box">
                <div class="overview-content">
                    <h1>MEN WEAR</h1>
                    <p>Check out all the freshest styles your closet needs in our men's clothing range. </p>
                    <div>
                        <a href="/category/men">SHOP NOW <span><img src="{{url('./Assets/arrow-right.png')}}" alt=""></span></a>
                    </div>
                </div>
                <div class="overview-img"></div>
                <img src="{{url('./Assets/home-men-wear.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="footer-section">
        <div class="container">
            <div class="left-footer">
                <img src="{{url('./Assets/logo-website.png')}}" alt="">
                <p>We are a family of brands, driven by our desire to make great design available to everyone in a sustainable way. Together we offer fashion, design and services, that enable people to be inspired and to express their own personal style, making it easier to live in a more circular way.</p>
                <div class="social-media">
                    <a href="#"><img src="{{url('./Assets/home-icon-instagram.png')}}" alt=""></a>
                    <a href="#"><img src="{{url('./Assets/home-icon-twitter.png')}}" alt=""></a>
                </div>
            </div>
            <div class="right-footer">
                <h1>New in FAVE?</h1>
                <p>Suscribe to our monthly magazine for more fashion mix and match tips & tricks!</p>
                <div class="subscribe">
                    <form action="">
                        <input type="text" name="email" id="email" placeholder="someone@example.com" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>