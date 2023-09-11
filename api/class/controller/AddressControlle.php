<?php

class AddressControlle
{
    public $model;
    public function __construct(AddressModel $model)
    {
        $this->model = $model;
    }

    public function GetAddressBook()
    {
        $data = $this->model->GetAddressBookByData();
        include './templates/tpl_address_book.php';
    }

    public function GetAddressBookList()
    {
        return $this->model->GetAddressBookList();
    }

    public function SaveAddressBookAction($data)
    {
        if(isset($data['address_id']))
        {
            return $this->model->UpdateAddress($data);
        }else{
            return  $this->model->SaveAddressBook($data);
        }            
        
    }
}
