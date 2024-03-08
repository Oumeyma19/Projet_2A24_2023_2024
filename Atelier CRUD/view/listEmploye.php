<?php
include '../controller/employeC.php';
$employeC=new EmployeC();
$list=$employeC->listEmploye();
?>
<html>
    <body>
    <a href="addEmploye.php" >addEmploye </a>
        <h1>List of Employes </h1>
        <table border="1" width="100%">
            <tr>
                <th>id</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Date Of Birth</th>
                <th>Delete</th>
            </tr>

            <?php
            foreach($list as $employe)
            {
            ?>
            <tr>
                <td><?= $employe['ID'];?></td>
                <td><?= $employe['LastName'];?></td>
                <td><?= $employe['FirstName'];?></td>
                <td><?= $employe['Phone'];?></td>
                <td><?= $employe['Email'];?></td>
                <td><?= $employe['dOB'];?></td>
                <td><a href="deleteEmploye.php?id=<?= $employe['ID'];?>">Delete</td>
            </tr>
            <?php
            }
            ?>

        </table>
    </body>
</html>
