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
                @foreach($barbers as $barber)
                    <div class="card m-2" style="width: 20rem;">
                        <img src="{{ asset('assets/image/img3.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa-regular fa-user"></i> {{ $barber->barberName }}</h5>
                            <p class="card-text lead-sm">{{ $barber->bioContent }}</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber{{ $barber->id }}">Barber {{ $barber->id }}</button>
                        </div>
                    </div>
            @endforeach
            </div>

            <!--Testimonials-->
            <div class="container-sm mt-5" id="testimonialsContainer">
                <h1 class="display-6 mb-3 fw-medium">Raving Reviews: Satisfied Clients Share Their Paesano Barber Shop Experience</h1>
                <div class="d-sm-flex flex-sm-column flex-md-row">

                    @foreach($reviews as $index => $review)
                        @if($index % 3 == 0)
                            <div class="col-md-4">
                        @endif

                        <div class="card m-2">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img src="{{ asset('assets/image/paesano_logo.jpg') }}" class="customer" alt="" srcset="">
                                    <div class="px-2">
                                        <h5 class="card-title">{{ $review->customerName }}</h5>
                                        <p class="card-subtitle"><i class="fa-regular fa-thumbs-up fa-bounce"></i>{{ $review->customerStatus }}</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="lead mt-3">
                                        {{ $review->reviewContent }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        @if(($index + 1) % 3 == 0 || ($index + 1) == count($reviews))
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>

            <!-- end of Testimonials-->

            <!-- Review Form -->

            <div class="mt-5">
                <h2 class="display-6 mb-3 fw-medium text-center"><i class="fa-solid fa-star"></i> Leave Your Review</h2>
                <p class="text-center lead">Share your experience with us by leaving a review below. Your feedback is valuable to us and helps us improve our services to better serve you in the future!</p>

                <div class="container mx-auto" style="width: 70%">

                    <form action="{{ route('review.submitForm') }}" method="post" id="reviewForm">
                        @csrf

                        <div class="mb-3">
                            <label for="customerName" class="form-label"><i class="fa-regular fa-user"></i> Your Name</label>
                            <input type="text" class="form-control" id="customerName" name="customerName" required>
                        </div>

                        <div class="mb-3">
                            <label for="customerStatus" class="form-label"><i class="fa-regular fa-face-laugh-wink"></i> Your Status (e.g., Satisfied Customer)</label>
                            <select class="form-select" id="customerStatus" name="customerStatus" required>
                                <option disabled selected value="">Choose a status...</option>
                                <option value="Satisfied Customer">Satisfied Customer</option>
                                <option value="Happy Client">Happy Client</option>
                                <option value="Not Satisfied">Not Satisfied</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="reviewContent" class="form-label"><i class="fa-regular fa-comment"></i> Your Review</label>
                            <textarea class="form-control" id="reviewContent" name="reviewContent" rows="4" required></textarea>
                        </div>


                        <button class="btn btn-primary" type="button" onclick="submitReview()">Submit Review</button>
                    </form>

                </div>
            </div>

            <!-- End Of Review Form -->

        </div>
    </div>
    <script>
        function submitReview() {
            $.ajax({
                type: 'POST',
                url: '{{ route('review.submitForm') }}',
                data: $('#reviewForm').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alertify.success(response.message);

                    $('#reviewForm')[0].reset();

                },
                error: function(error) {
                    alertify.error('Failed to submit review. Please try again.');
                }
            });
        }
    </script>
