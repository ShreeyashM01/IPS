<?php


$visitorform_model = $visitor_detail;

?>

<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <h2>Visitor Records in Specific Location</h2>
                <table class="table">
                    <!-- <tr>
                            <td colspan="5" ><a href="<?php echo base_url(); ?>BeaconformCtrl/add">Add</a></td>
                        </tr> -->
                    <tr>
                        <th colspan="3">Visitor ID</th>
                        <th colspan="3">Name</th>
                        <th colspan="3">Card Number</th>
                        <th colspan="3">Location</th>
                        <th colspan="3">UI</th>
                    </tr>

                    <?php 
											for($i=0;$i<sizeof($visitorform_model);$i++)
											{
											?>
                    <tr>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Id;?></td>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Name; ?></td>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Card_no; ?> </td>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Location; ?></td>
                       
                    </tr>
                    <?php
											
											}
											
											?>

                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>

</html>