<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <title>Login</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" /> 
    
    <!-- cache control -->
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta name="theme-color" content="#0040B4">

    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="assets/css/intlTelInput.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
 
</head> 
<body>


    <div class="overlay"></div>
    <header class="theme-header bg-primary d-flex align-items-center">
        <div class="container">
            <div class="text-center text-lg-start">
                <a href="index.php" class="d-none d-lg-inline-block logo" aria-label="Marinas Logo">
                    <img src="assets/images/logo.svg" alt="Dubai Harbour Marinas" width="254px" height="70px" />
                </a>
                <a href="/" class="d-inline-block d-lg-none" aria-label="Marinas Logo">
                    <img src="assets/images/mobile-logo.svg" alt="Dubai Harbour Marinas" width="36px" height="36px" />
                </a>
            </div> 
        </div> 

    </header>
    
    <?php if(isset($showSubMenu) && $showSubMenu == true ): ?>
    <div class="bottom-header bg-white py-4">
        <div class="container">
            <div class="bottom-header-wrap d-flex justify-content-between">
                <div class="left-menu">
                    <div class="mobile-menu d-flex d-lg-none gap-3">
                        <button  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="mobile-menu-btn btn p-0 border-0" aria-label="Toggle navigation">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 7H21" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M3 12H21" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M3 17H21" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </button>
                        <span class="mobile-menu-active">Home</span>
                    </div>

                    <!-- <div class="mobile-menu-wraper" id="mobileMenuNavigation">
                        <div class="mobile-menu-header">
                            <span class="menu">Menu</span>
                            <button type="button" class="mobile-menu-close-btn" aria-label="Close navigation">
                                
                            </button>
                        </div>
                        
                    </div> -->

                    <ul class="list-unstyled desktop-menu p-0 m-0 d-none d-lg-flex gap-2">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Registered Contractor</a></li>
                        <li><a href="#">Apply For Permit</a></li>
                    </ul>
                </div>
                <div class="right-menu ">
                    <ul class="list-unstyled d-inline-flex align-items-center gap-3">
                        <li class="border-end pe-3">
                            <a href="#" class="d-flex align-items-center gap-2">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.969727 11.7001L6.96973 11.6801C7.71973 11.6801 8.55973 12.2501 8.83973 12.9501L9.97973 15.8301C10.2397 16.4801 10.6497 16.4801 10.9097 15.8301L13.1997 10.0201C13.4197 9.46011 13.8297 9.44011 14.1097 9.97011L15.1497 11.9401C15.4597 12.5301 16.2597 13.0101 16.9197 13.0101H20.9797M7.96973 21H13.9697C18.9697 21 20.9697 19 20.9697 14V8C20.9697 3 18.9697 1 13.9697 1H7.96973C2.96973 1 0.969727 3 0.969727 8V14C0.969727 19 2.96973 21 7.96973 21Z" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="d-none d-lg-inline-block">Status</span>
                            </a>
                        </li>
                        <li class="border-end pe-3">
                            <a href="#" class="d-flex align-items-center gap-2">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.00986 13.5098C7.18986 13.8098 7.40985 14.0898 7.65985 14.3398C9.49985 16.1798 12.4898 16.1798 14.3398 14.3398C15.0898 13.5898 15.5199 12.6398 15.6599 11.6698M6.33984 10.3298C6.47984 9.34983 6.90985 8.40979 7.65985 7.65979C9.49985 5.81979 12.4898 5.81979 14.3398 7.65979C14.5998 7.91979 14.8098 8.1998 14.9898 8.4898M6.81985 16.1798V13.5098H9.48984M15.1798 5.81982V8.48981H12.5099M21 11C21 16.5228 16.5228 21 11 21C5.47715 21 1 16.5228 1 11C1 5.47715 5.47715 1 11 1C16.5228 1 21 5.47715 21 11Z" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="d-none d-lg-inline-block">Renew</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="d-flex align-items-center gap-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9998 21.0001C13.5998 21.0001 15.9598 20.0101 17.7398 18.3801C17.6398 17.4401 17.0398 16.5201 15.9698 15.8001C13.2498 13.9801 8.76977 13.9801 6.02977 15.8001C4.95977 16.5201 4.35977 17.4401 4.25977 18.3801C6.03977 20.0101 8.39977 21.0001 10.9998 21.0001ZM10.9998 21.0001C16.5226 21.0001 21 16.5228 21 11C21 5.47715 16.5228 1 11 1C5.47715 1 1 5.47715 1 11C1 16.5228 5.47692 21.0001 10.9998 21.0001ZM11.1197 11.78C11.0497 11.77 10.9597 11.77 10.8797 11.78C9.11973 11.72 7.71973 10.28 7.71973 8.50998C7.71973 6.69998 9.17973 5.22998 10.9997 5.22998C12.8097 5.22998 14.2797 6.69998 14.2797 8.50998C14.2697 10.28 12.8797 11.72 11.1197 11.78Z" stroke="#0040B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="d-none d-lg-inline-block">My Profile</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <ul class="list-unstyled d-flex flex-column gap-2">
                                    <li>
                                        <a href="#" class="d-flex gap-2 align-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.9082 4.20801C10.2665 6.50801 12.1332 8.26634 14.4499 8.49967M2.5 18.3335H17.5M11.0504 3.00002L4.20878 10.2417C3.95045 10.5167 3.70045 11.0584 3.65045 11.4334L3.34211 14.1333C3.23378 15.1083 3.93378 15.775 4.90045 15.6084L7.58378 15.15C7.95878 15.0834 8.48378 14.8084 8.74211 14.525L15.5838 7.28335C16.7671 6.03335 17.3004 4.60835 15.4588 2.86668C13.6254 1.14168 12.2338 1.75002 11.0504 3.00002Z" stroke="#0040B4" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <span>Edit My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex gap-2 align-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.18301 16.25H6.24967C5.73301 16.25 5.27467 16.2333 4.86634 16.175C2.67467 15.9333 2.08301 14.9 2.08301 12.0833V7.91667C2.08301 5.1 2.67467 4.06667 4.86634 3.825C5.27467 3.76667 5.73301 3.75 6.24967 3.75H9.13301" stroke="#1849D6" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.5166 3.75H13.7499C14.2666 3.75 14.7249 3.76667 15.1333 3.825C17.3249 4.06667 17.9166 5.1 17.9166 7.91667V12.0833C17.9166 14.9 17.3249 15.9333 15.1333 16.175C14.7249 16.2333 14.2666 16.25 13.7499 16.25H12.5166" stroke="#1849D6" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.5 1.6665V18.3332" stroke="#1849D6" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.2451 10.0002H9.25258" stroke="#1849D6" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.91209 10.0002H5.91957" stroke="#1849D6" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex gap-2 align-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.41699 6.30019C7.67533 3.3002 9.21699 2.0752 12.592 2.0752H12.7003C16.4253 2.0752 17.917 3.56686 17.917 7.29186V12.7252C17.917 16.4502 16.4253 17.9419 12.7003 17.9419H12.592C9.24199 17.9419 7.70033 16.7335 7.42533 13.7835" stroke="#0040B4" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.4999 10H3.0166" stroke="#0040B4" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.87467 7.20801L2.08301 9.99967L4.87467 12.7913" stroke="#0040B4" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header d-flex justify-content-between align-items-center border-bottom">
            <p class="offcanvas-title m-0 fs-6 fw-semibold title__color" id="offcanvasExampleLabel">Menu</p>
            <button type="button" class="btn p-0 border-0 text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.17 14.83L14.83 9.17004" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M14.83 14.83L9.17 9.17004" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled d-flex flex-column gap-3 text-center link__list">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Registered Contractor</a></li>
                <li><a href="#">Apply For Permit</a></li>
            </ul>
        </div>
    </div><!--offcanvas-->
    <?php endif; ?>