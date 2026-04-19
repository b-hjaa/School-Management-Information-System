<?php include '../db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Exam Marks</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2>Update Examination Marks</h2>

        <form method="GET">
            <label>Select Record:</label>
            <select name="id" onchange="this.form.submit()">
                <option value="">-- Select --</option>
                <?php
                $records = $conn->query("SELECT * FROM exam_records");
                while ($row = $records->fetch_assoc()) {
                    $selected = (isset($_GET['id']) && $_GET['id'] == $row['id']) ? 'selected' : '';
                    echo "<option value='{$row['id']}' $selected>
                            {$row['admission_number']} - {$row['subject_name']}
                          </option>";
                }
                ?>
            </select>
        </form>

        <?php
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $record = $conn->query("SELECT * FROM exam_records WHERE id = $id")->fetch_assoc();

            echo "
            <form method='POST' action='processUpdate.php'>
                <input type='hidden' name='id' value='{$record['id']}'>

                <label>Admission Number:</label>
                <input type='text' value='{$record['admission_number']}' readonly>

                <label>Subject:</label>
                <input type='text' value='{$record['subject_name']}' readonly>

                <label>New Score:</label>
                <input type='number' name='score' value='{$record['score']}' step='0.01' min='0' max='100' required>

                <label>Examination Date:</label>
                <input type='date' name='examination_date' value='{$record['examination_date']}' required>

                <button type='submit'>Update Record</button>
            </form>";
        }
        ?>
    </div>
</body>
</html>