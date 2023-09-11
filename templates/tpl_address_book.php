<?php 
include('./theme/Header.php');
?>

<h2>AddressBook</h2>
<button id="addLocationBtn" class="btn btn-primary">open form</button>
<div class="addLocationModal mt-4" id="addLocationModal" style="display: none;">
    <div class="container manege_address">
        <div class="row">
            <input type="hidden" id="locationIdInput" value="">
            <div class="col-25">
                <label for="first_name">First Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="first_name" name="first_name" placeholder="Your name..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="last_name">Last Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="last_name" name="last_name" placeholder="Your last name..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">email</label>
            </div>
            <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Your email..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="street">street</label>
            </div>
            <div class="col-75">
                <input type="text" id="street" name="street" placeholder="Your email..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="zip_code">zip_code</label>
            </div>
            <div class="col-75">
                <input type="text" id="zip_code" name="zip_code" placeholder="Your email..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="cities">cities</label>
            </div>
            <div class="col-75">
                <select name="cities" id="cities">
                    <option value="" selected>Select your cities</option>
                    <?php
                    foreach ($data as $cities) {
                        echo '<option value="' . $cities['city_name'] . '">' . $cities['city_name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div>
            <input id="AddressBookList_Id" type="hidden" class="">
        </div>
        <div class="row">
            <input type="submit" id="save_addressbook" class="mt-4" value="Submit">
        </div>
    </div>
</div>

<div id="app"></div>