<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Medion</title>
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('web/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <div class="top_contact-container">
                    <div class="tel_container">
                        <a href="">
                            <img src="images/telephone-symbol-button.png" alt=""> Call : +01 1234567890
                        </a>
                    </div>
                    <div class="social-container">
                        <a href="">
                            <img src="{{ asset('web/images/fb.png')}}" alt="" class="s-1">
                        </a>
                        <a href="">
                            <img src="{{ asset('web/images/twitter.png')}}" alt="" class="s-2">
                        </a>
                        <a href="">
                            <img src="{{ asset('web/images/instagram.png')}}" alt="" class="s-3">
                        </a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('web/images/logo.png') }}" alt="">
                        <span>
                            Medion
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>

                            </ul>
                            <form class="form-inline ">
                                <input type="search" placeholder="Search">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>

                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box">
                                        <img src="images/medicine.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="detail-box">
                                        <h1>
                                            Welcome To Our <br>
                                            <span>
                                                Online Medicine
                                            </span>

                                        </h1>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered
                                            alteration in some form, by injected humour, or randomised words which don't
                                            look even slightly
                                            believable.
                                        </p>
                                        <div>
                                            <a href="">
                                                Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </section>
        <!-- end slider section -->
    </div>

    <!-- discount section -->

    <section class="discount_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-5 offset-md-2">
                    <div class="detail-box">
                        <h2>
                            You get <br>
                            any medicine <br>
                            on
                            <span>
                                10% discount
                            </span>

                        </h2>
                        <p>
                            It is a long established fact that a reader will be distracted by
                        </p>
                        <div>
                            <a href="">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-5">
                    <div class="img-box">
                        <img src="{{ asset('web/images/medicines.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end discount section -->

    <!-- about section -->
    <section class="about_section layout_padding">
        <div class="container">
            <div class="custom_heading-container ">
                <h2>
                    About Us
                </h2>
            </div>

            <div class="img-box">
                <img src="{{ asset('web/images/about-medicine.png') }}" alt="">
            </div>
            <div class="detail-box">
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking
                    at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                    letters, as
                    opposed to using 'Content here, content here', making it
                </p>
                <div class="d-flex justify-content-center">
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="custom_heading-container ">
                <h2>
                    What is says our clients
                </h2>
            </div>
            <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
                    <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="client_container layout_padding2">
                            <div class="client_detail">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered
                                    alteration in
                                    some form, by injected humour, or randomised words which don't look even slightly
                                    believable.
                                </p>
                            </div>
                            <div class="client_box ">
                                <div class="img-box">
                                    <img src="{{asset('web/images/client.png')}}" alt="">
                                </div>
                                <div class="name">
                                    <h5>
                                        Randomised
                                    </h5>
                                    <h6>
                                        <span>
                                            Client
                                        </span>
                                        <img src="{{ asset('web/images/quote.png') }}" alt="">
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container layout_padding2">
                            <div class="client_detail">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered
                                    alteration in
                                    some form, by injected humour, or randomised words which don't look even slightly
                                    believable.
                                </p>
                            </div>
                            <div class="client_box ">
                                <div class="img-box">
                                    <img src="{{asset('web/images/client.png')}}" alt="">
                                </div>
                                <div class="name">
                                    <h5>
                                        Randomised
                                    </h5>
                                    <h6>
                                        <span>
                                            Client
                                        </span>
                                        <img src="{{asset('web/images/quote.png')}}" alt="">
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container layout_padding2">
                            <div class="client_detail">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered
                                    alteration in
                                    some form, by injected humour, or randomised words which don't look even slightly
                                    believable.
                                </p>
                            </div>
                            <div class="client_box ">
                                <div class="img-box">
                                    <img src="{{asset('web/images/client.png')}}" alt="">
                                </div>
                                <div class="name">
                                    <h5>
                                        Randomised
                                    </h5>
                                    <h6>
                                        <span>
                                            Client
                                        </span>
                                        <img src="{{asset('web/images/quote.png')}}" alt="">
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- end client section -->

    <!-- contact section -->
    <section class="contact_section">
        <div class="container">
            <div class="row">
                <div class="custom_heading-container ">
                    <h2>
                        Request A call back
                    </h2>
                </div>
            </div>
        </div>
        <div class="container layout_padding2">
            <div class="row">
                <div class="col-md-5">
                    <div class="form_contaier">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNumber1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputNumber1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email </label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group ">
                                <label for="inputState">Select medicine</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Medicine 1</option>
                                    <option selected>Medicine 2</option>
                                    <option selected>Medicine 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputMessage">Message</label>
                                <input type="text" class="form-control" id="exampleInputMessage">
                            </div>
                            <button type="submit" class="">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="detail-box">
                        <h3>
                            Get Now Medicines
                        </h3>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration
                            in some form, by injected humour, or randomised words which don't look even slightly
                            believable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_contact">
                        <h4>
                            Contact
                        </h4>
                        <div class="box">
                            <div class="img-box">
                                <img src="images/telephone-symbol-button.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    +01 123567894
                                </h6>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-box">
                                <img src="images/email.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    demo@gmail
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_menu">
                        <h4>
                            Menu
                        </h4>
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="medicine.html"> Medicine </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="buy.html"> Online Buy </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info_news">
                        <h4>
                            newsletter
                        </h4>
                        <form action="">
                            <input type="text" placeholder="Enter Your email">
                            <div class="d-flex justify-content-center justify-content-end mt-3">
                                <button>
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end info section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            &copy; 2019 All Rights Reserved. Design by
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="{{ asset('web/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('web/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
</body>

</html>
