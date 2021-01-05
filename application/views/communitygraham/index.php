<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Community Graham Robinson House</title>


    <?php load_view('common/css'); ?>

</head>
<body>


<?php load_view('common/header'); ?>
  
<main>
    <div class="container">
        <div class="row box1 mb-5">
            <div class="col-12">
                <div class="row">
                    <h2 class="col-11 col-md-9 col-lg-7 mx-auto">
                        History and modernity, now together through the design and décor brilliance of Louanne Morra.
                    </h2>
                </div>
                <div class="divider div-transparent div-dot col-8 col-md-5 col-lg-3 mx-auto mt-4"></div>

                <div class="row">
                    <div class="col-11 col-md-10 col-lg-9 mx-auto quattrocento-sans-font text-color1">
                        <p>
                            The Gothic Revival style dwelling was custom-built in 1867. CasaMorra Homes restored this beautiful piece of Caledon’s history as its inaugural project, preserving the architecture and creating an absolutely magnificent home boasting a glorious combination of high ceilings, restored features and modern amenities. The revival began in 2016 when Sam Morra became the first developer in history to move a Heritage home from a third-party property to anchor his newly created Bolton Gateway subdivision.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row map-box py-5">
            <!-- change whit map style - start -->
            <div class="container h-100" style="height: 600px !important; background-color: rgba(0,0,0,.2)">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <h1 class="font-weight-light">MAP</h1>
                    </div>
                </div>
            </div>
            <!-- change whit map style - end -->
        </div>
        <div class="row gallery-box py-5">
            <div class="col-12">
                <div class="grid-gallery">
                    <img class="img-fluid" src="<?=BASEURL?>public/img/graham/v1.jpg" alt="Card image cap">
                    <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h1.jpg" alt="Card image cap">
                    <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h2.jpg" alt="Card image cap">
                    <img class="img-fluid" src="<?=BASEURL?>public/img/graham/v4.jpg" alt="Card image cap">
                </div>
                <div class="grid-gallery count-2">
                    <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h2.jpg" alt="Card image cap">
                    <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h4.jpg" alt="Card image cap">
                </div>
                <div class="grid-gallery">
                    <img class="img-fluid" src="<?=BASEURL?>public/img/graham/v3.jpg" alt="Card image cap">
                    <img class="img-fluid" src="<?=BASEURL?>public/img/graham/v4.jpg" alt="Card image cap">
                    <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h3.jpg" alt="Card image cap">
                    <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h5.jpg" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>
</main>

<?php load_view('common/footer'); ?>


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


</body>
</html>
