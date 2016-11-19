<?php 
require_once("inc/config.php");
include(ROOT_PATH . "inc/function.php");
$con = new crud;
$recent = $con->get_products_recent();

$pageTitle = "Rsyd&rsquo;s Small Fancy Store";
$section = "home";
include(ROOT_PATH . 'inc/header.php'); ?>
        <div class="section banner">

            <div class="wrapper">





            </div>

        </div>

        <div class="section shirts latest">

            <div class="wrapper">

                <h2>Rsyd&rsquo;s Latest Shirts</h2>

                <ul class="products">
                   <?php
                        foreach(array_reverse($recent) as $product) {
                            include(ROOT_PATH . "inc/partial-product-list-view.html.php");
                        }
                    ?>
                </ul>

            </div>

        </div>

<?php include(ROOT_PATH . 'inc/footer.php') ?>