<?php
include ("./config/DBConnection.php");
include ("./models/Author.php");
class AuthorService {
    public function getAllauthors() {
        $dbCon = new DBConnection();
        $conn  = $dbCon->getConnection();

        $sql   = "SELECT * FROM author";
        $stmt  = $conn->query($sql);
        
        $authors = [];
        while ($row = $stmt->fetch())
        {
            $author  = new Author($row['id'], $row['forename'], $row['surname'], $row['email'], $row['password'], $row['joined'], $row['picture']);
            array_push($authors, $author);
        }
        
        return $authors;
    }
}
?>