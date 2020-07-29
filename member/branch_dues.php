<?php
//session_start();
//if(!isset($_SESSION['email'])){
//    header("location:../index.php");
//}
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
            form .row{
                margin: 20px;
            }
            form .input-group-addon{
                border: 1px solid #ccc;
                border-right: none;
                color: #009900;
            }            
            #nav{
                background: #000;
                padding: 0px;
                height:650px;
                overflow-y: auto;
            } 
            #content{
                
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
            td{
                color:#0069d9;
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
                        <li><a href="dashboard.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                        <li class="active"><a href="payments.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-credit-card"></span> Make Payments</a></li>
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
                        <div class="col-sm-5" style="margin:10px 0px;">
                            <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3>Pay Branch Dues</h3>
                                            <p>Please Fill Correctly.</p>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="name-input input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>                                        
                                                <input type="text" placeholder="Name As Verified" class="form-control">
                                            </div>
                                        </div>            
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="name-input input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>                                        
                                                <select class="form-control">
                                                    <option value='2016 - 2020|1000' >2016 - 2020</option>
                                                    <option value='2012 - 2015|2500' >2012 - 2015</option>
                                                    <option value='2006 - 2011|6000' >2006 - 2011</option>
                                                    <option value='2002 -2005|8500' >2002 -2005</option>
                                                    <option value='2001 &amp; Before (20yrs &amp; above)|10000' >2001 &amp; Before (20yrs &amp; above)</option>
                                                    <option value='SAN &amp; Benchers|16500' >SAN &amp; Benchers</option>                                                    
                                                </select>
                                            </div>
                                        </div>            
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="checkbox">
                                                <i class="fa fa-legal" style="color:#009900"></i>
                                              <label><input type="checkbox" value="">Insurance</label>
                                            </div>
                                        </div>            
                                    </div>                                 
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="name-input input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-graduation-cap"></i>
                                            </span>                                        
                                                <input type="text" placeholder="Enrollment/Call No" class="form-control">
                                            </div>
                                        </div>            
                                    </div>                                
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">                                       
                                            <button type="button" class="btn btn-success"

                                                    style="float:left;width:40%">PAY</button>

                                        </div>            
                                    </div>        
                                
                            </form>
                        </div>
                    </div>
                    
                    
                    <div class="row"style="margin:20px 0px">
                        <div class="col-sm-4">
                            <?php
//                                if(isset($_POST['submit'])){
////                                    require_once '../include/incfile.php';
//                                    $old=$_POST['old'];
//                                    $new=$_POST['new'];
//                                    $id = $_SESSION['id'];
//                                    
//                                    $query ="select password from clients where password = '$old'";
//                                    $result = mysqli_query($link, $query);
//                                    
//                                    $query2="update clients set password='$new' where client_id='$id'";
//                                    
//                                    if(mysqli_num_rows($result)==0){
                                        ?>
                            <!--<div class="alert alert-danger">Old Password Not Correct</div>-->
                            <?php
//                                    }  else {
//                                       if( mysqli_query($link, $query2)){
                                           ?>
                            <!--<div class="alert alert-success">Password Changed</div>-->               
                            <?php
//                            
//                                           
//                                       }
//                                    }
//                                }
                            ?>
                        </div> 
                    </div>
                                       
                </div>
                
               
            </div>
        </div>
    </body>
</html>
