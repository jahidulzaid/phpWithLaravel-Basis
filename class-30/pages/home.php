<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

<section class="py-5">
    <div class="container">
        <div class="row">

            <div class=" m-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Calculator</h1>
                    </div>
                    <div class="card-body">
                        <form action="action.php?page=calculate" method="post">
                            <div class="form-group row my-3">
                                <label for="first_name" class="col-md-3 col-form-label">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" id="first_name" required name="first_name" class="form-control" placeholder="First Number">
                                </div>
                            </div>

                            <div class="form-group row my-3">
                                <label for="last_name" class="col-md-3 col-form-label">Last Number</label>
                                <div class="col-md-9">
                                    <input type="number" id="last_name"  required name="last_name" class="form-control" placeholder="Last Number">
                                </div>
                            </div>

<!--                            //operator-->
                            <div class="form-group row my-3">
                                <label class="col-md-5 col-form-label">Select Operator</label>

                                <div class="col-md-7">
                                    <label for="">
                                        <input  type="submit" name="operator" class="btn btn-outline-primary" value="+">
                                        Addition
                                    </label>

                                    <label for="">
                                        <input  type="submit" name="operator" class="btn btn-outline-primary" value="-">
                                        Subtraction
                                    </label>
                                    <label for="">
                                        <input  type="submit" name="operator" class="btn btn-outline-primary" value="*">
                                        Multiplication
                                    </label>
                                    <label for="">
                                        <input  type="submit" name="operator" class="btn btn-outline-primary" value="/">
                                        Division
                                    </label>
                                </div>
                            </div>


<!--                            //result-->
                            <div class="form-group row my-3">
                                <label for="" class="col-md-3 col-form-label">Result</label>
                                <div class="col-md-9">
                                    <input type="number" value="<?php echo isset($result)? $result: '';?>" class="form-control" placeholder="Result">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>












    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>