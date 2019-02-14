<?php include('static/inc/header.php'); ?>
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
        <form method="post" action="static/php/visa-form.php" enctype="multipart/form-data">
            <h1 class="py-2">Personal Information</h1>
            <div class="row justify-content-center"> <!-- row starts-->
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">First Name</label>
                          <input type='text' name="first_name" class="form-control" placeholder="* Family Name"
                          value="<?php echo isset($_POST['first_name']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Middle Name</label>
                          <input type='text' name="middle_name" class="form-control" placeholder="*Name at Birth"
                          value="<?php echo isset($_POST['middle_name']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Last Name</label>
                          <input type='text' name="last_name" class="form-control" placeholder="*Given Name"
                          value="<?php echo isset($_POST['last_name']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <label for="">Receivers Name/Organisation</label>
                      <input type="date" class="form-control" name="receivers_name" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"
                      value="<?php echo isset($_POST['receivers_name']) ? $name : ''; ?>" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Receiver's name(Person's Name)</label>
                          <input type='text' name="receiver_name" class="form-control" placeholder="*Given Name"
                          value="<?php echo isset($_POST['receiver_name']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Country</label>
                      <div class='input-group date' id='datetimepicker1'>
                      <?php include('static/inc/country.php'); ?>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row"> <!-- row starts-->
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Telephone Number</label>
                          <input type='tel' name="telephone_Number" class="form-control" placeholder="Telephone Number"
                          value="<?php echo isset($_POST['telephone_Number']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Email</label>
                          <input type='email' name="email" class="form-control" placeholder="*Valid Email" 
                          value="<?php echo isset($_POST['email']) ? $name : ''; ?>" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group">
                            <div class='input-group'>
                              <label for="">Marital Status</label>
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
                <div class="col-md-4">
                    <div class="form-group">
                        <div class='input-group'>
                          <label for="">National ID Number</label>
                            <input type='number' name="id_number" class="form-control" placeholder="*National ID number Where applicable"
                            value="<?php echo isset($_POST['id_number']) ? $name : ''; ?>"  />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group">
                            <div class='input-group'>
                                <label for="">Type of travel document</label>
                                <select type='select' name="travel_document" class="form-control" placeholder="*Valid Email">
                                <option value="ordinary Passport">ordinary Passport</option>
                                <option value="Diplomatic Passport">Diplomatic Passport</option>
                                <option value="Official passport">Official passport</option>
                                <option value="Special passport">Special passport</option>
                                <option value="other">other</option>
                            </select>
                            </div>
                        </div>
                </div>
              </div><!--row end -->

              <div class="row">
                <div class="col-md-6">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Click here if you wish to exercise your freedom of movement</label>
                  </div>
                </div>
            </div><!--row end -->
            <div class="row"><!--row-star-->
              <div class="col">
                <h6>In exercising their right to freedom of movement, family members are not obliged to provide information concerning their occupation, reference or the financing of their stay. If you belong to this category and you do not wish to provide any information, please select "Yes". You must submit documentary evidence of your family relationship.</h5>
              </div>
        </div>
        <h1 class="py-2">occupation</h1>
        
        <div class="row">
                <div class="col-md-6">
                  <p>Your current occupation/ your field of expertise/ your last Job</p>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Occupation</label>
                          <input type='text' name="occupation" class="form-control" placeholder="*Your current occupation"
                          value="<?php echo isset($_POST['occupation']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
        </div>
        <h1 class="py-2"> Contact Information</h1>
        <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Street Number</label>
                          <input type='text' name="street_number" class="form-control" placeholder=" street"
                          value="<?php echo isset($_POST['street_number']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">House Number</label>
                          <input type='text' name="house_number" class="form-control" placeholder="House Number"
                          value="<?php echo isset($_POST['house_number']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Other Address Infos</label>
                          <input type='text' name="other_address" class="form-control" placeholder="Other address infos" 
                          value="<?php echo isset($_POST['other_address']) ? $name : ''; ?>" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <label for="">Recipient username</label>
                      <input type="text" name="recipient_name" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Recipient Country</label>
                      <div class='input-group date' id='datetimepicker1'>
                      <?php include('static/inc/country.php'); ?>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row"> <!--row starts-->
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">recipient telephone Number</label>
                          <input type='tel' name="telephone_Number" class="form-control" placeholder="*Telephone Number"
                          value="<?php echo isset($_POST['telepone_Number']) ? $name : ''; ?>"  />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                        <label for="">Recipient Email</label>
                          <input type='email' name="recipient_email" class="form-control" placeholder="*Reachable email address" 
                          value="<?php echo isset($_POST['recipient_email']) ? $name : ''; ?>" />
                      </div>
                  </div>
                </div>
              </div> <!--row ends-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Is your residence in a country other than your current Nationality</label>
                  </div>
                </div>
            </div><!--row end -->
        <h1 class="py-2">Support Documents</h1>
        <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <label for="">Your Travel document</label>
                      <input type="text" name="travel_document" class="form-control" placeholder="passport" aria-describedby="basic-addon2"
                      value="<?php echo isset($_POST['travel_document']) ? $name : ''; ?>" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <label for="">Travel Doucment Number</label>
                      <input type="text" name="travel_doc_number" class="form-control" placeholder="Travel document Number" 
                      value="<?php echo isset($_POST['travel_doc_number']) ? $name : ''; ?>" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <label for="">National ID Number</label>
                      <input type="text" name="id_number1" class="form-control" placeholder="National ID number"
                      value="<?php echo isset($_POST['id_number1']) ? $name : ''; ?>" />
                      </div>
                  </div>
                </div>
              </div>
        <div class="row">
          <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-3">
                  <label for="">Identification Document issuer</label>
                <input type="text" name="issued_by" class="form-control" placeholder="Issued By"
                value="<?php echo isset($_POST['issued_by']) ? $name : ''; ?>" />
                </div>
            </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-3">
                  <label for="">Referecences</label>
                <input type="text" name="references" class="form-control" placeholder="Reference"
                value="<?php echo isset($_POST['references']) ? $name : ''; ?>" />
                </div>
            </div>
          </div>
        </div>

        <h1 class="py-2">Biometric Data</h1>
        <div class="row">
                <div class="col-md-6">
                  <p>Have your fingerprints been collected previously for the purpose of applying for a Schengen Visa? If yes</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group mb-3">
                      <input type="date" class="form-control" placeholder="if Known" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                </div>
        </div>
        </div>
        <h1 class="py-2">Travel Information</h1>
        <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <label for="">Purpose of journey</label>
                      <input type="text" name="journey_purpose" class="form-control" placeholder="Main purpose of journey"
                      value="<?php echo isset($_POST['journey_purpose']) ? $name : ''; ?>" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <label for="">Other purpose</label>
                      <input type="text" name="other_purpose" class="form-control" placeholder="Other(please specify)" 
                      value="<?php echo isset($_POST['other_purpose']) ? $name : ''; ?>" >
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <label for="">Member state of first Entry</label>
                      <input type="text" name="member_state" class="form-control" placeholder="Member State of first entry"
                      value="<?php echo isset($_POST['member_state']) ? $name : ''; ?>" />
                      </div>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <label for="">Minimum travel Destinations</label>
                    <input type="text" name="min_travel" class="form-control" placeholder="Min travel destinations"
                    value="<?php echo isset($_POST['min_travel']) ? $name : ''; ?>"  />
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <label for="">Departure Date</label>
                    <input type="date" name="departure_date" class="form-control" placeholder="internded date of departure"
                    value="<?php echo isset($_POST['departure_date']) ? $name : ''; ?>" />
                    </div>
                </div>
              </div>
        </div>
        <div class="row">
          <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-3">
                  <label for="">Arrival Date</label>
                <input type="date" name="arrival_date" class="form-control" placeholder="internded date of arrival" 
                value="<?php echo isset($_POST['arrival_date']) ? $name : ''; ?>" />
                </div>
            </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-3">
                  <label for="">Duration of transit(Days)</label>
                <input type="text" name="transit_days" class="form-control" placeholder="Duration of transit(days)"
                value="<?php echo isset($_POST['transit_days']) ? $name : ''; ?>" />
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Have you been issued with a Schengen visa within the last three years</label>
            </div>
          </div>
      </div>
      <h2 class="py-2">Entry permit for the final country of destination where applicable</h2>
      <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <label for="">Type of Entry permit</label>
                  <input type="text" name="entry_type" class="form-control" placeholder="Type of entery permit" 
                  value="<?php echo isset($_POST['entry_type']) ? $name : ''; ?>" />
                  </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <label for="">Entry permits(if not included)</label>
                  <input type="text" name="entry_permit" class="form-control" placeholder="Entry permit(if not included)" >
                  </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <label for="">Entry permit</label>
                  <input type="number" name="permit_number" class="form-control" placeholder="Entry permit Number"
                  value="<?php echo isset($_POST['permit_number']) ? $name : ''; ?>" />
                  </div>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-3">
                  <label for="">Destination Country</label>
                <?php include('static/inc/country.php'); ?>
                </div>
            </div>
          </div>

    </div>
    <div class="row">
      <div class="col-md-4">
          <div class="form-group">
            <div class="input-group mb-3">
                <label for="">Issue athority</label>
            <input type="text" name="issue_authority" class="form-control" placeholder="Issued By:" 
            value="<?php echo isset($_POST['issue_authority']) ? $name : ''; ?>" />
            </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="form-group">
            <div class="input-group mb-3">
                <label for="">Valid from</label>
            <input type="date" class="form-control" name="valid_from" placeholder="Valid From" 
            value="<?php echo isset($_POST['valide_from']) ? $name : ''; ?>" />
            </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="form-group">
            <div class="input-group mb-3">
                <label for="">Until</label>
            <input type="date" class="form-control" name="valid_till" placeholder="Valid till" 
            value="<?php echo isset($_POST['valid_till']) ? $name : ''; ?>" />
            </div>
        </div>
      </div>
      <div class="col-md-4">
            <div class="form-group">
              <div class="input-group mb-3">
                      <label for="">Pickup Date</label>
              <input type="date" name="recipient_date" class="form-control" placeholder="*Name" 
              value="<?php echo isset($_POST['recipient_date']) ? $name : ''; ?>" >
              </div>
          </div>
      </div>
      <div class="col-md-4">
            <div class="form-group">
              <div class="input-group mb-3">
                    <label for="">Telephone Number of inviting person</label>
              <input type="text" name="recipient_telephoneNumber" class="form-control" placeholder="*Telephone number" 
              value="<?php echo isset($_POST['recipient_telephoneNumber']) ? $name : ''; ?>" />
              </div>
          </div>
      </div>
    </div>
    <hr>
    <div class="row">
        <h3>Cost of travelling and living during applicant's stay is covered</h3>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">By the applicant himself/herself</label>
                </div>
          </div>
        </div>
        <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">By a sponsor (host, company, organisation)</label>
                    </div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Means of support</label>
                <div class='input-group'>
                    <select type='text' name="support_means" class="form-control" placeholder="Referecences" />
                    <option value="cash"> Cash</option>
                    <option value="travela check"> travela check</option>
                    <option value="Credit card"> Credit card</option>
                    <option value="prepaid accomodation"> prepaid accomodation</option>
                    <option value="prepaid transport"> prepaid transport</option>
                    <option value="other"> other</option>
                </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
                <div class="form-group">
                    <label for="">Means of sponsor support</label>
                    <div class='input-group'>
                        <select type='text'name="support_means" class="form-control" placeholder="Referecences" />
                        <option value="cash"> Cash</option>
                        <option value=" accomodation provided">  accomodation provided</option>
                        <option value="prepaid transport"> prepaid transport</option>
                        <option value="other"> other</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Family relationship with EU, EEA or CH citizen</label>
                        <div class='input-group'>
                            <select type='text' class="form-control" placeholder="Referecences" />
                            <option value="cash"> Cash</option>
                            <option value="spouse">spouse</option>
                            <option value="child"> child</option>
                            <option value="Grand Child"> Grand Child</option>
                            <option value="dependent ascendant"> dependent ascendant</option>
                        </select>
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
              <button type="" class="btn btn-theme float-right">Save Form</button>
            </div>
          </div>
        </form>
      </div>

    </section>
    <!-- / -->

  </main> 
      
  <?php include 'static/inc/footer.php'; ?>