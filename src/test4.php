<?php


class Blog {
    protected $content;
    protected $title;
    protected $creationDate;
    protected $username;

    /**
     * Blog constructor.
     * @param $content
     * @param $title
     * @param $creationDate
     * @param $username
     */
    public function __construct($content, $title, $creationDate, $username)
    {
        $this->content = $content;
        $this->title = $title;
        $this->creationDate = $creationDate;
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }


}

class Blogs {
    private $conn;

    /**
     * Blogs constructor.
     * @param $conn
     */
    public function __construct()
    {
        $this->conn = new PDO("");
        $this->conn->setAttribute();
    }

    public function addBlog($blog) {
        $this->conn->prepare();

    }

    public function removeBlog($id) {

    }

    public function updateBlog($blog) {
        
    }

    public function getBlog($id) {

    }

    function __destruct() {
        $this->conn = null;
    }


}