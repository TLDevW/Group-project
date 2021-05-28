$(document).ready(function () {
    var obj="";
    function myAjax() {
        $.ajax({
            url: '?widget',
            type: 'GET',
            dataType: 'html',
            async: true,
            data: '',
            success: function (result) {
                // console.log(result);
                ajaxSuccess(result);
            },
            error: function (result) {
                ajaxError(result);
            },
            complete: function (result) {
                // faire qq chose quand c'est fini 
                //console.log('fini');
            }
        });
    }
    function ajaxSuccess(o) {
        obj = o;
        //console.log(obj);
        addWidget();
    }

    function ajaxError() {
        alert("Fatal Error")
    }

    function addWidget() {
        $("body div.container div.row > div:last-of-type").html(obj);
    }

    myAjax();
    
    
});