/*
 *  Document   : tablesDatatables.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Tables Datatables page
 */

var TablesDatatables = function() {

    return {
        init: function() {
            /* Initialize Bootstrap Datatables Integration */
            App.datatables();

            /* Initialize Datatables */
            $('#doctors-datatable').dataTable({
                "aoColumnDefs": [
                { // Nombre
                    "aTargets": [0],
                    "bSearchable": true,
                    "bSortable": true
                },
                { // Telefono
                    "aTargets": [1],
                    "bSearchable": true,
                    "bSortable": false
                },
                { // Email
                    "aTargets": [2],
                    "bSearchable": true,
                    "bSortable": true
                },
                { // Sitio Web
                    "aTargets": [3],
                    "bSearchable": true,
                    "bSortable": false
                },
                { // Comentarios
                    "aTargets": [4],
                    "bSearchable": true,
                    "bSortable": false
                },
                { // Especialidades
                    "aTargets": [5],
                    "bSearchable": true,
                    "bSortable": false
                },
                { // Fotografias
                    "aTargets": [6],
                    "bSearchable": false,
                    "bSortable": false
                },
                 ],
                "iDisplayLength": 10,
                "aLengthMenu": [[10, 20, 30, -1], [10, 20, 30, "All"]]
            });

            /* Add placeholder attribute to the search input */
            $('.dataTables_filter input').attr('placeholder', 'Buscar...');
        }
    };
}();