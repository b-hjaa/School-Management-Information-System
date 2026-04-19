<?php
include 'db.php';

if (isset($_POST['register'])) {

    $admission = $conn->real_escape_string($_POST['admission_number']);
    $fname     = $conn->real_escape_string($_POST['first_name']);
    $lname     = $conn->real_escape_string($_POST['last_name']);
    $dob       = !empty($_POST['date_of_birth']) ? $_POST['date_of_birth'] : NULL;
    $gender    = $conn->real_escape_string($_POST['gender']);
    $grade     = (int)$_POST['grade'];
    $email     = !empty($_POST['email']) ? $conn->real_escape_string($_POST['email']) : NULL;

    $sql = "INSERT INTO learners (admission_number, first_name, last_name, date_of_birth, gender, grade, email) 
            VALUES ('$admission', '$fname', '$lname', '$dob', '$gender', $grade, '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Learner registered successfully!');
                window.location.href = 'registration.html';
              </script>";
    } else {
        echo "Database Error: " . $conn->error;
    }
}
$conn->close();
?>