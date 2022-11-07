<?php
$pageTitle = 'NURT | Projektowanie wnętrz';
$pageDescription = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut nobis dicta omnis repellat, voluptatem delectus. Corrupti deleniti ipsam expedita magnam ipsa molestias architecto, quia.';
include './components/head.php';
?>

<div class="page page-index">
  <div class="container">
    <div class="page-grid">

      <aside>
        <div class="aside-content">
          <div class="top">
            <p>STUDIO</p>
          </div>
          <div class="mid">
            <h1 class="page-title">Projekty</h1>
          </div>
          <div class="bot">
            <span class="icon-logodark"></span>
          </div>
        </div>
      </aside>

      <main>
        <?php include './components/header.php'; ?>
        <!-- HERO  -->
        <section class="hero-section standard-section">
          <div class="container-in">
            <div class="logotype-wrapper">
              <span class="icon-logotyp"></span>
            </div>
            <div class="duo-wrapper">
              <div class="standard-grid">
                <div class="text-wrapper">
                  <h1 class="hero-heading">Tworzę wnętrza skrojone na miarę mieszkańców – nie zawsze ściśle podążające za modą, zawsze spójne z klientem.</h1>
                </div>
                <div class="img-wrapper filter-image">
                  <img src="./assets/img/hero/nurtstudio-hero.jpg" alt="Projektowanie wnętrz - Nurt Studio">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- HERO END-->

        <!-- PROJECT  -->
        <div class="project-section standard-section">
          <div class="container-in">
            <div class="project-item">

              <div class="standard-grid project-grid">
                <div class="project-thumbnail-wrapper filter-image">
                  <img src="./assets/img/project/index-projekt1.jpg" alt="Projekt - Gdańsk IV">
                </div>
                <div class="project-title-wrapper">
                  <h2 class="project-title">Gdańsk IV</h2>
                </div>
                <div class="project-year-wrapper">
                  <date class="project-year">2022</date>
                </div>
                <div class="project-desc-wrapper">
                  <date class="project-desc">Sed egestas bibendum faucibus. Ut sit amet dui vel turpis laoreet placerat ac vel quam. Cras tristique malesuada justo.</date>
                </div>
                <div class="project-more-wrapper more">
                  <a class="more project-more" href="#">Zobacz projekt <span class="icon-arrowdark"></span></a>
                </div>


              </div>
            </div>
          </div>

        </div>
        <!-- PROJECT END -->

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

