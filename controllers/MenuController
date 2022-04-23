<?php
require_once 'C:\xampp\htdocs\WebFinal\config\Database.php';

class MenuController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from menu');

        return $query->fetchAll();
    }
    // readData for categories
    public function readDataSerums(){
        $query = $this->db->pdo->query('SELECT * from menu where category = "serums"');
        return $query->fetchAll();
    }
    public function readDataCleanser(){
        $query = $this->db->pdo->query('SELECT * from menu where category = "cleanser"');
        return $query->fetchAll();
    }
    public function readDataMoisturizes(){
        $query = $this->db->pdo->query('SELECT * from menu where category = "moisturizes"');
        return $query->fetchAll();
    }
    public function readDataBody(){
        $query = $this->db->pdo->query('SELECT * from menu where category = "body"');
        return $query->fetchAll();
    }



    public function insert($request){
        $request['image']='./image/'.$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO menu (menu_image, menu_title, menu_body,category)
        VALUES (:menu_image, :menu_title, :menu_body,:category)');

        $query->bindParam(':menu_image', $request['image']);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_body', $request['body']);
        $query->bindParam(':category', $request['category']);
        $query->execute();

    
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from menu WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE menu SET menu_image = :menu_image,
        menu_title = :menu_title, menu_body = :menu_body ,category = :category WHERE id = :id');
        $query->bindParam(':menu_image', $request['image']);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_body', $request['body']);
        $query->bindParam(':category', $request['category']);
        $query->bindParam(':id', $id);
        $query->execute();
        return header("Location: menuDashboard.php");
        
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from menu WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }
}
?>
