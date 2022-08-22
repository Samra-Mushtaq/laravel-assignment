<html>
<head>
    @include('layouts.head')
</head>
<body class="nk-body bg-white npc-general pg-auth no-touch nk-nio-theme">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="html/index.html" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Register</h5>
                                        <div class="nk-block-des">
                                            <p>Create New Dashlite Account</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email or Username</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email address or username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Passcode</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your passcode">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox">I agree to Dashlite <a tabindex="-1" href="#">Privacy Policy</a> &amp; <a tabindex="-1" href="#"> Terms.</a></label>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Register</button>
                                    </div>
                                </form><!-- form -->
                                <div class="form-note-s2 pt-4"> Already have an account ? <a href="html/pages/auths/auth-login.html"><strong>Sign in instead</strong></a>
                                </div>
                                <div class="text-center pt-4 pb-3">
                                    <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                                </div>
                                <ul class="nav justify-center gx-8">
                                    <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                                </ul>
                            </div><!-- .nk-block -->
                        </div><!-- nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right toggle-screen-lg" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init slick-initialized slick-slider slick-dotted" data-slick="{&quot;dots&quot;:true, &quot;arrows&quot;:false}">
                                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3234px; transform: translate3d(-462px, 0px, 0px);"><div class="slider-item slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 462px;" tabindex="-1">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('images/slides/promo-c.png') }}"  srcset="./images/slides/promo-c2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><div class="slider-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 462px;" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('images/slides/promo-a.png') }}"  srcset="./images/slides/promo-a2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><div class="slider-item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 462px;" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('images/slides/promo-b.png') }}"  srcset="./images/slides/promo-b2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><div class="slider-item slick-slide" data-slick-index="2" aria-hidden="true" style="width: 462px;" tabindex="-1" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round"  src="{{ asset('images/slides/promo-c.png') }}" srcset="./images/slides/promo-c2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><div class="slider-item slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 462px;" tabindex="-1">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('images/slides/promo-a.png') }}" srcset="./images/slides/promo-a2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><div class="slider-item slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" style="width: 462px;" tabindex="-1">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('images/slides/promo-b.png') }}" srcset="./images/slides/promo-b2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><div class="slider-item slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 462px;" tabindex="-1">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('images/slides/promo-c.png') }}" srcset="./images/slides/promo-c2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div></div></div><!-- .slider-item -->
                                    <!-- .slider-item -->
                                    <!-- .slider-item -->
                                <ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 3" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 3" tabindex="-1">3</button></li></ul></div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- nk-split-content -->
                    </div><!-- nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js?ver=2.9.1') }}" ></script>
    <script src="{{ asset('assets/js/scripts.js?ver=2.9.1') }}"></script>
    <!-- select region modal -->
</body>
</html>