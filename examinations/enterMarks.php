<?php include '../db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter Exam Marks</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2>Enter Examination Marks</h2>

        <form method="POST" action="processMarks.php">
            
            <label>Select Learner:</label>
            <select name="admission_number" required>
                <option value="">-- Select Learner --</option>
                <?php
                $learners = $conn->query("SELECT admission_number, first_name, last_name FROM learners");
                while ($row = $learners->fetch_assoc()) {
                    echo "<option value='{$row['admission_number']}'>{$row['admission_number']} - {$row['first_name']} {$row['last_name']}</option>";
                }
                ?>
            </select>

            <label>Subject:</label>
            <select name="subject_name" required>
                <option value="">-- Select Subject --</option>
                <option value="Computer Studies">Computer Studies</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Physics">Physics</option>
                <option value="Biology">Biology</option>
                <option value="Agriculture">Agriculture</option>
            </select>

            <label>Score:</label>
            <input type="number" name="score" min="0" max="100" step="0.01" required>

            <label>Examination Date:</label>
            <input type="date" name="examination_date" required>

            <button type="submit">Enter Marks</button>
        </form>
    </div>
</body>
</html>