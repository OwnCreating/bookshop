    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion bg-color" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('front.index')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <img src="https://img.icons8.com/bubbles/50/000000/book-shelf.png" alt="">
            </div>
            <div class="sidebar-brand-text mx-3"><i>Book <sup>lib</sup></i></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <!-- User Section -->

        <!-- Home -->
        <li class="nav-item">
            <a href="{{route('front.index')}}" class="nav-link">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#catgory"
                aria-expanded="true" aria-controls="catgory">
                <i class="fas fa-list-alt"></i>
                <span>Categoties</span>
            </a>
            <div id="catgory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Categories</h6>
                    <a class="collapse-item" href="#">Articles</a>
                    <a class="collapse-item" href="#">News</a>
                    <a class="collapse-item" href="#">Newsletters</a>
                    <a class="collapse-item" href="#">Commands</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brand"
                aria-expanded="true" aria-controls="brand">
                <i class="fas fa-palette"></i>
                <span>Brands</span>
            </a>
            <div id="brand" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="buttons.html">Buttons</a>
                    <a class="collapse-item" href="cards.html">Cards</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#account"
                aria-expanded="true" aria-controls="account">
                <i class="fas fa-user"></i>
                <span>Account</span>
            </a>
            <div id="account" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="buttons.html">Buttons</a>
                    <a class="collapse-item" href="cards.html">Cards</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contact"
                aria-expanded="true" aria-controls="contact">
                <i class="fas fa-address-book"></i>
                <span>Contact</span>
            </a>
            <div id="contact" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="buttons.html">Buttons</a>
                    <a class="collapse-item" href="cards.html">Cards</a>
                </div>
            </div>
        </li>
        <!-- End User Section -->
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        
        <!-- Admin Section -->
        <div class="sidebar-heading">
            Admin Panel
        </div>
        <!-- Admin - Products -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product"
                aria-expanded="true" aria-controls="product">
                <i class="fas fa-list-alt"></i>
                <span>Products</span>
            </a>
            <div id="product" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Products</h6>
                <a class="collapse-item" href="{{route('product.create')}}">create</a>
                    <a class="collapse-item" href="{{route('product.index')}}">products table</a>
                </div>
            </div>
        </li>
        <!-- End Admin Section -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
