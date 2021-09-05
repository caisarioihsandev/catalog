    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="<?= ASSETS ?>/template/img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input name="find" method="get" class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Photos
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="<?= $data['page_current']; ?>" size="1" class="tm-input-paging tm-text-primary"> of <?= $data['page_total'];?>
                </form>
            </div>
        </div>
        <div class="row tm-mb-90 tm-gallery">
        <?php if (is_array($data['images'])) {
            foreach ($data['images'] as $row) { ?>
        	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="<?= ROOT ."/". $row->image; ?>" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2><?= $row->title; ?></h2>
                        <a href="<?= ROOT; ?>/photo_detail/<?= $row->url_address; ?>".>View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?= date("d M Y", strtotime($row->date));?></span>
                    <span><?= $row->views; ?> views</span>
                </div>
            </div>
            <?php }} ?>         
        </div> <!-- row -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="<?= $data['page_prev']; ?>" class="btn btn-primary tm-btn-prev mb-2">Previous</a>
                <div class="tm-paging d-flex">
                    <a href="<?= $data['page_1']; ?>" class="active tm-paging-link">1</a>
                    <a href="<?= $data['page_2']; ?>" class="tm-paging-link"><?= $data['page_current']+1; ?></a>
                    <a href="<?= $data['page_3']; ?>" class="tm-paging-link"><?= $data['page_current']+2; ?></a>
                    <a href="<?= $data['page_4']; ?>" class="tm-paging-link"><?= $data['page_current']+3; ?></a>
                </div>
                <a href="<?= $data['page_next']; ?>" class="btn btn-primary tm-btn-next">Next Page</a>
            </div>            
        </div>
    </div> <!-- container-fluid, tm-container-content -->