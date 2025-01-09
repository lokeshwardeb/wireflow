<<<<<<< HEAD

console.log("scripts connected");


function add_employee(e){
    e.preventDefault(); 

    let emp_name = $("[name='add_employee_name']");
    let emp_age = $("[name='add_employee_age']");
    let emp_mobile_no = $("[name='add_employee_mobile_no']");
    let emp_address = $("[name='add_employee_address']");
    let emp_job_role = $("[name='add_job_role']");
    let emp_salary_structure = $("[name='add_employee_salary_structure']");
    let emp_assigned_shifts = $("[name='add_employee_assigned_shifts']");

    // let emp_name = $("[name='add_employee_name']").val();
    // let emp_age = $("[name='add_employee_age']").val();
    // let emp_mobile_no = $("[name='add_employee_mobile_no']").val();
    // let emp_address = $("[name='add_employee_address']").val();
    // let emp_job_role = $("[name='add_job_role']").val();
    // let emp_salary_structure = $("[name='add_employee_salary_structure']").val();
    // let emp_assigned_shifts = $("[name='add_employee_assigned_shifts']").val();

    console.log(emp_name)
    console.log(emp_age)
    console.log(emp_mobile_no)
    console.log(emp_address)
    console.log(emp_job_role)
    console.log(emp_salary_structure)
    console.log(emp_assigned_shifts)

    $.ajax({
        type: "POST",
        url: "/views/pages/server/add_employee.php",
        data: {
            emp_name : emp_name.val(),
            emp_age : emp_age.val(),
            emp_mobile_no : emp_mobile_no.val(),
            emp_address : emp_address.val(),
            emp_job_role : emp_job_role.val(),
            emp_salary_structure : emp_salary_structure.val(),
            emp_assigned_shifts : emp_assigned_shifts.val(),
        },
        // dataType: "dataType",
        success: function (response) {

            // success_alert(response)

            let res = JSON.parse(response);

            if(res.status == "success"){
                // that means the status is success


                emp_name.val("")
                emp_age.val("")
                emp_mobile_no.val("")
                emp_address.val("")
                emp_job_role.val("")
                emp_salary_structure.val("")
                emp_assigned_shifts.val("")
                

                success_alert("Success !", res.msg);
                
            }

            if(res.status == "error"){
                // that means something error has been happened when adding the employe info
                danger_alert("Error !", res.msg)
            }


=======
function add_employee(e){
    e.preventDefault(); 

    let emp_name = $("[name='add_employee_name']").val();
    let emp_age = $("[name='add_employee_age']").val();

    console.log(emp_name)

    $.ajax({
        type: "POST",
        url: "/views/pages/server/add_employee.php",
        data: {
            emp_name : emp_name,
            emp_age : emp_age,
        },
        // dataType: "dataType",
        success: function (response) {
            
            // success_alert(response)

            let res = JSON.parse(response);

            if(res.status == "success"){
                // that means the status is success
                success_alert("Success !", res.msg);
                
            }

            if(res.status == "error"){
                // that means something error has been happened when adding the employe info
                danger_alert("Error !", res.msg)
            }


>>>>>>> 32517b3 (added all the features and functionalities, added ajax and connected it with the php backend for the add employeers features and functionalities. Now working with the add employeers features and functionalities to add and complete all the employeers data and information to the database.)
            

            // console.log(response)
            // console.log(res.data)
            // console.log(res.status)

            
            // console.log(response)
            // response
        }
    });
}

<<<<<<< HEAD
function update_employee(e){
    e.preventDefault(); 

    let emp_id = $("[name='emp_id']");
    let emp_name = $("[name='update_employee_name']");
    let emp_age = $("[name='update_employee_age']");
    let emp_mobile_no = $("[name='update_employee_mobile_no']");
    let emp_address = $("[name='update_employee_address']");
    let emp_job_role = $("[name='update_job_role']");
    let emp_salary_structure = $("[name='update_employee_salary_structure']");
    let emp_assigned_shifts = $("[name='update_employee_assigned_shifts']");

    // let emp_name = $("[name='add_employee_name']").val();
    // let emp_age = $("[name='add_employee_age']").val();
    // let emp_mobile_no = $("[name='add_employee_mobile_no']").val();
    // let emp_address = $("[name='add_employee_address']").val();
    // let emp_job_role = $("[name='add_job_role']").val();
    // let emp_salary_structure = $("[name='add_employee_salary_structure']").val();
    // let emp_assigned_shifts = $("[name='add_employee_assigned_shifts']").val();

    console.log(emp_name)
    console.log(emp_age)
    console.log(emp_mobile_no)
    console.log(emp_address)
    console.log(emp_job_role)
    console.log(emp_salary_structure)
    console.log(emp_assigned_shifts)

    $.ajax({
        type: "POST",
        url: "/views/pages/server/update_employee.php",
        data: {
            emp_id : emp_id.val(),
            emp_name : emp_name.val(),
            emp_age : emp_age.val(),
            emp_mobile_no : emp_mobile_no.val(),
            emp_address : emp_address.val(),
            emp_job_role : emp_job_role.val(),
            emp_salary_structure : emp_salary_structure.val(),
            emp_assigned_shifts : emp_assigned_shifts.val(),
        },
        // dataType: "dataType",
        success: function (response) {

            // success_alert(response)

            let res = JSON.parse(response);

            if(res.status == "success"){
                // that means the status is success


                // emp_name.val("")
                // emp_age.val("")
                // emp_mobile_no.val("")
                // emp_address.val("")
                // emp_job_role.val("")
                // emp_salary_structure.val("")
                // emp_assigned_shifts.val("")
                

                success_alert("Success !", res.msg);
                
            }

            if(res.status == "error"){
                // that means something error has been happened when adding the employe info
                danger_alert("Error !", res.msg)
            }


            

            // console.log(response)
            // console.log(res.data)
            // console.log(res.status)

            
            // console.log(response)
            // response
        },

        error: function(response){
            danger_alert("Error", response);
        }

    });
}



// add admin user 
function add_admin_user(e){
    e.preventDefault(); 

    let admin_name = $("[name='add_admin_user_name']");
    let admin_email = $("[name='add_admin_user_email']");
    let admin_password = $("[name='add_admin_user_password']");
    let admin_cpassword = $("[name='add_admin_user_cpassword']");
    

    console.log(admin_name.val())


    $.ajax({
        type: "POST",
        url: "/views/pages/server/add_admin_user.php",
        data: {
            add_user_admin_btn: true,
            admin_name : admin_name.val(),
            admin_email : admin_email.val(),
            admin_password : admin_password.val(),
            admin_cpassword : admin_cpassword.val(),
            
        },
        // dataType: "dataType",
        success: function (response) {

            // success_alert(response)

            let res = JSON.parse(response);

            if(res.status == "success"){
                // that means the status is success


                admin_name.val("")
                admin_email.val("")
                admin_password.val("")
                admin_cpassword.val("")
                
                

                success_alert("Success !", res.msg);
                
            }

            if(res.status == "error"){
                // that means something error has been happened when adding the employe info
                danger_alert("Error !", res.msg)
            }


            

            // console.log(response)
            // console.log(res.data)
            // console.log(res.status)

            
            // console.log(response)
            // response
        }
    });
}

// add_employee();



// $(document).ready(function () {
//     $('#employee_info_table').DataTable({
//         dom: 'Bfrtip', // Enables the layout for buttons
//         buttons: [
//             'copy', 'csv', 'excel', 'pdf', 'print' // Buttons to include
//         ],
//         responsive: true, // Optional: make the table responsive
//         paging: true,     // Enable pagination
//         ordering: true,   // Enable column ordering
//         info: true        // Enable table information display
//     });
// });




// add datatable library to the software for showing the employee data
// new DataTable('#employee_info_table');

// $(document).ready(function () {
//     $('#employee_info_table').DataTable({
//         dom: 'Bfrtip', // Layout configuration for buttons
//         buttons: [
//             'copy', 'csv', 'excel', 'pdf', 'print' // Available buttons
//         ]
//     });
// });


// new DataTable('#employee_info_table', {
//     layout: {
//         topStart: {
//             buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
//         }
//     }
// });


// new DataTable('#employee_info_table', {
//     layout: {
//         topStart: {
//             buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
//         }
//     }
// });
// hover_table
// $("#employee_info_table").find("tr").addClass("hover_table");

// $(selector).append(content);

// jqtag


=======
// add_employee();
>>>>>>> 32517b3 (added all the features and functionalities, added ajax and connected it with the php backend for the add employeers features and functionalities. Now working with the add employeers features and functionalities to add and complete all the employeers data and information to the database.)
