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
    <div >
        <div >
            <h2>Payment history</h2>
            <div>
                <table>
                    <tr>
                        <th>Country</th>
                        <th>Promotional Code</th>
                        <th>Payment Profile</th>
                        <th>Payment Method</th>
                        <th>Payment Amount</th>
                    </tr>
                    <?php
                    require 'connect2.php';
                    $sql="SELECT country,promotional_code,payment_profile,payment_method,payment_amount FROM payment";
                    $result=$con->query($sql);
                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row["country"]."</td>";
                            echo "<td>".$row["promotional_code"]."</td>";
                            echo "<td>".$row["payment_profile"]."</td>";
                            echo "<td>".$row["payment_method"]."</td>";
                            echo "<td>".$row["payment_amount"]."</td>";
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
                <button><a href="update_payment.php">Update</a></button>
            </div>

            <div class="button-container">
                <button><a href="delete_payment_history.php">Delete</a></button>
            </div>
            <div class="button-container">
                <button><a href="payment.php">add</a></button>
            </div>
        </div>


</body>

</html> 
