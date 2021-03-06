<?php     
    foreach ($home as $count => $_){
     
            $titleHome = $_['title'];
          
            $descriptionHome = $_['description'];
    } 
?>
<style>
.fixImages{
    height:300px;
    object-fit: cover;
}
.humberAddImage{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100px;
}
.removeLine:before,.removeLine:after{
    opacity:0;
}
</style>
<main class="text-center">
    <div id="myCarousel" class="carousel slide quattrocento-sans-font" data-bs-ride="carousel">
        <div class="carousel-inner">






            <?php foreach ($slideshow as $count => $_): ?>
           
                <div class="carousel-item <?php if($count == 0): ?>active<?php endif; ?>">
                    <div class="test"><?= $_['description'] ?></div>
                    <div class="blackShadow"></div>

                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                    <img src="<?=BASEURL?>files/source/<?=$_['hero_image']?>" class="d-block w-100 img-fluid" alt="...">
                    <div class="container">
                        <div class="carousel-caption">
                            <?php if($_['logo']): ?>
                                <img class="d-block mx-auto mb-4 logohvpSlide" src="<?=BASEURL?>files/source/<?=$_['logo']?>" alt="" width="500" height="200">
                            <?php endif; ?>
                            <?php if($count != 0 ): ?>
                                <h1 class="text-shadow1 d-inline fixFont"><?= $_['title'] ?></h1>
                                <div class="divider-line col-lg-3 mx-auto my-2 <?php if($count != 0 ): ?>removeLine<?php endif; ?>"><?php if($count == 0 ): ?>PRESERVE<?php endif; ?></div>
                            <?php endif; ?>
                                <a class="btn btn-lg btn-light rounded-0 px-5 mt-5" href="<?=BASEURL?><?=$_['location']?>" role="button">VIEW DETAILS</a>
                        
                        </div>
                    </div>
                </div>
            <?php endforeach;?>


            <!-- <div class="carousel-item active">
                <div class="test">coming soon</div>
                <div class="blackShadow"></div>

                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <img src="<?=BASEURL?>public/img/temp/slideshow01.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <img class="d-block mx-auto mb-4 logohvpSlide" src="<?=BASEURL?>public/img/hvp-logo.png" alt="" width="171" height="164">
                        <h1 class="text-shadow1 d-inline">HUMBER VALLEY</h1>
                        <div class="divider-line col-lg-3 mx-auto my-2">PRESERVE</div>
                        <a class="btn btn-lg btn-light rounded-0 px-5 mt-5" href="<?=BASEURL?>communityhumber" role="button">VIEW DETAILS</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="test">sold out</div>
                <div class="blackShadow"></div>

                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <img src="<?=BASEURL?>public/img/temp/slideshow02.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="display-4 text-shadow1">Bolton Gateway</h1>
                        <a class="btn btn-lg btn-light rounded-0 px-5 mt-5" href="<?=BASEURL?>communitybolton" role="button">VIEW DETAILS</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="test">sold</div>
                <div class="blackShadow"></div>

                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <img src="<?=BASEURL?>public/img/temp/slideshow03.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="display-4 text-shadow1">Graham Robinson House</h1>
                        <a class="btn btn-lg btn-light rounded-0 px-5 mt-5" href="<?=BASEURL?>communitygraham" role="button">VIEW DETAILS</a>
                    </div>
                </div>
            </div> -->
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

        <?php foreach ($slideshow as $count => $_): ?>
            <li data-bs-target="#myCarousel" data-bs-slide-to="<?= $count ?>" <?php if($count == 0):?>class="active"<?php endif; ?>></li>
        <?php endforeach;?>

        </ol>

    </div>
    <div class="container marketing">

        <div class="row">
            <div class="col-md-12">
                <h2 class="display-5">
                    <?= $titleHome ?>
                </h2>
                <div class="divider div-transparent div-dot col-2 mx-auto mt-4"><span class="innerCircle"></span></div>
                <!-- <div class="col-7 mx-auto">
                    <p><strong>At CasaMorra Homes, we create inspired communities and produce award-winning results.</strong></p>
                </div> -->
                <div class="col-10 mx-auto quattrocento-sans-font text-color1 homeFontDes">
            
                    <p>    <?= $descriptionHome ?></p>
                    <!-- <p>
                        We are committed to cultivating an exceptional life experience for our customers. We pride ourselves on building beautiful homes with outstanding quality. As leaders in the construction industry for 27 years and guiding homeowners through the design process for the last 20 years, we believe the interior is the soul of the house. Together, we will build the home of your dreams as we work hard to ensure that we’re meeting the needs of you and your family.
                    </p> -->
                </div>
            </div>
        </div>

        <!-- <div class="row my-5 py-4">
            <div class="col-md-12">
                <div class="embed-responsive embed-responsive-16by9 videoWrapper">
                   <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207" allowfullscreen></iframe>
                </div>
            </div>
        </div> -->

        <div class="row my-5 py-4">
        </div>
        <div class="row community-box pb-5 quattrocento-sans-font justify-content-center">
            <div class="col-md-12">
                <div class="divider-line">
                    <h2 class="display-4 text-dark fontQua">
                        Our Communities
                    </h2>
                </div>
            </div>

            <?php foreach ($communities as $count => $_): ?>

        
           
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <div class="card border-0 rounded-0">
                    <div class="card-img-box card-img-top position-relative rounded-0">
                        <img src="<?=BASEURL?>files/source/<?=$_['hero_image']?>" class="card-img-top rounded-0 fixImages" alt="...">

                        <?php if($_['title']=='HUMBER VALLEY'):?><img src="<?=BASEURL?>public/img/hvp-logo.png" class="humberAddImage" alt="..."><?php endif; ?>

                        <div class="card-img-overlay py-0">
                            <span class="card-img-badge text-dark px-4 py-2 fontQua text-uppercase"><strong><?=$_['architech']?></strong></span>
                        </div>
                    </div>
                    <div class="card-body mt-2 py-2 border-bottom border-4 border-dark">
                        <h4 class="card-title mb-0 text-dark fontQua"><!-- Humber Valley Preserve --> <?=$_['title']?></h4>
                    </div>
                    <div class="card-footer bg-white py-2 rounded-0 border-top-0 border-bottom border-2 border-dark">
                        <a href="<?=BASEURL?><?=$_['location']?>" class="card-link"><strong>LEARN MORE</strong></a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 col-md-6 col-lg-4 mb-5">
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
                        <a href="<?=BASEURL?>communitybolton" class="card-link"><strong>LEARN MORE</strong></a>
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
                        <a href="<?=BASEURL?>communitygraham" class="card-link"><strong>LEARN MORE</strong></a>
                    </div>
                </div>
            </div> -->


            <?php endforeach; ?>



        </div>


        <div class="bildImages">
            <img src="<?=BASEURL?>public/img/bild.png" alt="...">
            <img src="<?=BASEURL?>public/img/tar.png" alt="...">

        </div>

    </div>

</main>