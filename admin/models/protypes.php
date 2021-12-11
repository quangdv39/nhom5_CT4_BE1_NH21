<?php
class Protypes extends Db{
    public function getAllProtypes()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM protypes");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delProtypes($type_id)
    {
        $sql = self::$connection->prepare("DELETE  FROM `protypes` WHERE `protypes`.`type_id`= ?");
        $sql->bind_param("i", $type_id);
        return $sql->execute(); //return an object
    }
    public function addProtype($type_id)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `protypes`(`type_name`) 
        VALUES (?)");
        $sql->bind_param("s", $type_id);
        return $sql->execute(); //return an object
    }
}