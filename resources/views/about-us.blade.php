@extends('layouts.master')
@section('title')
    About Us
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <section class="ecommerce-about pb-2">
        <div class="effect d-none d-md-block">
            <div class="ecommerce-effect bg-primary"></div>
            <div class="ecommerce-effect bg-info"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="fw-bold mb-3">Company History</h1>
                    <p class="fs-16 text-muted mb-5 mb-lg-3">Prisma Pro (America), Inc. was founded in 1998 with the vision
                        of providing high-quality products through television, catalog, and mail-order. Over the years, we
                        have evolved to specialize in the wholesale buying and selling of used and refurbished iPhones. Our
                        commitment to quality and customer satisfaction has been the cornerstone of our success.</p>
                </div>
                <div class="col-lg-6">
                    <div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <img src="{{ URL::asset('build/images/ecommerce/img-1.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="vstack gap-4">
                                    <img src="{{ URL::asset('build/images/ecommerce/img-2.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                    <img src="{{ URL::asset('build/images/ecommerce/img-3.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-0 pb-2">
        <div class="container">
            <div class="row align-items-center">
                {{-- <div class="col-lg-6">
                    <div>
                        <img src="{{ URL::asset('build/images/ecommerce/img-5.jpg') }}" alt=""
                            class="img-fluid rounded">
                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <div class="mt-lg-0">
                        <h2 class="lh-base fw-semibold mb-3">Mission</h2>
                        <P class="text-muted fs-16">At Prisma Pro, we are committed to delivering premium quality
                            refurbished iPhones while upholding the highest standards of environmental sustainability and
                            social responsibility.</P>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ecommerce-about-team pt-2 pb-4 bg-light bg-opacity-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-2">
                        <h2 class="mb-3">Values</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-2">
                <div class="col-xl-3 col-md-6">
                    <div class="team-box text-center">
                        <div class="mt-4 pt-1">
                            <a href="#!">
                                <h5>Quality</h5>
                            </a>
                            <p class="text-muted mb-0">
                                We ensure that every device we sell meets stringent quality standards, providing our
                                customers with reliable and durable products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-box text-center">
                        <div class="mt-4 pt-1">
                            <a href="#!">
                                <h5>Sustainability</h5>
                            </a>
                            <p class="text-muted mb-0">
                                We are dedicated to minimizing our environmental impact by promoting the reuse and recycling
                                of electronic devices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-box text-center">
                        <div class="mt-4 pt-1">
                            <a href="#!">
                                <h5>Customer Satisfaction</h5>
                            </a>
                            <p class="text-muted mb-0">
                                We prioritize the satisfaction of our customers by offering exceptional products and
                                services that exceed their expectations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-box text-center">
                        <div class="mt-4 pt-1">
                            <a href="#!">
                                <h5>Social Responsibility</h5>
                            </a>
                            <p class="text-muted mb-0">
                                We believe in giving back to the communities we serve and strive to make a positive impact
                                through ethical business practices.</p>
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
