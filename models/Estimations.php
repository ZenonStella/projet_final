<?php
class Estimations extends DataBase
{


    /**
     * Permet de rajouter un Estimations dans la table Estimations
     * 
     * @param  string $created_at : Nom du Estimations
     * @param  string $posted_at : Prenom duu Estimations
     * @param  string $edit : Numéro du Estimations
     * @param  string $preveiw : preveiw du Estimations 
     * 
     * @return void 
     */
    public function addNewEstimations(string $zip, string $city, string $date, int $client)
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO estimations(e_zip, e_city, e_created_at,c_id_clients) 
        VALUES (:zip,:city,:date,:client)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':zip', $zip, PDO::PARAM_STR);
        $query->bindValue(':city', $city, PDO::PARAM_STR);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->bindValue(':client', $client, PDO::PARAM_STR);
        $query->execute();

        return $pdo->lastInsertId();
    }
    public function addNewMission(int $quantity, string $propriety, string $unite, int $tp_id, $idDevis)
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO jobs(p_quantity, p_propriety, p_unite,e_id_estimation, tp_id_type_of_postes) 
        VALUES (:quantity,:propriety,:unite,:e_id,:tp_id)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':quantity', $quantity, PDO::PARAM_STR);
        $query->bindValue(':propriety', $propriety, PDO::PARAM_STR);
        $query->bindValue(':unite', $unite, PDO::PARAM_STR);
        $query->bindValue(':tp_id', $tp_id, PDO::PARAM_STR);
        $query->bindValue(':e_id', $idDevis, PDO::PARAM_STR);
        $query->execute();
    }
    public function getAllEstimations()
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT *,DATE_FORMAT(e_created_at,"%d/%m/%Y") AS e_created_at FROM estimations INNER JOIN
        clients ON estimations.c_id_clients = clients.c_id ORDER BY e_created_at';
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAllEstimationsByClients()
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT clients.c_lastname, clients.c_firstname, clients.c_mail, clients.c_phone, estimations.e_zip, estimations.e_city, DATE_FORMAT(estimations.e_created_at,"%d/%m/%Y") AS e_created_at, estimations.e_responce FROM estimations INNER JOIN clients ON estimations.c_id_clients = clients.c_id WHERE clients.c_id = 6';
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getOneEstimation($estimations)
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT estimations.e_id, clients.c_lastname, clients.c_firstname, clients.c_mail, clients.c_phone, estimations.e_zip, estimations.e_city, DATE_FORMAT(estimations.e_created_at,"%d/%m/%Y") AS e_created_at, estimations.e_responce FROM estimations INNER JOIN clients ON estimations.c_id_clients = clients.c_id WHERE estimations.e_id = :id';
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $estimations, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }
    public function getMissionsOfOneEstimationByClients($estimations)
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT jobs.p_id, categorys_postes.c_name, type_of_postes.tp_name, jobs.p_quantity, jobs.p_unite, jobs.p_propriety FROM jobs
        INNER JOIN type_of_postes ON jobs.tp_id_type_of_postes = type_of_postes.tp_id
        INNER JOIN categorys_postes ON categorys_postes.c_id = type_of_postes.c_id_categorys_postes
        WHERE jobs.e_id_estimation = :id';
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $estimations, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    public function getAllEstimationsDelete()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM estimations INNER JOIN
        clients ON estimations.c_id_clients = clients.c_id WHERE e_soft_delete = 1";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAllCategorysEstimations()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM categorys_postes";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAllEstimationsById(int $Estimations)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM type_of_postes
        WHERE c_id_categorys_postes = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $Estimations, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetChAll();
        return $result;
    }
    public function getAOneEstimations(int $Estimations)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM type_of_postes 
        WHERE c_id_categorys_postes = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $Estimations, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }
    public function updateEstimations(int $Estimations, string $name, string $categorys, string $preveiw, string $text, string $img)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE type_of_postes SET tp_name=:name, c_id_categorys_postes=:categorys";
        $query = $pdo->prepare($sql);
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':categorys', $categorys, PDO::PARAM_STR);
        $query->bindValue(':id', $Estimations, PDO::PARAM_STR);
        $query->execute();
    }
    public function unResponceEstimations(int $devis)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE estimations SET e_responce = 0 WHERE e_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $devis, PDO::PARAM_STR);
        $query->execute();
    }
    public function responceEstimations(int $devis)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE estimations SET e_responce = 1 WHERE e_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $devis, PDO::PARAM_STR);
        $query->execute();
    }
    public function unarchiveEstimations(int $devis)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE estimations SET e_soft_delete = 0 WHERE e_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $devis, PDO::PARAM_STR);
        $query->execute();
    }
    public function softDeleteEstimations(int $devis)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE estimations SET e_soft_delete = 1 WHERE e_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $devis, PDO::PARAM_STR);
        $query->execute();
    }
    public function deleteEstimations(int $Estimations)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM estimations WHERE e_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $Estimations, PDO::PARAM_STR);
        $query->execute();
    }
}
