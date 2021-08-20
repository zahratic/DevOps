<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>DevTech</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>@import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap');
                                .footer {
                                    
    font-size: 13px;
    font-weight: bold;
    color: rgb(189, 196, 203)
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0
}

ul>li {
    padding: 4px;
    color: #C5CAE9
}

ul>li:hover {
    color: #957bda;
    cursor: pointer
}

hr {
    border-width: 3px
}

.card {
    padding: 2% 7%
}

.social>i {
    padding: 1%;
    font-size: 15px
}

.social>i:hover {
    color: #957bda;
    cursor: pointer
}

.policy>div {
    padding: 4px
}

.heading {
    font-family: 'Titillium Web', sans-serif;
    color: black
}

.divider {
    border-top: 2px solid
}</style>

                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>.carousel-item {
    height: 150vh;
    min-height: 350px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover
}

.navbar.scrolled {
    background: rgb(34, 31, 31);
    transition: background 500ms
}

.home-testimonial-bottom {
    background-color: #f8f8f8;
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    margin-top: 20px;
    margin-bottom: 0px;
    position: relative;
    height: 130px;
    top: 190px
}

.home-testimonial h3 {
    color: var(--orange);
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase
}

.home-testimonial h2 {
    color: white;
    font-size: 28px;
    font-weight: 700
}

.testimonial-inner {
    position: relative;
    top: -174px
}

.testimonial-pos {
    position: relative;
    top: 24px
}

.testimonial-inner .tour-desc {
    border-radius: 5px;
    padding: 40px
}

.color-grey-3 {
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    color: #6c83a2
}

.testimonial-inner img.tm-people {
    width: 60px;
    height: 60px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -o-object-fit: cover;
    object-fit: cover;
    max-width: none
}
.home-testimonial {
    background-color: #231834;
    height: 380px
}

.link-name {
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    color: #6c83a2
}

.link-position {
    font-family: "Montserrat", Sans-serif;
    font-size: 12px;
    color: #6c83a2
}
#mainNavbar {
    padding-left: 50px;
    padding-top: 100px
}

.navbar-dark .navbar-brand {
    font-family: 'Source Serif Pro', serif
}

.navbar-nav .nav-link {
    font-family: 'Source Serif Pro', serif
}

.display-4 {
    font-family: 'Source Serif Pro', serif
}

.lead {
    font-family: 'Source Serif Pro', serif
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top"> <a href="#" class="navbar-brand">DevTech</a> <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navLinks">
        <ul class="navbar-nav">
            <li class="nav-item"> <a href="{{ route('liste') }}" class="nav-link">ACCUEIL</a> </li>
            <li class="nav-item"> <a href="{{ route('contact') }}" class="nav-link">CONTACT</a> </li>
            <li class="nav-item align-content-end"> <a href="{{ route('login') }}" class="nav-link">ADMIN</a> </li>
        </ul>
    </div>
</nav>
<header>
    <div class="img-fluid">
        <img src="{{URL::asset('images/1.jpg')}}" alt="" class="img-fluid" width="100%">
    </div>
</header>

<section class="home-testimonial-bottom">
    <div class="container testimonial-inner">
        <div class="row d-flex justify-content-center">
            @yield('content')
        </div>
    </div>
</section>

<div class="container footer" style="margin-block-start: 40%" >
    <div class="card bg-white mx-5">
        <div class="row mb-4">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="footer-text pull-left">
                    <div class="d-flex">
                        <h1 class="font-weight-bold mr-2 px-3" style="color:white; background-color:#957bda"> Dev </h1>
                        <h1 style="color: #957bda">Tech</h1>
                    </div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi non pariatur numquam animi nam at impedit odit nisi.</p>
                   
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
            
            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                <h5 class="heading">Reseaux Sociaux</h5>
                <ul class="social mt-2 mb-3" >
                    <li> <img width="50px" height="50px" src="{{URL::asset('images/ic_f.png')}}" alt=""></li>
                    <li> <img width="35px" height="35px" src="{{URL::asset('images/ic_i.png')}}" alt=""></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                <h5 class="heading">Liker</h5>
                <ul class="social mt-2 mb-3" >
                    <li><a href=""> <img width="50px" height="50px" src="{{URL::asset('images/ic_l.png')}}" alt=""></a><span  class="badge bg-secondary">15</span></li>
                </ul>
            </div>
    
        </div>
        <div class="divider mb-4"> </div>
        <div class="row" style="font-size:10px;">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="pull-left">
                    <p><i class="fa fa-copyright"></i> 2020 L3GL</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="pull-right mr-4 d-flex policy">
                    <div>Terms of Use</div>
                    <div>Privacy Policy</div>
                    <div>Cookie Policy</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $(document).scroll(function() {
            var $nav = $("#mainNavbar");
            $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        });
    });
</script>


<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
</body>
</html>