<?php
$pageTitle = 'NURT | O mnie';
$pageDescription = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut nobis dicta omnis repellat, voluptatem delectus. Corrupti deleniti ipsam expedita magnam ipsa molestias architecto, quia.';
include './components/head.php';
?>

<div class="page page-about">
    <div class="container">
        <div class="page-grid">

            <aside>
                <div class="aside-content">
                    <div class="top">
                        <a href="/">
                            STUDIO
                        </a>
                    </div>
                    <div class="mid">
                        <h1 class="page-title">O mnie</h1>
                    </div>
                    <div class="bot">
                        <a href="/">
                            <span class="icon-logodark"></span>
                        </a>
                    </div>
                </div>
            </aside>

            <main>
                <?php include './components/header.php'; ?>


                <div class="about-section standard-section">
                    <div class="container-in">
                        <!-- ONE  -->
                        <div class="part-one">
                            <div class="part-one__grid">
                                <div class="content-wrapper">
                                    <h1>Justyna Marczak</h1>
                                    <h2>Tworzę wnętrza skrojone na miarę mieszkańców, nie zawsze ściśle podążające za
                                        modą, zawsze spójne z klientem.</h2>
                                </div>
                                <div class="image-wrapper">
                                    <div class="filter-image">
                                        <img src="./assets/img/about/nurt-omnie-1.jpg"
                                            alt="Projektowanie wnętrz - Justyna Marczak">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ONE END -->

                        <!-- TWO  -->
                        <div class="part-two">
                            <div class="part-two__grid">
                                <div class="left-wrapper">
                                    <div class="filter-image">
                                        <img src="./assets/img/about/nurt-omnie-2.jpg"
                                            alt="Projektowanie wnętrz - Justyna Marczak">
                                    </div>
                                    <div class="text-grid">
                                        <p>Przez ostatnie cztery lata, jako samodzielna projektantka, zbierałam
                                            doświadczenie
                                            w projektowaniu wnętrz z równą uwagą
                                            na ich funkcjonalność i estetykę.</p>
                                    </div>
                                </div>
                                <div class="right-wrapper">
                                    <div class="text-wrapper">

                                        <p>Pierwsze kroki w projektowaniu wnętrz stawiałam jako 10-latka tworząc
                                            kompozycje
                                            z wycinków wnętrzarskich magazynów. Dekadę później rozbudzałam swoją
                                            kreatywność
                                            na ASP w Krakowie a równoległa praca w biurze projektowym nauczyła mnie jak
                                            przekładać wizję na rzeczywistość.</p>
                                    </div>
                                    <div class="filter-image">
                                        <img src="./assets/img/about/nurt-omnie-3.jpg"
                                            alt="Projektowanie wnętrz - Justyna Marczak">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- TWO END  -->

                        <!-- THREE  -->
                        <div class="part-three">
                            <div class="part-three__grid">
                                <div class="left-wrapper">

                                    <div class="filter-image">
                                        <img src="./assets/img/about/nurt-omnie-4.jpg"
                                            alt="Projektowanie wnętrz - Justyna Marczak">
                                    </div>
                                </div>
                                <div class="right-wrapper">
                                    <div class="text-wrapper">

                                        <p>Tworzę wnętrza skrojone na miarę mieszkańców – nie zawsze ściśle podążające
                                            za modą, zawsze spójne z klientem. Urządzanie swojego M to przełomowy moment
                                            w życiu, lubię być częścią tego procesu. Z przyjemnością pomogę znaleźć Twój
                                            własny, unikatowy styl nawet gdy twierdzisz, że nie wiesz czego chcesz.</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- THREE END  -->


                    </div>

                </div>

            </main>

        </div>
        <div class="page-bot">
            <div class="page-grid">
                <div class="bot__aside">

                </div>
                <div class="bot__main">
                    <!-- REVIEWS  -->
                    <?php include './components/reviews.php'; ?>
                    <!-- REVIEWS END -->
                    <!-- FOOTER  -->
                    <?php include './components/footer.php'; ?>
                    <!-- FOOTER END -->
                </div>
            </div>
        </div>
    </div>
</div>