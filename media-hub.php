<?php
ob_start();
include "./inc/header.php";
include "./inc/modal.php";
$buffer = ob_get_contents();
ob_end_clean();
$buffer = str_replace("%TITLE%", "MeCAHT | Media Hub", $buffer);
echo $buffer;
?>

<section class="page-hero media">
	<div class="container text-center">
		<h1 class="title">MEDIA HUB</h1>
	</div>
</section>
<section class="m-section" id="structure" style="min-height: 10vh;">
	<div class="container">
		<div class="m-section__heading text-center mb-0 pb-0">
			<h3>Download Proposals</h3>
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
									<p class="desc desc--faded mt-0 text-left">2020 MeCAHT Profile </p>
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
									<p class="desc desc--faded mt-0 text-left">2020 MeCAHT Land Proposal </p>
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
<section class="m-section" id="structure">
	<div class="container">
		<div class="m-section__heading text-center">
			<h3>Founder’s Video</h3>
		</div>
		<div class="row mt-4">
			<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/welcome-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#welcome-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Welcome Video</h4>
									</div>
			</div>
						<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/thankyou-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#thankyou-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Thank You Video</h4>
									</div>
			</div>
								<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/greetings-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#greetings-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Greetings from Anne</h4>
									</div>
			</div>
								<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/channelten-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#channelten-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Channel Ten Norway
with Alex and Anne
Abok part 2</h4>
									</div>
			</div>
		</div>

	</div>
	</div>
</section>
<section class="m-section" id="structure">
	<div class="container">
		<div class="m-section__heading text-center">
			<h3>Commercial Videos</h3>
		</div>
		<div class="row mt-4">
			<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/ad-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#ad-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">MeCAHT Ad - by Michael Chidubem</h4>
									</div>
			</div>
						<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/speakup-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#speakup-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">"I Will Speak Up" PSA</h4>
									</div>
			</div>
		</div>

	</div>
	</div>
</section>
<section class="m-section" id="structure">
	<div class="container">
		<div class="m-section__heading text-center">
			<h3>Movies and Trailers</h3>
		</div>
		<div class="row mt-4">
						<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/desperate-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#desperate-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Desperate Journeys Official Trailer</h4>
									</div>
			</div>
									<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/portia-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#portia-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">"Portia" Human Trafficking Film Trailer</h4>
									</div>
			</div>
									<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/mediavillage-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#mediavillage-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Media Village Nigeria Changing Lives</h4>
									</div>
			</div>
									<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/europe-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#europe-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Human Trafficking Film Trailer - 'Europe in my Heart'</h4>
									</div>
			</div>
												<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/mirror-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#mirror-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Girl In The Mirror Film</h4>
									</div>
			</div>
									<div class="col-lg-6 mx-auto">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/someone-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#someone-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">There is Someone Video</h4>
									</div>
			</div>
		</div>

	</div>
	</div>
</section>
<section class="m-section" id="structure">
	<div class="container">
		<div class="m-section__heading text-center">
			<h3>Event Videos</h3>
		</div>
		<div class="row mt-4">
			<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/1nov-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#nov-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">1 Nov Mecaht Fire Poi1 Nov Mecaht Fire Poi</h4>
									</div>
			</div>
						<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/watchman-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#watchman-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Watchman on the Wall looks at the fight against Human Trafficking</h4>
									</div>
			</div>
						<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/salt-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#salt-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Salt & Light Episode 20</h4>
									</div>
			</div>
									<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/watchmen-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#watchmen-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Watchmen on the Wall looks at the MeCAHT Human Trafficking Conference 2015</h4>
									</div>
			</div>
		</div>

	</div>
	</div>
</section>
<section class="m-section" id="structure">
	<div class="container">
		<div class="m-section__heading text-center">
			<h3>Bonus: Documentary</h3>
		</div>
		<div class="row mt-4">
			<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/benintoitaly-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#benintoitaly-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Documentary: From Benin City To Italy</h4>
									</div>
			</div>
						<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/voodoo-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#voodoo-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Voodoo and Africans in Europe ,Nigerian connection 3</h4>
									</div>
			</div>
									<div class="col-lg-6">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/ng-connection-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#ng-connection-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Africans in Europe ,Nigerian connection 1</h4>
									</div>
			</div>
												<div class="col-lg-6 mx-auto">
				<div class="vid_box" style="background: linear-gradient(to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.6)),
        url(./assets/vid-thumb/ng-connection2-vid.png); background-position: center; background-size: cover;">
										<div class="play_btn " data-toggle="modal" data-target="#ng-connection2-vid">
											<i class="ti-control-play"></i>
										</div>
									</div>
									<div class="text-center mt-3">
										<h4 class="vid-label">Africans in Europe ,Nigerian connection 2</h4>
									</div>
			</div>
		</div>
<?php
include "./components/newsletter.php";
?>
	</div>

	</div>
</section>
<?php
include "./inc/footer.php";
?>
