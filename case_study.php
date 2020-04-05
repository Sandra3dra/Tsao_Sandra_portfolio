<?php
    include_once './config/database.php';
    include_once './objects/portfolio.php';

    if(isset($_GET['cs_id'])) {
        $getOneCS = getOneCS($_GET['cs_id']);
    } else {
        return 'cannot get project info';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
    <?php while($row = $getOneCS->fetch(PDO::FETCH_ASSOC)):?>
    <title><?php echo $row["title"];?></title>
</head>
<body>
    <?php include 'header.php';?>
    <section id="csHero">
        <img class="deskHero" src="./public/images/<?php echo $row["img_1"];?>" alt="<?php echo $row["title"];?> hero image">
        <img class="tabHero" src="./public/images/<?php echo $row["img_1t"];?>" alt="<?php echo $row["title"];?> hero image">
        <img class="mobHero" src="./public/images/<?php echo $row["img_1m"];?>" alt="<?php echo $row["title"];?> hero image">
        <div class="heroText">
            <p>Case Study <?php echo $row["cs_id"];?></p>
            <h1><?php echo $row["title"];?></h1>
            <p class="purP"><?php echo $row["purpose"];?></p>
        </div>
    </section>

    <section id="csSingle">
        <div class="csRow">
            <img id="csTopImg" src="./public/images/<?php echo $row["img_2"];?>" alt="<?php echo $row["title"];?>">
            <div id="csInfo">
                <div id="csInfoTop">
                    <div class="csInfoR">
                        <div class="Info">
                            <h3>Lead</h3>
                            <p><?php echo $row["lead"];?></p>
                        </div>
                        <div class="Info">
                            <h3>Tech</h3>
                            <p><?php echo $row["tech"];?></p>
                        </div>
                    </div>
                    <div class="csInfoR">
                        <div class="InR">
                            <h3>Collab</h3>
                            <p><?php echo $row["collab"];?></p>
                        </div>
                        <div class="InR">
                            <h3>Date</h3>
                            <p><?php echo $row["date"];?></p>
                        </div>
                    </div>
                </div>
                <div class="Info">
                    <h3>Link</h3>
                    <p><?php echo $row["link"];?></p>
                </div>
            </div>
        </div>
        <div class="csRow">
            <div id="csP">
                <h2><?php echo $row["p_head"];?></h2>
                <p><?php echo $row["p"];?></p>
            </div>
            <div class="csTwoImg">
                <img src="./public/images/<?php echo $row["img_3"];?>" alt="<?php echo $row["title"];?>">
                <img src="./public/images/<?php echo $row["img_4"];?>" alt="<?php echo $row["title"];?>">
            </div>
        </div>
        <img id="csBotImg" src="./public/images/<?php echo $row["img_5"];?>" alt="<?php echo $row["title"];?>">
    </section>
    <?php endwhile; ?>
    <a href="index.php?#caseStudy" id="csBack">
        <svg version="1.1" id="pre_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26.2 45.3" style="enable-background:new 0 0 26.2 45.3;" xml:space="preserve"><style type="text/css"> .st0{fill:#434345;}</style><title>arrow_down</title><path class="st0" d="M25.3,1.7c2.1,3-1,5-1,5l-15.2,16h0.1l15.3,16c0,0,3,2,1,5c-2,3-5.1,1-5.1,1L0,22.7l20.2-22C20.2,0.7,23.2-1.3,25.3,1.7z"/></svg>
        <p>Head back to check out my other case study!</p>
    </a>
<?php include 'footer.php';?>
</body>
</html>