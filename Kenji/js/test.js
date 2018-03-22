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
      
         if( document.createJobForm.txtJobName.value == "" )
         {
            alert( "Please provide job name!" );
            document.createJobForm.txtJobName.focus() ;
            return false;
         }
         
         if( document.createJobForm.txtAddress.value == "" )
         {
            alert( "Please provide address!" );
            document.createJobForm.txtAddress.focus() ;
            return false;
         }
		 
		 if( document.createJobForm.txtMaxParticipants.value == "" )
         {
            alert( "Please provide Max Participants!" );
            document.createJobForm.txtMaxParticipants.focus() ;
            return false;
         }
		 
		 if( document.createJobForm.txtDescription.value == "" )
         {
            alert( "Please provide Description!" );
            document.createJobForm.txtDescription.focus() ;
            return false;
         }
		 
		 if( document.createJobForm.txtJobType.value == "" )
         {
            alert( "Please provide job type!" );
            document.createJobForm.txtJobType.focus() ;
            return false;
         }
		 
		 if( document.createJobForm.txtPersonInCharge.value == "" )
         {
            alert( "Please provide name for person in charge!" );
            document.createJobForm.txtPersonInCharge.focus() ;
            return false;
         }
		 
		 if( document.createJobForm.txtContact.value == "" )
         {
            alert( "Please provide contact number!" );
            document.createJobForm.txtContact.focus() ;
            return false;
         }
         
         if( document.createJobForm.txtSkill.value == "" )
         {
            alert( "Please provide skill!" );
            document.createJobForm.txtSkill.focus() ;
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