<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include('includes/favicon.inc.php'); ?>
    <title>New Registration</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" /> 
    
    <!-- cache control -->
    <?php include('includes/cache-control.inc.php'); ?>
    <!-- stylesheets -->
    <?php $props=""; $haveCountryCode = true; include('includes/stylesheets.inc.php'); ?>
 
</head> 
<body>
    <!-- header menu -->
    <?php $props=""; include('includes/header.inc.php'); ?>

    <main class="main__scroll__area"> 
        <section class="login-flow-sec py-5">
            <div class="container py-md-3">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="box__shadow bg-white p-4 rounded-top-4">
                            <h1 class="text-dark fw-semibold mb-0 lead-lg">New Registration</h1>
                        </div>
                        <div class="login-form box__shadow bg-white p-4 rounded-bottom-4 mt-2">
                            <form>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password" class="label">Password</label> 
                                            <div class="position-relative password__box"> 
                                                <input type="text" name="password" id="password" class="form-control" placeholder="Enter your password" /> 
                                                <button type="button" class="togglePasswordBtn btn p-0 border-0 position-absolute top-50 translate-middle-y" data-target="password"> 
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center"> 
                                        <button type="button" aria-label="Register Button" class="btn btn-primary px-5 auth__submit__btn">Register </button>
                                    </div>
                                </div>
                                <div class="btn-action">
                                </div>
                            </form>
                        </div>
                    </div>
    
                    <div class="col-lg-5 d-flex">
                        <img src="assets/images/resources/new-registration.webp" alt="New Registration" width="788px" height="545px" class="img-fluid w-100 h-100 object-fit-cover rounded-4 box__shadow" />
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer and all scripts -->
    <?php 
        $props=""; 
        $haveCountryCode = true; 
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
</body> 
</html>