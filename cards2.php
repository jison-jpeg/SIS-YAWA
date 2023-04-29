<?php
// Connect to database
$conn = mysqli_connect('localhost', 'root', 'admin', 'stud_db');

// Query all students
$result = mysqli_query($conn, "SELECT * FROM students");

// Count total number of students
$total_students = mysqli_num_rows($result);
?>
sahdvjhahsdjasdasad
<!-- Sales Card -->
<div class="col-xxl-4 col-md-6">
    <div class="card info-card sales-card" id="dash-pending">
        <div class="card-body">
            <h5 class="card-title">Pending</h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-dash-circle"></i>
                </div>
                <div class="ps-3">
                    <h6>145</h6>
                    <span class="text-muted small pt-2 ps-1">Enrollments</span>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Sales Card -->

<!-- Revenue Card -->
<div class="col-xxl-4 col-md-6">
    <div class="card info-card revenue-card" id="dash-approved">

        <div class="card-body">
            <h5 class="card-title">Approved</h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-check-circle"></i>
                </div>
                <div class="ps-3">
                    <?php


                    // Display total number of students
                    
                    echo "<h6>" . $total_students . "</h6>";

                    // Close database connection
                    mysqli_close($conn);
                    ?>
                    <!-- <h6>3</h6> -->
                    <span class="text-muted small pt-2 ps-1">Enrollments</span>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Revenue Card -->

<!-- Customers Card -->
<div class="col-xxl-4 col-xl-12">

    <div class="card info-card customers-card" id="dash-rejected">

        <div class="card-body">
            <h5 class="card-title">Rejected</h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-x-circle"></i>
                </div>
                <div class="ps-3">
                    <h6>1244</h6>
                    <span class="text-muted small pt-2 ps-1">Enrollments</span>

                </div>
            </div>

        </div>
    </div>

</div>
<!-- End Customers Card -->