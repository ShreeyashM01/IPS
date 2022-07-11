<?php


$beaconform_model = $beacon_detail;

?>

<html>
    <head>
        <title>List of beacon </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <h2>List of Beacons</h2>
                    <table class="table">
                        <!-- <tr>
                            <td colspan="5" ><a href="<?php echo base_url(); ?>BeaconformCtrl/add">Add</a></td>
                        </tr> -->
                        <tr>
                            <th>BeaconId</th>
                            <th>Location</th>
                            <th>Position</th>
                            <th>Action</th>
                            
                        </tr>
                       						
						<?php 
											for($i=0;$i<sizeof($beaconform_model);$i++)
											{
											?>
												<tr>
													<td><?php echo $beaconform_model[$i]->BeaconID;?></td>													
													<td><?php echo $beaconform_model[$i]->Location; ?></td>
                                                    <td><?php echo $beaconform_model[$i]->Position; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>BeaconformCtrl/edit/<?php echo $beaconform_model[$i]->BeaconID;?>">Edit</a>&nbsp;&nbsp;
                                                        <a href="<?php echo base_url(); ?>BeaconformCtrl/delete/<?php echo $beaconform_model[$i]->BeaconID;?>">Delete</a>
                                                    </td>
													
												</tr>
											<?php
											
											}
											
											?>
						
                    </table>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </body>
</html> 