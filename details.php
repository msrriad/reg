<?php require_once 'classes/Service.php'; $service = new Services; ?>
<?php require_once 'header.php'; ?>
    <!-- Begin page content -->
    <div class="container">
      
      <?php if(!empty($_REQUEST['id']) && $student = $service->getStudentById($_REQUEST['id'])){ ?>
        <div class="page-header">
          <h3>Details of <?php echo $student['first_name']. ' '.$student['last_name']; ?></h3>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <?php if($student['image_url']){ ?>
              <div class="profile-picture">
                <img src="uploads/<?php echo $student['image_url']; ?>" alt="" class="img-thumbnail">
              </div>
            <?php } ?>

            <table class="table table-striped">
              <tr>
                <th>Name</th>
                <td><?php echo $student['first_name']. ' '.$student['last_name']; ?></td>
              </tr>
              <tr>
                <th>Email</th>
                <td><?php echo $student['email_address']; ?></td>
              </tr>
              <tr>
                <th>Father's name</th>
                <td><?php echo $student['father_name']; ?></td>
              </tr>
              <tr>
                <th>Mother's</th>
                <td><?php echo $student['mother_name']; ?></td>
              </tr>
              <tr>
                <th>Permanent address</th>
                <td><?php echo $student['permanent_address']; ?></td>
              </tr>
              <tr>
                <th>Present address</th>
                <td><?php echo $student['present_address']; ?></td>
              </tr>
              <tr>
                <th>Phone</th>
                <td><?php echo $student['contact_number']; ?></td>
              </tr>
              <tr>
                <th>Passing year (SSC)</th>
                <td><?php echo $student['passing_year_ssc']; ?></td>
              </tr>
              <tr>
                <th>Educational qualification</th>
                <td><?php echo $student['educational_qualification']; ?></td>
              </tr>
              <tr>
                <th>Last studied class & year</th>
                <td><?php echo $student['last_studied_class']. ' '.$student['last_studied_year'] ; ?></td>
              </tr>
              <tr>
                <th>Short description of professional life</th>
                <td><?php echo $student['professional_life_description']; ?></td>
              </tr>
              <tr>
                <th>Contribution details from any vital sector</th>
                <td><?php echo $student['contributions']; ?></td>
              </tr>
              <tr>
                <th>Number of guests</th>
                <td><?php echo ($student['guest_number']) ? $student['guest_number'] : 'None'; ?></td>
              </tr>
              <tr>
                <th>Amount</th>
                <td><?php echo $student['amount']; ?></td>
              </tr>
              <tr>
                <th>Deposit no. or transaction ID</th>
                <td><?php echo $student['transaction_id']; ?></td>
              </tr>
              <tr>
                <th>Payment Source</th>
                <td><?php echo $student['payment_source']; ?></td>
              </tr>
            </table>
          </div>
        </div>




      <?php }else{ ?>
        <p>Nothing found!</p>
      <?php } ?>

    </div>
<?php require_once 'footer.php'; ?>

