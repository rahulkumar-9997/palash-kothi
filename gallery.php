<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>
    <title>Palash Kothi - Gallery</title>
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

        <!-- Hero-Section Start -->		<section class="layout-pt-lg layout-pb-lg">      <div class="container">                    <div class="row y-gap-85 x-gap-85">                        <h1 class="text-64 md:text-40 ">Palash Kothi Images Gallery</h1>                    </div>         <div class="row y-gap-85 x-gap-85"><?php	$xmlFilePath = './gallery.xml';	if (!file_exists($xmlFilePath)) {        die("Error: XML file not found.");    }	$xml = simplexml_load_file($xmlFilePath) or die("Error: Cannot load XML file.");	foreach ($xml->album as $album) 	{	    $albumname = (string)$album->albumname;    $albumTitle = (string)$album->albumtitle;    $description = (string)$album->description;    $mainImage = (string)$album->mainimage;?>          <div class="col-lg-4 col-md-6">            <a href="gallery_images.php?album=<?=$albumname?>" class="baseCard -type-2" contenteditable="false" style="cursor: pointer;">              <div class="baseCard__image ratio ratio-41:50">                <img src="gallery/<?=$albumname?>/<?=$mainImage?>" alt="image" class="img-ratio">              </div>              <div class="baseCard__content mt-30">                <h4 class="text-30 md:text-25 mt-15"><?=$albumTitle?></h4>                <p class="mt-15"><?=$description?></p>                <div class="d-flex mt-20">                  <button class="button -type-1">                    <i class="-icon">                      <svg width="50" height="30" viewBox="0 0 50 30" fill="none" xmlns="http://www.w3.org/2000/svg">                        <path d="M35.8 28.0924C43.3451 28.0924 49.4616 21.9759 49.4616 14.4308C49.4616 6.88577 43.3451 0.769287 35.8 0.769287C28.255 0.769287 22.1385 6.88577 22.1385 14.4308C22.1385 21.9759 28.255 28.0924 35.8 28.0924Z" stroke="#122223"></path>                        <path d="M33.4808 10.2039L32.9985 10.8031L37.2931 14.2623H0.341553V15.0315H37.28L33.0008 18.4262L33.4785 19.0285L39 14.6492L33.4808 10.2039Z" fill="#122223"></path>                      </svg>                    </i>                    VIEW ALL IMAGES                  </button>                </div>              </div>            </a>          </div>		  		  <?php		  		  }		  		  		  ?>        </div>      </div>    </section>
        <!-- Hero-Section End -->
        <?php require_once('./components/footer.php') ?>
    </main>


    <?php require_once('./components/scripts.php') ?>
</body>

</html>