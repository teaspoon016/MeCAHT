<?php
ob_start();
include "./inc/header.php";
$buffer = ob_get_contents();
ob_end_clean();
$buffer = str_replace("%TITLE%", "MeCAHT | Contact us", $buffer);
echo $buffer;
?>

<section class="page-hero contact">
	<div class="container text-center">
		<p class="small text-white">Got A Question?</p>
		<h1 class="title">CONTACT MECAHT</h1>
	</div>
</section>

<section class="m-section">
	<div class="container">
		<div class="row mt-4">
			<div class="col-lg-6 mb-3">
				<div class="contact-info">
					<div class="p-1">
						<h4 class="title">Find Us in Your City</h4>
						<p>Abuja </p>
						<p>Plateau State  </p>
						<p>Edo State  </p>
						<p>Kaduna State  </p>
						<p>Oyo State</p>
						<h4 class="title mt-3">Email Address</h4>
						<p>info@mecahtnig.org</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<form @submit.prevent="sendMessage" class="contact-form d-flex align-items-center">
					<div class="col-lg-12">
					<div class="form-group">
						<label class="small">Full Name</label>
						<input type="text" v-model="fullName" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="small">Email Address</label>
						<input type="email"  v-model="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="small">Phone Number</label>
						<input type="text"  v-model="phoneNumber" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="small">Message</label>
					<textarea class="form-control"  v-model="message" required></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn m-btn">{{submitBtn}}</button>
					</div>
					</div>
				</form>

			</div>
		</div>

		<div class="pt-5">
			    <div class="m-section__heading text-center">
      <h3>FIND US IN YOUR CITY</h3>
    </div>
   <div class="location">
   	<div class="location--info">
   		<img src="./assets/icons/nigeria.png">
   		<h3 class="location--country">Nigeria</h3>
   	</div>

   	<div class="row mt-4">
   		<div class="col-lg-4 mt-3">
		<h4 class="location--city">Abuja</h4>
		<p class="location--address">Address: Plot 487, I(R)73road Federal
Housing Authority lugbe, FCT Abuja,
Sector R by AMAC Market</p>
   		</div>
   		<div class="col-lg-4 mt-3">
		<h4 class="location--city">Pleateau State</h4>
		<p class="location--address">Address: Media Village Nigeria Opposite
Elipse Construction after J.T Useni House,
Millionaires Quarters, Jos</p>
   		</div>
   		<div class="col-lg-4 mt-3">
		<h4 class="location--city">Edo State</h4>
		<p class="location--address">State Coordinator: Rev Dr Sharp E. Okoro</p>
		<p class="location--address">Phone No: 08023375317</p>
		<p class="location--address">Address: 25, Etin Osa Street, Off Wire RD,
Ihogbe qtrs Benin city, Edo State.</p>
   		</div>
   		<div class="col-lg-4 mt-3">
		<h4 class="location--city">Kaduna State</h4>
		<p class="location--address">State Coordinator: Jonathan G Maigari</p>
		<p class="location--address">Phone No: 08054950647</p>
		<p class="location--address">Address: Narayi HighCost Plaza Kaduna
State</p>
   		</div>
   		<div class="col-lg-4 mt-3">
		<h4 class="location--city">Oyo State</h4>
		<p class="location--address">State Coordinator: Kingsley Okotie</p>
		<p class="location--address">Phone No: 07038978033</p>
		<p class="location--address">Address: 12,Amore St, Opposite Orita
Police Station, Orita challenge
Ibadan, Oyo State</p>
   		</div>
   	</div>
   </div>
      <div class="location mt-5">
   	<div class="location--info">
   		<img src="./assets/icons/south-africa.png">
   		<h3 class="location--country">South Africa</h3>
   	</div>

   	<div class="row mt-4">
   		<div class="col-lg-4 mt-1">
		<h4 class="location--city">Cape Town</h4>
		<p class="location--address">Address: MeCAHT Centre No. 54 Sipres Avenue,
Thornton, Cape Town, South Africa</p>
   		</div>

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
