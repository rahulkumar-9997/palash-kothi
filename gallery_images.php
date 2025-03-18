<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>
    <!-- Required meta tags -->
    <title>Palash Kothi - A Luxury Resort in Bandhavgarh National Park</title>
    <meta name="description"
        content="Palash Kothi - A Luxury Resort near Bandhavgarh National Park, Where Comfort Meets Wilderness. Book Now and Experience the Best of Bandhavgarh.">
    <meta name="keywords" content="luxury rooms, hotel suites, best hotel rooms, book a hotel">
    <meta name="author" content="Palash Kothi">
    <?php require_once("./components/links.php") ?>
</head>

<?php

	$albumnname = $_GET['album'];
	$escapedAlbumName = htmlspecialchars($albumnname, ENT_QUOTES | ENT_XML1, 'UTF-8');
	$xmlFilePath = 'gallery.xml';
	if (!file_exists($xmlFilePath)) {
        die("Error: XML file not found.");
    }
	$xml = simplexml_load_file($xmlFilePath) or die("Error: Cannot load XML file.");
	// print_r($xml);
	$albums = $xml->xpath("/gallery/album[albumname=\"$escapedAlbumName\"]");
	// print_r($albums);
	$album = $albums[0];
	$albumtitle = $album->albumtitle;
	$description = $album->description;
	// echo $albumtitle;

?>
<body>
    <?php require_once('./components/mobile-nav.php') ?>
    <?php require_once('./components/cursor.php') ?>

    <main>
        <?php require_once('./components/nav-bar.php') ?>
        <!-- Hero-Section Start -->

        <!-- Gallery-Section Start -->
        <section style="padding-bottom: 150px; padding-top: 150px;">
            <div data-anim-wrap class="px-60 md:px-20">
                <div class="row justify-center text-center">
                    <div data-split="lines" data-anim-child="split-lines delay-1" class="col-auto">
                        <h1 class="text-64 md:text-40"><?=$albumtitle?> - Palash Kothi</h2>
                        <p><?=$description?></p>
                    </div>
                </div>
<div class="row y-gap-30 pt-50 sm:pt-50">
		<?php
			$folderPath = 'gallery/'.$albumnname;
			$files = array_diff(scandir($folderPath), ['.', '..']);
			 $fileList = array_filter($files, function($file) use ($folderPath) {
				return is_file($folderPath . DIRECTORY_SEPARATOR . $file);
			});
			foreach(array_values($fileList) as $file)
			{

		?>
                
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="<?php echo $folderPath.'/'.$file ?>">
                            <div class="ratio ratio-1:1">
                                <img src="<?php echo $folderPath.'/'.$file ?>" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
               
		<?php
						
			}
		?>
 </div>
            </div>
        </section>
        <!-- Gallery-Section End -->

        <?php require_once('./components/footer.php') ?>
    </main>
    <?php require_once('./components/scripts.php') ?>
</body>

</html>