<?php  $id=$_GET['id']; ?>
  <?php  
                              
                    
                            //start of get highest id
                              include("zpaDbstuff.inc");
                              $cnx = mysqli_connect($host,$user,$password,$dbname) or die ("couldn't connect to server");
                               $result = mysqli_query($cnx,"SELECT MAX(productId) FROM product");
                              $row = mysqli_fetch_row($result);
                              $highest_id = $row[0];
                              $highest_id=$highest_id+1;
                              //end of get highest id

                             

                             

                               $Photo1path=$_FILES['photo1']['name'];
                               $Photo2path=$_FILES['photo2']['name'];
                               $Photo3path=$_FILES['photo3']['name'];
                              
                              $ext1 = pathinfo($Photo1path, PATHINFO_EXTENSION);
                               $ext2 = pathinfo($Photo2path, PATHINFO_EXTENSION);
                              $ext3 = pathinfo($Photo3path, PATHINFO_EXTENSION);

                              $destination1='C:\xampp\htdocs\Project\productPhotos'."\\".$highest_id."1.".$ext1;
                              $destination2='C:\xampp\htdocs\Project\productPhotos'."\\".$highest_id."2.".$ext2;
                              $destination3='C:\xampp\htdocs\Project\productPhotos'."\\".$highest_id."3.".$ext3;
                           
                              $dbDestination1 = 'productPhotos/'.$highest_id."1.".$ext1;
                               $dbDestination2 = 'productPhotos/'.$highest_id."2.".$ext2;
                                $dbDestination3 = 'productPhotos/'.$highest_id."3.".$ext3;
                              
                                 $temp_file1=$_FILES['photo1']['tmp_name'];
                                  $temp_file2=$_FILES['photo2']['tmp_name'];
                                   $temp_file3=$_FILES['photo3']['tmp_name'];
                              
                              //upload file to destination 
                                move_uploaded_file($temp_file1,$destination1);
                                move_uploaded_file($temp_file2,$destination2);
                                move_uploaded_file($temp_file3,$destination3);
                                  $P_name=$_POST['pdName'];
                                $P_price=$_POST['pdPrice'];
                                $MainID=$_POST['pdCategory'];
                                $desc=$_POST['pdDescription'];   $CID=$id;
                                $TypeID=1;
                            $Size=$_POST['pdSize'];
                            $Brand=$_POST['pdBrand'];               
                            $Type=$_POST['pdType'];
                            $AvailableQuantity=0;
                            $AvailableQuantity=$_POST['pdQuantity'];
                            $Model=$_POST['pdModel'];
                            $Color=$_POST['pdColor'];
                            $today=date("Y-m-d");
                            $PendingStatus="False";                      
                                $query="INSERT INTO  product(productName,productPrice,description,cId,typeId,mainId,availableQty,color,model,brand,size,type,photo,photo1,photo2,pendingStatus,productDate) VALUES('".$P_name."','".$P_price."','".$desc."',".$CID.",".$TypeID.",".$MainID.",".$AvailableQuantity.",'".$Color."','".$Model."','".$Brand."','".$Size."','".$Type."','".$dbDestination1."','".$dbDestination2."','".$dbDestination3."','".$PendingStatus."','".$today."')";
                                 echo $query;
                                 if(mysqli_query($cnx,$query))
                                 {
                                    header("Location:secondHandsViewSupplier.php?status=success&id=".$id);
                                 }
                                 else
                                 {
                                    header("Location:secondHandsViewSupplier.php?status=fail&id=".$id);
                                 }
                                // header("Location: test.php?success1=yes");

     ?>             