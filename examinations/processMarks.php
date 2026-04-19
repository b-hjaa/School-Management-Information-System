<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admission = $conn->real_escape_string($_POST['admission_number']);
    $subject   = $conn->real_escape_string($_POST['subject_name']);
    $score     = $conn->real_escape_string($_POST['score']);
    $date      = $conn->real_escape_string($_POST['examination_date']);

    $sql = "INSERT INTO exam_records (admission_number, subject_name, score, examination_date) 
            VALUES ('$admission', '$subject', '$score', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Marks entered successfully!');
            window.location.href = 'enterMarks.php';
        </script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>