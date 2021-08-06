<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update Bio</title>
  </head>
  <body>
  <?php include("header5.php"); ?>
    <div class="container" style="margin-top: 100px;">
       <table class="table table-striped">
          <tbody>
             <tr>
			 <h1 class="bg-success text-center font-weight-bold" >Update Bio</h1>
                <td colspan="1">
				 <center>
                   <form class="well form-horizontal" action="<?php echo base_url(); ?>index.php/Home/bio" method="post">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="username" name="username" placeholder="UserName" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						  <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="email"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Birthday</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="birthday" name="birthday" placeholder="Birthday" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Age</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="age" name="age" placeholder="Age" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Latest Degree</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="degree" name="degree" placeholder="Latest Degree" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						  <div class="form-group">
                            <label class="col-md-4 control-label">Phone</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phone" name="phone" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Open for Jobs? </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="status" name="status" placeholder="Available/Unavailable" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						  <div class="form-group">
                            <label class="col-md-4 control-label">Occupation</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="occupation" name="occupation" placeholder="occupation" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						 
						 <div class="form-group">
                            <label class="col-md-4 control-label">Skills</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="skills" name="skills" placeholder="Your skills" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						 
						 <div class="form-group">
                           
                            <div class="col-md-8 inputGroupContainer">
                                 
                               <textarea class="form-control" id="message" name="message" rows="3" placeholder="Write Something about yourself" required="true" ></textarea>
                            </div>
                         </div>
                       
                        
                         <div class="form-group">
                            
                            
							<div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input  value="Update" type="submit"></div>
                            </div>
                         </div>
                      </fieldset>
                   </form>
				    </center>
                </td>
     
             </tr>
          </tbody>
       </table>
    </div>
	
	<?php include("footer.php");?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>