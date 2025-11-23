<?php
include 'faculty_das.php';
?>

<style>
    .main {
        padding: 20px;
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    h1 {
        color: #005f73;
        font-weight: bold;
    }

    table {
        width: 90%;
        border-collapse: collapse;
        margin-top: 20px;
        background: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    th,
    td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #ffba08;
        color: #000;
        font-size: 16px;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #e1f5fe;
    }
</style>
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

<div class="main">
    <center>
        <h1>New Students Details</h1>
        <?php
        $con = mysqli_connect("sql202.infinityfree.com", "if0_38391171", "3Q9LwyDLlg9ow45", "if0_38391171_events");
        if ($con) {
            $q = "SELECT * FROM students_info where status='new' and event='$eve'";
            $sql = mysqli_query($con, $q);
            echo "<table><form method='post'>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Roll Number</th>
                        <th>College</th>
                        <th>Dob</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Event</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th></th>
                        <th></th> 
                    </tr>";
            while ($row = mysqli_fetch_row($sql)) {
                echo "<tr>
                        <input type='hidden' value='$row[0]' class='bg-success' name='id'style='border:none;width:7px; background-color:pink;'>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[12]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td>$row[5]</td>
                        <td>$row[6]</td>
                        <td>$row[7]</td>
                        <td>$row[8]</td>
                        <td>$row[9]</td>
                        <td>$row[10]</td>
                        <td><input type='submit' value='Approve' name='app' class='btn btn-success'></td>
                        <td><input type='submit' value='Reject' name='reg' class='btn btn-danger'></td>         
                    </tr></form>";
            }
            echo "</table>";
        }

        if (isset($_POST["app"])) {
            $ID = $_POST["id"];
            $con = mysqli_connect("sql202.infinityfree.com", "if0_38391171", "3Q9LwyDLlg9ow45", "if0_38391171_events");
            if ($con) {
                $q = "update students_info set status='approve' where id='$ID'";
                $sql = mysqli_query($con, $q);
            }
        }

        if (isset($_POST["reg"])) {
            $ID = $_POST["id"];
            $con = mysqli_connect("sql202.infinityfree.com", "if0_38391171", "3Q9LwyDLlg9ow45", "if0_38391171_events");
            if ($con) {
                $qi = "update students_info set status='Reject' where id='$ID'";
                $sql = mysqli_query($con, $qi);
            }
        }
        ?>
    </center>
</div>