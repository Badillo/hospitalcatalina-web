/*
 *  Indice:
 *  1). Plugins y Complementos.
 *  2). Validaciones Iniciales.
 *  3). Eventos de Botones.
 *  4). Eventos Generales.
 */

var Control = function() {

    return {
        init: function() {

            /* Plugins y Complementos, Todo aquello que sea un plugin y complemento, favor de colocarlo en eta parte. */
            (function($) {

            }(jQuery));

            $("#btn-add-user").click(function() {

                var data = {
                    'name': $("#name").val(),
                    'username': $("#username").val(),
                    'password': $("#password").val(),
                    'password_confirmation': $("#password_confirmation").val()
                };

                console.log(data);
                /*
                data.push({
                    'name': $("#name").val(),
                    'username': $("#username").val(),
                    'password': $("#password").val(),
                    'password_confirmation': $("#password_confirmation").val()
                });

                /*
                var form = new FormData();
                form.append('user_data', data);*/

                $.ajax({
                        url: main_path + "/admin/user/save",
                        type: 'post',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: data,
                        dataType: "json"
                    }).done(function() {
                        $.bootstrapGrowl('Datos Almancenados!', {
                            type: "success",
                            delay: 4500,
                            allow_dismiss: true
                        });
                    })
                    .fail(function(data) {
                        $.bootstrapGrowl('Ocurrio un error, no se a guardado la informacion' + data.error, {
                            type: "danger",
                            delay: 4500,
                            allow_dismiss: true
                        });
                    });
            });
        }
    };
}();