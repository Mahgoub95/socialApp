<?php

include 'conn.php';
include 'UserInfo.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="imgs/logo.jpg" type="image/x-icon">
    <title>GoubVideos | Home</title>
</head>
<body>
    <div class="app-video">
        <?php
            $fetchAllVideos = mysqli_query($conn,'SELECT * FROM videos ORDER BY id DESC');

            while ($row = mysqli_fetch_assoc($fetchAllVideos)) {
                $location = $row['location'];
                $subject = $row['subject'];
                $title = $row['title'];

                echo '
                <div class="video">
                    <video src="'.$location.'" class="video-player"></video>
                    <div class="footer">
                        <div class="footer-text">
                            <h2>Mazin Mahgoub</h2>
                            <p class="description">'.$subject.'</p>
                            <div class="img-marquee">
                                <a href="upload.php"><img src="imgs/play.jpg" alt=""></a>
                                <marquee>'.$title.'</marquee>
                            </div>
                        </div>
                        <img src="imgs/play.jpg" class="img-play">
                    </div>
                </div>
                ';
            }
        ?>
    </div>

    <script>
        const videos = document.querySelectorAll('video');

        for(const video of videos){
            video.addEventListener('click', function (){
                if (video.paused){
                    video.play();
                }else{
                    video.pause();
                }
            });
        }
    </script>
</body>
</html>