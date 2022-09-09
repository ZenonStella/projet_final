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
        $sql = "SELECT * FROM type_of_postes";
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