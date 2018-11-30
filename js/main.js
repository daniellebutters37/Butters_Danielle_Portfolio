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
	closeLightB = document.querySelector('.closeLightbox'),
	portfolioThumb = document.querySelectorAll('.thumbnail');

//Lightbox Functions
function openLBox(){
    lightbox.classList.add('show-lightbox');
}

function closeLBox(){
    lightbox.classList.remove('show-lightbox');
}

//Lightbox Event listeners
// portfolioThumb.addEventListener('click', openLBox, false);
closeLightB.addEventListener('click', closeLBox, false);


//----------------------VIDEO PLAYER

//Reel Variables

var reel = document.querySelector("video"),
    volumeControl = document.querySelector("#volControl"),
    video = document.querySelector("#videoReel"),
    muteVideo = document.querySelector("#volMute"),
    muteBtn = document.querySelector("#muteBtn"),
    pPlay = document.querySelector("#pPlay"),
    pPlayBtn = document.querySelector("#pPlayBtn");

//Reel Functions

function changeVol () {
    if(volumeControl.value == 1){
        video.muted = true;
    } else {
        video.volume = (volumeControl.value/100);
        video.muted = false;
    }
	// video.volume = volumeControl.value / 100; 
	// console.log(volumeControl.value);
 }

function muteVid() {
    // reel.volume = 0;
    if (reel.volume = 0) {
        muteBtn.classList.replace('fa-volume-mute', 'fa-volume-up');
    } else {
        muteBtn.classList.replace('fa-volume-up', 'fa-volume-mute');
    }
}

function pausePlay() {
		if (reel.paused) {
			reel.play();
            pPlayBtn.classList.replace( 'fa-play-circle', 'fa-pause-circle' );
		} else {
			reel.pause();
            pPlayBtn.classList.replace( 'fa-pause-circle', 'fa-play-circle' );
		}
}

// Reel Event Listeners

muteVideo.addEventListener("click", muteVid, false);
pPlay.addEventListener("click", pausePlay, false);
volumeControl.addEventListener("mouseup", changeVol, false);


//----------------------SCROLL
// Scroll Variables
var scrollBtn = document.querySelector('#scroll');
  
//Scroll Functions
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