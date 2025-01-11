<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin-top: 50px;
            text-align: center;
        }

        .container {
            background-color: white;
            padding: 20px;
            margin: auto;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            color: #333;
        }

        .info-item {
            margin: 10px 0;
            padding: 5px;
            text-align: left;
        }

        a {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 3px;
            margin-top: 10px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Submitted Information</h1>
        <div class="info-item">
            <?php echo "Name: " . $_POST['myname']; ?>
        </div>
        <div class="info-item">
            <?php echo "Email: " . $_POST['myemail']; ?>
        </div>
        <div class="info-item">
            <?php echo "ID: " . $_POST['myID']; ?>
        </div>
        <div class="info-item">
            <?php echo "Phone: " . $_POST['myphone']; ?>
        </div>
        <div class="info-item">
            <?php echo "Gender: " . $_POST['gender']; ?>
        </div>
        <div class="info-item">
            <?php echo "City: " . $_POST['city']; ?>
        </div>
        <a href="registration.html">Go Back</a>
    </div>
</body>
</html>