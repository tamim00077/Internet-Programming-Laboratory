<!DOCTYPE html>
<html>
<head>
    <title>CGPA Result</title>
    <style>
        body {
            text-align: center;
            margin: 20px;
            font-family: Arial;
        }
        .container {
            margin: auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .course-info {
            margin: 10px;
            padding: 5px;
            text-align: left;
        }
        a {
            display: inline-block;
            padding: 10px;
            margin: 10px;
            background: green;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CGPA Result</h1>
        
        <?php
        $courseCount = $_POST['courseCount'];
        $totalPoints = 0;
        $totalCredits = 0;

        // Display each course's information
        for($i = 1; $i <= $courseCount; $i++) {
            $grade = floatval($_POST["grade$i"]);
            $credit = floatval($_POST["credit$i"]);
            $totalPoints += $grade * $credit;
            $totalCredits += $credit;
            
            echo "<div class='course-info'>";
            echo "Course $i:<br>";
            echo "Grade: " . $grade . "<br>";
            echo "Credit: " . $credit;
            echo "</div>";
        }

        // Calculate and display CGPA
        $cgpa = $totalPoints / $totalCredits;
        echo "<h2>Your CGPA: " . number_format($cgpa, 2) . "</h2>";
        ?>

        <a href="cgpa_calculator.html">Calculate Again</a>
    </div>
</body>
</html>