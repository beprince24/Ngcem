<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #f0f8ff;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: #005f73;
            color: white;
            padding: 20px 0;
        }

        header h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #ffba08;
        }

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

<header>
    <div class="container-fluid">
        <h1>Kaamadhenu Arts and Science College</h1>
    </div>
</header>

<body class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <h3>STUDENT REGISTRATION FORM</h3>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Register Number" name="id" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Name" name="nam" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">DOB</label>
                            <input type="date" class="form-control" name="age" required>
                        </div>
                        <div class="mb-3">
                            <select id="ho" class="form-select" name="gen" required>
                                <option selected disabled value="">SELECT YOUR GENDER</option>
                                <option value="male">MALE</option>
                                <option value="female">FEMALE</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mob" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Enter Email ID" name="mail" required>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Your College Name" name="clg" required>
                        </div>
                        <div class="mb-3">
                            <select id="hov" class="form-select" name="department" required>
                                <option selected disabled value="">Select Department</option>
                                <option value="B.Sc Computer Science">B.Sc Computer Science</option>
                                <option value="B.Sc Information Technology">B.Sc Information Technology</option>
                                <option value="B.Sc Mathematics">B.Sc Mathematics</option>
                                <option value="B.Sc Physics">B.Sc Physics</option>
                                <option value="BBA">BBA</option>
                                <option value="B.Com">B.Com</option>
                                <option value="B.Com Computer Applications">B.Com Computer Applications</option>
                                <option value="BA English">BA English</option>
                                <option value="BA Tamil">BA Tamil</option>
                                <option value="B.Sc Chemistry">B.Sc Chemistry</option>
                                <option value="B.Sc Biotechnology">B.Sc Biotechnology</option>
                                <option value="B.Sc Microbiology">B.Sc Microbiology</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select id="events" name="events" class="form-select" required>
                                <option selected disabled value="">Select Event</option>
                                <option value="paper_presentation">Paper Presentation</option>
                                <option value="quiz">Quiz</option>
                                <option value="coding">Coding</option>
                                <option value="poster_design">Poster Design</option>
                                <option value="debate">Debate</option>
                                <option value="robotics">Robotics</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Username" name="use" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Enter Password" name="pass" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" name="sub" class="btn btn-primary px-4">REGISTER</button>
                            <a href="index.php" class="btn btn-danger px-4">BACK</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["sub"])) {
        $Ip = $_POST["id"];
        $name = $_POST["nam"];
        $dob = $_POST["age"];
        $gender = $_POST["gen"];
        $mob = $_POST["mob"];
        $email = $_POST["mail"];
        $col = $_POST["clg"];
        $dep = $_POST["department"];
        $event = $_POST["events"];
        $use = $_POST["use"];
        $pass = $_POST["pass"];
        $st = "new";

        $con = mysqli_connect("sql202.infinityfree.com", "if0_38391171", "3Q9LwyDLlg9ow45", "if0_38391171_events");

        if ($con) {
            $q = "insert into students_info(name,rolno,dob,gender,mobile,email,department,event,username,password,status,college)values('$name','$Ip','$dob','$gender','$mob','$email','$dep','$event','$use','$pass','$st','$col')";
            $sq = mysqli_query($con, $q);
            print("<script> alert('Register Successful');
            location.href = 'index.php';</script>");
        }
    }
    ?>

</body>

</html>