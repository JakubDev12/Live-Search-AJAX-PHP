$(document).ready(function(){

    load_data();

    function load_data(query) {
        $.ajax({
        url:"core/getList.php",
        method:"POST",
        data:{query:query},
        success:function(data) {
            $('#result').html(data);
        }
        });
    }


    $('#countryName').keyup(function(){
        var search = $(this).val();
        if(search != '') {
            load_data(search);
        }
        else {
            document.getElementById('result').innerHTML = "";
        }
    });


    document.onclick= function(event) {
        document.getElementById('result').innerHTML = "";
    };

});