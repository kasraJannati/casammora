<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white text-dark py-0">
        <div class="container">
            <a class="navbar-brand py-2" href="<?=BASEURL?>home">
                <img src="<?=BASEURL?>public/img/logo.png" alt="" width="266" height="62" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-success"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav  nav-pills mb-2 mb-md-0 ms-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Communities
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item">Now Open</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item item-child"  href="<?=BASEURL?>communitynowopen">Community Name</a></li>

                            <li><hr class="dropdown-space"></li>

                            <li><a class="dropdown-item">Coming Soon</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item item-child" href="<?=BASEURL?>communityhumber">Humber Valley Preserve</a></li>

                            <li><hr class="dropdown-space"></li>

                            <li><a class="dropdown-item">Past COMMUNITIES</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item item-child" href="<?=BASEURL?>communitybolton">Bolton Gateway</a></li>
                            <li><a class="dropdown-item item-child" href="<?=BASEURL?>communitygraham">The Graham Robinson House</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>decor">Decor</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?=BASEURL?>customercare">Customer Care</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>news">News & Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#registerModal">Register Now</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <?php 
        $url = $_SERVER['REQUEST_URI']; 
        $url_last = basename($url);
        if($url_last == 'communitynowopen'):
    ?>
        <div class="head-image now-open text-white">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <img class="d-block mx-auto mb-4" src="<?=BASEURL?>public/img/bootstrap-logo-white.svg" alt="" width="72" height="57">
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
        <div class="head-image text-white Bolton-Gateway">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <h1 class="font-weight-light">Bolton Gateway</h1>
                        <div class="divider-line col-lg-3 mx-auto my-0 mt-5">SOLD OUT</div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php 
        if($url_last == 'communityhumber'):
    ?>
    <div class="head-image coming-soon text-white">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <img class="d-block mx-auto mb-4" src="<?=BASEURL?>public/img/hvp-logo.png" alt="" width="119" height="84">
                    <h1 class="font-weight-light">HUMBER VALLEY</h1>
                    <div class="divider-line col-lg-3 mx-auto my-2">PRESERVE</div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php 
        if($url_last == 'communitygraham'):
    ?>
    <div class="head-image The-Graham-Robinson-House text-white">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="font-weight-light">The Graham Robinson House</h1>
                    <div class="divider-line col-lg-3 mx-auto my-0 mt-5">SOLD</div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php 
        if($url_last == 'customercare'):
    ?>
    <div class="head-image customer-care text-white">
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




