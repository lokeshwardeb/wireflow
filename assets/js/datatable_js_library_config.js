
let emp_table_console  = $("#employee_info_table").html()
console.log(emp_table_console)


$(document).ready(function () {
    $('#employee_info_table').DataTable({
        dom: 'Bfrtip',
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
        // ],

        buttons: [
            {
                extend: 'excelHtml5',
                text: 'Export to Excel',
                exportOptions: {
                    columns: ':not(:last-child)' // Exclude the last column
                }
            },
            {
                extend: 'pdfHtml5',
                text: 'Export to PDF',
                exportOptions: {
                    columns: [0, 1] // Include only the first two columns
                }
            },
            {
                extend: 'csvHtml5',
                text: 'Export to CSV',
                exportOptions: {
                    columns: ':visible' // Export only visible columns
                }
            },
            {
                extend: 'copyHtml5',
                text: 'Copy',
                exportOptions: {
                    columns: ':visible' // Export only visible columns
                }
            }
        ],

        initComplete: function () {
            // Add the "btn" class to all DataTables buttons
            $('.dt-button').addClass('btn btn-outline-primary '); // Replace with any Bootstrap button class
        }
    });
});


