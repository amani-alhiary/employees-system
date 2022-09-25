

  function IsEmpty() {
    if (document.forms['add_employee'].name.value === "") {
        document.getElementById("name").style.borderBlockColor="red"
        document.getElementById("nameerror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The name field is required.';
    //   return false;
        let name=document.forms['add_employee'].name.value
    }
    if (document.forms['add_employee'].address.value === "") {
      document.getElementById("address").style.borderBlockColor="red"
      document.getElementById("addresserror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The Address field is required.';
      let address=document.forms['add_employee'].address.value 
   
  }

    if (document.forms['add_employee'].address.value === "") {
        document.getElementById("address").style.borderBlockColor="red"
        document.getElementById("salaryerror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The salary field is required.';
    //   return false;
    }
    if (document.forms['add_employee'].salary.value === "") {
      document.getElementById("salary").style.borderBlockColor="red"
      document.getElementById("salaryerror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The salry field is required.';
  //   return false;
      let salary=document.forms['add_employee'].salary.value
  }


  }