
<!-- header menu -->
<?php $showSubMenu=true; include('includes/header.inc.php'); ?>

    <main class="main__scroll__area"> 
        <section class="registered__contractor__page status__page py-4">
            <div class="container py-md-3">
                <div class="box__shadow bg-white p-4 rounded-4 mb-3 mb-md-4">
                    <h1 class="fw-semibold mb-0 lead-lg title__color text-center text-lg-start">History</h1>
                </div>
                <div class="row g-4">
                    <div class="col-xl-12">
                     
                        <div class="box__shadow bg-white py-2 px-3 px-md-0 rounded-top-4 d-none d-lg-block"> 
                            <div class="px-4 py-3"> 
                                <div class="row gx-2 gy-0 custom__row header__row text-uppercase">
                                    <div class="col text-2b fw-semibold">Vessel Number</div> 
                                    <div class="col text-2b fw-semibold">Berth Number</div>
                                    <div class="col text-2b fw-semibold">Name of Worker</div>
                                    <div class="col text-2b fw-semibold">DATE</div>
                                    <div class="col text-2b fw-semibold">TYPE</div>
                                    <div class="col text-2b fw-semibold">STATUS</div>
                                    <div class="col text-2b fw-semibold">ACTION</div> 
                                </div>
                            </div>
                        </div><!-- auth__form__box -->

                        <div class="box__shadow bg-white pt-3 pt-lg-0 pb-4 px-3 px-md-0 rounded-bottom-4 mt--1 mt-md-1 res__lg__top__radius"> 
                            <ul class="document__list list-unstyled ps-0 mb-0 border-white">
                                <?php include('includes/components/history-list-item-card.inc.php'); ?>
                                <?php include('includes/components/history-list-item-card.inc.php'); ?>
                                <?php include('includes/components/history-list-item-card.inc.php'); ?>
                                <?php include('includes/components/history-list-item-card.inc.php'); ?>
                                <?php include('includes/components/history-list-item-card.inc.php'); ?>
                                <?php include('includes/components/history-list-item-card.inc.php'); ?>
                            </ul> 
                        </div><!-- auth__form__box -->


                    </div><!--.col-->


                  
                </div><!--.row-->
            </div>
        </section>
    </main>
    
    <!-- Modal -->
    <div class="modal fade registered__contractor__page" id="viewPermitModal" tabindex="-1" aria-labelledby="viewPermitModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 640px;">
            <div class="modal-content">
                <div class="modal-header border-0 rounded-top-4">
                    <p class="lead-lg fw-semibold text-dark m-0" id="viewPermitModalLabel">Digital Permit</p>
                    <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-4">
                    <div class="permit__box mx-auto" style="max-width:400px;">
                        <div class="permit__card p-4 position-relative">
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
                        <div class="mt-4 text-center">
                            <a href="#" class="btn btn-primary px-5">Email Permit</a>
                        </div>
                        
                    </div><!-- permit__box -->
                </div><!-- modal-body -->
            </div><!-- modal-content -->
        </div>
    </div>
  

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
 