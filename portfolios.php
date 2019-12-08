<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>

    <?php
    //include database and object files
    include_once './config/database.php';
    include_once './objects/portfolio.php';

    $database = new Database();
    $db = $database->getConnection();

    $proj = new Projects($db);
    $stmt = $proj->getProjByID($id);

    if(isset($_GET['id'])) {
        $stmt = $proj->getProjByID($_GET['id']);
    }

    if($num>0):?>

    <title><?php echo ["title"];?></title>
</head>
<body>
    
    <h1 class="hidden"><?php echo ["title"];?></h1>
    <?php include 'header.php';?>

    <section id="hero">
        <img src="/public/images/<?php echo $row["img_1"];?>" alt="hero image">
        <img src="/public/images/<?php echo $row["img_1t"];?>" alt="hero image">
        <img src="/public/images/<?php echo $row["img_1m"];?>" alt="hero image">
    </section>
    
    <?php else:?>
    <h1>Portfolio missing</h1>
    <?php endif;?>

<?php include 'footer.php';?>
</body>
</html>