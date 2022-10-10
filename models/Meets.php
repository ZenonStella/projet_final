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
    public function getMeetsClients()
    {
        return $this->_meets_clients;
    }
    public function setMeetsClients(string $clients)
    {
        $this->_meets_clients = $clients;
    }
    public function getMeetsUsers()
    {
        return $this->_meets_users;
    }
    public function setMeetsUsers(string $users)
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
    public function checkIfmeetsExists(string $id): bool
    {
        $pdo = parent::connectDb();
        $sql = "SELECT me_id FROM meets WHERE me_id = :id";
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
     * Permet de rajouter un meets dans la table meets
     * 
     * @param  string $created_at : Nom du meets
     * @param  string $date : Prenom duu meets
     * @param  string $hour : Numéro du meets
     * @param  string $users : users du meets 
     * 
     * @return void 
     */
    public function addNewMeets(string $created_at, string $date, string $hour, string $clients, string $users, string $zip, string $city): void
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO  meets (me_created_at, me_meet_date, me_meet_at,me_zip, u_id_users, c_id_clients) VALUES (:created_at,:date,:hour,:zip,:city :users, :client)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':created_at', $created_at, PDO::PARAM_STR);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->bindValue(':hour', $hour, PDO::PARAM_STR);
        $query->bindValue(':users', $users, PDO::PARAM_STR);
        $query->bindValue(':zip', $zip, PDO::PARAM_STR);
        $query->bindValue(':city', $city, PDO::PARAM_STR);
        $query->bindValue(':client', $clients, PDO::PARAM_STR);
        $query->execute();
    }
    public function getAllMeets()
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT *,DATE_FORMAT(me_meet_date,"%d/%m/%Y") AS me_meet_date,TIME_FORMAT(me_meet_at,"%Hh%i") AS me_meet_at FROM meets INNER JOIN clients ON meets.c_id_clients = clients.c_id WHERE me_soft_delete = 0';
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getTenMeets()
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT *,DATE_FORMAT(me_meet_date,"%d/%m/%Y") AS me_meet_date,TIME_FORMAT(me_meet_at,"%Hh%i") AS me_meet_at FROM meets INNER JOIN clients ON meets.c_id_clients = clients.c_id WHERE me_soft_delete = 0 LIMIT 10';
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAllMeetsDelete()
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT *,DATE_FORMAT(me_created_at,"%d/%m/%Y") AS me_created_at,DATE_FORMAT(me_meet_date,"%d/%m/%Y") AS me_meet_date,TIME_FORMAT(me_meet_at,"%Hh%i") AS me_meet_at FROM meets INNER JOIN clients ON meets.c_id_clients = clients.c_id WHERE me_soft_delete = 1';
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAllMeetsByYearAndMonth($year, $month)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM meets WHERE me_meet_date = LIKE '%:month:year%'";
        $query = $pdo->prepare($sql);
        $query->bindValue(':year', $year, PDO::PARAM_STR);
        $query->bindValue(':month', $month, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetChAll();
        return $result;
    }
    public function getAllMeetsByClients($client)
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT me_id, DATE_FORMAT(meets.me_created_at, "%d/%m/%Y") as me_created_at, DATE_FORMAT(meets.me_meet_date, "%d/%m/%Y") as me_meet_date, TIME_FORMAT(meets.me_meet_at,"%Hh%i") AS me_meet_at, me_responce FROM meets 
        INNER JOIN clients ON clients.c_id = meets.c_id_clients WHERE clients.c_id = :id';
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $client, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    public function getAOneMeets(int $meets)
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT *, DATE_FORMAT(meets.me_created_at, "%d/%m/%Y") as me_created_at, DATE_FORMAT(meets.me_meet_date, "%d/%m/%Y") as me_meet_date, TIME_FORMAT(meets.me_meet_at,"%Hh%i") AS me_meet_at FROM meets 
        INNER JOIN clients ON clients.c_id = meets.c_id_clients WHERE meets.me_id = :id';
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $meets, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }
    public function getOneMeetsByDate(int $meets)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM meets 
        WHERE me_meets_date = $meets";
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
    public function unResponceMeets(int $meet)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE meets SET me_responce = 0 WHERE me_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $meet, PDO::PARAM_STR);
        $query->execute();
    }
    public function responceMeets(int $meet)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE meets SET me_responce = 1 WHERE me_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $meet, PDO::PARAM_STR);
        $query->execute();
    }
    public function unarchiveMeets(int $meet)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE meets SET me_soft_delete = 0 WHERE me_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $meet, PDO::PARAM_STR);
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
    public function deleteMeets(int $meets)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM meets WHERE meets_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $meets, PDO::PARAM_STR);
        $query->execute();
    }
}
