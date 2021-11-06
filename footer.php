<footer class=" text-light mt-5" style="background-color: #4E9F3D">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class=" fw-bold">O-Sheba</h2>
                <p class="fw-light ">Khaas Food is an e-commerce platform coupled with a chain of brick-and-mortar stores for safe and pure foods in Bangladesh</p>
                <a href="" class="mx-2"> <i class="fa fa-facebook fa-lg " style="color:#071A52"></i></a>
                <a href="" class="mx-2"> <i class="fa fa-instagram fa-lg " style="color:#071A52"></i></a>
                <a href="" class="mx-2"> <i class="fa fa-linkedin fa-lg " style="color:#071A52"></i></a>
                <a href="" class="mx-2"> <i class="fa fa-youtube fa-lg " style="color:#071A52"></i></a>

            </div>

            <div class="col-md-3 mt-2">
                <h5 class=" text-uppercase">Usefull Links</h5>
                <ul class="list-group">

                    <a class='text-decoration-none footer-item' href="<?php echo $hostname; ?>">Home</a>
                    <a class='text-decoration-none footer-item' href="all_products.php">All Products</a>
                    <a class='text-decoration-none footer-item' href="latest_products.php">Latest Products</a>
                    <a class='text-decoration-none footer-item' href="popular_products.php">Popular Products</a>

                </ul>
            </div>

            <div class="col-md-3 mt-2">
                <h5 class=" text-uppercase">Contact Us</h5>

                <ul class="list-group ">
                    <i class="fa fa-location-arrow fa-sm" style="color:#071A52"> <span class="fs-6 fw-bold text-light">Address</span></i>
                    <p class="fs-6 lh-sm">Asadullah House, 5/1, Block- E, Lalmatia, Dhaka</p>

                    <i class="fa fa-phone fa-sm" style="color:#071A52"> <span class="fs-6 fw-bold text-light">Phone</span></i>
                    <p class="fs-6">+8801642416562</p>

                    <i class="fa fa-envelope fa-sm" style="color:#071A52"> <span class="fs-6 fw-bold text-light">Email</span></i>
                    <p class="fs-6 lh-sm">Osheba@gmail.com</p>
                </ul>
            </div>
            <div class="col-md-3 mt-2">
                <h5 class="text-uppercase">NewsLetter</h5>

                <p>Enter your email below and get informed of our offers, campaigns, new products time to time!</p>
                <input type="text" class="form-control" placeholder="example@gmail.com">
                <button class="btn btn-sm btn-danger mt-2 text-uppercase">Subscribe</button>
            </div>



        </div>


    </div>
    <hr>
    <div class=" py-3 d-flex  justify-content-center align-items-center   fs-5">
        <span>Copyright &copy; 2021 | Created by <a class="text-decoration-none text-light" href="https://www.facebook.com/dev.iqramkhan" target="_blank">Iqram Khan</a></span>
    </div>
</footer>


<script src="js\jquery-1.10.2.min.js" type="text/javascript"></script>
<!-- <script src="js\bootstrap.min.js"></script> -->
<script src="js\actions.js"></script>
<!--okzoom Plugin-->
<script src="js/okzoom.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {

        $('#product-img').okzoom({
            width: 200,
            height: 200,
            scaleWidth: 800
        });


    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>