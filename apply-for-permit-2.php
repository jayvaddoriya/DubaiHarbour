
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
                        <div class="box__shadow bg-white p-4 rounded-top-4">
                            <p class="text-2b fs-6 mb-2">Search by employee name </p>
                           
                            <form class="search__box"> 
                                <input type="text" name="company_name" class="form-control" placeholder="Search" /> 
                            </form>
                        </div><!-- auth__form__box -->
  
                        <div class="auth__form__box box__shadow bg-white p-4 mt-1 rounded-bottom-4">
                            <?php
                                $users = [
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'status' => '',
                                    ], 
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'status' => 'added',
                                    ], 
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'status' => '',
                                    ], 
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'status' => '',
                                    ], 
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'status' => '',
                                    ], 
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'status' => 'added',
                                    ], 
                                ];
                            ?>
                            <div class="row g-3 g-md-4">
                                <?php foreach($users as $user) { ?>
                                    <div class="col-xxl-4 col-md-6 col-6"> 
                                        <div class="user__card text-center p-3 p-sm-4">
                                            <div class="user__card__img rounded-circle mx-auto d-flex mb-3"> 
                                                <img src="<?= $user['img'] ?>" alt="" class="img-fluid w-100 h-100 rounded-circle object-fit-cover" />
                                            </div>
                                            <div class="user__card__content text-center">
                                                <h3 class="fs-6 fw-bold mb-0 text-2b title lh-1"><?= $user['name'] ?></h3>
                                                <p class="small text-2b mb-1 role"><?= $user['role'] ?></p>
                                                <p class="small text-2b mb-0 email"><?= $user['email'] ?></p>
                                            </div>
                                            <div class="mt-3 d-flex flex-column gap-2 gap-sm-3 user__card__actions">
                                                <button class="btn <?php if($user['status'] == 'added') echo 'btn-primary'; else echo 'btn-outline-primary'; ?> w-100">
                                                    <?php if($user['status'] != 'added') { ?>
                                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.5 22C18 22 22.5 17.5 22.5 12C22.5 6.5 18 2 12.5 2C7 2 2.5 6.5 2.5 12C2.5 17.5 7 22 12.5 22Z" fill="#0040B4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.5 12H16.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M12.5 16V8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg> 
                                                    <?php } ?>
                                                    <?php if($user['status'] === 'added') { ?>
                                                    <span>Added</span>
                                                    <?php } else { ?>
                                                    <span>Add</span>
                                                    <?php } ?>
                                                </button>
                                                <button class="btn btn-outline-light w-100">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.5 4.98332C14.725 4.70832 11.9333 4.56665 9.15 4.56665C7.5 4.56665 5.85 4.64998 4.2 4.81665L2.5 4.98332" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.08203 4.14175L7.26536 3.05008C7.3987 2.25841 7.4987 1.66675 8.90703 1.66675H11.0904C12.4987 1.66675 12.607 2.29175 12.732 3.05841L12.9154 4.14175" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M15.7096 7.6167L15.168 16.0084C15.0763 17.3167 15.0013 18.3334 12.6763 18.3334H7.3263C5.0013 18.3334 4.9263 17.3167 4.83464 16.0084L4.29297 7.6167" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.60938 13.75H11.3844" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.91797 10.4167H12.0846" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg> 
                                                    <span>Remove</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                               
                                <div class="col-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center gap-2">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="none" stroke="#565656" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 18l-6-6l6-6"/></svg>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="none" stroke="#565656" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 18l6-6l-6-6"/></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-12 text-center mt-5"> 
                                    <button type="button" aria-label="Register Button" class="btn btn-primary px-5 auth__submit__btn">Generate Permit(s) </button>
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
 