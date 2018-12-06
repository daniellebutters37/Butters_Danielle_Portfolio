# Portfolio Website: Danielle Butters

**Motivation**
This project aims to create a dynamic portfolio website to showcase my projects.
[https://daniellebutters.ca](daniellebutters.ca)

**Design**
* Cinema 4D R19
* Adobe After Effects
* Adobe Illustrator/Photoshop

**Build**
* [Vue.js](https://vuejs.org) - Javascript framework
* [Sass](https://sass-lang.com) - CSS complier
* AJAX - Front-end technology for handeling data requests
* [WOW.js](https://wowjs.uk) - scroll animation Library

**Code Examples**
* Example of Vue.js and WOW.js
```html
    <div id="portfolioSelection">
        <div v-for="item in projectDataAll" class="item wow fadeInUp" data-wow-duration="2s" data-wow-iteration="1" v-on:click="lightBoxProject(item)">
            <img v-on:click="fetchData" class="thumbnail" :src="'images/thumbnails/'+ item['project_thumbnail']" :alt="item['project_name']">
            <h3 class="number">{{ item['project_number'] }}</h3>
            <p class="title">{{ item['project_name'] }}</p>
        </div>
    </div>

```
* Example of Sass
```css
    $dark-color:#455a72;
    $light-color: #A3B7D0;
    $off-white-color: #eff3f6;
    $white: #fff;
    $black: #000;

    #portfolio {
        padding-top: 10%;
        color: $white;
    }
```

**API Reference**
* Font Awsome - Icons
* Google Fonts - Montserrat 

**Installation**
* Node.js
* SASS
* Gulp
* Npm

**Tests**
* W3C Validator - Valid and semantic HTML tagging
* HTML5 Outline - Valid document outline and proper cascading
* SASS validator - Insure all classes are enclosed and valid

**Credits**
Danielle Butters - Designer/Developer

**License**
MIT
