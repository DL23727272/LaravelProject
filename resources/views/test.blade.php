<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paesano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <script src="jquery-3.6.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #img{
            width: 75px;
            height: 70px;
        }

        .img{
            width: 500px;
            height: 400px;
        }

        body{
            overflow-x: hidden;
            overflow-y: auto;
            margin: 0;
            padding: 0;
        }

        #slider {
            width: 100%; /* Adjust the width as needed */
            height: 400px; /* Adjust the height as needed */
            display: flex;
            overflow: hidden;
        }

        .slide {
            min-width: 100%;
            transition: transform 1.1s ease-in-out; /* Changed from opacity to transform for smooth sliding */
        }

        .slide img {
            width: 600px;
            height: 400px;
        }
        .nav-link{
            cursor: pointer;
        }
    </style>

    <script>
       var currentImage = 1;

        function showNextImage() {
        // Slide to the next image
        $('#slider').animate({ scrollLeft: currentImage * $('.slide').width() }, 1100, function() {
                // Get the next image index (cycling back to the first image if needed)
                currentImage = (currentImage % 3) + 1;
            });
        }

        $(document).ready(function() {
            // Show the first image initially
            currentImage = 1;

            // Set the interval to change the image every 3000ms (3 seconds)
            setInterval(showNextImage, 3000);
        });
    </script>
</head>
<body>



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

    @extends('components.navigation.navbar')


    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>


        alertify.set('notifier', 'position', 'top-right');



        @if(Session::get('success'))
           alertify.success("{{ Session::get('success') }}");
              // alertify.notify("{{ Session::get('success') }}", 'custom', 2, function(){console.log('dismissed');});
        @endif

       /* @if(session('fail'))
            alertify.error("{{ session('fail') }}");
        @endif */

        var msg = alertify.notify('Contact me for your queries!', 'custom', 2, function(){console.log('dismissed');});
        msg.delay(5);
    </script>
</body>
</html>
