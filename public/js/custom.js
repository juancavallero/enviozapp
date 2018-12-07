/**
 * Created by Julio on 25/09/2016
 */
var index_table;
var getUrl = window.location;
//var baseUrl = getUrl .protocol + "//" + getUrl.host;

var UIConfirmations = function () {

    var eventosEliminar = function () {

        $('.btn-eliminar').on('confirmed.bs.confirmation', function () {
        });

        $('.btn-eliminar').on('canceled.bs.confirmation', function () {
        });

        $('.btn-eliminar').confirmation({
            rootSelector: '.btn-eliminar',
            title: '¿Está seguro que desea eliminar este registro?',
            popout: true,
            btnOkLabel: 'Si',
            placement: 'top',
            buttons: [
                {
                    'class': 'btn-xs btn-primary',
                    'icon': 'glyphicon glyphicon-ok'
                },
                {
                    'class': 'btn-xs btn-default',
                    'icon': 'glyphicon glyphicon-remove',
                    'cancel': true
                }
            ]
        });

    };


    return {
        //main function to initiate the module
        init: function () {

            eventosEliminar();

        }

    };

}();

var UIExtendedModals = function () {


    return {
        //main function to initiate the module
        init: function () {

            // general settings
            $.fn.modal.defaults.spinner = $.fn.modalmanager.defaults.spinner =
                '<div class="loading-spinner" style="width: 200px; margin-left: -100px;">' +
                '<div class="progress progress-striped active">' +
                '<div class="progress-bar" style="width: 100%;"></div>' +
                '</div>' +
                '</div>';

            $.fn.modalmanager.defaults.resize = true;

            //dynamic demo:
            $('.dynamic .demo').click(function(){
                var tmpl = [
                    // tabindex is required for focus
                    '<div class="modal hide fade" tabindex="-1">',
                    '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">Modal header</h4>',
                    '</div>',
                    '<div class="modal-body">',
                    '<p>Test</p>',
                    '</div>',
                    '<div class="modal-footer">',
                    '<a href="#" data-dismiss="modal" class="btn btn-default">Close</a>',
                    '<a href="#" class="btn btn-primary">Save changes</a>',
                    '</div>',
                    '</div>'
                ].join('');

                $(tmpl).modal();
            });

            //ajax demo:
            var $modal = $('#ajax-modal');

            $('#ajax-demo').on('click', function(){
                // create the backdrop and wait for next modal to be triggered
                $('body').modalmanager('loading');
                var el = $(this);

                setTimeout(function(){
                    $modal.load(el.attr('data-url'), '', function(){
                        $modal.modal();
                    });
                }, 1000);
            });

            $modal.on('click', '.update', function(){
                $modal.modal('loading');
                setTimeout(function(){
                    $modal
                        .modal('loading')
                        .find('.modal-body')
                        .prepend('<div class="alert alert-info fade in">' +
                            'Updated!<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '</div>');
                }, 1000);
            });
        }

    };

}();


function obtenerDiasHabiles(startDate, endDate, sabados) {
    var curDate = startDate;
    var diasHabiles = [];

    while (curDate <= endDate) {
        console.log('entro');
        var dayOfWeek = curDate.getDay();
        if(!((dayOfWeek == 6) || (dayOfWeek == 0)) || (dayOfWeek == 6 && sabados==true))
        {
            diasHabiles.push(new Date(curDate.getFullYear(),curDate.getMonth(),curDate.getDate()));
        }
        curDate.setDate(curDate.getDate() + 1);
    }
    return diasHabiles;
}

function validacionesAjax(data, tipo, form) {
    tipo = tipo || 'todas';
    respuesta = true;

    $.each(data, function (i, e) {

        if (e != '' && e[0].length > 0 && e != 'error') {

            if (e.length > 1) {

                $.each(e, function (index, element) {

                    console.log(1);
                    if (element.substring(0,10)=='[Optional]') {
                        if (tipo == 'todas' || tipo == 'opcional') {
                            swal({
                                    title: "Atención!",
                                    text: element.replace('[Optional]','') + ' ¿Desea confirmar?',
                                    type: "warning",
                                    showCancelButton: true,
                                    showConfirmButton: true,
                                    confirmButtonClass: "btn-danger",
                                    confirmButtonText: "Si",
                                    cancelButtonText: "No",
                                    closeOnConfirm: false,
                                    closeOnCancel: true
                                },
                                function(isConfirm) {
                                     if ( isConfirm) {
                                         respuesta = true;
                                         $('#confirmed').val(1);
                                         form.submit();
                                         console.log('submit');
                                         return respuesta;
                                     } else
                                     {
                                         respuesta = false;
                                         return respuesta;
                                     }
                                });
                        }

                    } else  {
                        respuesta = false;
                        $('#'+i+'-error').text(element);
                        $('#'+i+'-error').addClass('help-block-error');


                        if ($('#'+i ).hasClass('select2')) {
                            $('#'+i+'-error').attr('style','opacity:1');
                            $('#'+i ).closest('div.form-md-line-input').find('span.select2-container').removeClass('selectmd');
                            $('#'+i ).closest('div.form-md-line-input').find('span.select2-container').addClass("selectmd-error");
                        }

                        $('#'+i ).closest('div.form-group').addClass('has-error');
                    }

                });

            } else

            {

                if (e[0].substring(0,10)=='[Optional]') {
                    if (tipo == 'todas' || tipo == 'opcional') {
                        swal({
                                title: "Atención!",
                                text: e[0].replace('[Optional]','') + ' ¿Desea confirmar?',
                                type: "warning",
                                showCancelButton: true,
                                showConfirmButton: true,
                                confirmButtonClass: "btn-danger",
                                confirmButtonText: "Si",
                                cancelButtonText: "No",
                                closeOnConfirm: false,
                                closeOnCancel: true
                            },
                            function(isConfirm) {
                                if ( isConfirm) {
                                    respuesta = true;
                                    $('#confirmed').val(1);
                                    console.log('submit');
                                    form.submit();

                                    return respuesta;
                                } else
                                {
                                    respuesta = false;
                                    return respuesta;
                                }
                            });
                    }
                } else  {
                    respuesta = false;
                    $('#'+i+'-error').text(e[0]);
                    $('#'+i+'-error').addClass('help-block-error');


                    if ($('#'+i ).hasClass('select2')) {
                        $('#'+i+'-error').attr('style','opacity:1');
                        $('#'+i ).closest('div.form-md-line-input').find('span.select2-container').removeClass('selectmd');
                        $('#'+i ).closest('div.form-md-line-input').find('span.select2-container').addClass("selectmd-error");
                    }

                    $('#'+i ).closest('div.form-group').addClass('has-error');
                }
            }




        }
    });

/*    if (tipo == 'todas' || tipo == 'opcional') {

    }*/

    var button = $('.btn-oneclick');

    button.val('Guardar');
    button.prop('disabled',false);
    $('.grey-cascade').show();

    return respuesta;
}


jQuery(document).ready(function() {
    UIConfirmations.init();
    UIExtendedModals.init();

    if ($.fn.datepicker.defaults) {
        $.fn.datepicker.defaults.language = 'es';
    }




    $('.multi-select').multiSelect();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function() {
            $('body').addClass('loading');
        },
        complete: function(){
            $('body').removeClass('loading');
        },
        success: function() {}
    });


    $(".select2, .select2-multiple").select2(
        {
            language: "es",
            placeholder: 'Seleccione una opción',
        }
    );

    $(".select2-ajax").select2({
        language: "es",
        ajax: {
            context: this,
            data: function (params) {
                var query = {
                    search: params.term,
                    page: params.page,
                    condition: $(this).data('condition')
                };
                console.log(query);

                // Query paramters will be ?search=[term]&page=[page]
                return query;
            },
            url: function(params) {
                console.log(params);
                var dataurl = $(this).data('url');
                //var condition ='';
    /*            if ($(this).data('condition').val !== '') {
                    condition = $(this).data('condition');
                }*/

                return baseUrl + dataurl + params.term;
            },
            dataType: 'json',
            delay: 250,
            processResults: function (data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                params.page = params.page || 1;

                return {
                    results: data,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
        escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
        minimumInputLength: 2
    });
    $(".select2-container").addClass("selectmd");

    $('.date-picker-multi').datepicker({
        multidate: true,
        language: 'es',
        clearBtn: true
    });


    if(sessionStorage.getItem("activeMenuItemID") != undefined){
        $("#nav > li").each(function(){
            if ($(this).attr("id") == sessionStorage.getItem("activeMenuItemID")){
                expandMenuItem(this);
            }
        });
    }

    $('.nav-item').click(function(elem){

        //console.log($(this).attr("id"));
        sessionStorage.setItem("activeMenuItemID", elem.target.parentElement.id);
    });

    //var oSettings = index_table.DataTable().fnSettings();



});

function expandMenuItem(elem){

    if (!$(elem).hasClass('open')){
        $('.nav-item').children('ul').slideUp();
        $('.nav-item').removeClass("open");
        $('.nav-item').removeClass("active");
        $(elem).addClass("open");

        $(elem).children('ul').slideToggle();
        //$(elem).children('ul').attr('style','display:block;');
        //$(elem).find('.arrow').addClass('open');
        $(elem).addClass("active");
        sessionStorage.setItem("activeMenuItemID", $(elem).attr("id"));
    }
}


$(document).ready(function(){

    $('.btn-oneclick').click(function (e) {
        var button = $(e.target);

        if (button.parents('form').valid()) {
            button.val('Guardando...');
            button.prop('disabled',true);
            $('.grey-cascade').hide();
            $('#loading-img').show();
            button.parents('form').submit();
        }

    });

    $('.page-content').fadeIn();

    jQuery.validator.setDefaults({
        lang: 'es_AR',
        onfocusout: function (element) {
            $(element).valid();
        },
        errorPlacement: function(error, element) {
            var name = $(element)[0].name;
            $('#' + name + '-error').text(error[0].outerText);
        },

        highlight: function(element, errorClass, validClass) {
            var name = $(element)[0].name;
            $('#' + name + '-error').addClass('help-block-error');
            $(element).parents("div.form-group").addClass('has-error').removeClass('has-success');
        },
        unhighlight: function(element, errorClass, validClass) {
            var name = $(element)[0].name;
            $('#' + name + '-error').removeClass('help-block-error');
            $('#' + name + '-error').text($(element).attr('help-block'));
            $(element).parents("div.form-group").addClass('has-success').removeClass('has-error');
        }
    });

    $('#modelform').validate();
});