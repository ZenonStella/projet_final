<?php
class Missives extends DataBase
{
    private int $_missives_id;
    private string $_missives_missive;
    private string $_missives_firstname;
    private string $_missives_phonenumber;
    private string $_missives_address;
    private string $_missives_mail;

    public function getMissivesId()
    {
        return $this->_missives_id;
    }
    public function setMissivesId(int $id)
    {
        $this->_missives_id = $id;
    }
    public function getMissivesmissive()
    {
        return $this->_missives_missive;
    }
    public function setMissivesmissive(string $missive)
    {
        $this->_missives_missive = $missive;
    }
    public function getMissivesFirstname()
    {
        return $this->_missives_firstname;
    }
    public function setMissivesFirstname(string $firstname)
    {
        $this->_missives_firstname = $firstname;
    }
    public function getMissivesPhoneNumber()
    {
        return $this->_missives_phonenumber;
    }
    public function setMissivesPhoneNumber(string $phoneNumber)
    {
        $this->_missives_phonenumber = $phoneNumber;
    }
    public function getMissivesAddress()
    {
        return $this->_missives_address;
    }
    public function setMissivesAddress(string $address)
    {
        $this->_missives_address = $address;
    }
    public function getMissivesMail()
    {
        return $this->_missives_mail;
    }
    public function setMissivesMail(string $mail)
    {
        $this->_missives_mail = $mail;
    }
    // /**
    //  * Fonction permettant de savoir si un mail est present dans la table missives
    //  * 
    //  * @param string $mail : Mail à rechercher
    //  * 
    //  * @return bool
    //  */
    public function checkIfmissivesExists(int $id): bool
    {
        $pdo = parent::connectDb();
        $sql = "SELECT mi_id FROM missives WHERE mi_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();

        if (count($result) == 1) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * Permet de rajouter un missives dans la table missives
     * 
     * @param  string $missive : Nom du missives
     * @param : Prenom duu missives
     * @param  string $created_at : Numéro du missives
     * @param  string $client : client du missives 
     * 
     * @return void 
     */
    public function addNewMissives(string $missive, string $created_at, int $client): void
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO missives (mi_missive, mi_created_at, c_id_clients) VALUES (:missive,:created, :client)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':missive', $missive, PDO::PARAM_STR);
        $query->bindValue(':created', $created_at, PDO::PARAM_STR);
        $query->bindValue(':client', $client, PDO::PARAM_STR);
        $query->execute();
    }
    public function getAllMissives()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM missives
        INNER JOIN clients ON missives.c_id_clients = clients.c_id";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAllMissivesDelete()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM missives
        INNER JOIN clients ON missives.c_id_clients = clients.c_id WHERE mi_responce = 1";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getTenMissives()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM missives
        INNER JOIN clients ON missives.c_id_clients = clients.c_id LIMIT 10";
        $query = $pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
    public function getMissivesByClients($idClient)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT mi_id,mi_missive,mi_created_at,mi_responce FROM missives INNER JOIN clients ON missives.c_id_clients = clients.c_id WHERE c_id_clients = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $idClient, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    public function getAOneMissives(int $missives)
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT *,DATE_FORMAT(mi_created_at, "%d/%m/%Y") AS mi_created_at FROM missives INNER JOIN clients ON missives.c_id_clients = clients.c_id WHERE mi_id = :id';
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $missives, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }
    public function updateMissives(int $missives,string $name,string $missive,string $phoneNumber,string $mail, string $address)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE missives SET mi_missive=:missive WHERE missives_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':missive', $missive, PDO::PARAM_STR);
        $query->bindValue(':id', $missives, PDO::PARAM_STR);
        $query->execute();
    }    
    public function softDeleteMeets(int $meet)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE meets SET me_soft_delete = 1 WHERE me_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $meet, PDO::PARAM_STR);
        $query->execute();
    }
    public function deleteMissives(int $missives)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM missives WHERE missives_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $missives, PDO::PARAM_STR);
        $query->execute();
    }
}