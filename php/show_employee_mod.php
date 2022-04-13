

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table{
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table, tr, th, td{
        border:1px solid black;
    }

    th, td{
        padding: 10px 20px;
    }
</style>


<body>
    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>First Name</th>
                <th>M.I</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Stats</th>
                <th>Date Hired</th>
            </tr>
        </thead>

        <tbody> 
            <?php
                $sql = "SELECT * FROM add_employee WHERE isActive = 1;";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();

                if($stmt->rowCount() > 0){
                    while($row = $stmt->fetch()){
            ?>
            <tr>
                <td><?php echo $row['userID']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['mname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['address']; ?></td>
            </tr>
            <?php }} ?>
        </tbody>
    </table>
</body>
</html>

