
<!-- header menu -->
<?php $showSubMenu=true; include('includes/header.inc.php'); ?>

    <main class="main__scroll__area"> 
        <section class="registered__contractor__page employees__page py-4">
            <div class="container py-md-3">
                <div class="box__shadow bg-white p-4 rounded-4 mb-3 mb-md-4">
                    <h1 class="fw-semibold mb-0 lead-lg title__color text-center text-lg-start">Dubai Harbour Marinas</h1>
                </div>
                <div class="row g-4">
                    <div class="col-xl-8"> 
                        <div class="box__shadow bg-white px-4 py-3 py-md-4 rounded-top-4 d-flex justify-content-between align-items-center">
                            <p class="text-2b lead-lg fw-semibold mb-0">Employees</p>
                           
                            <form class="search__box w-100 d-flex gap-2"> 
                                <div class="search__box d-none d-md-block"> 
                                    <input type="text" name="company_name" class="form-control" placeholder="Search" /> 
                                </div>
                                <div class="filter__box col d-inline-flex align-items-center gap-1 px-md-3">
                                    <div class="col"> 
                                        <button type="button" class="btn p-0 small border-0" data-bs-toggle="modal" data-bs-target="#newMemberModal"> 
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8 12H16" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 16V8" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg> 
                                            <span class="small fw-semibold">Add New Member</span>
                                        </button> 
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="outline__btn bg-white d-flex justify-content-center align-items-center gap-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.1745 17.325L9.99948 18.0834C8.90781 18.7584 7.39115 18 7.39115 16.65V12.1917C7.39115 11.6 7.05781 10.8417 6.71615 10.425L3.51615 7.05835C3.09115 6.63335 2.75781 5.88338 2.75781 5.37505V3.44171C2.75781 2.43338 3.51615 1.67505 4.44115 1.67505H15.5578C16.4828 1.67505 17.2411 2.4334 17.2411 3.3584V5.20837C17.2411 5.88337 16.8161 6.72505 16.3995 7.14171" stroke="#4268B0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18.0241 12.2916C18.0241 13.0333 17.8158 13.7333 17.4491 14.3333C16.7658 15.4833 15.5074 16.2499 14.0658 16.2499C12.6241 16.2499 11.3658 15.4749 10.6824 14.3333C10.3158 13.7416 10.1074 13.0333 10.1074 12.2916C10.1074 10.1083 11.8824 8.33325 14.0658 8.33325C16.2491 8.33325 18.0241 10.1083 18.0241 12.2916Z" stroke="#4268B0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.1268 13.3251L13.0352 11.2334" stroke="#4268B0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.1092 11.2583L13.0176 13.35" stroke="#4268B0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M17.2411 3.3501V5.20007C17.2411 5.87507 16.8161 6.71675 16.3995 7.14175L14.9328 8.43341C14.6578 8.36674 14.3661 8.33342 14.0661 8.33342C11.8828 8.33342 10.1078 10.1084 10.1078 12.2917C10.1078 13.0334 10.3161 13.7334 10.6828 14.3334C10.9911 14.8501 11.4161 15.2917 11.9328 15.6084V15.8918C11.9328 16.4001 11.5995 17.0751 11.1745 17.3251L9.99948 18.0834C8.90781 18.7584 7.39115 18.0001 7.39115 16.6501V12.1918C7.39115 11.6001 7.04948 10.8418 6.71615 10.4251L3.51615 7.05839C3.09948 6.63339 2.75781 5.87509 2.75781 5.37509V3.43341C2.75781 2.42508 3.51615 1.66675 4.44115 1.66675H15.5578C16.4828 1.66675 17.2411 2.4251 17.2411 3.3501Z" stroke="#4268B0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg> 
                                        </a> 
                                        <div class="dropdown-menu dropdown-menu-end employee__dropdownmenu">
                                            <ul class="list-unstyled d-flex flex-column gap-2">
                                                <li>
                                                    <a href="#" class="all__filter d-flex gap-2 align-items-center"> 
                                                        <span>All</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex gap-2 align-items-center"> 
                                                        <img src="assets/images/icons/verify.svg" alt="icon" class="img-fluid" width="20" height="20">
                                                        <span>Verified</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex gap-2 align-items-center"> 
                                                        <img src="assets/images/icons/verify-error.svg" alt="icon" class="img-fluid" width="20" height="20">
                                                        <span>Non Verified</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!-- auth__form__box -->
  
                        <div class="auth__form__box box__shadow bg-white p-4 mt--1 mt-md-1 rounded-bottom-4">
                            <?php
                                $users = [
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'verify' => 'true',
                                    ], 
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'verify' => 'false',
                                    ], 
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'verify' => 'false',
                                    ], 
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'verify' => 'true',
                                    ], 
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'verify' => 'true',
                                    ], 
                                    [ 
                                        'name' => 'Jason Price', 
                                        'role' => 'Admin', 
                                        'email' => 'janick_parisian@yahoo.com', 
                                        'img'   => 'assets/images/resources/user-1.png', 
                                        'verify' => 'true',
                                    ], 
                                ];
                            ?>
                            <div class="row g-3 g-md-4">
                                <?php foreach($users as $user) { ?>
                                    <div class="col-xxl-4 col-md-6 col-6"> 
                                        <div class="user__card text-center px-2 py-4 p-sm-3 p-md-4 position-relative">
                                            <img src="assets/images/icons/card-pattern.svg" alt="pattern" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-0">
                                            <div class="user__card__img rounded-circle mx-auto d-flex mb-2 mb-sm-3 position-relative"> 
                                                <img src="<?= $user['img'] ?>" alt="" class="img-fluid w-100 h-100 rounded-circle object-fit-cover" />
                                                <?php if($user['verify'] == 'true') { ?> 
                                                    <img src="assets/images/icons/verify.svg" alt="icon" class="img-fluid position-absolute status">
                                                <?php } else { ?> 
                                                    <img src="assets/images/icons/verify-error.svg" alt="icon" class="img-fluid position-absolute status">
                                                <?php } ?> 
                                            </div>
                                            <div class="user__card__content text-center">
                                                <h3 class="fs-6 fw-bold mb-0 text-2b title lh-1"><?= $user['name'] ?></h3>
                                                <p class="small text-2b mb-1 role"><?= $user['role'] ?></p>
                                                <p class="small text-2b mb-0 email"><?= $user['email'] ?></p>
                                            </div> 
                                        </div>
                                    </div>
                                <?php } ?>
                               
                                <div class="col-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center gap-2">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="none" stroke="#565656" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 18l-6-6l6-6"/></svg>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="none" stroke="#565656" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 18l6-6l-6-6"/></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                 
                                  
                            </div>
                               
                        </div><!-- auth__form__box -->
 

                    </div><!--.col-->


                    <div class="col-xl-4">
                        <?php include('includes/notifications.inc.php'); ?> 
                    </div><!-- col-lg-4 -->
                </div><!--.row-->
            </div>
        </section>
    </main>

    <!-- Modal -->
    <div class="modal fade new__member__modal" id="newMemberModal" tabindex="-1" aria-labelledby="newMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 1140px;">
            <div class="modal-content">
                <div class="modal-header border-0 rounded-top-4">
                    <p class="lead-lg fw-semibold text-dark m-0" id="newMemberModalLabel">Add Employee Form</p>
                    <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-4">
                    <form action="#" method="post">
                        <div class="mb-4">
                            <label for="photo" class="upload__box d-flex justify-content-center align-items-center gap-2 rounded-circle position-relative mx-auto">
                                <input type="file" name="photo" id="photo" class="position-absolute opacity-0 top-0 start-0 w-100 h-100">
                                <span class="w-100 d-flex flex-column gap-2 gap-md-3 text-center pt-2 pt-md-3">
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 42"><path d="M40.544 20.823c0 11.18-9.094 20.274-20.272 20.274S0 32.002 0 20.823C0 9.646 9.094.55 20.272.55s20.272 9.095 20.272 20.272" fill="#6791DE"/><path d="M40.544 20.823c0 11.18-9.095 20.274-20.272 20.274V.55c11.177 0 20.272 9.095 20.272 20.272" fill="#4268B0"/><path d="M26.806 21.071a2.253 2.253 0 0 1-3.182-.27l-1.095-1.296v8.492a2.26 2.26 0 0 1-2.258 2.257V11.507c.904 0 1.754.396 2.337 1.085l4.469 5.298a2.26 2.26 0 0 1-.271 3.181" fill="#ECECEC"/><path d="M26.806 21.071a2.253 2.253 0 0 1-3.182-.27l-1.094-1.296v8.492a2.258 2.258 0 0 1-4.516 0v-8.492l-1.094 1.297a2.258 2.258 0 0 1-3.453-2.911l4.47-5.299a3.05 3.05 0 0 1 2.335-1.085c.903 0 1.753.396 2.336 1.085l4.47 5.298a2.26 2.26 0 0 1-.272 3.181" fill="#ECECEC"/></svg>
                                    <span class="d-block">Upload Photo</span>
                                </span>
                            </label>
                        </div>
                        <div class="mt-4 form__wrapp w-100 mx-auto">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name" class="label">First Name</label> 
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter your First Name" />  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name" class="label">Last Name</label> 
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter your Last Name" />  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob" class="label">Date of Birth</label>  
                                        <input 
                                            name="dob" type="date" id="dob"
                                            class="form-control custom__date__icon"
                                            placeholder="1/1/200"
                                        > 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email_address" class="label">Email Address</label> 
                                        <input type="text" name="email_address" id="email_address" class="form-control" placeholder="Enter your Email Address" />  
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
                                    <div class="form-group country__code__box">
                                        <label class="label">Nationality</label>
                                        <div class="flag__selection__box position-relative">
                                            <input 
                                                type="text" name="countryName" id="countryName" 
                                                class="form-control position-absolute top-0 h-100 start-0 opacity-100 bg-transparent pe-5 shadow-none"  
                                                style="outline:none !important;
                                                padding-left: 3.5rem !important;z-index: 99;
                                                pointer-events: none;"
                                            >
                                            <input type="text" name="country_flag" id="country_flag" class="form-control" placeholder="Country Code">
                                        </div> 
                                        
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mx-auto emirates__id__box">
                                        <p class="text-2b fw-medium fs-6 mb-0">Upload Emirates ID</p>
                                        <div class="pt-3">
                                            <div class="file__box text-center rounded-2 p-3 p-lg-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="43" viewBox="0 0 42 43" fill="none">
                                                    <g clip-path="url(#clip0_1_5927)">
                                                    <path d="M33.4412 3.62061H14.1738V11.6106H37.5563V7.73402C37.5563 5.46567 35.7102 3.62061 33.4412 3.62061Z" fill="#CED9F9"/>
                                                    <path d="M22.5352 12.8403H0V5.42636C0 2.70972 2.21068 0.5 4.92828 0.5H12.1336C12.8497 0.5 13.5396 0.650925 14.1664 0.934509C15.0418 1.32896 15.7939 1.97913 16.3213 2.8286L22.5352 12.8403Z" fill="#1640C1"/>
                                                    <path d="M42 14.5001V38.3815C42 40.6527 40.1511 42.5 37.8789 42.5H4.12111C1.84891 42.5 0 40.6527 0 38.3815V10.3806H37.8789C40.1511 10.3806 42 12.2286 42 14.5001Z" fill="#2354E6"/>
                                                    <path d="M42 14.5001V38.3815C42 40.6527 40.1511 42.5 37.8789 42.5H21V10.3806H37.8789C40.1511 10.3806 42 12.2286 42 14.5001Z" fill="#1849D6"/>
                                                    <path d="M32.0471 26.4398C32.0471 32.5322 27.0909 37.4887 20.9991 37.4887C14.9073 37.4887 9.95117 32.5322 9.95117 26.4398C9.95117 20.3483 14.9073 15.3918 20.9991 15.3918C27.0909 15.3918 32.0471 20.3483 32.0471 26.4398Z" fill="#E7ECFC"/>
                                                    <path d="M32.0479 26.4398C32.0479 32.5322 27.0918 37.4887 21 37.4887V15.3918C27.0918 15.3918 32.0479 20.3483 32.0479 26.4398Z" fill="#CED9F9"/>
                                                    <path d="M24.5612 26.5753C24.3308 26.7704 24.0485 26.8656 23.7688 26.8656C23.4185 26.8656 23.0705 26.7173 22.827 26.4282L22.2307 25.7213V30.3494C22.2307 31.0287 21.6795 31.5799 21.0002 31.5799C20.3209 31.5799 19.7698 31.0287 19.7698 30.3494V25.7213L19.1734 26.4282C18.7344 26.9476 17.9587 27.014 17.4392 26.5753C16.9201 26.1373 16.8535 25.3612 17.2915 24.8418L19.7271 21.9543C20.0447 21.5788 20.508 21.3628 21.0002 21.3628C21.4924 21.3628 21.9558 21.5788 22.2733 21.9543L24.7089 24.8418C25.147 25.3612 25.0803 26.1373 24.5612 26.5753Z" fill="#6C8DEF"/>
                                                    <path d="M24.561 26.5753C24.3306 26.7704 24.0483 26.8656 23.7686 26.8656C23.4183 26.8656 23.0703 26.7173 22.8268 26.4282L22.2305 25.7213V30.3494C22.2305 31.0287 21.6793 31.5799 21 31.5799V21.3628C21.4922 21.3628 21.9555 21.5788 22.2731 21.9543L24.7087 24.8418C25.1467 25.3612 25.0801 26.1373 24.561 26.5753Z" fill="#3B67E9"/>
                                                    </g><defs><clipPath id="clip0_1_5927"><rect width="42" height="42" fill="white" transform="translate(0 0.5)"/></clipPath></defs>
                                                </svg>
                                                <p class="fs-12 text-black02 mb-2 mt-2">Drag your file(s) to start uploading</p>
                                                <div class="position-relative my-2 divider__line"> 
                                                    <span class="text-black02 m-0 fs-12 lh-lg px-4 bg-white position-relative z-3">OR</span> 
                                                </div>
                                                <div class="position-relative file__erro__box">
                                                    <label for="file" class="btn btn-outline-primary py-2 fs-12 fw-semibold rounded-2 px-3 position-relative">
                                                        <span>Browse files</span>
                                                        <input type="file" class="position-absolute top-0 start-0 opacity-0" id="file">
                                                    </label>
                                                    <button type="button" class="position-absolute end-0 m-0 info__icon btn p-0 border-0" data-bs-toggle="modal" data-bs-target="#infoModal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M10 1C5.0365 1 1 5.03758 1 10C1 14.9635 5.03758 19 10 19C14.9635 19 19 14.9624 19 10C19 5.0365 14.9624 1 10 1ZM10 2.12935C14.355 2.12935 17.8716 5.64593 17.8716 10.001C17.8716 14.356 14.355 17.8726 10 17.8726C5.64496 17.8726 2.12837 14.356 2.12837 10.001C2.12837 5.64593 5.64496 2.12935 10 2.12935Z" fill="#6791DE"/>
                                                            <path d="M10.0008 9.4358C9.85102 9.43475 9.70657 9.4938 9.6011 9.60031C9.4946 9.70575 9.43555 9.85022 9.43555 9.99996V13.969C9.43555 14.1187 9.4946 14.2632 9.6011 14.3686C9.70654 14.4751 9.85101 14.5342 10.0008 14.5331C10.1505 14.5342 10.2949 14.4751 10.4004 14.3686C10.5069 14.2632 10.566 14.1187 10.5649 13.969V9.99996C10.566 9.85022 10.5069 9.70577 10.4004 9.60031C10.295 9.4938 10.1505 9.43475 10.0008 9.4358Z" fill="#6791DE"/>
                                                            <path d="M11.1242 6.62684C11.1242 7.24794 10.6202 7.75093 9.99908 7.75093C9.70066 7.75093 9.41489 7.63282 9.20401 7.42192C8.99313 7.21101 8.875 6.92527 8.875 6.62684C8.875 6.32842 8.9931 6.0416 9.20401 5.83072C9.41492 5.61984 9.70066 5.50171 9.99908 5.50171C10.6202 5.50171 11.1242 6.00575 11.1242 6.62684Z" fill="#6791DE"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="pt-3">
                                                <p class="text-block02">Expiry Date</p>
                                                <input 
                                                    name="date" type="date" 
                                                    class="form-control custom__date__icon"
                                                    placeholder="1/1/200"
                                                > 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary auth__submit__btn">Confirm</button>
                                </div>
                            </div><!-- row -->
                        </div>
                    </form>
                </div><!-- modal-body -->
            </div><!-- modal-content -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:582px;">
            <div class="modal-content border-0 rounded-4" style=""> 
                <div class="modal-body py-5 px-4 px-lg-5">
                    <p class="mb-1 text-2b fw-semibold small">Document Detail</p>
                    <p class="text-2b small">
                        -Trading Name to be accurate with company obtaining permit to work <br>
                        -Must be in date <br>
                        -Must state accurate license activities for works to be carried out
                    </p>
                </div> 
            </div>
        </div>
    </div>


<!-- footer and all scripts -->
<?php   
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


        const iti = $("#country_flag").intlTelInput({
            initialCountry: "auto", 
        }); 
        $(document).ready(function() {
            $("#country_flag").on("countrychange", function() {
                var selectedCountryFlag = $("#country_flag").intlTelInput("getSelectedCountryData");
              
                $("#countryName").val(selectedCountryFlag.name);
                // console.log("Selected phone code:", selectedCountryData.name);
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
 