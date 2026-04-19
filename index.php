<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management Information System</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .navbar {
            background-color: #006400;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            color: white;
            margin: 0;
            font-size: 20px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            padding: 8px 14px;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .nav-links a:hover {
            background-color: #004d00;
        }

        .hero {
            text-align: center;
            padding: 60px 20px;
            background: #f4f4f4;
        }

        .hero h2 {
            font-size: 32px;
            color: #006400;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 16px;
            color: #555;
            margin-bottom: 40px;
        }

        .cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 40px 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            padding: 30px;
            width: 200px;
            text-align: center;
            text-decoration: none;
            color: #333;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .card .icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #006400;
            margin-bottom: 8px;
        }

        .card p {
            font-size: 13px;
            color: #777;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background: #006400;
            color: white;
            margin-top: 40px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <h1>🏫 School Management Information System</h1>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.html">Registration</a></li>
            <li><a href="examinations/enterMarks.php">Enter Marks</a></li>
            <li><a href="viewReports.php">Reports</a></li>
            <li><a href="examinations/updateMarks.php">Update Marks</a></li>
            <li><a href="examinations/deleteExamRecord.php">Delete Record</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <h2>Welcome to the School Management System</h2>
        <p>Manage learners, subjects, examinations and reports all in one place.</p>
    </div>

    <!-- Cards -->
    <div class="cards">
        <a href="registration.html" class="card">
            <div class="icon">📝</div>
            <h3>Registration</h3>
            <p>Register new learners into the system</p>
        </a>

        <a href="examinations/enterMarks.php" class="card">
            <div class="icon">📋</div>
            <h3>Enter Marks</h3>
            <p>Add examination marks for registered learners</p>
        </a>

        <a href="viewReports.php" class="card">
            <div class="icon">📊</div>
            <h3>Reports</h3>
            <p>View all examination records and scores</p>
        </a>

        <a href="examinations/updateMarks.php" class="card">
            <div class="icon">✏️</div>
            <h3>Update Marks</h3>
            <p>Edit and update existing exam scores</p>
        </a>

        <a href="examinations/deleteExamRecord.php" class="card">
            <div class="icon">🗑️</div>
            <h3>Delete Record</h3>
            <p>Remove examination records from the system</p>
        </a>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>SCS3208 - Web and Services Programming &copy; 2026</p>
    </div>

</body>
</html>