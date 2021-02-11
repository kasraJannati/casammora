

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title><?= (isset($this->variables['page_title']) ? $this->variables['page_title'] : '') ?></title>
    <?php load_view('css'); ?>
    <style>
        <?php foreach ($communities as $count => $_): ?>
        
            <?php   if ($_['id'] == "114"): ?>
            
                .head-image.The-Graham-Robinson-House {
                    background-image: url('<?=BASEURL?>public/img/temp/<?=$_['hero_image']?>') !important;
                    background-position: top;
                }
            <?php endif; ?>

            <?php if ($_['id'] == "113"): ?>
                .head-image.Bolton-Gateway {
                    background-image: url('<?=BASEURL?>public/img/temp/<?=$_['hero_image']?>') !important;
                    background-position: top;
                }
            <?php endif; ?>

            <?php if ($_['id'] == "112"): ?>
                .head-image.coming-soon {
                    background-image: url('<?=BASEURL?>public/img/temp/<?=$_['hero_image']?>') !important;
                    background-position: top; 
                }
            <?php endif; ?>

       


        <?php endforeach; ?>
    </style>










<?php 
  //  $url = $_SERVER['REQUEST_URI'];
   // $url_last = basename($url); 
//if($url_last == 'communityhumber'): ?>

    <style>
/* .community-amenities-section{clear:both;margin:0 0 50px 0;padding:100px 0 0 0;}
.community-amenities-section h2{margin:0 0 0px 0;}
ul.community-ammenities-list{clear:both;margin:0;padding:0;text-align:center;}
ul.community-ammenities-list:after{content:"";display:table;width:100%;clear:both;}
ul.community-ammenities-list li{display:inline-block;margin:10px 0 10px 30px;padding:0;position:relative;}
ul.community-ammenities-list li:nth-child(3n+1){margin-left:0;}
ul.community-ammenities-list li .amenities-caption{display:block;position:absolute;bottom:40px;color:#FFFFFF;text-transform:uppercase;font-weight:bold;font-family:"Montserrat",sans-serif;line-height:1.2rem;text-shadow:0 1px 1px rgba(0,0,0,0.5);}
ul.community-ammenities-list li img{display:block;max-width:100%;margin:0 auto;}
ul.community-ammenities-list li.circle .amenities-caption{text-align:center;width:170px;left:50%;margin-left:-85px;}
ul.community-ammenities-list li.rectangle .amenities-caption{text-align:right;float:right;right:20px;bottom:20px;}
ul.community-ammenities-list li.text{width:300px;line-height:1.5rem;text-align:left;}
ul.community-ammenities-list li.text .amenties-text{display:table-cell;height:355px;vertical-align:middle;}
ul.community-ammenities-list li.large.circle{width:449px;}
ul.community-ammenities-list li.medium.circle{width:373px;}
ul.community-ammenities-list li.small.circle{width:300px;}
ul.community-ammenities-list li.medium.rectangle{width:561px;}
ul.community-ammenities-list li.small.rectangle{width:488px;}
ul.community-ammenities-list li.image.circle .amenity-wrap{position:relative;}
.community-neighbourhood-section{clear:both;margin:0 0 0px 0;padding:100px 0 0 0;}
.community-neighbourhood-section h2{margin:0 0 35px 0;}
.neighbourhoodimage{clear:both;margin:0;padding:0;text-align:center;}
.neighbourhoodimage img{max-width:100%;margin:0 auto;display:block;}
.neighbourhoodmap{height:600px;}
.neighbourhoodfuull{clear:both;margin:0;padding:0;}
.neighbourhoodfuull > .sitecontainer{position:relative;}
.community-neighbourhood-section .nav-section{clear:both;margin:0;padding:0;position:relative;}
.community-neighbourhood-section .nav-section .category-listarea{display:block;margin:0;padding:0;position:absolute;left:0;top:0;background-color:rgba(82, 94, 101, 0.9);padding:40px 20px;width:300px;z-index:1;}
.community-neighbourhood-section .nav-section .category-listarea h3{margin:0 0 10px 0;font-family:"Montserrat",sans-serif;font-weight:400;font-size:1.375rem;line-height:22px;}
.community-neighbourhood-section .nav-section .category-listarea h3:after{content:"";display:table;clear:both;width:100%;}
.community-neighbourhood-section .nav-section .category-listarea h3 > a.refresh-neighbourhood{display:block;float:right;font-size:0;height:26px;width:26px;background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -1244px;margin-right:10px;}
.community-neighbourhood-section .nav-section .category-listarea h3 > a.refresh-neighbourhood:hover{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -1198px;}
.community-neighbourhood-section .nav-section ul.category-list{margin:0;padding:0;}
.community-neighbourhood-section .nav-section ul.category-list:after{content:"";display:table;width:100%;clear:both;}
.community-neighbourhood-section .nav-section ul.category-list li{display:block;border-top:1px solid rgba(255,255,255,0.5);width:100%;}
.community-neighbourhood-section .nav-section ul.category-list li.active{}
.community-neighbourhood-section .nav-section ul.category-list li:first-child{border-top:0;}
.community-neighbourhood-section .nav-section ul.category-list li a{display:block;color:#FFFFFF;position:relative;vertical-align:middle;padding:10px 10px;font-size:0.875rem;line-height:14px;position:relative;}
.community-neighbourhood-section .nav-section ul.category-list li a:hover{color:#e74c14;background-color:rgba(255, 255, 255, 1);}
.community-neighbourhood-section .nav-section ul.category-list li.active a{color:#e74c14;background-color:rgba(255, 255, 255, 1);}
.community-neighbourhood-section .nav-section ul.category-list li a:after{content:"";display:table;width:100%;clear:both;}
.community-neighbourhood-section .nav-section ul.category-list li a img{float:right;}
.community-neighbourhood-section .nav-section ul.category-list li a span{display:block;float:left;line-height:25px;}
.community-neighbourhood-section .nav-section ul.category-list li a:before{content:"";display:block;position:absolute;right:10px;top:8px;height:26px;width:24px;}
.community-neighbourhood-section .nav-section ul.category-list li.schools a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -2264px;}
.community-neighbourhood-section .nav-section ul.category-list li.schools a:hover:before,.community-neighbourhood-section .nav-section ul.category-list li.active.schools a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -2220px;}
.community-neighbourhood-section .nav-section ul.category-list li.food_and_drink a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -2070px;}
.community-neighbourhood-section .nav-section ul.category-list li.food_and_drink a:hover:before,.community-neighbourhood-section .nav-section ul.category-list li.active.food_and_drink a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -2028px;}
.community-neighbourhood-section .nav-section ul.category-list li.health a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -2183px;}
.community-neighbourhood-section .nav-section ul.category-list li.health a:hover:before,.community-neighbourhood-section .nav-section ul.category-list li.active.health a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -2146px;}
.community-neighbourhood-section .nav-section ul.category-list li.recreation a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -3935px;}
.community-neighbourhood-section .nav-section ul.category-list li.recreation a:hover:before,.community-neighbourhood-section .nav-section ul.category-list li.active.recreation a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -3889px;}
.community-neighbourhood-section .nav-section ul.category-list li.public_services a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -1743px;}
.community-neighbourhood-section .nav-section ul.category-list li.public_services a:hover:before,.community-neighbourhood-section .nav-section ul.category-list li.active.public_services a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -1702px;}
.community-neighbourhood-section .nav-section ul.category-list li.shopping a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -2458px;}
.community-neighbourhood-section .nav-section ul.category-list li.shopping a:hover:before,.community-neighbourhood-section .nav-section ul.category-list li.active.shopping a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -2416px;}
.community-neighbourhood-section .nav-section ul.category-list li.commute a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -3213px;}
.community-neighbourhood-section .nav-section ul.category-list li.commute a:hover:before,.community-neighbourhood-section .nav-section ul.category-list li.active.commute a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -3168px;}
.community-neighbourhood-section .nav-section ul.category-list li.places_of_worship a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -1987px;}
.community-neighbourhood-section .nav-section ul.category-list li.places_of_worship a:hover:before,.community-neighbourhood-section .nav-section ul.category-list li.active.places_of_worship a:before{background-image:url("images/all-sprite.png");background-repeat:no-repeat;background-position:-20px -1946px;}
.community-neighbourhood-section .nav-section ul.category-list li.hair_salon a:before{background-image:url("https://countrywidehomes.ca/wp-content/uploads/2019/10/Hair_Salons.png");background-repeat:no-repeat;background-position:center;    background-size: contain;}
.community-neighbourhood-section .nav-section ul.category-list li.hair_salon a:hover:before,.community-neighbourhood-section .nav-section ul.category-list li.active.hair_salon a:before{background-image:url("https://countrywidehomes.ca/wp-content/uploads/2019/10/Hair_Salons_hover.png");background-repeat:no-repeat;background-position:center;}
.community-neighbourhood-section .nav-section ul.category-list li.golf a:before{background-image:url("https://countrywidehomes.ca/wp-content/uploads/2019/10/Golf_1.png");background-repeat:no-repeat;background-position:center;    background-size: contain;}
.community-neighbourhood-section .nav-section ul.category-list li.golf a:hover:before,.community-neighbourhood-section .nav-section ul.category-list li.active.golf a:before{background-image:url("https://countrywidehomes.ca/wp-content/uploads/2019/10/Golf_hover.png");background-repeat:no-repeat;background-position:center;}
}
   
    .community-neighbourhood-section{
        padding: 0;
    }
    .overflowHidden{
        overflow:hidden;
    }
    .gm-style .gm-style-iw-t {
        right: unset !important;
        bottom: 30px !important;
    } */


    </style>

<?php //endif; ?>


<?php
$url = $_SERVER['REQUEST_URI']; 
$url_last = basename($url);
// print_r($url_last);
?>



</head>
<body>
<header>
    <nav class="navbar navbar-expand-xl navbar-light bg-light bg-white text-dark py-0">
        <div class="container justify-content-end">
            <a class="navbar-brand py-2 px-0 col-12 col-sm text-center text-sm-start order-2 order-sm-1 justify-content-center justify-content-sm-start" href="<?=BASEURL?>home">
                <img src="<?=BASEURL?>public/img/logo.png" alt="" width="266" height="62" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler order-1 order-sm-2 mt-3 mt-sm-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-success"></span>
            </button>
            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <ul class="navbar-nav nav-pills mb-2 mb-md-0 ms-auto clickChecker">
                    <li class="nav-item mx-1 <?php if($url_last == '' || $url_last == 'home') echo 'active' ?>">
                        <a class="nav-link" href="<?=BASEURL?>">Home</a>
                    </li>
                    <li class="nav-item mx-1 dropdown  <?php if($url_last == 'communityhumber' || $url_last == 'communitybolton' || $url_last == 'communitygraham') echo 'active' ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Communities
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <!-- <li><a class="dropdown-item">Now Open</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item item-child"  href="<?=BASEURL?>communitynowopen">Community Name</a></li> -->

                            <li><hr class="dropdown-space"></li>

                            <li><a class="dropdown-item text-uppercase notHover">Coming Soon</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item item-child" href="<?=BASEURL?>communityhumber">Humber Valley Preserve</a></li>

                            <li><hr class="dropdown-space"></li>

                            <li><a class="dropdown-item text-uppercase notHover">Past COMMUNITIES</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item item-child" href="<?=BASEURL?>communitybolton">Bolton Gateway</a></li>
                            <li><a class="dropdown-item item-child" href="<?=BASEURL?>communitygraham">The Graham Robinson House</a></li>

                        </ul>
                    </li>
          
                    <!-- <li class="nav-item mx-1">
                        <a class="nav-link" href="<?=BASEURL?>decor">Decor</a>
                    </li> -->
                    <!-- <li class="nav-item  mx-1">
                        <a class="nav-link" href="<?=BASEURL?>customercare">Customer Care</a>
                    </li> -->
                    <li class="nav-item mx-1 <?php if($url_last == 'about') echo 'active' ?>">
                        <a class="nav-link" href="<?=BASEURL?>about">About Us</a>
                    </li>
                    <!-- <li class="nav-item mx-1">
                        <a class="nav-link" href="<?=BASEURL?>news">News & Blog</a>
                    </li> -->
                    <li class="nav-item mx-1 <?php if($url_last == 'contact') echo 'active' ?>">
                        <a class="nav-link" href="<?=BASEURL?>contact">Contact Us</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link active rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#registerModal">Register Now</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <?php 
        $url = $_SERVER['REQUEST_URI']; 
        $newUrl = basename($url);
        $array = explode('?', $newUrl);
        $url_last = $array[0];

        if($url_last == 'communitynowopen'):
    ?>
        <div class="head-image now-open text-white">
            <div class="test">coming soon</div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <img class="d-block mx-auto mb-4 logohvpSlide" src="<?=BASEURL?>public/img/hvp-logo.png" alt="" width="119" height="84">
                        <h1 class="font-weight-light">HUMBER VALLEY</h1>
                        <div class="divider-line col-lg-3 mx-auto my-2">PRESERVE</div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php 
        if($url_last == 'communitybolton'):
    ?>
        <?php foreach ($communities as $count => $_): ?>
            <?php if ($_['id'] == "113"): ?>
                    
                <div class="head-image text-white Bolton-Gateway">
                    <div class="test"><?=$_['architech']?></div>
                    <div class="blackShadow"></div>

                    <div class="container h-100" style="position:relative; z-index:2;">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 text-center">
                                <h1 class="font-weight-light fixFont"><?=$_['title']?></h1>
                                <div class="divider-line col-lg-3 mx-auto my-0 mt-5">SOLD OUT</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach;?>
        
    <?php endif; ?>

    <?php 
        if($url_last == 'communityhumber'):
    ?>

        <?php foreach ($communities as $count => $_): ?>
            <?php if ($_['id'] == "112"): ?>
                <div class="head-image coming-soon text-white">
                    <div class="test"><?=$_['architech']?></div>

                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 text-center">

                                <img class="d-block mx-auto mb-4 logohvpSlide" src="<?=BASEURL?>public/img/hvp-logo.png" alt="" width="500" height="200">
                                <!-- <h1 class="font-weight-light"><?=$_['title']?></h1> -->
                                <!-- <div class="divider-line col-lg-3 mx-auto my-2">PRESERVE</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach;?>

    <?php endif; ?>

    <?php 
        if($url_last == 'communitygraham'):
    ?>

        <?php foreach ($communities as $count => $_): ?>
            <?php if ($_['id'] == "114"): ?>

                <div class="head-image The-Graham-Robinson-House text-white">
                    <div class="test"><?=$_['architech']?></div>
                    <div class="blackShadow"></div>

                    <div class="container h-100" style="position:relative; z-index:2;">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 text-center">
                                <h1 class="font-weight-light"><?=$_['title']?></h1>
                                <div class="divider-line col-lg-3 mx-auto my-0 mt-5">SOLD</div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
        <?php endforeach;?>

    <?php endif; ?>

    <?php 
        if($url_last == 'customercare'):
    ?>
    <div class="head-image customer-care text-white">
        <div class="blackShadow"></div>

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <div class="divider-line col-lg-6 mx-auto my-2 display-5">Customer Care</div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php 
        if($url_last == 'about'):
    ?>
    <div class="head-image about-us text-white">
        <div class="blackShadow"></div>

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <div class="divider-line col-lg-6 mx-auto my-2 display-5">About Us</div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <?php 
        if($url_last == 'news'):
    ?>
    <div class="head-image news-blog text-white">
        <div class="blackShadow"></div>
    
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <div class="divider-line col-lg-6 mx-auto my-2 display-5">News & Blog</div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php 
        if($url_last == 'blog'):
    ?>
    <div class="head-image blog text-white">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php 
        if($url_last == 'decor'):
    ?>
    <div class="head-image decor text-white">
    <div class="blackShadow"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <div class="divider-line col-lg-6 mx-auto my-2 display-5">Decor</div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    


</header>

