<?php
$pageTitle = 'NURT | Q&A';
$pageDescription = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut nobis dicta omnis repellat, voluptatem delectus. Corrupti deleniti ipsam expedita magnam ipsa molestias architecto, quia.';
include './components/head.php';
?>

<div class="page page-qa">
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
                        <h1 class="page-title">Q&A</h1>
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



      <!-- FAQ  -->
      <?php include './components/faq.php'; ?>
        <!-- FAQ END -->

           

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