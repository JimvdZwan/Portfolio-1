<?php

class ProjectModel
{
    protected $conn;
    public function __construct()
    {
        $this->conn = App::get('query');
    }

    public function showAll()
    {
        $sql = "SELECT * FROM projects";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function add()
    {
        $sql = "INSERT INTO projects(title,content,author) VALUES('{$_POST['projecttitle']}','{$_POST['projectcontent']}',
        '{$_POST['projectauthor']}')";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

    }

    public function delete()
    {
        $sql = "DELETE  FROM projects WHERE id = {$_POST['id']}";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

    }

    public function update()
    {
        $sql = "SELECT * FROM projects WHERE id = {$_POST['id']}";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function store()
    {
        $sql = "UPDATE projects SET title = '{$_POST['projecttitle']}', content = '{$_POST['projectcontent']}',
                    author = '{$_POST['projectauthor']}', 
        updated_at = current_timestamp WHERE id = {$_POST['projectid']}";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

    }
}