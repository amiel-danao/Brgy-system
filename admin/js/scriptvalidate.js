
function validateForms()
{
      // var email = document.barangay_official.email.value;
      var email=document.forms["barangay_official"]["email"].value;
    
      if(!validateEmail(email))
        {
          alert("Pls. Enter the valid email address account");
          return false;
          email.value ="";
          email.value = null;
          barangay_official.email.focus();
        }

      var cn = document.forms["barangay_official"]["contactno"].value;
      if (isNaN(cn.value))
        {
            alert("You have invalid input in contact number");
            document.cn.focus();
            return false;
        }
}


function validateimage()
{

    // var image = document.barangay_officials.new_official_image.value;
      var image= document.forms["barangay_officials"]["new_official_image"].value;
var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
      if(!allowedExtensions.exec(image))
      {
          alert('You upload an invalid file. Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
          return false;
          new_official_image.value = '';
          new_official_image.value = null;
          barangay_official.new_official_image.focus();
         
      }
}

    
      function validatefile()
      {
        // var fileInput = document.getElementById('report_file');
        var fileInput= document.forms["formfile"]["report_file"].value;
        var filePath = fileInput.value;
        var allowedFiles = [".doc", ".docx", ".pdf"];
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        var allowedExtensions = /(\.docx|\.doc|\.xlsx|\.xls|\.ppt|\.pptx|\.pdf)$/i;
          // if(allowedExtensions.exec(filePath))
           if (!regex.test(fileInput.value.toLowerCase()))
          {
              alert('Please upload file having extensions .docx/.doc/.xlsx/.xls/.pptx/.pdf only.');
              return false;
              formfile.report_file.focus();
  
          }
      }
      
      
      // var fileInput= document.forms["formfile"]["report_file"].value;
      // function checkFile(fileInput) {
      //   var extension = fileInput.substr((file.lastIndexOf('.') +1));
      //   if (!/(pdf|zip|doc)$/ig.test(extension)) {
      //     alert("Invalid file type: "+extension+".  Please use DOC, PDF or Zip.");
      //     $("#file").val("");
      //   }
      // }


    function validateEmail(email) 
    {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }