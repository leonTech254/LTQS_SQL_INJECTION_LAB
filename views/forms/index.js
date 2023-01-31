
$(document).ready(function () {
    $("#btn").click(function () {
    let username = $("#username").val();
        let password = $("#password").val();
        if (username == '' || password == '')
        {
            alert("all field requeired");    
        }
    // Send an async request to the PHP script
    $.ajax({
      url: '../../backed/form-backed.php',
        type: 'POST',
        data: {
            "username": username,
            "password":password,
      },
        success: function (response) {
            $("#container").html(response);
            let query_status=response['query_status'];
            let querysent=response['our_sql_query'];
            let userdat=response['UserData'];
            $('#status').html(query_status);
            $('#query').html(querysent);
            $('#data').html(userdat);
      }
    });
  });
});
