<html>

<head>
    <title>Update Visitor Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card w-65">
                    <div class="card-body align-center">
                        <form method="post" name="frmEdit" action="">
                            <div class="text-center mb-4">

                                <h1 class="h3 mb-4 font-weight-normal">Edit Beacon</h1>

                            </div>
                            <?php echo validation_errors("<div class='alert alert-danger'>","</div>"); ?>
                            <div class="form-group">
                                <label for="">Location</label>
                                <input type="text" name="bLocation" value="<?php echo $beacon_detail[0]['Location']; ?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Position</label>
                                <input type="text" name="bPosition" value="<?php echo $beacon_detail[0]['Position']; ?>"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Update" name="btnEdit" class="btn btn-primary btn-lg">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>

</html>