<?php
$pageTitle = 'NURT | Projekty';
$pageDescription = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut nobis dicta omnis repellat, voluptatem delectus. Corrupti deleniti ipsam expedita magnam ipsa molestias architecto, quia.';
include './components/head.php';
?>

<div class="page page-projects">
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


        <!-- PROJECT  -->
        <div class="project-section standard-section">
          <div class="container-in">
            <div class="project-item">

              <div class="standard-grid project-grid">
                <div class="project-thumbnail-wrapper filter-image">
                  <img src="./assets/img/project/index-projekt1.jpg" alt="Projekt - Gdańsk IV">
                </div>
                <div class="project-title-wrapper">
                  <h2 class="project-title">Gdańsk III</h2>
                </div>
                <div class="project-year-wrapper">
                  <date class="project-year">2021</date>
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
        <!-- PROJECT  -->
        <div class="project-section standard-section">
          <div class="container-in">
            <div class="project-item">

              <div class="standard-grid project-grid">
                <div class="project-thumbnail-wrapper filter-image">
                  <img src="./assets/img/project/index-projekt1.jpg" alt="Projekt - Gdańsk IV">
                </div>
                <div class="project-title-wrapper">
                  <h2 class="project-title">Gdańsk V</h2>
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