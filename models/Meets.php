<?php
class Meets extends DataBase
{
    private int $_meets_id;
    private string $_meets_lastname;
    private string $_meets_date;
    private string $_meets_phonenumber;
    private string $_meets_clients;
    private string $_meets_users;

    public function getMeetsId()
    {
        return $this->_meets_id;
    }
    public function setMeetsId(int $id)
    {
        $this->_meets_id = $id;
    }
    public function getMeetsLastname()
    {
        return $this->_meets_lastname;
    }
    public function setMeetsLastname(string $lastname)
    {
        $this->_meets_lastname = $lastname;
    }
    public function getMeetDate()
    {
        return $this->_meets_date;
    }
    public function setMeetDate(string $date)
    {
        $this->_meets_date = $date;
    }
    public function getMeetsPhoneNumber()
    {
        return $this->_meets_phonenumber;
    }
    public function setMeetsPhoneNumber(string $hour)
    {
        $this->_meets_phonenumber = $hour;
    }
    public function getMeetsclients()
    {
        return $this->_meets_clients;
    }
    public function setMeetsclients(string $clients)
    {
        $this->_meets_clients = $clients;
    }
    public function getMeetsusers()
    {
        return $this->_meets_users;
    }
    public function setMeetsusers(string $users)
    {
        $this->_meets_users = $users;
    }
    // /**
    //  * Fonction permettant de savoir si un users est present dans la table meets
    //  * 
    //  * @param string $users : users à rechercher
    //  * 
    //  * @return bool
    //  */
    // public function checkIfmeetsExists(string $users): bool
    // {
    //     $pdo = parent::connectDb();
    //     $sql = "SELECT `meets_users` FROM `meets` WHERE `meets_users` = :users";
    //     $query = $pdo->prepare($sql);
    //     $query->bindValue(':users', $users, PDO::PARAM_STR);
    //     $query->execute();
    //     $result = $query->fetchAll();

    //     if (count($result) == 0) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    /**
     * Permet de rajouter un meets dans la table meets
     * 
     * @param  string $created_at : Nom du meets
     * @param  string $date : Prenom duu meets
     * @param  string $hour : Numéro du meets
     * @param  string $users : users du meets 
     * 
     * @return void 
     */
    public function addNewMeets(string $created_at, string $date, string $hour, string $clients, string $users): void
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO  meets (me_created_at, me_meet_date, me_meet_at, me_responce, u_id_users, c_id_clients) VALUES (:created_at,:date,:users,:hour, :users, :client)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':created_at', $created_at, PDO::PARAM_STR);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->bindValue(':hour', $hour, PDO::PARAM_STR);
        $query->bindValue(':users', $users, PDO::PARAM_STR);
        $query->bindValue(':client', $clients, PDO::PARAM_STR);
        $query->execute();
    }
    public function getAllMeets()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM `meets`";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAOneMeets(int $meets)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM meets 
        WHERE meets_id = $meets";
        $query = $pdo->query($sql);
        $result = $query->fetCh();
        return $result;
    }
    public function updateMeets(int $meets,string $hour,string $date)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE meets SET me_meet_date=:date, me_meet_at=:hour  WHERE meets_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':hour', $hour, PDO::PARAM_STR);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->bindValue(':id', $meets, PDO::PARAM_STR);
        $query->execute();
    }
    public function deletemeets(int $meets)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM meets WHERE meets_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $meets, PDO::PARAM_STR);
        $query->execute();
    }
}