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
        $sql = "SELECT `users_mail` FROM `users` WHERE `users_mail` = :mail";
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
        $sql = "SELECT * FROM users WHERE users_mail = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function addUsers(string $mail, string $password, int $role)
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO users (users_mail, users_password, role_id_role) VALUES (:mail,:password, :role)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':role', $role, PDO::PARAM_STR);
        $query->bindValue(':password', $password, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);

        $query->execute();
    }
    public function getAllUsers()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM users";
        $query = $pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
    public function getOneUsers(string $mail)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM users WHERE users_mail = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function updateUsers(string $mail)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE users SET users_mail=:mail, WHERE users_mail = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);

        $query->execute();
    }
    public function deleteUsers(int $doctor)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM users WHERE users_mail = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $doctor, PDO::PARAM_STR);
        $query->execute();
    }
}
