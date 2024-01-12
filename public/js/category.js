$(document).ready(function() {
    function fetshCategory(response) {
        $("#category").empty();
        $.each(response, function(index, row){
            $("#category").append(`

            <tr>
            <td>${row.categoryId}</td>
            <td>${row.categoryName}</td>
            <td>${row.categoryDesc}</td>
            <td>${row.created_at}</td>
            </tr>

            `);
        });
    }
    $.ajax({
        url : "http://localhost/wikis/admin/displayCategory",
        type: "GET",
        dataType: "json",
        success: function(response) {
            fetshCategory(response);
        }
        
    })
});