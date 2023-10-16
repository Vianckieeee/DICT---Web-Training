<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Student Information</h1>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Name</h3>
            </div>
            <div class="col-md-3">
                <h3>Age</h3>
            </div>
            <div class="col-md-3">
                <h3>Course</h3>
            </div>
            <div class="col-md-3">
                <h3>Comment</h3>
            </div>
        </div>
        <?php
        // Loop through the $students array and display each student's information in a Bootstrap grid
        foreach ($students as $student) {
            echo '<div class="row">';
            echo '<div class="col-md-3">' . $student->Name . '</div>';
            echo '<div class="col-md-3">' . $student->Age . '</div>';
            echo '<div class="col-md-3">' . $student->Course . '</div>';
            
            // Use a conditional statement to determine the comment
            echo '<div class="col-md-3">';
            if ($student->Age < 18) {
                echo 'Minor';
            } else {
                echo 'Adult';
            }
            echo '</div>';
            
            echo '</div>';
        }
        ?>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
