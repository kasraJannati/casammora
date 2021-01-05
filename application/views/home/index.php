<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Home</title>
    <?php load_view('common/css'); ?>
</head>
<body>

<?php load_view('common/header'); ?>

<main class="text-center">
    <div id="myCarousel" class="carousel slide quattrocento-sans-font" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <img src="<?=BASEURL?>public/img/temp/slideshow01.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="d-inline">HUMBER VALLEY</h1>
                        <div class="divider-line col-lg-3 mx-auto my-2">PRESERVE</div>
                        <a class="btn btn-lg btn-light rounded-0 px-5 mt-5" href="#" role="button">VIEW DETAILS</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <img src="<?=BASEURL?>public/img/temp/slideshow02.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Bolton Gateway</h1>
                        <a class="btn btn-lg btn-light rounded-0 px-5 mt-5" href="#" role="button">VIEW DETAILS</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <img src="<?=BASEURL?>public/img/temp/slideshow03.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Graham Robinson House</h1>
                        <a class="btn btn-lg btn-light rounded-0 px-5 mt-5" href="#" role="button">VIEW DETAILS</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>

    </div>
    <div class="container marketing">

        <div class="row">
            <div class="col-md-12">
                <h2 class="display-5">
                    Beyond built, crafted.
                </h2>
                <div class="divider div-transparent div-dot col-2 mx-auto mt-4"></div>
                <div class="col-7 mx-auto">
                    <p><strong>At CasaMorra Homes, we create inspired communities and produce award-winning results.</strong></p>
                </div>
                <div class="col-10 mx-auto quattrocento-sans-font text-color1">
                    <p>
                        We are committed to cultivating an exceptional life experience for our customers. We pride ourselves on building beautiful homes with outstanding quality. As leaders in the construction industry for 27 years and guiding homeowners through the design process for the last 20 years, we believe the interior is the soul of the house. Together, we will build the home of your dreams as we work hard to ensure that we’re meeting the needs of you and your family.
                    </p>
                </div>
            </div>
        </div>

        <div class="row my-5 py-4">
            <div class="col-md-12">
<!--                <div class="embed-responsive embed-responsive-16by9 videoWrapper">-->
<!--                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>-->
<!--                </div>-->
                <div class="embed-responsive embed-responsive-16by9 videoWrapper">
                   <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row my-5 py-4">
        </div>
        <div class="row community-box pb-5 quattrocento-sans-font justify-content-center">
            <div class="col-md-12">
                <div class="divider-line">
                    <h2 class="display-4 text-dark">
                        Our Communities
                    </h2>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <div class="card border-0 rounded-0">
                    <div class="card-img-box card-img-top position-relative rounded-0">
                        <img src="<?=BASEURL?>public/img/temp/thumb01.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="card-img-overlay py-0">
                            <span class="card-img-badge text-dark px-4 py-2"><strong>COMING SOON</strong></span>
                        </div>
                    </div>
                    <div class="card-body mt-2 py-2 border-bottom border-4 border-dark">
                        <h4 class="card-title mb-0 text-dark">Humber Valley Preserve</h4>
                    </div>
                    <div class="card-footer bg-white py-2 rounded-0 border-top-0 border-bottom border-2 border-dark">
                        <a href="#" class="card-link"><strong>LEARN MORE</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <div class="card border-0 rounded-0">
                    <div class="card-img-box card-img-top position-relative rounded-0">
                        <img src="<?=BASEURL?>public/img/temp/thumb02.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="card-img-overlay py-0">
                            <span class="card-img-badge text-dark px-4 py-2"><strong>SOLD OUT</strong></span>
                        </div>
                    </div>
                    <div class="card-body mt-2 py-2 border-bottom border-4 border-dark">
                        <h4 class="card-title mb-0 text-dark">Bolton Gateway</h4>
                    </div>
                    <div class="card-footer bg-white py-2 rounded-0 border-top-0 border-bottom border-2 border-dark">
                        <a href="#" class="card-link"><strong>LEARN MORE</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <div class="card border-0 rounded-0">
                    <div class="card-img-box card-img-top position-relative rounded-0">
                        <img src="<?=BASEURL?>public/img/temp/thumb03.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="card-img-overlay py-0">
                            <span class="card-img-badge text-dark px-4 py-2"><strong>SOLD</strong></span>
                        </div>
                    </div>
                    <div class="card-body mt-2 py-2 border-bottom border-4 border-dark">
                        <h4 class="card-title mb-0 text-dark">Graham Robinson House</h4>
                    </div>
                    <div class="card-footer bg-white py-2 rounded-0 border-top-0 border-bottom border-2 border-dark">
                        <a href="#" class="card-link"><strong>LEARN MORE</strong></a>
                    </div>
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
