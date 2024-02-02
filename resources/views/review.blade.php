    <?php
        session_start();

        $barberNames = ['arwen', 'allen', 'ramil'];

        function totalAppoitments($connect, $barberName) {
            $currentDate = date("Y-m-d");

            $query = "SELECT * FROM $barberName WHERE checkin_date = '$currentDate'";
            $result = mysqli_query($connect, $query);

            $totalAppointmentsToday = mysqli_num_rows($result);

            // Return the total appointments
            return $totalAppointmentsToday;
        }



        // Check if the function is not already defined
        if (!function_exists('displayMessages')) {
            function displayReviews($connect) {
                $query = "SELECT * FROM reviews";
                $result = mysqli_query($connect, $query);

                echo "<div class='container-sm pb-5'>";
                echo "<h1 class='h4 mt-3'><i class='fa-solid fa-comment'></i> Review Messages</h1>";
                echo "<table class='table'>";
                echo "<th scope='col'><i class='fa-solid fa-id-card'></i> ID </th>";
                echo "<th scope='col'><i class='fa-solid fa-user'></i> Name </th>";
                echo "<th scope='col'><i class='fa-solid fa-envelope'></i> Status</th>";
                echo "<th scope='col'><i class='fa-solid fa-message'></i> Messages </th>";
             //   echo "<th scope='col'><i class='fa-solid fa-pen-to-square'></i> Done </th>";
             //   echo "<th scope='col'><i class='fa-solid fa-trash'></i> Delete </th>";
                echo "</tr>";

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr id='reviewRow_{$row["id"]}'>";
                        echo "<td> {$row["id"]} </td>";
                        echo "<td> {$row["customerName"]} </td>";
                        echo "<td> {$row["customerStatus"]} </td>";
                        echo "<td> {$row["reviewContent"]} </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>0 results</td></tr>";
                }

                echo "</table>";
                echo "</div>";
            }
        }


    ?>
    <html>
        <head>
            <title>Reviews</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <!-- Alertify sakit sa ulo -->
            <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
            <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <style>
                #img{
                        width: 50px;
                        height: 50px;
                    }

            </style>
        </head>
        <body>
            @include('components.modal.modals')
            @extends('components.navigation.adminNav')
            @extends('components.content.reviewSection')





            <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                alertify.set('notifier', 'position', 'top-right');
                alertify.success('Welcome, to reviews!');

            </script>
        </body>
    </html>
