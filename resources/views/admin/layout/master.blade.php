<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <title>CricForce Home</title>


    <!-- Include Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.7/lottie.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#carouselExampleIndicators').carousel({
                interval: 3000, // Set the interval (e.g., 5000ms for 5 seconds)
                pause: false // Disable pausing on hover
            });
        });
    </script>

    <style>
        .navbar-nav {
            margin-left: 20px;
        }

        .nav-item .nav-link {
            font-size: 16px;
            font-weight: 550;
            color: rgb(102, 8, 8);
            letter-spacing: 1px;
            border-radius: 3px;
            transition: 0.5s ease;
        }

        .nav-item .nav-link:hover {
            background: #B70404;
            color: white;
        }

        #navbar form button {
            background: #B70404;
            color: white;
            border: none;
        }


        /* About Start */
        .about {
            padding: 50px;
            margin-top: 50px;
            background: #f9f9f9;
        }

        .about .card {
            border-radius: 10px;
        }

        .about .card img {
            border-radius: 10px;
        }

        .about h2 {
            font-weight: 600;
            letter-spacing: 1px;
        }

        .about p {
            font-weight: 500;
        }

        #about-btn {
            width: 150px;
            height: 38px;
            border: none;
            border-radius: 5px;
            background: #B70404;
            color: white;
            letter-spacing: 2px;
            font-weight: 550;
            transition: 0.5s ease;
            cursor: pointer;
        }

        #about-btn:hover {
            width: 170px;
        }

        @media (max-width:765px) {
            .about {
                padding: 0;
            }
        }


        /* Section country Start */
        .gallary {
            margin-top: 50px;
        }

        .gallary .card {
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            cursor: pointer;
        }

        .gallary .card img {
            border-radius: 10px;
            transition: 0.5s;
        }

        .gallary .card img:hover {
            transform: scale(1.1);
        }



        /* Style for the updated footer with modifications */
        #footer {
            width: 100%;
            text-align: center;
            background: #fff;
            padding: 30px 0;
            display: flex;
            justify-content: space-around;
            box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.2);
        }

        .footer-section {
            flex: 1;
            padding: 20px;
            text-align: left;
        }

        .footer-section h1,
        .footer-section h4 {
            color: tomato;
        }

        .footer-details p {
            margin: 5px 0;
        }

        .social-links i,
        .footer-links a {
            font-size: 18px;
            margin: 0 10px;
            color: #000;
            text-decoration: none;
        }

        .footer-links li {
            list-style: none;
            text-align: left;
        }

        .vertical-divider {
            width: 1px;
            background: #000;
            height: 100px;
            margin: 0 20px;
        }

        /* Section Services Start */
        .services {
            background: white;
            margin-top: 50px;
        }

        .services .card {
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            border: none;
            cursor: pointer;
        }

        .services .card i {
            font-size: 80px;
            text-align: center;
            color: #11009E;
            margin-top: 20px;
        }

        .services .card .card-body h3 {
            font-weight: 600;
        }

        .services .card .card-body {
            text-align: center;
        }

        .carousel-container {
            display: flex;
            overflow: hidden;
            width: 80%;
            /* 80% of the viewport width */
            margin: 0 auto;
            border: 1px solid #ccc;
            /* Add a border for visibility */
        }

        .carousel {
            display: flex;
            transition: transform 0.5s;
        }

        .carousel img {
            width: 100%;
            /* Adjust the width to 100% to fit the container */
            max-height: 500px;
            /* Set a maximum height to maintain aspect ratio */
        }

        .indicator {
            cursor: pointer;
        }

        #animation-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            /* Adjust the height as needed */
            width: 400px;
            /* Adjust the width as needed */
            /* background-color: #f0f0f0; */
            /* Background color for the container */
        }

        .mcolor {
            color: #B70404;
        }


        /* Style for Participating Teams Section */
        #participating-teams {
            background: #f9f9f9;
            /* Shadow background color */
        }

        #participating-teams h2 {
            font-weight: 600;
            margin-bottom: 30px;
        }

        .team-logo {
            background: #fff;
            /* White circular background */
            border-radius: 50%;
            /* Create a circular shape */
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            /* Shadow effect */
        }

        .team-logo img {
            max-width: 100%;
            border-radius: 50%;
            /* Ensure the image is circular */
        }

        .btn-primary {
            background-color: #B70404;
            /* Button background color */
            color: #fff;
            /* Button text color */
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #850303;
            /* Button background color on hover */
        }
    </style>



</head>

<body>
    @include('admin.includes.navbar')


    <!-- Start Carousel Section -->
    <div class="container" style="height: 600px">
        <div id="carouselExampleIndicators" class="carousel" style="height: 600px;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item" style="height: 600px;">
                    <img src="{{ asset('frontend/img/ccw1.jpeg') }}" alt="..." class="d-block w-100 h-100"
                        style="object-fit: cover;">
                </div>
                <div class="carousel-item active" style="height: 600px;">
                    <img src="{{ asset('frontend/img/cwc3.jpg') }}" alt="..." class="d-block w-100 h-100"
                        style="object-fit: cover;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>




    {{-- 
    <div class=" d-flex container justify-content-center">
        <div id="animation-container"></div>
    </div>
    --}}


    <div class="container">

        <!-- About Start -->
        <section class="about" id="about">
            <div class="container">
                <div class="main-txt text-center">
                    <h1>About Cric<span class="mcolor">Force</span></h1>
                </div>


                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-6 py-3 py-md-0 mt-3">
                        <div class="card">
                            <div id="animation-container"></div>
                        </div>
                    </div>


                    <div class="col-md-6 py-3 py-md-0">
                        <h2>Welcome to Cric<span class="mcolor">Force</span>:</h2>

                        <p>
                            Welcome to TourOn, your ultimate gateway to unforgettable travel experiences! As a leading
                            tour and travel agency, we are dedicated to crafting personalized journeys that cater to
                            your wanderlust and create lasting memories.
                        </P><br>

                        <P>
                            At TourOn, we believe that every adventure should be unique and tailored to your
                            preferences. Our team of seasoned travel experts is passionate about curating exceptional
                            itineraries that showcase the best of each destination, from hidden gems to iconic
                            landmarks.
                        </P><br>

                        <p>
                            Join us on this incredible journey and let TourOn be your trusted companion in turning your
                            travel dreams into reality. Start exploring the world with us and let the magic of travel
                            unfold before your eyes!
                        </p>

                        <button id="about-btn">Read More...</button>
                    </div>

                </div>
            </div>
        </section><br>


        <!-- Section for Participating Teams -->
        <section id="participating-teams" class="text-center py-5">
            <div class="container">
                <h2>Participating <span class="mcolor">Teams</span></h2>
                <div class="row justify-content-center">
                    <!-- Team Logos - First Row -->
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="{{ asset('frontend/img/eng.png') }}" alt="Team 1">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="{{ asset('frontend/img/pak.png') }}" alt="Team 2">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="{{ asset('frontend/img/nz.jpeg') }}" alt="Team 3">
                        </div>
                    </div>
                    <!-- Team Logos - Second Row -->
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="{{ asset('frontend/img/afg.png') }}" alt="Team 4">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="{{ asset('frontend/img/aus.jpg') }}" alt="Team 5">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="{{ asset('frontend/img/bd.jpg') }}" alt="Team 6">
                        </div>
                    </div>
                </div>
                <a href="{{ route('teams.allteams') }}"><button class="btn btn-primary mt-4">Show All Teams</button></a>
            </div>
        </section>





        <!-- Section country Start -->
        <section class="gallary" id="gallary">
            <div class="container">
                <div class="main-txt text-center">
                    <h1>Visiting <span class="mcolor">Stadiums</span></h1>
                </div>


                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('frontend/img/aj.jpg') }}" alt="" height="230px">
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('frontend/img/ap.jpg') }}" alt="" height="230px">
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('frontend/img/r-stad.jpg') }}" alt="" height="230px">
                        </div>
                    </div>
                </div>


                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('frontend/img/n-stad.jpg') }}" alt="" height="230px">
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('frontend/img/cs.jpg') }}" alt="" height="230px">
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('frontend/img/edg.jpg') }}" alt="" height="230px">
                        </div>


                    </div>
                </div>

            </div>
        </section><br><br><br>


        <!-- Section Services Start -->
        <section class="services" id="services">
            <div class="container">
                <div class="main-txt text-center">
                    <h1>ICC <span style="color: #B70404;">Cricket</span> World Cup 2023</h1>
                </div>

                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card" >
                            <i class="fas fa-globe" style="color: #80072b"></i>
                            <a href="{{ route('teams.allteams') }}" style="text-decoration: none">
                                <div class="card-body">
                                    <h3 style="color: #db235a">Contries</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>
                        
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <i class="fas fa-people-group" style="color: #80072b"></i>
                            <a href="{{ route('teams.all-teams') }}" style="text-decoration: none">
                                <div class="card-body">
                                    <h3 style="color: #db235a">Teams</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <i class="fas fa-calendar" style="color: #80072b"></i>
                            <a href="{{ route('calendar') }}" style="text-decoration: none">
                                <div class="card-body">
                                    <h3 style="color: #db235a">Schedules</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <i class="fas fa-map-location-dot" style="color: #80072b"></i>
                            <a href="{{ route('stadiums.all') }}" style="text-decoration: none">
                                <div class="card-body">
                                    <h3 style="color: #db235a">Venues</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <i class="fas fa-circle-play" style="color: #80072b"></i>
                            <a href="{{ route('videos') }}" style="text-decoration: none">
                                <div class="card-body">
                                    <h3  style="color: #db235a">Videos</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <i class="fas fa-newspaper" style="color: #80072b"></i>
                            <a href="{{ route('allNews') }}" style="text-decoration: none">
                                <div class="card-body">
                                    <h3  style="color: #db235a">News and Updates</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br><br>


        <hr>
        <!-- Latest News Section -->
        <h3>Latest <span class="mcolor">News</span> <a href="{{ route('allNews') }}"
                class="btn btn-outline-success">Show All News</a></h3>
        <div class="row text-center mt-5 mb-5">
            @php $count = 0 @endphp
            @foreach ($news as $article)
                @if ($count < 3)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            @if ($article->image)
                                <img src="{{ asset($article->image) }}" class="card-img-top"
                                    alt="{{ $article->title }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ Str::limit($article->story, 100) }}</p>
                                <a href="{{ route('news.show', $article->id) }}" class="btn btn-primary">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    @php $count++ @endphp
                @endif
            @endforeach
        </div>

        <hr>
        <!-- Latest Videos Section -->
        <h3>Latest <span class="mcolor">Videos</span> <a href="{{ route('videos') }}"
                class="btn btn-outline-success">More Videos</a></h3>
        <div class="row text-center mt-5 mb-5">
            @php $count = 0 @endphp
            @foreach ($videos as $video)
                @if ($count < 2)
                    <div class="col-md-6 mt-3">
                        {!! $video->vdo_link !!}
                    </div>
                    @php $count++ @endphp
                @endif
            @endforeach
        </div>








    </div>

    @include('admin.includes.footer')

    <!-- Include Bootstrap and Font Awesome icons -->
    <script>
        // Replace 'your-animation.json' with the path to your JSON animation file
        var animation = bodymovin.loadAnimation({
            container: document.getElementById('animation-container'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('frontend/img/1698422519865.json') }}',
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.js"></script>

</body>

</html>
