<?php
  $setTemplate=true;
  $judul='PG Prajekan - Highgrade Centrifugal Machine Auotomation';
  $konten = 'Industrial Automation';
  $konten_link = 'content1';
?>

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <h1 class="mb-4"><?php echo $judul; ?></h1>
                        <img class="img-fluid w-100 rounded mb-5" src="<?=templates()?>img/blog-1.jpg" alt="">
                        <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut
                            magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet
                            amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at
                            sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et
                            aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren
                            sit stet no diam kasd vero.</p>
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="<?=templates()?>img/carousel-1.jpg" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                <img src="<?=templates()?>img/carousel-2.jpg" class="d-block w-100" alt="">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>                        
                    </div>
                    <!-- Blog Detail End -->
                </div>

                <?php include '_layouts/sidebar.php'; ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->
