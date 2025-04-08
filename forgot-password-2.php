<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include('includes/favicon.inc.php'); ?>
    <title>Forgot Password</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" /> 
    
    <!-- cache control -->
    <?php include('includes/cache-control.inc.php'); ?>
    <!-- stylesheets -->
    <?php $props=""; include('includes/stylesheets.inc.php'); ?>
 
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
                            <h1 class="fw-semibold mb-0 lead-lg title__color">Forgot Password</h1>
                        </div>
                        <div class="auth__form__box box__shadow bg-white p-4 rounded-bottom-4 mt-2">
                            <form>
                                <div class="row g-4 justify-content-center">
                                    <div class="col-lg-8 col-xxl-6">
                                        <div class="form-group">
                                            <label class="label d-block pt-2">Enter the verification code we just sent to your email address</label>

                                            <h2 class="fw-semibold mb-3 mt-4 lead-lg title__color text-center">OTP</h2>
                                            <div class="otp-wrapper d-flex gap-2 justify-content-center">
                                                <input type="text" maxlength="1" class="otp-input form-control text-center" placeholder="-" />
                                                <input type="text" maxlength="1" class="otp-input form-control text-center" placeholder="-" />
                                                <input type="text" maxlength="1" class="otp-input form-control text-center" placeholder="-" />
                                                <input type="text" maxlength="1" class="otp-input form-control text-center" placeholder="-" />
                                                <input type="text" maxlength="1" class="otp-input form-control text-center" placeholder="-" />
                                            </div> 
                                            <div class="mt-3 text-center"> 
                                                <a href="#" aria-label="Resend OTP" class="fw-semibold">Resend</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center"> 
                                        <a href="forgot-password-3.php" aria-label="Next" class="btn btn-primary px-5 auth__submit__btn">Next </a>
                                        <!-- <button type="button" aria-label="Next" class="btn btn-primary px-5 auth__submit__btn">Next </button> -->
                                    </div>
                                </div>
                              
                            </form>
                        </div>
                    </div>
    
                    <div class="col-lg-5 d-flex">
                        <img 
                            src="assets/images/resources/otp-thumbnail.webp" 
                            alt="Forgot Password" width="788px" height="545px" 
                            class="img-fluid w-100 object-fit-cover rounded-4 box__shadow" 
                        />
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer and all scripts -->
    <?php 
        $props="";  
        include('includes/footer.inc.php'); 
    ?>

    <script>
        const inputs = document.querySelectorAll(".otp-input");

        inputs.forEach((input, index) => {
            input.addEventListener("input", (e) => {
            const value = e.target.value;
            if (value) {
                // Move to next input
                if (index < inputs.length - 1) {
                inputs[index + 1].focus();
                }
            }
            });

            input.addEventListener("keydown", (e) => {
            if (e.key === "Backspace" && !input.value && index > 0) {
                inputs[index - 1].focus();
            }
            });
        });

        // function getOtpValue() {
        // return Array.from(document.querySelectorAll(".otp-input"))
        //             .map(input => input.value)
        //             .join("");
        // }
    </script>

  
</body> 
</html>