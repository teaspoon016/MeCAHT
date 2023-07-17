<?php
ob_start();
include "./inc/header.php";
$buffer = ob_get_contents();
ob_end_clean();
$buffer = str_replace("%TITLE%", "MeCAHT | Donate", $buffer);
echo $buffer;
?>

<section class="page-hero media">
	<div class="container text-center">
		<h1 class="title">Donate</h1>
	</div>
</section>
<section class="m-section" id="structure" style="min-height: 10vh;">
	<div class="container">
		<div class="m-section__heading text-center mb-0 pb-0">
			<h3>Account Details</h3>
		</div>
		<div class="col-lg-8 mx-auto">
			<div class="row">
				<div class="col-6">
					<div class="m-section__content sm text-center">
						<div class="m-section__content-wrapper col-lg-12">
							<a href="#">
								<div class="d-flex align-items-center justify-content-center">
									<div class="num p-2">
										<span class="sm"></span>
									</div>
									<div style="text-align: left;" class="acct">
										<p class="desc desc--faded mt-0 text-left">Account Name</p>
										<p style="color: #F4F1F1; max-width:200%;" >Guarantee Trust Bank: Media Coalition & Awareness to Halt Human Trafficking</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="m-section__content sm text-center">
						<div class="m-section__content-wrapper col-lg-12">
							<a href="#">
								<div class="d-flex align-items-center justify-content-center">
									<div class="num p-2">
										<span class="sm"></span>
									</div>
									<div class="acct">
									<p class="desc desc--faded mt-0 text-left">Account Number</p>
									<p style="color: #F4F1F1;">0159448383</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="m-section__content sm text-center">
						<div class="m-section__content-wrapper col-lg-12">
							<a href="#">
								<div class="d-flex align-items-center justify-content-center">
									<div class="num p-2">
										<span class="sm"></span>
									</div>
									<div class="acct">
									<p class="desc desc--faded mt-0 text-left">Swift Code</p>
									<p style="color: #F4F1F1;">GTBINGLA</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	</div>
</section>
<!-- <?php
include "./components/partners.php";
?> -->

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
