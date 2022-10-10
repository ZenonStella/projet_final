<?php
class Articles extends DataBase
{
    private int $_articles_id;
    private string $_articles_created_at;
    private string $_articles_posted_at;
    private string $_articles_edit_at;
    private string $_articles_titles;
    private string $_articles_preveiw;
    private string $_articles_text;
    private string $_articles_img;
    private string $_articles_users;

    public function getArticlesId()
    {
        return $this->_articles_id;
    }
    public function setArticlesId(int $id)
    {
        $this->_articles_id = $id;
    }
    public function getArticlescreated_at()
    {
        return $this->_articles_created_at;
    }
    public function setArticlescreated_at(string $created_at)
    {
        $this->_articles_created_at = $created_at;
    }
    public function getArticlesposted_at()
    {
        return $this->_articles_posted_at;
    }
    public function setArticlesposted_at(string $posted_at)
    {
        $this->_articles_posted_at = $posted_at;
    }
    public function getArticlesedit_at()
    {
        return $this->_articles_edit_at;
    }
    public function setArticlesedit_at(string $edit)
    {
        $this->_articles_edit_at = $edit;
    }
    public function getArticlestitles()
    {
        return $this->_articles_titles;
    }
    public function setArticlestitles(string $titles)
    {
        $this->_articles_titles = $titles;
    }
    public function getArticlespreveiw()
    {
        return $this->_articles_preveiw;
    }
    public function setArticlespreveiw(string $preveiw)
    {
        $this->_articles_preveiw = $preveiw;
    }
    public function get_articles_text()
    {
        return $this->_articles_text;
    }
    public function set_articles_text($_articles_text)
    {
        $this->_articles_text = $_articles_text;
        return $this;
    }
    public function get_articles_img()
    {
        return $this->_articles_img;
    }
    public function set_articles_img($_articles_img)
    {
        $this->_articles_img = $_articles_img;
        return $this;
    }
    public function get_articles_users()
    {
        return $this->_articles_users;
    }
    public function set_articles_users($_articles_users)
    {
        $this->_articles_users = $_articles_users;
        return $this;
    }
    /**
     * Permet de rajouter un articles dans la table articles
     * 
     * @param  string $created_at : Nom du articles
     * @param  string $posted_at : Prenom duu articles
     * @param  string $edit : Numéro du articles
     * @param  string $preveiw : preveiw du articles 
     * 
     * @return void 
     */
    public function addNewArticles(string $created_at, string $text, string $preveiw, string $img,string $imgName, string $title, int $user): void
    {
        // INSERT INTO articles(a_created_at, a_titles, a_preveiw, a_text, a_img, a_img_name, u_id_users) VALUES ('2022:09:26','tcfuygi_uàç','fhueijofjiohusude','ufegspfuigmshmqhdfmihmqhfvjdbhv bfuidhidxuihrdfsxcovihv fdhbfzemdfhcv vdfuicvhfbze sd cxifve zbdfxuhvf zsdfx chljfbdx cb ld wfxcjh','sdh:kjcxh!lsdwkbf:kvbs<!wjgvk:fhwcxbjnfjbb','fknfbdjxihnsdjmchùqrgzrbjfhd',1)
        $pdo = parent::connectDb();
        $sql = "INSERT INTO  articles (a_created_at, a_titles, a_preveiw, a_text, a_img, a_img_name, u_id_users) VALUES (:created_at,:title, :preveiw, :text, :img, :nameImg, :user)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':created_at', $created_at, PDO::PARAM_STR);
        $query->bindValue(':preveiw', $preveiw, PDO::PARAM_STR);
        $query->bindValue(':img', $img, PDO::PARAM_STR);
        $query->bindValue(':nameImg', $imgName, PDO::PARAM_STR);
        $query->bindValue(':user', $user, PDO::PARAM_STR);
        $query->bindValue(':text', $text, PDO::PARAM_STR);
        $query->bindValue(':title', $title, PDO::PARAM_STR);
        $query->execute();
    }
    public function getAllArticles()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM articles WHERE a_soft_delete = 0";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }    
    public function getAllArticlesPosted()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM articles WHERE a_posted = 1";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAllArticlesId()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT a_id FROM articles";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAOneArticles(int $articles)
    {
        $pdo = parent::connectDb();
        $sql = 'SELECT *,DATE_FORMAT(a_created_at, "%d/%m/%Y") as a_created_at FROM articles INNER JOIN users ON articles.u_id_users = users.u_id WHERE a_id = :id';
        $query = $pdo->prepare($sql);    
        $query->bindValue(':id', $articles, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }
    public function updateArticles(int $articles, string $edit, string $title,string $preveiw, string $text, string $img)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE articles SET a_edit_at=:edit, a_titles=:title, a_preveiw=:preveiw, a_text=:text,a_img=:img  WHERE articles_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':edit', $edit, PDO::PARAM_STR);
        $query->bindValue(':title', $title, PDO::PARAM_STR);
        $query->bindValue(':preveiw', $preveiw, PDO::PARAM_STR);
        $query->bindValue(':text', $text, PDO::PARAM_STR);
        $query->bindValue(':img', $img, PDO::PARAM_STR);
        $query->bindValue(':id', $articles, PDO::PARAM_STR);
        $query->execute();
    }
    public function unPosteArticles(int $article)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE articles SET a_posted = 0 WHERE a_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $article, PDO::PARAM_STR);
        $query->execute();
    }
    public function posteArticles(int $article, string $date)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE articles SET a_posted = 1 WHERE a_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $article, PDO::PARAM_STR);
        $query->execute();
    }
    public function softDeleteArticles(int $article)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE articles SET a_soft_delete=1 WHERE a_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $article, PDO::PARAM_STR);
        $query->execute();
    }
    public function deleteArticles(int $articles)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM articles WHERE articles_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $articles, PDO::PARAM_STR);
        $query->execute();
    }
}
