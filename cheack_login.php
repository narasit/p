<?php 
// print_r($_POST);
session_start();
        if(isset($_POST['staff_user'])){
        //connection
                  include("condb.php");
        //รับค่า user & mem_password
                  $staff_user = mysqli_real_escape_string($con,$_POST['staff_user']);
                  $staff_pass = mysqli_real_escape_string($con,$_POST['staff_pass']);

                
                    //query 
                              $sql="SELECT * FROM tbstaff 
                              WHERE staff_user='".$staff_user."' 
                              AND staff_pass='".$staff_pass."'";
                              $result = mysqli_query($con, $sql);

                               //echo $sql;

                              // echo mysqli_num_rows($result);

                              //exit;
                    
                              if(mysqli_num_rows($result)==1){

                                  $row = mysqli_fetch_array($result);

                                  $_SESSION["staff_id"] = $row["staff_id"];
                                  $_SESSION["staff_name"] = $row["staff_name"];
                                  $_SESSION["staff_level"] = $row["staff_level"];   
                                     
                                      

                                      if($row['staff_level']=="staff"){                                     
                                          Header("Location: app/");
                                          
                                      }elseif($row['staff_level']=="Authorities"){
                                          Header("Location: authorities/");
                                      }elseif($row['staff_level']=="Commission"){
                                          Header("Location: commission/");
                                      }elseif($row['staff_level']=="Executive"){
                                          Header("Location: executive/");
                                      }elseif($row['staff_level']=="DeputyExecutive"){
                                          Header("Location: DeputyExecutive/");
                                      }
                                
                                 
                                 


                              }else{
                                    echo "<script>";
                                    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                                    echo "window.history.back()";
                                    echo "</script>";
                              }


                    //close else chk trim

                    //exit();




        }else{


             Header("Location: index.php"); //user & mem_password incorrect back to login again

        }
?>