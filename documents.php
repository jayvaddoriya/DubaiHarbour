
<!-- header menu -->
<?php $showSubMenu=true; include('includes/header.inc.php'); ?>

    <main class="main__scroll__area"> 
        <section class="registered__contractor__page py-4">
            <div class="container py-md-3">
                <div class="box__shadow bg-white p-4 rounded-4 mb-4">
                    <h1 class="fw-semibold mb-0 lead-lg title__color text-center text-lg-start">Welcome to Dubai Harbour Marina</h1>
                </div>
                <div class="row g-4">
                    <div class="col-xl-7"> 
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


                    <div class="col-lg-5">
                        <div class="box__shadow bg-white px-4 py-3 rounded-top-4 d-flex justify-content-between align-items-center">
                            <div class="d-inline-flex align-items-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0209 2C8.34087 2 5.36087 4.98 5.36087 8.66V10.76C5.36087 11.44 5.08087 12.46 4.73087 13.04L3.46087 15.16C2.68087 16.47 3.22087 17.93 4.66087 18.41C9.44087 20 14.6109 20 19.3909 18.41C20.7409 17.96 21.3209 16.38 20.5909 15.16L19.3209 13.04C18.9709 12.46 18.6909 11.43 18.6909 10.76V8.66C18.6809 5 15.6809 2 12.0209 2Z" stroke="#0040B4" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                                <path d="M15.3299 18.8201C15.3299 20.6501 13.8299 22.1501 11.9999 22.1501C11.0899 22.1501 10.2499 21.7701 9.64992 21.1701C9.04992 20.5701 8.66992 19.7301 8.66992 18.8201" stroke="#0040B4" stroke-width="1.5" stroke-miterlimit="10"/>
                                </svg> 
                                <h2 class="fw-semibold mb-0 lead-sm title__color">Notifications</h2>
                            </div>

                            <div class="dropdown">
                                <a href="#" class="outline__btn d-flex justify-content-center align-items-center gap-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.1745 17.325L9.99948 18.0834C8.90781 18.7584 7.39115 18 7.39115 16.65V12.1917C7.39115 11.6 7.05781 10.8417 6.71615 10.425L3.51615 7.05835C3.09115 6.63335 2.75781 5.88338 2.75781 5.37505V3.44171C2.75781 2.43338 3.51615 1.67505 4.44115 1.67505H15.5578C16.4828 1.67505 17.2411 2.4334 17.2411 3.3584V5.20837C17.2411 5.88337 16.8161 6.72505 16.3995 7.14171" stroke="#4268B0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.0241 12.2916C18.0241 13.0333 17.8158 13.7333 17.4491 14.3333C16.7658 15.4833 15.5074 16.2499 14.0658 16.2499C12.6241 16.2499 11.3658 15.4749 10.6824 14.3333C10.3158 13.7416 10.1074 13.0333 10.1074 12.2916C10.1074 10.1083 11.8824 8.33325 14.0658 8.33325C16.2491 8.33325 18.0241 10.1083 18.0241 12.2916Z" stroke="#4268B0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.1268 13.3251L13.0352 11.2334" stroke="#4268B0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.1092 11.2583L13.0176 13.35" stroke="#4268B0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.2411 3.3501V5.20007C17.2411 5.87507 16.8161 6.71675 16.3995 7.14175L14.9328 8.43341C14.6578 8.36674 14.3661 8.33342 14.0661 8.33342C11.8828 8.33342 10.1078 10.1084 10.1078 12.2917C10.1078 13.0334 10.3161 13.7334 10.6828 14.3334C10.9911 14.8501 11.4161 15.2917 11.9328 15.6084V15.8918C11.9328 16.4001 11.5995 17.0751 11.1745 17.3251L9.99948 18.0834C8.90781 18.7584 7.39115 18.0001 7.39115 16.6501V12.1918C7.39115 11.6001 7.04948 10.8418 6.71615 10.4251L3.51615 7.05839C3.09948 6.63339 2.75781 5.87509 2.75781 5.37509V3.43341C2.75781 2.42508 3.51615 1.66675 4.44115 1.66675H15.5578C16.4828 1.66675 17.2411 2.4251 17.2411 3.3501Z" stroke="#4268B0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                </a> 
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="list-unstyled d-flex flex-column gap-2">
                                        <li>
                                            <a href="#" class="d-flex gap-2 align-items-center"> 
                                                <span>Edit My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex gap-2 align-items-center"> 
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex gap-2 align-items-center"> 
                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="auth__form__box box__shadow bg-white rounded-bottom-4 mt-2">
                            <ul class="list-unstyled p-0 m-0 notification__list h-560 text-start">
                                <li>
                                    <a href="#" class="danger d-flex justify-content-between align-items-start gap-2 flex-column flex-sm-row flex-lg-column flex-xxl-row fw-normal px-4 py-3">
                                        <span class="d-block">Always Look On The Bright Side Of Life</span>
                                        <span class="fs-12 time">2, Feb 2025 - 8:38 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="danger d-flex justify-content-between align-items-start gap-2 flex-column flex-sm-row flex-lg-column flex-xxl-row fw-normal px-4 py-3">
                                        <span>Always Look On The Bright Side Of Life</span>
                                        <span class="fs-12 time">2, Feb 2025 - 8:38 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="danger d-flex justify-content-between align-items-start gap-2 flex-column flex-sm-row flex-lg-column flex-xxl-row fw-normal px-4 py-3">
                                        <span>Always Look On The Bright Side Of Life</span>
                                        <span class="fs-12 time">2, Feb 2025 - 8:38 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between align-items-start gap-2 flex-column flex-sm-row flex-lg-column flex-xxl-row fw-normal px-4 py-3">
                                        <span>Always Look On The Bright Side Of Life</span>
                                        <span class="fs-12 time">2, Feb 2025 - 8:38 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between align-items-start gap-2 flex-column flex-sm-row flex-lg-column flex-xxl-row fw-normal px-4 py-3">
                                        <span>Always Look On The Bright Side Of Life</span>
                                        <span class="fs-12 time">2, Feb 2025 - 8:38 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between align-items-start gap-2 flex-column flex-sm-row flex-lg-column flex-xxl-row fw-normal px-4 py-3">
                                        <span>Always Look On The Bright Side Of Life</span>
                                        <span class="fs-12 time">2, Feb 2025 - 8:38 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between align-items-start gap-2 flex-column flex-sm-row flex-lg-column flex-xxl-row fw-normal px-4 py-3">
                                        <span>Always Look On The Bright Side Of Life</span>
                                        <span class="fs-12 time">2, Feb 2025 - 8:38 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between align-items-start gap-2 flex-column flex-sm-row flex-lg-column flex-xxl-row fw-normal px-4 py-3">
                                        <span>Always Look On The Bright Side Of Life</span>
                                        <span class="fs-12 time">2, Feb 2025 - 8:38 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between align-items-start gap-2 flex-column flex-sm-row flex-lg-column flex-xxl-row fw-normal px-4 py-3">
                                        <span>Always Look On The Bright Side Of Life</span>
                                        <span class="fs-12 time">2, Feb 2025 - 8:38 AM</span>
                                    </a>
                                </li>
                            </ul>
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
 