
<?php include 'header.php'?>


<h3>student page</h3>

<section>
    <div class="container">
            <div class="col-md-12">
                <table class="table table-bordered table-danger table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Seip ID</th>
                    </tr>
                    <?php foreach ($students as $student) {
                        ?>
                    <tr>
                        <td> <?php echo $student['id']?> </td>
                        <td><?php echo $student['name'] ?></td>
                        <td><?php echo $student['phone'] ?></td>
                        <td>
                            <?php
                            if (is_array($student['email'])){
                                foreach ($student['email'] as $item) {
                                    echo $item;
                                }
                            }

                            ?>
                        </td>
                        <td><?php echo $student['seipId'] ?></td>
                    </tr>

                    <?php }?>

                </table>
            </div>
    </div>
</section>


<?php include 'footer.php'?>
