
<?php include 'header.php'?>


<section class="mt-5">
    <div class="container">
        <div class="row">

            <?php foreach ($products as $product) {
                ?>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
<!--                        --><?php //echo $product['image']?>
                        <img src="assets/images/1.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h3>Product Name</h3>
                        <h6>Price</h6>
                        <a href="action.php?page=details&id=<?php echo $product['id']?>" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>
    </div>
</section>


<?php include 'footer.php'?>