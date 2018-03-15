<?php
include("./config/db.php");



class ModelCategories {
    private function getDBInstance(){
        $db = Database::getInstance();
        $mysqli = $db->getConnection();
        return $mysqli;
    }

    public function getCategories() {
        $sql_query = "SELECT * FROM categories";
        $result = $this->getDBInstance()->query($sql_query);
        $return = array();
        while($row = $result->fetch_assoc()) {
            $return[]= $row;
        }
        return $return;
    }

    public function getSubcategories() {
        $sql_query = "SELECT s.name, s.description, s.image, c.id_category, c.keyword FROM subcategories s inner join categories c on s.id_parent = c.id_category";
        $result = $this->getDBInstance()->query($sql_query);
        $return = array();
        while($row = $result->fetch_assoc()) {
            $return[]= $row;
        }
        return $return;
    }
}
?>