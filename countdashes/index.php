<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript" />    
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="container">
        
        <div class="container-fluid">
            <form action="" method="post" class="register-form" id="register-form" enctype="multipart/form-data"> 
                <div class="row">      
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label for="strNumber">Please enter your string</label>
                        <input name="strNumber" class="form-control" type="text" id="strNumber">    
                    </div>            
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <button class="btn btn-default regbutton">Submit</button>
                    </div>
                </div>    
            </form>
            
        </div>
        <div class="row">
            <div class="container output "></div>  
        </div>
        </div>
        
    </body>
</html>
