<?php
include '../config.php';
include '../model/employe.php';
class EmployeC
{
    public function listEmploye()
    {
        $sql="SELECT * FROM employe";
        $db= config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }

    }
    function deleteEmploye($id)
    {
        $sql="DELETE FROM employe WHERE id = :id";
        $db= config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id', $id);

        try{
            $req->execute();
        }catch(Exception $e){
            die('Erroe:' . $e->getMessage());
        }
    }

    public function addEmploye($LastName, $FirstName, $Email, $dOB)
{
    $sql = "INSERT INTO employe (id,LastName, FirstName, Email, dOB) VALUES (NULL,:LastName, :FirstName, :Email, :dOB)";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'Lastname' => $LastName,
            'Firstname' => $FirstName,
            'Email' => $Email,
            'dOB' => $dOB
        ]);
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
}
?>