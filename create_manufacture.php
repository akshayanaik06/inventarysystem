<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Categories</h1>
    <ol class="breadcrumb">
        <li><a href="javascript:window.location.reload();"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Categories</li>
    </ol>
</section>
        
<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
            <!--  Register widget -->
            <div class="box box-info">
                <div class="box-header">
                    <i class="fa fa-users"></i>
                    <h3 class="box-title">Manufacture Settings</h3>
                </div>
                <div class="box-body">
                    <div id="msg"></div>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Add Manufacture</a></h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <form class="form-horizontal" id="manufacture_form">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="title">Manufacture Title*:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="manufacture_name" name="manufacture_name" placeholder="Manufacture Name">
                                            </div>
                                        </div>
                                        
                                    </form>
                                    <button class="pull-right btn btn-primary save_details">Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Edit Manufacture detail</a></h4>
                            </div>
        <!-- ************Fetch deatils******************* -->
                            <?php
  
                                  include_once('Getlogin.php');
                                  $getmanufactureObj = new Login();
                                  $get_manufacture = $getmanufactureObj->getmanufacture();
                                  
                                  
                                ?>
       <!-- ************Fetch category******************* -->
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                      <table class="table table-hover">
                                        <tr>
                                          <th>No</th>
                                          <th>Manufacture Name</th>
                                            
                                        </tr>
                                         <?php
                                           
                                                while($rows = mysqli_fetch_array($get_manufacture,MYSQLI_ASSOC)){ ?>
                                                    <tr>
                                                    <td class="manu_id"><?php echo $rows['id'];?></td>
                                                     <td class="asset_value"><input type="text" class="form-control" id="manu_name" value="<?php echo $rows['name'];?>" placeholder="manufacture name"></td>
                                                     <td><button class="btn btn-warning updatemanufacture">update</button></td>
                                                      <td><button class="btn btn-danger deletemanufacture">delete</button></td>
                                                    </tr>
                                                <?php } 
                                        
                                            ?>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.Left col -->
    </div>
</section>
        
    
