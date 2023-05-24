
// function validateForms()
// {
//      // var email = document.barangay_official.email.value;
     
//       // var email=document.forms["barangay_official"]["email"].value;
//       // if(!validateEmail(email))
//       //   {
//       //     alert("Pls. Enter the valid email address account");
//       //     barangay_official.email.focus();
//       //     return false;
//       //   }

//       // var cn = document.forms["barangay_official"]["contactno"].value;
//       // if (isNaN(cn.value))
//       //   {
//       //       alert("You have invalid input in contact number");
//       //       document.cn.focus();
//       //       return false;
//       //   }
// }


function validateimage()
{

    // var image = document.barangay_officials.new_official_image.value;
      var image=document.forms["barangay_officials"]["new_official_image"].value;
      var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
      if(!allowedExtensions.exec(image))
      {
          alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
          brgy_official_image.value = '';
          barangay_official.brgy_official_image.focus();
          return false;
      }
}

     
  function validatefile()
    {
      // var fileInput = document.getElementById('report_file');
      var fileInput = document.forms["formfile"]["report_file"].value;
      var filePath = fileInput.value;
      var allowedExtensions = /(\.docx|\.doc|\.xlsx|\.xls|\.ppt|\.pptx|\.pdf)$/i;
        if(!allowedExtensions.exec(filePath))
        {
            alert('Please upload file having extensions .docx/.doc/.xlsx/.xls only.');
            formfile.value = '';
            formfile.formfile.focus();
            return false;
        }
    }
      

  function validateEmail(email) 
    {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }