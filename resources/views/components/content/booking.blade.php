@section('booking')
<style>
    #img{
        width: 75px;
        height: 70px;
    }

    .img{
        width: 500px;
        height: 400px;
    }
    .nav-link{
        cursor: pointer;
    }
    .customer{
        width: 50px;
        height: 50px;
        border-radius: 100%;
        border: 2px solid black;
    }
</style>
<div class="d-sm-flex flex-column container-sm mt-5 mb-5">
    <div class="">
        <h1 class="display-6 fw-medium">Book Your Appointment – Unleash Your Style!</h1>
        <p class="lead mt-3">
        Ready to elevate your grooming game? Booking an appointment at Paesano Barber Shop is a breeze. Simply select a date and time that suits you best, and let our master barbers work their magic.
        </p>
    </div>
    <div class="container-sm">
        <div class="row row-cols-sm-2 row-cols-md-4 justify-content-sm-center justify-content-center">
        <div class="card m-2" style="width: 20rem;">
            <img src="{{ asset('assets/image/img3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-regular fa-user"></i> Arwen</h5>
                <p class="card-text lead-sm">Allen Barber is committed to delivering top-notch hairstyling services that align with your personal style and enhance your confidence. Step into our salon and experience the artistry of our skilled professionals.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber1">Barber 1</button>
            </div>
        </div>
        <div class="card m-2" style="width: 20rem;">
            <img src="{{ asset('assets/image/img3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-regular fa-user"></i> Allen</h5>
                <p class="card-text lead-sm">Step into Ramill Barber and embark on a journey of personalized grooming and styling. Our expert barbers pay meticulous attention to detail, ensuring each visit leaves you feeling rejuvenated and looking impeccably sharp.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber2">Barber 2</button>
            </div>
        </div>
        <div class="card m-2" style="width: 20rem;">
            <img src="{{ asset('assets/image/img3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-regular fa-user"></i> Ramil</h5>
                <p class="card-text lead-sm">Arwen Barber is where style meets expertise. Our dedicated team of barbers combines skill and passion to create hairstyles that define your individuality. Experience the epitome of grooming in a welcoming and comfortable environment.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber3">Barber 3</button>
            </div>
        </div>
        <!--<div class="card m-2">
            <img src="img/img3.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Barber 4</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber4">Barber 4</button>
            </div>
        </div>
        <div class="card m-2">
            <img src="img/img3.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Barber 5</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber5">Barber 5</button>
            </div>
        </div>
        <div class="card m-2">
            <img src="img/img3.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Barber 6</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber6">Barber 6</button>
            </div>
        </div>
    -->
    </div>

    <!--Testimonials-->
    <div class="container-sm mt-5">
        <h1 class="display-6 mb-3 fw-medium">Raving Reviews: Satisfied Clients Share Their Paesano Barber Shop Experience</h1>
        <div class="d-sm-flex flex-sm-column flex-md-row">
            <div class="card m-2">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('assets/image/paesano_logo.jpg') }}" class="customer" alt="" srcset="">
                        <div class="px-2">
                            <h5 class="card-title">Manilyn Lopez Rivarez</h5>
                            <p class="card-subtitle"><i class="fa-regular fa-thumbs-up fa-bounce"></i> Satisfied Customer</p>
                        </div>
                    </div>
                    <div>
                        <p class="lead mt-3">
                            Highly recommended👍
                            Customer service oriented and will surely get what you pay for.😊
                            Great job Paesano!😊
                        </p>
                    </div>
                </div>
            </div>
            <div class="card m-2">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('assets/image/paesano_logo.jpg') }}" class="customer" alt="" srcset="">
                        <div class="px-2">
                            <h5 class="card-title">Divo Galace Valois</h5>
                            <p class="card-subtitle"><i class="fa-regular fa-thumbs-up fa-bounce"></i> Satisfied Customer</p>
                        </div>
                    </div>
                    <div>
                        <p class="lead mt-3">
                            Commendable service. For those lads out there who want trendy hairstyle, you better visit this one. Two thumbs-up.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card m-2">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('assets/image/paesano_logo.jpg') }}" class="customer" alt="" srcset="">
                        <div class="px-2">
                            <h5 class="card-title"> Mark Jeriel Cabalbag</h5>
                            <p class="card-subtitle"><i class="fa-regular fa-thumbs-up fa-bounce"></i> Satisfied Customer</p>
                        </div>
                    </div>
                    <div>
                        <p class="lead mt-3">
                            Highly recommended👍
                            Customer service oriented and will surely get what you pay for.😊
                            Great job Paesano!😊
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
