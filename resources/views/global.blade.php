@extends('layouts.master')
@section('title')
    Terms of Conditions
@endsection
@section('css')
    <!-- extra css -->
    <style>
        .bg-img {
            background-image: url("{{ URL::asset('build/images/ecommerce/bg-img.jpg') }}");
            background-repeat: no-repeat;
            background-size: 100% auto;
        }
    </style>
@endsection
@section('content')
    <section class="term-condition bg-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        {{-- <img src="{{ URL::asset('build/images/ecommerce/logo-apple.png') }}" alt=""
                            class="img-fluid rounded"> --}}
                        <h1 class="text-white mb-2">GLOBAL OPERATIONS</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-0">
        <div class="container">
            <div class="card term-card mb-0">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="fs-18 mb-3">USA Operations</h5>

                            <ul class="text-muted vstack gap-2 fs-15 ps-5" style="list-style-type: circle;">
                                <li>
                                    Overview: "Our headquarters in California, USA, handles our primary operations and
                                    ensures our products meet the highest standards of quality."
                                </li>
                                <li>
                                    Services: Wholesale and retail sales and customer support
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="fs-18 mb-3">Thailand Operations</h5>

                            <ul class="text-muted vstack gap-2 fs-15 ps-5" style="list-style-type: circle;">
                                <li>
                                    Overview: "Our facilities in Thailand focus on refurbishing and quality control,
                                    ensuring that every device meets our stringent criteria before being shipped."
                                </li>
                                <li>
                                    Services: Repair and Refurbishment, quality control.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="fs-18 mb-3">UAE Operations</h5>

                            <ul class="text-muted vstack gap-2 fs-15 ps-5" style="list-style-type: circle;">
                                <li>
                                    Overview: "Our UAE branch provides regional support and services, making our products
                                    accessible to customers in the Middle East."
                                </li>
                                <li>
                                    Services: Wholesale, Repair and customer support
                                </li>
                            </ul>
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
@endsection
