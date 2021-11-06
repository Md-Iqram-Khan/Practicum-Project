<?php include 'config.php';  //include config
// set dynamic title
$db = new Database();
$db->select('options', 'site_title', null, null, null, null);
$result = $db->getResult();

if (!empty($result)) {
    $title = $result[0]['site_title'];
} else {
    $title = "Shopping Project";
}
// include header 
include 'header.php'; ?>
<!-- banner section start -->
<div class="row">
    <div class="col-md-12">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/banner-1.jpg" class="d-block w-100 ">
                </div>
                <div class="carousel-item  ">
                    <img src="./images/banner-3.jpg" class="d-block w-100 ">
                </div>
                <div class="carousel-item">
                    <img src="./images/banner-2.jpg" class="d-block w-100 ">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- banner section end -->



<!-- popular prod section start -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mt-2">Popular Products</h2>
            <div class="d-flex gap-4 flex-wrap justify-content-around align-items-center my-3">

                <?php
                $db->select('products', '*', null, 'product_views > 0', 'product_views DESC', 10);
                $result = $db->getResult();
                if (count($result) > 0) {
                    foreach ($result as $row) { ?>
                        <div class="card" style="width: 18rem">


                            <a class="card-body" href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                <img class="card-img-top card-image " src="product-images/<?php echo $row['featured_image']; ?>">
                            </a>


                            <div class="btn-group">
                                <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><i class="fa fa-eye text-dark fa-xl "></i></a>
                                <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart text-dark fa-xl"></i></a>
                                <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-heart text-dark fa-xl"></i></a>


                            </div>


                            <div class="card-footer">
                                <h6 class="card-title text-center">
                                    <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'], 0, 25), '...'; ?></a>
                                </h6>
                                <div class="text-center"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></div>
                            </div>
                        </div>
                <?php    }
                } else {
                } ?>


            </div>
        </div>
    </div>
</div>

<!-- popular prod section end -->



<!-- Latest prod section start -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mt-2">Latest Products</h2>
            <div class="d-flex gap-4 flex-wrap justify-content-around align-items-center my-3">

                <?php
                $db = new Database();
                $db->select('products', '*', null, null, 'product_id DESC', 6);
                $result = $db->getResult();
                if (count($result) > 0) {
                    foreach ($result as $row) { ?>
                        <div class="card" style="width: 18rem;">

                            <a class="card-body" href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                <img class="card-img-top card-image" src="product-images/<?php echo $row['featured_image']; ?>">
                            </a>

                            <div class="btn-group">
                                <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><i class="fa fa-eye text-dark fa-xl "></i></a>
                                <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart text-dark fa-xl"></i></a>
                                <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-heart text-dark fa-xl"></i></a>
                            </div>

                            <div class="card-footer">
                                <h6 class="card-title text-center">
                                    <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'], 0, 25), '...'; ?></a>
                                </h6>
                                <div class="text-center"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></div>
                            </div>
                        </div>

                <?php    }
                } ?>

            </div>
        </div>
    </div>
</div>

<!-- Latest prod section end -->


<?php include 'footer.php'; ?>