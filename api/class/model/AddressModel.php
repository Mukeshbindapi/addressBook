<?php

class AddressModel
{
    public $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function SaveAddressBook($data)
    {
        $sql = "INSERT INTO addresses (first_name,last_name,email,street,zip_code,city_id) VALUES (?,?,?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$data['first_name'], $data['last_name'], $data['email'], $data['street'],$data['zip_code'], $data['cities']]);
    }

    public function GetAddressBookByData()
    {
        $sql = "SELECT * FROM cities";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function GetAddressBookList()
    {
        $sql = "SELECT * FROM addresses";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function UpdateAddress($data)
    {
        $sql = "UPDATE addresses SET first_name=?, last_name =?, email =?, street =?, zip_code =?, city_id =? WHERE addresses.id=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$data['first_name'], $data['last_name'], $data['email'], $data['street'],$data['zip_code'], $data['cities'], $data['address_id']]);
    }
}
