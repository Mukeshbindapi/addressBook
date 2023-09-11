$(document).ready(function () {
    var ajaxurl = 'address_book_json.php';

    $.ajax({
        url: ajaxurl,
        type: "GET",
        dataType: 'json',
        success: function (data) {
            renderLocationTable(data);
            // console.log(data);
        }

    })

    function renderLocationTable(data) {
        var table = $("<table class='table table-bordered mt-4'>")
        var tr = $("<tr>")
        tr.append("<th>Edit</th>")
        tr.append("<th>first_name</th>")
        tr.append("<th>last_name</th>")
        tr.append("<th>Email</th>")
        tr.append("<th>street </th>")
        tr.append("<th>zip_code </th>")
        tr.append("<th>city_name </th>")
        table.append(tr)
    
        for (var i = 0; i < data.length; i++) {
            var tr = $("<tr>")
            tr.append($("<td>").append('<i class="fa fa-edit edit_Address" style="font-size:24px"></i>'));
            tr.append($("<td>").html(data[i].first_name))
            tr.append($("<td>").html(data[i].last_name))
            tr.append($("<td>").html(data[i].email))
            tr.append($("<td>").html(data[i].street))
            tr.append($("<td>").html(data[i].zip_code))
            tr.append($("<td>").html(data[i].city))
            table.append(tr)
        }
    
        $('#app').html(table)
    }
});