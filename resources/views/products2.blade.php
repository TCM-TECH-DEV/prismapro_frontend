@extends('layouts.master')
@section('title')
    Gallery
@endsection
@section('css')
    <!-- extra css -->
    <!--Swiper slider css-->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-left">
                        <h2 class="mb-3">Used and Refurbished iPhones</h2>
                        <p class="text-muted fs-15 mb-0">At Prisma Pro, we take pride in offering a wide range of used and
                            refurbished iPhones. Each device undergoes a rigorous in-house quality control (QC) and grading
                            process to ensure it meets our high standards of performance and appearance.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section>
        <div class="container">
            <!--end row-->
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <div class="text-center">
                        <img src="{{ URL::asset('build/images/products/1.png') }}" alt=""
                            class="img-fluid rounded-circle bg-warning-subtle border border-2 border-warning border-opacity-10 p-4">
                        <div class="mt-4">
                            <a href="#!">
                                <h5 class="mb-2 fs-15">Iphone 13</h5>
                            </a>
                            {{-- <p class="text-muted fs-12">96 Products</p> --}}
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <div class="text-center">
                        <img src="{{ URL::asset('build/images/products/2.png') }}" alt=""
                            class="img-fluid rounded-circle bg-dark-subtle border border-2 border-dark border-opacity-10 p-4">
                        <div class="mt-4">
                            <a href="#!">
                                <h5 class="mb-2 fs-15">Iphone 12</h5>
                            </a>
                            {{-- <p class="text-muted fs-12">25 Products</p> --}}
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <div class="text-center">
                        <img src="{{ URL::asset('build/images/products/3.png') }}" alt=""
                            class="img-fluid rounded-circle bg-warning-subtle border border-2 border-warning border-opacity-10 p-4">
                        <div class="mt-4">
                            <a href="#!">
                                <h5 class="mb-2 fs-15">Iphone 11</h5>
                            </a>
                            {{-- <p class="text-muted fs-12">10 Products</p> --}}
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
    </section>

    <section class="section pt-4 pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-left">
                        <h3 class="mb-3">Grading Criteria</h3>
                        <p class="text-muted fs-14 mb-0"><b>Grade A:</b> Like-new condition with no visible signs of wear.
                        </p>
                        <p class="text-muted fs-14 mb-0"><b>Grade B:</b> Minor cosmetic imperfections, fully functional.</p>
                        <p class="text-muted fs-14 mb-0"><b>Grade C:</b> Noticeable wear and tear, fully functional.<br>
                            For detailed information about our refurbished iPhones and used iPhones grades, please contact
                            us. We offer a wide range of models, including iPhone X, iPhone 11, and more, all fully tested
                            to ensure quality and performance.</p>
                        <p class="text-muted fs-14 mb-0"><b>Contact Us Button:</b> Contact Us for More Information.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
    </section>

    <section class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-left">
                        <h2 class="mb-3">Accessories</h2>
                        <p class="text-muted fs-15 mb-0">For detailed information about our accessories, including chargers,
                            cases, and screen protectors, please contact us. Our accessories are designed to complement our
                            refurbished iPhones and provide you with the best possible experience.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row g-2">
                <div class="col-lg-7">
                    <div class="card card-height-100">
                        <a href="product-list-defualt" class="insta-img categrory-box rounded-3">
                            <div class="categrory-content text-center">
                                <span class="categrory-text text-white fs-18">Apple 240W USB-C Charge Cable (2 m)</span>
                            </div>
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/1.jpg') }}" class="img-fluid"
                                alt="">
                        </a>
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-5">
                    <div class="row g-2">
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <a href="product-list-defualt" class="insta-img categrory-box rounded-3">
                                    <div class="categrory-content text-center">
                                        <span class="categrory-text text-white fs-18">Apple USB-C Digital AV Multiport Adapter</span>
                                    </div>
                                    <img src="{{ URL::asset('build/images/ecommerce/instagram/2.jpg') }}"
                                        class="w-100 object-fit-cover" alt="" style="max-height: 318px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <a href="product-list-defualt" class="insta-img categrory-box rounded-3">
                                    <div class="categrory-content text-center">
                                        <span class="categrory-text text-white fs-18">Apple 20W USB-C Power Adapter</span>
                                    </div>
                                    <img src="{{ URL::asset('build/images/ecommerce/instagram/3.jpg') }}"
                                        class="w-100 object-fit-cover" alt="" style="max-height: 318px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <!--Swiper slider js-->
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/category.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
