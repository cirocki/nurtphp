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
                <div class="img-wrapper">
                  <img src="./assets/img/hero/nurtstudio-hero.jpg" alt="Projektowanie wnętrz - Nurt Studio">
                </div>
              </div>
            </div>
            
          </div>
        </section>
        <!-- HERO END-->
    
        <!-- FAQ  -->
        <?php include './components/faq.php'; ?>
        <!-- FAQ END -->

      </main>

    </div>
  </div>
</div>

<?php include './components/footer.php'; ?>