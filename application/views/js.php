<script src="<?= BASEURL ?>public/js/jquery-3.5.1.js"></script>
<script src="<?= BASEURL ?>public/js/bootstrap/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('.submit-register').click(function () {
            $('#registerModal').modal('hide');
            $('#registerConfirmModal').modal('show');
        });
    });
</script>


<?php
$url = $_SERVER['REQUEST_URI'];
$url_last = basename($url);


if ($url_last == 'communitynowopen'):
    ?>

    <?php
endif;


if ($url_last == 'communitybolton'):
    ?>

    <?php
endif;

if ($url_last == 'communityhumber'):
    ?>

    <?php
endif;

if ($url_last == 'communitygraham'):
    ?>

    <?php
endif;

if ($url_last == 'customercare'):
    ?>

    <?php
endif;

if ($url_last == 'about'):
    ?>

    <?php
endif;

if ($url_last == 'news'):
    ?>

    <?php
endif;

if ($url_last == 'blog'):
    ?>

    <?php
endif;

if ($url_last == 'decor'):
    ?>
    <script src="<?=BASEURL?>public/owlcarousel/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {

            var sync1 = $("#sync1");
            var sync2 = $("#sync2");
            var slidesPerPage = 8; //globaly define number of elements per page
            var syncedSecondary = true;

            sync1.owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: false,
                autoplay: false,
                dots: false,
                loop: true,
                responsiveRefreshRate: 200,
                navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
            }).on('changed.owl.carousel', syncPosition);

            sync2
                .on('initialized.owl.carousel', function() {
                    sync2.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: false,
                    nav: false,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                    responsiveRefreshRate: 500,
                    responsive:{
                        0:{
                            items:4
                        },
                        600:{
                            items:6
                        },
                        1000:{
                            items:slidesPerPage
                        }
                    }
                }).on('changed.owl.carousel', syncPosition2);

            function syncPosition(el) {
                //if you set loop to false, you have to restore this next line
                //var current = el.item.index;

                //if you disable loop you have to comment this block
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }

                //end block

                sync2
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();

                if (current > end) {
                    sync2.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 100, true);
                }
            }

            sync2.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                sync1.data('owl.carousel').to(number, 300, true);
            });
        });
    </script>
    <?php
endif;

if ($url_last == 'model'):
    ?>
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
    <?php
endif;
?>
