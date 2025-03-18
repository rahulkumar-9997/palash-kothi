<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>
    <title>Palash Kothi - Enquiry</title>
    <meta name="description"
        content="Palash Kothi - A Luxury Resort near Bandhavgarh National Park, Where Comfort Meets Wilderness. Book Now and Experience the Best of Bandhavgarh.">
    <meta name="author" content="Palash Kothi">
    <?php require_once("./components/links.php") ?>
</head>

<body>
    <?php require_once('./components/mobile-nav.php') ?>
    <?php require_once('./components/cursor.php') ?>

    <main>
        <?php require_once('./components/nav-bar.php') ?>
        <?php
            $check_in = isset($_REQUEST['check_in']) ? urldecode($_REQUEST['check_in']) : '';
            $check_out = isset($_REQUEST['check_out']) ? urldecode($_REQUEST['check_out']) : '';
            $rooms = isset($_REQUEST['rooms']) ? urldecode($_REQUEST['rooms']) : '';
            $guest = isset($_REQUEST['guest']) ? urldecode($_REQUEST['guest']) : '';
            
        ?>
        <!-- Hero-Section Start -->
        <section class="layout-pt-lg-one layout-pb-lg-one">
            <div class="container">
                
                <div class="row justify-center text-center y-gap-85 x-gap-85">
                    <div class="col-xl-8 col-lg-10">
                        <h2 class="text-50 md:text-60 capitalize mb-30">Enquiry Details</h2>
                        <?php
                            $check_in = htmlspecialchars($check_in);
                            $check_out = htmlspecialchars($check_out);
                            $rooms = htmlspecialchars($rooms);
                            $guest = htmlspecialchars($guest);
                            echo "<p class='lh-17'><strong>Check In</strong> " .$check_in. "</p>";
                            echo "<p class='lh-17'><strong>Check Out </strong> " .$check_out. "</p>";
                            echo "<p class='lh-17'><strong>Rooms:</strong> " .$rooms. "</p>";
                            echo "<p class='lh-17'><strong>Guests:</strong> " .$guest. "</p>";
                        ?>
                        <form action="" method="post">
                            <input type="hidden" name="check_in" value="<?php echo $check_in ?>"/>
                            <input type="hidden" name="check_out" value="<?php echo $check_out ?>"/>
                            <input type="hidden" name="rooms" value="<?php echo $rooms ?>"/>
                            <input type="hidden" name="guest" value="<?php echo $guest ?>"/>
                            <div class="contactForm row y-gap-30 pt-60">
                                <div class="col-md-12">
                                    <div class="form-input name">
                                        <input type="text"  name="name" >
                                        <label class="lh-1 text-16 text-light-1">Name</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-input email">
                                        <input type="email" name="email" class="">
                                        <label class="lh-1 text-16 text-light-1">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-input phone_number">
                                        <input type="email" name="phone_number" class="">
                                        <label class="lh-1 text-16 text-light-1">Phone No.</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-input message">
                                        <textarea required="" class="border-1" name="message" rows="4"></textarea>
                                        <label class="lh-1 ">Message</label>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <button class="button -md -type-2 w-1/1 bg-accent-2 -accent-1">SEND YOUR MESSAGE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Hero-Section End -->
        <?php require_once('./components/footer.php') ?>
    </main>
    <?php require_once('./components/scripts.php') ?>
</body>

</html>