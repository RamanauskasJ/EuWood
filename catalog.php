<?php require_once('common/html-head.php');?>

<?php require_once('common/navbar.php');?>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-4">
                <a href="products.php" class="btn p-0 m-0">
                    <div class="gallery-item">
                        <img alt="Image 1" src="assets/small-log-cabins.jpg">
                        <div class="gallery-item-header">Mediniai Namukai</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="catalog.php" class="btn p-0 m-0 disabled">
                    <div class="gallery-item disabled">
                        <img alt="Image 2" src="assets/gardens.jpg">
                        <div class="gallery-item-header text-dark">Sodo Namukai</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="catalog.php" class="btn p-0 m-0 disabled">
                    <div class="gallery-item disabled">
                        <img alt="Image 3" src="assets/camping-huts.jpg">
                        <div class="gallery-item-header text-dark">Stovyklavimo Nameliai</div>
                    </div>
                </a>
            </div>
          <div class="col-md-4">
            <a href="catalog.php" class="btn p-0 m-0 disabled">
              <div class="gallery-item disabled">
                <img alt="Image 3" src="assets/sheds.jpg">
                <div class="gallery-item-header text-dark">Pavėsinės</div>
              </div>
            </a>
          </div>
        </div>
    </div>
</section>

<?php require_once('common/footer.php');?>