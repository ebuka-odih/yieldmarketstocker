<!DOCTYPE html>
<html lang="zxx" dir="ltr">
{{--<script src='//fw-cdn.com/1876006/2681937.js' chat='true'></script>--}}

<!-- Mirrored from yieldmarketstocks.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jun 2022 09:24:42 GMT -->
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Online Stock Trading and Investment Platform. Start Stock Trading Now with Our Free Unlimited Tools with Real Quotes.">
    <meta name="keywords" content="trading, stocks, cfd">
    <meta name="author" content="yieldmarketstocks">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#313131" />
    <!-- Site Properties -->
    <title>yieldmarketstocks - Trade Stocks and Commodities</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



</head>

<body>
<header>
    <!-- header content begin -->
    <div class="uk-section uk-padding-remove-vertical in-header-home ">
        <!-- module navigation begin -->
        <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <!-- module logo begin -->
                        <a class="uk-logo" href="{{ route('index') }}">
                            <h2 style="color: #1DC4EC; font-weight: bolder">yieldmarketstocks</h2>
{{--                            <img class="uk-margin-small-right in-offset-top-10" src="img/logo.png" alt="yieldmarketstocks" width="150" height="80">--}}
                        </a>
                        <!-- module logo begin -->
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="markets">Markets</a></li>
                        <li><a href="#">Company<i class="fas fa-chevron-down"></i></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="about">About</a></li>
                                    <li><a href="careers">Careers</a></li>
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="education">Education</a></li>
                        <li><a href="#">Resources<i class="fas fa-chevron-down"></i></a>
                            <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                    <div>
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="help-center">Help Center</a></li>
                                            <li><a href="customers">Customers</a></li>
                                            <li><a href="roadmap">Roadmap</a></li>
                                            <li><a href="legal-docs">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a class="uk-disabled" href="#">Invest with yieldmarketstocks Capital! Smart, reliable investing for Everyone, Anywhere!</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- module navigation mobile begin -->
                    <div class="uk-navbar-item in-mobile-nav uk-hidden@m">
                        <a class="uk-button" href="#modal-full" data-uk-toggle><i class="fas fa-bars"></i></a>
                    </div>
                    <div id="modal-full" class="uk-modal-full" data-uk-modal>
                        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport>
                            <a class="uk-modal-close-full uk-button"><i class="fas fa-times"></i></a>
                            <div class="uk-width-large uk-padding-large">
                                <ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
                                    <li><a href="markets">Markets</a></li>
                                    <li class="uk-parent"><a href="#">Company</a>
                                        <ul class="uk-nav-sub">
                                            <li><a href="about">About</a></li>
                                            <li><a href="careers">Careers</a></li>
                                            <li><a href="contact">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="education">Education</a></li>
                                    <li class="uk-parent"><a href="#">Resources</a>
                                        <ul class="uk-nav-sub">
                                            <li><a href="help-center">Help Center</a></li>
                                            <li><a href="customers">Customers</a></li>
                                            <li><a href="roadmap">Roadmap</a></li>
                                            <li><a href="legal-docs">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <a href="{{ route('login') }}" class="uk-button uk-button-primary uk-border-rounded uk-align-center">Sign in<i class="fas fa-sign-in-alt uk-margin-small-left"></i></a>
                                <a href="{{ route('register') }}" class="uk-button uk-button-secondary uk-border-rounded uk-align-center">Sign Up<i class="fas fa-sign-in-alt uk-margin-small-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- module navigation mobile end -->
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <a href="{{ route('login') }}" class="uk-button uk-button-text"><i class="fas fa-user-circle uk-margin-small-right"></i>Log in</a>
                        <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-button-small uk-border-pill">Sign up</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- module navigation end -->
    </div>
    <!-- header content end -->
</header>


@yield('content')

<footer>
    <!-- footer content begin -->
    <div class="uk-section uk-section-muted uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-grid-medium" data-uk-grid>
                <div class="uk-width-expand@m">
                    <h3 style="color: blue; font-weight: bolder">yieldmarketstocks</h3>
                    {{--                    <img class="uk-margin-small-right" src="img/logo.png" alt="wave" width="130" height="50">--}}
                    <p class="uk-text-large uk-margin-small-top">Trade with financial thinking.</p>
                    <p>Becks Square (Headquarters)<br>
                        6357 Leon Street, Belton, (TX), 76513.<br>
                        Texas - United States
                    </p>
                </div>
                <div class="uk-width-3-5@m">
                    <div class="uk-child-width-1-3@m" data-uk-grid>
                        <div>
                            <h4><span>Markets</span></h4>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{ route('login') }}">Forex</a></li>
                                <li><a href="{{ route('login') }}">Synthetic indices</a></li>
                                <li><a href="{{ route('login') }}">Stock indices</a></li>
                                <li><a href="{{ route('login') }}">Commodities</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4><span>Resources</span></h4>
                            <ul class="uk-list uk-link-text">
                                <li><a href="help-center">Help Centre</a></li>
                                <li><a href="#">Payment methods</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4><span>Company</span></h4>
                            <ul class="uk-list uk-link-text">
                                <li><a href="about">Our story</a></li>
                                <li><a href="about">Our leadership</a></li>
                                <li><a href="contac">Contact us</a></li>
                                <li><a href="about">Partners</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-margin-large-top in-offset-bottom-20">
                    <hr>
                    <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@m">
                            <div class="uk-grid-small uk-flex uk-child-width-1-5@m in-payment-method uk-text-center" data-uk-grid>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                        <img src="img/in-wave-visa.svg" alt="wave-payment" height="28">
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                        <img src="img/in-wave-mastercard.svg" alt="wave-payment" height="18">
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                        <img src="img/in-wave-skrill.svg" alt="wave-payment" height="28">
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-small uk-card-body uk-visible@m">
                                        <img src="img/in-wave-neteller.svg" alt="wave-payment" height="28">
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                        <img src="img/in-wave-paypal.svg" alt="wave-payment" height="28">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-2@m uk-text-right@m">
                            <div class="in-footer-socials in-margin-medium-bottom@s">
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-section-secondary uk-padding-remove-vertical">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-3-4@m uk-visible@m">
                    <ul class="uk-subnav uk-subnav-divider">
                        <li><a href="legal-docs">Regulations</a></li>
                        <li><a href="legal-docs">Legal documents</a></li>
                        <li><a href="legal-docs">Important information</a></li>
                        <li><a href="legal-docs">Privacy</a></li>
                        <li><a href="legal-docs">Public relations</a></li>
                        <li><a href="careers">Careers</a></li>
                    </ul>
                </div>
                <div class="uk-width-expand@m uk-text-right@m">
                    <p>yieldmarketstocks Limited. © 2022</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content end -->
    <!-- module totop begin -->
    <div class="uk-visible@m">
        <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
    </div>
    <!-- module totop begin -->
</footer>
<!-- Javascript -->
<!-- Smartsupp Live Chat script -->

<script src="{{ asset('js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('js/vendors/blockit.min.js') }}"></script>
<script src="{{ asset('js/config-theme.js') }}"></script>



<!-- Begin of Chaport Live Chat code -->
<script type="text/javascript">
    (function(w,d,v3){
        w.chaportConfig = {
            appId : '62ed5b9a875e773af1421ae8'
        };

        if(w.chaport)return;v3=w.chaport={};v3._q=[];v3._l={};v3.q=function(){v3._q.push(arguments)};v3.on=function(e,fn){if(!v3._l[e])v3._l[e]=[];v3._l[e].push(fn)};var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://app.chaport.com/javascripts/insert.js';var ss=d.getElementsByTagName('script')[0];ss.parentNode.insertBefore(s,ss)})(window, document);
</script>
<!-- End of Chaport Live Chat code -->
</body>


<!-- Mirrored from yieldmarketstocks.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jun 2022 09:26:16 GMT -->
</html>
