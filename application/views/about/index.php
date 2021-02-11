<main>
    <div class="container">
        <div class="row box1">
            <div class="col-12">
                <div class="row">
                    <h2 class="col-11 col-md-9 col-lg-7 mx-auto">
                        At CasaMorra Homes, we believe in creating luxurious, signature homes of the highest standard.
                    </h2>
                </div>
                <div class="divider div-transparent div-dot col-8 col-md-5 col-lg-3 mx-auto mt-4"></div>

                <div class="row">
                    <div class="col-11 col-md-10 col-lg-9 mx-auto quattrocento-sans-font text-color1 aboutDes">
                        <p>
                        At CASAMORRA Homes, we believe in creating luxurious, signature homes of the highest standard. Expertly built, creatively designed and made with passion, each CASAMORRA Home is an artistic showcase; a masterpiece of construction with a singular, personal style, tailored to the character of the home and unique to the area. Guided by the principles of integrity, dedication and excellence, and with over 27 years of experience in the construction industry and 20 years of interior design, we are uniquely qualified to build functional, practical homes that surpass not just the needs of the modern homeowner, but their desires as well.
                        </p>
                        <p>
                        When you choose CASAMORRA Homes, you are choosing a home that has been created with care, skill and attention to detail during every step of the process. We stand by the quality of our homes and make our customers’ satisfaction our highest priority. We are committed to doing everything in our power to ensure that at CASAMORRA Homes, your home is built to your satisfaction.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row persons-box py-5 my-5 text-start">
            <div class="col-12">
                <?php foreach ($about as $count => $_): ?>
              
                    <div class="row featurette">
                        <div class="col-md-7 <?php if($_['id'] == "101"): ?>order-md-2<?php endif; ?>">

                            <h2 class="featurette-heading mt-5 mb-3">
                                <?=$_['title']?>
                            </h2>
                            <p>
                                <?=$_['description']?>
                            </p>
                        </div>
                        <div class="col-md-5 <?php if($_['id'] == "102"): ?>order-md-1<?php endif; ?>">
                            <img src="<?=BASEURL?>files/source/<?=$_['hero_image']?>" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-aut" alt="..." width="600" height="600" >
                        </div>
                    </div>
                    <hr class="featurette-divider">
                <?php endforeach;?>
            </div>
        </div>

    </div>
</main>