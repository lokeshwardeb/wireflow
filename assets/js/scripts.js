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


            

            // console.log(response)
            // console.log(res.data)
            // console.log(res.status)

            
            // console.log(response)
            // response
        }
    });
}

// add_employee();



// add datatable library to the software for showing the employee data
new DataTable('#employee_info_table');
// hover_table
// $("#employee_info_table").find("tr").addClass("hover_table");

// $(selector).append(content);

// jqtag