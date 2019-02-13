<?php include('static/inc/header.php');
	$msg = '';
	$msgClass = ''; ?>
 <!-- Main -->
 <main>

    <section class="page-title-section theme-bg">
      <div class="container">
        <div class="page-title">
          <h1>ID card Application form</h1>
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
        <form method="post" action="static/php/ID-card-form.php" enctype="multipart/form-data">
            <h1 class="py-2">Personal Information</h1>
            <div class="row"> <!-- row starts-->
                <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                              <label for=""> First Name</label>
                                <input type='text' name="first_name" class="form-control" placeholder="First Name" 
                                value="<?php echo isset($_POST['first_name']) ? $name : ''; ?>" />
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                            <label for=""> last Name</label>
                                <input type='text' name="last_name" class="form-control" placeholder="Last Name"
                                value="<?php echo isset($_POST['last_name']) ? $name : ''; ?>"  />
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                            <label for=""> Telephone Number</label>
                                <input type='tel' name="telephone_Number"  class="form-control" placeholder="Phone Number"
                                value="<?php echo isset($_POST['telephone_Number']) ? $name : ''; ?>" />
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                            <label for=""> Email</label>
                                <input type='email' name="email" class="form-control" placeholder="*Email"
                                value="<?php echo isset($_POST['email']) ? $name : ''; ?>" />
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                            <label for=""> Date of Birth</label>
                                <input type='date' name="birth_date" class="form-control" placeholder="Date of Birth"
                                value="<?php echo isset($_POST['birth_date']) ? $name : ''; ?>" />
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                              <label for=""> sex</label>
                                <select type='date' name="sex" class="form-control" placeholder="Sex" 
                                value="<?php echo isset($_POST['sex']) ? $name : ''; ?>" />
                                <option value="M">Male</option>
                                <option value="F">FeMale</option>
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                            <label for="">Eye Color</label>
                                <select type='date' name="eye_color" class="form-control" placeholder="Eye color" />
                                <option value="">Ey color</option>
                                <option value="M">black</option>
                                <option value="F">Brown</option>
                                <option value="F">Blue</option>
                                <option value="F">Grey</option>
                                <option value="F">Green</option>
                                <option value="F">Hazel</option>
                              </select>
                            </div>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group'>
                                  <label for="">Height (metres)</label>
                                    <input type='number' name = "height" class="form-control" placeholder="*Height"
                                    value="<?php echo isset($_POST['height']) ? $name : ''; ?>" />
                                </div>
                            </div>
                          </div>
            </div>
            <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for="">Full Address</label>
                              <input type='text' name="full_address" class="form-control" placeholder="Full Address"
                              value="<?php echo isset($_POST['full_address']) ? $name : ''; ?>">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for="">City</label>
                              <input type='text' name="city" class="form-control" placeholder="City" 
                              value="<?php echo isset($_POST['city']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for=""> State/Region</label>
                              <input type='text' name="region" class="form-control" placeholder="*State Region/Province"
                              value="<?php echo isset($_POST['region']) ? $name : ''; ?>">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                            <label for="">Zipcode</label>
                          <input type="zipcode" names="zipcode" class="form-control" placeholder="zipcode"
                          value="<?php echo isset($_POST['zipcode']) ? $name : ''; ?>">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group'>
                                  <label for="">Occupation</label>
                                <input type="occupation" name="occupation" class="form-control" placeholder="occupation"
                                value="<?php echo isset($_POST['occupation']) ? $name : ''; ?>">
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group'>
                                  <label>Marital Status</label>
                                    <select type='select' name="marital_status" class="form-control" placeholder="*Valid Email">
                                    <option value="single">single</option>
                                    <option value="Married">Married</option>
                                    <option value="Seperated">Seperated</option>
                                    <option value="divorced">Divored</option>
                                    <option value="Widow(er)">widow(er)</option>
                                    <option value="other">other</option>
                                </select>
                                </div>
                            </div>
                    </div>

            </div>
            <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12 py-2">
                          <div class="form-check justify-content-center">
                            <label class="form-check-label" for="defaultCheck1">Photo1</label>
                            <input class="form-control-file" name="photo1" type="file" value="" id="defaultCheck1">
                        </div>
                        </div>

                        <div class="col-md-12 py-2">
                          <div class="form-check justify-content-center">
                            <label class="form-check-label" for="defaultCheck1">photo2</label>
                            <input class="form-control-file" name="photo2" type="file" value="" id="defaultCheck1">
                        </div>
                    </div>
            </div>
            </div>

    
    <div class="row">
            <div class="col-md-6">
              <p>Valid facts to support all your claims on this</p>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <div class='input-group'>
                    <label for="">Referecences</label>
                      <input type='text' name='references' class="form-control" placeholder="Referecences"
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
              <button type="submit" class="btn btn-theme-2nd float-right mx-2">Apply NOW</button>
              <button type="submit" class="btn btn-theme float-right">Save Form</button>
            </div>
          </div>
        </form>
      </div>

    </section>
    <!-- / -->

  </main> 
      
  <?php include 'static/inc/footer.php'; ?>