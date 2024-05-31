@extends('layouts.master')
@section('title')
    Product Details
@endsection
@section('css')
    <!-- extra css -->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <section class="section pb-4">
        <div class="container">
            <div class="row gx-2">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-2">
                            <div thumbsSlider="" class="swiper productSwiper mb-3 mb-lg-0">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="{{ URL::asset('build/images/products/iphne13promax/img-1.png') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="{{ URL::asset('build/images/products/iphne13promax/img-2.png') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="{{ URL::asset('build/images/products/iphne13promax/img-2.png') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="{{ URL::asset('build/images/products/iphne13promax/img-2.png') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="{{ URL::asset('build/images/products/iphne13promax/img-2.png') }}"
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-md-10">
                            <div class="bg-light rounded-2 position-relative ribbon-box overflow-hidden">
                                <div class="ribbon ribbon-danger ribbon-shape trending-ribbon">
                                    <span class="trending-ribbon-text">Trending</span> <i
                                        class="ri-flashlight-fill text-white align-bottom float-end ms-1"></i>
                                </div>
                                <div class="swiper productSwiper2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide ">
                                            <img src="{{ URL::asset('build/images/products/iphne13promax/img-1.png') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ URL::asset('build/images/products/iphne13promax/img-2.png') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ URL::asset('build/images/products/iphne13promax/img-2.png') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ URL::asset('build/images/products/iphne13promax/img-2.png') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ URL::asset('build/images/products/iphne13promax/img-2.png') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next bg-transparent"></div>
                                    <div class="swiper-button-prev bg-transparent"></div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="mt-3">
                                <div class="hstack gap-2">
                                    <button type="button" class="btn btn-success btn-hover w-100">
                                        <i class="bi bi-basket2 me-2"></i> Add To Cart
                                    </button>
                                    <button type="button" class="btn btn-primary btn-hover w-100">
                                        <i class="bi bi-cart2 me-2"></i> Buy Now
                                    </button>
                                    <button class="btn btn-soft-danger custom-toggle btn-hover" data-bs-toggle="button"
                                        aria-pressed="true"> <span class="icon-on"><i class="ri-heart-line"></i></span>
                                        <span class="icon-off"><i class="ri-heart-fill"></i></span> </button>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
                <div class="col-lg-5 ms-auto">
                    <div class="ecommerce-product-widgets mt-4 mt-lg-0">
                        <div class="mb-4">
                            <div class="d-flex gap-3 mb-2">
                                <div class="fs-15 text-warning">
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-fill align-bottom"></i>
                                    {{-- <i class="ri-star-half-fill align-bottom"></i> --}}
                                </div>
                                <span class="fw-medium"> (grade A)</span>
                            </div>
                            <h4 class="lh-base mb-1">iPhone 13 Pro Max</h4>
                            {{-- <p class="text-muted mb-4">Our environmental goals.</p> --}}
                            <div><strong>Our environmental goals.</strong><br><br>
                                As part of our efforts to reach <a href="https://www.apple.com/environment"
                                    data-slot-name="main-9" data-feature-name="Astro Link"
                                    data-display-name="AOS: environment">carbon neutrality by 2030</a>, iPhone&nbsp;13 does
                                not include a power adapter or EarPods. Included in the box is a USB‑C to Lightning Cable
                                that supports fast charging and is compatible with USB‑C power adapters and computer
                                ports.<br><br>
                                We encourage you to re‑use your current USB‑A to Lightning cables, power adapters, and
                                headphones, which are compatible with these iPhone models. But if you need any new Apple
                                power adapters or headphones, they are available for purchase.</div>

                            <h5 class="fs-24 mt-2 mb-4">$650.00
                                {{-- <span class="text-muted fs-14"><del>$280.99</del></span> <span
                                    class="fs-14 ms-2 text-danger"> (50% off)</span> --}}
                            </h5>
                            <ul class="list-unstyled vstack gap-2">
                                <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>In
                                    stock</li>
                                <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>Free
                                    delivery available</li>
                            </ul>
                            <h6 class="fs-14 text-muted mb-3">Available offers :</h6>
                            <ul class="list-unstyled vstack gap-2 mb-0">
                                <li>
                                    <div class="d-flex gap-3">
                                        <div class="flex-shrink-0">
                                            <i class="bi bi-tag-fill text-success align-middle fs-15"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <b>Bank Offer</b> 10% instant discount on Federal Bank Debit Cards, up to ₹3000
                                            on orders of ₹5,000 and above <a href="#!" data-bs-toggle="tooltip"
                                                data-bs-title="Terms & Conditions">T&C</a>
                                        </div>
                                    </div>
                                </li>
                                {{-- <li>
                                    <div class="d-flex gap-3">
                                        <div class="flex-shrink-0">
                                            <i class="bi bi-tag-fill text-success align-middle fs-15"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <b>Bank Offer</b> 10% instant discount on Federal Bank Debit Cards, up to ₹3000
                                            on orders of ₹5,000 and above <a href="#!" data-bs-toggle="tooltip"
                                                data-bs-title="Terms & Conditions">T&C</a>
                                        </div>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <h5 class="fs-15 mb-0">Quantity:</h5>
                            <div class="input-step ms-2">
                                <button type="button" class="minus">–</button>
                                <input type="number" class="product-quantity1" value="1" min="0"
                                    max="100" readonly="">
                                <button type="button" class="plus">+</button>
                            </div>
                        </div>
                        {{-- <div class="row gy-3">
                            <div class="col-md-6">
                                <div>
                                    <h6 class="fs-14 fw-medium text-muted">Sizes:</h6>
                                    <ul class="clothe-size list-unstyled hstack gap-2 mb-0 flex-wrap">
                                        <li> <input type="radio" name="sizes7" id="product-color-72"> <label
                                                class="avatar-xs btn btn-soft-primary text-uppercase p-0 fs-12 d-flex align-items-center justify-content-center rounded-circle"
                                                for="product-color-72">s</label> </li>
                                        <li> <input type="radio" name="sizes7" id="product-color-73"> <label
                                                class="avatar-xs btn btn-soft-primary text-uppercase p-0 fs-12 d-flex align-items-center justify-content-center rounded-circle"
                                                for="product-color-73">m</label> </li>
                                        <li> <input type="radio" name="sizes7" checked id="product-color-74"> <label
                                                class="avatar-xs btn btn-soft-primary text-uppercase p-0 fs-12 d-flex align-items-center justify-content-center rounded-circle"
                                                for="product-color-74">l</label> </li>
                                        <li> <input type="radio" name="sizes7" id="product-color-75"> <label
                                                class="avatar-xs btn btn-soft-primary text-uppercase p-0 fs-12 d-flex align-items-center justify-content-center rounded-circle"
                                                for="product-color-75">xl</label> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="fs-14 fw-medium text-muted">Colors: </h6>
                                <ul class="clothe-colors list-unstyled hstack gap-1 mb-0 flex-wrap ms-2">
                                    <li>
                                        <input type="radio" name="sizes" id="product-color-2">
                                        <label
                                            class="avatar-xs btn btn-info p-0 d-flex align-items-center justify-content-center rounded-circle"
                                            for="product-color-2"></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="sizes" id="product-color-3">
                                        <label
                                            class="avatar-xs btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle"
                                            for="product-color-3"></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="sizes" id="product-color-4" checked>
                                        <label
                                            class="avatar-xs btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                            for="product-color-4"></label>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs nav-tabs-custom mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                                Description
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                Ratings & Reviews
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="home1" role="tabpanel">
                            <table class="table table-sm table-borderless align-middle">
                                <tr>
                                    <th>Capacity1</th>
                                    <td>
                                        <ul class="list gb-list alignment horizontal-align-left">
                                            {{-- <li class="gb-list_item">
                                                <p class="gb-paragraph">128GB</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">256GB</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">512GB</p>
                                            </li> --}}
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">1TB</p>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Size and Weight2</th>
                                    <td>
                                        <ul class="list gb-list alignment horizontal-align-left">
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Width: 3.07 inches (78.1 mm)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Height: 6.33 inches (160.8 mm)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Depth: 0.30 inch (7.65 mm)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Weight: 8.46 ounces (240 grams)</p>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Display</th>
                                    <td>
                                        <ul class="list gb-list alignment horizontal-align-left">
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Super Retina XDR display with ProMotion</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">6.7‑inch (diagonal) all‑screen OLED display</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">2778‑by‑1284-pixel resolution at 458 ppi</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">ProMotion technology with adaptive refresh rates up
                                                    to 120Hz</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">HDR display</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">True Tone</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Wide color (P3)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Haptic Touch</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">2,000,000:1 contrast ratio (typical)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">1000 nits max brightness (typical); 1200 nits max
                                                    brightness (HDR)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Fingerprint-resistant oleophobic coating</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Support for display of multiple languages and
                                                    characters simultaneously</p>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Splash, Water, and Dust Resistant3</th>
                                    <td>
                                        <ul class="list gb-list alignment horizontal-align-left">
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Rated IP68 (maximum depth of 6 meters up to 30
                                                    minutes) under IEC standard 60529</p>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Chip</th>
                                    <td>
                                        <ul class="list gb-list alignment horizontal-align-left">
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">A15 Bionic chip</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">New 6‑core CPU with 2 performance and 4 efficiency
                                                    cores</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">New 5‑core GPU</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">New 16‑core Neural Engine</p>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Camera</th>
                                    <td>
                                        <ul class="list gb-list alignment horizontal-align-left">
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Pro 12MP camera system: Telephoto, Wide, and Ultra
                                                    Wide cameras</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Telephoto: ƒ/2.8 aperture</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Wide: ƒ/1.5 aperture</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Ultra Wide: ƒ/1.8 aperture and 120° field of view
                                                </p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">3x optical zoom in, 2x optical zoom out; 6x optical
                                                    zoom range</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Digital zoom up to 15x</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Night mode portraits enabled by LiDAR Scanner</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Portrait mode with advanced bokeh and Depth Control
                                                </p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Portrait Lighting with six effects (Natural,
                                                    Studio, Contour, Stage, Stage Mono, High‑Key Mono)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Dual optical image stabilization (Telephoto and
                                                    Wide)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Sensor‑shift optical image stabilization (Wide)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Six‑element lens (Telephoto and Ultra Wide);
                                                    seven‑element lens (Wide)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">True Tone flash with Slow Sync</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Panorama (up to 63MP)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Sapphire crystal lens cover</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">100% Focus Pixels (Wide)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Night mode</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Deep Fusion</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Smart HDR 4</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Photographic Styles</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Macro photography</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Apple ProRAW</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Wide color capture for photos and Live Photos</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Lens correction (Ultra Wide)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Advanced red‑eye correction</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Photo geotagging</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Auto image stabilization</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Burst mode</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Image formats captured: HEIF and JPEG</p>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Video Recording</th>
                                    <td>
                                        <ul class="list gb-list alignment horizontal-align-left">
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Cinematic mode for recording videos with shallow
                                                    depth of field (in 1080p at 30 fps)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">HDR video recording with Dolby Vision up to 4K at
                                                    60 fps</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">4K video recording at 24 fps, 25 fps, 30 fps, or 60
                                                    fps</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">1080p HD video recording at 25 fps, 30 fps, or 60
                                                    fps</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">720p HD video recording at 30 fps</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">ProRes video recording up to 4K at 30 fps (1080p at
                                                    30 fps for 128GB storage)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Macro video recording, including slo-mo and
                                                    time‑lapse</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Dual optical image stabilization for video
                                                    (Telephoto and Wide)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Sensor‑shift optical image stabilization for video
                                                    (Wide)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">3x optical zoom in, 2x optical zoom out; 6x optical
                                                    zoom range</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Digital zoom up to 9x</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Audio zoom</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">True Tone flash</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">QuickTake video</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Slo‑mo video support for 1080p at 120 fps or 240
                                                    fps</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Time‑lapse video with stabilization</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Night mode Time‑lapse</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Cinematic video stabilization (4K, 1080p, and 720p)
                                                </p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Continuous autofocus video</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Take 8MP still photos while recording 4K video</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Playback zoom</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Video formats recorded: HEVC, H.264, and ProRes</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Stereo recording</p>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>TrueDepth Camera</th>
                                    <td>
                                        <ul class="list gb-list alignment horizontal-align-left">
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">12MP camera</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">ƒ/2.2 aperture</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Portrait mode with advanced bokeh and Depth Control
                                                </p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Portrait Lighting with six effects (Natural,
                                                    Studio, Contour, Stage, Stage Mono, High‑Key Mono)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Animoji and Memoji</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Night mode</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Deep Fusion</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Smart HDR 4</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Photographic Styles</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Apple ProRAW</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Cinematic mode for recording videos with shallow
                                                    depth of field (in 1080p at 30 fps)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">HDR video recording with Dolby Vision up to 4K at
                                                    60 fps</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">4K video recording at 24 fps, 25 fps, 30 fps, or 60
                                                    fps</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">1080p HD video recording at 25 fps, 30 fps, or 60
                                                    fps</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">ProRes video recording up to 4K at 30 fps (1080p at
                                                    30 fps for 128GB storage)</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Slo‑mo video support for 1080p at 120 fps</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Time‑lapse video with stabilization</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Night mode Time‑lapse</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Cinematic video stabilization (4K, 1080p, and 720p)
                                                </p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">QuickTake video</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Wide color capture for photos and Live Photos</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Lens correction</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Retina Flash</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Auto image stabilization</p>
                                            </li>
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Burst mode</p>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Face ID</th>
                                    <td>
                                        <ul class="list gb-list alignment horizontal-align-left">
                                            <li class="gb-list_item">
                                                <p class="gb-paragraph">Enabled by TrueDepth camera for facial recognition
                                                </p>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Color</th>
                                    <td>
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded"></div>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            {{-- <p class="text-muted fs-15">Clothing serves many purposes: it can serve as protection from the
                                elements, rough surfaces, sharp stones, rash-causing plants, insect bites, by providing a
                                barrier between the skin and the environment. It is worth noting that a man's style goes
                                beyond his outward appearance. Style is about more than the clothes you wear. It's who you
                                are on the inside and how you present yourself to the outside world. It's having
                                appreciation and cultivating gratitude.</p> --}}
                        </div>
                        <div class="tab-pane" id="profile1" role="tabpanel">

                            <div>
                                <div class="d-flex flex-wrap gap-4 justify-content-between align-items-center mt-4">
                                    <div class="flex-shrink-0">
                                        <h5 class="fs-15 mb-3 fw-medium">Total Rating's</h5>
                                        <h2 class="fw-bold mb-3">10.14k</h2>
                                        <p class="text-muted mb-0">Growth in reviews on this year</p>
                                    </div>
                                    <hr class="vr">
                                    <div class="flex-shrink-0">
                                        <h5 class="fs-15 mb-3 fw-medium">Average Rating</h5>
                                        <h2 class="fw-bold mb-3">5.6 <span class="fs-16 align-middle text-warning ms-2">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-fill"></i>
                                            </span></h2>
                                        <p class="text-muted mb-0">Average rating on this year</p>
                                    </div>
                                    <hr class="vr">
                                    <div class="flex-shrink-0 w-xl">
                                        <div class="row align-items-center g-3 align-items-center mb-2">
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13"><i
                                                            class="ri-star-fill text-warning me-1 align-bottom"></i>5</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 50.16%" aria-valuenow="50.16" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13">2758</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-3 mb-2">
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13"><i
                                                            class="ri-star-fill text-warning me-1 align-bottom"></i>4</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 29.32%" aria-valuenow="29.32" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13">1063</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-3 mb-2">
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13"><i
                                                            class="ri-star-fill text-warning me-1 align-bottom"></i>3</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 18.12%" aria-valuenow="18.12" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13">997</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-3 mb-2">
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13"><i
                                                            class="ri-star-fill text-warning me-1 align-bottom"></i>2</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-secondary" role="progressbar"
                                                            style="width: 4.98%" aria-valuenow="4.98" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13">227</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-3">
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13"><i
                                                            class="ri-star-fill text-warning me-1 align-bottom"></i>2</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 7.42%" aria-valuenow="7.42" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13">408</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4" data-simplebar style="max-height: 350px">
                                    <div class="d-flex p-3 border-bottom border-bottom-dashed">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="avatar-xs rounded-circle"
                                                src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <div class="mb-2 fs-12">
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-line text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-line text-warning align-bottom"></i></span>
                                                        </div>
                                                        <h6 class="mb-0">Donald Risher</h6>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="mb-0 text-muted"><i
                                                            class="ri-calendar-event-fill me-2 align-middle"></i>Aug 16,
                                                        2022</p>
                                                </div>
                                            </div>
                                            <div>
                                                <h5 class="lh-base fs-15">Design Quality</h5>
                                                <p class="mb-0">
                                                    " This is an incredible framework worth so much in the right hands!
                                                    Nowhere else are you going to get so much flexibility and great code for
                                                    a few dollars. Highly recommend purchasing today! Like right now! "
                                                </p>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 me-3">
                                                    <img class="avatar-xs rounded-circle"
                                                        src="{{ URL::asset('build/images/users/avatar-1.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex mb-3">
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h6 class="mb-2">Jansh Brown</h6>
                                                                <p class="mb-0 text-muted fs-13">Admin</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="mb-0 text-muted"><i
                                                                    class="ri-calendar-event-fill me-2 align-middle"></i>Aug
                                                                16, 2022</p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">
                                                        Thank You
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 border-bottom border-bottom-dashed">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="avatar-xs rounded-circle"
                                                src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <div class="mb-2 fs-12">
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                        </div>
                                                        <h6 class="mb-0">Richard Smith</h6>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="mb-0 text-muted"><i
                                                            class="ri-calendar-event-fill me-2 align-middle"></i>Dec 10,
                                                        2022</p>
                                                </div>
                                            </div>
                                            <div>
                                                <h5 class="lh-base fs-15">Feature Availability</h5>
                                                <p class="mb-0">
                                                    " Hello everyone, I would like to suggest here two contents that you
                                                    could create. Course pages and blog pages. In them you could insert the
                                                    listing and management of courses and listing and management of blog.
                                                    The theme is perfect, one of the best purchases I've ever made. "
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 border-bottom border-bottom-dashed mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="avatar-xs rounded-circle"
                                                src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <div class="mb-2 fs-12">
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-line text-warning align-bottom"></i></span>
                                                        </div>
                                                        <h6 class="mb-0">Pauline Moll</h6>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="mb-0 text-muted"><i
                                                            class="ri-calendar-event-fill me-2 align-middle"></i>Aug 16,
                                                        2022</p>
                                                </div>
                                            </div>
                                            <div>
                                                <h5 class="lh-base fs-15">Design Quality</h5>
                                                <p class="mb-0">
                                                    "We have used your other templates as well and seems it's amazing with
                                                    the design and code quality. Wish you best for the future updates. Keep
                                                    updated you will be #1 in near future. "
                                                </p>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 me-3">
                                                    <img class="avatar-xs rounded-circle"
                                                        src="{{ URL::asset('build/images/users/avatar-1.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex mb-3">
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h6 class="mb-2">Jansh Brown</h6>
                                                                <p class="mb-0 text-muted fs-13">Admin</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="mb-0 text-muted"><i
                                                                    class="ri-calendar-event-fill me-2 align-middle"></i>Aug
                                                                16, 2022</p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">
                                                        Thank You
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-3">
                                    <h5 class="fs-18">Add a Review</h5>
                                    <div>
                                        <form action="#" class="form">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="fs-14">Your rating:</span>
                                                <div class="ms-3">
                                                    <span class="fs-14"> <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span class="fs-14"> <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span class="fs-14"> <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span class="fs-14"> <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span class="fs-14"> <i
                                                            class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control" name="your-name" placeholder="Title"
                                                    type="text">
                                            </div>
                                            <div class="mb-3">
                                                <textarea class="form-control" name="your-comment" placeholder="Enter your comments & reviews" rows="4"></textarea>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn btn-primary btn-hover" type="submit"
                                                    value="Submit">Send Review <i
                                                        class="ri-send-plane-2-line align-bottom ms-1"></i></button>
                                            </div>
                                        </form>
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
    </section>

    <section class="position-relative py-5">
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
                <!--end col-->
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
                <!--end col-->
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
                <!--end col-->
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
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
@section('scripts')
    <!--Swiper slider js-->
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/product-details.init.js') }}"></script>

    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
