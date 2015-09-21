<?php require_once 'classes/Service.php'; $service = new Services; ?>

<?php require_once 'header.php'; ?>

    <!-- Begin page content -->
    <div class="container">

      <div class="inner cover">
          <div class="info show">
            <h1 class="cover-heading">Check Registration</h1>
          
            <div class="row">          
              <div class="col-lg-12">
                <div class="input-group">
                  <input type="text" name="search-value" class="form-control input-lg search-value" placeholder="input your token">
                  <span class="input-group-btn">
                    <button class="btn btn-info btn-lg btn-search" type="button">Go!</button>
                  </span>
                </div><!-- /input-group -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->

            <br/>
            
            <p class="lead">If you want to enroll click below.</p>
            <p class="lead">
              <a href="javascript:void(0);" class="btn btn-lg btn-default btn-toggle">Register Now!</a>
            </p>
          </div>
        </div>

        <div class="well hide">
          <a href="javascript:void(0);" class="close btn-toggle">&times;</a>
          
          <form action="ajax.php" method="post" class="registration-form" enctype="multipart/form-data">

            <h1 class="form-title">Registration Form</h1>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="first_name">First name</label>
                  <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First name" tabindex="1" required="" autofocus="">
                </div>

                <div class="form-group">
                  <label for="father_name">Father's name</label>
                  <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Father's name" tabindex="3" required="" autofocus="">
                </div>
              </div><!-- /.col-lg-6 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="last_name">Last name</label>
                  <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last name" tabindex="2" required="" autofocus="">
                </div>

                <div class="form-group">
                  <label for="mother_name">Mother's name</label>
                  <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="Mother's name" tabindex="4" required="" autofocus="">
                </div>
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="email_address">Email</label>
                  <input type="email" name="email_address" class="form-control" id="email_address" placeholder="Email" tabindex="5" required="" autofocus="">
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->

            <div class="row">          
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="permanent_address">Permanent address</label>
                  <textarea name="permanent_address" class="form-control" id="permanent_address" rows="3" placeholder="Permanent address" tabindex="6" required="" autofocus=""></textarea>
                </div>

                <div class="form-group">
                  <label for="passing_year_ssc">Passing year (SSC)</label>
                  <input type="number" name="passing_year_ssc" class="form-control" id="passing_year_ssc" placeholder="2005" tabindex="8" required="" autofocus="">
                </div>

                <div class="form-group">
                  <label for="last_studied_year">Last studied year</label>
                  <input type="number" name="last_studied_year" class="form-control" id="last_studied_year" placeholder="2005" tabindex="10" required="" autofocus="">
                </div>

                <div class="form-group">
                  <label for="professional_life_description">Short description of your professional life</label>
                  <textarea name="professional_life_description" class="form-control" id="professional_life_description" rows="3" placeholder="Short description of your professional life" tabindex="12" required="" autofocus=""></textarea>
                </div>

                <div class="form-group">
                  <label for="guest_number">No. of guests</label>
                  <select name="guest_number" class="form-control" id="guest_number" tabindex="14">
                    <option value="0">None</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="transaction_id">Deposit no. or transaction ID</label>
                  <input type="text" name="transaction_id" class="form-control" id="transaction_id" placeholder="3300865068" tabindex="16" required="" autofocus="">
                </div>
              </div><!-- /.col-lg-6 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="present_address">Present address</label>
                  <textarea name="present_address" class="form-control" id="present_address" rows="3" placeholder="Present address" tabindex="7" required="" autofocus=""></textarea>
                </div>

                <div class="form-group">
                  <label for="educational_qualification">Educational qualification</label>
                  <input type="text" name="educational_qualification" class="form-control" id="educational_qualification" placeholder="Computer engineer" tabindex="9" required="" autofocus="">
                </div>

                <div class="form-group">
                  <label for="last_studied_class">Last studied class</label>
                  <input type="text" name="last_studied_class" class="form-control" id="last_studied_class" placeholder="B.Sc" tabindex="11" required="" autofocus="">
                </div>

                <div class="form-group">
                  <label for="contributions">Contribution details from any vital sector</label>
                  <textarea name="contributions" class="form-control" id="contributions" rows="3" placeholder="Contribution details from any vital sector" tabindex="13" required="" autofocus=""></textarea>
                </div>

                <div class="form-group">
                  <label for="amount">Amount</label>
                  <input type="number" name="amount" min="500" class="form-control" id="amount" placeholder="500" tabindex="15" required="" autofocus="">
                </div>

                <div class="form-group">
                  <label for="contact_number">Phone</label>
                  <input type="text" name="contact_number" class="form-control" id="contact_number" placeholder="+8801914433307" tabindex="17" required="" autofocus="">
                </div>
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Payment source</label><br/>

                  <label class="radio-inline">
                    <input type="radio" name="payment_source" id="inlineRadio1" value="bKash" checked="checked" tabindex="18"> Bkash (01860505099)
                  </label><br/>
                  <label class="radio-inline">
                    <input type="radio" name="payment_source" id="inlineRadio1" value="Basic Bank" tabindex="19"> Basic Bank (IBPS Diamond Jubilee Celebration - 6614-01-0001383)
                  </label><br/>
                  <label class="radio-inline">
                    <input type="radio" name="payment_source" id="inlineRadio1" value="Direct" tabindex="20"> Direct
                  </label>
                </div>

                <div class="form-group">
                  <label for="file">Your photo</label>
                  <input type="file" name="image" id="file" tabindex="21">
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->

            <button type="submit" class="btn btn-primary btn-registration" tabindex="22">Submit</button>
          </form>

        </div>

    </div>
<?php require_once 'footer.php'; ?>

