<?php


$visitorform_model = $visitor_detail;

?>

<html>

<head>
    <title>List of visitor </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <h2>List of Visitors</h2>
                <table class="table">
                    <!-- <tr>
                            <td colspan="5" ><a href="<?php echo base_url(); ?>VisitorformCtrl/add">Add</a></td>
                        </tr> -->
                    <tr>
                        <th colspan="3">Id</th>
                        <th colspan="3">Name</th>
                        <th colspan="3">Address</th>
                        <th colspan="3">Mobile</th>
                        <th colspan="3">Location</th>
                        <th colspan="3">Date</th>
                        <th colspan="3">In_time</th>
                        <th colspan="3">Out_time</th>
                        <th colspan="3">Card_no</th>
                        <th colspan="3">Action</th>
                    </tr>

                    <?php 
											for($i=0;$i<sizeof($visitorform_model);$i++)
											{
											?>
                    <tr>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Id;?></td>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Name; ?></td>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Address; ?></td>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Mobile; ?> </td>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Location; ?></td>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Day; ?> </td>
                        <td colspan="3"><?php echo $visitorform_model[$i]->In_time; ?></td>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Out_time; ?> </td>
                        <td colspan="3"><?php echo $visitorform_model[$i]->Card_no; ?> </td>
                        <td colspan="3">
                            <a
                                href="<?php echo base_url(); ?>VisitorformCtrl/edit/<?php echo $visitorform_model[$i]->Id;?>">Edit</a>&nbsp;&nbsp;
                            <a
                                href="<?php echo base_url(); ?>VisitorformCtrl/delete/<?php echo $visitorform_model[$i]->Id;?>">Delete</a>
                        </td>
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