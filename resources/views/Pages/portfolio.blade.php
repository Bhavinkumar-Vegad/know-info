<!DOCTYPE html>
<html lang="en">
<head>
    <title>Civic - CV Resume</title>
    <meta charset="UTF-8">
    <meta name="description" content="Civic - CV Resume">
    <meta name="keywords" content="resume, civic, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

    <!-- Stylesheets -->
{{--    <link rel="stylesheet" href="css/bootstrap.min.css"/>--}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Header section start -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="site-logo">
                    <h2><a href="#">Civic</a></h2>
                    <p>Enhance your online presence</p>
                </div>
            </div>
            <div class="col-md-8 text-md-right header-buttons">
                <a href="#" class="site-btn">Download CV</a>
                <a href="#" class="site-btn">Discover me</a>
            </div>
        </div>
    </div>
</header>
<!-- Header section end -->

<!-- Hero section start -->
<section class="hero-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-text">
                            <h2>{{$post->firstname_lastname}}</h2>
                            <p>{{$post->short_description}}</p>
                        </div>
                        <div class="hero-info">
                            <h2>General Info</h2>
                            <ul>
                                <li><span>Date of Birth</span>{{$post->dob}}</li>
                                <li><span>Address</span>{{$post->address}}</li>
                                <li><span>E-mail</span>{{$post->email}}</li>
                                <li><span>Phone </span>{{$post->phone}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <figure class="hero-image">
                            <img src="https://themewagon.github.io/civic/img/hero.jpg" alt="5">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Social links section start -->
<div class="social-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="social-link-warp">
                    <div class="social-links">
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                    </div>
                    <h2 class="hidden-md hidden-sm">My Social Profiles</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Social links section end -->

<!-- Resume section start -->
<section class="resume-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 offset-xl-2">
                <div class="section-title">
                    <h2>Work Experience</h2>
                </div>
                <ul class="resume-list">
                    <li>
                        <h2>2016-Present</h2>
                        <h3>Web Design Company</h3>
                        <h4>Web Designer</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                    </li>
                    <li>
                        <h2>2014-2016</h2>
                        <h3>Web Design Company</h3>
                        <h4>Web Designer</h4>
                        <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Resume section end -->

<!-- Resume section start -->
<section class="resume-section with-bg spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 offset-xl-2">
                <div class="section-title">
                    <h2>Education</h2>
                </div>
                <ul class="resume-list">
                    <li>
                        <h2>2008</h2>
                        <h3>Ui/Ux Diploma</h3>
                        <h4>Design College California</h4>
                        <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                    </li>
                    <li>
                        <h2>2006</h2>
                        <h3>Web design Diploma</h3>
                        <h4>Design College California</h4>
                        <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Resume section end -->


<!-- Review section end -->


<!-- Extra section start -->
<section class="extra-section spad pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title">
                    <h2>Extra Skills</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 pt-5">
                        <div class="fact-box trans">
                            <div class="fact-content">
                                <div class="circle-progress">
                                    <div id="progress1" class="prog-circle"></div>
                                    <div class="progress-info">
                                        <h2>75%</h2>
                                    </div>
                                    <div class="prog-title">
                                        <h3>Inspiration</h3>
                                        <p>Etiam nec odio vestibulum est.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pt-5">
                        <div class="fact-box trans">
                            <div class="fact-content">
                                <div class="circle-progress">
                                    <div id="progress2" class="prog-circle"></div>
                                    <div class="progress-info">
                                        <h2>83%</h2>
                                    </div>
                                    <div class="prog-title">
                                        <h3>Inspiration</h3>
                                        <p>Etiam nec odio vestibulum est.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-box">
                            <div class="fact-content">
                                <img src="img/icon/1-w.png" alt="">
                                <h2>14</h2>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-box">
                            <div class="fact-content">
                                <img src="img/icon/2-w.png" alt="">
                                <h2>9</h2>
                                <p>Awards Won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Extra section end -->

<!-- Contact section start -->
<section class="contact-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title">
                    <h2>Contact Me</h2>
                </div>
                <form class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="E-mail">
                        </div>
                        <div class="col-md-12">
                            <input type="text" placeholder="Subject">
                            <textarea placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="text-md-right">
                        <button class="site-btn">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact section end -->

<!-- Footer section start -->
<footer class="footer-section">
    <div class="container text-center">
        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
        </div>
    </div>
</footer>
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/civic/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/civic/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/civic/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/civic/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('js/civic/js/main.js') }}"></script>
</body>
</html>
