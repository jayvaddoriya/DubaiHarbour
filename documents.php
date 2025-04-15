
<!-- header menu -->
<?php $showSubMenu=true; include('includes/header.inc.php'); ?>

    <main class="main__scroll__area"> 
        <section class="registered__contractor__page py-4">
            <div class="container py-md-3">
                <div class="box__shadow bg-white p-4 rounded-4 mb-4">
                    <h1 class="fw-semibold mb-0 lead-lg title__color text-center text-lg-start">Welcome to Dubai Harbour Marina</h1>
                </div>
                <div class="row g-4">
                    <div class="col-xl-8"> 
                        <div class="box__shadow bg-white pt-4 pb-3 px-3 px-md-0 rounded-top-4">
                            <p class="text-dark lead-sm fw-semibold m-0 px-md-4 pb-md-3">Documents</p> 
                            <div class="px-4 pt-3 d-none d-md-block"> 
                                <div class="row g-2">
                                    <div class="col">
                                        <div class="d-inline-flex align-items-center gap-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 12.2H15" stroke="#0040B4" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8 16.2H12.38" stroke="#0040B4" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10 6H14C16 6 16 5 16 4C16 2 15 2 14 2H10C9 2 8 2 8 4C8 6 9 6 10 6Z" stroke="#0040B4" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16 4.02002C19.33 4.20002 21 5.43002 21 10V16C21 20 20 22 15 22H9C4 22 3 20 3 16V10C3 5.44002 4.67 4.20002 8 4.02002" stroke="#0040B4" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg> 
                                            <span class="fs-6 fw-semibold text-2b text-uppercase">Permit details</span>
                                        </div>
                                    </div> 
                                    <div class="permit__col border-start">
                                        <div class="d-flex justify-content-center align-items-center gap-3 "> 
                                            <span class="fs-6 fw-semibold text-2b text-uppercase">ReUpload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- auth__form__box -->
                        
                        <div class="box__shadow bg-white pb-4 pt-2 pt-md-4 px-3 px-md-0 rounded-bottom-4 mt--1 mt-md-1">
                            <ul class="document__list renew__permit__list list-unstyled ps-0 mb-0">
                                <?php include('includes/components/document-2-list-item-card.inc.php'); ?>
                                <?php include('includes/components/document-2-list-item-card.inc.php'); ?>
                                <?php include('includes/components/document-2-list-item-card.inc.php'); ?>
                                <?php include('includes/components/document-2-list-item-card.inc.php'); ?>
                                <?php include('includes/components/document-2-list-item-card.inc.php'); ?>
                                <?php include('includes/components/document-2-list-item-card.inc.php'); ?>
                            </ul> 

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
 