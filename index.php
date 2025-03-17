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

<body>
    <?php require_once('./components/mobile-nav.php') ?>
    <?php require_once('./components/cursor.php') ?>

    <main>
        <?php require_once('./components/nav-bar.php') ?>
        <!-- Hero-Section Start -->
        <section data-anim-wrap class="hero -type-2">
            <div data-anim-child="img-right cover-white" class="hero__bg bg-accent-2"></div>

            <div class="row">
                <div class="col-12">
                    <div class="hero__content text-center">
                        <div class="container">
                            <h1 data-anim-child="slide-up delay-3" class="hero__title">
                                Welcome to Palash Kothi
                            </h1>
                            <p data-anim-child="slide-up delay-4" style="font-size: 1.2rem;">A Luxury
                                Resort in
                                Bandhavgarh, Where Comfort Meets Wilderness. </p>
                            <div data-anim-child="slide-up delay-4" class="hero__filterButtonMobile">
                                <button class="filterButtonMobile button -accent-1 bg-light-1 col-12 mt-30">
                                    Book your Stay
                                </button>
                            </div>

                            <div data-anim-child="slide-up delay-5" class="hero__filter">
                                <div class="searchForm -type-1 bg-white rounded-200">
                                    <div class="searchForm__form">
                                        <div class="searchFormItem js-select-control js-form-dd js-calendar">
                                            <div class="searchFormItem__button" data-x-click="calendar">
                                                <div>
                                                    <span class="js-first-date">Check In - Check Out</span>
                                                    <span class="js-last-date"></span>
                                                </div>
                                                <i class="icon-arrow-down ml-10"></i>
                                            </div>

                                            <div class="searchFormItemDropdown -calendar" data-x="calendar"
                                                data-x-toggle="is-active">
                                                <div class="searchFormItemDropdown__container">
                                                    <div class="searchMenu-date -searchForm js-form-dd js-calendar-el">
                                                        <div class="searchMenu-date__field shadow-2"
                                                            data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                                                            <div class="rounded-4">
                                                                <div class="elCalendar js-calendar-el-calendar"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="searchFormItem js-select-control js-form-dd">
                                            <div class="searchFormItem__button" data-x-click="rooms">
                                                <div class="js-select-control-chosen">Rooms</div>
                                                <i class="icon-arrow-down ml-10"></i>
                                            </div>
                                            <div class="searchFormItemDropdown -counter" data-x="rooms"
                                                data-x-toggle="is-active">
                                                <div class="searchFormItemDropdown__container">
                                                    <div class="searchFormItemDropdown__list">
                                                        <div
                                                            class="searchFormItemDropdown__item js-select-control-counter">
                                                            <div class="fw-500 js-search-title">Rooms</div>
                                                            <div class="d-flex fw-500 js-search-counter">
                                                                <div
                                                                    class="cursor-pointer size-40 flex-center js-remove">
                                                                    <i class="custom-icon-minus">
                                                                        <span></span>
                                                                    </i>
                                                                </div>

                                                                <div class="size-40 flex-center js-number">
                                                                    0
                                                                </div>

                                                                <div class="cursor-pointer size-40 flex-center js-add">
                                                                    <i class="custom-icon-plus">
                                                                        <span></span>
                                                                        <span></span>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="searchFormItem js-select-control js-form-dd">
                                            <div class="searchFormItem__button" data-x-click="guests">
                                                <div class="js-select-control-chosen">Guests</div>
                                                <i class="icon-arrow-down ml-10"></i>
                                            </div>
                                            <div class="searchFormItemDropdown -counter" data-x="guests"
                                                data-x-toggle="is-active">
                                                <div class="searchFormItemDropdown__container">
                                                    <div class="searchFormItemDropdown__list">
                                                        <div
                                                            class="searchFormItemDropdown__item js-select-control-counter">
                                                            <div class="fw-500 js-search-title">Adults</div>
                                                            <div class="d-flex fw-500 js-search-counter">
                                                                <div
                                                                    class="cursor-pointer size-40 flex-center js-remove">
                                                                    <i class="custom-icon-minus">
                                                                        <span></span>
                                                                    </i>
                                                                </div>

                                                                <div class="size-40 flex-center js-number">
                                                                    0
                                                                </div>

                                                                <div class="cursor-pointer size-40 flex-center js-add">
                                                                    <i class="custom-icon-plus">
                                                                        <span></span>
                                                                        <span></span>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="searchFormItemDropdown__item js-select-control-counter">
                                                            <div class="fw-500 js-search-title">
                                                                Children
                                                            </div>
                                                            <div class="d-flex fw-500 js-search-counter">
                                                                <div
                                                                    class="cursor-pointer size-40 flex-center js-remove">
                                                                    <i class="custom-icon-minus">
                                                                        <span></span>
                                                                    </i>
                                                                </div>

                                                                <div class="size-40 flex-center js-number">
                                                                    0
                                                                </div>

                                                                <div class="cursor-pointer size-40 flex-center js-add">
                                                                    <i class="custom-icon-plus">
                                                                        <span></span>
                                                                        <span></span>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="searchForm__button">
                                        <button class="button -accent-2 bg-accent-1 text-white px-30 rounded-200">
                                            Check Availability
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-anim-child="slide-up delay-7" class="hero-slider">
                            <div class="hero-slider__images relative overflow-hidden js-section-slider" data-gap="0"
                                data-slider-cols="xl-1 lg-1 md-1 sm-1 base-1" data-pagination="js-slider1-pagination">

                                <iframe width="100%" height="637px" class="vdo" style="border-radius: 20px;"
                                    src="https://www.youtube.com/embed/GNr6ks-dRy0?autoplay=1&mute=1&loop=1&playlist=GNr6ks-dRy0&controls=1"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                                <!-- <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/img/hero/banner-04.jpg" alt="image"
                                            class="hero-slider__image rounded-16" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/hero/banner-06.jpg" alt="image"
                                            class="hero-slider__image rounded-16" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/hero/banner-05.jpg" alt="image"
                                            class="hero-slider__image rounded-16" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/hero/banner-07.jpg" alt="image"
                                            class="hero-slider__image rounded-16" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/hero/banner-01.jpg" alt="image"
                                            class="hero-slider__image rounded-16" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/hero/banner-02.jpg" alt="image"
                                            class="hero-slider__image rounded-16" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/hero/banner-03.jpg" alt="image"
                                            class="hero-slider__image rounded-16" />
                                    </div>
                                </div> -->

                                <!-- <div class="hero-slider__nav">
                                    <button class="size-80 flex-center rounded-full js-prev">
                                        <i class="icon-arrow-left text-24 text-white"></i>
                                    </button>

                                    <button class="size-80 flex-center rounded-full js-next">
                                        <i class="icon-arrow-right text-24 text-white"></i>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero__arrow">
                <button class="size-70 flex-center rounded-full">
                    <i class="icon-arrow-down text-24"></i>
                </button>
            </div>
        </section>
        <!-- Hero-Section End -->

        <!-- View-Section Start -->
        <!-- <section class="layout-pt-lg">
            <div data-anim-wrap class="container">
                <div class="row justify-center text-center">
                    <div class="col-xl-10 col-lg-12">
                        <div data-split='lines' data-anim-child="split-lines delay-2">
                            <div class="text-15 uppercase mb-30 sm:mb-10">
                                PALASH KOTHI RESORT
                            </div>
                            <h2 class="text-64 md:text-40 capitalize">
                                Palash Kothi, Bandhavgarh - A Peaceful Stay in the <br class="lg:d-none" />
                                Heart of Nature.
                            </h2>
                        </div>

                        <div data-anim-child="slide-up delay-4" class="row justify-center">
                            <div class="col-lg-10">
                                <p class="mt-40 md:mt-20">
                                    Nestled among jasmine beds and fragrant Rajnigandha flowers, Palash Kothi offers a
                                    peaceful retreat where nature and serenity come together. Named after the ‘Flame of
                                    the Forest’ tree (Palash), this grand dwelling reflects elegance and charm. The
                                    Palash tree, sacred in Indian culture, symbolizes divinity and blessings. At Palash
                                    Kothi, experience the magic of nature, tradition, and luxury in a serene,
                                    forest-inspired setting.
                                </p>
                            </div>
                        </div>

                        <div data-anim-child="slide-up delay-5">
                            <button class="button -type-1 mx-auto mt-50 md:mt-30">
                                <i class="-icon">
                                    <svg width="50" height="30" viewBox="0 0 50 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M35.8 28.0924C43.3451 28.0924 49.4616 21.9759 49.4616 14.4308C49.4616 6.88577 43.3451 0.769287 35.8 0.769287C28.255 0.769287 22.1385 6.88577 22.1385 14.4308C22.1385 21.9759 28.255 28.0924 35.8 28.0924Z"
                                            stroke="#122223" />
                                        <path
                                            d="M33.4808 10.2039L32.9985 10.8031L37.2931 14.2623H0.341553V15.0315H37.28L33.0008 18.4262L33.4785 19.0285L39 14.6492L33.4808 10.2039Z"
                                            fill="#122223" />
                                    </svg>
                                </i>
                                Book now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row x-gap-50 y-gap-30 pt-100 sm:pt-50">
                    <div class="col-lg-4 col-sm-6">
                        <div data-anim-child="img-right cover-light-1 delay-2" class="rounded-16">
                            <img src="assets/img/about/view-01.jpg" alt="image" class="rounded-16 col-12" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="pt-100 md:pt-0">
                            <div data-anim-child="img-right cover-light-1 delay-3" class="rounded-16">
                                <img src="assets/img/about/view-02.jpg" alt="image" class="rounded-16 col-12" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div data-anim-child="img-right cover-light-1 delay-4" class="rounded-16">
                            <img src="assets/img/about/view-03.jpg" alt="image" class="rounded-16 col-12" />
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- View-Section End -->

        <!-- About-Section Start -->
        <section class="layout-pt-lg layout-pb-lg">
            <div data-anim-wrap class="container">
                <div class="row y-gap-50 items-center justify-between">
                    <div class="col-lg-6 col-md-9">
                        <div data-anim-child="slide-up delay-1" class="text-15 uppercase mb-20 sm:mb-10">
                            PALASH KOTHI RESORT
                        </div>
                        <h2 data-anim-child="slide-up delay-2" class="text-50 md:text-30 capitalize">
                            The Sound of Silence:
                        </h2>
                        <p data-anim-child="slide-up delay-3" class="lh-18 pr-60 lg:pr-0 mt-10 md:mt-30">
                            In a serene and sylvan surrounding, nestled amongst jasmine beds and Rajnigandha (tube
                            roses), you hear the Sounds of Silence. At Palash Kothi , Bandavgarh, this is no dream
                            sequence. It is true and real – a horizon where dream weds reality.
                        </p>
                        <p data-anim-child="slide-up delay-3" class="lh-18 pr-60 lg:pr-0 mt-10 md:mt-30">
                            The whistling woods are in meditative silence from dusk to dawn. The flap of a Bulbul’s
                            wings, as it leaves its nest at the crack of the dawn from amongst the scented Malti bush,
                            sharpens the quietness.
                        </p>
                        <p data-anim-child="slide-up delay-3" class="lh-18 pr-60 lg:pr-0 mt-10 md:mt-30">
                            The rustle of leaves and murmur of streams whisper the secrets of ardent lovers, Purush
                            (Man) and Prakriti (Nature). They unveil the story of creation in the Cosmic Dance of the
                            gods. As if an expression of Jibananda Das reverberates:
                        </p>
                        <p data-anim-child="slide-up delay-3" class="lh-18 pr-60 lg:pr-0 mt-10 md:mt-30">
                            At the day’s end evening crawls in like the sound of dews,
                        </p>
                        <p data-anim-child="slide-up delay-3" class="lh-18 pr-60 lg:pr-0 mt-10 md:mt-30">
                            The kite flaps off the smell of sun from its wings .
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <div data-anim-child="img-right cover-white delay-2">
                            <div class="imageGrid -type-3">
                                <img src="assets/img/about/inner.jpg" alt="image" height="455px" />
                                <img src="assets/img/about/outer.jpg" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-Section End -->

        <!-- Benefits-Section Start -->
        <section class="pb-74">
            <div class="container">
                <div data-anim-wrap class="row justify-center text-center">
                    <div data-anim-child="slide-up delay-3" class="col-xl-12 col-lg-12">
                        <div class="text-15 uppercase sm:mb-10">
                            PALASH KOTHI RESORT
                        </div>
                        <h2 class="text-64 md:text-40">
                            A Resort Full of Nature’s Charm
                        </h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="layout-pb-lg">
            <div class="container">
                <div data-anim-wrap class="row y-gap-30 items-center">
                    <div data-anim-child="img-right cover-light-1 delay-2" class="col-md-6">
                        <div class="ratio ratio-1:1">
                            <Image src="assets/img/benifites/2.jpg" alt="image" class="img-ratio rounded-16" />
                        </div>
                    </div>
                    <div class="col-md-5 ml-30 md:ml-0">
                        <p data-anim-child="slide-up delay-7" class="text-40 md:text-24 mt-30 rhymes">
                            I wandered lonely as a cloud <br />
                            That floats on high o'er vales and hills,<br />
                            When all at once I saw a crowd,<br />
                            A host, of golden daffodils;<br />
                            Beside the lake, beneath the trees,<br />
                            Fluttering and dancing in the breeze.<br />
                        </p>
                        <span data-anim-child="slide-up delay-8" class="d-block text-right mt-10">
                            -from <em><strong>'Daffodils'</strong></em> by <br>
                            <em><strong>'William Wordsworth'</strong></em>
                        </span>
                    </div>
                </div>
                <div data-anim-wrap class="row y-gap-30 items-center pt-100 sm:pt-50">
                    <div data-anim-child="img-right cover-white delay-1" class="col-md-6">
                        <div class="ratio ratio-1:1">
                            <img src="assets/img/benifites/1.jpg" alt="image" class="img-ratio rounded-16" />
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-3" class="col-md-5 ml-30 md:ml-0">
                        <p data-anim-child="slide-up delay-7" class="text-40 md:text-30 mt-30 rhymes">
                            Tyger, Tyger, burning bright, <br />
                            In the forests of the night;<br />
                            What immortal hand or eye.<br />
                            Could frame thy fearful symmetry?<br />
                        </p>
                        <span data-anim-child="slide-up delay-8" class="d-block text-right mt-10">
                            -from <em><strong>'The Tyger'</strong></em> by <br>
                            <em><strong>'William Blake'</strong></em>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Benefits-Section End -->


        <!-- Rooms-Section Start -->
        <section class="layout-pb-lg">
            <div data-anim-wrap class="container mt-10">
                <div data-anim-child="slide-up delay-2" class="row y-gap-30 justify-between items-end">
                    <div class="col-auto">
                        <div class="text-15 uppercase mb-30 sm:mb-10">EXPLORE</div>
                        <h2 class="text-64 md:text-40 lh-065">Cosmic Dance of the gods</h2>
                    </div>

                    <div class="col-auto">
                        <button class="button -type-1">
                            <i class="-icon icon-arrow-circle-right text-30"></i>
                            VIEW ALL MORE
                        </button>
                    </div>
                </div>

                <div class="relative">
                    <div class="col-12">
                        <p data-anim-child="slide-up delay-3" class=" mt-40 md:mt-30">
                            You can hear these – and more – at the beauteous resort, sprawled in the 25-acre Palash
                            Kothi, with a natural pond, an expansive swimming pool and a large variety of flora and
                            fauna. It’s a perfect getaway from the maddening crowd, the toil and tasks of everyday life.
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <div class="overflow-hidden mt-40 sm:mt-50 js-section-slider" data-gap="30"
                        data-slider-cols="xl-3 lg-3 md-2 sm-1 base-1" data-nav-prev="js-slider2-prev"
                        data-nav-next="js-slider2-next">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="roomCard -type-2 -hover-button-center">
                                    <div data-anim-child="img-right cover-white delay-2">
                                        <div class="roomCard__image ratio ratio-45:54 -hover-button-center__wrap">
                                            <img src="assets/img/rooms/3.jpg" alt="image"
                                                class="img-ratio rounded-16" />
                                        </div>
                                    </div>

                                    <div data-anim-child="slide-up delay-3" class="roomCard__content mt-30">
                                        <div class="d-flex justify-between items-end">
                                            <h3 class="roomCard__title lh-065 text-30 md:text-24">
                                                Kutias and Panchavati Van
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="#" class="roomCard -type-2 -hover-button-center">
                                    <div data-anim-child="img-right cover-white delay-4">
                                        <div class="roomCard__image ratio ratio-45:54 -hover-button-center__wrap">
                                            <img src="assets/img/rooms/2.jpg" alt="image"
                                                class="img-ratio rounded-16" />
                                        </div>
                                    </div>

                                    <div data-anim-child="slide-up delay-5" class="roomCard__content mt-30">
                                        <div class="d-flex justify-between items-end">
                                            <h3 class="roomCard__title lh-065 text-30 md:text-24">
                                                Ghosla (The Nest)
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="#" class="roomCard -type-2 -hover-button-center">
                                    <div data-anim-child="img-right cover-white delay-6">
                                        <div class="roomCard__image ratio ratio-45:54 -hover-button-center__wrap">
                                            <img src="assets/img/rooms/1.jpg" alt="image"
                                                class="img-ratio rounded-16" />
                                        </div>
                                    </div>

                                    <div data-anim-child="slide-up delay-7" class="roomCard__content mt-30">
                                        <div class="d-flex justify-between items-end">
                                            <h3 class="roomCard__title lh-065 text-30 md:text-24">
                                                Theme Garden
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="navAbsolute -type-2">
                        <button
                            class="button -outline-accent-1 size-80 md:size-60 flex-center rounded-full js-slider2-prev">
                            <i class="icon-arrow-left text-24 md:text-19"></i>
                        </button>

                        <button
                            class="button -outline-accent-1 size-80 md:size-60 flex-center rounded-full js-slider2-next">
                            <i class="icon-arrow-right text-24 md:text-19"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Rooms-Section End -->

        <!-- Experience-Section Start -->
        <section class="relative layout-pt-lg layout-pb-lg">
            <div class="sectionBg -mx-60 bg-accent-1 rounded-16"></div>

            <div data-anim-wrap class="container">
                <div class="row y-gap-40 items-center">
                    <div data-anim-child="slide-up delay-2" class="col-xl-3">
                        <div class="text-15 uppercase mb-20 sm:mb-10 text-white">
                            Discover Bandhavgarh
                        </div>
                        <p class="text-white lh-12 mt-20 md:mt-20">
                            Barely two kilometers away from Palash Kothi is the internationally renowned Bandavgarh
                            National Park, the haven of tigers. The jeep safari is thrilling and exciting. You see the
                            Big Cats move about or laze in grandeur. Playful cubs, watched over by a vigilant tigress,
                            are a thing of joy! Some of you might also choose the elephant safari and sight tigers very
                            close, seated on the back of the trained, majestic elephant.
                        </p>

                        <div class="d-flex items-center mt-60 md:mt-30">
                            <button class="button -outline-white size-50 flex-center rounded-full js-slider3-prev">
                                <i class="icon-arrow-left text-15 text-white"></i>
                            </button>

                            <button
                                class="button -outline-white size-50 flex-center rounded-full ml-30 js-slider3-next">
                                <i class="icon-arrow-right text-15 text-white"></i>
                            </button>
                        </div>
                    </div>

                    <div class="col-xl-9">
                        <div class="pl-40 lg:pl-0">
                            <div class="relative overflow-hidden js-section-slider" data-gap="20"
                                data-slider-cols="xl-3 lg-3 md-2 sm-1 base-1" data-nav-prev="js-slider3-prev"
                                data-nav-next="js-slider3-next">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div data-anim-child="img-right cover-accent-1 delay-2">
                                            <a href="#" class="baseCard -type-3">
                                                <div class="baseCard__image ratio ratio-33:45">
                                                    <img src="assets/img/cards/experience/experience-01.jpg" alt="image"
                                                        class="img-ratio rounded-16" />
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div data-anim-child="img-right cover-accent-1 delay-2">
                                            <a href="#" class="baseCard -type-3">
                                                <div class="baseCard__image ratio ratio-33:45">
                                                    <img src="assets/img/cards/experience/experience-02.jpg" alt="image"
                                                        class="img-ratio rounded-16" />
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div data-anim-child="img-right cover-accent-1 delay-2">
                                            <a href="#" class="baseCard -type-3">
                                                <div class="baseCard__image ratio ratio-33:45">
                                                    <img src="assets/img/cards/experience/experience-03.jpg" alt="image"
                                                        class="img-ratio rounded-16" />
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- <div class="swiper-slide">
                                        <div data-anim-child="img-right cover-accent-1 delay-2">
                                            <a href="#" class="baseCard -type-4">
                                                <div class="baseCard__image ratio ratio-33:45">
                                                    <img src="assets/img/cards/experience/experience-04.jpg" alt="image"
                                                        class="img-ratio rounded-16" />
                                                </div>
                                            </a>
                                        </div>
                                    </div> -->

                                    <div class="swiper-slide">
                                        <div data-anim-child="img-right cover-accent-1 delay-2">
                                            <a href="#" class="baseCard -type-3">
                                                <div class="baseCard__image ratio ratio-33:45">
                                                    <img src="assets/img/cards/experience/experience-05.jpg" alt="image"
                                                        class="img-ratio rounded-16" />
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- <div class="swiper-slide">
                                        <div data-anim-child="img-right cover-accent-1 delay-2">
                                            <a href="#" class="baseCard -type-3">
                                                <div class="baseCard__image ratio ratio-33:45">
                                                    <img src="assets/img/cards/experience/experience-06.jpg" alt="image"
                                                        class="img-ratio rounded-16" />
                                                </div>
                                            </a>
                                        </div>
                                    </div> -->

                                    <div class="swiper-slide">
                                        <div data-anim-child="img-right cover-accent-1 delay-2">
                                            <a href="#" class="baseCard -type-3">
                                                <div class="baseCard__image ratio ratio-33:45">
                                                    <img src="assets/img/cards/experience/experience-07.jpg" alt="image"
                                                        class="img-ratio rounded-16" />
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Experience-Section end -->


        <!-- How-To-Reach-Section-Start -->
        <section data-anim-wrap class="relative py-50 mt-100">
            <div data-anim-child="fade" class="sectionBg -type-1 rounded-16 overflow-hidden bg-light-1">
                <img src="assets/img/about/how.jpg" alt="image" />
            </div>

            <div class="container">
                <div class="row justify-end xl:mt-50">
                    <div class="col-xl-5">
                        <div data-anim-child="slide-up delay-1">
                            <i class="d-flex icon-map text-60 mb-10 md:mb-20"></i>
                        </div>
                        <div data-split="lines" data-anim-child="split-lines delay-1">
                            <h2 class="text-40 md:text-30">
                                How to Reach Palash Kothi
                            </h2>
                        </div>
                        <div data-anim-child="slide-up delay-3" class="newsletter -type-1 mt-40 md:mt-20">
                            <ul>
                                <li style="list-style: disc;">
                                    <strong>The closest train station is Umaria</strong>. Sleeper trains run from Delhi
                                    and Agra. Umaria is a jeep ride from Tala, the village at the Main Gate to
                                    Bandhavgarh.
                                </li>
                                <li style="list-style: disc;">
                                    <strong>From Katni :</strong> Tala (Bandhavgarh) is well connected to
                                    <strong>Katni</strong>, which
                                    is one of the major railway junctions nearby. Generally it takes 2-2.5 hrs and you
                                    can easily get vehicles to and from the station by jeeps or similar vehicles waiting
                                    at the exit of the Umaria railway station. <strong>It’s 270 km from
                                        Prayagraj</strong>, a major
                                    junction on the New Delhi-Howrah and Mumbai-Howrah routes.
                                </li>
                                <li style="list-style: disc;">
                                    <strong>From Khajuraho :</strong> Palash Kothi, Bandavgarh is also accessible from
                                    the major airports of Khajuraho (230 km) and Jabalpur (190 km) It is also just 230
                                    kms away from the Kanha tiger reserve.
                                </li>
                                <li style="list-style: disc;">
                                    <strong>From Delhi :</strong>
                                    <ul style="padding-left: 25px;">
                                        <li style="list-style: circle;">Fly to 5 ½ hours to Khajuraho (winter months
                                            only), and a 6-hour drive via Satna will get you to Palash Kothi. </li>
                                        <li style="list-style: circle;">Fly 3 ½ hours to Jabalpur, from where the lodge
                                            is a 4-hour drive away. </li>
                                        <li style="list-style: circle;">Fly to Gwalior; take a 12-hour train ride to
                                            Umaira, from where a 50-minute drive will get you to the Resort. </li>
                                        <li style="list-style: circle;">Fly to Gwalior, take a train to Katni (approx.
                                            10 hrs) and drive down to the lodge in 2 1/2 hours. </li>
                                        <li style="list-style: circle;">You could also take a train directly to Katni
                                            from Delhi (13-14 hours). </li>
                                    </ul>
                                    All trains from Delhi stop at Gwalior
                                </li>
                                <li style="list-style: disc;">
                                    <strong>From Mumbai :</strong> Fly to Bhopal and take a connecting flight to
                                    Jabalpur, from where the lodge is a 4-hour drive away.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How-To-Reach-Section-End -->

        <!-- Gallery-Section Start -->
        <section class="layout-pt-lg layout-pb-lg">
            <div data-anim-wrap class="px-60 md:px-20">
                <div class="row justify-center text-center">
                    <div data-split="lines" data-anim-child="split-lines delay-1" class="col-auto">
                        <div class="text-15 uppercase mb-30 sm:mb-10">@palash_kothi</div>
                        <h2 class="text-64 md:text-40">Palash Kothi Gallery</h2>
                    </div>
                </div>

                <div class="row y-gap-30 pt-100 sm:pt-50">
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-01.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-01.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-02.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-02.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-03.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-03.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-04.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-04.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-05.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-05.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-06.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-06.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-07.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-07.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-08.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-08.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-09.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-09.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-10.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-10.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-11.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-11.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-12.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-12.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-13.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-13.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                    <div class="w-1/5 md:w-1/2 sm:w-1/1">
                        <a data-anim-child="img-right cover-white delay-2" data-fancybox="gallery"
                            data-src="assets/img/gallery/gallery-14.jpg">
                            <div class="ratio ratio-1:1">
                                <img src="assets/img/gallery/gallery-14.jpg" alt="Gallery Image"
                                    class="img-ratio rounded-16" />
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <!-- Gallery-Section End -->

        <!-- Contact-Section Start -->
        <section class="layout-pb-lg">
            <div class="container">
                <div class="row justify-center text-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="mb-30">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clipPath="url(#clip0_632_5288)">
                                    <path
                                        d="M47.9511 0.57683C45.9935 -0.55357 43.4816 0.119689 42.3516 2.07726L36.7643 11.7548H24.7149C24.1755 11.7548 23.7383 12.1921 23.7383 12.7313C23.7383 13.2706 24.1755 13.7079 24.7149 13.7079H35.6366L31.5821 20.7308H8.78948C8.25011 20.7308 7.81289 21.1681 7.81289 21.7073C7.81289 22.2467 8.25011 22.6839 8.78948 22.6839H30.4543L28.199 26.5903H8.78948C8.25011 26.5903 7.81289 27.0276 7.81289 27.5669C7.81289 28.1061 8.25011 28.5435 8.78948 28.5435H27.795L27.3742 32.4498H8.78948C8.25011 32.4498 7.81289 32.8871 7.81289 33.4264C7.81289 33.9657 8.25011 34.403 8.78948 34.403H27.1638L27.1118 34.8853C27.0704 35.2697 27.2597 35.6424 27.5944 35.8356C27.7461 35.9232 27.9146 35.9665 28.0826 35.9665C28.2857 35.9665 28.488 35.9033 28.6588 35.7785L34.8944 31.2232C35.0043 31.1429 35.0961 31.0407 35.1641 30.9229L42.7745 17.7414V36.6703C42.7745 38.8585 40.9943 40.6388 38.8061 40.6388H16.1736C15.8246 40.6388 15.5022 40.8249 15.3278 41.1271L11.913 47.0418L8.49817 41.1271C8.32375 40.8249 8.00138 40.6388 7.65244 40.6388H5.92164C3.7334 40.6388 1.95317 38.8585 1.95317 36.6703V17.6764C1.95317 15.4882 3.7334 13.7079 5.92164 13.7079H15.9257C16.4651 13.7079 16.9023 13.2706 16.9023 12.7313C16.9023 12.192 16.4651 11.7548 15.9257 11.7548H5.92164C2.65642 11.7548 0 14.4112 0 17.6764V36.6703C0 39.9355 2.65642 42.592 5.92164 42.592H7.08856L11.0673 49.4832C11.2417 49.7854 11.5641 49.9715 11.913 49.9715C12.2619 49.9715 12.5843 49.7854 12.7587 49.4832L16.7374 42.592H38.8062C42.0714 42.592 44.7278 39.9355 44.7278 36.6703V17.6764C44.7278 16.8393 44.5503 16.0123 44.2107 15.2541L49.4516 6.17648C50.5818 4.21901 49.9087 1.70703 47.9511 0.57683ZM46.9745 2.26828C47.9994 2.85999 48.3517 4.17507 47.76 5.1999L47.202 6.16643L43.485 4.02037L44.043 3.05385C44.6347 2.02911 45.9497 1.67686 46.9745 2.26828ZM29.7203 28.9075L32.5315 30.5306L29.2904 32.8984L29.7203 28.9075ZM33.9609 29.1006L30.2439 26.9545L42.5084 5.71182L46.2254 7.85787L33.9609 29.1006Z"
                                        fill="#122223" />
                                    <path
                                        d="M20.3203 13.708C20.5771 13.708 20.8291 13.6035 21.0117 13.4219C21.1934 13.2402 21.2979 12.9883 21.2979 12.7314C21.2979 12.4746 21.1934 12.2227 21.0117 12.041C20.8291 11.8595 20.5781 11.7549 20.3203 11.7549C20.0635 11.7549 19.8115 11.8594 19.6299 12.041C19.4482 12.2227 19.3447 12.4746 19.3447 12.7314C19.3447 12.9883 19.4481 13.2402 19.6299 13.4219C19.8125 13.6035 20.0635 13.708 20.3203 13.708Z"
                                        fill="#122223" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_632_5288">
                                        <rect width="50" height="50" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <div class="text-15 uppercase mb-20">Get In touch</div>
                        <h2 class="text-64 md:text-40 capitalize">Leave us your info</h2>

                        <div class="contactForm row y-gap-30 pt-60">
                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" required class="" />
                                    <label class="lh-1 text-16 text-light-1">First Name</label>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" required class="" />
                                    <label class="lh-1 text-16 text-light-1">Last Name</label>
                                </div>

                            </div>
                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="email" required class="" />
                                    <label class="lh-1 text-16 text-light-1">Email</label>
                                </div>

                            </div>
                            <div class="col-12">

                                <div class="form-input ">
                                    <textarea required class="border-1" rows={8}></textarea>
                                    <label class="lh-1 ">Comment</label>
                                </div>

                            </div>
                            <div class="col-12">
                                <button class="button -md -type-2 w-1/1 bg-accent-2 -accent-1">SEND YOUR
                                    MESSAGE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-Section End -->


        <!-- Facilities-Section Start -->
        <!-- <section data-anim-wrap class="relative layout-pt-lg layout-pb-lg">
            <div data-anim-child="slide-up delay-2" class="sectionBg -mx-60 bg-light-1 rounded-16"></div>

            <div class="container">
                <div class="row justify-center text-center">
                    <div data-anim-child="slide-up delay-4" class="col-auto">
                        <div class="text-15 uppercase mb-30 sm:mb-10">OUR SERVICES</div>
                        <h2 class="text-64 md:text-40">Hotel Facilities</h2>
                    </div>
                </div>

                <div class="row y-gap-30 justify-between pt-100 sm:pt-50">
                    <div data-anim-child="slide-up delay-3" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-wifi"></i>
                            </div>
                            <h4 class="text-24 text-center mt-20">Wifi &amp; Internet</h4>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-4" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-bus"></i>
                            </div>
                            <h4 class="text-24 text-center mt-20">Airport Transfer</h4>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-5" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-tv"></i>
                            </div>
                            <h4 class="text-24 text-center mt-20">Smart TV</h4>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-6" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-bed"></i>
                            </div>
                            <h4 class="text-24 text-center mt-20">Breakfast in Bed</h4>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-7" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-laundry"></i>
                            </div>
                            <h4 class="text-24 text-center mt-20">Laundry Services</h4>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-8" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-housekeeper"></i>
                            </div>
                            <h4 class="text-24 text-center mt-20">Housekeeper Services</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Facilities-Section End -->

        <?php require_once('./components/footer.php') ?>
    </main>
    <?php require_once('./components/scripts.php') ?>
</body>

</html>