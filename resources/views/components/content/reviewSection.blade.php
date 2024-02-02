@section('reviewSection')

    <div class="container-sm pt-5">
        <div class="container-sm pt-5">
            <h1 class="h4 mt-5"><i class="fa-solid fa-users-line"></i> Admin Dashboard</h1>
            <div class="d-sm-flex gap-1">
                <div class="card">
                    <div class="card-body d-flex flex-column align-items-end">
                        <div>
                        <?php
                            include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';

                            $currentDate = date("Y-m-d");

                            $query = "SELECT COUNT(*) AS appointment_count FROM arwen WHERE checkin_date = '$currentDate'";
                            $result = mysqli_query($connect, $query);

                            $totalAppointmentsToday = 0;
                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $totalAppointmentsToday = $row['appointment_count'];
                            }
                        ?>
                        <p>Total appointments today: <?php echo $totalAppointmentsToday; ?></p>
                        </div>
                        <div>
                            <h6 class="h5"><i class="fa-solid fa-user-check"></i> Arwen Clients</h6>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body d-flex flex-column align-items-end">
                        <div>
                        <?php
                            include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';

                            $currentDate = date("Y-m-d");

                            $query = "SELECT COUNT(*) AS appointment_count FROM allen WHERE checkin_date = '$currentDate'";
                            $result = mysqli_query($connect, $query);

                            $totalAppointmentsToday = 0;
                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $totalAppointmentsToday = $row['appointment_count'];
                            }
                        ?>
                        <p>Total appointments today: <?php echo $totalAppointmentsToday; ?></p>
                        </div>
                        <div>
                            <h6 class="h5"><i class="fa-solid fa-user-check"></i> Allen Clients</h6>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body d-flex flex-column align-items-end">
                        <div>
                        <?php
                            include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';

                            $currentDate = date("Y-m-d");

                            $query = "SELECT COUNT(*) AS appointment_count FROM ramil WHERE checkin_date = '$currentDate'";
                            $result = mysqli_query($connect, $query);

                            $totalAppointmentsToday = 0;
                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $totalAppointmentsToday = $row['appointment_count'];
                            }
                        ?>
                        <p>Total appointments today: <?php echo $totalAppointmentsToday; ?></p>
                        </div>
                        <div>
                            <h6 class="h5"><i class="fa-solid fa-user-check"></i> Ramil Clients</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid d-flex justify-content-start">
                <div style="width: 500px;">
                    <h1 class="h4 mt-4">Total Clients Today:
                    <?php
                        $totalAppointments = 0;
                        foreach ($barberNames as $barberName) {
                            $totalAppointments += totalAppoitments($connect, $barberName);
                        }
                        echo $totalAppointments;
                    ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <?php
    displayReviews($connect);

    ?>
