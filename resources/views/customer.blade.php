@extends('layouts.master')
@section('title')
    CUSTOMER OVERVIEW
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <section class="ecommerce-about">
        <div class="effect d-none d-md-block">
            <div class="ecommerce-effect bg-primary"></div>
            <div class="ecommerce-effect bg-info"></div>
        </div>
        <div class="container">
            <div class="row align-items-center pb-2">
                <div class="col-lg-8">
                    <h1 class="fw-bold mb-3">Retail</h1>
                    <p class="fs-16 text-muted mb-5 mb-lg-3">We cater to individual customers looking to purchase
                        high-quality refurbished iPhones at competitive prices. Our devices are fully tested and certified
                        by our technician, ensuring they meet our rigorous quality standards. Whether you're buying a phone
                        for personal use or as a gift, Prisma Pro has the right option for you.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <img src="{{ URL::asset('build/images/ecommerce/c-1.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center  pb-2">
                <div class="col-lg-4">
                    <div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <img src="{{ URL::asset('build/images/ecommerce/c-2.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h1 class="fw-bold mb-3">Wholesale</h1>
                    <p class="fs-16 text-muted mb-5 mb-lg-3">We specialize in wholesale transactions, offering bulk
                        quantities of used and refurbished iPhones to retailers and businesses at discounted rates. Our
                        wholesale services ensure you receive a consistent supply of high-quality devices, perfect for
                        stocking your store or meeting large order requirements.
                    </p>
                </div>
            </div>
            <div class="row align-items-center  pb-2">
                <div class="col-lg-8">
                    <h1 class="fw-bold mb-3">Enterprise</h1>
                    <p class="fs-16 text-muted mb-5 mb-lg-3">For corporate clients, we provide tailored solutions to meet
                        your company's technology needs. Whether you're equipping your workforce with reliable devices or
                        looking for bulk purchases for promotional events, Prisma Pro offers competitive pricing and
                        dedicated support for enterprise customers.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <img src="{{ URL::asset('build/images/ecommerce/c-3.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
    <script>
        initModeSetting()
    </script>
@endsection
