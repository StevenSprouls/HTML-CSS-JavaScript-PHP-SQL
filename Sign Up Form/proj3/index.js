var emptySubmit = false;
var passSubmit = false;
var passPolicySubmit = false;
var emailSubmit = false;
		
	function checkEmpty()
	{
		var username = document.getElementById("username").value;
		var name = document.getElementById("name").value;
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;
		var passwordConfirmation = document.getElementById("password-confirmation").value;
		var errorMessage = "Missing required values:";
		var valid = false;
			
		if(username == "")
		{
			errorMessage += " | Username |";
			valid = true;
		}
		if(name == "")
		{
			errorMessage += " | Name |";
			valid = true;
		}
		if(email == "")
		{
			errorMessage += " | Email Address |";
			valid = true;
		}
		if(password == "")
		{
			errorMessage += " | Password |";
			valid = true;
		}
		if(passwordConfirmation == "")
		{
			errorMessage += " | Password Confirmation |";
			valid = true;
		}
		if(valid == true)
		{
			emptySubmit = false;
			document.getElementById("required-field-error").innerHTML = errorMessage;
		}
		if(valid == false)
		{
			emptySubmit = true;
			errorMessage = "";
			document.getElementById("required-field-error").innerHTML = errorMessage;
		}
		}
		
	function checkPass()
	{
		var password = document.getElementById("password").value;
		var passwordconfirmation = document.getElementById("password-confirmation").value;
		var valid = false;
		var errorMessage;
			
		if(password != passwordconfirmation)
		{
			errorMessage = "Passwords do not match."
			valid = true;
		}
		if(valid == true)
		{
			passSubmit = false;
			document.getElementById("password-mismatch-error").innerHTML = errorMessage;
		}
		if(valid == false)
		{
			passSubmit = true;
			errorMessage = "";
			document.getElementById("password-mismatch-error").innerHTML = errorMessage;
		}
		}
		
	function checkPassPolicy()
	{
		var password = document.getElementById("password").value;
		var upperCase= [A-Z];
		var numbers = [0-9];
		var errorMessage = "Passwords must be at least 8 characters in length, contain one capital letter, and contain one number";
				
		if(password.length >= 8 && password.match(upperCase) && password.match(numbers))
		{
			passPolicySubmit = true;
			errorMessage = "";
			document.getElementById("unmet-password-constraints-error").innerHTML = errorMessage;
		}
		else
		{
			passPolicySubmit = false;
			document.getElementById("unmet-password-constraints-error").innerHTML = errorMessage;
		}
		}
		
	function checkEmail()
	{	
		var email = document.getElementById("email").value;
		var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // xxx@xxx.com format
		var result = re.test(email);
		var errorMessage;
				
		if(result == false)
		{
			emailSubmit = false;
			errorMessage = "Please enter a valid email."
			document.getElementById("invalid-email-error").innerHTML = errorMessage;
		}
		if(result == true)
		{
			emailSubmit = true;
			errorMessage = ""
			document.getElementById("invalid-email-error").innerHTML = errorMessage;
		}
		}
			
	function enableSubmit()
	{	
		if(emptySubmit == true && passSubmit == true && passPolicySubmit == true && emailSubmit == true)
		{
			document.getElementById("submit-btn").disabled = false;
		}
		else
		{
			document.getElementById("submit-btn").disabled = true;
		}
		}
       function thankYou()
       {
       window.alert("Thank you for registering!");
       }