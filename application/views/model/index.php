<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Model</title>


    <?php load_view('common/css'); ?>


</head>
<body>

<?php load_view('common/header'); ?>

<main>
    <div class="container">

        <div class="mt-nav">
            <img class="d-block mx-auto mb-4 img-fluid" src="<?=BASEURL?>public/img/temp/Communities.jpg" alt="">

        </div>

        <div class="row box1">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills mb-3 justify-content-center justify-content-md-end" id="model-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded-circle active" id="model-one-tab" data-toggle="pill" href="#model-one" role="tab" aria-controls="model-one" aria-selected="true">1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-circle" id="model-two-tab" data-toggle="pill" href="#model-two" role="tab" aria-controls="model-two" aria-selected="false">2</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="model-tabContent">
                            <div class="tab-pane fade show active" id="model-one" role="tabpanel" aria-labelledby="model-one-tab">
                                <div class="col-12 col-md-6 py-3">
                                    <div class="text-center text-md-start d-block">
                                        <h3 class="display-6">Model Name</h3>
                                        <p class="my-0 text-color1"><strong class="pe-3">ELEVATION A</strong>1,661 SQ. FT.</p>
                                        <small class="text-color1">3 Bedroom  |  2.5 Bath</small>
                                    </div>
                                </div>
                                <!-- elevation a tab -->
                                <nav >
                                    <div class="nav nav-tabs justify-content-center" id="elevation-a-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="elevation-a-ground-floor-tab" data-toggle="tab" href="#elevation-a-ground-floor" role="tab" aria-controls="elevation-a-ground-floor" aria-selected="true">Ground Floor</a>
                                        <a class="nav-item nav-link" id="elevation-a-second-floor-tab" data-toggle="tab" href="#elevation-a-second-floor" role="tab" aria-controls="elevation-a-second-floor" aria-selected="false">Second Floor</a>
                                        <a class="nav-item nav-link" id="elevation-a-basement-tab" data-toggle="tab" href="#elevation-a-basement" role="tab" aria-controls="elevation-a-basement" aria-selected="false">Basement</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="elevation-a-tabContent">
                                    <div class="tab-pane fade show active" id="elevation-a-ground-floor" role="tabpanel" aria-labelledby="elevation-a-ground-floor-tab">
                                        <!-- image box 1 in tab 1  -->
                                        <div class="card text-center border-0 text-color2">
                                            <div class="card-body p-5">
                                                <img class="card-img-top img-plan" src="<?=BASEURL?>public/img/temp/Communities-plan.jpg" alt="Card image cap">
                                            </div>
                                            <div class="card-footer text-muted mt-1 mt-lg-5 pt-1 pt-lg-5 bg-white border-0">
                                                <div class="col-12 col-md text-center pt-1 pt-lg-3 mt-1 mt-lg-5">
                                                    <span class="icon px-1 px-md-5 zoom-out d-none" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-out flipH display-6 display-md-4"></i>
                                                            <span class="d-none d-md-inline">Zoom Out</span>
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5 zoom-in" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-in flipH display-6 display-md-4"></i>
                                                            <span class="d-none d-md-inline">Zoom</span>
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-download display-6 display-md-4"></i>
                                                            <span class="d-none d-md-inline">Download</span>
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-share display-6 display-md-4"></i>
                                                            <span class="d-none d-md-inline">Share</span>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-body text-start mt-5 px-0">
                                                <p>
                                                    <small>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat varius enim, et scelerisque sem. Etiam pellentesque rutrum nunc, a tempor lacus interdum eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut et lorem orci. Vestibulum eget leo maximus, bibendum dolor vel, commodo elit. Donec sit amet eros augue. Integer molestie commodo orci et viverra.
                                                    </small>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="elevation-a-second-floor" role="tabpanel" aria-labelledby="elevation-a-second-floor-tab">
                                        <!-- image box 1 in tab 2  -->
                                        <div class="card text-center border-0 text-color2">
                                            <div class="card-body p-5">
                                                <img class="card-img-top img-plan" src="<?=BASEURL?>public/img/temp/Communities-plan.jpg" alt="Card image cap">
                                            </div>
                                            <div class="card-footer text-muted mt-1 mt-lg-5 pt-1 pt-lg-5 bg-white border-0">
                                                <div class="col-12 col-md text-center pt-1 pt-lg-3 mt-1 mt-lg-5">
                                                    <span class="icon px-1 px-md-5 zoom-out d-none" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-out flipH display-6 display-md-4"></i>
                                                            Zoom Out
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5 zoom-in" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-in flipH display-6 display-md-4"></i>
                                                            Zoom
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-download display-6 display-md-4"></i>
                                                            Download
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-share display-6 display-md-4"></i>
                                                            Share
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-body text-start mt-5 px-0">
                                                <p>
                                                    <small>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat varius enim, et scelerisque sem. Etiam pellentesque rutrum nunc, a tempor lacus interdum eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut et lorem orci. Vestibulum eget leo maximus, bibendum dolor vel, commodo elit. Donec sit amet eros augue. Integer molestie commodo orci et viverra.
                                                    </small>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="elevation-a-basement" role="tabpanel" aria-labelledby="elevation-a-basement-tab">
                                        <!-- image box 1 in tab 3  -->
                                        <div class="card text-center border-0 text-color2">
                                            <div class="card-body p-5">
                                                <img class="card-img-top img-plan" src="<?=BASEURL?>public/img/temp/Communities-plan.jpg" alt="Card image cap">
                                            </div>
                                            <div class="card-footer text-muted mt-1 mt-lg-5 pt-1 pt-lg-5 bg-white border-0">
                                                <div class="col-12 col-md text-center pt-1 pt-lg-3 mt-1 mt-lg-5">
                                                    <span class="icon px-1 px-md-5 zoom-out d-none" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-out flipH display-6 display-md-4"></i>
                                                            Zoom Out
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5 zoom-in" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-in flipH display-6 display-md-4"></i>
                                                            Zoom
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-download display-6 display-md-4"></i>
                                                            Download
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-share display-6 display-md-4"></i>
                                                            Share
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-body text-start mt-5 px-0">
                                                <p>
                                                    <small>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat varius enim, et scelerisque sem. Etiam pellentesque rutrum nunc, a tempor lacus interdum eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut et lorem orci. Vestibulum eget leo maximus, bibendum dolor vel, commodo elit. Donec sit amet eros augue. Integer molestie commodo orci et viverra.
                                                    </small>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="model-two" role="tabpanel" aria-labelledby="model-two-tab">
                                <div class="col-12 col-md-6 py-3">
                                    <div class="text-center text-md-start d-block">
                                        <h3 class="display-6">Model Name</h3>
                                        <p class="my-0 text-color1"><strong class="pe-3">ELEVATION B</strong>1,661 SQ. FT.</p>
                                        <small class="text-color1">3 Bedroom  |  2.5 Bath</small>
                                    </div>
                                </div>
                                <!-- elevation b tab -->
                                <nav >
                                    <div class="nav nav-tabs justify-content-center" id="elevation-b-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="elevation-b-ground-floor-tab" data-toggle="tab" href="#elevation-b-ground-floor" role="tab" aria-controls="elevation-b-ground-floor" aria-selected="true">Ground Floor</a>
                                        <a class="nav-item nav-link" id="elevation-b-second-floor-tab" data-toggle="tab" href="#elevation-b-second-floor" role="tab" aria-controls="elevation-b-second-floor" aria-selected="false">Second Floor</a>
                                        <a class="nav-item nav-link" id="elevation-b-basement-tab" data-toggle="tab" href="#elevation-b-basement" role="tab" aria-controls="elevation-b-basement" aria-selected="false">Basement</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="elevation-b-tabContent">
                                    <div class="tab-pane fade show active" id="elevation-b-ground-floor" role="tabpanel" aria-labelledby="elevation-b-ground-floor-tab">
                                        <!-- image box 1 in tab 2  -->
                                        <div class="card text-center border-0 text-color2">
                                            <div class="card-body p-5">
                                                <img class="card-img-top img-plan" src="img/temp/Communities-plan.jpg" alt="Card image cap">
                                            </div>
                                            <div class="card-footer text-muted mt-1 mt-lg-5 pt-1 pt-lg-5 bg-white border-0">
                                                <div class="col-12 col-md text-center pt-1 pt-lg-3 mt-1 mt-lg-5">
                                                    <span class="icon px-1 px-md-5 zoom-out d-none" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-out flipH display-6 display-md-4"></i>
                                                            Zoom Out
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5 zoom-in" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-in flipH display-6 display-md-4"></i>
                                                            Zoom
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-download display-6 display-md-4"></i>
                                                            Download
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-share display-6 display-md-4"></i>
                                                            Share
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-body text-start mt-5 px-0">
                                                <p>
                                                    <small>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat varius enim, et scelerisque sem. Etiam pellentesque rutrum nunc, a tempor lacus interdum eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut et lorem orci. Vestibulum eget leo maximus, bibendum dolor vel, commodo elit. Donec sit amet eros augue. Integer molestie commodo orci et viverra.
                                                    </small>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="elevation-b-second-floor" role="tabpanel" aria-labelledby="elevation-b-second-floor-tab">
                                        <!-- image box 2 in tab 2  -->
                                        <div class="card text-center border-0 text-color2">
                                            <div class="card-body p-5">
                                                <img class="card-img-top img-plan" src="<?=BASEURL?>public/img/temp/Communities-plan.jpg" alt="Card image cap">
                                            </div>
                                            <div class="card-footer text-muted mt-1 mt-lg-5 pt-1 pt-lg-5 bg-white border-0">
                                                <div class="col-12 col-md text-center pt-1 pt-lg-3 mt-1 mt-lg-5">
                                                    <span class="icon px-1 px-md-5 zoom-out d-none" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-out flipH display-6 display-md-4"></i>
                                                            Zoom Out
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5 zoom-in" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-in flipH display-6 display-md-4"></i>
                                                            Zoom
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-download display-6 display-md-4"></i>
                                                            Download
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-share display-6 display-md-4"></i>
                                                            Share
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-body text-start mt-5 px-0">
                                                <p>
                                                    <small>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat varius enim, et scelerisque sem. Etiam pellentesque rutrum nunc, a tempor lacus interdum eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut et lorem orci. Vestibulum eget leo maximus, bibendum dolor vel, commodo elit. Donec sit amet eros augue. Integer molestie commodo orci et viverra.
                                                    </small>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="elevation-b-basement" role="tabpanel" aria-labelledby="elevation-b-basement-tab">
                                        <!-- image box 3 in tab 2  -->
                                        <div class="card text-center border-0 text-color2">
                                            <div class="card-body p-5">
                                                <img class="card-img-top img-plan" src="<?=BASEURL?>public/img/temp/Communities-plan.jpg" alt="Card image cap">
                                            </div>
                                            <div class="card-footer text-muted mt-1 mt-lg-5 pt-1 pt-lg-5 bg-white border-0">
                                                <div class="col-12 col-md text-center pt-1 pt-lg-3 mt-1 mt-lg-5">
                                                    <span class="icon px-1 px-md-5 zoom-out d-none" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-out flipH display-6 display-md-4"></i>
                                                            Zoom Out
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5 zoom-in" type="button">
                                                        <a class="text-color2">
                                                            <i class="bi-zoom-in flipH display-6 display-md-4"></i>
                                                            Zoom
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-download display-6 display-md-4"></i>
                                                            Download
                                                        </a>
                                                    </span>
                                                    <span class="icon px-1 px-md-5" type="button">
                                                        <a class="text-color2" href="#">
                                                            <i class="bi-share display-6 display-md-4"></i>
                                                            Share
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-body text-start mt-5 px-0">
                                                <p>
                                                    <small>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat varius enim, et scelerisque sem. Etiam pellentesque rutrum nunc, a tempor lacus interdum eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut et lorem orci. Vestibulum eget leo maximus, bibendum dolor vel, commodo elit. Donec sit amet eros augue. Integer molestie commodo orci et viverra.
                                                    </small>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row title-model-box text-start">
            <div class="col-12 mt-1 mb-3">
                <p class="py-3 model-nav">
                    <strong>
                        Other available models
                    </strong>
                </p>
            </div>
        </div>

        <div class="row models-box pb-5 justify-content-center">

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 rounded-0">
                    <div class="card-img-box card-img-top position-relative rounded-0 bg-dark">
                        <img src="<?=BASEURL?>public/img/temp/Communities-s.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="card-img-middle">
                            <a href="model.html" class="btn btn-outline-light px-5 rounded-0">View Floorplan</a>
                        </div>
                    </div>
                    <div class="card-body mt-2 py-2 ">
                        <h3 class="card-title mb-0 text-dark mb-2"><strong>Model Name</strong></h3>
                        <p class="quattrocento-sans-font"><small>1,661 sq ft . 3 Bedroom . 2.5 Bath</small></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 rounded-0">
                    <div class="card-img-box card-img-top position-relative rounded-0 bg-dark">
                        <img src="<?=BASEURL?>public/img/temp/Communities-s.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="card-img-middle">
                            <a href="model.html" class="btn btn-outline-light px-5 rounded-0">View Floorplan</a>
                        </div>
                    </div>
                    <div class="card-body mt-2 py-2 ">
                        <h3 class="card-title mb-0 text-dark mb-2"><strong>Model Name</strong></h3>
                        <p class="quattrocento-sans-font"><small>1,661 sq ft . 3 Bedroom . 2.5 Bath</small></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 rounded-0">
                    <div class="card-img-box card-img-top position-relative rounded-0 bg-dark">
                        <img src="<?=BASEURL?>public/img/temp/Communities-s.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="card-img-middle">
                            <a href="model.html" class="btn btn-outline-light px-5 rounded-0">View Floorplan</a>
                        </div>
                    </div>
                    <div class="card-body mt-2 py-2 ">
                        <h3 class="card-title mb-0 text-dark mb-2"><strong>Model Name</strong></h3>
                        <p class="quattrocento-sans-font"><small>1,661 sq ft . 3 Bedroom . 2.5 Bath</small></p>
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


<script src="js/jquery-3.5.1.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('.submit-register').click(function () {
            $('#registerModal').modal('hide');
            $('#registerConfirmModal').modal('show');
        });
        // set zoom image
        $('.zoom-in').click(function () {
            var card = $(this).closest('.card')
            card.find('.zoom-out').removeClass('d-none');
            var myImg = card.find(".img-plan");
            var currWidth = myImg.width();

            myImg.parent().addClass('overflow-scroll');

            if (!myImg.parent().hasClass('plan-height'))
            {
                myImg.parent().addClass('plan-height');
            }


            if(currWidth == 2500) return false;
            else{
                myImg.width((currWidth + 100) + "px");
            }
        });

        $('.zoom-out').click(function () {
            var card = $(this).closest('.card')

            var myImg = card.find(".img-plan");
            var currWidth = myImg.width();


            if(currWidth == 100) return false;
            else{
                myImg.width((currWidth - 100) + "px");
            }
        });

        //set tabs
        $('#model-tab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
        $('#elevation-a-tab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
        $('#elevation-b-tab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })

    });
</script>


</body>
</html>
