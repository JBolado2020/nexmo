$(document).ready(function() {
    $("#menu li").removeClass('active');

    var URLactual = window.location;
    var arrayPage = URLactual.toString().split('/');
    if(arrayPage[arrayPage.length-1] == 'index.php') {
        $(".home").addClass('active');
    } else if(arrayPage[arrayPage.length-1] == 'product.php') {
        $(".product").addClass('active');
    } else if(arrayPage[arrayPage.length-1] == 'services.php') {
        $(".services").addClass('active');
    } else if(arrayPage[arrayPage.length-1] == 'courses.php') {
        $(".courses").addClass('active');
    } else if(arrayPage[arrayPage.length-1] == 'blog.php' || arrayPage[arrayPage.length-1] == 'el-comic.php' || arrayPage[arrayPage.length-1] == 'google.php') {
        $(".blog").addClass('active');
    } else if(arrayPage[arrayPage.length-1] == 'about.php') {
        $(".about").addClass('active');
    } else {
        $(".home").addClass('active');
    }

    $("#listado").click(function() {
        window.location.href = 'product.php';
    });

});

function email() {
    $("#exampleModal").modal('show');
}

function enviar() {
    
    if($("#email").val() != '' && $("#textarea").val() != "") {
        $.ajax({
            url: 'email.php',
            data: {
                email: $("#email").val(),
                body: $("#textarea").val()
            },
            type: "POST",
            success: function(respuesta){
                if(respuesta.success){
                    $("#exampleModal").modal('hide');
                    toastr.success('Nos contactaremos con usted lo antes posible');
                } else {
                    alert(respuesta.respu);
                }
            }
        }).fail(function() {
            toastr.error('No se ha podido enviar el correo');
          });
    } else {
        return false;
    }
}