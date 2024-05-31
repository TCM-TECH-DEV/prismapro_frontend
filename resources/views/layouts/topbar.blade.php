<nav class="navbar navbar-expand-lg ecommerce-navbar" id="navbar">
    <div class="container">
        <a class="navbar-brand d-none d-lg-block" href="index">
            <div class="logo-dark">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="25">
            </div>
            <div class="logo-light">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="25">
            </div>
        </a>
        <button class="btn btn-soft-primary btn-icon d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="bi bi-list fs-20"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0" id="navigation-menu">
                <li class="nav-item d-block d-lg-none">
                    <a class="d-block p-3 h-auto text-center" href="index.html">
                        <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="25"
                            class="card-logo-dark mx-auto">
                        <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="25"
                            class="card-logo-light mx-auto">
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                    <a class="nav-link" data-key="t-catalog" href="/" role="button" aria-expanded="false">
                        HOME
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                    <a class="nav-link" data-key="t-catalog" href="about-us" role="button" aria-expanded="false">
                        ABOUT
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                    <a class="nav-link" data-key="t-catalog" href="products2" role="button" aria-expanded="false">
                        PRODUCTS
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                    <a class="nav-link" data-key="t-catalog" href="services" role="button" aria-expanded="false">
                        SERVICES
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                    <a class="nav-link" data-key="t-catalog" href="customer" role="button" aria-expanded="false">
                        CUSTOMER OVERVIEW
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                    <a class="nav-link" data-key="t-catalog" href="global" role="button" aria-expanded="false">
                        GLOBAL OPERATIONS
                    </a>
                </li>
                {{-- <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                    <a class="nav-link" data-key="t-catalog" href="gallery" role="button" aria-expanded="false">
                        GALLERY
                    </a>
                </li> --}}
                <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                    <a class="nav-link" data-key="t-catalog" href="contact-us" role="button" aria-expanded="false">
                        CONTACT
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
