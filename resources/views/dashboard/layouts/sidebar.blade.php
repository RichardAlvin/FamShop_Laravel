<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active': '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/products*') ? 'active': '' }}" href="/dashboard/products">
                    <span data-feather="file"></span>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/bestsellers*') ? 'active': '' }}" href="/dashboard/bestsellers">
                    <span data-feather="file"></span>
                    Best Seller
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="shopping-cart"></span>
                    Comment
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>
        </ul>
    </div>
</nav>