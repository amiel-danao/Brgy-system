
function validateForms()
{
      /*var email = document.barangay_official.email.value;v*/
      var email=document.forms["barangay_official"]["email"].value;
      if(!validateEmail(email))
        {
          alert("Pls. Enter the valid email address account");
          /* email.value ="";
           email.value = null; */
          document.barangay_official.email.focus();
          return false;
        }

      var cn = document.forms["barangay_official"]["contactno"].value;
      var numbers = /^[0-9]+$/;
      if (isNaN(cn))
        {
            alert("You have invalid input in contact number");
            document.barangay_official.contactno.focus();
            return false;
        }
      if( cn.length < 11)
        {
          alert("Pls. Provide Valid Contact Number with 11 Digits Ex: 0999 999 9999");
          document.barangay_official.contactno.focus();
          return false;
        }
        /*  vommm */
}


function validateimage()
{

    /*var image = document.barangay_officials.new_official_image.value; */
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
        /*var fileInput = document.getElementById('report_file');*/
        var fileInput= document.forms["formfile"]["report_file"].value;
        var filePath = fileInput.value;
        var allowedFiles = [".doc", ".docx", ".pdf"];
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        var allowedExtensions = /(\.docx|\.doc|\.xlsx|\.xls|\.ppt|\.pptx|\.pdf)$/i;
          /* if(allowedExtensions.exec(filePath)) */
           if (!regex.test(fileInput.value.toLowerCase()))
          {
              alert('Please upload file having extensions .docx/.doc/.xlsx/.xls/.pptx/.pdf only.');
              return false;
              formfile.report_file.focus();
  
          }
      }
      
      
      /* var fileInput= document.forms["formfile"]["report_file"].value;
       function checkFile(fileInput) {
         var extension = fileInput.substr((file.lastIndexOf('.') +1));
         if (!/(pdf|zip|doc)$/ig.test(extension)) {
           alert("Invalid file type: "+extension+".  Please use DOC, PDF or Zip.");
           $("#file").val("");
         }
       }*/

    function validatcontact(cn)
    {
        var num = new RegExp('^[0-9]$');
        return num.test(cn);
    }

    function validateEmail(email) 
    {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }