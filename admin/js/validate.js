
function validation(){

    var username = document.forms["account"]["userusername"].value;
    if (username.length < 10 || username == null || username == "")
    {
      alert("Pls. Provide 10 characters or higher length Username");
      account.userusername.focus();
      return false;
    }
    
    if(!checkusername(username))
      { 
        alert("Username must contain only letters, numbers and underscores. Please try again"); 
        account.userusername.focus();
        return false;
      }

    /*var accountid = document.accountcreation.accountid.value;
    var passworduser = document.accountcreation.passworduser.value;
    var pass = document.getElementById('#passworduser').value;
    var password = document.account.passworduser.value;*/
    var password = document.forms["account"]["passworduser"].value;
    if( password.length < 8 || password === null )
      {
        alert("Pls. Provide 8 characters or higher characters Password and make sure its Strong");
        account.passworduser.focus();
        return false;
      }
    if(!checkpass(password))
      {
        alert("Pls. Provide Password Have contain number, One uppercase Letter and One lowercase Letter.");
        account.passworduser.focus();
        return false;
      }

    var contact = document.forms["account"]["contactno"].value;

    if( contact.length < 11)
      {
        alert("Pls. Provide Valid Contact Number with 11 Digits Ex: 0999 999 9999");
        account.contactno.focus();
        return false;
      }

    var email=document.forms["account"]["emailuser"].value;
    if(!validateEmail(email))
        {
          alert("Pls. Enter the valid Email Address account");
          account.emailuser.focus();
          return false;
        }


}
    function checkusername(username)
    {
      var retest = /^\w+$/; 
      return retest.test(username);
    }

   function validateEmail(email) 
    {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }

    function checkpass(password)
    {
      var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
      return re.test(password);
    }












/* function updatevalidation()
     {
     var password = document.forms["updateaccount"]["updatepassword"].value;
     if( password.length < 7 || password == null )
         {
           alert("Pls. Provide 6 characters or higher characters Password and make sure its Strong");
           account.updatepassword.focus();
           return false;
         }
     }*/