<?php include('static/inc/header.php');
	$msg = '';
	$msgClass = ''; ?>
 <!-- Main -->
 <main>

    <section class="page-title-section theme-bg">
      <div class="container">
        <div class="page-title">
          <h1>Certificate Application form</h1>
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
                  <h1>Nationality</h1>
                <div class="row justify-content-center"> <!-- row starts-->
                    <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Country</label>
                          <div class='input-group date' name="country" id='datetimepicker1'>
                          <?php include('static/inc/country.php'); ?>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">University of choice</label>
                              <input type='text' name="university_choice" class="form-control" name="university_choice" placeholder="University of choice"
                              value="<?php echo isset($_POST['university_choice']) ? $name : ''; ?>" />
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group">
                        <label for="">Degree type</label>
                          <select type='text' name="degree_type" class="form-control" placeholder="*Select">
                              <option value="AD">associate degrees</option>
                              <option value="BD">Bachelor Degree</option>
                              <option value="MD">Master's Degree</option>
                              <option value="DD">Doctorate Degree</option>
                              <option value="PD">Professional Diploma</option>
                              <option value="HD">Honorary Doctorate degree</option>
                              <option value="PD">Professorship Degree</option>
                              <option value="HP">Honorary Professorship</option>
                              <option value="TA">Training Attestations</option>
                              <option value="FF">Fellowship</option>
                        </select>
                    </div>

                    </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Degree Program</label>
                              <input type='text' name="degree_program" class="form-control" placeholder="Preffered Program"
                              value="<?php echo isset($_POST['degree_program']) ? $name : ''; ?>" />
                          </div>
                      </div>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-check">
                      <label for=""></label>
                        <label class="form-check-label" name="language_require" for="defaultCheck1">Do you require language before your program</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-check justify-content-center">
                        <input class="form-check-input" name="language_require" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">YES</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-check justify-content-center">
                        <input class="form-check-input" name="language_require" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">NO</label>
                      </div>
                    </div>
                      <div class="col-md-2">
                        <div class="form-check justify-content-center">
                          <input class="form-check-input" name="language_require" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Don't Know</label>
                        </div>
                      </div>
                  </div>
          <div class="acco-group">
              <h1 class="py-2">Contact Details</h1>
              <div class="acco-des">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">First Name</label>
                              <input type='text' name="first_name" class="form-control" placeholder="* family Name"
                              value="<?php echo isset($_POST['firs_name']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Last Name</label>
                              <input type='text' name="last_name" class="form-control" placeholder="Given Name"
                              value="<?php echo isset($_POST['last_name']) ? $name : ''; ?>" />
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Birth Date</label>
                              <input type='date' name="birth_date" class="form-control" placeholder="*Your module"
                              value="<?php echo isset($_POST['birth_date']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">sex</label>
                              <select type='text' name="sex" class="form-control" placeholder="*Your module">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                              </select>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">passport Number</label>
                              <input type='number' name="passport_number" class="form-control" placeholder="*Passport Number"
                              value="<?php echo isset($_POST['passport_number']) ? $name : ''; ?>">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for=""> Expiry Date</label>
                              <input type='date' name="expiry_date" class="form-control" placeholder="*expiry date"
                              value="<?php echo isset($_POST['expiry_date']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Full Address</label>
                              <input type='text' name="full_address" class="form-control" placeholder="*Home Address"
                              value="<?php echo isset($_POST['full_address']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">City</label>
                              <input type='text' name="city" class="form-control" placeholder="*City"
                              value="<?php echo isset($_POST['city']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Zipcode</label>
                              <input type='text' name="zipcode" class="form-control" placeholder="*Postal code"
                              value="<?php echo isset($_POST['zipcode']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for=""> Telephone Number</label>
                              <input type='tel' name="telephone_Number" class="form-control" placeholder="*Telephone Number"
                              value="<?php echo isset($_POST['telephone_Number']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Place of Birth</label>
                          <div class='input-group date' >
                          <?php include('static/inc/country.php'); ?>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Email</label>
                              <input type='email' name="email" class="form-control" placeholder="*Email Address">
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-check justify-content-center">
                        <input class="form-check-input"  type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">You have read and confirmed our privacy policy</label>
                    </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-check justify-content-center">
                       <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                       <label class="form-check-label" for="defaultCheck1">Receive Emails and Notification from us</label>
                   </div>
                 </div>
            </div>
              </div>
          </div>
          <div class="acco-group">
              <h1 class="py-2">Guardian or Parental contacts</h1>
              <div class="acco-des">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Guardian First Name</label>
                              <input type='text' name="guard_firstname" class="form-control" placeholder="*family Name"
                              value="<?php echo isset($_POST['guard_firstname']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for=""> Guardian Last Name</label>
                              <input type='text' name="guard_lastname" class="form-control" placeholder="*Given Name"
                              value="<?php echo isset($_POST['guard_lastname']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Relation to Student</label>
                              <input type='text' name="student_relation" class="form-control" placeholder="*Relation to Student"
                              value="<?php echo isset($_POST['student_relation']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Home Address</label>
                              <input type='text' name="guard_address" class="form-control" placeholder="*Home Address"
                              value="<?php echo isset($_POST['guard_address']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">City</label>
                              <input type='text' name="guard_city" class="form-control" placeholder="*City"
                              value="<?php echo isset($_POST['university_choice']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Zipcode</label>
                              <input type='Zipcode' names="gaurd_zipcode" class="form-control" placeholder="*Postal code"
                              value="<?php echo isset($_POST['guard_zipcode']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group date' id='datetimepicker1'>
                          <label for="">Country</label>
                          <?php include('static/inc/country.php'); ?>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Phone Number</label>
                              <input type='tel' name="guard_phoneNumber" class="form-control" placeholder="*Home Phone Number"
                              value="<?php echo isset($_POST['guard_phoneNumber']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Mobile Number</label>
                              <input type='tel' name="guard_mobileNumber" class="form-control" placeholder="*Mobile Number"
                              value="<?php echo isset($_POST['guard_mobileNumber']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Fax</label>
                              <input type='text' name="fax" class="form-control" placeholder="Fax"
                              value="<?php echo isset($_POST['fax']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Email</label>
                              <input type='email' name="gaurd_email" class="form-control" placeholder="*Email Address"
                              value="<?php echo isset($_POST['email']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for=""> Other Address</label>
                              <input type='text' name="other_address" class="form-control" placeholder="Other Address">
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="acco-group">
              <h1 class="py-2">Emmergency Contacts</h1>
              <div class="acco-des">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Guardian First Name</label>
                              <input type='text' name="guard_firstname" class="form-control" placeholder="*family Name"
                              value="<?php echo isset($_POST['guard_firstname']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for=""> Guardian Last Name</label>
                              <input type='text' name="guard_lastname" class="form-control" placeholder="*Given Name"
                              value="<?php echo isset($_POST['guard_lastname']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Relation to Student</label>
                              <input type='text' name="student_relation" class="form-control" placeholder="*Relation to Student"
                              value="<?php echo isset($_POST['student_relation']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Home Address</label>
                              <input type='text' name="guard_address" class="form-control" placeholder="*Home Address"
                              value="<?php echo isset($_POST['guard_address']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">City</label>
                              <input type='text' name="guard_city" class="form-control" placeholder="*City"
                              value="<?php echo isset($_POST['university_choice']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Zipcode</label>
                              <input type='Zipcode' names="gaurd_zipcode" class="form-control" placeholder="*Postal code"
                              value="<?php echo isset($_POST['guard_zipcode']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group date' id='datetimepicker1'>
                          <label for="">Country</label>
                          <?php include('static/inc/country.php'); ?>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Phone Number</label>
                              <input type='tel' name="guard_phoneNumber" class="form-control" placeholder="*Home Phone Number"
                              value="<?php echo isset($_POST['guard_phoneNumber']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Mobile Number</label>
                              <input type='tel' name="guard_mobileNumber" class="form-control" placeholder="*Mobile Number"
                              value="<?php echo isset($_POST['guard_mobileNumber']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Fax</label>
                              <input type='text' name="fax" class="form-control" placeholder="Fax"
                              value="<?php echo isset($_POST['fax']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for="">Email</label>
                              <input type='email' name="gaurd_email" class="form-control" placeholder="*Email Address"
                              value="<?php echo isset($_POST['email']) ? $name : ''; ?>"/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <label for=""> Other Address</label>
                              <input type='text' name="other_address" class="form-control" placeholder="Other Address">
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="acco-group">
              <h1 class="py-2">Criminal History</h1>
              <div class="acco-des">
                <div class="row">
                    <div class="col-md-8">
                      <p>Other than traffic violations, have you ever been convicted of a misdemeanor, felony or other crime?</p>
                    </div>
                    <div class="col-md-2">
                      <div class="form-check justify-content-center">
                        <input class="form-check-input" name="criminal" type="checkbox" value="1" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">YES</label>
                    </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-check justify-content-center">
                        <input class="form-check-input" name="criminal"  type="checkbox" value="0" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">NO</label>
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <p>Have you ever been charged, suspended, removed, dismissed or expelled from any educational institution for academic or disciplinary reasons?  </p>
                    </div>
                    <div class="col-md-2">
                      <div class="form-check justify-content-center">
                        <input class="form-check-input" name="1criminal"  type="checkbox" value="0" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">YES</label>
                    </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-check justify-content-center">
                        <input class="form-check-input" name="1criminal"  type="checkbox" value="0" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">NO</label>
                    </div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col">
                <h4>Education Before High School (e.g. at University: age -18)</h4>
              </div>
            </div>
            <div class="row">
                <div class="col">
                  <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Date From</th>
                            <th>Date to</th>
                            <th>Name of Institution</th>
                            <th>Location</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            </th>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Name of institution">
                                </div>
                            </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Institution locaton">
                                </div>
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            </th>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Institution locaton">
                              </div>
                          </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Institution locaton">
                                </div>
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            </th>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Institution locaton">
                                </div>
                            </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Institution locaton">
                                </div>
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <th>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            </th>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Institution locaton">
                                </div>
                            </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Institution locaton">
                                </div>
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <th>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            </th>
                            <td><div class="form-group">
                              <div class="input-group mb-3">
                              <input type="date" class="form-control" placeholder="Date of Birth">
                              </div>
                          </div></td>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Institution locaton">
                                </div>
                            </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Institution locaton">
                                </div>
                            </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Person or organisation responsible">
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group mb-3">
                    <input type="date" class="form-control" placeholder="Graduation Date">
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Current or most recent point grade Average">
                    </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h4>Education After High School (e.g. at University: age 18+)</h4>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Date From</th>
                          <th>Date to</th>
                          <th>Name of Institution</th>
                          <th>Location</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="date" class="form-control" placeholder="Date of Birth">
                              </div>
                          </div>
                          </th>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="date" class="form-control" placeholder="Date of Birth">
                              </div>
                          </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Name of institution">
                              </div>
                          </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Institution locaton">
                              </div>
                          </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="date" class="form-control" placeholder="Date of Birth">
                              </div>
                          </div>
                          </th>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="date" class="form-control" placeholder="Date of Birth">
                              </div>
                          </div>
                          </td>
                          <td>
                          <div class="form-group">
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Institution locaton">
                            </div>
                        </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Institution locaton">
                              </div>
                          </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="date" class="form-control" placeholder="Date of Birth">
                              </div>
                          </div>
                          </th>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="date" class="form-control" placeholder="Date of Birth">
                              </div>
                          </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Institution locaton">
                              </div>
                          </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Institution locaton">
                              </div>
                          </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Name of Certification/degree">
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group mb-3">
                    <input type="date" class="form-control" placeholder="Graduation Date">
                    <div class="input-group-append">
                    </div>
                </div>
              </div>
            </div>
        </div>
        <h1>Language Testing</h1>
        <div class="row">
            <div class="col">
              <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Test Name</th>
                        <th>Date Taken</th>
                        <th>Score</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                      <p>TOEFL (Test of English as a Foreign Language)</p>
                      </td>
                        <td>
                          <div class="form-group">
                            <div class="input-group mb-3">
                            <input type="date" class="form-control" placeholder="Date of Birth">
                            </div>
                        </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="score">
                            </div>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <tr>
                          <td>
                        <p>IELTS (International English Language Testing System)</p>
                        </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="date" class="form-control" placeholder="Date of Birth">
                              </div>
                          </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="score">
                              </div>
                          </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                        <p>GMAT (Graduate Management Admission Test)</p>
                        </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="date" class="form-control" placeholder="Date of Birth">
                              </div>
                          </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="score">
                              </div>
                          </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                        <p>GRE (Graduate Record Examination)</p>
                        </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="date" class="form-control" placeholder="Date of Birth">
                              </div>
                          </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="score">
                              </div>
                          </div>
                          </td>
                        </tr>
                    </tbody>
                  </table>
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