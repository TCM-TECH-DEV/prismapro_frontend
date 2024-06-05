@extends('layouts.master')
@section('title')
    SERVICES
@endsection
@section('css')
    <!-- extra css -->
    <!--Swiper slider css-->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-left">
                        <h2 class="mb-3">Device Repair</h2>
                        <p class="text-muted fs-15 mb-0">"Our expert technicians provide fast and reliable repair services
                            for all iPhone models. Whether it's a screen replacement, battery issue, or any other problem,
                            we've got you covered."</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-5 text-left">
                        <h2 class="mb-3">Polishing Services</h2>
                        <p class="text-muted fs-15 mb-0">"Restore your device's original shine with our professional
                            polishing services. We use state-of-the-art equipment to ensure your phone looks as good as
                            new."</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row g-2">
                <div class="col-lg-7">
                    <div class="card card-height-100">
                        <a href="product-list-defualt" class="insta-img categrory-box rounded-3">
                            {{-- <div class="categrory-content text-center">
                                <span class="categrory-text text-white fs-18">Electronics</span>
                            </div> --}}
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/s-1.jpg') }}" class="img-fluid"
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
                                    {{-- <div class="categrory-content text-center">
                                        <span class="categrory-text text-white fs-18">Cosmetics</span>
                                    </div> --}}
                                    <img src="{{ URL::asset('build/images/ecommerce/instagram/s-2.jpg') }}"
                                        class="w-100 object-fit-cover" alt="" style="max-height: 318px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <a href="product-list-defualt" class="insta-img categrory-box rounded-3">
                                    {{-- <div class="categrory-content text-center">
                                        <span class="categrory-text text-white fs-18">Handbags & Clutches</span>
                                    </div> --}}
                                    <img src="{{ URL::asset('build/images/ecommerce/instagram/s-3.jpg') }}"
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
