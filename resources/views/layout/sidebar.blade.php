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
                            <li><a href="{{ url('/relatedprods/view') }}" data-key="t-inbox">Related Products</a></li>
                @endif

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
