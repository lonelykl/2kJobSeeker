function validate()
      {
      
         var emailID = document.loginForm.txtEmail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID with @")
            document.loginForm.txtEmail.focus() ;
            return false;
         }
  //       return( true );
         
         if( document.loginForm.txtPassword.value == "" )
         {
            alert( "Please provide your password!" );
            document.loginForm.txtPassword.focus() ;
            return false;
         }
         
         
      }
	  
	  function validatejob()
      {
      
         if( document.createJobForm.jname.value == "" )
         {
            alert( "Please provide job name!" );
            document.createJobForm.jname.focus() ;
            return false;
         }
         
         if( document.createJobForm.address.value == "" )
         {
            alert( "Please provide address!" );
            document.createJobForm.address.focus() ;
            return false;
         }
		 
		 if( document.createJobForm.jid.value == "" )
         {
            alert( "Please provide Job ID!" );
            document.createJobForm.jid.focus() ;
            return false;
         }
		 
		 if( document.createJobForm.description.value == "" )
         {
            alert( "Please provide Description!" );
            document.createJobForm.description.focus() ;
            return false;
         }
		 
		 if( document.createJobForm.jobtype.value == "" )
         {
            alert( "Please provide job type!" );
            document.createJobForm.jobtype.focus() ;
            return false;
         }
		 
		 if( document.createJobForm.pic.value == "" )
         {
            alert( "Please provide name for person in charge!" );
            document.createJobForm.pic.focus() ;
            return false;
         }
		 
		 if( document.createJobForm.contact.value == "" )
         {
            alert( "Please provide contact number!" );
            document.createJobForm.contact.focus() ;
            return false;
         }
         
         if( document.createJobForm.skill.value == "" )
         {
            alert( "Please provide skill!" );
            document.createJobForm.skill.focus() ;
            return false;
         }
		 
      }
	  
	  function validateregister()
      {
      
         if( document.registerForm.txtFirstName.value == "" )
         {
            alert( "Please provide first name!" );
            document.registerForm.txtFirstName.focus() ;
            return false;
         }
         
         if( document.registerForm.txtLastName.value == "" )
         {
            alert( "Please provide last name!" );
            document.registerForm.txtLastName.focus() ;
            return false;
         }
		 
		 if( document.registerForm.txtEmail.value == "" )
         {
            alert( "Please provide email!" );
            document.registerForm.txtEmail.focus() ;
            return false;
         }
		 
		 if( document.registerForm.txtPassword.value == "" )
         {
            alert( "Please provide password!" );
            document.registerForm.txtPassword.focus() ;
            return false;
         }
	  }
	  
	  function validateEmail()
      {
         var emailID = document.loginForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.loginForm.EMail.focus() ;
            return false;
         }
         return( true );
      }