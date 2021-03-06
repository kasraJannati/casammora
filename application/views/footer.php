<footer class="<?= ($this->url_last == 'about' || $this->url_last == 'communitynowopen' ? 'bg-color1' : '') ?>">
    <div class="container">
        <?php
        // about
        if ($this->url_last == 'about'):
            ?>
            <div class="row about-box">
                <div class="col-md-6 text-center py-5">
                    <img src="<?=BASEURL?>public/img/award.png" alt=" ">
                </div>
                <div class="col-md-6 text-center py-5">
                    <!-- <h3 class="divider-line w-25 mx-auto my-5 pt-5 quattrocento-sans-font">Awarded</h3> -->
                    <div class="divider-line mx-auto my-5 display-5">Awarded</div>


                    <p class="display-6 mb-0 mt-5">Town of Caledon</p>
                    <p class="display-2">Heritage Award</p>
                    <p class="display-6 quattrocento-sans-font"><small>2018</small></p>
                </div>
            </div>
            <?php
        endif;
        // test
        if ($this->url_last == 'communitynowopen'):
            ?>
            <div class="row fag-box">
                <div class="col-12">
                    <h3 class="display-5 my-5">
                        <strong>Features & Finishes</strong>
                    </h3>
                </div>
                <div class="col-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    EXTERIOR CONSTRUCTION DETAILS
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body quattrocento-sans-font">
                                    • Ceiling height approximately 9'0" on main floor and 8'0" on second floor, as per model type.
                                    <br>
                                    • Oak main staircase with natural finish oak stringers, handrails and spindles, as per plan. Stairway railings to be mounted on oak nosings in platformed areas, as per model type.
                                    <br>
                                    • Paneled doors colonial style throughout (Except where sliders are indicated, as per plan).
                                    <br>
                                    • Aristocrat trim on all doors and arches.
                                    <br>
                                    • All arches on main floor to be trimmed, as per plan.
                                    <br>
                                    • All interior walls to be finished with flat off-white paint, except for kitchen, bathrooms and wood trim, which are painted with semi-gloss off-white paint.
                                    <br>
                                    • Smooth ceilings throughout.
                                    <br>
                                    • All interior door knobs to be single lever handles.
                                    <br>
                                    • Laundry area complete with fiberglass tub and connections for water and drain.
                                    <br>
                                    • Decorative fireplace as per model.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    INTERIOR FINISHES
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body quattrocento-sans-font">
                                    • Ceiling height approximately 9'0" on main floor and 8'0" on second floor, as per model type.
                                    <br>
                                    • Oak main staircase with natural finish oak stringers, handrails and spindles, as per plan. Stairway railings to be mounted on oak nosings in platformed areas, as per model type.
                                    <br>
                                    • Paneled doors colonial style throughout (Except where sliders are indicated, as per plan).
                                    <br>
                                    • Aristocrat trim on all doors and arches.
                                    <br>
                                    • All arches on main floor to be trimmed, as per plan.
                                    <br>
                                    • All interior walls to be finished with flat off-white paint, except for kitchen, bathrooms and wood trim, which are painted with semi-gloss off-white paint.
                                    <br>
                                    • Smooth ceilings throughout.
                                    <br>
                                    • All interior door knobs to be single lever handles.
                                    <br>
                                    • Laundry area complete with fiberglass tub and connections for water and drain.
                                    <br>
                                    • Decorative fireplace as per model.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    KITCHEN SPECIFICATIONS
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body quattrocento-sans-font">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    BATHROOM FINISHES
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body quattrocento-sans-font">
                                    Four - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    FLOORING FEATURES
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body quattrocento-sans-font">
                                    Five - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    DOORS AND WINDOWS
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body quattrocento-sans-font">
                                    Six - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    ELECTRICAL AND LIGHTING DETAILS
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body quattrocento-sans-font">
                                    Seven - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                    PLUMBING AND HEATING SPECIFICATIONS
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body quattrocento-sans-font">
                                    Eight - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                    TERMS AND CONDITIONS
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body quattrocento-sans-font">
                                    Nine - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endif;
        ?>
        <div class="divider div-transparent div-dot mb-1"><span class="innerCircle"></span></div>
        <div class="row foot-box py-3">
            <div class="col-12 col-md text-center text-md-end">
                <a class="float-md-start" href="#">
                    <img src="<?=BASEURL?>public/img/logo.png" alt="" width="240" height="55" class="d-inline-block align-top">
                </a>
            </div>
<!-- 
            <div class="col-12 col-md text-center text-md-end pt-3 mt-5 mt-md-0">
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
            </div> -->
            
        </div>
        <div class="row copyright-box py-3 mt-4 text-center text-md-end quattrocento-sans-font">
            <div class="col">
                <p><strong><a type="button" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">Privacy Policy</a></strong></p>
                <p>&copy; 2021 Copyright CasaMorra Homes. All Rights Reserved</p>
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
                        
                        <form class="row g-3 validate" method="post" action="<?=BASEURL?>register" name="mc-embedded-subscribe-form">
                            <div class="col-12 text-center">
                                <h3 class="display-5 fontQua">
                                    Register
                                </h3>
                                <div class="divider div-transparent div-dot my-5"><span class="innerCircle"></span></div>

                                <p class="px-5">
                                    Register to receive the latest news and updates from CASAMORRA.
                                </p>
                            </div>
                            <div class="col-12 my-1">
                                <input type="text" class="form-control rounded-0" name="FNAME" placeholder="First Name *" value="" id="mce-FNAME" required="required">
                            </div>
                            <div class="col-12 my-1">
                                <input type="text" class="form-control rounded-0" name="LNAME" placeholder="Last Name *" value="" id="mce-LNAME" required="required">
                            </div>
                            <div class="col-12 my-1">
                                <input type="email" class="form-control rounded-0" name="EMAIL" placeholder="Email Address *" required="required" id="mce-EMAIL">
                            </div>
                            <div class="col-12 my-1">
                                <input type="text" class="form-control rounded-0" name="MMERGE3" placeholder="Phone Number" value="" id="mce-MMERGE3" required="required">
                            </div>
                            <div class="col-12 my-1">
                                <select class="form-select" aria-label="Default select example" name="MMERGE5" id="mce-MMERGE5">
                                    <option selected>Select Community</option>
                                    <option value="Humber Valley">Humber Valley</option>
                                    <option value="Bolton Gateway" disabled>Bolton Gateway</option>
                                    <option value="The Graham Robinson" disabled>The Graham Robinson</option>
                                </select>
                            </div>
                            <div class="col-12 my-1">
                                <label class="form-label">Are you a broker?</label>
                                <div class="form-check form-check-inline float-end">
                                    <input class="form-check-input" type="radio" name="MMERGE4" id="mce-MMERGE4-1" value="No">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-check form-check-inline float-end">
                                    <input class="form-check-input" type="radio" name="MMERGE4" id="mce-MMERGE4-0" value="Yes">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                            </div>
                            <div class="col-12 my-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="group[1173][1]" id="mce-group[1173]-1173-0">
                                    <label class="form-check-label" for="flexCheckDefault" style="line-height:20px;">
                                        <small>
                                            I Consent. CasaMorra seeks your consent to send  you commercial electronic messages (such as email). You may withdraw your consent at any time. By clicking  above you attest that you are the sole holder and user of this email account.*
                                        </small>
                                    </label>
                                </div>
                            </div>

                            <!-- for mailchimp -->
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f81094fd9060d393d942d5057_20266b21a0" tabindex="-1" value=""></div>
                            <!-- End for mailchimp -->

                            <div class="col-12 my-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-dark rounded-0 submit-register" name="subscribe" id="mc-embedded-subscribe"><strong>REGISTER</strong></button>
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
                        <img src="<?= BASEURL ?>public/img/temp/logo-register.png" alt="" width="280" height="163" class="d-inline-block align-top">
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


<!-- Modal Privacy Policy -->
<div class="modal fade privacy-policy-modal quattrocento-sans-font" id="privacyPolicyModal" tabindex="-1" aria-labelledby="privacyPolicyModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row text-start justify-content-center py-2 quattrocento-sans-font">
                    <div class="col-11 col-md-9 col-lg-7 mb-5 mb-lg-0 text-center">

                    <?php foreach ($policy as $count => $_): ?>
                        <h3 class="display-5 mt-2 fontQua">
                            <?=$_['title']?>
                        </h3>
                        <div class="col-8 col-md-7 col-lg-6 mx-auto divider div-transparent div-dot my-5"><span class="innerCircle"></span></div>
                        <p>
                            <?=$_['description']?>
                        </p>
                    <?php endforeach;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php load_view('js'); ?>

<!-- after register show popup -->
<?php
    if(isset($_GET['register'])):
        $registerform = unserialize(urldecode($_GET['register']));
        if($registerform == 1):?>
        <script>
        $(document).ready(function () {
            $('#registerModal').modal('hide');
            $('#registerConfirmModal').modal('show');
        });
        </script>
        <?php
       endif;
    endif;
?>
<!-- END after register show popup -->


</body>
</html>








