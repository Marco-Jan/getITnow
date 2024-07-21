<?php

class Product
{
    private int $id;
    private string $name;
    private string $description;
    private float $price;
    private int $quantity;

    public function __construct($id, $name, $description, $price, $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
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

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public static function getAllProducts($db) {
        $stmt = $db->query("SELECT * FROM produkte");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $products = [];
        foreach ($results as $row) {
            $products[] = new Product($row['ProduktID'], $row['Name'], $row['Beschreibung'], $row['Preis'], $row['Lagerbestand']);
        }
        return $products;
    }

    public static function addProduct($db, $name, $description, $price, $quantity)
    {
        $stmt = $db->prepare("INSERT INTO produkte (Name, Beschreibung, Preis, Lagerbestand) VALUES (:name, :description, :price, :quantity)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->execute();
    }
}
