
var TableDatatablesManaged = function () {

    var initTable1 = function (idTable, groupcol, sortcol, options) {

        //$('#'+idTable+'_filter_input').val('');
        //$('#'+idTable+'_filter_input').trigger('keyup');


        var default_options = {

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "emptyTable": "Ningún dato disponible en esta tabla",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "lengthMenu": "Mostrar _MENU_ registros.",
                "sProcessing":     "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se encontraron resultados",
                "paginate": {
                    "previous":"Anterior",
                    "next": "Siguiente",
                    "last": "Último",
                    "first": "Primero"
                }
            },

            buttons: [
                { extend: 'print', className: 'btn dark btn-outline' },
                { extend: 'copy', className: 'btn red btn-outline' },
                { extend: 'pdf', className: 'btn green btn-outline' },
                { extend: 'excel', className: 'btn yellow btn-outline ' },
                { extend: 'csv', className: 'btn purple btn-outline ' },
                { extend: 'colvis', className: 'btn dark btn-outline', text: 'Columns'}
            ],

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
            // So when dropdowns used the scrollable div should be removed.
            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

            // setup colreorder extension: http://datatables.net/extensions/colreorder/
            colReorder: {
                reorderCallback: function () {
                    console.log( 'callback' );
                }
            },

            "drawCallback": function ( settings ) {

                if (groupcol > 0) {
                    var api = this.api();
                    var rows = api.rows( {page:'current'} ).nodes();
                    var last=null;

                    api.column(groupcol, {page:'current'} ).data().each( function ( group, i ) {
                        if ( last !== group ) {
                            $(rows).eq( i ).before(
                                '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                            );

                            last = group;
                        }
                    } );
                }

            },

            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "Todos"] // change per page values here
            ],
            // set the initial value
            "pageLength": 5,
            "pagingType": "bootstrap_full_number",
            "order": [
                [sortcol, "asc"]
            ] // set first column as a default sort by asc
        };
        $.extend(default_options, options);

        var index_table = $('#' + idTable).DataTable(
            default_options);

        index_table.on('change', 'tbody tr .checkboxes', function () {
            $(this).parents('tr').toggleClass("active");
        });

        // Ajax Event
        index_table.on('draw', function (e, settings, json) {
            App.initAjax();
            console.log('tabla actualizada');
            UIConfirmations.init();
        } );

        // Order by the grouping
        $('#' +idTable +' tbody').on( 'click', 'tr.group', function () {
            var currentOrder = index_table.order()[0];
            if ( currentOrder[0] === groupcol && currentOrder[1] === 'asc' ) {
                index_table.order( [ groupcol, 'desc' ] ).draw();
            }
            else {
                index_table.order( [ groupcol, 'asc' ] ).draw();
            }
        } );

        // Apply the search
        index_table.columns().every( function () {
            var that = this;

            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );


        // handle datatable custom tools
        $('#' +idTable+'_tools > li > a.tool-action').on('click', function() {

            var action = $(this).attr('data-action');
            var table = $('#' + idTable);
            table.DataTable().button(action).trigger();
        });


        // limpio los filtros y buscadores al cargar la pagina

        index_table
            .search( '' )
            .columns().search( '' )
            .draw();


    }



    return {

        //main function to initiate the module
        init: function (idTable, groupcol, sortcol, options) {
            if (!jQuery().dataTable) {
                return;
            }

            // Setup - add a text input to each footer cell
            $('#'+idTable+' tfoot th').each( function () {
                var title = $(this).text();
                if (title.length > 0) {

                    $(this).html('<div class="form-group form-md-line-input form-md-floating-label has-success">' +
                        '<input type="text" class="form-control" placeholder="Buscar '+title+'" />' +
                        '</div>'
                    );
                }
            } );

            initTable1(idTable, groupcol, sortcol, options);
        }

    };

}();


$.extend( true, $.fn.dataTable.defaults, {
    "searching": true,
    "ordering": true
} );

jQuery(document).ready(function() {

    if ($('#index_table').length) {
        TableDatatablesManaged.init('index_table', null, 1, []);
    }



});


