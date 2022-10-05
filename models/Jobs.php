<?php
class Jobs extends DataBase
{
    private int $_jobs_id;
    private string $_jobs_name;
    private string $_jobs_caregorys_postes;

    public function get_jobs_id()
    {
        return $this->_jobs_id;
    }
    public function set_jobs_id($_jobs_id)
    {
        $this->_jobs_id = $_jobs_id;
        return $this;
    }
    public function get_jobs_name()
    {
        return $this->_jobs_name;
    }
    public function set_jobs_name($_jobs_name)
    {
        $this->_jobs_name = $_jobs_name;
        return $this;
    }
    public function get_jobs_caregorys_postes()
    {
        return $this->_jobs_caregorys_postes;
    }
    public function set_jobs_caregorys_postes($_jobs_caregorys_postes)
    {
        $this->_jobs_caregorys_postes = $_jobs_caregorys_postes;
        return $this;
    }
    /**
     * Permet de rajouter un jobs dans la table jobs
     * 
     * @param  string $created_at : Nom du jobs
     * @param  string $posted_at : Prenom duu jobs
     * @param  string $edit : Numéro du jobs
     * @param  string $preveiw : preveiw du jobs 
     * 
     * @return void 
     */
    public function addNewjobs(string $name, string $categorys): void
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO type_of_postes(tp_name, c_id_categorys_postes) VALUES (:name, :categorys)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':categorys', $categorys, PDO::PARAM_STR);
        $query->execute();
    }
    public function getAlljobs()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM type_of_postes";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAllCategorysJobs()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM categorys_postes";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAlljobsById(string $jobs)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM type_of_postes INNER JOIN categorys_postes ON categorys_postes.c_id = type_of_postes.c_id_categorys_postes WHERE categorys_postes.c_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $jobs, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetChAll();
        return $result;
    }
    public function getAOnejobs(int $jobs)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM type_of_postes 
        WHERE tp_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $jobs, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }
    public function updatejobs(int $jobs, string $name, string $categorys, string $preveiw, string $text, string $img)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE type_of_postes SET tp_name=:name, c_id_categorys_postes=:categorys";
        $query = $pdo->prepare($sql);
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':categorys', $categorys, PDO::PARAM_STR);
        $query->bindValue(':id', $jobs, PDO::PARAM_STR);
        $query->execute();
    }
    public function deletejobs(int $jobs)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM type_of_postes WHERE jobs_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $jobs, PDO::PARAM_STR);
        $query->execute();
    }
}