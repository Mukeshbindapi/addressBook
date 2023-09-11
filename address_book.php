<?php
ob_start();

include './api/init.php';
include('./theme/Header.php');
$addressControlle = new AddressControlle (new AddressModel($db));

if(isset($_POST['first_name'])){
    echo $addressControlle->SaveAddressBookAction($_POST);
}
    $data = $addressControlle->GetAddressBook();

include('./theme/Footer.php');

?>
