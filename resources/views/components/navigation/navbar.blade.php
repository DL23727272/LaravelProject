@section('navbar')
<header class="text-gray-600 body-font" style="position: sticky; top: 0; width: 100%; z-index: 1;">
    <nav class="navbar navbar-expand-lg bg-white sticky-top shadow p-3 mb-5">
        <div class="container-sm">
            <img src="{{ asset('assets/image/paesano_logo.jpg') }}" id="img"/>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    <a class="nav-link" href="/book">Book</a>
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logIn">Log-in</a>
                </div>
            </div>
        </div>
    </nav>
</header>
