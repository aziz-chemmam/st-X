$(document).ready(function() {
    function fetshUser(response) {
        $("#user").empty();
        $.each(response, function(index, row){
            $("#user").append(`

            <tr>
            <td>${row.UserId}</td>
            <td>${row.username}</td>
            <td>${row.pw}</td>
            <td>${row.email}</td>
            <td>${row.created_at}</td>
            

            </tr>

            `);
        });
    }
    $.ajax({
        url : "http://localhost/wikis/admin/displayUsers",
        type: "GET",
        dataType: "json",
        success: function(response) {
            fetshUser(response);
        }
        
    })
});