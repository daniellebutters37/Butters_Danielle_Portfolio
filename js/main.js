(() => {
    
//fetching data with ajax and vue.js
    const vm = new Vue({
        el : "#app",
        data : {
            projectDataAll: "",
            lightBox : [],
        },

        mounted : function() {
            this.fetchData();
        },

        methods : {
            fetchData() {
                // debugger;
                    
                fetch(`./includes/data.php`) //fetching data
                .then(res => res.json()) // parsing the data
                .then(data => {
                    this.projectDataAll = data;
                })
                .catch(function(error) {
                    console.log(error);
                });
            },

            lightBoxProject(project) {
                this.lightBox = project;
                //triggers lightbox opening
                openLBox();
            }
        }
    });

//----------------------MENU

//Menu Variables
var menuSelection = document.querySelectorAll('.menuSelection'),
    checkbox = document.querySelector('#toggle');

//Menu Functions
function closeMenu(){
    menuSelection[i] = checkbox.checked=false;
}

//Menu Event listener
for(var i = 0; i < menuSelection.length; i++) {
	menuSelection[i].addEventListener('click', closeMenu, false);
}

//----------------------LIGHTBOX

//Lightbox Variables
var lightbox = document.querySelector('.lightbox'),
	closeLightB = document.querySelector('.closeLightbox');
	// portfolioThumb = document.querySelectorAll('.thumbnail');

//Lightbox Functions
function openLBox(){
    lightbox.classList.add('show-lightbox');
}

function closeLBox(){
    lightbox.classList.remove('show-lightbox');
}

//Lightbox Event listeners
closeLightB.addEventListener('click', closeLBox, false);
// portfolioThumb.addEventListener('click', openLBox, false);


//----------------------VIDEO PLAYER

//Reel Variables

var reel = document.querySelector("video"),
    volumeControl = document.querySelector("#volControl"),
    video = document.querySelector("#videoReel"),
    muteVideo = document.querySelector("#volMute"),
    muteBtn = document.querySelector("#muteBtn"),
    pPlay = document.querySelector("#pPlay"),
    pPlayBtn = document.querySelector("#pPlayBtn"),
    seekSlider = document.getElementById("seekSlider");;

//Reel Functions

function pausePlay() {
    if (reel.paused) {
        reel.play();
        pPlayBtn.classList.replace( 'fa-play-circle', 'fa-pause-circle' );
    } else {
        reel.pause();
        pPlayBtn.classList.replace( 'fa-pause-circle', 'fa-play-circle' );
    }
}

function changeVol () {
    if(volumeControl.value == 0){
        video.muted = true;
        muteBtn.classList.replace('fa-volume-up', 'fa-volume-mute');
    } else {
        video.volume = (volumeControl.value/100);
        video.muted = false;
        muteBtn.classList.replace('fa-volume-mute', 'fa-volume-up');
    }
	// video.volume = volumeControl.value / 100; 
	// console.log(volumeControl.value);
 }

function muteVid(){
    if(reel.muted){
        reel.muted = false;
        volumeControl.value = volumeControlValue;
        muteBtn.classList.replace('fa-volume-mute', 'fa-volume-up');
    } else {
        volumeControlValue = volumeControl.value;
        volumeControl.value = 0;
        reel.muted = true;
        muteBtn.classList.replace('fa-volume-up', 'fa-volume-mute');
        // console.log( muteBtn.classList.replace('fa-volume-up', 'fa-volume-mute'));
    }
}

function videoSeek(){
	var seekto = video.duration * (seekSlider.value / 100);
	video.currentTime = seekto;
}
function seekTimeUpdate(){
	var nt = video.currentTime * (100 / video.duration);
	seekSlider.value = nt;
}

// Reel Event Listeners

muteVideo.addEventListener("click", muteVid, false);
pPlay.addEventListener("click", pausePlay, false);
volumeControl.addEventListener("mouseup", changeVol, false);
seekSlider.addEventListener("change",videoSeek,false);
video.addEventListener("timeupdate",seekTimeUpdate,false);


//----------------------SCROLL
// Scroll Variables
var scrollBtn = document.querySelector('#scroll');
  
// Scroll Functions
function scrollDown() {
    var windowScroll = document.documentElement.clientHeight;
    (function scroll() {
        if (window.pageYOffset < windowScroll) {
          window.scrollBy(0, 50);
          setTimeout(scroll, 50);
        }
        if (window.pageYOffset > windowScroll) {
          window.scrollTo(0);
        }
    })();
}

// Scroll Event Listeners
scrollBtn.addEventListener('click', scrollDown);

})();