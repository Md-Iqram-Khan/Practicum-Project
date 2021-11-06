<?php
$db = new Database();
$db->select('options', 'site_name,site_logo,currency_format');
$header = $db->getResult();

$cur_format = '$';
if (!empty($header[0]['currency_format'])) {
    $cur_format = $header[0]['currency_format'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Montserrat:400,500,700,900" rel="stylesheet">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- Bootstrap  CDN-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- External-CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Khan Enterprise</title>


</head>

<body>
    <!-- HEADER Starts -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-md bg-light navbar-light py-2 fixed-top">
        <div class="container d-flex justify-content-between align-items-center">

            <a href="<?php echo $hostname; ?>" class="navbar-brand fw-bold fs-3"> O-Sheba</a>

            <form action="search.php" method="GET">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" name='search' placeholder="Search for...">
                    <span class="input-group-btn ">
                        <input class="btn btn-secondary btn-lg " type="submit" value="Search" />
                    </span>
                </div>
            </form>


            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <?php
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }
                            if (isset($_SESSION["user_role"])) { ?>
                                Hello <?php echo $_SESSION["username"]; ?><i class="caret"></i>
                            <?php  } else { ?>
                                <i class="fa fa-user fa-lg p-2 text-dark"></i>
                            <?php  } ?>

                        </a>

                        <ul class="dropdown-menu">
                            <!-- Trigger the modal with a button -->
                            <?php
                            if (isset($_SESSION["user_role"])) { ?>
                                <li><a href="user_profile.php" class="">My Profile</a></li>
                                <li><a href="user_orders.php" class="">My Orders</a></li>
                                <li><a href="javascript:void()" class="user_logout">Logout</a></li>
                            <?php  } else { ?>
                                <li><a data-bs-toggle="modal" data-bs-target="#userLogin_form" href="#">login</a></li>
                                <li><a href="register.php">Register</a></li>
                            <?php  } ?>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="wishlist.php"><i class="fa fa-heart fa-lg text-dark p-2"></i>
                            <?php if (isset($_COOKIE['wishlist_count'])) {
                                echo '<span>' . $_COOKIE["wishlist_count"] . '</span>';
                            } ?>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="cart.php"><i class="fa fa-shopping-cart fa-lg text-dark p-2"></i>
                            <?php if (isset($_COOKIE['cart_count'])) {
                                echo '<span>' . $_COOKIE["cart_count"] . '</span>';
                            } ?>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Modal -->
            <div class="modal" id="userLogin_form" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Form -->
                            <form id="loginUser" method="POST">
                                <div>
                                    <h2>login here</h2>
                                    <div class="form-group">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="email" name='login' class="form-control username" placeholder="Username" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name='login' class="form-control password" placeholder="password" autocomplete="off" required>
                                    </div>
                                    <input type="submit" name="login" class="btn btn-primary" value="login" />
                                    <span>Don't Have an Account <a href="register.php">Register</a></span>
                                </div>
                            </form>
                            <!-- /Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modal -->


        </div>

    </nav>

    <!-- Ends navbar -->

    <!-- Start Menubar -->

    <nav class="navbar py-0">
        <div class="container-fluid py-3  bg-dark ">
            <div class="container d-flex gap-5 justify-content-center ">

                <?php
                $db = new Database();
                $db->select('sub_categories', '*', null, 'cat_products > 0 AND show_in_header = "1"', null, null);
                $result = $db->getResult();
                if (count($result) > 0) {
                    foreach ($result as $res) { ?>
                        <li><a class="text-decoration-none  sub-nav-item" href="category.php?cat=<?php echo $res['sub_cat_id']; ?>"><?php echo $res['sub_cat_title']; ?></a></li>
                <?php    }
                } ?>


            </div>

        </div>
    </nav>
    <!-- Ends Menubar -->