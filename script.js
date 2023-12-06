const videos = document.querySelectorAll('video');
document.querySelector('video').play();

for(const video of videos){
    video.addEventListener('click', function (){
        if (video.paused){
            video.play();
        }else{
            video.pause();
        }
    });
}