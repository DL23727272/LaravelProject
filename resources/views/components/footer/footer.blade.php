@section('footer')
<div class="bg-dark text-white p-5">
    <div class="container-sm d-sm-flex align-items-start">
        <div class="d-sm-flex flex-sm-column flex-md-column align-items-sm-center ">
            <div><img src="{{ asset('assets/image/paesano_logo.jpg') }}" id="img" class="rounded"/></div>
            <div><h1 class="fs-5">Paesano</h1></div>
        </div>
        <div class="d-sm-flex flex-sm-row flex-md-column">
            <div class="">
                <div class="mx-4 d-sm-flex d-md-flex flex-sm-row flex-md-row align-items-sm-center align-items-md-center">
                    <i class="fa-solid fa-home fa-xl mb-2"></i>
                    <span class="m-2">
                        <h5>Marina st., Darapidap rd.</h5>
                        <p>San Antonio Candon City Ilocos Sur</p>
                    </span>
                </div>

                <div class="mx-4 d-sm-flex d-md-flex flex-sm-row flex-md-row align-items-sm-center align-items-md-center">
                    <i class="fa-solid fa-phone fa-xl mb-2"></i>
                    <span class="m-2">
                        <h5>09771043166</h5>
                        <p>Everyday, 9AM to 5PM</p>
                    </span>
                </div>

                <div class="mx-4 d-sm-flex d-md-flex flex-sm-row flex-md-row align-items-sm-center align-items-md-center">
                   <i class="fa-solid fa-envelope fa-xl mb-2"></i>
                   <span class="m-2">
                       <h5>paesanobarbershop
                        @gmail.com</h5>
                       <p>Email us your query</p>
                   </span>
                </div>
            </div>
        </div>
        <!----Contact--->
        <div class="d-sm-flex flex-sm-column" id="contact">
            <form action="{{ route('contact.submitForm') }}" method="post" id="contactForms">
                @csrf
                <h1 class="h6">Contact Us!</h1>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                    <input type="text" name="name" class="form-control" aria-label="Name" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                    <input type="email" name="email" class="form-control" aria-label="Email" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Subject</span>
                    <input type="text" name="subject" class="form-control" aria-label="Subject" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Message</span>
                    <textarea type="text" name="message" class="form-control" aria-label="Message" aria-describedby="inputGroup-sizing-sm"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    alertify.set('notifier', 'position', 'top-right');



    @if(Session::get('success'))
        alertify.success("{{ Session::get('success') }}");
    @endif
    @if(Session::has('fail'))
        alertify.error("{{ Session::get('fail') }}");
    @endif
</script>
