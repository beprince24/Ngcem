<?php
include 'faculty_das.php';
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
<?php
        $con = mysqli_connect("sql202.infinityfree.com", "if0_38391171", "3Q9LwyDLlg9ow45", "if0_38391171_events");
        if ($con) {
    $q = "select * from faculty_info where id='$id'";
    $sql = mysqli_query($con, $q);
    while ($row = mysqli_fetch_row($sql)) {

        $eve = $row[6];
    }
}

?>

<body class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <h3>FACULTY REGISTRATION FORM</h3>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <?php
                            print("<input type='text' value='$eve' class='form-control' name='event'>");
                            ?> </div>
                        <div class="mb-3">
                            <input type="date" class="form-control" placeholder="Enter Faculty Name" name="date" required>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Time" name="time" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Class Number" name="cno" required>
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

        $even = $_POST["event"];
        $date = $_POST["date"];
        $tim = $_POST["time"];
        $cls = $_POST["cno"];
        $st = "new";

        $con = mysqli_connect("sql202.infinityfree.com", "if0_38391171", "3Q9LwyDLlg9ow45", "if0_38391171_events");
        if ($con) {
            $query = "INSERT INTO timetable (event, date, time, classno, status) VALUES ('$even', '$date', '$tim','$cls', '$st')";
            $execute = mysqli_query($con, $query);
            print("<script> alert('Time Table Add Successfully');</script>");
        }
    }
    ?>
</body>

</html>