$(document).ready(function(){

    if ($("#selectedcategories").length > 0) {
        var selcat = $("#selectedcategories").val().split(',');
        $('.categorycheckboxlist input:checkbox').each(function() {
            if ($.inArray(this.value, selcat) != -1)
            {
                $(this).attr('checked', true);
            }
        });
    }

    $(".categorycheckboxlist").change(function(){
        var categories = [];
        $('.categorycheckboxlist input:checked').each(function() {
            categories.push(this.value);
        });
        $("#selectedcategories").val(categories);
        $("#categoryrefresh").click();
    });
});
