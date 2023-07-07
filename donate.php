<?php
ob_start();
include "./inc/header.php";
$buffer = ob_get_contents();
ob_end_clean();
$buffer = str_replace("%TITLE%", "MeCAHT | About us", $buffer);
echo $buffer;
?>

<section class="page-hero about">
  <div class="container text-center">
    <h1 class="title">DONATE</h1>
  </div>
</section>
<main class="bg-white">
<section class="m-section" id="whoWeAre">
  <div class="container">
    <div class="row align-items-center">
            <div class="col-lg-6">
        <div class="m-section__content">
          <div class="m-section__content-wrapper">
                 <div class="m-section__heading text-left p-0">
          <h3 class="text-dark">Who We Are</h3>
        </div>
            <p class="desc desc--faded text-dark">• We started in Nigeria in 2008 & registered in 2015 as MeCAHT (Media Coalition & Awareness to Halt Human Trafficking)</p>
            <p class="desc desc--faded text-dark">• We registered in 2014 in South Africa as MeCAHT (Media Campaign Against Human Trafficking) </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-0">
        <div class="m-section__content">
          <div class="m-section__content-wrapper">
            <img src="./assets/page_images/about-img.png" alt="World Image" class="img-fluid">
          </div>
        </div>
      </div>

    </div>
</section>
<?php
include "./components/partners.php";
?>

<div>
  <h3 style="text-align:center;color:#fff">We are Government Certified</h3>
   <img src="./assets/cac.png" style="width:100%;height:30vh;object-fit:contain" alt="Cac Image">
</div>
  <div class="container">
    <?php
include "./components/newsletter.php";
?>
  </div>
<?php
include "./inc/footer.php";
?>
