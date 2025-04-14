
<!-- header menu -->
<?php $showSubMenu=true; include('includes/header.inc.php'); ?>

    <main class="main__scroll__area"> 
        <section class="registered__contractor__page py-4">
            <div class="container py-md-3">
                <div class="box__shadow bg-white p-4 rounded-4 mb-3 mb-md-4">
                    <h1 class="fw-semibold mb-0 lead-lg title__color text-center text-lg-start">Apply for the Pemit</h1>
                </div>
                <div class="row g-4">
                    <div class="col-xl-7"> 
                        <div class="auth__form__box box__shadow bg-white p-4 rounded-top-4">
                            <p class="text-2b lead-sm fw-semibold pb-3">Profile Information</p>
                           
                            <form>
                                <div class="d-flex flex-row flex-wrap gap-3 align-items-center mb-3 mb-md-4">
                                    <img src="assets/images/resources/contractor-login.webp" alt="img-fluid" class="profile__image rounded-circle object-fit-cover" width="100" height="100">
                                    <div class="col">
                                        <p class="mb-0 lead-sm fw-semibold text-2b">Company Name</p>
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label">Company Name</label>
                                            <input type="text" name="company_name" class="form-control" placeholder="Enter Company Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label">Email Address</label>
                                            <input type="email" name="email" class="form-control" placeholder="Enter Company Email" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group country__code__box">
                                            <label class="label">Company Phone Number</label>
                                            <div class="d-flex gap-3 flex-row"> 
                                                <div class="code__box">
                                                    <input type="hidden" name="phoneDialCode" id="phoneDialCode">
                                                    <input type="text" name="country_code" id="country_code" class="form-control" placeholder="Country Code">
                                                </div>
                                                <div class="col"> 
                                                    <input type="text" name="phone_number" class="form-control" placeholder="11111111" />
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label">Company Trade License Number </label>
                                            <input type="text" name="company_trade_license_number" class="form-control" placeholder="Enter Company Trade License Number" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label">Company Address</label>
                                            <input type="text" name="company_address" class="form-control" placeholder="Enter Company Address" />
                                        </div>
                                    </div>  
                                </div> 
                            </form>
                        </div><!-- auth__form__box -->
 
                        <div class="box__shadow bg-white p-4 my-1 d-flex flex-row flex-wrap gap-3 align-items-center">
                            <h2 class="fw-semibold mb-0 lead-lg title__color text-center text-lg-start">Work Permit</h2>
                            <select name="work_permit" id="work_permit" class="form-select permit__select lead-sm fw-medium">
                                <option value="0">Low Risk Workers</option>
                                <option value="1">High Risk / Hazardous Workers</option> 
                            </select>
                        </div>

                        <div class="auth__form__box box__shadow bg-white p-4 mt-1">
                            <p class="text-2b lead-sm fw-semibold pb-3 pb-lg-4">General Details</p>
                             
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Work Activity Title </label>
                                        <input type="text" name="company_name" class="form-control" placeholder="Enter Work Activity Title " />
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block"> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Vessel Name</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Vessel Name" />
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Berth Number</label>
                                        <input type="text" name="company_trade_license_number" class="form-control" placeholder="Enter Company Trade License Number" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Vessel Number</label>
                                        <input type="text" name="company_address" class="form-control" placeholder="Enter Company Address" />
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Contractor Company / Trading Name</label>
                                        <input type="text" name="company_address" class="form-control" placeholder="Enter Contractor Company / Trading Name" />
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Estimated Time</label> 
                                        <input 
                                            name="date" type="date" 
                                            class="form-control custom__date__icon"
                                            placeholder="From Date"
                                        > 
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">(Max 5 Days)</label> 
                                        <input 
                                            name="date" type="date" 
                                            class="form-control custom__date__icon"
                                            placeholder="To Date"
                                        > 
                                    </div>
                                </div>  
                            </div>
                               
                        </div><!-- auth__form__box -->

                        <div class="auth__form__box box__shadow bg-white p-4 rounded-bottom-4 mt-1">
                            <p class="text-2b lead-sm fw-semibold pb-3">To be completed by contractor</p>
                            <?php
                                $contructs = [
                                    [ 'name' => 'Air con system', ],
                                    [ 'name' => 'Engine, Genset service', ],
                                    [ 'name' => 'Carpentry', ],
                                    [ 'name' => 'Upholstery', ],
                                    [ 'name' => 'Radio, Navigation, GPS systems', ],
                                    [ 'name' => 'Plumbing', ],
                                    [ 'name' => 'Other', ],
                                    [ 'name' => 'Cleaning', ],
                                ];
                            ?>
                            <div class="row g-2">
                                <?php foreach($contructs as $contruct) { ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-check">
                                            <input type="checkbox" name="company_name" class="form-check-input" id="contructs_<?= $contruct['name'] ?>" value="<?= $contruct['name'] ?>">
                                            <label for="contructs_<?= $contruct['name'] ?>" class="form-check-label"><?= $contruct['name'] ?></label>
                                        </div>
                                        <?php if($contruct['name'] == 'Other') { ?>
                                            <div class="mt-2 other__input__box">
                                                <textarea name="other" class="form-control small fw-light" id="" cols="30" rows="2" placeholder="(Please state below)"></textarea>
                                            </div> 
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                                
                                 
                                <div class="col-12 text-center mt-5"> 
                                    <button type="button" aria-label="Register Button" class="btn btn-primary px-5 auth__submit__btn">Submit </button>
                                </div>
                            </div>
                               
                        </div><!-- auth__form__box -->
 

                    </div><!--.col-->


                    <div class="col-xl-5">
                        <div class="box__shadow bg-white px-4 py-3 rounded-4 d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="fw-medium mb-0 fs-4 title__color text-center">Marina Contractor Rules and Regulations</h2>
                                <p class="lead-sm text-block02 mt-3 mt-lg-4">
                                    All contractors must respect and comply with the rules and regulations of Dubai Harbour Marinas Violating or non
                                    of these rules shall result in either a denial in access or revoking of the “Approved Contractor” status.
                                </p>
                                <p class="lead-sm fw-medium text-block01">Contractor Rules and Regulations</p>
                                <div class="content__scrollbox p-4"> 
                                    <ol class="contractor__list text-gray01 d-flex flex-column gap-2">
                                        <li>All contracting companies and their employees must be registered with the marina HSE/Operations</li>
                                        <li>department to be able to access the marina for work related purposes.</li>
                                        <li>Contractors must comply with the permitted working hours which runs from 0800am-0500pm, Monday to Friday (excluding public holidays), except in case of emergencies, contractors must obtain prior approval from the marina management.</li>
                                        <li>No work is to be performed inside the marina without prior approval from vessel owner in conjunction with a permit to work issued by the marina HSE Officer.</li>
                                        <li>Contractors must ensure they have vessels name, and berth number before applying for a permit.</li>
                                        <li>Contractors must always have on them, identification documents to be presented at the security gates for access control, without which access will be denied.</li>
                                        <li>Contractors must dress neatly in company uniform or appropriately according to the UAE law. Respect local culture and maintain high standard across the marinas.</li>
                                        <li>Contractor vehicles must park in the designated car parks only. Please follow our parking provider guidelines where terms and conditions may apply.</li>
                                        <li>Fishing (from dock or boat) and cleaning fish is prohibited in the marinas.</li>
                                        <li>Boarding another vessel other than the one listed on your permit to work is prohibited. To do so is deemed trespassing and will be reported to the authorities.</li>
                                        <li>Do not throw garbage of any kind into the water. Contractors must take with them all items, including but not limited to waste, batteries, oil etc. Do not leave on the dock or discard such items in the marina bins</li>
                                        <li>Storage of gas cylinders, fuel tanks, batteries, chemicals, or any flammable containers is prohibited on the dock, in the dock box, or in the storage units. The use of BBQs and portable generators is strictly prohibited on the marina pontoons.</li>
                                        <li>The dock must be kept clear except for the boat's gangway, shoebox, mat, and assigned dock box. All other equipment must be stowed onboard</li>
                                        <li>Anyone responsible for damaging marina assets, including but not limited to pedestals, safety ladders, SOS pedestals, fire systems, or access gates, will be charged the cost of repairs.</li>
                                        <li>All types of noise (including but not limited to music and engine noise) must be kept to a minimum so as not to disturb others in the vicinity.</li>
                                        <li>Taking photographs of private yachts without approval from yacht owner or the marina management is prohibited.</li>
                                        <li>Contractors shall not engage in any form of marketing whilst inside the marina. Sharing of flyers and company cards without prior marina approval is prohibited.</li>
                                        <li>All work-related safety control measures stated on work permits must be respected, the marina HSE Officer will randomly inspect vessels to ensure contractors are compliant to such requirements.</li>
                                        <li>All sub-contracted works must be communicated properly prior to work execution date. No sub-contractor shall be permitted to work inside the marina without prior approval from the marina management or a marina ‘Approved Contractor’ status.</li>
                                    </ol>
                                </div>
                                <div class="form-check text-gray01 py-4 pt-lg-5">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        I confirm that you have read and agree to our terms and conditions.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-lg-4 -->
                </div><!--.row-->
            </div>
        </section>
    </main>

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
    <!-- enable country code -->
    <script>
        $("#country_code").intlTelInput({
            initialCountry: "ae",
            separateDialCode: true, 
        });
        $(document).ready(function() {
            $("#country_code").on("countrychange", function() {
                var selectedCountryData = $("#country_code").intlTelInput("getSelectedCountryData");
                var phoneCode = selectedCountryData.dialCode;
                $("#phoneDialCode").val(phoneCode);
                // console.log("Selected phone code:", phoneCode);
            });
        });
    </script>

    <script>
    document.querySelectorAll(".togglePasswordBtn").forEach(button => {
        button.addEventListener("click", () => {
        const targetId = button.getAttribute("data-target");
        const input = document.getElementById(targetId);
        const isHidden = input.type === "password";

        input.type = isHidden ? "text" : "password";
        button.classList.toggle("off", !isHidden); // keep "off" when hidden
        });
    });
    </script>
 