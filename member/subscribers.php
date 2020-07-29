<?php
//require 'inc.php';
//session_start();
//$_SESSION['admin_id']=1;
////if(!isset($_SESSION['email'])){
////    header("location:../index.php");
////}
//$query = "select * from properties";
//$result = mysqli_query($link,$query);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">         
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../jquery-ui-1.12.1/jquery-ui.min.css" />
        <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>         
        <title></title>
        <style>
            #nav{
                background: #000;
                padding: 0px;
                height:800px;
                /*overflow-y: auto;*/
            } 
            #content{
                height:800px;
                /*overflow-y: auto;*/
            }
           #optBtn{
                border: none;
                padding: 0px;
                background: none !important;
                display: none;
                color: #337AB7;
            }
            #close{
                display: none;
            }
            .input-group i{
                /*color:#337AB7*/
                color: #000;
            }
            .input-group-addon{
                /*background: #000;*/
            }
            @media screen and (max-width:960px){
                #nav{
                    position: absolute;
                    z-index: 10;
                    left: -50%;
                } 
                #btnCon{
                    /*border-bottom: 1px solid #ccc;*/
                    padding: 10px;
                }
                #optBtn{
                    display: block;
                } 
                #close{
                    color:#fff;
                    display: block;
                    padding: 10px;
                    text-align: right;
                    cursor: pointer;
                }
            }            
        </style>
        <script>
            function setPage(){
                width =screen.width;
                if(width<768){
                    document.getElementById('optBtn').style.display="block";
                    document.getElementById('menu').style.display="none";
                }else{
                    document.getElementById('optBtn').style.display="none";
                    document.getElementById('menu').style.left="0%";
                }
            }
            
            function showMenu(){
                    document.getElementById('nav').style.left="0%";                
            }
            function closeMenu(){
                    document.getElementById('nav').style.left="-50%";                
            }  
            
//            function sizing(){
//                document.getElementById('nav').style.height=screen.availHeight+"px";
//                document.getElementById('content').style.height=screen.availHeight+"px";
//            }
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2" id="nav">
                    <ul class="nav nav-pills nav-stacked" id="menu">
                        <span class="fa fa-times" id="close" onclick="closeMenu()"></span>                        
                        <h3 style="color:white;text-indent:5px;margin-bottom: 40px"><span class="fa fa-user-circle-o"></span> <span style="font-size:12px;"><?php // echo $_SESSION['firstname']; ?></span></h3>                                                
                        <li><a href="dashboard.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                        <li class="active"><a href="subscribers.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-users"></span> Subscribers</a></li>
                        <li><a href="allmessages.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-envelope"></span> Messages Request</a></li>
                        <li><a href="logout.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-arrow-circle-o-left"></span> Logout</a></li>
                    </ul>  
                    
                </div>
                
                <div class="col-sm-10" id="content">
                    <div class="row">
                        <div class="col-sm-8" id="btnCon">
                            <button class="fa fa-bars" id="optBtn" onclick="showMenu()"></button>
                        </div>
                    </div>
                    
                    <div class="row" style="background: #fff;">
                        <div class="col-sm-12">
                            <div class="row" style="padding:15px;border-bottom:1px solid #ccc;box-shadow:0px 4px 4px #ccc; ">
                                <div class="col-sm-8"><h4 style="font-weight:bold">Estate Manager</h4></div>
                                <!--<div class="col-sm-1"><h4><span class="fa fa-envelope"></span></h4></div>-->
                                <div class="col-sm-3" style="color: #0062cc;"><h4><span class="fa fa-calendar"></span> <?php echo date('jS F Y ')?></h4></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-8">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Surname</th>
                                <th scope="col">Firstname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                   // while($row = mysqli_fetch_array($result)){

                                ?>
                                <tr>
                                        <td><?php// echo $row['title'];  ?></td>
                                        <td><?php// echo $row['property_type'];  ?></td>
                                        <td><?php //echo $row['state'];  ?></td>
                                        <td><?php// echo $row['location'];  ?></td>
                                        <td><a href="#" class="btn btn-danger fa fa-trash"></a></td>
                                        <td><a href="#" class="btn btn-primary fa fa-eye"></a></td>
                                </tr>
                                <?php
                                    //}

                                ?>

                            </tbody>

                        </table>
                                
                        

                            
                        </div>
                    </div>
                    
                    
                    
                </div>
               
               
            </div>
        </div>
    </body>
</html>

