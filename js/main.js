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
