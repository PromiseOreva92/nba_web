<?php
$no=0;
//session_start();
//if($_SESSION['email']==""){
//    header("location:../index.php");
//}
//   
//     
//if($_SESSION['firstname']==""){
//    header("location:complete_reg.php");
//}
//require '../inc/includes.php';
//$id = $_SESSION['ownerid'];
//$query="select last_login from owners where owner_id='$id'";
//$row=  mysqli_fetch_array(mysqli_query($link, $query));
//$query2="select * from vehicle where owner_id='$id'";
//$result2=mysqli_query($link, $query2);
//$no= mysqli_num_rows($result2);

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
                background: rgba(0,0,0,0.9);
                padding: 0px;
                height:650px;
                overflow-y: auto;
                
            }
/*            #con{
               height:650px;
               background: url('../assets/img/funfact-bg1.jpg');
               background-size: cover;
               background-position-x: 30%;
            }*/
            #content{
                background: #F4F6F9;
                height:650px;
                overflow-y: auto;
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
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2" id="nav">
                    <div id="con">
                    <ul class="nav nav-pills nav-stacked" id="menu">
                        <span class="fa fa-times" id="close" onclick="closeMenu()"></span>                        
                        <h3 style="color:white;text-indent:5px;margin-bottom: 40px"><span class="fa fa-user-circle-o"></span> <span style="font-size:12px;"><?php // echo $_SESSION['firstname']; ?></span></h3>                                                
                        <li class="active"><a href="dashboard.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                        <li><a href="payments.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-credit-card"></span> Make Payments</a></li>
                        <li><a href="profile.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-user"></span> Edit Profile</a></li>
                        <li><a href="logout.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-arrow-circle-o-left"></span> Logout</a></li>
                    </ul> 
                    </div>
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
                                <div class="col-sm-8"><h4 style="font-weight:bold;">Nigeria Bar Association, Anambra</h4></div>
                                <div class="col-sm-4" style="color: #0062cc;"><h4><span class="fa fa-user"></span> <?php echo " Welcome Promise"?></h4></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <!--<div class="col-sm-1"></div>-->
                        <div class="col-sm-3" style="margin-left:10px;">
                            <div class="row" style="border:1px solid #ccc;border-radius:10px;margin-top: 20px;padding:10px;background:#fff;">
                                <div class="col-sm-4" style="text-align: center;padding:10px 0px;background:#28A745;border-radius:5px">
                                    <span class="fa fa-legal" style="font-size:3.5em;color:#fff;"></span>
                                </div> 
                                <div class="col-sm-8">
                                    <h5><strong>Lawyer Code</strong></h5>
                                    <h5><?php // echo $no;?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <div class="row" style="border:1px solid #ccc;border-radius:10px;margin-top: 20px;padding:10px;background:#fff;">
                                <div class="col-sm-4" style="text-align: center;padding:10px 0px;background:#DC3545;border-radius:5px">
                                    <span class="fa fa-balance-scale" style="font-size:3.5em;color:#fff;"></span>
                                </div> 
                                <div class="col-sm-8">
                                    <h5><strong>Court Cases</strong></h5>
                                    <h5>1</h5>
                                </div>
                            </div>
                        </div>  
                        
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <div class="row" style="border:1px solid #ccc;border-radius:10px;margin-top: 20px;padding:10px;background:#fff;">
                                <div class="col-sm-4" style="text-align: center;padding:10px 0px;background:#FFC107;border-radius:5px">
                                    <span class="fa fa-clock-o" style="font-size:3.5em;color:#000;"></span>
                                </div> 
                                <div class="col-sm-8">
                                    <h5><strong>Last Login</strong></h5>
                                    <h5><?php // echo date('l jS M, h:i:s A',$row[0]);?></h5>
                                </div>
                            </div>
                        </div> 
                        
                    </div> 
                    
                    <div class="row" style="background:#fff;margin:10px;border:1px solid #ccc;">
                        <div class="col-sm-12" style="margin-top:10px;">
                            <h3>Upcoming Events</h3>
                            <p style="color:#DC3545; font-size: 16px;font-weight:200;">There are no upcoming events for now</p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
