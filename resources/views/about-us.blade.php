@extends('layouts.master')
@section('title')
    About Us
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
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h1 class="fw-bold mb-3">👋 About Us</h1>
                    <p class="fs-16 text-muted mb-5 mb-lg-3">It gives us immeasurable joy to introduce ourselves as Treeview
                        –
                        a company poised to redefine the world of digital entertainment innovative products with finest
                        quality and lowest cost. With blending expertise, experience and insightful research Treeview
                        assures you of delivering high-quality lifestyle products that are value for money and still at the
                        top among the world of technology.</p>
                    <p class="fs-16 text-muted mb-5 mb-lg-3">At TREEVIEW, we strive to make sustainable products from process
                        to product after-life. The performance of our integrated quality management is internationally
                        accredited. Some of our current accreditations are</p>
                    <p class="fs-16 text-muted mb-5 mb-lg-3">
                    <ul>
                        <li>ISO 9001 : 2008 FOR TOTAL QUALITY MANAGEMENT WHICH COVERS PROCESSES, PRODUCTS, AND PEOPLE</li>
                        <li>ISO 14001 : 2005 FOR ENVIRONMENTAL MANAGEMENT SYSTEM</li>
                    </ul>
                    </p>
                    <p class="fs-16 text-muted mb-5 mb-lg-3">A Comprehensive Quality Assurance Laboratory enable us to
                        assess and control each production stage with the procedure needed to comply with the required QA
                        standard.</p>
                </div>
                {{-- <div class="col-lg-6">
                    <div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <img src="{{ URL::asset('build/images/ecommerce/img-4.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="vstack gap-4">
                                    <img src="{{ URL::asset('build/images/ecommerce/img-1.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                    <img src="{{ URL::asset('build/images/ecommerce/img-3.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="ecommerce-about-team pt-2 pb-4 bg-light bg-opacity-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h2 class="mb-3">FROM THAILAND FOR INDIA</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-2">
                <div class="col-xl-4 col-md-6">
                    <div class="team-box text-center">
                        <div class="mt-4 pt-1">
                            <a href="#!">
                                <h5>HIGH END TECHNOLOGY</h5>
                            </a>
                            <p class="text-muted mb-0">
                                We commited to provide innovative products with finest quality and lowest cost. Be a world
                                class LED TV manufacturer providing new technology and a competitive price.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-box text-center">
                        <div class="mt-4 pt-1">
                            <a href="#!">
                                <h5>PRE ESTABLISHED SETUP & GLOBAL PRESENCE</h5>
                            </a>
                            <p class="text-muted mb-0">
                                The factory area is spreaded accross 44,800 SQM. We assure best quality products at your
                                doorstep.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-box text-center">
                        <div class="mt-4 pt-1">
                            <a href="#!">
                                <h5>EXTENDED CUSTOMER SUPPORT</h5>
                            </a>
                            <p class="text-muted mb-0">
                                We extend our support to provide our customers best-in-class customer support both before
                                and after sales. Online shopping is now easy with us and we will be happy to deliver
                                happiness at your doorstep.</p>
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
