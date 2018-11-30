<?php 

include 'connect.php';
 
if(isset($_GET['id'])){
    $portfolio_query = 'SELECT * FROM tbl_projects WHERE project_id ='.$_GET['id'].'';
}

$portfolio_query = 'SELECT * FROM tbl_projects';

$about_query = 'SELECT * FROM tbl_about';


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