<?php require_once 'classes/Service.php'; $service = new Services; ?>
<?php require_once 'header.php'; ?>
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h3>Search result</h3>
      </div>

      
      <?php if(!empty($_REQUEST['token']) && $student = $service->getStudentByToken($_REQUEST['token'])){ ?>
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Transaction ID</th>
                  <th>Payment source</th>
                  <th>Amount</th>
                  <th>Guests</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><img src="uploads/<?php echo ($student['image_url']) ? $student['image_url'] : 'default.jpg'; ?>" alt="image" class="avatar"></th>
                  <td><?php echo $student['first_name']; ?></td>
                  <td><?php echo $student['last_name']; ?></td>
                  <td><?php echo $student['email_address']; ?></td>
                  <td><?php echo $student['contact_number']; ?></td>
                  <td><?php echo $student['transaction_id']; ?></td>
                  <td><?php echo $student['payment_source']; ?></td>
                  <td><?php echo $student['amount']; ?></td>
                  <td><?php echo $student['guest_number']; ?></td>
                  <td><?php echo ($student['is_verified'] === 'Yes') ? 'Yes' : 'No'; ?></td>
                </tr>
              </tbody>
            </table>
            <?php if($student['is_verified'] === 'Yes'){ ?>
              <a href="print.php?token=<?php echo $_REQUEST['token']; ?>" class="btn btn-small btn-info btn-receipt">Collect Your Receipt</a>
            <?php } ?>
          </div>
        </div>




      <?php }else{ ?>
        <p>Nothing found!</p>
      <?php } ?>

    </div>
<?php require_once 'footer.php'; ?>

