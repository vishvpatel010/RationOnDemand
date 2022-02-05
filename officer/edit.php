    <!-- Start Create New Post -->
<div class="modal fade" role="dialog" tabindex="-1" id="user-edit<?php echo $data['id']?>">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Edit Post</h2>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true"><h1>×</h1></span>
            </button>
          </div>
          <div class="panel-body">
                <form role="form" action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                    <div class="form-group col-lg-12">
                        <label for="name">Name</label><br>
                        <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>"><br>
                    </div>
                    <div class="form-group col-lg-12">
                          <label>Mobile No.</label>
                          <input class="form-control" type="number" name="mono" value="<?php echo $data['mono']; ?>">
                    </div> 
                    <div class="form-group col-lg-12">
                          <label>Email</label>
                          <input class="form-control" type="email" name="email" value="<?php echo $data['email']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                          <label>Ration Card Number</label>
                          <input class="form-control" type="number" name="rano" value="<?php echo $data['rano']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                          <label>Date Of Birth</label>
                          <input class="form-control" type="date" name="dob" value="<?php echo $data['dob']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                          <label>Address</label>
                          <textarea name="address" cols="30" rows="7" class="form-control" placeholder="Enter Address Here..."><?php echo $data['address']; ?></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                          <label>City</label>
                          <input class="form-control" type="text" name="city" value="<?php echo $data['city']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                          <label>State</label>
                          <input class="form-control" type="text" name="state" value="<?php echo $data['state']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                          <label>Pincode</label>
                          <input class="form-control" type="number" name="pincode" value="<?php echo $data['pincode']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                          <label for="gender">Gender</label><br>
                            <select name="gender" class="form-control">
                                <option>Choose...</option>
                                <option value="Male" <?php if($data['gender']=="Male"){echo "selected";}?>>Male</option>
                                <option value="Female" <?php if($data['gender']=="Female"){echo "selected";}?>>Female</option>
                            </select>
                    </div>
                    <div class="form-group col-lg-12">
                          <label>Aadhar Card Number</label>
                          <input class="form-control" type="number" name="aano" value="<?php echo $data['aano']; ?>">
                        </div>
                  </div>
                    <center><button type="submit" class="btn btn-info" name="update">Save Change</button></center>
                </form><br>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Create New Post -->