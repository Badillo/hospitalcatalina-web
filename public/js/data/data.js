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

            /*******FUNCIONES PARA LA SECCION DE USUARIOS********/

            $("#select-name-user").change(function() {

                if ($("#select-name-user").val() != 0) {

                    var data = {
                        'id': $("#select-name-user").val()
                    };

                    $.AJAXPOST(main_path + "/admin/user/show", data, function(json) {
                        if (json.status == true) {
                            $("#edit_name").val(json.data.name);
                            $("#edit_username").val(json.data.username);
                        } else {
                            $.bootstrapGrowl('Hubo un problemas al buscar la información', {
                                type: "danger",
                                delay: 4000,
                                allow_dismiss: true
                            });
                        }
                    });
                }

            });

            $("#btn-add-user").click(function() {

                var data = {
                    'name': $("#name").val(),
                    'username': $("#username").val(),
                    'password': $("#password").val(),
                    'password_confirmation': $("#password_confirmation").val()
                };

                $.ajax({
                        url: main_path + "/admin/user/save",
                        type: 'post',
                        data: data,
                        processData: true
                    }).done(function() {
                        $.bootstrapGrowl('Datos Almancenados!', {
                            type: "success",
                            delay: 4500,
                            allow_dismiss: true
                        });
                    })
                    .fail(function(data) {
                        $.bootstrapGrowl('Ocurrio un error, no se ha guardado la informacion\n' + data.responseJSON.dataError, {
                            type: "danger",
                            delay: 7000,
                            allow_dismiss: true
                        });
                    });

            });

            /***************************************************/
        }
    };
}();