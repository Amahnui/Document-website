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
        <form action="">
            <h1 class="py-2">Personal Information</h1>
            <div class="row justify-content-center"> <!-- row starts-->
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                          <input type='text' class="form-control" placeholder="* Family Name" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                          <input type='text' class="form-control" placeholder="*Name at Birth" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                          <input type='text' class="form-control" placeholder="*Given Name" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                      <input type="date" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                          <input type='text' class="form-control" placeholder="*Given Name" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
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
                          <input type='tel' class="form-control" placeholder="Telephone Number" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                          <input type='email' class="form-control" placeholder="*Valid Email" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group">
                            <div class='input-group'>
                                <select type='select' class="form-control" placeholder="*Valid Email">
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
                            <input type='number' class="form-control" placeholder="*National ID number Where applicable" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group">
                            <div class='input-group'>
                                <label for="">Type of travel document</label>
                                <select type='select' class="form-control" placeholder="*Valid Email">
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
                          <input type='text' class="form-control" placeholder="*Your current occupation" />
                      </div>
                  </div>
                </div>
        </div>
        <h1 class="py-2"> Contact Information</h1>
        <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                          <input type='text' class="form-control" placeholder=" street" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                          <input type='text' class="form-control" placeholder="House Number" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                          <input type='text' class="form-control" placeholder="Other address infos" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                          <input type='text' class="form-control" placeholder="*Given Name" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
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
                          <input type='tel' class="form-control" placeholder="*Telephone Number" />
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class='input-group'>
                          <input type='email' class="form-control" placeholder="*Reachable email address" />
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
                      <input type="text" class="form-control" placeholder=" Travel document" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Travel document Number" >
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="National ID number">
                      </div>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group mb-3">
                    <input type="date" class="form-control" placeholder="Valid Form" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group mb-3">
                    <input type="date" class="form-control" placeholder="Valid until" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                </div>
              </div>

        </div>
        <div class="row">
          <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Issued By">
                </div>
            </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Reference">
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
                      <input type="text" class="form-control" placeholder="Main purpose of journey" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Other(please specify)" >
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Member State of first entry">
                      </div>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Min travel destinations" ></input>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group mb-3">
                    <input type="date" class="form-control" placeholder="internded date of departure" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                </div>
              </div>
        </div>
        <div class="row">
          <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-3">
                <input type="date" class="form-control" placeholder="internded date of arrival" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Duration of transit(days)">
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
                  <input type="text" class="form-control" placeholder="Type of entery permit" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Entry permit(if not included)" >
                  </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <div class="input-group mb-3">
                  <input type="number" class="form-control" placeholder="Entry permit Number">
                  </div>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-3">
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
            <input type="text" class="form-control" placeholder="Issued By:">
            </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="form-group">
            <div class="input-group mb-3">
                <label for="">Valid from</label>
            <input type="date" class="form-control" placeholder="Valid From" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="form-group">
            <div class="input-group mb-3">
                    <label for="">Until</label>
            <input type="date" class="form-control" placeholder="Valid till" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
        </div>
      </div>
      <div class="col-md-4">
            <div class="form-group">
              <div class="input-group mb-3">
                      <label for="">Name of inviting person</label>
              <input type="text" class="form-control" placeholder="*Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
          </div>
      </div>
      <div class="col-md-4">
            <div class="form-group">
              <div class="input-group mb-3">
                    <label for="">Telephone Number of inviting person</label>
              <input type="text" class="form-control" placeholder="*Telephone number" aria-label="Recipient's username" aria-describedby="basic-addon2">
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
                    <select type='text' class="form-control" placeholder="Referecences" />
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
                        <select type='text' class="form-control" placeholder="Referecences" />
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
                      <input type='text' class="form-control" placeholder="Referecences" />
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