@extends('layouts.master')
@section('title')
    Index
@endsection
@section('css')
    <!-- extra css -->
    <!--Swiper slider css-->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="position-relative">
        <div id="ecommerceHero" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="ecommerce-home bg-primary-subtle"
                        style="background-image: url('{{ URL::asset('build/images/ecommerce/home/img-1.png') }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <p class="fs-15 fw-semibold text-uppercase"><i
                                                class="ri-flashlight-fill text-info align-bottom me-1"></i> Save up to <span
                                                class="text-danger">50%</span> off</p>
                                        <h1 class="display-4 fw-semibold text-capitalize lh-base mb-4">iPhone 13 Pro Max</h1>
                                        {{-- <p class="fs-18 mb-4"><b>40% off</b> up to on all selected products</p> --}}
                                        <button class="btn btn-primary btn-hover mt-4"><i
                                                class="ph-shopping-cart align-middle me-1"></i> Shop Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="ecommerce-home bg-primary-subtle"
                        style="background-image: url('{{ URL::asset('build/images/ecommerce/home/img-2.png') }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <p class="fs-15 fw-semibold text-uppercase"><i
                                                class="ri-flashlight-fill text-info align-bottom me-1"></i> Save up to <span
                                                class="text-danger">50%</span> off</p>
                                        <h1 class="display-4 fw-semibold text-capitalize lh-base mb-4">iPad Pro</h1>
                                        {{-- <p class="fs-18 mb-4"><b>40% off</b> up to on all selected products</p> --}}
                                        <button class="btn btn-primary btn-hover mt-4"><i
                                                class="ph-shopping-cart align-middle me-1"></i> Shop Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="ecommerce-home bg-primary-subtle"
                        style="background-image: url('{{ URL::asset('build/images/ecommerce/home/img-3.png') }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <p class="fs-15 fw-semibold text-uppercase"><i
                                                class="ri-flashlight-fill text-info align-bottom me-1"></i> Save up to <span
                                                class="text-danger">50%</span> off</p>
                                        <h1 class="display-4 fw-semibold text-capitalize lh-base">Pro Smart watches for
                                            smart People</h1>
                                        <p class="fs-18 mb-4"><b>40% off</b> up to on all selected products</p>
                                        <button class="btn btn-primary btn-hover"><i
                                                class="ph-shopping-cart align-middle me-1"></i> Shop Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#ecommerceHero" data-bs-slide="prev">
                <i class="ph-caret-left"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#ecommerceHero" data-bs-slide="next">
                <i class="ph-caret-right"></i>
            </button>
        </div>
    </section>

    <!-- START PRODUCT -->
    <section class="section py-0">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col">
                    <div class="text-left">
                        <h3 class="mb-3">Best Seller</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row gallery-wrapper mt-2">

                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 seller hot arrival"
                            data-category="hot arrival">
                            <div class="card overflow-hidden">
                                <div class="bg-warning-subtle rounded-top py-4">
                                    <div class="gallery-product">
                                        <img src="{{ URL::asset('build/images/products/iphne13promax/img-1.png') }}" alt=""
                                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
                                    <p class="fs-11 fw-medium badge bg-primary py-2 px-3 product-lable mb-0">Best Arrival
                                    </p>
                                    <div class="gallery-product-actions">
                                        <div class="mb-2">
                                            <button type="button" class="btn btn-danger btn-sm custom-toggle"
                                                data-bs-toggle="button">
                                                <span class="icon-on"><i
                                                        class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                                <span class="icon-off"><i
                                                        class="mdi mdi-heart align-bottom fs-15"></i></span>
                                            </button>
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-success btn-sm custom-toggle"
                                                data-bs-toggle="button">
                                                <span class="icon-on"><i
                                                        class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                                <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-btn px-3">
                                        <a href="shop-cart" class="btn btn-primary btn-sm w-75 add-btn"><i
                                                class="mdi mdi-cart me-1"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="product-details">
                                            <h6 class="fs-15 lh-base text-truncate mb-0">IPhone 13 Pro Max</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">5.0 <i
                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                            <h5 class="mb-0">$650.00
                                                {{-- <span
                                                    class="text-muted fs-12"><del>$425.00</del></span> --}}
                                                </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 seller hot" data-category="seller hot">
                            <div class="card overflow-hidden">
                                <div class="bg-info-subtle rounded-top py-4">
                                    <div class="gallery-product">
                                        <img src="{{ URL::asset('build/images/products/ipadm1/1.png') }}" alt=""
                                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
                                    <div class="gallery-product-actions">
                                        <div class="mb-2">
                                            <button type="button" class="btn btn-danger btn-sm custom-toggle"
                                                data-bs-toggle="button">
                                                <span class="icon-on"><i
                                                        class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                                <span class="icon-off"><i
                                                        class="mdi mdi-heart align-bottom fs-15"></i></span>
                                            </button>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success btn-sm custom-toggle"
                                                data-bs-toggle="button">
                                                <span class="icon-on"><i
                                                        class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                                <span class="icon-off"><i
                                                        class="mdi mdi-eye align-bottom fs-15"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-btn px-3">
                                        <a href="shop-cart" class="btn btn-primary btn-sm w-75 add-btn"><i
                                                class="mdi mdi-cart me-1"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="product-details">
                                            <h6 class="fs-15 lh-base text-truncate mb-0">IPad Pro </h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">4.5 <i
                                                    class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="mb-0">$450.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 trendy" data-category="trendy">
                            <div class="card overflow-hidden">
                                <div class="bg-danger-subtle rounded-top py-4">
                                    <div class="gallery-product">
                                        <img src="{{ URL::asset('build/images/products/smartwatches/1.png') }}" alt=""
                                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
                                    <div class="gallery-product-actions">
                                        <div class="mb-2">
                                            <button type="button" class="btn btn-danger btn-sm custom-toggle"
                                                data-bs-toggle="button">
                                                <span class="icon-on"><i
                                                        class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                                <span class="icon-off"><i
                                                        class="mdi mdi-heart align-bottom fs-15"></i></span>
                                            </button>
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-success btn-sm custom-toggle"
                                                data-bs-toggle="button">
                                                <span class="icon-on"><i
                                                        class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                                <span class="icon-off"><i
                                                        class="mdi mdi-eye align-bottom fs-15"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-btn px-3">
                                        <a href="shop-cart" class="btn btn-primary btn-sm w-75 add-btn"><i
                                                class="mdi mdi-cart me-1"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="product-details">
                                            <h6 class="fs-15 lh-base text-truncate mb-0">Smart Watches</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">4.5 <i
                                                    class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="mb-0">$49.99
                                                {{-- <span
                                                    class="text-muted fs-12"><del>$399.00</del></span> --}}
                                                </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 trendy" data-category="trendy">
                            <div class="card overflow-hidden">
                                <div class="bg-warning-subtle rounded-top py-4">
                                    <div class="gallery-product">
                                        <img src="{{ URL::asset('build/images/products/img-2.png') }}" alt=""
                                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
                                    <div class="gallery-product-actions">
                                        <div class="mb-2">
                                            <button type="button" class="btn btn-danger btn-sm custom-toggle"
                                                data-bs-toggle="button">
                                                <span class="icon-on"><i
                                                        class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                                <span class="icon-off"><i
                                                        class="mdi mdi-heart align-bottom fs-15"></i></span>
                                            </button>
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-success btn-sm custom-toggle"
                                                data-bs-toggle="button">
                                                <span class="icon-on"><i
                                                        class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                                <span class="icon-off"><i
                                                        class="mdi mdi-eye align-bottom fs-15"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-btn px-3">
                                        <a href="shop-cart" class="btn btn-primary btn-sm w-75 add-btn"><i
                                                class="mdi mdi-cart me-1"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="product-details">
                                            <h6 class="fs-15 lh-base text-truncate mb-0">Hoodie Newyorker Winter Clothes
                                            </h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">3.1 <i
                                                    class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="mb-0">$159.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                    </div>

                    <div class="mt-4 text-center">
                        <a href="product-list-defualt" class="btn btn-soft-primary btn-hover">View All Products <i
                                class="mdi mdi-arrow-right align-middle ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PRODUCT -->

    {{-- <section class="position-relative bg-danger-subtle bg-cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="py-5">
                        <p class="text-uppercase  badge bg-danger-subtle text-danger fs-13">Get <b>50%</b> off to your order</p>

                        <h1 class="lh-base fw-semibold mb-3 text-capitalize">Deal off the week</h1>
                        <p class="fs-16 mt-2">The hands-down winner of denim-friendly sandal styles has to be flat and
                            simple thong sandals. They can be paired with virtually every style of women's jeans imaginable,
                            and, as long as you can stand the toe strap, they tend to be really comfortable as well.</p>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="ecommerce-land-countdown mt-3 mb-0">
                                    <div data-countdown="Jan 30, 2025" class="countdownlist"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-2 d-flex gap-2">
                            <a href="#!" class="btn btn-primary w-md btn-hover">Shopping Now</a>
                            <a href="#!" class="btn btn-danger w-md btn-hover">Subscribe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-lg-n5">
                        <img src="{{ URL::asset('build/images/ecommerce/home/cta.png') }}" alt="" class="mt-lg-n4">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h3 class="mb-3">Latest Arrival</h3>
                        <p class="text-muted fs-15">What you wear is how you present yourself to the world, especially
                            today, when human contacts are so quick. Fashion is instant language.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper latest-slider mt-4" dir="ltr">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-wrapper pt-5">

                            <div class="swiper-slide">
                                <div class="card overflow-hidden">
                                    <div class="bg-dark-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-9.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="product-details">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Petronas Baseball Cap</h6>
                                            </a>
                                            <div class="mt-3">
                                                <span class="float-end">3.2 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                <h5 class="mb-0">$125.00 <span
                                                        class="text-muted fs-12"><del>$200.00</del></span></h5>
                                            </div>
                                            <div class="mt-3">
                                                <a href="shop-cart" class="btn btn-primary btn-sm"><i
                                                        class="mdi mdi-cart me-1"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card overflow-hidden">
                                    <div class="bg-warning-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-10.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="product-details">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Mens Black T Shirt</h6>
                                            </a>
                                            <div class="mt-3">
                                                <span class="float-end">4.3 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                <h5 class="mb-0">$150.00 <span
                                                        class="text-muted fs-12"><del>$300.00</del></span></h5>
                                            </div>
                                            <div class="mt-3">
                                                <a href="shop-cart" class="btn btn-primary btn-sm"><i
                                                        class="mdi mdi-cart me-1"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card overflow-hidden">
                                    <div class="bg-primary-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-11.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="product-details">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Blue Checked Slim Fit Shirt
                                                </h6>
                                            </a>
                                            <div class="mt-3">
                                                <span class="float-end">2.3 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                <h5 class="mb-0">$135.00 <span
                                                        class="text-muted fs-12"><del>$523.00</del></span></h5>
                                            </div>
                                            <div class="mt-3">
                                                <a href="shop-cart" class="btn btn-primary btn-sm"><i
                                                        class="mdi mdi-cart me-1"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card overflow-hidden">
                                    <div class="bg-danger-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-12.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="product-details">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Onyx SmartGRID Chair Red</h6>
                                            </a>
                                            <div class="mt-3">
                                                <span class="float-end">3.5 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                <h5 class="mb-0">$99.00 <span
                                                        class="text-muted fs-12"><del>$129.00</del></span></h5>
                                            </div>
                                            <div class="mt-3">
                                                <a href="shop-cart" class="btn btn-primary btn-sm"><i
                                                        class="mdi mdi-cart me-1"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card overflow-hidden">
                                    <div class="bg-secondary-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-14.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="product-details">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Nursing Chair Steam Grey</h6>
                                            </a>
                                            <div class="mt-3">
                                                <span class="float-end">2.3 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                <h5 class="mb-0">$632.00 <span
                                                        class="text-muted fs-12"><del>$721.00</del></span></h5>
                                            </div>
                                            <div class="mt-3">
                                                <a href="shop-cart" class="btn btn-primary btn-sm"><i
                                                        class="mdi mdi-cart me-1"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section> --}}

    <!-- START INSTAGRAM -->
    <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-center g-0">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h3 class="mb-3">Follow Us In Instagram</h3>
                        <p class="text-muted fs-15">The most common approach that peoples use to say follow me on Instagram
                            is by sending a direct message.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-relative">
            <div class="row g-0 mt-5">
                <div class="col">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-1.jpg') }}" class="img-fluid"
                                alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-2.jpg') }}" class="img-fluid"
                                alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>

                <div class="col d-none d-md-block">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-3.jpg') }}" class="img-fluid"
                                alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>

                <div class="col d-none d-md-block">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-4.jpg') }}" class="img-fluid"
                                alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-5.jpg') }}" class="img-fluid"
                                alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-6.jpg') }}" class="img-fluid"
                                alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="insta-lable text-center">
                <a href="#!" class="btn btn-primary btn-hover">
                    <i class="ph-instagram-logo align-middle me-1"></i> Follow In Instagram
                </a>
            </div>
        </div>
    </section>
    <!-- END INSTAGRAM -->

    <section class="section">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/ecommerce/fast-delivery.png') }}" alt=""
                                class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Fast &amp; Secure Delivery</h5>
                            <p class="text-muted mb-0">Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/ecommerce/returns.png') }}" alt=""
                                class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">2 Days Return Policy</h5>
                            <p class="text-muted mb-0">No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/ecommerce/guarantee-certificate.png') }}"
                                alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Money Back Guarantee</h5>
                            <p class="text-muted mb-0">Within 5 business days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/ecommerce/24-hours-support.png') }}" alt=""
                                class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">24 X 7 Service</h5>
                            <p class="text-muted mb-0">Online service for customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <!-- isotope-layout -->
    <script src="{{ URL::asset('build/libs/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Countdown js -->
    <script src="{{ URL::asset('build/js/pages/coming-soon.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/landing-index.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
