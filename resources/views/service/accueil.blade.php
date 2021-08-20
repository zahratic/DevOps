<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>DevTech</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
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
            <li class="nav-item"> <a href="{{ route('index') }}" class="nav-link">ACCUEIL</a> </li>
            <li class="nav-item"> <a href="" class="nav-link">CONTACT</a> </li>
        </ul>
    </div>
</nav>
<header>
    <div id="indicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{URL::asset('images/1.jpg')}}" alt="" class="img-fluid" width="100%">
        </div> 
    </div>
</header>
<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <h1 class="display-4">DevTech</h1>
        <p class="lead">Here you can write anything about the website. These are the sample pictures ,replace them and use your own. These pictures are taken from unsplash.</p>
        <p class="lead">Bacon ipsum dolor amet drumstick short loin ribeye sirloin ham spare ribs landjaeger, pig turducken meatball sausage. Salami cow shoulder pork loin. Meatloaf turducken andouille chuck beef ribs picanha. Filet mignon pastrami fatback ribeye leberkas shank boudin sirloin beef short ribs tail pig pork loin shoulder buffalo. Short ribs andouille swine chicken leberkas. Fatback sirloin pork belly turkey landjaeger corned beef biltong, buffalo bresaola strip steak brisket short loin salami.</p>
    </div>
</section>

<section class="home-testimonial-bottom">
    <div class="container testimonial-inner">
        <div class="row d-flex justify-content-center">
            @yield('content')
        </div>
    </div>
</section>
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