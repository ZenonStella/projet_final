<?php
class Clients extends DataBase
{
    private int $_clients_id;
    private string $_clients_lastname;
    private string $_clients_firstname;
    private string $_clients_phonenumber;
    private string $_clients_address;
    private string $_clients_mail;

    public function getClientsId()
    {
        return $this->_clients_id;
    }
    public function setClientsId(int $id)
    {
        $this->_clients_id = $id;
    }
    public function getClientsLastname()
    {
        return $this->_clients_lastname;
    }
    public function setClientsLastname(string $lastname)
    {
        $this->_clients_lastname = $lastname;
    }
    public function getClientsFirstname()
    {
        return $this->_clients_firstname;
    }
    public function setClientsFirstname(string $firstname)
    {
        $this->_clients_firstname = $firstname;
    }
    public function getClientsPhoneNumber()
    {
        return $this->_clients_phonenumber;
    }
    public function setClientsPhoneNumber(string $phoneNumber)
    {
        $this->_clients_phonenumber = $phoneNumber;
    }
    public function getClientsAddress()
    {
        return $this->_clients_address;
    }
    public function setClientsAddress(string $address)
    {
        $this->_clients_address = $address;
    }
    public function getClientsMail()
    {
        return $this->_clients_mail;
    }
    public function setClientsMail(string $mail)
    {
        $this->_clients_mail = $mail;
    }

    // /**
    //  * Fonction permettant de savoir si un mail est present dans la table clients
    //  * 
    //  * @param string $mail : Mail à rechercher
    //  * 
    //  * @return bool
    //  */
    // public function checkIfclientsExists(string $mail): bool
    // {
    //     $pdo = parent::connectDb();
    //     $sql = "SELECT `clients_mail` FROM `clients` WHERE `clients_mail` = :mail";
    //     $query = $pdo->prepare($sql);
    //     $query->bindValue(':mail', $mail, PDO::PARAM_STR);
    //     $query->execute();
    //     $result = $query->fetchAll();

    //     if (count($result) == 0) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    /**
     * Permet de rajouter un clients dans la table clients
     * 
     * @param  string $lastname : Nom du clients
     * @param  string $firstname : Prenom duu clients
     * @param  string $phoneNumber : Numéro du clients
     * @param  string $mail : Mail du clients 
     * 
     * @return void 
     */
    public function addNewClients(string $lastname, string $firstname, string $phoneNumber, string $address, string $mail): void
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO `clients` (`clients_lastname`, `clients_firstname`, `clients_mail`, `clients_phonenumber`) VALUES (:lastname,:firstname,:mail,:phonenumber)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $query->bindValue(':phonenumber', $phoneNumber, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->execute();
    }
    public function getAllClients()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM `clients`";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getTenClients()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM clients LIMIT 10";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAOneClients(int $clients)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM clients 
        WHERE clients_id = $clients";
        $query = $pdo->query($sql);
        $result = $query->fetCh();
        return $result;
    }
    public function updateClients(int $clients,string $name,string $lastname,string $phoneNumber,string $mail, string $address)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE clients SET clients_lastname=:lastname, clients_firstname=:name, clients_mail=:mail, clients_phonenumber=:phonenumber, WHERE clients_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $query->bindValue(':phonenumber', $phoneNumber, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->bindValue(':id', $clients, PDO::PARAM_STR);
        $query->execute();
    }
    public function deleteClients(int $clients)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM clients WHERE clients_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $clients, PDO::PARAM_STR);
        $query->execute();
    }
}
