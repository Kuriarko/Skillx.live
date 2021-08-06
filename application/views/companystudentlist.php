      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Students</h4>
                  <p class="card-category"> Here is a list of all the students</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Student_ID
                        </th>
                        <th>
                         Name
                        </th>
                        <th>
                          Email
                        </th>
						<th>
                          Phone
                        </th>
						<th>
                          City
                        </th>
						<th>
                          State
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          Zip
                        </th>
						
						  <th>
                          Actions
                        </th>
                      </thead>
					   <?php
                  foreach($records as $r)
                  {
                  ?>
                      <tbody>
                        <tr>
                    <td><?php echo "$r->student_id";?></td>
                    <td><?php echo "$r->student_name";?></td>
                    <td><?php echo "$r->student_email";?></td>
					 <td><?php echo "$r->student_phone";?></td>
                    <td><?php echo "$r->city";?></td>
					 <td><?php echo "$r->state";?></td>
					  <td><?php echo "$r->country";?></td>
                    <td><?php echo "$r->zip";?></td>
					
					<td><a href="<?php echo base_url();?>Home/deletestudent/<?php echo $r->student_id;?>" class="btn btn-info" onclick='return checkdelete()'>Delete</a></td>
                       <td><a class="btn btn-primary" href="<?php echo base_url();?>Home/updatestudent/<?php echo $r->student_id;?>">Update</a></td>
                       
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
	  <script>
    function checkdelete(){
      return confirm('Do you want to delete this?');
    }
  </script>
 