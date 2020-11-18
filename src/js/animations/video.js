const videoPlay = () => {
    let videos = document.querySelectorAll('.video-projet');
    if (videos.length > 0 && window.innerWidth > 1024) {
        videos.forEach(video => {
            video.play();
        })
    }
}
export default videoPlay;