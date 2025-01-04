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


            

            // console.log(response)
            // console.log(res.data)
            // console.log(res.status)

            
            // console.log(response)
            // response
        }
    });
}

// add_employee();