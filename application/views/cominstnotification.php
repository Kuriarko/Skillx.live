     
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
                          ID
                        </th>
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
                          Current Status
                        </th>
                      </thead>
					    <?php
                  foreach($records as $r)
                  {
                  ?>
                      <tbody>
                        <tr>
                    <td><?php echo "$r->id";?></td>
                    <td><?php echo "$r->instructor_name";?></td>
                    <td><?php echo "$r->instructor_email";?></td>
                    <td><?php echo "$r->instructor_phone";?></td>
                  
                    <td>
                    <?php
                    $status = $r->isapprove;
                    if($status == 1)
                    {
                    ?>
                    <a href="<?php echo base_url();?>Home/cominstructor_update_status/<?php echo $r->id;?>/<?php echo $r->isapprove;?>" class="btn btn-success">Approved (Click To Disapprove)</a>
                    <?php
                    }
                    else{
                      ?>
                      <a href="<?php echo base_url();?>Home/cominstructor_update_status/<?php echo $r->id;?>/<?php echo $r->isapprove;?>" class="btn btn-danger">Disapproved (Click To Approve)</a>
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