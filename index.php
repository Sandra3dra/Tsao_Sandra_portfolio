<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
    <title>Sandra Tsao</title>
</head>
<body>
    
    <h1 class="hidden">Sandra Tsao's Portfolio</h1>
    <?php include 'header.php';?>

    <section id="mainHero">
        <div id="slideShow">
            <img id="sld1" src="/public/images/1.jpg" alt="picture of Sandra 1">
            <img id="sld2" src="/public/images/2.jpg" alt="picture of Sandra 2">
            <img id="sld3" src="/public/images/3.jpg" alt="picture of Sandra 3">
            <img id="sld4" src="/public/images/4.jpg" alt="picture of Sandra 4">
            <img id="sld5" src="/public/images/5.jpg" alt="picture of Sandra 5">
            <img id="sld6" src="/public/images/6.jpg" alt="picture of Sandra 6">
        </div>
        <p id="ntmy">Nice to meet you :)</p>
        <div class="yBox"></div>
        <div id="nameHov">
            <p>- 3D animamtion</p>
            <p>- Back-end developer</p>
            <p>- Front-end developer</p>
            <p>- click <img src="/public/images/arrow.svg" alt="arrow for name"> to know more</p>
        </div>
        <h2>I'm <a id="nameTag" href="/about_me.php">Sandra Tsao</a>.</h2>
    </section>

    <div id="ks">
        <p>Keep Scrolling</p>
        <svg id="arrow_down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.31 26.19"><defs><style>.cls-1{fill:#434345;}</style></defs><title>arrow_down</title><path class="cls-1" d="M1,6.61s-2-3.06,1-5.1,5,1,5,1L23,17.82V27Z" transform="translate(-0.35 -0.81)"/><path class="cls-1" d="M45,6.76s2-3-1-5.06-5,1-5,1L23,17.89V27Z" transform="translate(-0.35 -0.81)"/></svg>
    </div>

    <section id="feature">
        <div id="featTitle">
            <h2>Works</h2>
            <p>Click project to see more</p>
        </div>
        <div id="featMain">
            <div class="yBox"></div>
            <div id="featWrapper">
            <?php
            //include database and object files
            include_once './config/database.php';
            include_once './objects/portfolio.php';

            $database = new Database();
            $db = $database->getConnection();

            $proj = new Projects($db);
            $stmt = $proj->getProjects();

            $num = $stmt->rowCount();

            if($num>0):?>

                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                    <a href="/portfolios.php?id=<?php echo $row['ID'];?>"><h3 class="porTitle"><?php echo $row["title"];?></h3></a>
                    <img class="hover_img hidden" src="/public/images/<?php echo $row["hover_img"];?>" alt="hover images">
                <?php endwhile; else:?>
                    <h1>Portfolio missing</h1>
                <?php endif;?>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Get in touch!</h2>
        <div id="contactWrapper">
            <div class="yBox"></div>
            <div id="contactForm">
                <h2 class="hidden">Contact Form</h2>
                <form action="contact/data_contact.php" method="post">
                    <div id="conTop">
                        <div class="conRow">
                            <label for="u-name">Your name:</label>
                            <input required id="u-name" type="text" name="name">
                        </div>
                        <div class="conRow">
                            <label for="u-email">Your email:</label>
                            <input required id="u-email" type="email" name="email">
                        </div>
                        <div class="conRow">
                            <label for="e-subject">Subject:</label>
                            <input id="e-subject" type="text" name="subject">
                        </div>
                        <div class="conRow">
                            <label for="e-message">Message:</label>
                            <textarea required id="e-message" name="message"></textarea>
                        </div>
                    </div>
                    <button type="submit">Submit</button>

                </form>
            </div>
        </div>
    </section>


    <?php include 'footer.php';?>
</body>
</html>