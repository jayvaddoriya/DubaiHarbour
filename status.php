
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
    
  

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
 