<style>
    .metismenu {
        background: #08137a !important;
        color: #fff !important;
    }

    .simplebar-content-wrapper {
        background: #08137a !important;
        color: #fff !important;
    }

    .navbar-brand-box {
        background: #08137a !important;
    }

    .metismenu li a {
        color: white !important;
    }

    .mm-active {
        background: #fff !important;
        color: #08137a !important;
    }

    .mm-active .active {
        background: #fff !important;
        color: #08137a !important;
    }

    #side-menu .has-arrow[aria-expanded="true"] {
        background: #fff !important;
        color: #08137a !important;
    }

    ul.sub-menu.mm-collapse.mm-show li a {
        background: #fff !important;
        color: #08137a !important;
    }

    #sidebar-menu {
        padding: 10px 0 0 0;
    }
</style>
<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>


                @if (Auth::user()->role === 'ADMIN')
                    <li>
                        <a href="{{ url('/') }}">
                            <i data-feather="home"></i>
                            <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span>
                            <span data-key="t-dashboard">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="{{ url('/product/view') }}" data-key="t-inbox">All Products</a></li>
                            <li><a href="{{ url('/category/view') }}" data-key="t-inbox">Categories</a></li>
                            <li><a href="{{ url('/subcategory/view') }}" data-key="t-inbox">Sub-Categories</a></li>

                    

                    

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-package-search-icon lucide-package-search">
                                <path
                                    d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14" />
                                <path d="m7.5 4.27 9 5.15" />
                                <polyline points="3.29 7 12 12 20.71 7" />
                                <line x1="12" x2="12" y1="22" y2="12" />
                                <circle cx="18.5" cy="15.5" r="2.5" />
                                <path d="M20.27 17.27 22 19" />
                            </svg>
                            <span data-key="t-email">Products</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ url('/product/view') }}" data-key="t-inbox">All Products</a></li>
                            <li><a href="{{ url('/category/view') }}" data-key="t-inbox">Categories</a></li>
                            <li><a href="{{ url('/subcategory/view') }}" data-key="t-inbox">Sub-Categories</a></li>
                            <li><a href="{{ url('/colorshade/view') }}" data-key="t-inbox">Color Shades</a></li>
                            <li><a href="{{ url('/hotdeals/view') }}" data-key="t-inbox">Offers/Hot Deals</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-server-icon lucide-server">
                                <rect width="20" height="8" x="2" y="2" rx="2" ry="2" />
                                <rect width="20" height="8" x="2" y="14" rx="2" ry="2" />
                                <line x1="6" x2="6.01" y1="6" y2="6" />
                                <line x1="6" x2="6.01" y1="18" y2="18" />
                            </svg>
                            <span data-key="t-email">Services</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ url('/painter/view') }}" data-key="t-inbox">Painters</a></li>
                            <li><a href="{{ url('/contractor/view') }}" data-key="t-inbox">Contractors</a></li>
                            <li><a href="{{ url('/painter/category/view') }}" data-key="t-inbox">Painter Category</a>
                            </li>
                            <li><a href="{{ url('/vendor/view') }}" data-key="t-inbox">Painter Offer</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ url('/blog/view') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-blocks-icon lucide-blocks">
                                <path
                                    d="M10 22V7a1 1 0 0 0-1-1H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-5a1 1 0 0 0-1-1H2" />
                                <rect x="14" y="2" width="8" height="8" rx="1" />
                            </svg>
                            <span data-key="t-dashboard">Blogs</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="user"></i>
                            <span data-key="t-email">Vendors</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ url('/vendor/view') }}" data-key="t-inbox">Vendor details</a></li>
                        </ul>
                    </li>
                @endif

                {{-- *VENDOR SIDEBAR --}}

                @if (Auth::user()->role === 'VENDOR')
                    <li>
                        <a href="{{ url('/vendor/productstock') }}">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <span data-key="t-dashboard">Product Stock</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/vendor/orders') }}">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            <span data-key="t-dashboard">Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/vendor/offers') }}">
                            <i class="fa fa-sort-amount-asc" aria-hidden="true"></i>
                            <span data-key="t-dashboard">Offers</span>
                        </a>
                    </li>
                @endif


                <li class="menu-title" data-key="t-apps"></li>

                {{-- *PAINTER SIDEBAR --}}

                @if (Auth::user()->role === 'PAINTER')
                    <li>
                        <a href="{{ url('/painter/projectview') }}">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <span data-key="t-dashboard">Project Images</span>
                        </a>
                    </li>
                @endif

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
