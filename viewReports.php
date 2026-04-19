<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Examination Reports</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Examination Reports</h2>
        <table>
            <tr>
                <th>Admission No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Subject</th>
                <th>Score</th>
                <th>Date</th>
            </tr>
            <?php
            $result = $conn->query("SELECT l.admission_number, l.first_name, l.last_name, 
                                           e.subject_name, e.score, e.examination_date 
                                    FROM exam_records e 
                                    JOIN learners l ON e.admission_number = l.admission_number
                                    ORDER BY l.admission_number");
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['admission_number']}</td>
                        <td>{$row['first_name']}</td>
                        <td>{$row['last_name']}</td>
                        <td>{$row['subject_name']}</td>
                        <td>{$row['score']}</td>
                        <td>{$row['examination_date']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6' style='text-align:center;'>No records found.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>