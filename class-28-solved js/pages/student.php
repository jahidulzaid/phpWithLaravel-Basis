<?php include 'header.php'?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-white-50 table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Seip ID</th>
                    </tr>

                    <?php foreach ($students as $student) { ?>
                    <tr>
                        <td><?php echo $student['id'] ?></td>
                        <td><?php echo $student['Name'] ?></td>
                        <td><?php echo $student['Phone'] ?></td>
                        <td>
                            <?php
                            if (is_array($student['Email'])){
                                foreach ($student['Email'] as $value) {
                                    echo $value . '<br>';
                                }
                            }else{
                                echo $student['Email'];
                            }

                            ?>
                        </td>
                        <td><?php echo $student['seip-id'] ?></td>
                    </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>