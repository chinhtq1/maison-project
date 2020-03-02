<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{!! MetaTag::get('title') !!}</title>
    <meta property="og:title" content="{!! MetaTag::get('title') !!}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="vi_VN">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="description" content="{!! MetaTag::get('description') !!}">
    <meta property="og:description" content="{!! MetaTag::get('description') !!}">
    <meta property="og:type" content="{{ MetaTag::get('home_image') }}">
    <meta property="og:url" content="{!! url()->current() !!}">
    <meta name="keywords" content="{!! MetaTag::get('keyword') !!}">
    <meta property="og:image" content="{{ MetaTag::get('home_image') }}">
    <meta property="og:image:width" content="480">
    <meta property="og:image:height" content="360">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <meta name="twitter:title" content="{{ MetaTag::get('title') }}">
    <meta name="twitter:image" content="{{ MetaTag::get('home_image') }}">
    <link rel="image_src" href="{{ MetaTag::get('home_image') }}">
    <link rel="shortcut icon" href="{!! MetaTag::get('images.shotcut-icon.url') !!}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('client/css/main.css?v=1.6')}}">
    <link rel="stylesheet" href="{{asset('client/font/font.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <div class="modal-wrapper">
        <div class="overlay"> </div>
        <div class="modal" id="article-modal">
            <div class="content">
                <div class="img-banner-modal">
                        <a class="btn-close-modal " > <i class="fa fa-times" aria-hidden="true"></i></a>
                    <img  id="article-image">
                    <div class="time-post">
                        <i class="fa fa-2x fa-calendar-alt" aria-hidden="true"></i>
                        <span id="article-public-date">21 Tháng 5 Năm 2020</span>
                    </div>

                </div>
                <div class="description-modal-text">
                    <h1 id="article-title"></h1>
                    <p id="article-content"> </p>
                </div>
            </div>
        </div>
    </div>

    <div id="loader">
        <div class="count">100%</div>
    </div>

    <div class="container-fluid">
        <header>
            <div class="container-fluid d-flex justify-content-between menu-container">
                <a href="/" class="logo-desktop" href="#"><img class="img-fluid"
                        src="{{asset('static/logo_desktop.png')}}"></a>
                <a href="/" class="logo-mobile" href="#"><img class="img-fluid"
                        src="{{ asset('static/logo_mobile.png')}}"></a>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link expand" href="#gioi-thieu">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#vi-tri" class="nav-link expand">Vị trí</a>
                    </li>
                    <li class="nav-item">
                            <a href="#tien-ich" class="nav-link expand">Tiện ích</a>
                        </li>
                    <li class="nav-item">
                        <a href="#kien-truc" class="nav-link expand">Kiến trúc</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tin-tuc" class="nav-link expand">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a href="#thu-vien" class="nav-link  expand" href="#">Thư viện</a>
                    </li>
                </ul>
                <a href="tel:{!! MetaTag::get('phone_number') !!}" class="phone-call">
                    <div class="contact-vi"> Liên Hệ</div>
                    <div class="quick-alo-ph-circle"></div>
                    <div class="quick-alo-ph-circle-fill"></div>
                    <div class="quick-alo-ph-img-circle"> </div>
                </a>
                <div class="burgerIcon">
                    <div class="burgerLine"></div>
                    <div class="burgerLine"></div>
                    <div class="burgerLine lineBot"></div>
                </div>
                <!-- MENU MOBIE -->
                <nav class="navMobie">
                    <div class="container-menu-mobie">
                        <ul class="navMenu">
                            <li><a href="#gioi-thieu">Giới thiệu</a></li>
                            <hr>
                            <li><a href="#vi-tri">Vị trí</a></li>
                            <hr>
                            <li><a href="#tien-ich">Tiện ích</a></li>
                            <hr>
                            <li><a href="#kien-truc">Kiến trúc</a></li>
                            <hr>
                            <li><a href="#tin-tuc">Tin tức</a></li>
                            <hr>
                            <li><a href="#thu-vien">Thư viện</a></li>
                        </ul>
                    </div>

                </nav>
                <!-- END MENU MOBIE -->
            </div>
        </header>


        <section class="header-background-image">
            <div class="inner-background-image">
                <img alt="banner" src="{!! MetaTag::get('banner_desktop') !!}"
                    class="header-desktop img-header img-fluid object-fit-cover">
                <img  alt="banner" src="{!! MetaTag::get('banner_mobile') !!}"
                    class="header-mobile img-header img-fluid object-fit-cover">

                <a target="_blank" href="{!! MetaTag::get('company_link') !!}" class="company-logo" href="#"> <img
                        src="{{asset('client/img/company-logo.png')}}" class="img-fluid"></a>
                <a target="_blank" href="{!! MetaTag::get('fb_link') !!}" class="fb-logo" href="#"> <img
                        src="{{asset('client/img/facebook-header.png')}}" class="img-fluid"></a>
                <div class="container-slogan-text">
                    <div class="slogan-text">
                        <h2>Giữa Núi Đồi Cao Nguyên</h2>
                        <h1>VIÊN KIM CƯƠNG <br> VẸN SẮC TOÀN BÍCH</h1>
                        <div class="test"></div>
                    </div>
                </div>
            </div>
        </section>

        <div data-aos="zoom-in-down" class="poem text-center">
            <img class="img-fluid" src="{{asset('static/logo_poem.png')}}">
            {!! $setting['poem_text'] ?? '' !!}
        </div>
        <div id="gioi-thieu" class="full-width">
            <div class="detail-infomation">
                <div data-aos="fade-left" class="info-left">
                    {!! $setting['thuong_ngoan_my_canh'] ?? '' !!}
                    <div class="list-group-info">

                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <h1 class="h1-small">30 <span>Km</span></h1>
                                <p>Tổng diện tích quy <br> hoạch dự án</p>
                            </div>
                            <div>
                                <h1 class="h1-small">20 <span>Km</span></h1>
                                <p>Diện tích đường nội bộ <br> và các tiện ích dự án</p>
                            </div>
                        </div>


                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <h1 class="h1-small">50 <span>Km</span></h1>
                                <p>Mật độ xây dựng </p>
                            </div>
                            <div>
                                <h1 class="h1-small">90 <span>Km</span></h1>
                                <p>Diện tích đất ở</p>
                            </div>
                        </div>
                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <h1 class="h1-small">70 <span>Km</span></h1>
                                <p>Diện tích các lô đất</p>
                            </div>
                        </div>
                    </div>
                    <a target="_blank" href="{{route('pdf','hinh_anh_du_an')}}" class="custom-button block-1 ">
                        <div class="custom-button-div button-image-project"><span>Hình ảnh dự án</span></div>
                        <div class="container-arrow">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
                <div data-aos="fade-right" class="info-right">
                    <img class="img-fluid object-fit-cover" src="{{asset('static/thuong_ngoan_my_canh_big.png')}}">
                    <img class="object-fit-cover" src="static/thuong_ngoan_my_canh_small.png">
                </div>
            </div>
        </div>

        <section id="vi-tri" class="map-info">
            <div data-aos="fade-right" class="container-image-map">
                <img class="map-desktop custom-image-map" src="{{asset('static/map_desktop.png')}}">
                <img class="map-mobile custom-image-map" src="{{asset('static/map_mobile.png')}}">
                <div class="Absolute-Center">
                    <span class="bg-position-project">
                        <img class="logo-position-project" src="{{asset('client/img/logo-project-position.png')}}">
                        <span class="circle-fill-level-1"> </span>
                        <div class="circle-fill-level-2"> </div>
                    </span>

                </div>
            </div>
            <div data-aos="fade-left" class="map-info-content-right">
                {!! $setting['vi_tri_kim_cuong'] ?? '' !!}
                <a target="_blank" href="{{route('pdf','ban_do_vi_tri')}}" class="custom-button ">
                    <div class="custom-button-div button-style-map"><span>Bản Đồ Vị Trí</span></div>
                    <div class="container-arrow">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>
                <div class="image-tower">
                    <img src="{{asset('static/vi_tri_kim_cuong_image.png')}}" class="img-fluid">
                </div>
            </div>
        </section>

        <section data-aos="fade-up" data-aos-anchor-placement="top-bottom" id="tien-ich" class="utilities">
            {!! $setting['tien_ich_toan_my'] ?? '' !!}

            <img class="img-fluid" src="{{asset('static/tien_ich_toan_my_image.png')}}">

        </section>
        <section id="kien-truc" class="design-building">
            <div data-aos="fade-right" class="design-building-left">
                <img src="{{asset('static/kien_truc_chau_au_image.png')}}" class=" u-pos-tl u-fit u-object-fit-cover">
            </div>
            <div data-aos="fade-left" class="design-building-right">
                <div class="design-building-content">
                    <div class="inner-design-building-content">
                        {!! $setting['kien_truc_chau_au'] ?? '' !!}
                        <a target="_blank" href="{{route('pdf','mau_biet_thu_moi')}}" class="custom-button ">
                            <div class="custom-button-div button-style-house"><span>Mẫu Biệt Thự</span></div>
                            <div class="container-arrow">
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section data-aos="fade-down" id="tin-tuc" class="news-section">
            <div class="title-news ">
                <h2><strong>Tin tức</strong> Của Chúng Tôi</h2>
                <!-- <div class="slider_nav">
                 
                    </div> -->
                <div id="customNav">
                    <span class="btn am-next">
                        <svg viewBox="0 0 38.07 13.8799">
                            <path
                                d="M28.07,13.88c.43-1.27.85-2.63,1.24-4.08.26-.98.49-1.93.69-2.86-.2-.92-.43-1.88-.69-2.86-.39-1.44-.81-2.8-1.24-4.08a50.327,50.327,0,0,0,4.6,3.62,52.5714,52.5714,0,0,0,5.4,3.32,52.7769,52.7769,0,0,0-5.4,3.33A50.3479,50.3479,0,0,0,28.07,13.88Z" />
                            <rect y="6.2878" width="30" height="1.4966" /></svg>
                    </span>
                    <span class="btn am-prev">
                        <svg viewBox="0 0 38.07 13.8799">
                            <path
                                d="M28.07,13.88c.43-1.27.85-2.63,1.24-4.08.26-.98.49-1.93.69-2.86-.2-.92-.43-1.88-.69-2.86-.39-1.44-.81-2.8-1.24-4.08a50.327,50.327,0,0,0,4.6,3.62,52.5714,52.5714,0,0,0,5.4,3.32,52.7769,52.7769,0,0,0-5.4,3.33A50.3479,50.3479,0,0,0,28.07,13.88Z" />
                            <rect y="6.2878" width="30" height="1.4966" /></svg>
                    </span>
                </div>
            </div>
            <div id="owl-carousel-1" class="owl-carousel">

                @foreach ($articles as $article)
                <div class="intro-post">
                    <a class="image-post-container">
                        <div class="inner-image-post-container" data-id="{{ $article['id'] }}">
                            <img class=" img-fluid " src="{{ $article['thumbnail'] ?? null }}">
                            <div class="time-post">
                                <i class="fa fa-2x fa-calendar-alt" aria-hidden="true"></i>
                                <span>{{ $article['date_public'] }}</span>
                            </div>
                        </div>

                    </a>
                    <h2>{{$article['title']}} </h2>
                    <p>{{$article['description']}}.</p>
                    <hr>
                    <div class="more-info d-flex justify-content-between">
                        <a class="more-info-title" data-id="{{ $article['id'] }}">TÌM HIỂU THÊM
                            <svg viewBox="0 0 38.07 13.8799">
                                <path
                                    d="M28.07,13.88c.43-1.27.85-2.63,1.24-4.08.26-.98.49-1.93.69-2.86-.2-.92-.43-1.88-.69-2.86-.39-1.44-.81-2.8-1.24-4.08a50.327,50.327,0,0,0,4.6,3.62,52.5714,52.5714,0,0,0,5.4,3.32,52.7769,52.7769,0,0,0-5.4,3.33A50.3479,50.3479,0,0,0,28.07,13.88Z" />
                                <rect y="6.2878" width="30" height="1.4966" /></svg>
                        </a>
                        <a target="_blank" href="{{$article['fb_link'] }}" class="fb-link">
                            <img class=" img-fluid " src="{{asset('client/img/fb-link-news.png')}}" class="img-fluid">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="text-slider">
            <div data-aos="fade-down" data-aos-duration="1500" class="container-text-slider">
                <div id="owl-carousel-2" class="owl-carousel">
                    @foreach($slide_chu as $slide )
                    <div class="inner-text-slider">
                        {!! $slide['text'] ?? '' !!}
                    </div>
                    @endforeach
                </div>
                <div class="btn btn-pre-slider">
                    <span><i class="fa fa-2x fa-long-arrow-left" aria-hidden="true"></i></span>
                </div>
                <div class="btn  btn-pre-next-slider">
                    <span><i class="fa fa-2x fa-long-arrow-right" aria-hidden="true"></i></span>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1500">
                <div class="logo-379">
                    <img src="{{asset('client/img/logo-379.png')}}" class="img-fluid">
                </div>
                <h2>Nhà Phát triển bất động sản uy tín</h2>
            </div>
        </section>
        <section id="thu-vien" class="project-feed">
            <div class="inner-project-feed">
                <div  data-aos="zoom-in" class="project-feed-content-left">
                    <div  class="container-feed-image">
                        <a href="static/big_image.png"> <img alt="{!! MetaTag::get('des_big_image') !!}" src="{{asset('static/big_image.png')}}" class="img-fluid"> </a>
                        <h1>{!! MetaTag::get('des_big_image') !!}</h1>
                    </div>
                </div>
                <div data-aos="zoom-in" class="project-feed-content-right">
                    <div class="feed-left">
                        <div  class="container-feed-image">
                            <a href="static/small_image_1.png"> <img alt="{!! MetaTag::get('des_small_image_1') !!}" src="{{asset('static/small_image_1.png')}}" class="img-fluid"> </a>
                            <h1>{!! MetaTag::get('des_small_image_1') !!}</h1>
                        </div>

                        <div  class="container-feed-image">
                            <a href="static/small_image_2.png"> <img alt="{!! MetaTag::get('des_small_image_2') !!}" src="{{asset('static/small_image_2.png')}}" class="img-fluid"> </a>
                            <h1>{!! MetaTag::get('des_small_image_2') !!}</h1>
                        </div>
                    </div>
                    <div class="feed-right">
                        <div  class="container-feed-image">
                            <a href="static/small_image_3.png"> <img alt="{!! MetaTag::get('des_small_image_3') !!}" src="{{asset('static/small_image_3.png')}}" class="img-fluid"> </a>
                            <h1>{!! MetaTag::get('des_small_image_3') !!}</h1>
                        </div>
                        <div  class="container-feed-image">
                            <a href="static/small_image_4.png"> <img alt="{!! MetaTag::get('des_small_image_4') !!}" src="{{asset('static/small_image_4.png')}}" class="img-fluid"> </a>
                            <h1>{!! MetaTag::get('des_small_image_4') !!}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="inner-footer">
                <div class="above-footer">
                    <div class="above-footer-left">
                        <ul class="width-50 u-ul-footer">
                            <li><img src="{{asset('client/img/maison-footer.png')}}" class="img-fluid"></li>
                            <li><span>M</span> <span>Mall</span></li>
                            <li><span>A</span> <span>But I must explain to you <br> how all this mistaken idea <br> of
                                    denounc</span></li>
                        </ul>
                        <ul class=" width-50 u-ul-footer">
                            <li>Tổng Quan</li>
                            <li> <a class="expand footer-menu-item ">Giới thiệu</a></li>
                            <li> <a href="#vi-tri" class="expand footer-menu-item ">Vị trí</a></li>
                            <li> <a href="#kien-truc" class="expand footer-menu-item ">Kiến trúc</a></li>
                        </ul>
                    </div>
                    <div class="above-footer-right">
                        <ul class=" width-50 u-ul-footer">
                            <li>Tiện ích</li>
                            <li> <a href="#vi-tri" class="expand footer-menu-item ">Map</a></li>
                            <li> <a class="expand footer-menu-item ">Khu lân cận</a></li>
                        </ul>

                        <ul class="width-50 u-ul-footer">
                            <li>Cập nhật</li>
                            <li> <a href="#tin-tuc" class="expand footer-menu-item ">Tin tức</a></li>
                            <li> <a href="#thu-vien" class="expand footer-menu-item ">Thư viện</a></li>
                            <button id="scroll_to_top" class="btn btn-to-top"><i
                                    class="fa fa-3x fa-long-arrow-alt-up"></i></button>
                        </ul>



                    </div>
                </div>
                <div class="below-footer d-flex justify-content-between">
                    <div class="logo-footer-left">
                        <img src="{{asset('static/logo_footer.png')}}" class="img-fluid logo-footer">
                        <p>{!! MetaTag::get('footer_text') !!}</p>
                    </div>
                    <a href="tel:{!! MetaTag::get('phone_number') !!}" class="call-footer-right">
                        <h1>{!! MetaTag::get('phone_number') !!}</h1>
                        <div class="call-phone-footer"></div>
                    </a>
                </div>
            </div>

        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('client/js/app.js?v=2.0')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.2.0/dist/simpleParallax.min.js "></script>

    {{-- POPUP IMAGE --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

</body>

</html>