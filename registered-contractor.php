
<!-- header menu -->
<?php $showSubMenu=true; include('includes/header.inc.php'); ?>

    <main class="main__scroll__area"> 
        <section class="registered__contractor__page py-4">
            <div class="container py-md-3">
                <div class="box__shadow bg-white p-4 rounded-4 mb-4">
                    <h1 class="fw-semibold mb-0 lead-lg title__color text-center text-lg-start">Registered Contractor </h1>
                </div>
                <div class="row g-4">
                    <div class="col-xl-7">
                        <div class="box__shadow bg-white p-4 rounded-top-4">
                            <div class="step__box ">
                               <ul class="d-flex gap-3 justify-content-center align-items-center form-stepper form-stepper-horizontal">
                                    <li class="form-stepper-active form-stepper-list" step="1">
                                        <div class="d-flex flex-row align-items-center justify-conten-center gap-4">
                                            <div class="position-relative">
                                                <img src="assets/images/icons/step-fill.svg" alt="box" class="img-fluid step__icon fill__icon" width="115" height="48">
                                                <span class="position-absolute top-50 start-50 translate-middle pe-1 w-100 text-center step__label">Step 1 <span class="d-md-none">of 3</span></span>
                                            </div> 
                                            <img src="assets/images/icons/arrow-dotted-line.svg" alt="aroow" class="img-fluid arrow__icon">
                                        </div>
                                        <p class="step__title mt-md-3 mb-0">Submit Documents</p>
                                    </li>
                                    <li class="form-stepper-unfinished form-stepper-list" step="2">
                                        <div class="d-flex flex-row align-items-center justify-conten-center gap-4">
                                            <div class="position-relative">
                                                <img src="assets/images/icons/step-fill.svg" alt="box" class="img-fluid step__icon fill__icon" width="115" height="48">
                                                <img src="assets/images/icons/step-outline.svg" alt="box" class="img-fluid step__icon outline__icon" width="115" height="48">
                                                <span class="position-absolute top-50 start-50 translate-middle pe-1 w-100 text-center step__label">Step 2 <span class="d-md-none">of 3</span></span>
                                            </div>
                                            <img src="assets/images/icons/arrow-dotted-line.svg" alt="aroow" class="img-fluid arrow__icon">
                                        </div>
                                        <p class="step__title mt-md-3 mb-0">Documents Verification </p>
                                    </li>
                                    <li class="form-stepper-unfinished form-stepper-list" step="3">
                                        <div class="d-flex flex-row align-items-center justify-conten-center gap-4">
                                            <div class="position-relative">
                                                <img src="assets/images/icons/step-fill.svg" alt="box" class="img-fluid step__icon fill__icon" width="115" height="48">
                                                <img src="assets/images/icons/step-outline.svg" alt="box" class="img-fluid step__icon outline__icon" width="115" height="48">
                                                <span class="position-absolute top-50 start-50 translate-middle pe-1 w-100 text-center step__label">Step 3 <span class="d-md-none">of 3</span></span>
                                            </div> 
                                        </div>
                                        <p class="step__title mt-md-3 mb-0">Verification Status</p>
                                    </li>
                                    <li class="form-stepper-unfinished form-stepper-list d-none" step="4">
                                        <div class="d-flex flex-row align-items-center justify-conten-center gap-4">
                                            <div class="position-relative">
                                                <img src="assets/images/icons/step-fill.svg" alt="box" class="img-fluid step__icon fill__icon" width="115" height="48">
                                                <img src="assets/images/icons/step-outline.svg" alt="box" class="img-fluid step__icon outline__icon" width="115" height="48">
                                                <span class="position-absolute top-50 start-50 translate-middle pe-1 w-100 text-center step__label">Step 3 <span class="d-md-none">of 3</span></span>
                                            </div> 
                                        </div>
                                        <p class="step__title mt-md-3 mb-0">Verification Status</p>
                                    </li>
                               </ul>
                            </div>
                        </div>

                        <!-- step 1 -->
                        <div id="step-1" class="form-step"> 
                            <div class="auth__form__box box__shadow bg-white p-4 rounded-bottom-4 mt-2">
                                <p class="text-dark lead-sm fw-semibold pb-3 pb-lg-4">Submit Documents</p>
                                <div class="row gx-3 gy-4 g-md-4">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <p class="text-dark fw-medium lead-sm mb-0">Valid Company Trade License</p>
                                        <span class="fs-12 text-gray03">Add your documents here</span>
                                        <div class="pt-3 pt-lg-4">
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
                                                    <figure class="position-absolute end-0 m-0 info__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M10 1C5.0365 1 1 5.03758 1 10C1 14.9635 5.03758 19 10 19C14.9635 19 19 14.9624 19 10C19 5.0365 14.9624 1 10 1ZM10 2.12935C14.355 2.12935 17.8716 5.64593 17.8716 10.001C17.8716 14.356 14.355 17.8726 10 17.8726C5.64496 17.8726 2.12837 14.356 2.12837 10.001C2.12837 5.64593 5.64496 2.12935 10 2.12935Z" fill="#6791DE"/>
                                                            <path d="M10.0008 9.4358C9.85102 9.43475 9.70657 9.4938 9.6011 9.60031C9.4946 9.70575 9.43555 9.85022 9.43555 9.99996V13.969C9.43555 14.1187 9.4946 14.2632 9.6011 14.3686C9.70654 14.4751 9.85101 14.5342 10.0008 14.5331C10.1505 14.5342 10.2949 14.4751 10.4004 14.3686C10.5069 14.2632 10.566 14.1187 10.5649 13.969V9.99996C10.566 9.85022 10.5069 9.70577 10.4004 9.60031C10.295 9.4938 10.1505 9.43475 10.0008 9.4358Z" fill="#6791DE"/>
                                                            <path d="M11.1242 6.62684C11.1242 7.24794 10.6202 7.75093 9.99908 7.75093C9.70066 7.75093 9.41489 7.63282 9.20401 7.42192C8.99313 7.21101 8.875 6.92527 8.875 6.62684C8.875 6.32842 8.9931 6.0416 9.20401 5.83072C9.41492 5.61984 9.70066 5.50171 9.99908 5.50171C10.6202 5.50171 11.1242 6.00575 11.1242 6.62684Z" fill="#6791DE"/>
                                                        </svg>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="pt-3 pt-lg-4">
                                                <p class="text-block02">Expiry Date</p>
                                                <input 
                                                    name="date" type="date" 
                                                    class="form-control custom__date__icon"
                                                    placeholder="1/1/200"
                                                > 
                                            </div>
                                        </div>
                                    </div><!--.col -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <p class="text-dark fw-medium lead-sm mb-0">Valid Company Trade License</p>
                                        <span class="fs-12 text-gray03">Add your documents here</span>
                                        <div class="pt-3 pt-lg-4">
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
                                                    <figure class="position-absolute end-0 m-0 info__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M10 1C5.0365 1 1 5.03758 1 10C1 14.9635 5.03758 19 10 19C14.9635 19 19 14.9624 19 10C19 5.0365 14.9624 1 10 1ZM10 2.12935C14.355 2.12935 17.8716 5.64593 17.8716 10.001C17.8716 14.356 14.355 17.8726 10 17.8726C5.64496 17.8726 2.12837 14.356 2.12837 10.001C2.12837 5.64593 5.64496 2.12935 10 2.12935Z" fill="#6791DE"/>
                                                            <path d="M10.0008 9.4358C9.85102 9.43475 9.70657 9.4938 9.6011 9.60031C9.4946 9.70575 9.43555 9.85022 9.43555 9.99996V13.969C9.43555 14.1187 9.4946 14.2632 9.6011 14.3686C9.70654 14.4751 9.85101 14.5342 10.0008 14.5331C10.1505 14.5342 10.2949 14.4751 10.4004 14.3686C10.5069 14.2632 10.566 14.1187 10.5649 13.969V9.99996C10.566 9.85022 10.5069 9.70577 10.4004 9.60031C10.295 9.4938 10.1505 9.43475 10.0008 9.4358Z" fill="#6791DE"/>
                                                            <path d="M11.1242 6.62684C11.1242 7.24794 10.6202 7.75093 9.99908 7.75093C9.70066 7.75093 9.41489 7.63282 9.20401 7.42192C8.99313 7.21101 8.875 6.92527 8.875 6.62684C8.875 6.32842 8.9931 6.0416 9.20401 5.83072C9.41492 5.61984 9.70066 5.50171 9.99908 5.50171C10.6202 5.50171 11.1242 6.00575 11.1242 6.62684Z" fill="#6791DE"/>
                                                        </svg>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="pt-3 pt-lg-4">
                                                <p class="text-block02">Expiry Date</p>
                                                <input 
                                                    name="date" type="date" 
                                                    class="form-control custom__date__icon"
                                                    placeholder="1/1/200"
                                                > 
                                            </div>
                                        </div>
                                    </div><!--.col -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <p class="text-dark fw-medium lead-sm mb-0">Valid Company Trade License</p>
                                        <span class="fs-12 text-gray03">Add your documents here</span>
                                        <div class="pt-3 pt-lg-4">
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
                                                    <figure class="position-absolute end-0 m-0 info__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M10 1C5.0365 1 1 5.03758 1 10C1 14.9635 5.03758 19 10 19C14.9635 19 19 14.9624 19 10C19 5.0365 14.9624 1 10 1ZM10 2.12935C14.355 2.12935 17.8716 5.64593 17.8716 10.001C17.8716 14.356 14.355 17.8726 10 17.8726C5.64496 17.8726 2.12837 14.356 2.12837 10.001C2.12837 5.64593 5.64496 2.12935 10 2.12935Z" fill="#6791DE"/>
                                                            <path d="M10.0008 9.4358C9.85102 9.43475 9.70657 9.4938 9.6011 9.60031C9.4946 9.70575 9.43555 9.85022 9.43555 9.99996V13.969C9.43555 14.1187 9.4946 14.2632 9.6011 14.3686C9.70654 14.4751 9.85101 14.5342 10.0008 14.5331C10.1505 14.5342 10.2949 14.4751 10.4004 14.3686C10.5069 14.2632 10.566 14.1187 10.5649 13.969V9.99996C10.566 9.85022 10.5069 9.70577 10.4004 9.60031C10.295 9.4938 10.1505 9.43475 10.0008 9.4358Z" fill="#6791DE"/>
                                                            <path d="M11.1242 6.62684C11.1242 7.24794 10.6202 7.75093 9.99908 7.75093C9.70066 7.75093 9.41489 7.63282 9.20401 7.42192C8.99313 7.21101 8.875 6.92527 8.875 6.62684C8.875 6.32842 8.9931 6.0416 9.20401 5.83072C9.41492 5.61984 9.70066 5.50171 9.99908 5.50171C10.6202 5.50171 11.1242 6.00575 11.1242 6.62684Z" fill="#6791DE"/>
                                                        </svg>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="pt-3 pt-lg-4">
                                                <p class="text-block02">Expiry Date</p>
                                                <input 
                                                    name="date" type="date" 
                                                    class="form-control custom__date__icon"
                                                    placeholder="1/1/200"
                                                > 
                                            </div>
                                        </div>
                                    </div><!--.col -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <p class="text-dark fw-medium lead-sm mb-0">Valid Company Trade License</p>
                                        <span class="fs-12 text-gray03">Add your documents here</span>
                                        <div class="pt-3 pt-lg-4">
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
                                                    <figure class="position-absolute end-0 m-0 info__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M10 1C5.0365 1 1 5.03758 1 10C1 14.9635 5.03758 19 10 19C14.9635 19 19 14.9624 19 10C19 5.0365 14.9624 1 10 1ZM10 2.12935C14.355 2.12935 17.8716 5.64593 17.8716 10.001C17.8716 14.356 14.355 17.8726 10 17.8726C5.64496 17.8726 2.12837 14.356 2.12837 10.001C2.12837 5.64593 5.64496 2.12935 10 2.12935Z" fill="#6791DE"/>
                                                            <path d="M10.0008 9.4358C9.85102 9.43475 9.70657 9.4938 9.6011 9.60031C9.4946 9.70575 9.43555 9.85022 9.43555 9.99996V13.969C9.43555 14.1187 9.4946 14.2632 9.6011 14.3686C9.70654 14.4751 9.85101 14.5342 10.0008 14.5331C10.1505 14.5342 10.2949 14.4751 10.4004 14.3686C10.5069 14.2632 10.566 14.1187 10.5649 13.969V9.99996C10.566 9.85022 10.5069 9.70577 10.4004 9.60031C10.295 9.4938 10.1505 9.43475 10.0008 9.4358Z" fill="#6791DE"/>
                                                            <path d="M11.1242 6.62684C11.1242 7.24794 10.6202 7.75093 9.99908 7.75093C9.70066 7.75093 9.41489 7.63282 9.20401 7.42192C8.99313 7.21101 8.875 6.92527 8.875 6.62684C8.875 6.32842 8.9931 6.0416 9.20401 5.83072C9.41492 5.61984 9.70066 5.50171 9.99908 5.50171C10.6202 5.50171 11.1242 6.00575 11.1242 6.62684Z" fill="#6791DE"/>
                                                        </svg>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="pt-3 pt-lg-4">
                                                <p class="text-block02">Expiry Date</p>
                                                <input 
                                                    name="date" type="date" 
                                                    class="form-control custom__date__icon"
                                                    placeholder="1/1/200"
                                                > 
                                            </div>
                                        </div>
                                    </div><!--.col -->
                                </div><!-- row -->
                                <div class="mt-4 mt-lg-5 text-center">
                                    <button class="btn btn-primary height px-4 px-lg-5 firstStep" type="button" step_number="2">Submit</button>
                                </div>
                            </div><!-- auth__form__box -->
                        </div>

                        <!-- step 2 -->
                        <div id="step-2" class="form-step d-none"> 
                            <div class="box__shadow bg-white p-4 mt-2">
                                <p class="text-dark lead-sm fw-semibold m-0">Documents</p> 
                            </div><!-- auth__form__box -->

                            <div class="auth__form__box box__shadow bg-white py-4 px-3 px-md-0 rounded-bottom-4 mt--1 mt-md-2">
                                <div class="px-4 py-3 d-none d-md-block"> 
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <div class="d-inline-flex align-items-center gap-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 12.2H15" stroke="#0040B4" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8 16.2H12.38" stroke="#0040B4" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 6H14C16 6 16 5 16 4C16 2 15 2 14 2H10C9 2 8 2 8 4C8 6 9 6 10 6Z" stroke="#0040B4" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16 4.02002C19.33 4.20002 21 5.43002 21 10V16C21 20 20 22 15 22H9C4 22 3 20 3 16V10C3 5.44002 4.67 4.20002 8 4.02002" stroke="#0040B4" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg> 
                                                <span class="fs-6 fw-semibold text-2b text-uppercase">Document</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="d-flex justify-content-center align-items-center gap-3 border-start"> 
                                                <span class="fs-6 fw-semibold text-2b text-uppercase">Expiry Date</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="d-flex justify-content-center align-items-center gap-3 border-start"> 
                                                <span class="fs-6 fw-semibold text-2b text-uppercase">STATUS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="document__list list-unstyled ps-0 mb-0">
                                    <?php include('includes/components/document-list-item-card.inc.php'); ?>
                                    <?php include('includes/components/document-list-item-card.inc.php'); ?>
                                    <?php include('includes/components/document-list-item-card.inc.php'); ?>
                                    <?php include('includes/components/document-list-item-card.inc.php'); ?>
                                    <?php include('includes/components/document-list-item-card.inc.php'); ?>
                                    <?php include('includes/components/document-list-item-card.inc.php'); ?>
                                </ul>
                                <div class="mt-4 mt-lg-5 text-center">
                                    <button type="button" class="btn btn-outline-primary px-4 px-lg-5 backToFirstStep">Back</button>
                                    <button type="button" class="btn btn-primary px-4 px-lg-5 secondStep">Submit</button>
                                </div>
                            </div><!-- auth__form__box -->
                        </div>

                        <!-- step 3 -->
                        <div id="step-3" class="form-step d-none"> 
                            <div class="auth__form__box box__shadow bg-white p-4 rounded-bottom-4 mt-2">
                                <div class="my-5 py-md-5">
                                    <div class="text-center approved__box mx-auto">
                                        <img src="assets/images/icons/Done.svg" alt="Done" class="img-fluid">
                                        <p class="mt-3 fs-5 fw-semibold mb-1">Approved</p>
                                        <p class=" lead-sm text-2b">Your documents have been successfully accepted</p>
                                        <div class="bg-primary w-100 rounded-pill py-1"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-4 mt-lg-5 text-center">
                                    <button type="submit" class="btn btn-primary px-4 px-lg-5 applyForPermit">Apply for the Permit</button>
                                </div>
                            </div><!-- auth__form__box -->
                        </div>

                        <!-- step 4 -->
                        <div id="step-4" class="form-step d-none"> 
                            <div class="auth__form__box box__shadow bg-white p-4 rounded-bottom-4 mt-2">
                                <div class="mt-5 pt-md-5 mb-4 mb-md-5">
                                    <div class="text-center approved__box mx-auto">
                                        <img src="assets/images/icons/EmptyState.svg" alt="Done" class="img-fluid">
                                        <p class="mt-3 fs-5 fw-semibold mb-1">Declined</p>
                                        <p class=" lead-sm text-2b">Your request has been declined </p> 
                                    </div>
                                </div>
                                <form action="#" class="row g-4">
                                    <div class="col-md-6">
                                        <label for="declined_by" class="label">Declined By</label>
                                        <input type="text" class="form-control" id="declined_by" value="Owner"> 
                                    </div>
                                    <div class="col-md-6">
                                        <label for="closure_remark" class="label">Closure Remark</label>
                                        <input type="text" class="form-control" id="closure_remark" value="Owner"> 
                                    </div>
                                    <div class="col-md-6">
                                        <label for="date" class="label">Date</label>
                                        <input type="date" class="form-control custom__date__icon" id="date" value="Owner"> 
                                    </div>
                                </form>
                                <div class="mt-4 mt-lg-5 text-center">
                                    <button type="submit" class="btn btn-primary px-4 px-lg-5 ">Submit Again</button>
                                </div>
                            </div><!-- auth__form__box -->
                        </div>



                    </div><!--.col-->


                    <div class="col-xl-5">
                        <div class="box__shadow bg-white px-4 py-3 rounded-4 d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="fw-medium mb-0 fs-4 title__color text-center">Marina Contractor Rules and Regulations</h2>
                                <p class="lead-sm text-block02 mt-3 mt-lg-4">
                                    All contractors must respect and comply with the rules and regulations of Dubai Harbour Marinas Violating or non
                                    of these rules shall result in either a denial in access or revoking of the “Approved Contractor” status.
                                </p>
                                <p class="lead-sm fw-medium text-block01">Contractor Rules and Regulations</p>
                                <div class="content__scrollbox p-4"> 
                                    <ol class="contractor__list text-gray01 d-flex flex-column gap-2">
                                        <li>All contracting companies and their employees must be registered with the marina HSE/Operations</li>
                                        <li>department to be able to access the marina for work related purposes.</li>
                                        <li>Contractors must comply with the permitted working hours which runs from 0800am-0500pm, Monday to Friday (excluding public holidays), except in case of emergencies, contractors must obtain prior approval from the marina management.</li>
                                        <li>No work is to be performed inside the marina without prior approval from vessel owner in conjunction with a permit to work issued by the marina HSE Officer.</li>
                                        <li>Contractors must ensure they have vessels name, and berth number before applying for a permit.</li>
                                        <li>Contractors must always have on them, identification documents to be presented at the security gates for access control, without which access will be denied.</li>
                                        <li>Contractors must dress neatly in company uniform or appropriately according to the UAE law. Respect local culture and maintain high standard across the marinas.</li>
                                        <li>Contractor vehicles must park in the designated car parks only. Please follow our parking provider guidelines where terms and conditions may apply.</li>
                                        <li>Fishing (from dock or boat) and cleaning fish is prohibited in the marinas.</li>
                                        <li>Boarding another vessel other than the one listed on your permit to work is prohibited. To do so is deemed trespassing and will be reported to the authorities.</li>
                                        <li>Do not throw garbage of any kind into the water. Contractors must take with them all items, including but not limited to waste, batteries, oil etc. Do not leave on the dock or discard such items in the marina bins</li>
                                        <li>Storage of gas cylinders, fuel tanks, batteries, chemicals, or any flammable containers is prohibited on the dock, in the dock box, or in the storage units. The use of BBQs and portable generators is strictly prohibited on the marina pontoons.</li>
                                        <li>The dock must be kept clear except for the boat's gangway, shoebox, mat, and assigned dock box. All other equipment must be stowed onboard</li>
                                        <li>Anyone responsible for damaging marina assets, including but not limited to pedestals, safety ladders, SOS pedestals, fire systems, or access gates, will be charged the cost of repairs.</li>
                                        <li>All types of noise (including but not limited to music and engine noise) must be kept to a minimum so as not to disturb others in the vicinity.</li>
                                        <li>Taking photographs of private yachts without approval from yacht owner or the marina management is prohibited.</li>
                                        <li>Contractors shall not engage in any form of marketing whilst inside the marina. Sharing of flyers and company cards without prior marina approval is prohibited.</li>
                                        <li>All work-related safety control measures stated on work permits must be respected, the marina HSE Officer will randomly inspect vessels to ensure contractors are compliant to such requirements.</li>
                                        <li>All sub-contracted works must be communicated properly prior to work execution date. No sub-contractor shall be permitted to work inside the marina without prior approval from the marina management or a marina ‘Approved Contractor’ status.</li>
                                    </ol>
                                </div>
                                <div class="form-check text-gray01 py-4 pt-lg-5">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        I confirm that you have read and agree to our terms and conditions.
                                    </label>
                                </div>
                            </div>
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

<script>
        /**
         * Define a function to navigate betweens form steps.
         * It accepts one parameter. That is - step number.
         */
        const navigateToFormStep = (stepNumber) => {
            /**
             * Hide all form steps.
             */
            document.querySelectorAll(".form-step").forEach((formStepElement) => {
                formStepElement.classList.add("d-none");
            });
            /**
             * Mark all form steps as unfinished.
             */
            document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
                formStepHeader.classList.add("form-stepper-unfinished");
                formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
            });
            /**
             * Show the current form step (as passed to the function).
             */
            document.querySelector("#step-" + stepNumber).classList.remove("d-none");
            /**
             * Select the form step circle (progress bar).
             */
            const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
            /**
             * Mark the current form step as active.
             */
            formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
            formStepCircle.classList.add("form-stepper-active");
            /**
             * Loop through each form step circles.
             * This loop will continue up to the current step number.
             * Example: If the current step is 3,
             * then the loop will perform operations for step 1 and 2.
             */
            for (let index = 0; index < stepNumber; index++) {
                /**
                 * Select the form step circle (progress bar).
                 */
                const formStepCircle = document.querySelector('li[step="' + index + '"]');
                /**
                 * Check if the element exist. If yes, then proceed.
                 */
                if (formStepCircle) {
                    /**
                     * Mark the form step as completed.
                     */
                    formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
                    formStepCircle.classList.add("form-stepper-completed");
                }
            }
        };
        /**
         * Select all form navigation buttons, and loop through them.
         */
        document.querySelectorAll(".btn-navigate-form-step").forEach((formNavigationBtn) => {
            /**
             * Add a click event listener to the button.
             */
            formNavigationBtn.addEventListener("click", () => {
                /**
                 * Get the value of the step.
                 */
                const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
                /**
                 * Call the function to navigate to the target form step.
                 */
                navigateToFormStep(stepNumber);
            });
        });


        // Check first step value
        $(".firstStep").on('click', function(){
            navigateToFormStep(2);
        })
        $(".backToFirstStep").on('click', function(){
            navigateToFormStep(1);
        })
        // Check second step value
        $(".secondStep").on('click', function(){  
            navigateToFormStep(3);
        })
        // Check second step value
        $(".applyForPermit").on('click', function(){  
            navigateToFormStep(4);
        })
         
    </script>
