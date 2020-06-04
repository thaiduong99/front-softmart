@extends('fontend.base')
@section('content')
        <!-- mega slide -->
        <div class="container-fluid mega__slide">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <div id="carouselExampleControls" class="carousel slide mega__slide__box" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="slide__text">
                                    <p class="slide__text--top">
                                        Meet The Celebrities
                                    </p>
                                    <h3 class="slide__text--title">
                                        Kitchenware, Table Lamp and Black Goji
                                    </h3>
                                    <p class="slide__text--price">
                                        Only from
                                        <span class="slide__text--price--dolar">$19. <sup>99</sup></span>
                                    </p>
                                    <a href="" class="btn slide__text--btn">
                                        Shop Now >
                                    </a>
                                </div>
                                <img src="fontend/assets/img/image-slider-011.png" class="d-block" alt="..." />
                            </div>
                            <div class="carousel-item">
                                <div class="slide__text">
                                    <p class="slide__text--top">
                                        Meet The Celebrities
                                    </p>
                                    <h3 class="slide__text--title">
                                        Kitchenware, Table Lamp and Black Goji
                                    </h3>
                                    <p class="slide__text--price">
                                        Only from
                                        <span class="slide__text--price--dolar">$19. <sup>99</sup></span>
                                    </p>
                                    <a href="" class="btn slide__text--btn">
                                        Shop Now >
                                    </a>
                                </div>
                                <img src="fontend/assets/img/image-slider-021.png" class="d-block" alt="..." />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next next-img" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner grid -->
        <div class="container">
            <div class="banner__grid row">
                <div class="banner__grid--item col-md-3 col-6">
                    <div class="banner__item--icon">
                        <i class="fa fa-truck banner--icon"></i>
                    </div>
                    <div class="banner__box--text">
                        <h3 class="banner__text--title">
                            ispem ispem ispem
                        </h3>
                        <p class="banner__text--detail">
                            Free
                        </p>
                    </div>
                </div>
                <div class="banner__grid--item col-md-3 col-6">
                    <div class="banner__item--icon">
                        <i class="fa fa-truck banner--icon"></i>
                    </div>
                    <div class="banner__box--text">
                        <h3 class="banner__text--title">
                            ispem ispem ispem
                        </h3>
                        <p class="banner__text--detail">
                            Free
                        </p>
                    </div>
                </div>
                <div class="banner__grid--item col-md-3 col-6">
                    <div class="banner__item--icon">
                        <i class="fa fa-truck banner--icon"></i>
                    </div>
                    <div class="banner__box--text">
                        <h3 class="banner__text--title">
                            ispem ispem ispem
                        </h3>
                        <p class="banner__text--detail">
                            Free
                        </p>
                    </div>
                </div>
                <div class="banner__grid--item col-md-3 col-6">
                    <div class="banner__item--icon">
                        <i class="fa fa-truck banner--icon"></i>
                    </div>
                    <div class="banner__box--text">
                        <h3 class="banner__text--title">
                            ispem ispem ispem
                        </h3>
                        <p class="banner__text--detail">
                            Free
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner column -->
        <div class="container">
            <div class="row banner__column">
                <div class="col-md-4 banner__column-item">
                    <a href="" class="banner__column-item--link">
                        <img src="fontend/assets/img/banner-01.jpg" class="img-fluid banner__column-item--img" alt="banner product" />
                    </a>
                </div>
                <div class="col-md-4 banner__column-item">
                    <a href="" class="banner__column-item--link">
                        <img src="fontend/assets/img/banner-02.jpg" class="img-fluid banner__column-item--img" alt="banner product" />
                    </a>
                </div>
                <div class="col-md-4 banner__column-item">
                    <a href="" class="banner__column-item--link">
                        <img src="fontend/assets/img/banner-03.jpg" class="img-fluid banner__column-item--img" alt="banner product" />
                    </a>
                </div>
            </div>
        </div>
        <!-- custom view category -->
        <div class="container ctvc mt-5">
            <h3 class="ctvc__title">
                Danh mục sản phẩm
            </h3>
           <div class="row ctvc__border">
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>
                <!--  -->
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-sm-4 ctvc__item">
                    <img src="fontend/assets/img/product-demo1.jpg" class="img-fluid ctvc__img" alt="">
                    <div class="ctvc__item-content">
                        <a href="#">Choppers & Graters</a>
                        <span>8 item</span>
                    </div>
                </div>

                <div class="ctvc__item-content text-center mb-5" style="width: 100%">
                    <a href="#">Show More <i class="fa fa-chevron-right"></i></a>
                </div>
           </div>
        </div>
        <!-- ctvp -->
        <div class="container ctvp">
            <h3 class="ctvp__title">
                Phần mềm ERP 1
            </h3>
            <div class="ctvp__box">
                <div class="carousel-inner ctvp__box__slide">
                    <div class="carousel-item active">
                        <div class=" row__item__product">
                            <!-- item product -->
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container ctvp">
            <h3 class="ctvp__title">
                Phần mềm ERP 1
            </h3>
            <div class="ctvp__box">
                <div class="carousel-inner ctvp__box__slide">
                    <div class="carousel-item active">
                        <div class=" row__item__product">
                            <!-- item product -->
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container ctvp">
            <h3 class="ctvp__title">
                Phần mềm ERP 1
            </h3>
            <div class="ctvp__box">
                <div class="carousel-inner ctvp__box__slide">
                    <div class="carousel-item active">
                        <div class=" row__item__product">
                            <!-- item product -->
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                            <div class=" item__product">
                                <span class="onsale">
                                    <span class="saled">
                                        -17%
                                    </span>
                                    <br />
                                    <span class="featured">
                                        Hot
                                    </span>
                                </span>
                                <!-- group button on hover -->
                                <div class="group-button">
                                    <div class="add-cart">
                                        <i class="fa fa-cart-plus group-button--icon"></i>
                                    </div>
                                    <div class="btn-wishliss">
                                        <i class="fa fa-heart group-button--icon"></i>
                                    </div>
                                    <div class="quick-view">
                                        <i class="fa fa-eye group-button--icon"></i>
                                    </div>
                                </div>
                                <!-- caption -->
                                <div class="caption">
                                    <h3 class="name-product">Cabinet</h3>
                                    <div class="price-product">
                                        <span class="price-product--cost">
                                            1.000.000đ
                                        </span>

                                        <span class="price-product--sale">-900.000</span>
                                    </div>
                                </div>
                                <img src="fontend/assets/img/product-demo1.jpg" class="product__img" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog -->
        <div class="container blog">
            <h3 class="blog__title">
                Blog
            </h3>

            <div class="blog__box">
                    <div class="carousel-inner ctvp__box__slide">
                        <div class="carousel-item active">
                            <div class="row__item__blog">
                                <!-- item blog -->
                                <div class="item__blog">
                                    <div class="item__blog--box">
                                        <img src="fontend/assets/img/blog-01-570x330.jpeg" class="img-fluid blog__img" alt="" />
                                        <div class="blog__time">
                                            <div class="blog__time--date">
                                                <img src="fontend/assets/img/icon-calender.png" class="img-fluid icon__blog" alt="" srcset="" />
                                                <p class="blog__time--date">09/05/2020</p>
                                            </div>
                                            <div class="blog__time--comment">
                                                <img src="fontend/assets/img/commetn-calender.png" class="img-fluid icon__blog" alt="" />
                                                <p class="comment__amount">
                                                    3
                                                </p>
                                            </div>
                                        </div>
                                        <h4 class="blog__title">
                                            <a href="blog.html" class="blog__title">
                                                9 Signs Follow For You Need Help With Furniture
                                            </a>
                                        </h4>
                                        <a href="blog.html" class="blog__link">
                                            Read more
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="item__blog">
                                    <div class="item__blog--box">
                                        <img src="fontend/assets/img/blog-01-570x330.jpeg" class="img-fluid blog__img" alt="" />
                                        <div class="blog__time">
                                            <div class="blog__time--date">
                                                <img src="fontend/assets/img/icon-calender.png" class="img-fluid icon__blog" alt="" srcset="" />
                                                <p class="blog__time--date">09/05/2020</p>
                                            </div>
                                            <div class="blog__time--comment">
                                                <img src="fontend/assets/img/commetn-calender.png" class="img-fluid icon__blog" alt="" />
                                                <p class="comment__amount">
                                                    3
                                                </p>
                                            </div>
                                        </div>
                                        <h4 class="blog__title">
                                            <a href="blog.html" class="blog__title">
                                                9 Signs Follow For You Need Help With Furniture
                                            </a>
                                        </h4>
                                        <a href="blog.html" class="blog__link">
                                            Read more
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="item__blog">
                                    <div class="item__blog--box">
                                        <img src="fontend/assets/img/blog-01-570x330.jpeg" class="img-fluid blog__img" alt="" />
                                        <div class="blog__time">
                                            <div class="blog__time--date">
                                                <img src="fontend/assets/img/icon-calender.png" class="img-fluid icon__blog" alt="" srcset="" />
                                                <p class="blog__time--date">09/05/2020</p>
                                            </div>
                                            <div class="blog__time--comment">
                                                <img src="fontend/assets/img/commetn-calender.png" class="img-fluid icon__blog" alt="" />
                                                <p class="comment__amount">
                                                    3
                                                </p>
                                            </div>
                                        </div>
                                        <h4 class="blog__title">
                                            <a href="blog.html" class="blog__title">
                                                9 Signs Follow For You Need Help With Furniture
                                            </a>
                                        </h4>
                                        <a href="blog.html" class="blog__link">
                                            Read more
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="item__blog">
                                    <div class="item__blog--box">
                                        <img src="fontend/assets/img/blog-01-570x330.jpeg" class="img-fluid blog__img" alt="" />
                                        <div class="blog__time">
                                            <div class="blog__time--date">
                                                <img src="fontend/assets/img/icon-calender.png" class="img-fluid icon__blog" alt="" srcset="" />
                                                <p class="blog__time--date">09/05/2020</p>
                                            </div>
                                            <div class="blog__time--comment">
                                                <img src="fontend/assets/img/commetn-calender.png" class="img-fluid icon__blog" alt="" />
                                                <p class="comment__amount">
                                                    3
                                                </p>
                                            </div>
                                        </div>
                                        <h4 class="blog__title">
                                            <a href="blog.html" class="blog__title">
                                                9 Signs Follow For You Need Help With Furniture
                                            </a>
                                        </h4>
                                        <a href="blog.html" class="blog__link">
                                            Read more
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="item__blog">
                                    <div class="item__blog--box">
                                        <img src="fontend/assets/img/blog-01-570x330.jpeg" class="img-fluid blog__img" alt="" />
                                        <div class="blog__time">
                                            <div class="blog__time--date">
                                                <img src="fontend/assets/img/icon-calender.png" class="img-fluid icon__blog" alt="" srcset="" />
                                                <p class="blog__time--date">09/05/2020</p>
                                            </div>
                                            <div class="blog__time--comment">
                                                <img src="fontend/assets/img/commetn-calender.png" class="img-fluid icon__blog" alt="" />
                                                <p class="comment__amount">
                                                    3
                                                </p>
                                            </div>
                                        </div>
                                        <h4 class="blog__title">
                                            <a href="blog.html" class="blog__title">
                                                9 Signs Follow For You Need Help With Furniture
                                            </a>
                                        </h4>
                                        <a href="blog.html" class="blog__link">
                                            Read more
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="item__blog">
                                    <div class="item__blog--box">
                                        <img src="fontend/assets/img/blog-01-570x330.jpeg" class="img-fluid blog__img" alt="" />
                                        <div class="blog__time">
                                            <div class="blog__time--date">
                                                <img src="fontend/assets/img/icon-calender.png" class="img-fluid icon__blog" alt="" srcset="" />
                                                <p class="blog__time--date">09/05/2020</p>
                                            </div>
                                            <div class="blog__time--comment">
                                                <img src="fontend/assets/img/commetn-calender.png" class="img-fluid icon__blog" alt="" />
                                                <p class="comment__amount">
                                                    3
                                                </p>
                                            </div>
                                        </div>
                                        <h4 class="blog__title">
                                            <a href="blog.html" class="blog__title">
                                                9 Signs Follow For You Need Help With Furniture
                                            </a>
                                        </h4>
                                        <a href="blog.html" class="blog__link">
                                            Read more
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection