$(document).ready(function () {
  $("#addLocationBtn").click(function () {
    $("#addLocationModal").css("display", "block");
  });

  var ajaxeurl = 'address_book.php';
  $('#save_addressbook').click(function () {
    $FnameName = $('#first_name').val().trim();
    $LastName = $('#last_name').val().trim();
    $Email = $('#email').val().trim();
    $Street = $("#street").val().trim()
    $ZipCode = $("#zip_code").val().trim();
    $Cities = $("#cities").val().trim();
    $addressId = $("[name='address_id']").val()
    $("#first_name,#last_name,#email,#street,#zip_code,#cities").val(['']);

    let dataToAct = {
      first_name: $FnameName,
      last_name: $LastName,
      email: $Email,
      street: $Street,
      zip_code: $ZipCode,
      cities: $Cities,
      address_id : $addressId
    };

    $.ajax({
      url: ajaxeurl,
      type: "POST",
      data: dataToAct,
      success: function (response) {
        let returnedData = JSON.parse(response);
      }
    })
    $("#addLocationModal").css("display", "none");

  })
})



$(document).on('click', '.edit_Address', function () {
  $("#addLocationBtn").click(function () {
    $("#addLocationModal").css("display", "block");
  });
  var ajaxeurl = 'address_book.php';
  var addressId = $(this).data('id')

  let dataToAct = {
    task: 'edit_address',
    address_id: addressId,
  };


  $.ajax({
    url: ajaxeurl,
    type: "POST",
    data: dataToAct,
    success: function (response) {
      $('#first_name').val(response.first_name),
        $('#last_name').val(response.last_name),
        $('#email').val(response.email),
      $('#street').val(response.street),
      $('#zip_code').val(response.zip_code),
      $('#cities').val(response.cities),
        $("[name='address_id']").remove()
      $('.manege_address').append("<input type='text' name='address_id' value='" + response.id + "'>")
    }
  })
  $("#addLocationModal").css("display", "block");
})
