<?php

      $gssql = "SELECT * FROM `twnc_general_setting` WHERE posid = '53305001'";
      $gshasil = mysqli_query ($kon,$gssql);
      $gsdata = mysqli_fetch_assoc($gshasil);
?>  
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-cogs"></i> &nbsp; App Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">App Settings</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">            


<!-- ./row -->
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">General</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Profile</a>
                  </li>
                  <!--
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Messages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Settings</a>
                  </li>
                -->
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                    <form class="form-horizontal">
                      <div class="card-body">
                        <div class="form-group row">
                          <label for="posid" class="col-sm-2 col-form-label">POS ID</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="posid" value="<?php echo $gsdata['posid'];?>" placeholder="12345" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="companyname" class="col-sm-2 col-form-label">Company Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="companyname" placeholder="Arthagraha Group" value="<?php echo $gsdata['companyname'];?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="companyname" class="col-sm-2 col-form-label">POS Category</label>
                          <div class="col-sm-10">
                            <select id="poscategory" name="poscategory" class="form-control">
                              <option selected="selected" value="1">Main Store</option>
                              <option value="2">Sub Store</option>
                            </select>
                          </div>
                        </div>
                        <!--                                                
                        <div class="form-group row">
                          <label for="appid" class="col-sm-2 col-form-label">Application ID</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="appid" placeholder="12345" value="<?php ///echo $gsdata['companyname'];?>">
                          </div>
                        </div>
                      -->
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                      </div>
                      <!-- /.card-footer -->
                    </form>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                    <form class="form-horizontal">
                      <div class="card-body">                                 
                        <div class="form-group row">
                          <label for="storecode" class="col-sm-2 col-form-label">Store Code</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="storecode" placeholder="TWNC01" value="<?php echo $gsdata['storecode'];?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="storename" class="col-sm-2 col-form-label">Store Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="storename" placeholder="Store Name" value="<?php echo $gsdata['storename'];?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="storehead" class="col-sm-2 col-form-label">Head Store</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="storehead" placeholder="Head Store" value="<?php echo $gsdata['headstore'];?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="storemail" class="col-sm-2 col-form-label">Store Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="storemail" placeholder="store@mail.com" value="<?php echo $gsdata['storemail'];?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="storetlp" class="col-sm-2 col-form-label">Store Telepon</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="storetlp" placeholder="02125525100" value="<?php echo $gsdata['storephone'];?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="storeloc" class="col-sm-2 col-form-label">Store Address</label>
                          <div class="col-sm-10">
                            <textarea id="storeloc" name="storeloc" class="form-control"><?php echo $gsdata['storeaddress'];?></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="previewlogo" class="col-sm-2 col-form-label">Preview Logo</label>
                          <div class="col-sm-10">
                            <img src="custome/images/<?php echo $gsdata['storelogo']; ?>" alt="<?php echo $gsdata['storename'];?>" class="img-thumbnail" width="200px;" id="previewlogo" name="previewlogo" >
                          </div>
                        </div>                          
                        <div class="form-group row">
                          <label for="customFile" class="col-sm-2 col-form-label">Store Logo</label>
                          <div class="col-sm-10">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                      </div>
                      <!-- /.card-footer -->
                    </form>
                  </div>
                  <!--
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                     Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                     Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                  </div>
                -->
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>




      </div>
    </section>