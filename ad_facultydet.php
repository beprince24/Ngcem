<?php
include 'ad_das.php';
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

<div class="main">
    <center>
        <h1>FACULTY DETAILS</h1>
        <?php
        $con = mysqli_connect("sql202.infinityfree.com", "if0_38391171", "3Q9LwyDLlg9ow45", "if0_38391171_events");
        if ($con) {
            $q = "SELECT * FROM faculty_info";
            $sql = mysqli_query($con, $q);
            echo "<table>
                    <tr>
                        <th>Id</th>
                        <th>Faculty Id</th>
                        <th>Faculty Name</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Event</th>
                        <th>Username</th>
                        <th>Password</th> 
                    </tr>";
            while ($row = mysqli_fetch_row($sql)) {
                echo "<tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td>$row[5]</td>
                        <td>$row[6]</td>
                        <td>$row[7]</td>
                        <td>$row[8]</td>
                             
                    </tr>";
            }
            echo "</table>";
        }
        ?>
    </center>
</div>