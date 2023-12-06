<?php

include 'conn.php';
include 'UserInfo.php';

$location = '/video/video.mp4';
$subject = '';
$title = '';

if (isset($_POST['subject'])) {
    $subject = $_POST['subject'];
}

if (isset($_POST['title'])) {
    $title = $_POST['title'];
}

if (isset($_POST['btn-upload'])) {
    $maxsize = 5242880; // 5MB

    
$name = $_FILES['file']['name'];
    $target_dir = 'video/';
    $file = $target_dir . $name;
    $VideoFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $extension = array("mp4", 'mpeg', 'avi', '3pg');

    if (in_array($VideoFileType, $extension)) {
        /*if ($_FILES['file']['size'] >= $maxsize) {
            echo '<center class="failed"><h2>The video is more than 5MB</h2></center>';
        } else {*/
            if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
                $query = 'INSERT INTO videos(name,location,subject,title) VALUES("'.$name.'","'.$file.'","'.$subject.'","'.$title.'")';

                mysqli_query($conn, $query);

                print('<center class="success"><h2>Video uploaded</h2></center>');
            }
        }
    }
/*}*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

  
<meta
 
name="viewport"
 
content="width=device-width, initial-scale=1.0">

  
<title>Upload Vid</title>

  
<link
 
rel="stylesheet"
 
href="upload.css">

  
<link
 
rel="shortcut icon"
 
href="imgs/logo.jpg"
 
type="image/x-icon">

</head>

<body>

  
<center
 
class="container">

    
<img
 
src="imgs/logo.jpg"
 
class="logo">

    
<div
 
class="form">

      
<form
 
method="post"
 
enctype='multipart/form-data'>

        
<input
 
type="file"
 
name=file><br>

        
<input
 
type="text"
 
name="title"
 
id="title"
 
placeholder='Write name for video'><br>

        
<input
 
type="text"
 
name="subject"
 
id="subject"
 
placeholder='Write description for video'><br>

        
<input
 
type="submit"
 
value="UPLOAD"
 
name="btn-upload"><br>

        
<a
 
href="./">Return to application</a>

      
</form>

    
</div>

  
</center>

</body>

</html>
