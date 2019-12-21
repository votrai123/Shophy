var selected_id=null;
var selected_id1=null;
var selected_id2=null;
var selected_id3 =null;
var selected_id4 =null;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function deletecate() {
    
        $.post(`/admin/categorys/delcategorys/${selected_id}`,
        {
            
        },
        function(data, status){
        //   alert("Data: " + data + "\nStatus: " + status);
        location.reload();
        });
    // console.log('abcd')
}
function deleteuser() {
    
    $.post(`/admin/users/deleteuser/${selected_id2}`,
    {
        
    },
    function(data, status){
    //   alert("Data: " + data + "\nStatus: " + status);
    location.reload();
    });
// console.log('abcd')
}
function deletepro() {
    
    $.post(`/admin/products/delproducts/${selected_id1}`,
    {
        
    },
    function(data, status){
    //   alert("Data: " + data + "\nStatus: " + status);
    location.reload();
    });
// console.log('abcd')
}
function deletecomment() {
    
    $.post(`/admin/products/delcomment/${selected_id3}`,
    {
        
    },
    function(data, status){
    //   alert("Data: " + data + "\nStatus: " + status);
    location.reload();
    });
// console.log('abcd')
}

function deletebill() {
    
    $.post(`/admin/bills/delbill/${selected_id4}`,
    {
        
    },
    function(data, status){
    //   alert("Data: " + data + "\nStatus: " + status);
    location.reload();
    });
// console.log('abcd')
}

function donebill() {
    
    $.post(`/admin/bills/donebill/${selected_id4}`,
    {
        
    },
    function(data, status){
    //   alert("Data: " + data + "\nStatus: " + status);
    location.reload();
    });
// console.log('abcd')
}

function detailbill(id) {
    $.post(`/admin/bills/detail/${id}`,
    {
        
    },
    function(data, status){
    //   alert("Data: " + data + "\nStatus: " + status);
    // location.reload();
    $("#aaa").html(data);
    });
// console.log('abcd')
}

function insertcomment(id) {
    $.post(`/comment/${id}`,
    {
        
    },
    function(data, status){
    //   alert("Data: " + data + "\nStatus: " + status);
    // location.reload();
    });
}
function setidcate(id) {
    selected_id=id;
    // return selected_id;
}
function setidusers(id) {
    selected_id2=id;
    // return selected_id;
}

function setidcomment(id) {
    selected_id3=id;
}
function setidpro(id) {
    selected_id1=id;
}
function setidbill(id) {
    selected_id4=id;
}
$('#unit_promotion').on('input', function (e) {
    var inputpromotion = $('#unit_promotion').val();
    var inputunitprice = $('#unit_price').val();
    if (inputpromotion > inputunitprice) {
        $('#errorLabprice').show();
    }
    else {
        $('#errorLabprice').hide();
    }

    
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
// ajax list user
$(document).ready(function() {
    $("#role").change(function() {
        var role = $(this).val();
        // alert(role);
         $.get("/admin/users/ajax/role/"+role,function(data) {
            //  alert(data);
            // alert(role);
            $("#users").html(data);
         });
        
    });
 });

// ajax list bill

$(document).ready(function() {
    $("#status").change(function() {
        var status = $(this).val();
        // alert(status);
         $.get("/admin/bills/ajax/status/"+status,function(data) {
        //     //  alert(data);
        //     // alert(role);
            $("#listbills").html(data);
         });
        
    });
 });
