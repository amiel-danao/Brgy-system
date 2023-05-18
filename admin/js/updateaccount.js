 function updatevalidation()
    {
    var password = document.forms["updateaccount"]["updatepassword"].value;
    if( password.length < 7 || password == null || password == "")
        {
          alert("Pls. Provide 6 characters or higher characters Password and make sure its unique");
          account.updatepassword.focus();
          return false;
        }
    }