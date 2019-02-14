<?php include('static/inc/header.php'); ?>
 <!-- Main -->
 <main>

    <section class="page-title-section theme-bg">
      <div class="container">
        <div class="page-title">
          <h1>Passport Application form</h1>
          <ol class="breadcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active">FAQ's</li>
          </ol>
        </div>
      </div>
    </section>

    <section class="section gray-bg">
      <div class="container">
        <form method="post" action="static/php/passport-form.php" enctype="multipart/form-data">
            <h1 class="py-2">Personal Information </h1>
        <div class="row">
            
        <div class="col-md-4">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="32-pages" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Passport(32 Pages)</label>
                    </div>
              </div>
        </div>
        <div class="col-md-4">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="48-pages" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Passport(48 pages)</label>
                    </div>
              </div>
        </div>
        <div class="col-md-4">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="express" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Express Service</label>
                    </div>
              </div>
        </div>
    </div>
    <hr>
    <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <p>Travel Document</p>
                        <div class="form-check">
                            <input class="form-check-input" name="temp_id" type="checkbox" value="" id="defaultCheck1">
                            <label for="">National Identity card</label>
                        </div>
                  </div>
            </div>
    </div> 
    <div class="row">
            <div class="col-md-6">
                    <div class="form-group">    
                        <label class="form-check-label" for="defaultCheck1">Amendment to a passport/ID card</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        </div>
                  </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="travel_passport" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Travel permit in lieu of a passport</label>
                        </div>
                  </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="*First Name" aria-label="first name" 
                        value="<?php echo isset($_POST['first_name']) ? $name : ''; ?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                        <div class="input-group mb-3">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="*last Name" aria-label="last name"
                            value="<?php echo isset($_POST['last_name']) ? $name : ''; ?>" />
                        </div>
                </div>
            </div>
             <div class="col-md-4">
                 <div class="form-group">
                        <div class="input-group mb-3">
                            <label for="">Date of Birth</label>
                            <input type="date" name="birth_date" class="form-control" placeholder="*Name" aria-label="last name"
                            value="<?php echo isset($_POST['birth_date']) ? $name : ''; ?>" />
                        </div>
                 </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                        <div class="input-group mb-3">
                            <label for="">Place of Birth</label>
                            <input type="text" name="birth_place" class="form-control" placeholder="*place of birth" aria-label="Place of Birth"
                            value="<?php echo isset($_POST['birth_place']) ? $name : ''; ?>" />
                        </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                        <div class="input-group mb-3">
                            <label for="">Height</label>
                            <input type="number" name="height" class="form-control" placeholder="height" aria-label="Place of Birth"
                            value="<?php echo isset($_POST['height']) ? $name : ''; ?>" />
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                        <div class='input-group'>
                        <label for=""> Eye color</label>
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
            <div class="col-md-4">
                <div class="form-group">
                        <div class='input-group'>
                        <label for=""> Sex</label>
                            <select type='text' name="sex" class="form-control" placeholder="Eye color" />
                            <option value="">Male</option>
                            <option value="M">Female</option>
                            </select>
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class='input-group'>
                        <label for="">Religious Name or artist Name</label>
                        <input type='text' name="nickname" class="form-control" placeholder="Eye color"
                        value="<?php echo isset($_POST['nickname']) ? $name : ''; ?>"  />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                        <div class='input-group'>
                            <label for="">Doctoral Degree</label>
                            <input type='text' name="title" class="form-control" placeholder="Doctoral Degree"
                            value="<?php echo isset($_POST['title']) ? $name : ''; ?>"  />
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                        <div class='input-group'>
                            <label for="">Occupation</label>
                            <input type='text' name="occupation" class="form-control" placeholder="Doctoral Degree"
                            value="<?php echo isset($_POST['occupation']) ? $name : ''; ?>"  />
                        </div>
                    </div>
            </div>

    </div> 
    <hr>
    <div class="row">
        <div class="col">
            <h3> Marital Status</h3>
        </div>       
    </div>
    <div class="row">
        
            <div class="col-md-4">
                    <div class="form-group">
                            <div class='input-group'>
                            <label for=""> Marital Status</label>
                                <select type='date' name="marital_status" class="form-control" placeholder="marital status" />
                                <option value="Sin">Single</option>
                                <option value="Mar">Married</option>
                                <option value="Div">Divorced</option>
                                <option value="Wid">Widowed</option>
                                <option value="sep">Seperated</option>
                                <option value="D">Divorced</option>
                                </select>
                            </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                        <div class='input-group'>
                            <label for="">Marriage Place</label>
                            <input type='text' name="marriage_place" class="form-control" placeholder="place"
                            value="<?php echo isset($_POST['marriage_place']) ? $name : ''; ?>"  />
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                        <div class='input-group'>
                            <label for="">since</label>
                            <input type='date' name="marriage_since" class="form-control" placeholder="" 
                            value="<?php echo isset($_POST['marriage_since']) ? $name : ''; ?>" />
                        </div>
                    </div>
            </div>
    </div>
    <div class="row">
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Town/city</label>
                        <div class='input-group'>
                            <input type='text' name="town" class="form-control" placeholder="Town/city"
                            value="<?php echo isset($_POST['town']) ? $name : ''; ?>"  />
                        </div>
                    </div>
                </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Street Address</label>
                    <div class='input-group'>
                        <input type='text' name="street" class="form-control" placeholder=" street" 
                        value="<?php echo isset($_POST['street']) ? $name : ''; ?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">House Number</label>
                    <div class='input-group'>
                        <input type='text' name="house_number" class="form-control" placeholder="House Number"
                        value="<?php echo isset($_POST['house_number']) ? $name : ''; ?>"  />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Telephone Number</label>
                    <div class='input-group'>
                        <input type='tel' name="telephone_Number" class="form-control" placeholder="*Telelphone" 
                        value="<?php echo isset($_POST['telephone_Number']) ? $name : ''; ?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fax</label>
                        <div class='input-group'>
                            <input type='number' name="fax" class="form-control" placeholder="*Fax"
                            value="<?php echo isset($_POST['fax']) ? $name : ''; ?>"  />
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Email</label>
                        <div class='input-group'>
                            <input type='email' name="email" class="form-control" placeholder="*your email"
                            value="<?php echo isset($_POST['email']) ? $name : ''; ?>"  />
                        </div>
                    </div>
            </div>
    </div> 
    <div class="row">
        <div class="col">
            <h3>Do you hold any other Citizenships?</h3>
        </div>
    </div> 
    <div class="row">
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Any other Citizenships?</label>
                        <div class='input-group'>
                            <select type='text' name="citizenship" class="form-control" placeholder="*Fax" />
                                <option value="y">Yes</option>
                                <option value="N">No</option>
                           </select>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="">If yes</label>
                        <div class='input-group'>
                            <input type='text' name="other_citizenship" class="form-control" placeholder="*which other citizenship?" 
                            value="<?php echo isset($_POST['other_citizenship']) ? $name : ''; ?>" />
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="">IF yes, Acquired by?</label>
                        <div class='input-group'>
                            <select type='text' name="acquired_by" class="form-control" placeholder="*Fax" />
                                <option value="birth">Birth</option>
                                <option value="Adoption">Adoption</option>
                                <option value="Marriage">Marriage</option>
                                <option value="own application">own application</option>
                                <option value="parents/guadians">parents/guadians</option>
                                <option value="other">other</option>
                           </select>
                        </div>
                    </div>
            </div>
    </div> 
    <div class="row">
        <div class="col">
            <h3>Have you applied for another citizenship?</h3>
        </div>
    </div> 
    <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">yes, I applied for another citizenship</label>
                        </div>
                  </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Citizenship on">
                        </div>
                  </div>
            </div> 
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Have you served in any foreign armed forces since 1 jan, 2000?</label>
                        <div class='input-group'>
                            <select type='text' class="form-control" placeholder="*Fax" />
                                <option value="yes">yes</option>
                                <option value="No">NO</option>
                           </select>
                        </div>
                    </div>
            </div>       
    </div> 
    <hr>
    <div class="row">
        <div class="col">
            <h3> Details of current German passport/Identity papers</h3>
        </div>
    </div>

    <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Current Geramn passport/ID papers</label>
                        <div class='input-group'>
                            <select type='text' name="current_document" class="form-control" placeholder="*Fax" />
                                <option value="passport">passport</option>
                                <option value="Identity card">Identity card</option>
                                <option value="Child's Passport">Child's Passport</option>
                                <option value="Child Identity card">Child Identity card</option>
                                <option value="Temporary Passport">Temporary Passport</option>
                                <option value="Temporary Identity card">Temporary Identity card</option>
                           </select>
                        </div>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="">Passport/ID card Number</label>
                            <input class="form-control" name="id_number" type="number" placeholder="Identification Number"
                            value="<?php echo isset($_POST['id_number']) ? $name : ''; ?>" />
                        </div>
                  </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="">Issued By</label>
                            <input class="form-control" name="issued_by" type="number" placeholder="Issued by"
                            value="<?php echo isset($_POST['issued_by']) ? $name : ''; ?>" />
                        </div>
                  </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="">Issued on</label>
                            <input class="form-control" name="issue_date" type="date" placeholder="Issued by"
                            value="<?php echo isset($_POST['issue_date']) ? $name : ''; ?>" />
                        </div>
                  </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="">Valid until</label>
                            <input class="form-control" name="expiry_date" type="date" placeholder="Issued by"
                            value="<?php echo isset($_POST['expiry_date']) ? $name : ''; ?>" />
                        </div>
                  </div>
            </div>  
    </div> 

    <div class="row">
        <div class="col">
            <p>please upload any other documents on a seperate sheet</p>
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