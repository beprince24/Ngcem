<?php
include 'faculty_das.php';
?>
<?php
$ik = $_SESSION["ig"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Registration Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .card {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            background: linear-gradient(135deg, #ffffff, #e0f7fa);
            padding: 20px;
        }

        .form-control {
            border: 2px solid #005f73;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #ffba08;
            box-shadow: 0 0 5px rgba(255, 186, 8, 0.8);
        }

        .btn {
            border-radius: 8px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #ffba08;
            border: none;
        }

        .btn-primary:hover {
            background-color: #005f73;
            color: white;
        }

        .btn-danger {
            background-color: #e63946;
            border: none;
        }

        .btn-danger:hover {
            background-color: #d00000;
        }

        h3 {
            color: #005f73;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>


<body class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <h3>FACULTY REGISTRATION FORM</h3>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <?php
                            print("<input type='text' value='$ik' class='form-control' name='id'>");
                            ?> </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter First Team" name="fie" required>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Second Team" name="sec" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Class Third Team" name="thr" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" name="sub" class="btn btn-primary px-4">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["sub"])) {

        $ic = $_POST["id"];
        $first = $_POST["fie"];
        $se = $_POST["sec"];
        $th = $_POST["thr"];
        $st = "Update";

        $con = mysqli_connect("sql202.infinityfree.com", "if0_38391171", "3Q9LwyDLlg9ow45", "if0_38391171_events");
        if ($con) {
            $q = "update  timetable  set status='$st',first='$first',second='$se',third='$th' where id='$ic'";
            $execute = mysqli_query($con, $q);
            print("<script> alert('Result Add Successfully');</script>");
        }
    }
    ?>
</body>

</html>