
<!DOCTYPE html>
<html>
<head>
 <link rel='stylesheet' type='text/css' href='/css/stylesheet.css?v=0504d77545'>
 <link rel='stylesheet' type='text/css' href='/css/controlpanel/controlPanel.css?v=0504d775451598250335'>
 <script type='text/javascript' src='/js/globalScripts.js?timestamp=1598250335'></script>
</head>
<body style='background-image: none; background-color: #FFFFFF; '>
 <?php include("header3.php"); ?>

 <div class='container' style="margin-top: 140px;">
        
            <div style='display: inline-block; width: 100%; min-width: 920px; max-width: 920px; min-height: 750px; overflow: hidden; padding-top: 25px; padding-bottom: 100px; text-align: left;'>
        
                <div id='headerBehindTheScenesDiv' style='display: inline-block; width: 100%; overflow: hidden; margin-bottom: 0px;'>
<div style='display: inline-block; width: 100%; padding-bottom: 8px; border-bottom: 2px solid #999999;'>
<h1 style='display: inline-block; font-size: 24pt; font-family: cabin, oswald, arial; font-weight: normal; color: #444444;'>Upload Your Skill Images</h1>
<a class='button' href='<?php echo base_url();?>index.php/Home/home' style='float: right; margin-right: 0px; margin-top: 5px;'><span>Return to profile dashboard</span></a>
</div>
<div style='display: inline-block; width: 100%; padding-top: 5px; padding-bottom: 10px;'>
<p style='float: left; font: 9pt arial; color: #444444;'><a href='#' style='font: inherit; color: inherit; text-decoration: inherit;'>Skill Images</a></p>
<p style='float: left; font: 9pt arial; color: #444444;'>&nbsp;&nbsp;|&nbsp;&nbsp;</p>
<p style='float: left; font: 9pt arial; color: #444444;'><a href='#' style='font: inherit; color: inherit; text-decoration: inherit;'>Behind the Scenes</a></p>
</div>
</div>
        
                <div id='templateHeaderDiv' data-attribute-has-buttons='0'>

                    <p id='templateTitle' style='display: none;'>Profile Picture</p>

                    
                </div>        
        
                
<style>

</style>

<script type='text/javascript'>

function validateform()
{

    document.updateform.submit();

}
</script>



<div name='includediv' id='includediv' style='float: left; width: 100%;'>


        <div style='float: left; width: 100%; padding-top: 10px;'>
		
		
<?php echo $error;?> 
      <?php echo form_open_multipart('Home/do_upload');?>
	  

            <form style="float: left; width: 100%;" enctype="multipart/form-data" name="updateform" method="post" action="<?php echo base_url();?>index.php/Home/do_upload">

                <input type="hidden" name="MAX_FILE_SIZE" value="15000000">

                <p style='display: inline-block; width: 100%; font: 14pt arial; color: #444444;'>Image:</p><div style='display: inline-block; width: 100%; padding-top: 15px;'>
<input style='display: inline-block; vertical-align: middle; width: 200px; border: 1px solid #AAAAAA; font: 10pt arial;' type='file' id='userfile' name='userfile'><span><input type="submit" style='display: inline-block; vertical-align: middle; margin-left: 10px;' value="upload"></span></div>
<div style='float: left; width: 100%; padding-top: 15px;'><p style='float: left; width: 100%; font: 10pt arial;'>Allowable File Types: .jpg</p><p style='float: left; width: 100%; font: 10pt arial;'>Maximum File Size: 10.0 MB</p><p style='float: left; width: 100%; font: 10pt arial;'>Maximum Allowed Pixel Dimensions: 1024 pixels x 768 pixels </p></div>
            </form>

        </div>

    </div>        
            </div>
        
        </div>
 <?php include("footer.php"); ?>

</body>
</html>