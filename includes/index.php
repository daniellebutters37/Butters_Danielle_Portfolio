<?php 

include 'connect.php';
 
if(isset($_GET['id'])){
    $portfolio_query = 'SELECT * FROM tbl_projects WHERE project_id ='.$_GET['id'].'';
    // echo $portfolio_query;
// }else{
//     $portfolio_query = 'SELECT project_name, project_number, project_thumbnail FROM tbl_projects';
//     // echo $portfolio_query;
}
$portfolio_query = 'SELECT project_name, project_number, project_thumbnail FROM tbl_projects';


$getPortfolio = $pdo->query($portfolio_query);

$results = array();
while($row = $getPortfolio->fetch(PDO::FETCH_ASSOC)){
    //var_dump($row);
    $results[] = $row;
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json;charset=UTF-8');
$results_json = json_encode($results, JSON_PRETTY_PRINT);
echo $results_json;

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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
    <main id="app">
<header id="header">

        <input id="toggle" type="checkbox"/>
        <label class="hamburger" for="toggle">
          <div class="top"></div>
          <div class="middle"></div>
          <div class="bottom"></div>
        </label>
        
        <div class="nav">
          <div class="navWrapper">
            <nav>
            <ul>
                <li><a href="#header">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
            </nav>
          </div>
        </div>

        <div id="intro">
            <p id="name">danielle<br><span>butters</span></p>
            <p class="role">designer<br><span>developer</span></p>
        </div>

        <!-- <img id="face" src="images/face.svg" alt="Face"> -->
        <object id="face"data="images/face.svg" type="image/svg+xml"></object>

        <img id="lineHeader" src="images/line_header.svg" alt="Line">

</header>

<img id="lineHeader" src="images/line_header.svg" alt="Line">

<section id="about">
    <h2 class="hidden">About Section</h2>
    <p class="sectionHeading">about</p>

    <p id="aboutText">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati 
    cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id 
    est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam 
    libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod 
    maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>

    <img src="images/line_about.svg" alt="Line">

    <div id="aboutIcons">
        <img src="images/yoga_icon.svg" alt="Yoga">
        <img src="images/music_icon.svg" alt="Music">
        <img src="images/book_icon.svg" alt="Reading">
    </div>
</section>

<section id="portfolio">
    <h2 class="hidden">Portfolio Section</h2>
    <p class="sectionHeading">portfolio</p>

    <div id="portfolioSelection">
        <img id="linePortfolio" src="images/line_portfolio.svg" alt="Line">
        <div id="one" class="item">
            <img v-on:click="fetchData" class="thumbnail" :src="'images/thumbnails/'+ projectThumbnail">
            <h3 class="number">{{ projectNumber }}</h3>
            <p class="title">{{ projectName }}</p>
        </div>
    </div>
</section>

<section id="video">

    <video id="videoReel">
        <source src="video/trailer.mp4" type="video/mp4"/>
        <source src="video/trailer.webm" type="video/webm"/>
        <source src="video/trailer.ogv" type="video/ogg"/>
    </video>

    <div class="controls hideMe">
        <Button id="pPlay" ><i id="pPlayBtn" class="far fa-play-circle"></i></button>
        <button id="volMute" ><i class="far fa-pause-circle"></i></button>
        <!-- <input id="volControl" type="range" min="0" max="100" step="1"> -->
    </div>
</section>

<section id="contact">
    <h2 class="hidden">Contact Section</h2>
    <p class="sectionHeading">contact</p>

    <img id="contactLine" src="images/line_contact.svg" alt="Line">

    <div id="contactText">
        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        <p>daniellebutters37@gmail.com</p>
        <p>226 236 1717</p>
        <p>london, ON</p>
    </div>

    <div id="contactForm">
    <form autocomplete="off" action="" method="post">
        <h2 class="hidden">User Form</h2>
        <label>01</label>
        <input type="text" name="fullname" id="fullName" placeholder="name" required><br>
    
        <label>02</label>
        <input type="email" name="email" id="email" placeholder="email"required><br>
        
        <label>03</label>
        <input type="email" name="email" id="email" placeholder="phone" required><br>
    
        <label>04</label>
        <textarea name="username" id="username" placeholder="message" required></textarea><br>
    
        <input type="submit" value="send" id="submitBtn">
    </form> 
    </div>
</section>

<footer id="footer">
    <h2 class="hidden">Footer</h2>
        <p id="copyright">&copy; danielle butters 2018</p>
</footer>

<!-- <section class="lightbox">
    <h2 class="hidden">LightBox</h2>
            <span class="closeLightbox"><i class="fas fa-times"></i></span>
            <img src="images/project1.jpg"  id="portfolioImage" alt="Portfolio Image" data-gallery="0">
            <div id="imageDesc">Just Simply Clean Logo</div>
</section> -->


</main>
	<script src="js/main.js"></script>
</body>
</html>