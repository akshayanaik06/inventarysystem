 <!-- Content Header (Page header) -->
       <!-- ************Get each model******************* -->
          <?php  
                $model_id = $_POST['model_id'];
                include_once('Getlogin.php');
                $geteachmodelObj = new Login();
                $rows = $geteachmodelObj->geteachmodel($model_id);
               
                                  
                                  
           ?>
        <!-- ************get each model******************* -->
     <section class="content-header">
          <h1>
           Car
          </h1>
          <ol class="breadcrumb">
            <li><a href="javascript:window.location.reload();"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#" class="show_events">Listing</a></li>
            <li class="active">Car Detail</li>
          </ol>
    </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  
                    <img class="profile-user-img img-responsive img-circle"  src="<?php echo $rows['image1'];?>" alt="picture"  >
                   
                  <input type="file" id="my_file" name="my_file" style="display: none;" />
                  
                </div><!-- /.box-body -->
                <div class="box-body box-profile">
                  
                    <img class="profile-user-img img-responsive img-circle"  src="<?php echo $rows['image2'];?>" alt="picture" id="imageupload">
                   
                  <input type="file" id="my_file" name="my_file" style="display: none;" />
                  <h3 class="profile-username text-center"><?php echo $rows['model_name']; ?> </h3>
                  <p class="text-muted text-center">Model</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                 <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                  
                   <div class="tab-pane" id="settings">
                    <form class="form-horizontal" id="updatemodel">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="model_name" id="model_name" value="<?php echo $rows['model_name']; ?>" placeholder="Event Name">
                           <input type="hidden" class="form-control" id="model_id" name="model_id" value="<?php echo $rows['model_id']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                          <textarea type="text" class="form-control" name="desc" id="desc" placeholder="Enter Description" ><?php echo $rows['description']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress" class="col-sm-2 control-label">Color</label>
                         <div class="col-sm-5">
                          <input type="text" class="form-control" name="color" id="color" value="<?php echo $rows['color']; ?>" placeholder="enter color">
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label for="inputaddress" class="col-sm-2 control-label">Manufacturing year</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="manu_year" name="manu_year" value="<?php echo $rows['manufacture_year'];?>" placeholder="Event Address">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-2 control-label">Manufacturer</label>
                        <div class="col-sm-10">
                           <select  class="form-control" name="manufacture" id="manufacture">
                              <?php
  
                                   include_once('Getlogin.php');
                                  $getmanufactureObj = new Login();
                                  $get_manufacture = $getmanufactureObj->getmanufacture();
                                  
                                  
                                ?>
                                            <?php 
                                            $manu_name = $rows['name'];
                                           
                                                    while($rows = mysqli_fetch_array($get_manufacture,MYSQLI_ASSOC)){  ?>
                                                     <option <?php if($manu_name == $rows['name']) echo 'selected'; echo ' value="'.$rows['id'].'"'; ?>><?php echo $rows['name'];?></option> 
                                                   <?php   }?>
                               </select>
                        </div>
                      </div>
                     <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="button" class="btn btn-success" onclick="update_model_profile();">Submit</button>
                             <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section>
























     