<?php 
    foreach ($communities as $count => $_){
              //  print_r($_);
        if ($_['id'] == "114"){
            $title = $_['title'];
            $architech = $_['architech'];
            $logo = $_['logo'];
            $hero_image = $_['hero_image'];
            $short_description = $_['short_description'];
            $description = $_['description'];
            $image1 = $_['image1'];
            $image2 = $_['image2'];
            $image3 = $_['image3'];
            $image4 = $_['image4'];
            $image5 = $_['image5'];
            $image6 = $_['image6'];
            $image7 = $_['image7'];
            $image8 = $_['image8'];
            $image9 = $_['image9'];
            $image10 = $_['image10'];
          

        }

    }
?>
<main>
    <div class="container">
        <div class="row box1 mb-5">
            <div class="col-12">
                <div class="row">
                    <h2 class="col-11 col-md-9 col-lg-7 mx-auto">
                        <!-- History and modernity, now together through the design and décor brilliance of Louanne Morra. -->
                        <?= $short_description ?>
                    </h2>
                </div>
                <div class="divider div-transparent div-dot col-8 col-md-5 col-lg-3 mx-auto mt-4"><span class="innerCircle"></span></div>

                <div class="row">
                    <div class="col-11 col-md-10 col-lg-9 mx-auto quattrocento-sans-font text-color1">
                        <p>
                            <?= $description ?>
                            <!-- The Gothic Revival style dwelling was custom-built in 1867. CasaMorra Homes restored this beautiful piece of Caledon’s history as its inaugural project, preserving the architecture and creating an absolutely magnificent home boasting a glorious combination of high ceilings, restored features and modern amenities. The revival began in 2016 when Sam Morra became the first developer in history to move a Heritage home from a third-party property to anchor his newly created Bolton Gateway subdivision. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row map-box py-5">
            <!-- change whit map style - start -->
            <div class="container h-100" style=" ">
                <div class="row h-100 align-items-center">
                    <!-- <img class="img-fluid" src="<?=BASEURL?>public/img/map/mapGraham.jpg" alt=" "> -->
                    <img src="<?=BASEURL?>files/source/<?=$logo?>" alt=" " style="width:100%;">     

                    <!-- <div class="col-12 text-center">
                        <h1 class="font-weight-light">MAP</h1>
                    </div> -->
                </div>
            </div>
            <!-- change whit map style - end -->
        </div>
        <div class="row gallery-box py-5">
            <div class="col-12">
                <!-- <div class="grid-gallery">
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
                </div> -->

                <div class="grid-gallery">
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>files/source/<?=$image1?>" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>files/source/<?=$image2?>" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>files/source/<?=$image3?>" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>files/source/<?=$image4?>" alt="Card image cap">
                    </div>
                </div>
                <div class="grid-gallery count-2">
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>files/source/<?=$image5?>" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>files/source/<?=$image6?>" alt="Card image cap">
                    </div>
                </div>
                <div class="grid-gallery">
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>files/source/<?=$image7?>" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>files/source/<?=$image8?>" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>files/source/<?=$image9?>" alt="Card image cap">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?=BASEURL?>files/source/<?=$image10?>" alt="Card image cap">
                    </div>
                </div>


            </div>


        </div>
    </div>
</main>