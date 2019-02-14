<?php include('static/inc/header.php'); 
	$msg = '';
	$msgClass = '';?>
 <!-- Main -->
 <main>

    <section class="page-title-section theme-bg">
      <div class="container">
        <div class="page-title">
          <h1>Drivers license Application form</h1>
          <ol class="breadcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active">FAQ's</li>
          </ol>
        </div>
      </div>
    </section>

    <section class="section gray-bg">
      <div class="container">
      <?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>
        <form method="post" action="static/php/driver-form.php" enctype="multipart/form-data">
            <h1 class="py-2">Personal Information </h1>
            <div class="row justify-content-center"> <!-- row starts-->
                <div class="col-md-6">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">First Name</label>
                          <input type='text' name="first_name" class="form-control" placeholder="First Name"
                          value="<?php echo isset($_POST['first_name']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Last Name</label>
                          <input type='text' name="last_name" class="form-control" placeholder="Last Name" 
                          value="<?php echo isset($_POST['last_name']) ? $name : ''; ?>" />
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Telephone Number</label>
                          <input type='tel' name="telephone_Number" class="form-control" placeholder="Phone Number"
                          value="<?php echo isset($_POST['telephone_Number']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for=""> Order For</label>
                        <select type='text' name="order_motif" class="form-control" placeholder="Eye color" />
                          <option value="new">New</option>
                          <option value="renew">Renew</option>
                          <option value="update">Update infos</option>
                          <option value="change">Change type</option>
                          <option value="replace">Replacement</option>
                          <option value="conditional">conditional</option>
                          <option value="restricted">Restricted</option>
                        </select>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for=""> country</label>
                      <div class='input-group date' name="country" id='datetimepicker1'>
                      <?php include('static/inc/country.php'); ?>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Date of Birth</label>
                          <input type='date' name="birth_date" class="form-control" placeholder="Date of Birth"
                          value="<?php echo isset($_POST['birth_date']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Sex</label>
                          <select type='date' name="sex" class="form-control" placeholder="Sex" />
                          <option value="M">Male</option>
                          <option value="F">FeMale</option>
                        </select>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Eye Color</label>
                      <div class='input-group'>
                          <select type='date' name="eye_color" class="form-control" placeholder="Eye color" />
                          <option value="black">black</option>
                          <option value="Brown">Brown</option>
                          <option value="Blue">Blue</option>
                          <option value="Grey">Grey</option>
                          <option value="Green">Green</option>
                          <option value="Hazel">Hazel</option>
                        </select>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Height</label>
                          <input type='number' name="height" class="form-control" placeholder="Height in Meters" />
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <label for="">Disability</label>
                      <select type='text' name="disability" class="form-control" placeholder="*Select">
                          <option value="BD">YES</option>
                          <option value="MD">NO</option>
                    </select>
                </div>

                </div>
              </div>
            </div>

            <h1 class="py-2">Contact Information</h1>
            <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for="">Full Address</label>
                              <input type='text' name="full_address" class="form-control" placeholder="Full Address"
                              value="<?php echo isset($_POST['full_address']) ? $name : ''; ?>" />
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for="">City</label>
                              <input type='text' city="city" class="form-control" placeholder="City"
                              value="<?php echo isset($_POST['city']) ? $name : ''; ?>"  />
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for="">Region/State</label>
                              <input type='text' name="region" class="form-control" placeholder="*State Region/Province"
                              value="<?php echo isset($_POST['region']) ? $name : ''; ?>" />
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for=""> Zipcode</label>
                          <input type="zipcode" name="zipcode" class="form-control" placeholder="zipcode"
                          value="<?php echo isset($_POST['zipcode']) ? $name : ''; ?>" />
                          </div>
                      </div>
                    </div>

                  </div>
            <h1 class="py-2"> Documents</h1>
            <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for="">National ID card number</label>
                              <input type='text' name="id_number" class="form-control" placeholder="National ID card Number"
                              value="<?php echo isset($_POST['id_number']) ? $name : ''; ?>" />
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for="">Expiration Date</label>
                              <input type='date' name="expiration_date" class="form-control" placeholder="Expiration Date"
                              value="<?php echo isset($_POST['expiration_date']) ? $name : ''; ?>" />
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" name="expire_license" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">My Drivers license does not Expire</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for="">Issue Country</label>
                              <input type='date' name="issue_country" class="form-control" placeholder="Issue Country"
                              value="<?php echo isset($_POST['issue_country']) ? $name : ''; ?>" />
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row my-2 text-center">
                    <div class="col-md-10">
                      <h4  class="my-2">Choose the Same Category as your Drivers license course allows you. E.g B for passenger cars</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                      <div class='input-group'>
                          <select type='date' name="license_category" class="form-control" placeholder="category" />
                          <option value="AM/P">AM, p and Q</option>
                          <option value="A1">A1</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="BE">BE</option>
                          <option value="C1">C1</option>
                          <option value="C1E">C1E</option>
                          <option value="C">C</option>
                          <option value="D1">D1</option>
                          <option value="D1E">D1E</option>
                          <option value="D">D</option>
                          <option value="DE">DE</option>
                        </select>
                      </div>
                      </div>
                    </div>
                  </div>
            <h1 class="py-2">For ID Renewal only</h1>
            <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12 py-2">
                          <div class="form-check justify-content-center">
                            <label class="form-check-label" for="defaultCheck1">Photo</label>
                            <input class="form-control-file" name="photo" type="file" value="" id="defaultCheck1">
                        </div>
                        </div>

                        <div class="col-md-12 py-2">
                          <div class="form-check justify-content-center">
                            <label class="form-check-label" for="defaultCheck1">Front of License</label>
                            <input class="form-control-file" name="license_front" type="file" value="" id="defaultCheck1">
                        </div>
                        </div>

                        <div class="col-md-12 py-2">
                          <div class="form-check justify-content-center">
                            <label class="form-check-label" for="defaultCheck1">Back of license</label>
                            <input class="form-control-file" name="back_photo" type="file" value="" id="defaultCheck1">
                        </div>
                        </div>

                        <div class="col-md-12 py-2">
                          <div class="form-check justify-content-center">
                              <label class="form-check-label" for="defaultCheck1">Signature</label>
                            <input class="form-control-file" name="signature" type="file" value="" id="defaultCheck1">
                        </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check justify-content-center">
                      <h1><a href="">ClICK HERE</a></h1><h4> to download a sample</h4>
                    </div>
                    </div>
                  </div>
            <h1 class="py-2">References</h1>
            <div class="row">
                    <div class="col-md-6">
                      <p>Valid fats to support all your claims on this</p>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for="">Referecences</label>
                              <input type='text' name="references" class="form-control" placeholder="Referecences"
                              value="<?php echo isset($_POST['references']) ? $name : ''; ?>" />
                          </div>
                      </div>
                    </div>
            </div> 

        
        <p>NB::The term “countries” in this list includes states, provinces and territories. It does not reflect the Federal Government’s position regarding the status of a country or region.</p>
          <div class="row">
            <div class="col-md-6">
              <button type="submit" class="btn btn-danger">Clear Form</button>
            </div>

            <div class="col-md-6">
              <button type="submit" name="submit" class="btn btn-theme-2nd float-right mx-2">Apply NOW</button>
              <button type="submit" class="btn btn-theme float-right">Save Form</button>
            </div>
          </div>
        </form>
      </div>

    </section>
    <!-- / -->

  </main> 
      
  <?php include 'static/inc/footer.php'; ?>