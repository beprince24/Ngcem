<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #005f73;
            color: #ffffff;
        }

        header h1 {
            padding: 30px 0;
            text-align: center;
            color: #ffba08;
            font-weight: bold;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .form-control {
            border: 2px solid #005f73;
            border-radius: 8px;
        }

        .btn-success {
            background-color: #0a9396;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-success:hover {
            background-color: #005f73;
        }

        .btn-danger {
            background-color: #e63946;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-danger:hover {
            background-color: #d00000;
        }

        .container {
            margin-top: 50px;
        }

        footer {
            background-color: #005f73;
            color: #ffffff;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-fluid">
            <h1>Kaamadhenu Arts and Science College</h1>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 p-4">
                    <h1 align="center" style="color: #005f73;">ADMIN LOGIN</h1>
                    <form method="post" enctype="multipart/form-data" class="mt-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Admin ID" name="user" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Enter Password" name="pass" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" name="sub" class="btn btn-success px-4">LOGIN</button>
                            <a href="./index.php" class="btn btn-danger px-4">BACK</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Kaamadhenu Arts and Science College. All Rights Reserved.</p>
    </footer>
</body>

</html>

<?php
if (isset($_POST["sub"])) {
    $use = $_POST["user"];
    $pas = $_POST["pass"];

    if ($use == "admin" && $pas == "adad") {
        print("<script> alert('Login successful'); document.location='ad_das.php';</script>");
        return true;
    } else {
        print("<script> alert('Enter a valid Admin ID and Password');</script>");
        return false;
    }
}
?>