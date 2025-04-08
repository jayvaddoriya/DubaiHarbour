<?php include('include/header.php'); ?>

<section class="login-flow-sec contractor-login-sec">
    <div class="container">
        <div class="login-flow-wrapper">
            <div class="login-form-view">
                <div class="login-form-heading">
                    <h1>Contractor Login</h1>
                </div>
                <div class="login-form">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Enter your User Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group password-field">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password" />
                                    <button type="button" class="eye-btn">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.5799 11.9999C15.5799 13.9799 13.9799 15.5799 11.9999 15.5799C10.0199 15.5799 8.41992 13.9799 8.41992 11.9999C8.41992 10.0199 10.0199 8.41992 11.9999 8.41992C13.9799 8.41992 15.5799 10.0199 15.5799 11.9999Z" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.9998 20.2702C15.5298 20.2702 18.8198 18.1902 21.1098 14.5902C22.0098 13.1802 22.0098 10.8102 21.1098 9.40021C18.8198 5.80021 15.5298 3.72021 11.9998 3.72021C8.46984 3.72021 5.17984 5.80021 2.88984 9.40021C1.98984 10.8102 1.98984 13.1802 2.88984 14.5902C5.17984 18.1902 8.46984 20.2702 11.9998 20.2702Z" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="forgot-new-registration">
                            <a href="forgot-password.php" aria-label="Forgot Password">Forgot Password</a>
                            <a href="new-registration.php" aria-label="New Registration">New Registration</a>
                        </div>
                        <div class="btn-action">
                            <button type="button" aria-label="Login Button" class="btn-theme">Login</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="image-view">
                <img src="/assets/images/resources/contractor-login.webp" alt="Contractor Login" width="788px" height="407px" />
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php'); ?>