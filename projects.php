<?php
ob_start();
include "./inc/header.php";
$buffer = ob_get_contents();
ob_end_clean();
$buffer = str_replace("%TITLE%", "MeCAHT | Projects", $buffer);
echo $buffer;
?>

<section class="page-hero projects">
      <div class="container text-center">
            <h1 class="title">PROJECTS</h1>
      </div>
</section>
<section class="m-section" id="whoWeAre">
      <div class="container">
            <div class="m-section__heading text-center">
                  <h3>Some of Our Accomplished Works</h3>
            </div>
            <div class="row mt-4">
                  <a href="#" class="col-lg-6 d-block text-center text-white font-weight-bold small mb-5 project-link">
                        <div class="project-card gll">
                              <div class="project-card__body">

                              </div>
                        </div>
                                                            <h3>Greater Love <br> Lighthouse Project</h3>
                  </a>
                  <a href="#" class="col-lg-6 d-block text-center text-white font-weight-bold small mb-5 project-link">
                        <div class="project-card prv">
                              <div class="project-card__body">

                              </div>
                        </div>
                                                            <h3>Prevention of Human <br>Trafficking in Edo State</h3>
                  </a>
                  <a href="#" class="col-lg-6 d-block text-center text-white font-weight-bold small mb-5 project-link">
                        <div class="project-card nor">
                              <div class="project-card__body">
                                                                 </div>
                        </div>
                         <h3>Media Advocacy</h3>

                  </a>
                  <a href="#" class="col-lg-6 d-block text-center text-white font-weight-bold small mb-5 project-link">
                        <div class="project-card exh">
                              <div class="project-card__body">

                              </div>
                        </div>
                          <h3>Capacity Building of Safehouses Project</h3>
                  </a>
                                     <a href="#" class="col-lg-6 d-block text-center text-white font-weight-bold small mb-5 project-link">
                        <div class="project-card biz">
                              <div class="project-card__body">

                              </div>
                        </div>
                           <h3>sustainable freedom program</h3>
                  </a>

                  <a href="#" class="col-lg-6 d-block text-center text-white font-weight-bold small mb-5 project-link">
                        <div class="project-card walk">
                              <div class="project-card__body">

                              </div>
                        </div>
                         <h3>walk a mile in her shoes</h3>
                  </a>
                  <a href="#" class="col-lg-6 d-block text-center text-white font-weight-bold small mb-5 project-link">
                        <div class="project-card media">
                              <div class="project-card__body">

                              </div>
                        </div>
                        <h3>MECAHT INTERNATIONAL HUMAN TRAFFICKING CONFERENCE</h3>
                  </a>

                    <a href="#" class="col-lg-6 d-block text-center text-white font-weight-bold small mb-5 project-link">
                        <div class="project-card film">
                              <div class="project-card__body">

                              </div>
                        </div>
                         <h3>Film making</h3>
                  </a>
            </div>

      </div>
</section>
<div class="container">
            <?php
include "./components/newsletter.php";
?>
      </div>
</section> <?php
include "./inc/footer.php";
?>
