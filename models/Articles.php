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
    public function addNewArticles(string $created_at, string $posted_at, string $edit, string $text, string $preveiw, string $img, string $title, int $user): void
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO  articles (a_created_at, a_posted_at, a_edit_at, a_titles, a_preveiw, a_text, a_img, u_id_users) VALUES (:created_at,:posted_at, :edit,:title, :preveiw, :text, :img, :user)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':created_at', $created_at, PDO::PARAM_STR);
        $query->bindValue(':title', $edit, PDO::PARAM_STR);
        $query->bindValue(':preveiw', $preveiw, PDO::PARAM_STR);
        $query->bindValue(':img', $img, PDO::PARAM_STR);
        $query->bindValue(':user', $user, PDO::PARAM_STR);
        $query->bindValue(':text', $text, PDO::PARAM_STR);
        $query->bindValue(':title', $title, PDO::PARAM_STR);
        $query->execute();
    }
    public function getAllArticles()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM articles";
        $query = $pdo->query($sql);
        $result = $query->fetChAll();
        return $result;
    }
    public function getAOneArticles(int $articles)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM articles 
        WHERE articles_id = $articles";
        $query = $pdo->query($sql);
        $result = $query->fetCh();
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
    public function deleteArticles(int $articles)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE FROM articles WHERE articles_id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $articles, PDO::PARAM_STR);
        $query->execute();
    }
}
