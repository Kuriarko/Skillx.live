      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Instructors</h4>
                  <p class="card-category"> Here is a list of all the Instructors</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
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
                    <td><?php echo "$r->instructor_name";?></td>
                    
                    <td><?php echo "$r->instructor_email";?></td>
                    <td><?php echo "$r->instructor_phone";?></td>
				
                       <td><a class="btn btn-primary" href="<?php echo base_url();?>Home/deleteinstructor/<?php echo $r->id;?>" onclick='return checkdelete()'>Delete</a></td>
                       
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
 