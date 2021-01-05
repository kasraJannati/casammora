<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Decor</title>


    <?php load_view('common/css'); ?>


  

</head>
<body>

<?php load_view('common/header'); ?>

    

<main>
    <div class="container">
        <div class="row box1">
            <div class="col-12">
                <div class="row">
                    <h2 class="col-11 col-md-9 col-lg-7 mx-auto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin convallis erat ut quam semper tincidunt.
                    </h2>
                </div>
                <div class="divider div-transparent div-dot col-8 col-md-5 col-lg-3 mx-auto mt-4"></div>

                <div class="row">
                    <div class="col-11 col-md-10 col-lg-9 mx-auto quattrocento-sans-font text-color1">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat varius enim, et scelerisque sem. Etiam pellentesque rutrum nunc, a tempor lacus interdum eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut et lorem orci. Vestibulum eget leo maximus, bibendum dolor vel, commodo elit. Donec sit amet eros augue. Integer molestie commodo orci et viverra.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row care-process-box py-5">
            <div class="col-md-12">
                <div class="divider-line">
                    <h3 class="display-4 text-dark">
                        Inspiration Gallery
                    </h3>
                </div>
            </div>
            <div class="col-12">

                <div id="sync1" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-01.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-01.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-01.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-01.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-01.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-01.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-01.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-01.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-01.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-01.jpg">
                    </div>
                </div>

                <div id="sync2" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-t-01.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-t-02.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-t-03.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-t-04.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-t-05.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-t-01.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-t-02.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-t-03.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-t-04.jpg">
                    </div>
                    <div class="item">
                        <img src="<?=BASEURL?>public/img/decor-slide/ds-t-05.jpg">
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>
<footer>
    <div class="container">
        <div class="divider div-transparent div-dot mb-1"></div>
        <div class="row foot-box py-3">
            <div class="col-12 col-md text-center text-md-end">
                <a class="float-md-start" href="#">
                    <img src="<?=BASEURL?>public/img/logo.png" alt="" width="240" height="55" class="d-inline-block align-top">
                </a>
            </div>
            <div class="col-12 col-md text-center text-md-end pt-3 mt-5 mt-md-0">
                <!-- Facebook -->
                <span class="icon px-2">
                    <a href="#">
                        <i class="bi-instagram"></i>
                    </a>
                </span>
                <span class="icon px-2">
                    <a href="#">
                        <i class="bi-twitter"></i>
                    </a>
                </span>
                <span class="icon px-2">
                    <a href="#">
                        <i class="bi-facebook"></i>
                    </a>
                </span>
                <span class="icon px-2">
                    <a href="#">
                        <i class="bi-youtube"></i>
                    </a>
                </span>
            </div>
        </div>
        <div class="row copyright-box py-3 mt-4 text-center text-md-end quattrocento-sans-font">
            <div class="col">
                <p><strong>Privacy Policy | Terms & Conditions</strong></p>
                <p>&copy; 2020 Copyright CasaMorra Homes. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>



<!-- Modal Register -->
<div class="modal fade register-modal quattrocento-sans-font" id="registerModal" tabindex="-1" aria-labelledby="registerModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header border-0">
                <!--                <h5 class="modal-title" id="registerModalCenterTitle">Modal title</h5>-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row text-start justify-content-center py-2 quattrocento-sans-font">
                    <div class="col-11 col-md-8 col-lg-6 col-xl-4 mb-5 mb-lg-0">
                        <form class="row g-3" id="register-modal">
                            <div class="col-12 text-center">
                                <h3 class="display-5">
                                    Register
                                </h3>
                                <div class="divider div-transparent div-dot my-5"></div>

                                <p class="px-5">
                                    Register to receive the latest news and updates from CASAMORRA.
                                </p>
                            </div>
                            <div class="col-12 my-1">
                                <input type="text" class="form-control rounded-0" id="first_name" placeholder="First Name *">
                            </div>
                            <div class="col-12 my-1">
                                <input type="text" class="form-control rounded-0" id="last_name" placeholder="Last Name *">
                            </div>
                            <div class="col-12 my-1">
                                <input type="email" class="form-control rounded-0" id="email_address" placeholder="Email Address *">
                            </div>
                            <div class="col-12 my-1">
                                <input type="text" class="form-control rounded-0" id="phone_number" placeholder="Phone Number *">
                            </div>
                            <div class="col-12 my-1">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Community</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12 my-1">
                                <label class="form-label">Are you a broker?</label>
                                <div class="form-check form-check-inline float-end">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-check form-check-inline float-end">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                            </div>
                            <div class="col-12 my-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <small>
                                            I Consent. CasaMorra seeks your consent to send  you commercial electronic messages (such as email). You may withdraw your consent at any time. By clicking  above you attest that you are the sole holder and user of this email account.*
                                        </small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 my-4">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-dark rounded-0 submit-register"><strong>REGISTER</strong></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Register Confirm -->
<div class="modal fade register-confirm-modal quattrocento-sans-font" id="registerConfirmModal" tabindex="-1" aria-labelledby="registerConfirmModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header border-0">
                <!--                <h5 class="modal-title" id="register-confirmModalCenterTitle">Modal title</h5>-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row text-start justify-content-center py-2 quattrocento-sans-font">
                    <div class="col-11 col-md-8 col-lg-7 col-xl-6 mb-5 mb-lg-0 text-center">
                        <img src="<?=BASEURL?>public/img/temp/logo-register.png" alt="" width="280" height="163" class="d-inline-block align-top">
                        <h3 class="display-5 mt-5">
                            Thank You for Registering
                        </h3>
                        <div class="col-8 mx-auto divider div-transparent div-dot my-5"></div>
                        <p class="px-5">
                            You’ll be receiving an email confirming your registration. Should you not receive our email, please check your Spam Box. Take a moment to add info@CASAMORRA.com to your email address book to make sure you receive our future communications with important updates & information.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php load_view('common/js'); ?>



<script src="<?=BASEURL?>public/owlcarousel/owl.carousel.js"></script>
<script>
    $(document).ready(function() {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 8; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: false,
            autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200,
            navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
        }).on('changed.owl.carousel', syncPosition);

        sync2
            .on('initialized.owl.carousel', function() {
                sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: slidesPerPage,
                dots: false,
                nav: false,
                smartSpeed: 200,
                slideSpeed: 500,
                center: true,
                loop:true,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                responsiveRefreshRate: 100,
                responsive:{
                    0:{
                        items:4
                    },
                    600:{
                        items:6
                    },
                    1000:{
                        items:slidesPerPage
                    }
                }
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            //var current = el.item.index;

            //if you disable loop you have to comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    });
</script>
</body>
</html>