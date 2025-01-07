
<<<<<<< HEAD
let emp_table_console  = $("#datatable_info_table").html()
=======
let emp_table_console  = $("#employee_info_table").html()
>>>>>>> 9bfaea7 (added datatables with file export features successfully, now working with the all other features)
console.log(emp_table_console)


$(document).ready(function () {
<<<<<<< HEAD
    $('#datatable_info_table').DataTable({
        // dom: 'Bfrtip',
        // dom: 'lBfrtip',
        dom: 'Bflrtip',
=======
    $('#employee_info_table').DataTable({
        dom: 'Bfrtip',
>>>>>>> 9bfaea7 (added datatables with file export features successfully, now working with the all other features)
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
        // ],

<<<<<<< HEAD
        lengthMenu: [5, 10, 25, 50, 100], // Options for number of entries per page
        pageLength: 10, // Default number of entries per page

=======
>>>>>>> 9bfaea7 (added datatables with file export features successfully, now working with the all other features)
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
<<<<<<< HEAD
                    columns: ':not(:last-child)' // Exclude the last column

                    // columns: [0, 1] // Include only the first two columns
=======
                    columns: [0, 1] // Include only the first two columns
>>>>>>> 9bfaea7 (added datatables with file export features successfully, now working with the all other features)
                }
            },
            {
                extend: 'csvHtml5',
                text: 'Export to CSV',
                exportOptions: {
<<<<<<< HEAD
                    columns: ':not(:last-child)' // Exclude the last column

                    // columns: ':visible' // Export only visible columns
=======
                    columns: ':visible' // Export only visible columns
>>>>>>> 9bfaea7 (added datatables with file export features successfully, now working with the all other features)
                }
            },
            {
                extend: 'copyHtml5',
                text: 'Copy',
                exportOptions: {
<<<<<<< HEAD
                    columns: ':not(:last-child)' // Exclude the last column

                    // columns: ':visible' // Export only visible columns
=======
                    columns: ':visible' // Export only visible columns
>>>>>>> 9bfaea7 (added datatables with file export features successfully, now working with the all other features)
                }
            }
        ],

        initComplete: function () {
            // Add the "btn" class to all DataTables buttons
            $('.dt-button').addClass('btn btn-outline-primary '); // Replace with any Bootstrap button class
<<<<<<< HEAD
            $('.dt-search').addClass('mb-4 mt-4 '); // Replace with any Bootstrap button class
            $('.dt-paging').addClass('mb-4 mt-4 '); // Replace with any Bootstrap button class
            $('.dt-length').addClass('mb-4 '); // Replace with any Bootstrap button class
=======
>>>>>>> 9bfaea7 (added datatables with file export features successfully, now working with the all other features)
        }
    });
});


