<?php
ob_start();
include './api/init.php';

$addressControlle = new AddressControlle (new AddressModel($db));
header('Content-Type: application/json; charset=utf-8');
if(isset($_POST['first_name'])){
    ob_clean();
    echo $addressControlle->SaveAddressBookAction($_POST);
}
$data = $addressControlle->GetAddressBookList();
echo json_encode($data);
?>