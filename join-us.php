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

        <h1 class="title">GET INVOLVED</h1>
    </div>
</section>

<section class="m-section">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-6 mx-auto">
                <form @submit.prevent="getInvolved" class="contact-form d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="m-section__heading text-left p-0">
                            <h3 class="text-dark">Get Involved, Be a part of the movement</h3>
                        </div>
                        <div class="form-group">
                            <label class="small">Full Name</label>
                            <input type="text" v-model="fullName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="small">Email Address</label>
                            <input type="email" v-model="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="small">Phone Number</label>
                            <input type="text" v-model="phoneNumber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="small">Gender</label>
                            <select class="form-control" v-model="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Prefer not to say">Prefer not to say</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label class="small">Location</label>
                            <select class="form-control" v-model="location" required>
                                <option disabled selected>--Select State--</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross Rive">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="FCT">Federal Capital Territory</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="small">How would you like to get involved?</label>
                            <select class="form-control" v-model="get_involded_by" required>
                                <option value="Partner or Volunteer"> I want to Volunteer or Partner</option>
                                <option value="I want to donate">I want to Donate</option>
                                <option value="I want to join the campaign">I want to join the campaign</option>
                                <option value="I want to attend conferences">I want to attend conferences</option>
                            </select>
                        </div>
                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn m-btn">{{volunteerBtn}}</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div class="pt-5">

            <?php
include "./components/newsletter.php";
?>
        </div>

</section>

<?php
include "./inc/footer.php";
?>