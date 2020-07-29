<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>        
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-3">
                    <div id="form" style="margin-top:20%; border:1px solid #ccc;padding:60px 20px;border-radius:10px;">
                        <div class="row" style="margin-bottom:10px;">
                            <div class="col-sm-12">
                                <span class="fa fa-user-circle" style="font-size:3em;display:block;text-align:center;color:#000;"></span>
                            </div>
                        </div> 

                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-sm-12">
                                <input type="text" placeholder="Email" class="form-control" style="background:white;" id="reg_email">
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-sm-12">
                                <input type="password" placeholder="Password" class="form-control" id="reg_pass">
                            </div>
                        </div> 
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-sm-12">
                                <button type="button" onclick="validate()" class="btn btn-primary" style="width:100%;font-weight:bold;">SIGN UP</button>
                            </div>

                        </div> 
                        
                        
                        <a href="recover.php">Recover Password</a>
                </div>


            </div>
           
            <div class="col-lg-5"></div>
        
        </div>

    </body>
</html>
