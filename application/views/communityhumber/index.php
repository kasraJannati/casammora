<?php 

    foreach ($communities as $count => $_){
         //  print_r($_);
         if ($_['id'] == "112"){
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
        <div class="row box1">
            <div class="col-12">
                <div class="row">
                    <h2 class="col-11 col-md-9 col-lg-7 mx-auto">
                        <!-- The Humber Valley Preserve is located at the summit of the Humber River Valley. -->
                        <?= $short_description ?>
                    </h2>
                </div>
                <div class="divider div-transparent div-dot col-8 col-md-5 col-lg-3 mx-auto mt-4"><span class="innerCircle"></span></div>

                <div class="row">
                    <div class="col-11 col-md-10 col-lg-9 mx-auto quattrocento-sans-font text-color1">
                        <p>
                            <?= $description ?>
                            <!-- Come home to a picturesque court nestled in a forest with spectacular views. CasaMorra launches its multigenerational home vision in a unique setting that will please those from all walks of life in all stages of life. Quality and commitment to serving our clients is the CasaMorra Homes way. Join our friends and family by registering today. -->
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-dark px-5 rounded-0 my-5" data-bs-toggle="modal" data-bs-target="#registerModal">Register Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row video-box my-5 py-4">
            <div class="col-md-12">
                <div class="embed-responsive embed-responsive-16by9 videoWrapper">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207" allowfullscreen></iframe>
                </div>
            </div>
        </div> -->

        <div class="row my-5 py-4">
            <div class="col-md-12">
                <img src="<?=BASEURL?>files/source/<?=$logo?>" alt=" " style="width:100%;">     
            </div>
        </div>

        <div class="row map-box pb-5">
        
            <div class="col-md-12">
                <div class="divider-line">
                    <h3 class="display-4 text-dark">
                        Amazing Amenties
                    </h3>
                </div>
            </div>

            <div class="container h-100" style=" ">
                <div class="row h-100 align-items-center">
                  
                    <!-- <div class="map" id="mapBox">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1gNSI4nHmieh3QkBVVQXch1Wadol3sZoK" width="640" height="480" style="width:100%;"></iframe>
                    </div> -->

                    <!-- amen_map -->
                    <div class="amen_page">
                   

                        <div class="listAmenity">
                            <div class="filter">
                                <!-- <div class="options"> -->
                                    <div class="option map_cat" data-cat="shopping">
                                        <!-- <div class="pin dining"></div> -->
                                        <p>Shopping</p>
                                    </div>
                                    <div class="option map_cat" data-cat="food">
                                        <!-- <div class="pin education"></div> -->
                                        <p>Dining</p>
                                    </div>
                                    <div class="option map_cat" data-cat="recreation">
                                        <!-- <div class="pin healthcare"></div> -->
                                        <p>Recreation</p>
                                    </div>
                                    <div class="option map_cat" data-cat="school">
                                        <!-- <div class="pin churches"></div> -->
                                        <p>Education</p>
                                    </div>
                                    <div class="option map_cat" data-cat="healthcare">
                                        <!-- <div class="pin commuting"></div> -->
                                        <p>Healthcare</p>
                                    </div>
                                    <div class="option map_cat" data-cat="public_services">
                                        <!-- <div class="pin sports_community"></div> -->
                                        <p>Parks</p>
                                    </div>
                                    <div class="option map_cat" data-cat="transportation">
                                        <!-- <div class="pin grocery_shopping"></div> -->
                                        <p>Commuting</p>
                                    </div>
                                    <div class="option map_cat" data-cat="church">
                                        <!-- <div class="pin trails_parks"></div> -->
                                        <p>Places of Worship</p>
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>

                        <div class="map container-fluid" id="map"></div>

                     
                    </div>
                    <!-- end amen_map -->

                </div>
            </div>

        </div>

        <!-- <div class="row gallery-box py-5">
            <div class="col-12 img-grayscale">
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






<style>	
/****** css just for amenity map *****/
.amen_page .map{
    min-height: 75vh;
}
/* .amen_page .filter .option .pin{
    width: 40px;
    height: 60px;
    margin: 0 auto 20px;
    background: url(<?=BASEURL?>public/img/amenity/amen_pin_sprite.png) no-repeat;
}
.amen_page .filter .option .pin:hover{
    transition: 0.4s;
    background: url(<?=BASEURL?>public/img/amenity/amen_pin_active_sprite.png) no-repeat;
}
.amen_page .filter .option .pin.dining{
    background-position: 0px 0px;
}
.amen_page .filter .option .pin.education{
    background-position: -54px 0px;
}
.amen_page .filter .option .pin.healthcare{
    background-position: -108px 0px;
}
.amen_page .filter .option .pin.churches{
    background-position: -161px 0px;
}
.amen_page .filter .option .pin.commuting{
    background-position: -215px 0px;
}
.amen_page .filter .option .pin.sports_community{
    background-position: -269px 0px;
}
.amen_page .filter .option .pin.grocery_shopping{
    background-position: -323px 0px;
}
.amen_page .filter .option .pin.art_culture{
    background-position: -377px 0px;
}
.amen_page .filter .option .pin.trails_parks{
    background-position: -431px 0px;
} */
.listAmenity{
    position:relative;
    background:#40454C;
}
.amen_page .filter {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    padding: 0;
    margin: 0;
    height: 75px;
}
.amen_page .filter .option{
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    border-right: 1px solid #fff;
    cursor:pointer;
}
.amen_page .filter .option:last-child{
    border-right: none;
}
.amen_page .filter .option p {
    color:#ffffff;
    font-size:16px;
    text-align:center;
    margin:0;
}
#marker_info{
   /* width: 425px;
    height: 275px;
    padding: 30px 53px 80px 53px;
    background: url(../img/info_box_bg.png) no-repeat;
    background-size: contain;*/
}
#marker_info p.title{
    font-family: "Helvetica bold";
    font-size: 22px;
    color: #d24343;
    margin-bottom: 10px;
    line-height: 1.2;
}
#marker_info p.text{
    font-size: 14px;
    color: #727272;
    margin-bottom: 25px;
    line-height: 1.3;
}
.amen_page .filter .option:hover,.amen_page .filter .option:focus{
    background:#A3A3A3;
}

@media (max-width : 992px){
    .amen_page .filter .option p{
        font-size:14px;
    }
}
@media (max-width : 768px){
    .amen_page .filter{
        flex-direction:column;
        height:auto;
    }
    .amen_page .filter .option{
        padding:10px;
        border:none;
    }
}
/****** END css just for amenity map *****/
</style>





