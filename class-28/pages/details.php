<?php include ('header.php') ?>


<section class="mt-5">
    <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/images/<?php echo $details['image'] ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2>Product Name: <?php echo $details['product_name'] ?> </h2>
                        <span>Category Name: <?php echo $details['category_name'] ?></span>
                        <h5>Price: <?php echo $details['price']?> </h5>
                        <p>Description: <?php echo $details['description']?> </p>
                    </div>
                </div>


            </div>
    </div>
</section>

<?php include ('footer.php') ?>
