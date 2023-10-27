@section('content')
<div class="container-sm d-sm-flex flex-sm-column flex-md-row align-items-md-center">
    <div class="p-2">
        <h1 class="display-6 fw-medium">Welcome to Paesano Barber Shop – Where Style Meets Tradition! </h1>
        <p class="lead mt-3 mb-3">Step into a world of timeless grooming and a blend of contemporary trends at Paesano Barber Shop. We're not just a barber shop; we're a destination for the modern gentleman seeking the perfect grooming experience. Discover the artistry of our skilled barbers and immerse yourself in an ambiance that exudes sophistication and classic charm.</p>
        <div class="d-sm-flex flex-sm-column flex-md-row justify-content-sm-around justify-content-md-start">
            <div class="m-2"><i class="fa-brands fa-2xl fa-square-twitter" style="color: #0D6EFD"></i> <a href="#" class="link-underline-dark link-dark link-offset-2">Twitter</a></div>
            <div class="m-2"><i class="fa-brands fa-2xl fa-square-facebook" style="color: #0D6EFD"></i> <a href="#" class="link-underline-dark link-dark link-offset-2">Facebook</a></div>
            <div class="m-2"><i class="fa-brands fa-2xl fa-square-instagram" style="color: #0D6EFD"></i> <a href="#" class="link-underline-dark link-dark link-offset-2">Instagram</a></div>
        </div>
    </div>
    <div class="p-2">
        <section class="banner">
            <div id="slider">
                <div class="slide">
                    <img src="{{ asset('assets/image/img1.jpg') }}" class="img-thumbnail img-fluid shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="slidertitle" id="title1"></div>
                </div>

                <div class="slide">
                    <img src="{{ asset('assets/image/img2.jpg') }}" class="img-thumbnail img-fluid shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="slidertitle" id="title2"></div>
                </div>

                <div class="slide">
                <img src="{{ asset('assets/image/img3.jpg') }}" class="img-thumbnail img-fluid shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="slidertitle" id="title3"></div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="d-sm-flex flex-column container-sm mt-5 mb-5">
    <div class="p-2">
        <h1 class="display-6 fw-medium">Book Your Appointment – Unleash Your Style! </h1>
        <p class="lead mt-3 mb-3">
        Ready to elevate your grooming game? Booking an appointment at Paesano Barber Shop is a breeze. Simply select a date and time that suits you best, and let our master barbers work their magic.
        </p>
    </div>
    <div class="d-sm-flex flex-sm-column flex-md-row flex-lg-row justify-content-sm-center justify-content-md-around">
        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-burst" style="color: #0D6EFD"></i> Classic Ambiance: </h5>
                <p class="card-text">Immerse yourself in our welcoming, classy atmosphere that harks back to the golden age of barbershops.</p>
            </div>
        </div>
        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-handshake-simple" style="color: #0D6EFD"></i> Expert Barbers:</h5>
                <p class="card-text">Our seasoned barbers are skilled in the latest trends and traditional techniques, ensuring you get the perfect cut every time.</p>
            </div>
        </div>
        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-person-circle-check" style="color: #0D6EFD"></i> Tailored Services:</h5>
                <p class="card-text"> From haircuts to shaves, we tailor our services to meet your unique grooming preferences and style.</p>
            </div>
        </div>
    </div>
</div>
