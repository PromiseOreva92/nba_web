<?php
 require('inc.php');
//if(isset($_POST['signin'])){
	 if($link=mysqli_connect($host,$user,$password,$database)){
		$email = mysqli_real_escape_string($link,$_POST['email']);
                $email=  str_replace("^", "&", $email);
		$pwd = mysqli_real_escape_string($link,$_POST['psw']);
                $pwd=  str_replace("^", "&", $pwd);
		$query ="select * from member where phone1='$pwd'";
		 	if($result=mysqli_query($link,$query)){
                           if(mysqli_num_rows($result)==1){
                                $row = mysqli_fetch_array($result);
                                session_start();
                                $_SESSION['id']=$row[0];
                                $_SESSION['name']=$row[1];
                                $_SESSION['chamber_name']=$row[2];
                                $_SESSION['chamber_address']=$row[3];
                                $_SESSION['year_call']=$row[4];
                                $_SESSION['phone1']=$row[5];
                                $_SESSION['phone2']=$row[6];
                                $_SESSION['email']=$row[7];
                                $_SESSION['university']=$row[8];
                                $_SESSION['enroll_no']=$row[9];
                                                        echo 'success';
				}
				else{
                                    ?>  
                                <div id='error' class="alert alert-danger">No such User</div>
                                    <?php
							
                                   }
                                }
                                else{
                                    ?> 
                                 <div id='error' class="alert alert-danger">login failed</div>
                                    
                                    <?php
							
                                    }
                        } 
                                   
                        else{
                            ?>
                                                    
                            <div id='error' class="alert alert-danger">could not connect database</div>
                        <?php    
                            }

                     


