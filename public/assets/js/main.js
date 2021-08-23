$(document).ready(function () {
    
    $("#selectAll").click(function(){
        $("input[type=checkbox]").prop('checked', $(this).prop('checked'));
    });

    $("#deleteAll").on("click", function () {
        var ids = [];
        $.each($("input[name='ids']:checked"), function() {
            ids.push($(this).val());
        });

        $.ajax({
            type: "DELETE",
            url: 'permissions/massDestroy',
            data: {
                ids: ids,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "json",
            success: function (response) {
                
            }
        });
    });
    
});