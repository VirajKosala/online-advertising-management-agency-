<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminPanel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .button-container {
            margin-top: 20px;
        }

        .button-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button-container button:hover {
            background-color: #0056b3;
        }

        .button-container button a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="">
        <div class="">
            <h2>User Details</h2>
            <div class="">
                <table>
                    <tr>
                        <th>Full name</th>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Password</th>
                    </tr>
                    <?php
                    require 'config.php';
                    $sql="SELECT Full_name,User_name,Email,Contact_no,Password FROM user_details";
                    $result=$con->query($sql);
                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row["Full_name"]."</td>";
                            echo "<td>".$row["User_name"]."</td>";
                            echo "<td>".$row["Email"]."</td>";
                            echo "<td>".$row["Contact_no"]."</td>";
                            echo "<td>".$row["Password"]."</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No Result</td></tr>";
                    }
                    $con->close();
                    ?>
                </table>
            </div>

            <div class="button-container">
                <button><a href="regisUpdate.php">Update</a></button>
            </div>

            <div class="button-container">
                <button><a href="deleteReg.php">Delete</a></button>
            </div>
            <div class="button-container">
                <button><a href="index.php">add</a></button>
            </div>
        </div>


</body>

</html>
