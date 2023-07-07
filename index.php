
<head>
  <link rel="stylesheet" href="./src/css/main.css">
</head>
<?php
ob_start();
include "./inc/header.php";
$buffer = ob_get_contents();
ob_end_clean();
$buffer = str_replace("%TITLE%", " Media Coalition & Awareness to Halt Trafficking ", $buffer);
echo $buffer;
?>   <section class="m-hero">
    <div class="container">
      <div class="m-hero__content col-lg-7 pl-0">
        <h1 class="title">MeCAHT is a coalition concerned with eliminating human trafficking and rehabilitating victims.</h1>
        <p class="desc">We are working to reduce the incidences of human trafficking among vulnerable groups in South Africa, Nigeria and Europe. </p>
        <div class="mt-3">
          <a href="about.php" class="link btn m-btn">
            Learn more about us
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="m-section">
    <div class="container">
      <div class="m-section__heading text-center">
        <h3>Our Story</h3>
      </div>
      <div class="row align-col-lg-3s-center">
        <div class="col-lg-6 p-0">
          <div class="m-section__content">
            <div class="m-section__content-wrapper">
              <p class="desc desc--faded">In 2016, a total number of 400 West African women who were alleged victims of human trafficking into prostitution were discovered through a campaign at 17 European airports carried out by the German Federal Criminal Police Office.
              </p>
              <p class="desc desc--faded">IOM identified and assisted the following numbers of victims of trafficking at landing sites and welcome centres in Italy in 2017.
              </p>
              <p class="desc desc--faded">Potential victims informed: 8.277, Victims identified: 6.599, Victims reported to the authorities: 421 (251 minors).
              </p>
              <p class="desc">
                Media Coalition & Awareness to Halt Trafficking (MeCAHT) is an international faith-based, media-driven, coalition working to reduce the incidences of human trafficking among vulnerable groups in South Africa, Nigeria and Europe.
              </p>
              <p class="desc">
                MeCAHT runs a Safehouse in Abuja called Greater Love Lighthouse (GLL). GLL provides a residential aftercare program for survivors of human trafficking.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 p-0">
          <div class="m-section__content">
            <div class="m-section__content-wrapper">
              <img src="./assets/page_images/world.png" alt="World Image">
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-6">
          <div class="info-card">
            <div class="info-card__body">
              <div>
                <p class="text">“The recruitment, transportation, transfer, harboring or receipt of persons, by the use of threat, force, coercion, abduction, fraud, deception, abuse of power, taking advantage of vulnerability,
                  and involves receiving of payments or benefits for the purpose of exploitation”
                </p>
                <div class="text-right mt-4">
                  <a href="#" class="is-link">(Source: Palermo Protocol)
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info-card">
            <div class="info-card__body">
              <div>
                <p class="text">“There are an estimated 40 million people trapped in Modern Slavery. Women and girls are disproportionately affected, accounting for almost 71 % of the overall total.”
                </p>
                <div class="text-right mt-4">
                  <a href="#" class="is-link">(Source: Global Slavery Index 2017)
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="m-section__footer text-center col-lg-7 mx-auto mt-5">
        <h4>Our goal is to rehabilitate and empower the restored victims with practical and life skills to
          enable them to reintegrate into the society. </h4>
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
