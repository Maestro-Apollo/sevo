@extends('FrontEnd.master')


@section('header')
<header id="header" class="header-transparent header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 70, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body header-body-bottom-border border-top-0">
        <div class="header-top bg-light border-0">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <ul class="list list-unstyled list-inline mb-0">
                                <li class="list-inline-item text-color-dark me-md-4 mb-0 d-none d-md-inline-block">
                                    <span class="text-color-default text-2">Any Questions?</span>
                                </li>
                                <li class="list-inline-item me-4 mb-0">
                                    <i
                                        class="icons icon-phone text-color-primary text-4 position-relative top-4 me-1"></i>
                                    <a href="tel:+1234567890"
                                        class="text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-none text-2">
                                        (800) 123-4567
                                    </a>
                                </li>
                                <li class="list-inline-item me-4 mb-0 d-none d-md-inline-block">
                                    <i
                                        class="icons icon-envelope text-color-primary text-4 position-relative top-4 me-1"></i>
                                    <a href="mailto:porto@portotheme.com"
                                        class="text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-none text-2">
                                        porto@portotheme.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="list list-unstyled list-inline mb-0">
                                <li class="list-inline-item mb-0">
                                    <i
                                        class="icons icon-user text-color-primary text-4 position-relative top-4 me-1"></i>
                                    <a href="page-login.html"
                                        class="text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-none text-2">
                                        Login / Register
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="img/demos/education/logo.png" class="img-fluid" width="123" height="49"
                                    alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div
                                class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a href="index.html" class="nav-link active">Home</a>
                                        </li>
                                        <li>
                                            <a href="about-us.html" class="nav-link">About Us</a>
                                        </li>
                                        <li>
                                            <a href="courses.html" class="nav-link">Courses</a>
                                        </li>
                                        <li>
                                            <a href="instructors.html" class="nav-link">Instructors</a>
                                        </li>
                                        <li>
                                            <a href="demo-education-blog.html" class="nav-link">Blog</a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html" class="nav-link">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-nav-features header-nav-features-no-border">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle text-decoration-none"
                                    data-focus="headerSearch">
                                    <i
                                        class="icons icon-magnifier header-nav-top-icon font-weight-bold text-4 top-2 text-color-primary"></i>
                                </a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed"
                                    id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search"
                                                value="" placeholder="Search...">
                                            <button class="btn" type="submit">
                                                <i
                                                    class="icons icon-magnifier header-nav-top-icon font-weight-bold text-color-dark text-4 text-color-hover-primary top-2"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                            data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection


@section('footer')
<footer id="footer" class="footer-reveal bg-color-secondary border-0 mt-0">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

                <a href="index.html" class="d-inline-block mb-3">
                    <img alt="Porto" width="115" height="30" src="img/demos/education/logo-footer.png">
                </a>

                <ul class="social-icons social-icons-clean social-icons-icon-light">
                    <li>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    </li>
                </ul>

                <p class="text-3 mt-4 mb-0 line-height-8 text-color-tertiary opacity-6">Porto Education. ©
                    2021.<br> All Rights Reserved</p>

            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h4 class="font-weight-bold text-5">About Us</h4>
                <ul class="list list-unstyled text-color-tertiary opacity-6">
                    <li class="mb-1">
                        Porto Education
                    </li>
                    <li class="mb-1">
                        123 Porto Blvd, Suite 100
                    </li>
                    <li class="mb-1">
                        New York, NY
                    </li>
                    <li class="mb-1">
                        Phone: <a href="tel:1234567890"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary">123-456-7890</a>
                    </li>
                    <li>
                        Email: <a href="mailto:email@domain.com"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary">porto@domain.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
                <h4 class="font-weight-bold text-5">Navigation</h4>
                <ul class="list list-unstyled opacity-6">
                    <li class="mb-1">
                        <a href="index.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            Home</a>
                    </li>
                    <li class="mb-1">
                        <a href="about-us.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            About Us</a>
                    </li>
                    <li class="mb-1">
                        <a href="courses.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            Courses</a>
                    </li>
                    <li class="mb-1">
                        <a href="instructors.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            Instructors</a>
                    </li>
                    <li class="mb-1">
                        <a href="demo-education-blog.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            Blog</a>
                    </li>
                    <li>
                        <a href="contact-us.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
                <h4 class="font-weight-bold text-5">Support</h4>
                <ul class="list list-unstyled opacity-6">
                    <li class="mb-1">
                        <a href="index.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            Documentation</a>
                    </li>
                    <li class="mb-1">
                        <a href="index.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            Forums</a>
                    </li>
                    <li class="mb-1">
                        <a href="index.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            Open a Ticket</a>
                    </li>
                    <li>
                        <a href="index.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            FAQ's</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
                <h4 class="font-weight-bold text-5">More</h4>
                <ul class="list list-unstyled opacity-6">
                    <li class="mb-1">
                        <a href="index.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            Terms of Use</a>
                    </li>
                    <li>
                        <a href="index.html"
                            class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
                            Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection
