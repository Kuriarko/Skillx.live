      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Courses</h4>
                  <p class="card-category"> Here is a list of all the courses available</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Course Name
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Duration
                        </th>
                        <th>
                          Price
                        </th>
						<th>
                          Provider
                        </th>
						  <th>
                          Action
                        </th>
                      </thead>
					   <?php
                  foreach($records as $r)
                  {
                  ?>
                      <tbody>
                        <tr>
                    <td><?php echo "$r->course_id";?></td>
                    <td><?php echo "$r->course_name";?></td>
                    <td><?php echo "$r->description";?></td>
                    <td><?php echo "$r->duration";?></td>
                    <td><?php echo "$r->course_price";?></td>
					 <td><?php echo "$r->name";?></td>
					<td><a href="<?php echo base_url();?>Home/deletesuperadmincourse/<?php echo $r->course_id;?>" class="btn btn-info" onclick='return checkdelete()'>Delete</a></td>
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
 