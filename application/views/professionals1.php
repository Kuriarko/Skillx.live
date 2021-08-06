<html lang='en'>
<head>

        <title> Login</title>
        <meta name="description" content="Login as an artist and edit your profile.">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" type="text/css" href="/css/stylesheet.css?v=58c3da5f9e">
        <link rel='canonical' href='https://fineartamerica.com/loginartist.php'>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script type='text/javascript' src='/js/globalScripts.js?v=58c3da5f9e'></script>
        <script type='text/javascript'>
             
			 function validatation()
		{
			var email = document.getElementById("email");
			var password = document.getElementById("password");
			
			if(email.value.trim()=="")
			{
				alert("please enter email");
				email.style.border = "solid 3px red";
				return false;
			}
			else if(password.value.trim()=="")
			{
				alert("please enter password");
				password.style.border = "solid 3px red";
				return false;
			}
			else
			{
				true;
			}
		}
	
            function newHttpReq()
            {
                var newRequest = null;

                try
                {
                    newRequest = new XMLHttpRequest();
                }
                catch(trymicrosoft)
                {
                    try
                    {
                        newRequest = new ActiveXObject("Msxml2.XMLHTTP");
                    }
                    catch(othermicrosoft)
                    {
                        try
                        {
                            newRequest = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        catch(failed)
                        {
                            newRequest = null;
                        }
                    }
                }

                return newRequest;

            }

            var httpobject = [];
            httpobject[-1] = newHttpReq();

            var requestcount = 0;

            if(!httpobject[-1])
            {
                alert("Error Initializing XMLHttpRequest!");
            }

            function storescreenwidth()
            {

                var localvalue = requestcount;
                var poststring = "screenwidth=" + screen.width;

                httpobject[localvalue] = newHttpReq();
                httpobject[localvalue].onreadystatechange = function(){

                    try
                    {
                        if(httpobject[localvalue].readyState == 4)
                        {
                        }

                        if(httpobject[localvalue].status == 200)
                        {
                        }
                    }
                    catch (e)
                    {
                        return;
                    }

                    if(httpobject[localvalue].readyState == 4 && httpobject[localvalue].status == 200)
                    {
                        //alert(httpobject[localvalue].responseText);
                    }


                };

                var url = 'queries/querystorescreenwidth.php';

                httpobject[localvalue].open('post',url,true);
                httpobject[localvalue].setRequestHeader('content-type','application/x-www-form-urlencoded');
                httpobject[localvalue].send(poststring);

                requestcount += 1;

            }

            storescreenwidth();

            function checkforenter(theEvent)
            {
                if (theEvent == null)
                {
                    theEvent = window.event;
                }

                if (theEvent.target)
                {
                    theTarget = theEvent.target;
                }
                else
                {
                    theTarget = theEvent.srcElement;
                }

                if (theEvent.keyCode == 13)
                {
                    document.getElementById('loginartist').submit();
                }
            }


        </script>

        <style>
           .arrange{
			   margin-top: 100px;
		   }
        </style>

    </head>
<body>
<?php 
include("header.php");

?>
<section align="center" class="arrange">
   <div class='container' style='min-height: 500px; padding-top: 40px; padding-bottom: 25px;'>

            <div style="display: inline-block; width: 95%; min-width: 280px; max-width: 438px;">

                <p style='display: inline-block; font-size: 40pt; font-family: oswald, arial; color: #444444;'>Job Seekers Login</p>

                <form id="loginartist" name="loginartist" method="post" onsubmit="return validatation()" action="<?php echo base_url();?>index.php/Home/learnlogin" style='display: inline-block; width: 100%;'>

                    <input type='hidden' id='sourcepage' name='sourcepage' value='loginartist.php'>
                    <input type='hidden' id='targetpage' name='targetpage' value=''>

                    <div style='display: inline-block; width: 100%;'>

                        
                        <div style="display: inline-block; width: 100%; padding-top: 10px;">
                            <p style="display: inline-block; width: 75px; padding-top: 1px; font: 10pt arial; text-align: left;">E-Mail:</p>
                            <input size="20" style="display: inline-block; border: 1px solid #444444; font: 16px arial; width: 180px; background-color: #FFFFFF;" type="email" id="email" name="email" value="">
                        </div>

                        <div style="display: inline-block; width: 100%; padding-top: 10px;">
                            <p style="display: inline-block;  width: 75px; padding-top: 1px; font: 10pt arial; text-align: left;">Password:</p>
                            <input onKeyUp="javascript: checkforenter(event);" style="display: inline-block;  border: 1px solid #444444; font: 16px arial; width: 180px; background-color: #FFFFFF;" type="password" id="password" name="password" size="20">
                        </div>

                        <div style="display: inline-block; width: 100%; padding-top: 25px;">

                        <input type="submit" class="btn btn-primary" value="login">
                        </div>

                        <div style="display: inline-block; width: 100%; padding-top: 35px;">
                            <p style="float: left; width: 100%;"><a href="#" style="font: 10pt arial; text-decoration: underline;">Forgot Your Password?</a></p>
                            <p style="float: left; width: 100%; padding-top: 5px;"><a href="<?php echo base_url();?>index.php/Home/skilllearn" style="font: 10pt arial; text-decoration: underline;">Sign Up For an Account</p>
                            <p style="float: left; width: 100%; padding-top: 5px;"><a href="#" style="font: 10pt arial; text-decoration: underline;">Why Join?</a></p>
                        </div>
                    </div>

                </form>

            </div>


        </div>

</section>

<?php 
include("footer.php");

?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>