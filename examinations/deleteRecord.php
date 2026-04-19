<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM exam_records WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Record deleted successfully!');
            window.location.href = 'deleteExamRecord.php';
        </script>";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "No record selected.";
}
$conn->close();
?>