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
                          Company_Id
                        </th>
                        <th>
                         Company_Name
                        </th>
                        <th>
                          Company_Email
                        </th>
						<th>
                         Phone
                        </th>
						<th>
                          Address
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
                    <td><?php echo "$r->id";?></td>
                    <td><?php echo "$r->name";?></td>
                    <td><?php echo "$r->email";?></td>
					 <td><?php echo "$r->phone";?></td>
                    <td><?php echo "$r->address";?></td>
					 
					<td><a href="<?php echo base_url();?>Home/deletecompany/<?php echo $r->id;?>" class="btn btn-info" onclick='return checkdelete()'>Delete</a></td>
                       <td><a class="btn btn-primary" href="<?php echo base_url();?>Home/updatecompany/<?php echo $r->id;?>">Update</a></td>
                       
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
 