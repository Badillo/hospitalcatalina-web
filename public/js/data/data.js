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
                    $("#btn-activate-user").attr("disabled", false);
                    var data = {
                        'id': $("#select-name-user").val()
                    };

                    $.AJAXPOST(main_path + "/admin/user/show", data, function(json) {
                        if (json.status == true) {
                            $("#edit_name").val(json.data.name);
                            $("#edit_username").val(json.data.username);
                            (json.user_status == "Activado"
                                ? $("#btn-activate-user").removeClass( "btn-success" ).addClass( "btn-danger" ).html( "Desactivar Usuario")
                                : $("#btn-activate-user").removeClass( "btn-danger" ).addClass( "btn-success" ).html( "Activar Usuario") );
                        } else {
                            $.bootstrapGrowl('Hubo un problemas al buscar la información', {
                                type: "danger",
                                delay: 4000,
                                allow_dismiss: true
                            });
                        }
                    });
                }
                else
                {
                    $("#btn-activate-user").attr("disabled", true);
                }

            });

            $("#btn-activate-user").click(function() {

                if ($("#select-name-user").val() != 0) {
                    var data = {
                        'id': $("#select-name-user").val()
                    };

                    $.AJAXPOST(main_path + "/admin/user/activate", data, function(json) {
                        if (json.status == true) {
                            if(json.user_status == "Activado")
                            {
                                $.bootstrapGrowl('Usuario Activado', {
                                type: "success",
                                delay: 4000,
                                allow_dismiss: true
                                });

                                $("#btn-activate-user").removeClass( "btn-success" ).addClass( "btn-danger" ).html( "Desactivar Usuario");
                            }
                            else
                            {
                                $.bootstrapGrowl('Usuario Desactivado', {
                                type: "success",
                                delay: 4000,
                                allow_dismiss: true
                                });

                                $("#btn-activate-user").removeClass( "btn-danger" ).addClass( "btn-success" ).html( "Activar Usuario");
                            }
                        } else {
                            $.bootstrapGrowl('Hubo un problemas al buscar la información', {
                                type: "danger",
                                delay: 4000,
                                allow_dismiss: true
                            });
                        }
                    });
                }
                else
                {
                    $("#btn-activate-user").attr("disabled", true);
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

            $("#btn-update-user").click(function() {

                var data = {
                    'id': $("#select-name-user").val(),
                    'name': $("#edit_name").val(),
                    'username': $("#edit_username").val(),
                    'password': $("#edit_password").val(),
                    'password_confirmation': $("#edit_password_confirmation").val()
                };

                $.ajax({
                        url: main_path + "/admin/user/update",
                        type: 'post',
                        data: data,
                        processData: true
                    }).done(function() {
                        $.bootstrapGrowl('Usuario Actualizado!', {
                            type: "success",
                            delay: 4500,
                            allow_dismiss: true
                        });
                    })
                    .fail(function(data) {
                        $.bootstrapGrowl('Ocurrio un error, no se ha actualizo la informacion\n' + data.responseJSON.dataError, {
                            type: "danger",
                            delay: 7000,
                            allow_dismiss: true
                        });
                    });

            });

            /***************************************************/

            /*******FUNCIONES PARA LA SECCION DE ESPECIALIDADES********/

            $("#select-name-speciality").change(function() {

                if ($("#select-name-speciality").val() != 0)
                {
                    $("#btn-delete-speciality").attr("disabled", false);
                }
                else
                {
                    $("#btn-delete-speciality").attr("disabled", true);
                }

            });

            $("#btn-delete-speciality").click(function() {

                if ($("#select-name-speciality").val() != 0) {
                    var data = {
                        'id': $("#select-name-speciality").val()
                    };

                    $.AJAXPOST(main_path + "/admin/speciality/delete", data, function(json) {
                        if (json.status == true) {
                            $.bootstrapGrowl('Especialidad eliminada', {
                            type: "success",
                            delay: 4000,
                            allow_dismiss: true
                            });
                            $("#select-name-speciality option[value='" + json.id_speciality + "']").remove();
                        } else {
                            $.bootstrapGrowl('Hubo un problemas al eliminar la especialidad', {
                                type: "danger",
                                delay: 4000,
                                allow_dismiss: true
                            });
                        }
                    });
                }
                else
                {
                    $("#btn-activate-user").attr("disabled", true);
                }

            });

            $("#btn-add-speciality").click(function() {

                var data = {
                    'speciality': $("#speciality").val()
                };

                $.ajax({
                        url: main_path + "/admin/speciality/save",
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
