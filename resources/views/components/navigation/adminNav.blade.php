@section('adminNavbar')
<nav class="navbar bg-body-tertiary fixed-top shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="container-sm">

        <a class="navbar-brand" href="/home"><img src="{{ asset('assets/image/paesano_logo.jpg') }}" id="img"/> Review Messages</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Paesano Barber Shop</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link" href="/admin"><i class="fa-solid fa-users-line"></i> Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/message"><i class="fa-solid fa-message"></i> Contact Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/review"><i class="fa-solid fa-star-half-stroke"></i> Review Messages</a>
            </li>
            </ul>
        <!---   <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-scissors"></i> Barbers
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="arwen.php"><i class="fa-solid fa-user-check"></i> Arwen</a></li>
                    <li><a class="dropdown-item" href="allen.php"><i class="fa-solid fa-user-check"></i> Allen</a></li>
                    <li><a class="dropdown-item" href="ramil.php"><i class="fa-solid fa-user-check"></i> Ramil</a></li>
                </ul>
            </div> ---->
        </div>
        </div>
    </div>
    </nav>

    <br></br>
