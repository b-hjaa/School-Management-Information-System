<?php include '../db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Exam Record</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2>Delete Examination Record</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Admission No</th>
                <th>Subject</th>
                <th>Score</th>
                <th>Action</th>
            </tr>
            <?php
            $result = $conn->query("SELECT * FROM exam_records");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['admission_number']}</td>
                    <td>{$row['subject_name']}</td>
                    <td>{$row['score']}</td>
                    <td>
                        <button onclick='confirmDelete({$row['id']})' 
                                style='background:red;color:white;border:none;padding:8px 12px;cursor:pointer;border-radius:4px;'>
                            Delete
                        </button>
                    </td>
                </tr>";
            }
            ?>
        </table>
    </div>

    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this record?")) {
                window.location.href = 'deleteRecord.php?id=' + id;
            }
        }
    </script>
</body>
</html>