<?php
class Users extends DataBase
{
    private int $_users_id;
    private string $_users_mail;
    private string $_users_password;
    private int $_role_id_role;

    public function setUsersId(int $id)
    {
        $this->_users_id = $id;
    }
    public function getUsersId()
    {
        return $this->_users_id;
    }
    public function setUsersMail(string $mail)
    {
        $this->_users_mail = $mail;
    }
    public function getUsersMail()
    {
        return $this->_users_mail;
    }
    public function setUsersPassword(string $password)
    {
        $this->_users_mail = $password;
    }
    public function getUsersPassword()
    {
        return $this->_users_password;
    }
    public function setUsersRoleId(int $roleId)
    {
        $this->_role_id_role = $roleId;
    }
    public function getUsersRoleId()
    {
        return $this->_role_id_role;
    }
    /**
     * Fonction permettant de savoir si un mail est present dans la table users
     * 
     * @param string $mail : Mail à rechercher
     * 
     * @return bool
     */
    public function checkIfMailExists(string $mail): bool
    {
        $pdo = parent::connectDb();
        $sql = "SELECT u_email FROM users WHERE u_email = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();
        if (count($result) != 0) {
            return true;
        } else {
            return false;
        }
    }
    public function checkIfIdExists(string $id): bool
    {
        $pdo = parent::connectDb();
        $sql = "SELECT u_id FROM users WHERE u_id = :id";
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
     * Fonction permettant de récupérer les infos presentes dan sla table users selon le mail reseigné 
     *  
     * @param string $mail : le mail user
     * 
     * @return array : tableau contenant les ifos du Users
     */
    public function getInfoUsers(string $mail): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM users WHERE u_email = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function addUsers(string $lastname,string $firstname,string $mail, string $password, string $role)
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO users (u_lastname,u_firstname,u_email, u_password, u_role) VALUES (:lastname,:firstname,:mail,:password, :role)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':role', $role, PDO::PARAM_STR);
        $query->bindValue(':password', $password, PDO::PARAM_STR);
        $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);

        $query->execute();
    }
    public function getAllUsers()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM users WHERE u_soft_delete = 0";
        $query = $pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
    public function getAllUsersDelete()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM users WHERE u_soft_delete = 1";
        $query = $pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
    public function getOneUsers(string $mail)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM users WHERE u_email = :mail AND u_soft_delete = 0";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getOneUsersById(string $id)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM users WHERE u_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getOneUsersByRole(string $role)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM users WHERE u_role = :role AND u_soft_delete = 0";
        $query = $pdo->prepare($sql);
        $query->bindValue(':role', $role, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }
    public function updateUsers(string $lastname,string $firstname,string $mail)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE users SET u_lastname=:lastname,u_firstname=:firstname,u_email=:mail WHERE u_email = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $query->execute();
    }
    public function updatePasswordUser(string $mail ,string $password)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE users SET u_password=:password WHERE u_email = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->bindValue(':password', $password, PDO::PARAM_STR);

        $query->execute();
    }
    public function softDeleteUsers(int $user)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE users SET u_soft_delete=:soft WHERE u_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $user, PDO::PARAM_STR);
        $query->bindValue(':soft', 1, PDO::PARAM_STR);

        $query->execute();
    }
    public function deleteUsers(int $user)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM users WHERE u_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $user, PDO::PARAM_STR);
        $query->execute();
    }
}
