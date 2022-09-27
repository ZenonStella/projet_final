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
    public function addNewEstimations(string $name, string $categorys): void
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO type_of_postes(tp_name, c_id_categorys_postes) VALUES (:name, :categorys)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':categorys', $categorys, PDO::PARAM_STR);
        $query->execute();
    }
    public function getAllEstimations()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM estimations INNER JOIN
        clients ON estimations.c_id_clients = clients.c_id";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getEstimationsByClients($client)
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT jobs.p_id,jobs.p_quantity, jobs.p_propriety,jobs.p_unite,type_of_postes.tp_name AS p_name,categorys_postes.c_name,estimations.e_zip,estimations.e_city,DATE_FORMAT(estimations.e_created_at,"%d/%m/%Y") AS e_created_at ,estimations.e_responce, meets.me_id,DATE_FORMAT(meets.me_created_at,"%d/%m/%Y") AS me_created_at ,DATE_FORMAT(meets.me_meet_date,"%d/%m/%Y") AS me_meet_date,TIME_FORMAT(meets.me_meet_at,"%Hh%i") AS me_meet_at,meets.me_responce FROM jobs_to_do_estimations 
        INNER JOIN jobs on jobs.p_id = jobs_to_do_estimations.p_id_jobs
        INNER JOIN type_of_postes ON type_of_postes.tp_id = jobs.tp_id_type_of_postes
        INNER JOIN categorys_postes ON categorys_postes.c_id = type_of_postes.c_id_categorys_postes
        INNER JOIN estimations on estimations.e_id
        INNER JOIN estimations_need_meets ON estimations_need_meets.e_id_estimations = estimations.e_id
        INNER JOIN meets ON meets.me_id = estimations_need_meets.me_id_meets
        WHERE estimations.c_id_clients = :id';
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $client, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    public function getAllEstimationsDelete()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM estimations INNER JOIN
        clients ON estimations.c_id_clients = clients.c_id WHERE e_responce = 1";
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
    public function deleteEstimations(int $Estimations)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM type_of_postes WHERE Estimations_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $Estimations, PDO::PARAM_STR);
        $query->execute();
    }
}