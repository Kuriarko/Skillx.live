<html>
<head>
    <title>Skillx Login</title>
    <meta name='description' content='Login to your control panel.'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='/css/stylesheet.css?v=58c3da5f9e'>
    <link rel='canonical' href='https://fineartamerica.com/loginchoosetype.php'>
    <script type='text/javascript' src='/js/globalScripts.js?v=58c3da5f9e' async></script>
    <style>

        #maindiv
        {
            display: inline-block;
            width: 95%;
            max-width: 300px;
            min-width: 240px;
        }

        .buttonlogin, .buttonlogin:active, .buttonlogin:link, .buttonlogin:visited
        {
            display: inline-block;
            width: 100%;
            padding-top: 20px;
            padding-bottom: 20px;
            margin-top: 30px;
            border-radius: 2px;
            box-shadow: 0px 5px 8px 0px #EEEEEE;
            vertical-align: middle;
            font-size: 14pt;
            font-family: montserratregular, oswald, arial;
            font-weight: normal;
            text-decoration: none;
            letter-spacing: 0px;
            color: #FFFFFF;
            text-shadow: 2px 2px 5px #222222;
            background-color: #374353;
            border: none;
            text-transform: uppercase;
            word-spacing: 2px;

        }

        .buttonlogin:hover
        {
            background-color: #444444;
            border: none;
            text-shadow: none;
        }
  .arrange{
	  margin-top: 100px;
  }

    </style>
</head>
<body >
<?php
include("header.php");
?>
<section align="center" class="arrange">
  <div class='container' style='min-height: 800px; padding-top: 25px; padding-bottom: 25px;'>

        <div id='maindiv'>

            <div style='display: inline-block; width: 100%;'>
<a class='buttonlogin' href='<?php echo base_url();?>index.php/Home/professionals'>  Professionals Login</a>
<a class='buttonlogin' href='<?php echo base_url();?>index.php/Home/professionals1'>Job Seekers Login</a>
<a class='buttonlogin' href='<?php echo base_url();?>index.php/Home/professionals2'>Companies Login</a>
</div>

        </div>

    </div>

</section>
<?php
include("footer.php");
?>
</body>
</html>