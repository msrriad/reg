<?php require_once 'classes/Service.php'; $service = new Services; ?>
<?php require_once 'header.php'; ?>
<?php if( ($_SESSION['email'] != 'admin@bphs.com') && ($_SESSION['password'] != md5('secrete')) ){ header('Location: login.php'); } ?>
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h3>List of registered students</h3>
      </div>
      
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
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($service->getRegisteredStudents() as $student){ // echo '<pre>'; print_r($student); ?>
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
              <td>
                <?php if($student['is_verified'] === 'Yes'){ ?>
                  <button type="button" class="btn btn-success btn-xs" disabled="disabled">Verified</button>
                <?php }else{ ?>
                  <button type="button" data-id="<?php echo $student['id']; ?>" class="btn btn-danger btn-xs btn-verify">Verify</button>
                <?php } ?>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>


    </div>
<?php require_once 'footer.php'; ?>

