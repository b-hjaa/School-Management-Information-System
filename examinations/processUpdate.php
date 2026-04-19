<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id    = (int)$_POST['id'];
    $score = $conn->real_escape_string($_POST['score']);
    $date  = $conn->real_escape_string($_POST['examination_date']);

    $sql = "UPDATE exam_records SET score = '$score', examination_date = '$date' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Record updated successfully!');
            window.location.href = 'updateMarks.php';
        </script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>