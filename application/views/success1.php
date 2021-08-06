<html lang='en'>

<head>
    <title>New Account Created Successfully</title>
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css?v=58c3da5f9e">
    <script type="text/javascript" src="/js/globalScripts.js?v=58c3da5f9e"></script>
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
	
        function submitLogin()
        {
            document.getElementById('artistLoginForm').submit();
        }
        
        function submitEmailProspects()
        {
            document.getElementById('emailProspectsForm').submit();
        }
    
    </script>
    <style>
    
        #parentContainerDiv
        {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
            align-content: flex-start;

            min-height: 800px;
            margin-top: 40px;
        }
    
        #leftDiv
        {
            display: inline-block;
            box-sizing: border-box;
            width: 45%;
            text-align: center;
        }
        
        #rightDiv
        {
            display: inline-block;
            box-sizing: border-box;
            width: 45%;
            text-align: center;
        }
        
        h1, h2
        {
            display: inline-block;
            width: 100%;
            padding-bottom: 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid #999999;
            font-size: 24pt;
            font-family: oswald, arial;
            color: #000000;
        }
        
        #leftDiv p, #rightDiv p
        {
            display: inline-block;
            width: 100%;
            margin-bottom: 20px;
            font-size: 12pt;
            font-family: avenir, arial;
        }
        
        #leftDiv #textNewPassword
        {
            font-size: 14pt;
            font-family: arial;
        }
        
        .inputContainerDiv
        {
            display: inline-block;
            width: 100%;
            margin-bottom: 20px;
        }
        
        label
        {
            display: inline-block;
            box-sizing: border-box;
            width: 100%;
            margin-bottom: 5px;
            font-size: 10pt;
            font-family: avenir, arial;
            text-align: left;
            text-transform: uppercase;
            color: #444444;
        }

        input
        {
            display: inline-block;
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 12pt;
            font-family: arial;
            text-align: left;
        }

        .ghostButton, .ghostButton:link, .ghostButton:active, .ghostButton:visited, .ghostButton:hover
        {
            display: inline-block;
            box-sizing: border-box;
            margin-left: 2px;
            margin-right: 2px;
            text-align: center;
            font-size: 18pt;
            font-family: cabin, oswald, arial;
            text-transform: none;
            border-radius: 0px;
            padding: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-top: 10px;

            color: #FFFFFF;
            border: 1px solid rgba(106,201,157,1.00);
            background-color: rgba(106,201,157,0.80);        
            
            letter-spacing: 1px;
            word-spacing: 2px;
        }

        .ghostButton:hover
        {
            color: #FFFFFF;
            border: 1px solid rgba(106,201,157,1.00);
            background-color: rgba(106,201,157,1.00);
        }        
        

        @media screen and (max-width: 800px)
        {
            #leftDiv, #rightDiv
            {
                width: 100%;
            }
            
            #rightDiv
            {
                margin-top: 80px;
            }
        }
        
    </style>

</head>
<body>
<?php
include("header.php");
?>
<section>
    <div id='parentContainerDiv' class='container'>

        <div id='leftDiv'>

            <form id='artistLoginForm' name='artistLoginForm' method='post' onsubmit="return validatation()" action="<?php echo base_url();?>index.php/Home/proflogin">
                
                <input type='hidden' id='sourcepage' name='sourcepage' value='newartistsuccessful.php'>
                
                <div style='display: inline-block; width: 100%;'>

                    <!-- ERROR DIV -->
                    
                    <div style='display: inline-block; width: 100%;'>
                    
                        <h2>Congratulations!</h2>

                        <p>Your  account has been activated, login to your profile:</p>


                    
                    </div>

                    <div class='inputContainerDiv'>
                        <label for='username'>Username</label>
                        <input type="text" id="username" name="username" value="">
                    </div>

                    <div class='inputContainerDiv'>
                        <label for='password'>Password</label>
                        <input type="password" id="password" name="password">
                    </div>

                    <div class='inputContainerDiv'>
                        <input type="submit"  class='ghostButton' style='font: 20pt arial; font-weight: bold; color: #222222; text-shadow: none;' value="Login">
                    </div>

                </div>
            </form>

        </div>
		
		
        <div id='rightDiv'>
            
            <h2>Invite Your Friends</h2>

            
            <p>If you know of anyone else who may be interested in selling on skillx, simply list their e-mail addresses below, and we will send them an invitation.</p>
            
            <div style='display: inline-block;'>

                    <form id='emailProspectsForm' name='emailProspectsForm' method='post' action='#'>

                        <div class='inputContainerDiv'>
                            <label>E-Mail #1</label>
                            <input type="text" name="prospects[]" value="">
                        </div>

                        <div class='inputContainerDiv'>
                            <label>E-Mail #2</label>
                            <input type="text" name="prospects[]" value="">
                        </div>

                        <div class='inputContainerDiv'>
                            <label>E-Mail #3</label>
                            <input type="text" name="prospects[]" value="">
                        </div>

                        <div class='inputContainerDiv'>
                            <label>E-Mail #4</label>
                            <input type="text" name="prospects[]" value="">
                        </div>

                        <div class='inputContainerDiv'>
                            <label>E-Mail #5</label>
                            <input type="text" name="prospects[]" value="">
                            
                        </div>
                        
                        <div class='inputContainerDiv'>
                            <a class='ghostButton' href='#'>Invite Friends</a>
                        </div>                       
                       
                    </form>



            </div>

            

        </div>
		
		</div>
</section>

<?php
include("footer.php");
?>
</body>
</html>