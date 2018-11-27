<?php
// var_dump($_POST);
$fields = array(
    'name'=>array(
        'type'=>'text',
        'label'=>'01'
    ),
    'email'=>array(
       'type'=>'email',
       'label'=>'02'
    ),
    'phone'=>array(
       'type'=>'phone',
       'label'=>'03'
    ),
    'message'=>array(
       'type'=>'textarea',
       'label'=>'04'
    )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio: Danielle Butters</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>

<body>
    <main id="app">
<header id="header">
        <!-- Hamburger Menu Icon -->
        <input id="toggle" type="checkbox"/>
        <label class="hamburger" for="toggle">
          <div class="top"></div>
          <div class="middle"></div>
          <div class="bottom"></div>
        </label>

        <!-- Menu Selection Full Screen -->
        <div class="nav">
          <div class="navWrapper">
            <nav>
                <ul>
                    <li class="menuSelection"><a href="#header"><span class="menuNum">01 </span>home</a></li>
                    <li class="menuSelection"><a href="#about"><span class="menuNum">02 </span>about</a></li>
                    <li class="menuSelection"><a href="#portfolio"><span class="menuNum">03 </span>portfolio</a></li>
                    <li class="menuSelection"><a href="#contact"><span class="menuNum">04 </span>contact</a></li>
                </ul>
            </nav>
          </div>
        </div>

        <div id="intro">
            <p id="wordmark">danielle<br><span>butters</span></p>
            <p class="role">designer<br><span>developer</span></p>
        </div>

        <object id="face"data="images/face.svg" type="image/svg+xml"></object>

        <object id="lineHeader" data="images/line_header.svg" type="image/svg+xml"></object>

        <div id="scroll" class="wow fadeIn pulse" data-wow-delay="3s" data-wow-iteration="infinite">
            <p>scroll</p>
            <i class="fas fa-chevron-down"></i>
        </div>
</header>



<section id="about">
    <h2 class="hidden">About Section</h2>
    <p class="wow fadeInUp sectionHeading" data-wow-duration="3s">about</p>

    <p id="aboutText" class="wow fadeInUp" data-wow-duration="2s">
    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati 
    cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id 
    est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam 
    libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod 
    maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>

    <div id="aboutIcons">
        <i class="fas fa-paint-roller wow fadeInUp" data-wow-duration="2s"></i>
        <i class="fas fa-code wow fadeInUp" data-wow-duration="2s"></i>
        <i class="fas fa-camera-retro wow fadeInUp" data-wow-duration="2s"></i>
    </div>

    <div id="resume" class="wow fadeInUp" data-wow-duration="2s"><a href="images/wish_list.pdf" download="myfile.pdf" target="_blank">Resume</a></div>

    <object id="lineAbout" class="wow fadeInUp" data-wow-duration="2s" data="images/line_about.svg" type="image/svg+xml"></object>

</section>



<section id="portfolio">
    <h2 class="hidden">Portfolio Section</h2>
    <p class="sectionHeading wow fadeInUp" data-wow-duration="3s">portfolio</p>

   <!-- Portfolio Pieces Looped -->
    <div id="portfolioSelection">
        <div v-for="item in projectDataAll" class="item wow fadeInUp" data-wow-duration="2s" data-wow-iteration="1" v-on:click="lightBoxProject(item)">
            <img v-on:click="fetchData" class="thumbnail" :src="'images/thumbnails/'+ item['project_thumbnail']" :alt="item['project_name']">
            <h3 class="number">{{ item['project_number'] }}</h3>
            <p class="title">{{ item['project_name'] }}</p>
        </div>
    </div>
    <object id="linePortfolio" class="wow fadeInUp" data-wow-duration="2s" data="images/line_portfolio.svg" type="image/svg+xml"></object>
</section>



<section id="video" class="wow fadeInUp" data-wow-duration="2s">
    <!-- Video -->
    <video id="videoReel">
        <source src="video/video_reel.mp4" type="video/mp4"/>
        <source src="video/video_reel.webm" type="video/webm"/>
        <source src="video/video_reel.ogv" type="video/ogg"/>
    </video>

    <!-- Video Controls and Buttons -->
    <div class="controls hideMe">
        <Button id="pPlay"><i id="pPlayBtn" class="far fa-play-circle"></i></button>
        <input id="volControl" type="range" min="0" max="100" step="1">
        <button id="volMute"><i id="muteBtn" class="fas fa-volume-mute"></i></button>
    </div>
</section>


<section id="contact">
    <h2 class="hidden">Contact Section</h2>
    <p class="sectionHeading wow fadeInUp" data-wow-duration="3s">contact</p>

    <object id="contactLine" class="wow fadeInUp" data-wow-duration="2s" data="images/line_contact.svg" type="image/svg+xml"></object>

    <div id="contactText" class="wow fadeInUp" data-wow-duration="2s">
        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        <p>daniellebutters37@gmail.com</p>
        <p>226 236 1717</p>
        <p>london, ON</p>
    </div>

    <!-- Contact Form -->
    <div id="contactForm" class="wow fadeInUp" data-wow-duration="2s">
    <form action="./includes/sendEmail.php" method="POST">
        <h2 class="hidden">User Form</h2>
    <?php foreach($fields as $field_name => $field_config):?>
        <?php if($field_config['type'] === 'textarea'):?>
            <label for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
            <textarea id="<?php echo $field_name;?>" placeholder="<?php echo $field_name;?>" name="<?php echo $field_name;?>"></textarea><br>
        <?php else:?>
            <label for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
            <input id="<?php echo $field_name;?>" placeholder="<?php echo $field_name;?>" type="<?php echo $field_config['type'];?>" name="<?php echo $field_name;?>"><br>
        <?php endif;?>
        <!-- <label>01</label>
        <input type="text" name="fullname" id="fullName" placeholder="name" required><br>
    
        <label>02</label>
        <input type="email" name="email" id="email" placeholder="email"required><br>
        
        <label>03</label>
        <input type="phone" name="phone" id="phone" placeholder="phone" required><br>
        
        <label>04</label>
        <textarea name="message" id="message" placeholder="message" required></textarea><br> -->
        <?php endforeach;?>
        <input type="submit" value="send" id="submitBtn">
    </form> 
    </div>
</section>


<footer id="footer">
    <h2 class="hidden">Footer</h2>
        <p id="copyright">&copy; danielle butters 2018</p>
</footer>

<!-- Lightbox for portfolio item selection -->
<section class="lightbox">
    <h2 class="hidden">LightBox</h2>
            <span class="closeLightbox"><i class="fas fa-times"></i></span>
            <img :src="'images/'+ lightBox['project_image']"  id="portfolioImage" :alt="lightBox['project_name']">
            <div id="imageNum">{{ lightBox['project_number'] }}</div>
            <div id="imageName">{{ lightBox['project_name'] }}</div>
            <div id="imageDesc">{{ lightBox['project_description'] }}</div>
</section>


</main>

    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>