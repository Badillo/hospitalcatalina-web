$(function() {

	$.AJAXPOST = function(path,params,success_callback,error_callback,before_callback){

        console.time( "Inicio de peticion AJAX" );

        $.ajax({
            async: true,
            url: path,
            data: params,
            type: "post",
            cache: true,
            dataType: "json",
            beforeSend: function(req){
                if(before_callback!=null && before_callback!=undefined) before_callback(req);
            },
            success: function (data) {
                if(success_callback!=null && success_callback!=undefined) success_callback(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                if(error_callback!=null && error_callback!=undefined) error_callback(xhr, ajaxOptions, thrownError);
            },
            complete: function() {
                console.timeEnd( "Fin de peticion AJAX" );
            }
        });
    };

    $.AJAXGET = function(path,params,success_callback,error_callback,before_callback){

        console.time( "Inicio de peticion AJAX" );

        $.ajax({
            async: true,
            url: path,
            data: params,
            type: "get",
            cache: true,
            dataType: "json",
            beforeSend: function(req){
                if(before_callback!=null && before_callback!=undefined) before_callback(req);
            },
            success: function (data) {
                if(success_callback!=null && success_callback!=undefined) success_callback(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                if(error_callback!=null && error_callback!=undefined) error_callback(xhr, ajaxOptions, thrownError);
            },
            complete: function() {
                console.timeEnd( "Fin de peticion AJAX" );
            }
        });
    };
    $.AJAXGETASYNC = function(path,params,success_callback,error_callback,before_callback){
        $.ajax({
            async: true,
            url: path,
            data: params,
            type: "get",
            dataType: "json",
            beforeSend: function(req){
                if(before_callback!=null && before_callback!=undefined) before_callback(req);
            },
            success: function (data) {
                if(success_callback!=null && success_callback!=undefined) success_callback(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                if(error_callback!=null && error_callback!=undefined) error_callback(xhr, ajaxOptions, thrownError);
            }
        });
    };

    $.d3Log = function(message,type) {

        var alert_box = '<div class="alert alert-' + ( type!=undefined && type=="success" ? 'success' : 'danger' ) + ' alert-dismissable" id="error_alert">' +
                            '<i class="fa fa-ban"></i>' +
                            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                            '<div class="error_text">' + message + '</div>' +
                        '</div>';

        $('section.content .debug').html('').html(alert_box);
    };

    // Similar al str_replace de php
    $.str_replace = function(busca, repla, orig) {
        str     = new String(orig);

        rExp    = "/"+busca+"/g";
        rExp    = eval(rExp);
        newS    = String(repla);

        str = new String(str.replace(rExp, newS));

        return str;
    };

    // Verificamos
    $.imageExists = function(path) {

        var http = new XMLHttpRequest();
        http.open('HEAD', path, false);
        http.send();

        return (http.status != 404 ? true : false);

    };

    $.validateEmail = function(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    $.ucwords = function(str) {
      return (str + '')
        .replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1) {
          return $1.toUpperCase();
        });
    }

});

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    },
    iPhone: function() {
        return navigator.userAgent.match(/iPhone/i);
    }
};

/*
* This is the plugin
*/
//(function(a){a.createModal=function(b){defaults={title:"",message:"Your Message Goes Here!",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style="max-height: 620px;overflow-y: auto;"':"";html='<div class="modal fade" id="myModal">';html+='<div class="modal-dialog modal-lg">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);
(function(a){a.createModal=function(b){defaults={title:"",message:"Your Message Goes Here!",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style="overflow-y: auto;"':"";html='<div class="modal fade" id="myModal">';html+='<div class="modal-dialog modal-lg">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);
