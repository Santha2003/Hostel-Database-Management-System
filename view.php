<!DOCTYPE html>
<html>
    <head>
        <title>view</title>
</head>
<body>
    <a href="fingerprint.php">&#8592;</a>
    <?php
       $sql="SELECT * FROM images";
       $res=mysqli_query($conn, $sql);

       if(mysqli_num_rows($res)>0)
       {
        while($images=mysqli_fetch_assoc($res))
        {
            <div class="alb">
                 <img src="downloads/<?=$images['img-url]?>"
            </div>

            <?php
              
        
        }
       }
             ?>
</body>
<html>