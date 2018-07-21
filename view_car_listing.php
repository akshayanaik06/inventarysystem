 <style type="text/css">
.results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}

.counter{
  padding:8px; 
  color:#ccc;
}
</style>
 <section class="content-header">
          <h1>
            Model Listing
          </h1>
          <ol class="breadcrumb">
            <li><a href="javascript:window.location.reload();"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">List</li>
          </ol>
</section>

<section class="content">
 <div class="row" id="">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List of cars</h3>
                  <div class="box-tools">
                   
                    <span class="counter pull-right"></span>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="table-responsive" id="display_thru_search">
                  <table class="table table-hover results">
                    <thead>
                    <tr>
                      <th>Photo</th>
                      <th>Model Name</th>
                      <th>Color</th>
                      <th>Manufacturer Name</th>
                      <th>View</th>
                      <th>Sold</th>
                    </tr>

                         <tr class="warning no-result">
                              <td colspan="6"><i class="fa fa-warning"></i> No result</td>
                          </tr>
                        </thead>
                      <tbody> 
                   
                     <!-- ************Fetch all events******************* -->
                         <?php  
  
                                  include_once('Getlogin.php');
                                  $getcarObj = new Login();
                                  $get_models = $getcarObj->getallmodels();
                                  
                                  
                                ?>
                    <!-- ************Fetch all events******************* -->
                    <?php
                    if($get_models){
                    while($rows = mysqli_fetch_array($get_models,MYSQLI_ASSOC)){ 
                        
                        ?>
                        <tr scope="row">
                          <td><img class="direct-chat-img" src="<?php echo $rows['image1'];?>" alt="Event image"></td>
                          <td><?php echo $rows['model_name'];?></td>
                          <td><?php echo $rows['color'];?></td>
                          <td><?php echo $rows['name'];?></td>
                          <td><a href="#" onclick="view_each_model('<?php echo $rows['model_id'];?>');">
                            <span class="label label-success" >View event</span>
                            </a></td>
                          <td><a href="#" onclick="delete_each_model('<?php echo $rows['model_id'];?>');">
                            <span class="label label-danger" >Sold</span>
                            </a>
                          </td>
                           
                        </tr>
                        <?php 
                          
                        
                        }
                    }
                     ?>
                   </tbody>
                  </table>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section>