<?php

class Category
{
    private int $id;
    private string $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {

        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public static function getAll($db) {
        $stmt = $db->query("SELECT * FROM kategorien");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $categories = [];

        foreach($result as $row) {
            $categories[] = new Category($row['KategorieID'], $row['Name']);
        }

        return $categories;
    }

}