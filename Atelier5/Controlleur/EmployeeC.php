
<?php
require '../Config.php';
class EmployeC
 {
    public function showEmploye($employe) {
        
        echo '<table border=1 width="100">
        <tr   align="center">
              <td>Last Name</td>
              <td>First Name</td>
              <td>Password</td>
              <td>Phone</td>
             <td>Email</td>
             <td>Date of birth</td>
        </tr>
        <tr>
              <td>'  .$employe->getLastName() . ' </td>
              <td>' . $employe->getFirstName() . ' </td>
              <td>' . $employe->getPassword() .' </td>
              <td>' . $employe->getPhone() .' </td>
              <td>' . $employe->getEmail() . ' </td>
              <td>' . $employe->getDate() . ' </td>
        </tr>
    </table>';
    }

    public function listEmployes()
    {
        $sql = "SELECT * FROM employe";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    /*public function deleteEmployes()
    {
        $sql = "DELETE FROM personne WHERE ID = :ID";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql) ;
            $query-> bindParam(1, $id, PDO:: PARAM_INT);
            $query->execute();
            $rowCount = $query->rowCount ();

        if (§rowCount > 0)
        {
            echo "Delete successful. $rowCount rows affected.";
        }
        else {
            echo "No rows deleted.";
        }
        }catch (Exception $e)
             {
                die('Error:'.$e->getMessage());
             }
    }*/
    public function deleteEmploye($id)
    {
        $sql="DELETE FROM employe WHERE ID = :ID";
        $db= config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':ID', $id);

        try{
            $req->execute();
        }catch(Exception $e){
            die('Error:' . $e->getMessage());
        }
    }
}


?>