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
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="jquery-3.6.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

    @yield('content')
    @include('components.modal.modals')
    @extends('components.footer.footer')
    @extends('components.content.booking')
    @extends('components.navigation.navbar')





<script>
    alertify.set('notifier', 'position', 'top-right');

    // Contact Form
    $(document).ready(function () {
        alertify.set('notifier', 'position', 'top-right');

        $("#contactForms").submit(function (e) {
            e.preventDefault();

            var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var subject = $("input[name='subject']").val();
            var message = $("textarea[name='message']").val();

            var data = {
                name: name,
                email: email,
                subject: subject,
                message: message
            };

            $.ajax({
                type: "POST",
                url: "{{ route('contact.form') }}", 
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    if (response.status === 'success') {
                        alertify.success(response.message);
                        $("#contactForms")[0].reset();
                    } else {
                        alertify.error(response.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error: " + status + " - " + error);
                    alertify.error("An error occurred while processing your request.");
                }
            });
        });
    });

    // Arwen Modal Form Submit
    $("#arwenForm").submit(function (event) {
        event.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "{{ route('barber.process', ['barber' => 'arwen']) }}",
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.status === 'success') {
                    alertify.success(response.message);
                    $("#barber1").modal("hide");
                    $("#arwenForm")[0].reset();
                } else {
                    alertify.error(response.message);
                }
            },
            error: function () {
                alertify.error("An error occurred while processing your request.");
            }
        });
    });

    // Allen Modal Form Submit
    $("#allenForm").submit(function (event) {
        event.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "{{ route('barber.process', ['barber' => 'allen']) }}",
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.status === 'success') {
                    alertify.success(response.message);
                    $("#barber2").modal("hide");
                    $("#allenForm")[0].reset();
                } else {
                    alertify.error(response.message);
                }
            },
            error: function () {
                alertify.error("An error occurred while processing your request.");
            }
        });
    });

    // Ramil Modal Form Submit
    $("#ramilForm").submit(function (event) {
        event.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "{{ route('barber.process', ['barber' => 'ramil']) }}",
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.status === 'success') {
                    alertify.success(response.message);
                    $("#barber3").modal("hide");
                    $("#ramilForm")[0].reset();
                } else {
                    alertify.error(response.message);
                }
            },
            error: function () {
                alertify.error("An error occurred while processing your request.");
            }
        });
    });


</script>

</body>
</html>
