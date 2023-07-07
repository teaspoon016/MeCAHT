<?php
ob_start();
include "./inc/header.php";
$buffer = ob_get_contents();
ob_end_clean();
$buffer = str_replace("%TITLE%", "MeCAHT | Get Involved", $buffer);
echo $buffer;
?>

<section class="page-hero contact">
	<div class="container text-center">
		<p class="small text-white">Join us in touching lives</p>
		<h1 class="title">Get Involved</h1>
	</div>
</section>
<section class="m-section">
	<div class="container">
					    <div class="m-section__heading text-center">
      <h3>You too can be part of us</h3>
      <p class="text-white small">Choose where you want to help out</p>
    </div>
    					    <div class="m-section__heading text-center">
      <h3>Want to partner with us, volunteer in any of our events or join our prayer team?</h3>
      <p class="text-white small">Click on the button below</p>
      <div class="mt-3">
      	<a href="#!" class="link btn m-btn">
                Get Involved
              </a>
      </div>
    </div>

        					    <div class="m-section__heading text-center">
      <h3>Want to donate to any of our good causes?</h3>
      <p class="text-white small">Click on the button below</p>
      <div class="mt-3">
      	<a href="#!" class="link btn m-btn">
                Get Involved
              </a>
      </div>
    </div>
  <div class="m-section__heading text-center">
      <h3>Join our campaign to end human trafficking in Nigeria?</h3>
      <p class="text-white small">Click on the button below</p>
      <div class="mt-3">
      	<a href="#!" class="link btn m-btn">
                Get Involved
              </a>
      </div>
    </div>
<div class="m-section__heading text-center">
      <h3>Attend Our conferences?</h3>
      <p class="text-white small">Click on the button below</p>
      <div class="mt-3">
      	<a href="#!" class="link btn m-btn">
                Get Involved
              </a>
      </div>
    </div>
<?php
include "./components/newsletter.php";
?>
	</div>
	</section>



<?php
include "./inc/footer.php";
?>
