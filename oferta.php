<?php
$pageTitle = 'NURT | Oferta';
$pageDescription = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut nobis dicta omnis repellat, voluptatem delectus. Corrupti deleniti ipsam expedita magnam ipsa molestias architecto, quia.';
include './components/head.php';
?>

<div class="page page-offer">
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
                        <h1 class="page-title">Oferta</h1>
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


                <div class="offer-section ">
                    <div class="offer-table">
                        <div class="offer-grid">

                            <div class="left-side">
                                <div class="top-cells">
                                    <div class="cell etapy-cell">
                                        <h3>etapy</h3>
                                    </div>
                                </div>
                                <div class="normal-cells">
                                    <div class="cell">
                                        <h3>Spotkanie</h3>
                                    </div>
                                    <div class="cell">
                                        <h3>Wybór inspiracji</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="right-side-inner">
                                    <div class="top-cells table-grid offer-top">
                                        <div class="cell plan">
                                            <div class="plan-top">
                                                <h2 class="plan-title">Koncepcyjny</h2>
                                                <p class="plan-desc">
                                                    Wybierz jeśli potrzebujesz tylko pomysłu, a z resztą poradzisz sobie
                                                    sam
                                                </p>
                                            </div>
                                            <p class="plan-size">
                                                150zł/m2
                                            </p>

                                        </div>
                                        <div class="cell plan">
                                            <div class="plan-top">
                                                <h2 class="plan-title">Kompleksowy</h2>
                                                <p class="plan-desc">
                                                    Wybierz jeśli potrzebujesz pomysłu
                                                    oraz informacji i wszelkich wytycznych
                                                    do jego wykonania
                                                </p>
                                            </div>
                                            <p class="plan-size">
                                                200zł/m2
                                            </p>
                                        </div>
                                        <div class="cell plan">
                                            <div class="plan-top">

                                                <h2 class="plan-title">Pod klucz</h2>
                                                <p class="plan-desc">
                                                    Wybierz jeśli chcesz mieć
                                                    święty spokój
                                                </p>
                                            </div>
                                            <p class="plan-size">
                                                wycena indywidualna
                                            </p>
                                        </div>
                                    </div>
                                    <div class="normal-cells table-grid">
                                        <div class="cell">
                                            <h3>11</h3>
                                        </div>
                                        <div class="cell">
                                            <h3>22</h3>
                                        </div>
                                        <div class="cell">
                                            <h3>33</h3>
                                        </div>
                                        <div class="cell">
                                            <h3>44</h3>
                                        </div>
                                        <div class="cell">
                                            <h3>55</h3>
                                        </div>
                                        <div class="cell">
                                            <h3>66</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


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