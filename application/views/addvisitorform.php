<html>

<head>
    <title>Visitor Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card w-65">
                    <div class="card-body align-center">
                        <form method="post" name="frmAdd" action="">
                            <div class="text-center mb-4">

                                <h1 class="h3 mb-4 font-weight-normal">Add Visitor</h1>

                            </div>
                            <?php echo validation_errors("<div class='alert alert-danger'>","</div>"); ?>
                            <div class="form-group">
                                <label for="">Id</label>
                                <input type="text" class="form-control" name="txtId">
                            </div>

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="txtName">
                            </div>

                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="txtAddress">
                            </div>

                            <div class="form-group">
                                <label for="">Mobile</label>
                                <input type="phone" class="form-control" name="txtMobile">
                            </div>

                            <div class="form-group">
                                <label for="">Location</label>
                                <input type="text" class="form-control" name="txtLocation">
                            </div>

                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" class="form-control" name="txtDate">
                            </div>

                            <div class="form-group">
                                <label for="">In_time</label>
                                <input type="time" class="form-control" name="txtIn_time">
                            </div>

                            <div class="form-group">
                                <label for="">Out_time</label>
                                <input type="time" class="form-control" name="txtOut_time">
                            </div>

                            <div class="form-group">
                                <label for="">Card_no</label>
                                <input type="text" class="form-control" name="txtCard_no">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Add" name="btnadd" class="btn btn-primary btn-lg">
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