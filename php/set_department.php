<?php
    require_once("payrollClass.php");
    $pdo = $classPayroll->openConnection();



            if(isset($_POST['search_e']))
            {

                $search_e_id = $_POST["search_E_ID"];

                $sql_search = "SELECT * FROM `add_employee` WHERE `employee_id` = ?";
                $stmt = $pdo->prepare($sql_search);
                $stmt->execute([$search_e_id]);

                if($stmt->rowCount() > 0)
                {
                    while($row = $stmt->fetch()){

                    $E_ID = $row['employee_id'];
                    $fname = $row['first_name'];
                    $mi = $row['middle_in'];
                    $lname = $row['last_name'];
                    $age = $row['age'];
                    $email = $row['email'];
                    $contact = $row['contact'];
                    $stats = $row['stats'];
                    $date = $row['date_hired'];

                    }

                }else{
                    $E_ID = "";
                    $fname = "";
                    $mi = "";
                    $lname = "";
                    $age = "";
                    $email = "";
                    $contact = "";
                    $stats = "";
                    $date = "";

                    header("Location: add_employee.php");
                }
            
            }else{
                $E_ID = "";
                    $fname = "";
                    $mi = "";
                    $lname = "";
                    $age = "";
                    $email = "";
                    $contact = "";
                    $stats = "";
                    $date = "";
            }

            


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addEmployee / Hr_Payroll</title>
</head>

<style>
    body {
        background-color: #6C6169;
    }

    form {
        text-align: center;
        margin-top: 5px;       
    }

    label, input , textarea{
        margin-top: 10px;
    }

    button {
        margin-top: 8px;
    }
</style>

<body>

    <form action="search_employee.php" method="post">
    <div>
            <label>Search For Employee E_ID:</label>
            <input type="number" name="search_E_ID" id="search_E_ID" >
            <button type="submit" name="search_e" id="search_e">-></button>
    </div>
    </form>


    <form action="" method="post">
        <div>
            <label>E_ID:</label>
            <input type="number" name="E_ID" id="E_ID" value="<?php echo "$E_ID" ;?>" required><br>

            <label>First Name:</label>
            <input type="text" name="fname" id="fname" value="<?php echo "$fname" ;?>" required><br>
        
            <label>M.I:</label>
            <input type="text" name="mi" id="mi" value="<?php echo "$mi" ;?>" required><br>

            <label>Last Name:</label>
            <input type="text" name="lname" id="lname" value="<?php echo "$lname" ;?>" required><br>

            <label>Age:</label>
            <input type="number" name="age" id="age" value="<?php echo "$age" ;?>" required><br>

            <label>Email:</label>
            <input type="email" name="email" id="email" value="<?php echo "$email" ;?>" required><br>

            <label>Contact:</label>
            <input type="number" name="contact" id="contact" value="<?php echo "$contact" ;?>" required><br>

            <label>Employee Stats:</label>
            <input type="text" name="stats" id="stats" value="<?php echo "$stats" ;?>" required><br>

            <label>Date Hired:</label>
            <input type="date" name="date" id="date" value="<?php echo "$date" ;?>" required><br>
        </div>       

        <div>
            <button disabled="disabled">Save</button>
            <!-- <button type="submit" name="addEmployee">Save</button> -->
            <button type="submit" name="editEmployee">Update</button>
            <button type="submit" name="deleteEmployee">Delete</button>
        </div>
    </form>


    
</body>


</html>