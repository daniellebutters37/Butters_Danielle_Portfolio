(() => {
    //fetching data with ajax and vue.js
        const vm = new Vue({
            el : "#app",
            data : {
                projectThumbnail : "",
                projectName : "",
                projectNumber : "",
            },

            mounted : function() {
                this.fetchData();
            },

            methods : {
                fetchData() {
                    // debugger;
                    //lset targetURL = e.currentTarget.id;
                    
                    fetch(`./includes/connect.php`) //fetching data
                    .then(res => res.json()) // parsing the data
                    .then(data => {
                        console.log(data);
                        const {project_thumbnail, project_name, project_number} = data[0];

                        this.projectThumbnail  = project_thumbnail ;
                        this.projectName = project_name;
                        this.projectNumber = project_number;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                }
            }
        });

})();





//variables
var lightbox = document.querySelector('.lightbox'),
	closeLightB = document.querySelector('.closeLightbox'),
	galleryThumb = document.querySelectorAll('.galleryThumb'),
	mainphoto = document.querySelector('#portfolioImage'),
	imageDesc = document.querySelector('#imageDesc'),
	count = 0;



// LIGHTBOX    
//functions

// function openLBox(){
// 	lightbox.classList.add('show-lightbox');
// }

// function closeLbox(){
//   lightbox.classList.remove('show-lightbox');
// }

// function showPortfolioImage(){
// 	mainphoto.src = this.querySelector('img').src.replace('/thumbs','');
// 	imageDesc.innerHTML = this.querySelector('.projectDesc').innerHTML;
// 	lightbox.classList.add('show-lightbox');
// }

// //event listeners

// for(var i = 0; i < galleryThumb.length; i++) {
// 	galleryThumb[i].addEventListener('click', showPortfolioImage, false);
// }

// closeLightB.addEventListener('click', closeLbox, false);