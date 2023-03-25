<?php
  if(isset($_host['submit']) && isset($_FILES['one']))
  {

    include "db_conn.php"; 
    echo "Hello";
    print_r($_FILES['one']);
    echo "</pre>" ; 

    $img_name=$_FILES['one']['name'];
    $img_size=$_FILES['one']['size'];
    $tmp_name=$_FILES['one']['tmp_name'];
    $error=$_files['one']['error'];
    
    if($error === 0) 
    {
        if($img_size>125000)
        {
            $em="unknown error occured";
            header("Location:fingerprint.php?error=$em");
        }
        else
        {
            $img_ex=pathinfo($img_name, pathinfo);
            $img_ex_lc=strtolower($img_ex);
            $allowed_exs=array("jpg","jpeg","png");
            if(in_array( $img_ex_lc,$allowed_exs));
            {
                  $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                  $img_upload_path='uploads/'.$new_img_name;
                   move_uploaded_file($tmp_name,$img_upload_path);   
            
                   $sql="INSERT INTO images(image_url)
                   VALUES('$new_img_name')";
                   mysqli_query($conn,$sql);
                   header("Location:view.php?error=$em");
            }
            else{
                $em="unknown Error occuried";
                header("Location:fingerprint.php?error=$em");

            }


        }
    else
    {
        $em="unknown error occured";
        header("Location:fingerprint:php?error=$em");
    }

  }
  else
  {
    header("Location:fingerprint.php")
  }