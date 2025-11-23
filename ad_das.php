<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            font-family: "Arial", sans-serif;
            margin: 0;
            background-color: #f8f9fa;
        }

        .sidenav {
            height: 100%;
            width: 260px;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            padding-top: 20px;
            color: white;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.2);
        }

        .sidenav h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
            font-size: 22px;
            font-weight: bold;
        }

        .sidenav a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
            border-radius: 6px;
            margin: 8px 15px;
        }

        .sidenav a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .sidenav a.active {
            background-color: #4e54c8;
            color: white;
        }

        .sidenav .fa {
            margin-right: 12px;
        }

        .main {
            margin-left: 260px;
            padding: 30px;
            min-height: 100vh;
        }

        .btn-logout {
            margin-top: 50px;
            background: linear-gradient(135deg, #ff512f, #dd2476);
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            display: block;
            text-align: center;
            transition: all 0.3s;
            width: calc(100% - 30px);
            margin-left: 15px;
        }

        .btn-logout a {
            color: white;
            text-decoration: none;
        }

        .btn-logout:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }

        @media screen and (max-width: 768px) {
            .sidenav {
                width: 200px;
            }

            .main {
                margin-left: 200px;
            }

            footer {
                margin-left: 200px;
            }
        }

        @media screen and (max-width: 576px) {
            .sidenav {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main {
                margin-left: 0;
            }

            footer {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="sidenav">
        <h2>Admin Dashboard</h2>
        <a href="./ad_addfac.php">
            <i class="fa-solid fa-user-plus"></i> Add Faculty
        </a>
        <a href="./ad_facultydet.php">
            <i class="fa-solid fa-users"></i> View Faculty
        </a>
        <a href="./ad_students.php">
            <i class="fa-solid fa-graduation-cap"></i> Students
        </a>
        <a href="./ad_viewtimetable.php">
            <i class="fa-solid fa-calendar-days"></i> View Time Table
        </a>
        <a href="./ad_viewresult.php">
            <i class="fa-solid fa-chart-bar"></i> View Result
        </a>
        <button class="btn-logout">
            <a href="index.php">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </a>
        </button>
    </div>


</body>

</html>