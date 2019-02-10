<?php include('static/inc/header.php'); ?>
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
        <form action="">
            <h1 class="py-2">Personal Information</h1>
            <div class="row"> <!-- row starts-->
                <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                                <input type='text' class="form-control" placeholder="First Name" />
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                                <input type='text' class="form-control" placeholder="Last Name" />
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                                <input type='tel' class="form-control" placeholder="Phone Number" />
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                                <input type='email' class="form-control" placeholder="*Email" />
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                                <input type='date' class="form-control" placeholder="Date of Birth" />
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                                <select type='date' class="form-control" placeholder="Sex" />
                                <option value="M">Male</option>
                                <option value="F">FeMale</option>
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group'>
                                <select type='date' class="form-control" placeholder="Eye color" />
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
                                    <input type='number' class="form-control" placeholder="*Height" />
                                </div>
                            </div>
                          </div>
            </div>
            <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                              <input type='text' class="form-control" placeholder="Full Address">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                              <input type='text' class="form-control" placeholder="City" />
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                              <input type='text' class="form-control" placeholder="*State Region/Province">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class='input-group'>
                          <input type="zipcode" class="form-control" placeholder="zipcode">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group'>
                                <input type="occupation" class="form-control" placeholder="occupation">
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6">
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

            </div>
            <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12 py-2">
                          <div class="form-check justify-content-center">
                            <label class="form-check-label" for="defaultCheck1">Photo1</label>
                            <input class="form-control-file" type="file" value="" id="defaultCheck1">
                        </div>
                        </div>

                        <div class="col-md-12 py-2">
                          <div class="form-check justify-content-center">
                            <label class="form-check-label" for="defaultCheck1">photo2</label>
                            <input class="form-control-file" type="file" value="" id="defaultCheck1">
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