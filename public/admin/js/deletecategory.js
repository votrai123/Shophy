var selected_id=null;
var selected_id1=null;
var selected_checkbox =[];
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
function setidcate(id) {
    selected_id=id;
    // return selected_id;
}
function setidpron(id) {
    // for(var i=0, len=id.option.lenght;i<len;i++){
        // opt=id.option[i];
        
        // if ( opt.selected ) {
            selected_checkbox=[id];
            // selected_checkbox.push(opt);
        document.getElementById("demo").innerHTML = selected_checkbox;
    // }
    
    // return selected_checkbox;
}

function setidpro(id) {
    selected_id1=id;
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
$(document).ready(function() {
    $("#role").change(function() {
        var role = $(this).val();
        // alert(role);
         $.get("ajax/role/"+role,function(data) {
             
         });
        
    });
 });