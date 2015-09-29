$(document).ready(function(){
                
    // Disable auto discover for all elements:
    Dropzone.autoDiscover = false;

    var sizes_count = 0;

    // Dropzone class:
    var _dz = new Dropzone("div#dropzone",{
    //var _dz = $("div#dropzone").dropzone({
        url: main_path + "/slider/upload-slider",
        dictDefaultMessage: '<i class="fa fa-cloud-upload"></i><p><span>Arrastra tu imagen ó da click.</span></p>',
        autoProcessQueue: true,
        uploadMultiple: false,
        previewsContainer: false,
        maxFiles: 20,
        maxFilesize: 20, // 5MB
        dictFileTooBig: 'tb:El documento excede el tamaño maximo "20MB"',
        acceptedFiles: 'image/jpeg',
        dictInvalidFileType: 'uf:Archivo no soportado, solo se permiten archivos jpg',
        maxfilesexceeded: function(file) {
            displayNotification('error', 'Ha superado el número máximo de documentos a cargar.', 4000);
            this.removeFile(file);
        },
        error: function(file, response) {
            if($.type(response) === "string") {
                var err = response.split(':');
                if(err[0]=='tb') {
                    displayNotification('error', file.name + ' ' + err[1], 4000);
                    this.removeFile(file);
                } else if(err[0]=='uf') {
                    displayNotification('error', file.name + ' ' + err[1], 4000);
                    this.removeFile(file);
                }// else console.log(response);
            }
        },
        sending: function(file) {
            console.log('Cargando archivo al servidor');
            //$('#dropzone').fadeOut('fast').slideUp('fast');
            //$('.fileprogress').fadeIn('fast').slideDown('slow');
        },
        uploadprogress: function(file, progress, bytesSent) {
            $('.upprogress').css('width', progress+'%').html('<i class="fa fa-circle-o-notch fa-spin"></i> ' + Math.round(progress) + '% Cargado..');
            console.log(progress);
            //console.log(bytesSent);
        },
        complete: function(file) {
            console.log(file);
            if(file.status=='error') return false;

            var json_response = JSON.parse(file.xhr.response);
            sizes_count += json_response.original_size;
            console.log(sizes_count);

            var file_row = '<div id="files" class="row">\n\
                                <div class="col-lg-7">\n\
                                        <span>' + json_response.original + '</span>\n\
                                </div>\n\
                                <div class="col-lg-5">\n\
                                    <button class="btn btn-danger cancel del-file" data-path="' + json_response.path + '" data-size="' + json_response.original_size + '">\n\
                                        <i class="glyphicon glyphicon-remove"></i>\n\
                                        <span>Eliminar</span>\n\
                                    </button>\n\
                                </div>\n\
                            </div>';

            $('#files_list').append(file_row);

            $('.del-file').on('click',function(e){
                $.getJSON(_path + "/delete_file",{'ruta':e.target.dataset.path,'tamano':e.target.dataset.size},function(json){
                    if(json.status == true)
                    {
                        sizes_count -= json.size;
                        console.log(sizes_count);
                        displayNotification('success', 'Archivo eliminado', 3000); 
                        
                    }
                });
                $(this).parent().parent().remove();
            });

           console.log("Cargado Correcto");
        }
    }); 

    $('.del-file-out').on('click',function(e){
        $.getJSON(_path + "/delete_file",{'ruta':e.target.dataset.path,'tamano':e.target.dataset.size},function(json){
            if(json.status == true)
            {
                sizes_count -= json.size;
                console.log(sizes_count);
                displayNotification('success', 'Archivo eliminado (out)', 3000); 
                
            }
        });
        $(this).parent().parent().remove();
    });

    $('.btn-reset').click(function(e){

        $('.data_percent').html('');
        $('.data_before').html('');
        $('.data_after').html('');

        $('#left-image').prop('src','');
        $('#right-image').prop('src','');

        $('.img-viewer').slideUp('fast');
        $('.compress-info').slideUp('fast');

        $('#dropzone').fadeIn('fast').slideDown('fast');
        
        _dz.removeAllFiles();

        e.preventDefault();
    });

    $('#send_button').click(function(e){
        
        if($("#email_subject").val() != "")
        {
            $('#send_button').val('Enviando...');
            $('#send_button').prop('disabled', true);
        }
        //e.preventDefault();
    });
   
});