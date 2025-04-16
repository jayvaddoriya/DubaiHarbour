
<!-- header menu -->
<?php $showSubMenu=true; $type="security"; include('includes/header.inc.php'); ?>

    <main class="main__scroll__area"> 
        <section class="registered__contractor__page checkin__page py-4">
            <div class="container py-md-3">
                <div class="box__shadow bg-white p-4 rounded-4 mb-3 mb-md-4">
                    <h1 class="fw-semibold mb-0 lead-lg title__color text-center text-lg-start">Welcome to Dubai Harbour Marina</h1>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4"> 
                        <div class="box__shadow bg-white px-4 heading__box__padding rounded-top-4">
                            <p class="text-dark lead-lg fw-semibold mb-0">Check Out</p> 
                        </div><!-- auth__form__box --> 
                        <div class="box__shadow bg-white p-4 rounded-bottom-4 mt-md-2 mt--1"> 
                            <div class="row g-3 g-sm-4">
                                <div class="col-sm-6">
                                    <div class="d-flex flex-column flex-sm-row gap-2 align-items-start justify-content-sm-end">
                                        <label for="date" class="label mb-0">Date</label>
                                        <input type="text" name="date" id="date" class="form-control picker__input" value="1/1/2025">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex flex-column flex-sm-row gap-2 align-items-start">
                                        <label for="time" class="label mb-0">Time</label>
                                        <input type="text" name="time" id="time" class="form-control picker__input" value="9:20 AM">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-4">
                                <div class="row g-3 g-sm-4 row-cols-2 justify-content-center">
                                    <div class="d-flex">
                                        <div class="w-100 scan__card p-3 p-sm-4 text-center">
                                            <p class="title text-dark fw-semibold fs-6 opacity-75 mb-0 mb-sm-3">Scan QR Code</p>
                                            <button class="btn scan__btn mx-auto rounded-4 p-0">
                                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44"><path d="M4.2 16.7v-4.5a8 8 0 0 1 8-8h4.5m10.6 0h4.5a8 8 0 0 1 8 8v4.5m0 12.4v2.7a8 8 0 0 1-8 8H29m-12.3 0h-4.5a8 8 0 0 1-8-8v-4.5m26.7-9.7v8.8q0 5.4-5.3 5.4h-7.2q-5.3 0-5.3-5.4v-8.8q0-5.4 5.3-5.4h7.2q5.3 0 5.3 5.4m3.5 4.4H9.6" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </button>
                                        </div>
                                    </div> 
                                </div><!-- row -->
                            </div>
                            
                            <div class="mt-4 d-flex flex-column gap-3">
                                <div class="scan__status__box border p-3 rounded-4 d-flex flex-row align-items-center justify-content-between">
                                    <div class="col">
                                        <p class="mb-0 small text-dark fw-medium opacity-75">Scan Permit</p>
                                    </div>
                                    <div class="icon d-inline-flex align-items-center gap-2 justify-content-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z" fill="#0040B4"/>
                                        </svg> 
                                    </div>
                                </div>
                                <div class="scan__status__box border p-3 rounded-4 d-flex flex-row align-items-center justify-content-between">
                                    <div class="col">
                                        <p class="mb-0 small text-dark fw-medium opacity-75">ID Submitted</p>
                                    </div>
                                    <div class="icon d-inline-flex align-items-center gap-2 justify-content-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z" fill="#0040B4"/>
                                        </svg> 
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 text-center">
                                <button class="btn btn-primary btn__mark">Mark Attendance</button>
                            </div>
                        </div><!-- auth__form__box -->

                    </div><!--.col-->

                    <div class="col-xl-4"> 
                        <div class="box__shadow bg-white px-4 heading__box__padding rounded-top-4">
                            <p class="text-dark lead-lg fw-semibold mb-0">Employee Permit</p> 
                        </div><!-- auth__form__box -->
  
                        <div class="box__shadow bg-white p-4 rounded-bottom-4 mt-md-2 mt--1"> 
                            
                            <div class="permit__box my-lg-3">
                                <div class="permit__card p-4 position-relative mx-auto">
                                    <img src="assets/images/icons/light-currency.svg" alt="icon" class="position-absolute water__image start-0">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="col">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="assets/images/resources/user-1.png" alt="profile iage" class="profile__image object-fit-cover rounded-circle">
                                                <div class="col">
                                                    <h3 class="fw-bold mb-0 fs-4 text-white lh-sm">John Doe</h3>
                                                    <p class="fs-6 fw-medium text-white mb-0 lh-1">Contractor</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-0 text-white fw-semibold">05:18:16 PM</p>
                                    </div>
                                    <ul class="list-unstyled p-0 mb-0 mt-3 text-white fw-light">
                                        <li class="d-flex align-items-center gap-2">
                                            <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.96846 0.695312C4.3861 0.697231 2.86908 1.34394 1.75019 2.49358C0.63129 3.64321 0.0018731 5.20191 6.34983e-06 6.82774C-0.00188885 8.15637 0.4205 9.44895 1.20238 10.5072C1.20238 10.5072 1.36515 10.7274 1.39174 10.7592L5.96846 16.3051L10.5473 10.7564C10.5712 10.7268 10.7345 10.5072 10.7345 10.5072L10.7351 10.5055C11.5166 9.44774 11.9388 8.15576 11.9369 6.82774C11.935 5.20191 11.3056 3.64321 10.1867 2.49358C9.06783 1.34394 7.55082 0.697231 5.96846 0.695312ZM5.96846 9.05771C5.5392 9.05771 5.11959 8.92693 4.76268 8.68189C4.40577 8.43686 4.12759 8.08859 3.96332 7.68111C3.79905 7.27364 3.75607 6.82527 3.83981 6.39269C3.92356 5.96012 4.13026 5.56278 4.43379 5.25091C4.73732 4.93904 5.12404 4.72666 5.54504 4.64061C5.96605 4.55457 6.40243 4.59873 6.79901 4.76751C7.19559 4.93629 7.53455 5.22212 7.77303 5.58883C8.01152 5.95555 8.1388 6.38669 8.1388 6.82774C8.13809 7.41894 7.90919 7.98571 7.50233 8.40375C7.09547 8.8218 6.54385 9.05698 5.96846 9.05771Z" fill="#FBFBFB"/>
                                            </svg>
                                            <span class="fw-medium">Marina A, Dubai Harbour</span>
                                        </li>
                                        <li>Vessel Name: <span class="fw-semibold">Olivia</span></li>
                                        <li>Vessel Number: <span class="fw-semibold">MN7857787</span></li>
                                        <li>Berth Number: <span class="fw-semibold">A-A00</span></li>
                                        <li>Work Permit: <span class="fw-semibold">Low Risk</span></li>
                                    </ul>
                                    <div class="text-center">
                                        <img src="assets/images/icons/qr-code.svg" alt="qr code " class="img-fluid">
                                    </div>
                                    <div class="d-flex gap-3 mt-3 justify-content-between mb-3">
                                        <div class="badge badge-success lead-sm fw-bold">Active</div>
                                        <div class="text-white fw-light">Valid until: <span class="fw-semibold">18/02/2025</span></div>
                                    </div>
                                </div><!-- permit__card --> 
                            </div><!-- permit__box -->
                        </div>

                    </div><!--.col-->

                    <div class="col-xl-4">
                        <?php include('includes/notifications.inc.php'); ?> 
                    </div><!-- col-lg-4 -->
                </div><!--.row-->
            </div>
        </section>
    </main>

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
  
 