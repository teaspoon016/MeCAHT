<?php
ob_start();
include "./inc/header.php";
$buffer = ob_get_contents();
ob_end_clean();
$buffer = str_replace("%TITLE%", "MeCAHT | Services", $buffer);
echo $buffer;
?>
<section class="page-hero services">
  <div class="container text-center">
    <h1 class="title">Services</h1>
  </div>
</section>
<section class="m-section pt-5 pb-5">
  <div class="container">
    <div class="row no-gutters mt-3">
      <div class="col-lg-6 p-0  bg--red">
        <div class="m-section__content">
          <div class="m-section__content-wrapper text-center col-lg-12 pt-3 pb-3">
            <div class="m-section__heading text-center pt-1 pb-1">
              <h3>PREVENTION</h3>
            </div>
            <p class="desc">Awareness </p>
            <p class="desc">Film </p>
            <p class="desc">School Programs </p>
            <p class="desc"> International Conference </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-0">
        <div class="m-section__content p-0">
          <div class="m-section__content-wrapper text-center col-lg-12 p-0">
            <img src="./assets/page_images/services1.png" alt="" class="no-radius">
          </div>
        </div>
      </div>
    </div>
    <div class="row no-gutters mt-3 reverse-column">
      <div class="col-lg-6 p-0">
        <div class="m-section__content p-0">
         <div class="m-section__content-wrapper text-center col-lg-12 p-0">
            <img src="./assets/page_images/services2.png" alt="" class="no-radius">
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-0  bg--red">
        <div class="m-section__content">
          <div class="m-section__content-wrapper text-center col-lg-12 pt-3 pb-3">
            <div class="m-section__heading text-center pt-1 pb-1">
              <h3>INTERVENTION</h3>
            </div>
            <p class="desc">Prayer </p>
            <p class="desc">Spiritual Warface </p>
            <p class="desc">Psychosocial Support </p>
            <p class="desc"> Outreach, Bible Studies </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row no-gutters mt-3">
      <div class="col-lg-6 p-0  bg--red">
        <div class="m-section__content">
          <div class="m-section__content-wrapper text-center col-lg-12 pt-3 pb-3">
            <div class="m-section__heading text-center pt-1 pb-1">
              <h3>POST CARE</h3>
            </div>
            <p class="desc">Job Creation for Survivors </p>
            <p class="desc">Job Training / Skills Development </p>
            <p class="desc">Empowerment programmes </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-0">
        <div class="m-section__content p-0">
           <div class="m-section__content-wrapper text-center col-lg-12 p-0">
            <img src="./assets/page_images/services3.png" alt="" class="no-radius">
          </div>
        </div>
      </div>
    </div>
    <div class="row no-gutters mt-3 reverse-column">
      <div class="col-lg-6 p-0">
        <div class="m-section__content p-0">
   <div class="m-section__content-wrapper text-center col-lg-12 p-0">
            <img src="./assets/page_images/services4.png" alt="" class="no-radius">
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-0  bg--red">
        <div class="m-section__content">
          <div class="m-section__content-wrapper text-center col-lg-12 pt-3 pb-3">
            <div class="m-section__heading text-center pt-1 pb-1">
              <h3>OTHER SERVICES</h3>
            </div>
            <p class="desc">Training and Workshops </p>
            <p class="desc">Rehabilitation </p>
            <p class="desc">Victim Assitance </p>
            <p class="desc"> Media Engagement & Campaign </p>
            <p class="desc"> Networking </p>
          </div>
        </div>
      </div>
    </div>
    <?php
include "./components/newsletter.php";
?>
  </div>
</section> <?php
include "./inc/footer.php";
?>
