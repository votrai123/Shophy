var selected_id=null;
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
function setid(id) {
    selected_id=id;
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