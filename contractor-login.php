
<!-- header menu -->
<?php include('includes/header.inc.php'); ?>

    <main class="main__scroll__area"> 
        <section class="login-flow-sec py-5">
            <div class="container py-md-3">
                <div class="box__shadow bg-white p-4 rounded-4 mb-3 d-md-none">
                    <p class="text-dark fw-semibold mb-0 lead-lg text-center">Welcome to Contractor Login </p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="box__shadow bg-white p-4 rounded-top-4">
                            <h1 class="fw-semibold mb-0 lead-lg title__color">Contractor Login</h1>
                        </div>
                        <div class="auth__form__box box__shadow bg-white p-4 rounded-bottom-4 mt-2">
                            <form>
                                <div class="row g-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="username" class="label">Username</label> 
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter your New Password" />  
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="password" class="label">Password</label>
                                            <div class="position-relative password__box"> 
                                                <input type="text" name="password" id="password" class="form-control" placeholder="Confirm your New Password" /> 
                                                <button type="button" class="togglePasswordBtn btn p-0 border-0 position-absolute top-50 translate-middle-y" data-target="password"> 
                                                </button>
                                            </div>

                                            <div class="d-flex justify-content-end gap-2 fs-12 mt-3 forgot__links">
                                                <a href="forgot-password.php" aria-label="Forgot Password">Forgot Password</a>
                                                <a href="new-registration.php" aria-label="New Registration">New Registration</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">  
                                        <button type="button" aria-label="Login" class="btn btn-primary px-5 auth__submit__btn">Login</button>
                                    </div>
                                </div>
                              
                            </form>
                        </div>
                    </div>
    
                    <div class="col-lg-5 d-flex">
                        <img 
                            src="assets/images/resources/contractor-login.webp" 
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

  
