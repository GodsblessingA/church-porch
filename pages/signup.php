<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/church_porch/css/bootstrap.min.css">
    <link rel="stylesheet" href="/church_porch/css/mdb.css">
</head>
<body>
<h2 style="text-align: center;">REGISTER NOW</h2>
    <div class="container">
        <form action="sub.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="name">First Name </label>
                        <input type="text" class="form-control" placeholder="Enter first name">
                </div>
                <div class="form-group col-sm-6">
                    <label for="name">Last Name </label>
                        <input type="text" class="form-control" placeholder="Enter last name">
                </div>
                <div class="form-group col-sm-6">
                    <label for="date">Date of Birth </label>
                        <input type="date" class="form-control" placeholder="D.O.B">
                </div>
                <div class="form-group col-sm-6">
                    <label for="number">Phone number </label>
                        <input type="number" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label for="nan">Nationality </label>
                        <input type="text" class="form-control" placeholder="your country">
                </div>
                <div class="form-group col-sm-6">
                    <label for="state">State </label>
                        <input type="text" class="form-control" placeholder="your state">
                </div>
                <div class="col-sm-6">
                    <label>Gender</label><br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio2">Female</label>
                        </div>
                    </div>
                <div class="form-group col-sm-6">
                    <label for="email">Email Address </label>
                        <input type="email" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label for="pwd">Password</label>
                        <input type="password" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label for="pwd">Comfirm Password </label>
                        <input type="password" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right">SIGNUP</button>
        </form>
</div>
<script type="text/javascript" src="/church_porch/js/jquery.js"></script>
<script type="text/javascript" src="/church_porch/js/popper.min.js"></script>
<script type="text/javascript" src="/church_porch/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/church_porch/js/mdb.js"></script>
</body>
</body>
</html>
