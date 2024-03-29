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

    /**
     * Fonction permettant de savoir si un client est present dans la table clients
     * 
     * @param string $mail : Mail à rechercher
     * 
     * @return bool
     */
    public function checkIfClientsExists(string $mail): bool
    {
        $pdo = parent::connectDb();
        $sql = "SELECT c_mail FROM clients WHERE c_mail = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();

        if (count($result) == 1) {
            return true;
        } else {
            return false;
        }
    }    
    public function checkIfClientsExistsById(string $id): bool
    {
        $pdo = parent::connectDb();
        $sql = "SELECT c_id FROM clients WHERE c_id = :id";
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
     * Permet de rajouter un clients dans la table clients
     * 
     * @param  string $lastname : Nom du clients
     * @param  string $firstname : Prenom duu clients
     * @param  string $phoneNumber : Numéro du clients
     * @param  string $mail : Mail du clients 
     * 
     * @return void 
     */
    public function addNewClients(string $lastname, string $firstname, string $mail): void
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO clients (c_lastname, c_firstname, c_mail) VALUES (:lastname,:firstname,:mail)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->execute();
    }
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
    public function addNewClientsWithPhone(string $lastname, string $firstname, string $phoneNumber, string $mail): void
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO clients (c_lastname, c_firstname, c_mail, c_phone) VALUES (:lastname,:firstname,:mail,:phonenumber)";
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
        $sql = "SELECT * FROM clients WHERE c_soft_delete = 0";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAllClientsDelete()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM clients WHERE c_soft_delete = 1";
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
    public function getOneClientByMail(string $mail)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM clients 
        WHERE c_mail = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetCh();
        return $result;
    }
    public function getAOneClients(int $clients)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM clients 
        WHERE c_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $clients, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetCh();
        return $result;
    }
    public function updateClients(int $clients,string $name,string $lastname,string $phoneNumber,string $mail, string $address)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE clients SET c_lastname=:lastname, c_firstname=:name, c_mail=:mail, c_phone=:phonenumber WHERE c_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $query->bindValue(':phonenumber', $phoneNumber, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->bindValue(':id', $clients, PDO::PARAM_STR);
        $query->execute();
    }
    public function unarchiveClients(int $client)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE clients SET c_soft_delete=:soft WHERE c_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $client, PDO::PARAM_STR);
        $query->bindValue(':soft', 0, PDO::PARAM_STR);
        $query->execute();
    }
    public function deleteClients(int $clients)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM clients WHERE c_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $clients, PDO::PARAM_STR);
        $query->execute();
    }
    public function softDeleteClients(int $clients)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE clients SET  c_soft_delete= 1 WHERE c_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $clients, PDO::PARAM_STR);
        $query->execute();
    }
}
