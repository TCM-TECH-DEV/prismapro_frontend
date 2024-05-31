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
                                        <h1 class="display-4 fw-semibold text-capitalize lh-base mb-4">iPhone 13 Pro Max
                                        </h1>
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
            {{-- <div class="row mt-4 justify-content-center">
                <div class="col">
                    <div class="text-left">
                        <h3 class="mb-3">Best Seller</h3>
                    </div>
                </div>
            </div> --}}

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="row gallery-wrapper mt-2">
                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 seller hot arrival"
                            data-category="hot arrival">
                            <div class="card overflow-hidden">
                                <div class="bg-warning-subtle rounded-top py-4">
                                    <div class="gallery-product">
                                        <img src="{{ URL::asset('build/images/products/iphne13promax/img-1.png') }}"
                                            alt="" style="max-height: 215px;max-width: 100%;"
                                            class="mx-auto d-block">
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
                                            {{-- <span class="float-end">5.0 <i
                                                    class="ri-star-fill text-warning align-bottom"></i></span> --}}
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
                                            {{-- <span class="float-end">4.5 <i
                                                    class="ri-star-half-fill text-warning align-bottom"></i></span> --}}
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
                                        <img src="{{ URL::asset('build/images/products/smartwatches/1.png') }}"
                                            alt="" style="max-height: 215px;max-width: 100%;"
                                            class="mx-auto d-block">
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
                                            {{-- <span class="float-end">4.5 <i
                                                    class="ri-star-half-fill text-warning align-bottom"></i></span> --}}
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
                                            {{-- <span class="float-end">3.1 <i
                                                    class="ri-star-half-fill text-warning align-bottom"></i></span> --}}
                                            <h5 class="mb-0">$159.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                    </div>

                    <div class="mt-4 mb-4 text-center">
                        <a href="product-list-defualt" class="btn btn-soft-primary btn-hover">View All Products <i
                                class="mdi mdi-arrow-right align-middle ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PRODUCT -->

    <section class="section bg-light bg-opacity-50 py-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-left">
                        <h3 class="mb-3">EXPERIENCE THE TECHNOLOGY</h3>
                        <p class="text-muted fs-15">PrismaPro has it all</p>
                        <p class="text-muted fs-15">
                        <p>LED TV series from PrismaPro is crafted to perfection. We have in-house capabilities of designing
                            LED TVs from 17″ to 84″ in HD to UHD 4K Smart Versions. Enjoy the magnificence of everything you
                            watch with PrismaPro’s Full HD and Ultra HD LED TVs, equipped with high-end technology and smart
                            features.<br>With 50+ years of experience in pioneering electronical technology, we have the
                            power to move your hearts and minds with great innovations. We have a proven track record of
                            serving high quality product requirements of our customers at an affordable cost.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card overflow-hidden">
                        <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="card overflow-hidden">
                        <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-left">
                        <h3 class="mb-3">ABOUT TREEVIEW COMPANY LIMITED</h3>
                        <p class="text-muted fs-15">Ever growing with constant innovation</p>
                        <p class="text-muted fs-15">
                        <p>Located in Chonburi, the Company is one of Thailand’s leading TV
                            manufacturer with cutting edge technology, including cleanroom and laser repair
                            machine.<br>The Company has a large portfolio of clients, becoming Official Assembly Partner
                            with Haier, Skyworth, Changhong, and Westinghouse and having strong distribution network
                            with Tesco Lotus and Big C. The Company also has its own brand “PrismaPro,” which has been
                            featured in the Magazine GM2000.</p>
                        <p>Serving Since Last 18 Years…</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- START BLOG -->
    <section class="section bg-light bg-opacity-50 py-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h3 class="mb-3">PRISMAPRO PRODUCT SERVICE AND SUPPORT</h3>
                        <p class="text-muted fs-15">We are always happy to help you in the best manner we can.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-4">
                    <div class="card overflow-hidden">
                        {{-- <img src="{{ URL::asset('build/images/small/1.jpg') }}" class="img-fluid" alt=""> --}}
                        <div class="card-body">
                            <div class="mt-3">
                                <a href="#!">
                                    <h3>Write to us</h3>
                                    <h5 class="fs-17 lh-base">We are here to help</h5>
                                </a>
                                <p class="text-muted fs-15 mt-2">Feel free to write us at support@prismapro.com in case of
                                    any queries. Our support team will be happy to solve your queries at earliest
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card overflow-hidden">
                        {{-- <img src="{{ URL::asset('build/images/small/2.jpg') }}" class="img-fluid" alt=""> --}}
                        <div class="card-body">
                            <div class="mt-3">
                                <a href="#!">
                                    <h3>Locate Service Center</h3>
                                    <h5 class="fs-17 lh-base">We are nearby your vicinity</h5>
                                </a>
                                <p class="text-muted fs-15 mt-2">No more distance communication. You can search among
                                    numerous service centers online near your vicinity and ask for relevant support.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card overflow-hidden">
                        {{-- <img src="{{ URL::asset('build/images/small/3.jpg') }}" class="img-fluid" alt=""> --}}
                        <div class="card-body">
                            <div class="mt-3">
                                <a href="#!">
                                    <h3>Know us better</h3>
                                    <h5 class="fs-17 lh-base">Read FAQs</h5>
                                </a>
                                <p class="text-muted fs-15 mt-2">Do you have any questions about our products and services
                                    or after sales support,<br> just explore the written FAQs and find your answer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG -->
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
