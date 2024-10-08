<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        #top-bar {
            background: #1e90ff;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            color: white;
        }

        #top-bar a {
            text-decoration: none;
            color: white;
            margin-right: 20px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        #top-bar a:hover {
            color: #f1f1f1;
        }

        #sidebar {
            width: 250px;
            height: 100%;
            background: #2c3e50;
            position: fixed;
            left: 0;
            top: 50px;
            overflow-x: hidden;
            padding-top: 20px;
            transition: all 0.3s ease;
        }

        #sidebar a {
            padding: 15px 10px;
            text-decoration: none;
            font-size: 18px;
            color: #ccc;
            display: block;
            transition: all 0.3s ease;
        }

        #sidebar a:hover {
            background-color: #34495e;
            color: white;
        }

        #content {
            margin-left: 250px;
            margin-top: 10px;
            padding: 20px;
            background-color: #f7f7f7;
            min-height: calc(100vh - 50px);
            overflow: auto;
            box-sizing: border-box;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 800px;
            margin: 20px auto;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #1e90ff;
        }

        .branch {
            margin-bottom: 20px;
        }

        .branch a {
            display: block;
            padding: 20px;
            background-color: #1e90ff;
            border-radius: 8px;
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .branch a:hover {
            background-color: #4caf50;
        }
    </style>
</head>
<body>

<div id="top-bar">
    <div>
        <a href="admin.php"><i class="fas fa-user"></i> Admin</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</div>

<div id="sidebar">
    <a href="department.php"><i class="fas fa-building"></i> Department</a>
    <a href="furnituretable.php"><i class="fas fa-chair"></i> Furniture</a>
    <a href="usagetable.php"><i class="fas fa-chart-bar"></i> Usage</a>
    <a href="audittable.php"><i class="fas fa-clipboard-list"></i> Audit</a>
</div>

<div id="content">
    <!-- Engineering Departments Code -->
    <div class="container">
        <h1></h1>
        <div class="branch">
            <a href="teacherstable.php?branch=CSE">Computer Science & Engineering (CSE)</a>
        </div>
        <div class="branch">
            <a href="teacherstable.php?branch=ECE">Electronics & Communication Engineering (ECE)</a>
        </div>
        <div class="branch">
            <a href="teacherstable.php?branch=CV">Civil Engineering (CV)</a>
        </div>
        <div class="branch">
            <a href="teacherstable.php?branch=ME">Mechanical Engineeringn(ME)</a>
        </div>
        <div class="branch">
            <a href="teacherstable.php?branch=NES">Non Engineering Staff (NES)</a>
        </div>
    </div>
</div>

</body>
</html>
