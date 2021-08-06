     
	 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Instructor Details</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          Full Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Phone
                        </th>
						
                        <th>
                          Action
                        </th>
						 <th>
                          Current Status
                        </th>
                      </thead>
					    <?php
                  foreach($records as $r)
                  {
                  ?>
                      <tbody>
                        <tr>
                   
                    <td><?php echo "$r->instructor_name";?></td>
                    <td><?php echo "$r->instructor_email";?></td>
                    <td><?php echo "$r->instructor_phone";?></td>
				
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                    <td>
                    <?php
                    $status = $r->isapprove;
                    if($status == 1)
                    {
                    ?>
                    <a href="<?php echo base_url();?>Home/instructor_update_status/<?php echo $r->id;?>/<?php echo $r->isapprove;?>" class="btn btn-success">Approved (Click to Disapprove)</a>
                    <?php
                    }
                    else{
                      ?>
                      <a href="<?php echo base_url();?>Home/instructor_update_status/<?php echo $r->id;?>/<?php echo $r->isapprove;?>" class="btn btn-danger">Disapproved (Click to Approve)</a>
                    <?php 
                    }
                    ?>
                  </td>
					   
                        </tr>
               
                      </tbody>
					   <?php
              }
              ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>