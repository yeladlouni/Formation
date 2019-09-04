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

    const USERNAME = "root";
    const PASSWORD = "";

    /**
     * Blogs constructor.
     * @param $conn
     */
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost", self::USERNAME, self::PASSWORD);

        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function addBlog($blog) {
        $sql = "INSERT INTO blogs.blogs(content, title, username) 
                VALUES('".$blog->getContent()."', '".$blog->getTitle()."', '".$blog->getUsername()."')";

        $this->conn->exec($sql);

    }

    public function removeBlog($id) {
        $sql = "DELETE FROM blogs.blogs WHERE id = ".$id;
        $this->conn->exec($sql


        );
    }

    public function updateBlog($id, $blog) {
        $sql = "UPDATE blogs.blogs set content = '".$blog->content.
            "', title = '".$blog->title."', username = '".$blog->username.
            "', creation_date = '".$blog->creationDate."' WHERE id = ".$id;
        $this->conn->exec($sql);
    }

    public function getBlog($id) {

    }

    function __destruct() {
        $this->conn = null;

    }


}


$blogs = new Blogs();
$blog = new Blog(
    "le contenu de mon blog",
    "le titre de mon blog",
    new DateTime(),
    "yassine"
);

$blogs = new Blogs();
$blogs->addBlog($blog);