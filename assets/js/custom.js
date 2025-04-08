$(document).ready(function () {
    // Mobile Main Menu
    const closeMobileMenu = document.getElementsByClassName('mobile-menu-close-btn');
    const mobileMenuBtn = document.getElementsByClassName('mobile-menu-btn');
    const mobileMenuNavigation = document.getElementById('mobileMenuNavigation');

    if (mobileMenuBtn) {
        $(mobileMenuBtn).on('click', () => {
            $(mobileMenuNavigation).addClass('show');
            $('body').addClass('mobile-menu-show');
        })
    }

    if (closeMobileMenu) {
        $(closeMobileMenu).on('click', () => {
            $(mobileMenuNavigation).removeClass('show');
            setTimeout(() => {
                $('body').removeClass('mobile-menu-show');
            }, 500);
        });
    }

    $('.mobile-menu-wraper ul li a').on('click', function (e) {
        const menuName = $(this).text();

        $('.mobile-menu-wraper ul li').removeClass('active');
        $(this).parent().addClass('active');

        $('.mobile-menu-active').text(menuName);

        $('#mobileMenuNavigation').removeClass('show');
        setTimeout(() => {
            $('body').removeClass('mobile-menu-show');
        }, 500);
    });


    $("#country-code").select2({
        allowClear: true,
        minimumResultsForSearch: -1
    });
});
