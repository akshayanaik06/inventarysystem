 <!-- Content Header (Page header) -->
  <section class="content-header">
          <h1>
            Add Models
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="javascript:window.location.reload();"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Cars</li>
          </ol>
  </section>
  <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- general form elements -->
            <div class="box box-primary">
              <form class="detailform" id="detailform" name="detailform" enctype="multipart/form-data">
                    <div class="box-body">
                          <div class="form-group">
                              <label for="exampleInputname">Name*:</label>
                              <div class="col-xs-12">
                                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                      <input type="text" class="form-control" name="model_name" id="model_name" placeholder="Enter Model Name" >
                                      <span class="help-block" id="error1"></span>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputdesciption">Description*:</label>
                              <div class="col-xs-12">
                                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                      <textarea type="text" class="form-control" name="desc" id="desc" placeholder="Enter Description" ></textarea>
                                      <span class="help-block" id="error2"></span>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                                <label for="exampleInputcolor">Color*:</label>
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <input type="text" class="form-control" name="color" id="color" placeholder="Select color" >
                                        <span class="help-block" id="error3"></span>
                                    </div>
                                     
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputmanufactureyear">Manufacturing year*:</label>
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <input type="text" class="form-control" name="manu_year" id="manu_year" placeholder="Enter manufacturing year" ><span class="help-block" id="error4"></span>
                                    </div>
                                </div>
                            </div>
                           <!-- ************Fetch category******************* -->
                            <?php
  
                                  include_once('Getlogin.php');
                                  $getmanufactureObj = new Login();
                                  $get_manufacture = $getmanufactureObj->getmanufacture();
                                  
                                  
                                ?>
                          <!-- ************Fetch category******************* -->
                            <div class="form-group">
                                <label for="exampleInputmanufacture">Manufacturer*:</label>
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <select  class="form-control" name="manufacture" id="manufacture">
                                          <option value="" selected disabled>Select Manufacture</option>
                                              <?php  
                                                    if($get_manufacture){
                                                     while($rows = mysqli_fetch_array($get_manufacture,MYSQLI_ASSOC)){ 
                                                      echo '<option value="'.$rows['id'].'">'.$rows['name'].'</option>';
                                                                    }
                                                      }
                                                    
                                              ?>
                                                                 
                                        </select>
                                        <span class="help-block" id="error6"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputimage1">image1*:</label>
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <input type="file" class="form-control" name="car_photo1" id="car_photo1" >
                                        <span class="help-block" id="error7"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputimage2">image2:</label>
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <input type="file" class="form-control" name="car_photo2" id="car_photo2" >
                                        <span class="help-block" id="error7"></span>
                                    </div>
                                </div>
                            </div>
                         </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="button" class="btn btn-success submitdata" onclick="submitdata();">Save</button> 
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>    
    </div>   <!-- /.row -->
</section>
