<?php require_once 'classes/Service.php'; $service = new Services; ?>
<?php require_once 'header.php'; ?>
    <!-- Begin page content -->
    <div class="container">
      
      <?php if(!empty($_REQUEST['token']) && $student = $service->getStudentByToken($_REQUEST['token'])){ ?>

        <?php if($student['is_verified'] === 'Yes'){ ?>
          
          <div class="row">
            <div class="col-lg-12">
              <div class="receipt gradient">

                <div class="recipt-header">
                  <div class="row">
                    <div class="col-xs-3">
                      <img src="images/logo.png" alt="logo"><br/><br/><br/><br/>
                      <strong>নিবন্ধন নং -</strong> <?php echo $student['id']; ?>
                    </div>
                    <div class="col-xs-6">
                      <div class="school-name">
                        <span>আল্লাহ্‌ সর্বশক্তিমান</span><br/>
                        <div>
                          শতবর্ষ পূর্তি উদযাপন নিবন্ধনপত্র<br/>
                          ঈশ্বরগঞ্জ বিশ্বেশ্বরী পাইলট উচ্চ বিদ্যালয়
                        </div>
                        <span class="location">ঈশ্বরগঞ্জ, ময়মনসিংহ</span>
                      </div>
                    </div>
                    <div class="col-xs-3">
                      <br/><br/><br/><br/><br/><br/><br/>
                      তারিখ - <?php echo @date('jS, m, Y', $student['created_at']); ?>
                    </div>
                  </div>
                </div>

                <table class="table table-condensed">
                  <tr>
                    <th>নিবন্ধনকারীর নামঃ </th>
                    <td colspan="3"><?php echo $student['first_name'].' '.$student['last_name']; ?></td>
                  </tr>

                  <tr>
                    <th>নিবন্ধন ফিঃ </th>
                    <td><?php echo ($student['amount'] - ($student['guest_number'] * 200) ); ?></td>

                    <th>কথায়ঃ</th>
                    <td><?php echo $service->getInWords(($student['amount'] - ($student['guest_number'] * 200) )); ?></td>
                  </tr>

                  <tr>
                    <th>নিবন্ধনকারীর সাথে আগত অতিথি সংখ্যাঃ </th>
                    <td><?php echo $student['guest_number']; ?></td>

                    <th>অতিরিক্ত সদস্য ফিঃ</th>
                    <td><?php echo ($student['guest_number'] * 200); ?></td>
                  </tr>

                  <tr>
                    <th>মোট টাকাঃ </th>
                    <td><?php echo $student['amount']; ?></td>

                    <th>কথায়ঃ</th>
                    <td><?php echo $service->getInWords($student['amount']); ?></td>
                  </tr>
                </table> 

                <div class="receipt-footer">
                  <div class="row">
                    <div class="col-xs-6">
                      <p>
                        আবু বকর সিদ্দিক দুলাল <br/>
                        আহবায়ক <br/>
                        শতবর্ষ পূর্তি উদযাপন কমিটি
                      </p>
                    </div>
                    <div class="col-xs-6"><p class="right"><br/><br/>আদায়কারী</p></div>
                  </div>
                </div> 
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="print-button">
                <a href="javascript:void(0)" class="btn btn-danger btn-lg btn-print print-hide">Print</a>
              </div>
            </div>
          </div>
        <?php }else{ ?>
          <p>We didn't confirm your payment yet. Please contact with associates persion.</p>
        <?php } ?>

      <?php }else{ ?>
        <p>Nothing found!</p>
      <?php } ?>

    </div>
<?php require_once 'footer.php'; ?>

