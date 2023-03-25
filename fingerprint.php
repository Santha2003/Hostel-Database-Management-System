
<?php if(isset($_GET['error'])):?>
    <p>php echo $_GET['error']; ?></p>
    <?php endif ?>
     
	
    <!DOCTYPE html>
    <html>
        <head>
             <title>page Title</title>
        </head>
        <body>
            <form action="upload.php" method="post" enctype="multipart/data" >
                <input type="file" name="one">
                <input type="submit" name="submit" value="upload">
            </form>
        </body>
    </html>


?>
