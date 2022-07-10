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

                                <h1 class="h3 mb-4 font-weight-normal">Update Visitor Details</h1>

                            </div>
                            <?php echo validation_errors("<div class='alert alert-danger'>","</div>"); ?>

                            <!-- <div class="form-group">
                                <td>Id</td>
                                <input type="text" name="Id" value="<?php echo $visitor_detail[0]['Id']; ?>"
                                    class="form-control">
                            </div> -->
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="txtName" value="<?php echo $visitor_detail[0]['Name']; ?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="txtAddress"
                                    value="<?php echo $visitor_detail[0]['Address']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Mobile</label>
                                <input type="phone" name="txtMobile" value="<?php echo $visitor_detail[0]['Mobile']; ?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Location</label>
                                <input type="text" name="txtLocation"
                                    value="<?php echo $visitor_detail[0]['Location']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" name="txtDate" value="<?php echo $visitor_detail[0]['Day']; ?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">In_time</label>
                                <input type="time" name="txtIn_time"
                                    value="<?php echo $visitor_detail[0]['In_time']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Out_time</label>
                                <input type="time" name="txtOut_time"
                                    value="<?php echo $visitor_detail[0]['Out_time']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Card_no</label>
                                <input type="text" name="txtCard_no"
                                    value="<?php echo $visitor_detail[0]['Card_no']; ?>" class="form-control">
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