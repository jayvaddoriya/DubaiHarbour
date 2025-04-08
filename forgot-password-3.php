<!-- header menu -->
<?php include('includes/header.inc.php'); ?>

    <main class="main__scroll__area"> 
        <section class="login-flow-sec py-5">
            <div class="container py-md-3">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="box__shadow bg-white p-4 rounded-top-4">
                            <h1 class="fw-semibold mb-0 lead-lg title__color">Reset Password</h1>
                        </div>
                        <div class="auth__form__box box__shadow bg-white p-4 rounded-bottom-4 mt-2">
                            <form>
                                <div class="row g-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="new_password" class="label">New Password</label> 
                                            <div class="position-relative password__box"> 
                                                <input type="text" name="new_password" id="new_password" class="form-control" placeholder="Enter your New Password" />
                                                <button type="button" class="togglePasswordBtn btn p-0 border-0 position-absolute top-50 translate-middle-y" data-target="new_password"> 
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="confirm_password" class="label">Confirm Password</label>
                                            <div class="position-relative password__box"> 
                                                <input type="text" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm your New Password" /> 
                                                <button type="button" class="togglePasswordBtn btn p-0 border-0 position-absolute top-50 translate-middle-y" data-target="confirm_password"> 
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center"> 
                                        <a href="forgot-password-2.php" aria-label="Next" class="btn btn-primary px-5 auth__submit__btn">Next </a>
                                        <!-- <button type="button" aria-label="Next" class="btn btn-primary px-5 auth__submit__btn">Next </button> -->
                                    </div>
                                </div>
                              
                            </form>
                        </div>
                    </div>
    
                    <div class="col-lg-5 d-flex">
                        <img 
                            src="assets/images/resources/reset-password-thumbnail.webp" 
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
    include('includes/footer.inc.php'); 
?>

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

 