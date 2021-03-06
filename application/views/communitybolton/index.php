<?php 
    foreach ($communities as $count => $_){

        //  print_r($_);
        if ($_['id'] == "113"){
            $title = $_['title'];
            $architech = $_['architech'];
            $logo = $_['logo'];
            $hero_image = $_['hero_image'];
            $short_description = $_['short_description'];
            $description = $_['description'];
        }
    }
?>
<main>
    <div class="container">
        <div class="row box1 mb-5">
            <div class="col-12">
                <div class="row">
                    <h2 class="col-11 col-md-9 col-lg-7 mx-auto">
                        <!-- An enclave of beautiful townhomes and stately singles in Bolton. -->
                        <?= $short_description ?>
                    </h2>
                </div>
                <div class="divider div-transparent div-dot col-8 col-md-5 col-lg-3 mx-auto mt-4"><span class="innerCircle"></span></div>

                <div class="row">
                    <div class="col-11 col-md-10 col-lg-9 mx-auto quattrocento-sans-font text-color1">
                        <p>
                            <?= $description ?>
                            <!-- The Bolton Gateway Community was created by CasaMorra Homes in 2012. Sam Morra envisioned the development of beautiful but more affordable townhomes sprinkled with a few stately singles within close proximity to amenities such as a medical center, a park and GO transit. The Bolton Gateway subdivision also facilitated the coming to life of a much-needed Seniors’ Residence that lay dormant for over 25 years. This enclave of 182 homes is the largest low-rise residential development in Bolton in the last decade. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row map-box py-5">
            <!-- change whit map style - start -->
            <div class="container h-100" style=" ">
                <div class="row h-100 align-items-center">
                    <!-- <img class="img-fluid" src="<?=BASEURL?>public/img/map/googlemap.jpg" alt=" "> -->

                    <img src="<?=BASEURL?>files/source/<?=$logo?>" alt=" " style="width:100%;">     

                    <!-- <div class="col-12 text-center">
                        <h1 class="font-weight-light">MAP</h1>
                    </div> -->
                </div>
            </div>
            <!-- change whit map style - end -->
        </div>


        <!-- <div class="row gallery-box py-5">
            <div class="col-12">
                <div class="grid-gallery">
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>public/img/graham/v1.jpg" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h1.jpg" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h2.jpg" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>public/img/graham/v4.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="grid-gallery count-2">
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h2.jpg" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h4.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="grid-gallery">
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>public/img/graham/v3.jpg" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>public/img/graham/v4.jpg" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h3.jpg" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>public/img/graham/h5.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div> -->



    </div>
</main>