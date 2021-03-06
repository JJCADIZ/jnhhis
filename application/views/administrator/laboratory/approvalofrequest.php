<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4>LABORATORY REQUEST<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                    <td>Request #</td>
                    <td>Date Added</td>
                    <td>Check-In #</td>
                    <td>Patient</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
              <?php
              foreach($laboratoryreq as $labreq){
                echo "<tr>";
                echo"<td>".$labreq['lab_id']."</td>";
                echo"<td>".$labreq['lab_date_req']."</td>";
                echo"<td>".$labreq['lab_patient_checkin']."</td>";
                echo"<td>".$labreq['first_name']." ".$labreq['last_name']."</td>";
                if($labreq['lab_status']==1){
                echo "<td>For Approval</td>";
              } elseif ($labreq['lab_status']==2) {
                echo "<td>Approved</td>";
              } else {
                echo "<td>Cancelled</td>";
              }
                echo "<td>";
                  echo "<a href='".base_url()."Admin/ShowLabReq/".$labreq['lab_id']."' role='button' class='btn btn-default btn-xs'>Show</a>";
                  echo " <a href='".base_url()."Admin/ApproveLabReq/".$labreq['lab_id']."' role='button' class='btn btn-default btn-xs'>Approve</a>";
                  echo " <a href='".base_url()."Admin/CancelLabReq/".$labreq['lab_id']."' role='button' class='btn btn-default btn-xs'>Cancel</a>";
                echo "</td>";
                echo "</tr>";
              }

              ?>
              </table>
          </section>
      </div>
    </div>
  </section>
</section>
