<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('client/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('client/font/font.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="    https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

</head>

<body>
    <div class="modal-wrapper">
        <div class="overlay"> </div>
        <div class="modal">
            <div class="head">
                <a class="btn-close trigger" href="javascript:;"></a>
            </div>
            <div class="content">
                hahahahaha
            </div>
        </div>
    </div>
    <div id="loader">
        <div class="count">100%</div>
    </div>

    <div class="container-fluid">
        <header>
            <div class="container-fluid d-flex justify-content-between menu-container">
                <a class="logo-desktop" href="#"><img class="img-fluid" src="{{asset('client/img/logo.svg.png')}}"></a>
                <a class="logo-mobile" href="#"><img class="img-fluid"
                        src="{{ asset('client/img/logo-mobile.png')}}"></a>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link expand" href="#gioi-thieu">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#vi-tri" class="nav-link expand">Vị trí</a>
                    </li>
                    <li class="nav-item">
                        <a href="#kien-truc" class="nav-link expand">Kiến trúc</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tien-ich" class="nav-link expand">Tiện ích</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tin-tuc" class="nav-link expand">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  expand" href="#">Thư viện</a>
                    </li>
                </ul>
                <div class="phone-call">
                    <div class="contact-vi"> Liên Hệ</div>
                    <div class="quick-alo-ph-circle"></div>
                    <div class="quick-alo-ph-circle-fill"></div>
                    <div class="quick-alo-ph-img-circle"> </div>
                </div>
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
                            <li><a href="#kien-truc">Kiến trúc</a></li>
                            <hr>
                            <li><a href="#tien-ich">Tiện ích</a></li>
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
                <img src="{{asset('client/img/header-image.png')}}"
                    class="header-desktop img-header img-fluid object-fit-cover">
                <img src="{{asset('client/img/header-image-mobile.png')}}"
                    class="header-mobile img-header img-fluid object-fit-cover">

                <a class="company-logo" href="#"> <img src="{{asset('client/img/company-logo.png')}}"
                        class="img-fluid"></a>
                <a class="fb-logo" href="#"> <img src="{{asset('client/img/facebook-header.png')}}"
                        class="img-fluid"></a>
                <div class="container-slogan-text">
                    <div class="slogan-text">
                        <h2>Giữa Núi Đồi Cao Nguyên</h2>
                        <h1>VIÊN KIM CƯƠNG <br> ĐỘC BẢN</h1>
                        <div class="test"></div>
                    </div>
                </div>
            </div>
        </section>

        <div data-aos="flip-up" class="poem text-center">
            <img class="img-fluid" src="{{asset('client/img/logo_poem.png')}}">
            <p>
                ​Có một nơi được gọi là nhà và cũng là nơi trú ẩn bình yên <br> không khói bụi, ồn ào và vội vã. Hãy trở
                về để cảm nhận một không gian<br> sống riêng tư, sang trọng giữa lòng Châu Âu biệt lập và tiện nghi.<br>
                Đó là chốn thiên đường lý
                tưởng để tận hưởng một cuộc sống<br> thời thượng, an nhiên và hạnh phúc.
            </p>
        </div>
        <div class="full-width">
            <div id="gioi-thieu" class="detail-infomation">
                <div data-aos="fade-left" class="info-left">
                    <div class="title">
                        Thưởng Ngoạn <strong>Mỹ Cảnh</strong> <br> <strong>Châu Âu</strong> Ngay Tại Nhà
                    </div>
                    <p>
                        Maison de Mộc Châu chính là viên kim cương vẹn sắc bích, sánglấp lánh giữa núi đồi Tây Bắc. Cảnh
                        sắc Châu Âu sang trọng,kiêu sa cùng hệ thống tiện ích toàn mỹ tạo nên một chuẩn mực sống đô thị
                        đẳng cấp mới lần đầu tiên xuất hiện tại Mộc Châu.
                    </p>
                    <div class="list-group-info">

                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <h1>30 <span>Km</span></h1>
                                <p>Tổng diện tích quy <br> hoạch dự án</p>
                            </div>
                            <div>
                                <h1>20 <span>Km</span></h1>
                                <p>Diện tích đường nội bộ <br> và các tiện ích dự án</p>
                            </div>
                        </div>


                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <h1>50 <span>Km</span></h1>
                                <p>Mật độ xây dựng </p>
                            </div>
                            <div>
                                <h1>90 <span>Km</span></h1>
                                <p>Diện tích đất ở</p>
                            </div>
                        </div>
                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <h1>70 <span>Km</span></h1>
                                <p>Diện tích các lô đất</p>
                            </div>
                        </div>
                    </div>
                    <a class="custom-button block-1 ">
                        <div class="custom-button-div button-image-project"><span>Hình ảnh dự án</span></div>
                        <div class="container-arrow">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
                <div data-aos="fade-right" class="info-right">
                    <img class="img-fluid object-fit-cover" src="{{asset('client/img/big-image-detail-right.png')}}">
                    <img class="object-fit-cover" src="client/img/small-image-detail-right.png">
                </div>
            </div>
        </div>

        <section id="vi-tri" class="map-info">
            <div data-aos="fade-right" class="container-image-map">
                <img class="map-desktop custom-image-map" src="{{asset('client/img/map-custom.png')}}">
                <img class="map-mobile custom-image-map" src="{{asset('client/img/map-custom-mobile.png')}}">
                <div class="Absolute-Center">
                    <span class="bg-position-project">
                        <img class="logo-position-project" src="{{asset('client/img/logo-project-position.png')}}">
                        <span class="circle-fill-level-1"> </span>
                        <div class="circle-fill-level-2"> </div>
                    </span>

                </div>
            </div>
            <div data-aos="fade-left" class="map-info-content-right">
                <h1>Vị trí <strong>Kim Cương</strong> <br> <strong>Tầm Nhìn</strong> Đắt Giá </h1>
                <p>Nằm tựa bên sườn đồi thảo nguyên xanh ngát, Maison de MộcChâu được thừa hưởng một vị trí đắt giá,
                    thuận tiện kết nối tới trung tâm hành chính, kinh tế và các địa điểm tham quan du lịch nổi tiếng từ
                    trục đường quốc lộ 43 nhanh chóng, dễ
                    dàng.
                </p>
                <a class="custom-button ">
                    <div class="custom-button-div button-style-map"><span>Bản Đồ Vị Trí</span></div>
                    <div class="container-arrow">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>
                <div class="image-tower">
                    <img src="{{asset('client/img/tower.png')}}" class="img-fluid">
                </div>
            </div>
        </section>

        <section data-aos="fade-up" data-aos-anchor-placement="top-bottom" id="tien-ich" class="utilities">
            <h1><strong>Tiện Ích</strong> Toàn Mỹ</h1>
            <p class="utilities-intro">Maison de Mộc Châu tạo ra một miền sống mới vượt lên trên cả những chuẩn mực tiện
                ích từng có. Đó là một đẳng <br> cấp sống thời thượng giao hòa giữa nghệ thuật, thiên nhiên và tiện ích.
            </p>
            <img class="img-fluid" src="{{asset('client/img/tien-ich.png')}}">

        </section>
        <section id="kien-truc" class="design-building">
            <div data-aos="fade-right" class="design-building-left">
                <img src="{{asset('client/img/design-building-left.png')}}" class=" u-pos-tl u-fit u-object-fit-cover">
            </div>
            <div data-aos="fade-left" class="design-building-right">
                <div class="design-building-content">
                    <div class="inner-design-building-content">
                        <h2>
                            <strong>Kiến Trúc Châu Âu </strong><br>Thời Thượng
                        </h2>
                        <p>Kiến trúc hoàn mỹ đậm chất nghệ thuật thời thượng được ghi dấu trong từng chi tiết. Mỗi căn
                            biệt thự đều được thiết kế trang nhã, tinh tế gần gũi với thiên nhiên kết hợp cùng hệ thống
                            váchkính an toàn trong phòng sẽ đem đến cho
                            gia chủ góc nhìn toàn cảnh núi đồi thơ mộng.</p>
                        <a class="custom-button ">
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
            <div class="title-news d-flex justify-content-between">
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
                <div class="intro-post">
                    <a class="image-post-container">
                        <div class="inner-image-post-container">
                            <img class=" img-fluid " src="client/img/image-post.png">
                            <div class="time-post">
                                <i class="fa fa-2x fa-calendar-alt" aria-hidden="true"></i>
                                <span>21 Tháng 5 Năm 2020</span>
                            </div>
                        </div>

                    </a>
                    <h2>Sed Ut Perspiciatis Unde Omnis Iste Natus Error Sit </h2>
                    <p>laudantium, totam rem aperiam, eaqulaudatium, totam rem aperiam, eaque ipsa quae ab illo
                        inventore veritatis et ...</p>
                    <hr>
                    <div class="more-info d-flex justify-content-between">
                        <a class="more-info-title">TÌM HIỂU THÊM
                            <svg viewBox="0 0 38.07 13.8799">
                                <path
                                    d="M28.07,13.88c.43-1.27.85-2.63,1.24-4.08.26-.98.49-1.93.69-2.86-.2-.92-.43-1.88-.69-2.86-.39-1.44-.81-2.8-1.24-4.08a50.327,50.327,0,0,0,4.6,3.62,52.5714,52.5714,0,0,0,5.4,3.32,52.7769,52.7769,0,0,0-5.4,3.33A50.3479,50.3479,0,0,0,28.07,13.88Z" />
                                <rect y="6.2878" width="30" height="1.4966" /></svg>
                        </a>
                        <a class="fb-link">
                            <img class=" img-fluid " src="{{asset('client/img/fb-link-news.png')}}" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="intro-post">
                    <a class="image-post-container">
                        <div class="inner-image-post-container">
                            <img class=" img-fluid " class="img-fluid" src="{{asset('client/img/image-post.png')}}">
                            <div class="time-post">
                                <i class="fa fa-2x fa-calendar-alt" aria-hidden="true"></i>
                                <span>21 Tháng 5 Năm 2020</span>
                            </div>
                        </div>

                    </a>
                    <h2>Sed Ut Perspiciatis Unde Omnis Iste Natus Error Sit </h2>
                    <p>laudantium, totam rem aperiam, eaqulaudatium, totam rem aperiam, eaque ipsa quae ab illo
                        inventore veritatis et ...</p>
                    <hr>
                    <div class="more-info d-flex justify-content-between">
                        <a class="more-info-title">TÌM HIỂU THÊM
                            <svg viewBox="0 0 38.07 13.8799">
                                <path
                                    d="M28.07,13.88c.43-1.27.85-2.63,1.24-4.08.26-.98.49-1.93.69-2.86-.2-.92-.43-1.88-.69-2.86-.39-1.44-.81-2.8-1.24-4.08a50.327,50.327,0,0,0,4.6,3.62,52.5714,52.5714,0,0,0,5.4,3.32,52.7769,52.7769,0,0,0-5.4,3.33A50.3479,50.3479,0,0,0,28.07,13.88Z" />
                                <rect y="6.2878" width="30" height="1.4966" /></svg>
                        </a>
                        <a class="fb-link">
                            <img src="{{asset('client/img/fb-link-news.png')}}" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="intro-post">
                    <a class="image-post-container">
                        <div class="inner-image-post-container">
                            <img class="img-fluid" src="{{asset('client/img/image-post.png')}}">
                            <div class="time-post">
                                <i class="fa fa-calendar-alt" aria-hidden="true"></i>
                                <span>21 Tháng 5 Năm 2020</span>
                            </div>
                        </div>

                    </a>
                    <h2>Sed Ut Perspiciatis Unde Omnis Iste Natus Error Sit </h2>
                    <p>laudantium, totam rem aperiam, eaqulaudatium, totam rem aperiam, eaque ipsa quae ab illo
                        inventore veritatis et ...</p>
                    <hr>
                    <div class="more-info d-flex justify-content-between">
                        <a class="more-info-title">TÌM HIỂU THÊM
                            <svg viewBox="0 0 38.07 13.8799">
                                <path
                                    d="M28.07,13.88c.43-1.27.85-2.63,1.24-4.08.26-.98.49-1.93.69-2.86-.2-.92-.43-1.88-.69-2.86-.39-1.44-.81-2.8-1.24-4.08a50.327,50.327,0,0,0,4.6,3.62,52.5714,52.5714,0,0,0,5.4,3.32,52.7769,52.7769,0,0,0-5.4,3.33A50.3479,50.3479,0,0,0,28.07,13.88Z" />
                                <rect y="6.2878" width="30" height="1.4966" /></svg>
                        </a>
                        <a class="fb-link">
                            <img src="{{asset('client/img/fb-link-news.png')}}" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section data-aos="zoom-in-down" class="text-slider">
            <div class="container-text-slider">
                <div id="owl-carousel-2" class="owl-carousel">
                    <div class="inner-text-slider">
                        <h1><strong>Niềm Tin</strong> Trọn Vẹn</h1>
                        <p>Công ty TNHH Phát triển đô thị và Xây dựng 379 tiên phong kiến tạo những khu <br> đô thị kiểu
                            mẫu tại Thái Bình và là phát triển uy tín các dự án chung cư phức <br> hợp tại Hà Nội</p>
                    </div>
                    <div class="inner-text-slider">
                        <h1><strong>Niềm Tin</strong> Đã Trọn Vẹn</h1>
                        <p>Lorem lorem lorem <br> đô thị kiểu mẫu tại Thái Bình và là phát triển uy tín các dự án chung
                            cư phức <br> hợp tại Hà Nội</p>
                    </div>
                </div>
                <div class="btn btn-pre-slider">
                    <span><i class="fa fa-2x fa-long-arrow-left" aria-hidden="true"></i></span>
                </div>
                <div class="btn  btn-pre-next-slider">
                    <span><i class="fa fa-2x fa-long-arrow-right" aria-hidden="true"></i></span>
                </div>
            </div>


            <div class="logo-379">
                <img src="{{asset('client/img/logo-379.png')}}" class="img-fluid">
            </div>
            <h2>Nhà Phát triển bất động sản uy tín</h2>

        </section>
        <section data-aos="fade-up" class="project-feed">
            <div class="inner-project-feed">
                <div class="project-feed-content-left">
                    <div class="container-feed-image">
                        <a> <img src="{{asset('client/img/feed-left.png')}}" class="img-fluid"></a>
                        <h1>379 Real Estate</h1>
                    </div>
                </div>
                <div class="project-feed-content-right">
                    <div class="feed-left">
                        <div class="container-feed-image">
                            <a> <img src="{{asset('client/img/-right.png')}}" class="img-fluid"> </a>
                            <h1>Athena Complex</h1>
                        </div>

                        <div class="container-feed-image">
                            <a> <img src="{{asset('client/img/-right.png')}}" class="img-fluid"> </a>
                            <h1>Monkey d Luffy</h1>
                        </div>
                    </div>
                    <div class="feed-right">
                        <div class="container-feed-image">
                            <a> <img src="{{asset('client/img/-right.png')}}" class="img-fluid"> </a>
                            <h1>hahaha</h1>
                        </div>
                        <div class="container-feed-image">
                            <a> <img src="{{asset('client/img/-right.png')}}" class="img-fluid"> </a>
                            <h1>hahaha</h1>
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
                            <li> <a class="expand footer-menu-item ">Vị trí</a></li>
                            <li> <a class="expand footer-menu-item ">Kiến trúc</a></li>
                        </ul>
                    </div>
                    <div class="above-footer-right">
                        <ul class=" width-50 u-ul-footer">
                            <li>Tiện ích</li>
                            <li> <a class="expand footer-menu-item ">Map</a></li>
                            <li> <a class="expand footer-menu-item ">Khu lân cận</a></li>
                        </ul>

                        <ul class="width-50 u-ul-footer">
                            <li>Cập nhật</li>
                            <li> <a class="expand footer-menu-item ">Tin tức</a></li>
                            <li> <a class="expand footer-menu-item ">Thư viện</a></li>
                            <button id="scroll_to_top" class="btn btn-to-top"><i
                                    class="fa fa-3x fa-long-arrow-alt-up"></i></button>
                        </ul>



                    </div>
                </div>
                <div class="below-footer d-flex justify-content-between">
                    <div class="logo-footer-left">
                        <img src="{{asset('client/img/logo-footer.png')}}" class="img-fluid logo-footer">
                        <p>PHÁT TRIỂN BỞI 379</p>
                    </div>
                    <div class="call-footer-right">
                        <h1>0975152379

                        </h1>
                        <div class="call-phone-footer"></div>
                    </div>
                </div>
            </div>

        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('client/js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.2.0/dist/simpleParallax.min.js "></script>

</body>

</html>