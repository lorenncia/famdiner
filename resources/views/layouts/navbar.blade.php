<div class="navigation-container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top px-8 py-9">
        <div class="container-fluid">
            <div class="navar-brand d-flex justify-content-center align-items-center gap-3">
                <a class="nav-link" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" height="50" class="d-none d-lg-block">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navBarSupportedContent">
                <ul class="navbar-nav mr-auto d-flex justify-content-end w-100">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link {{ Request::routeIs('menu') ? 'active' : '' }} 
                           dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" 
                           aria-haspopup="true" aria-expanded="false">
                           Menu
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Burger</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Rice & Pasta</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Seafood</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link {{ Request::routeIs('about-us') ? 'active' : '' }}">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('profile.edit', 1) }}" class="nav-link">
                           <img src="https://picsum.photos/300/300" alt="" class="img-profile rounded-circle" style="max-width:1.5em;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
