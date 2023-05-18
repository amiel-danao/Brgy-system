function validateForm()
      {
      var email = document.barangay_official.email.value;
      var image = document.barangay_official.brgy_official_image.value;
      if(!validateEmail(email))
        {
          alert("Pls. Enter the valid email address account");
          barangay_official.email.focus();
          return false;
        }

   var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.docx|\.doc|\.xlsx|\.xls|\.ppt|\.pptx|\.pdf)$/i;
          if(!allowedExtensions.exec(image)){
              alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
              brgy_official_image.value = '';
              barangay_official.brgy_official_image.focus();
              return false;
          }

      }

    function validateEmail(email) {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }