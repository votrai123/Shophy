var selected_id=null;
var selected_id1=null;
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