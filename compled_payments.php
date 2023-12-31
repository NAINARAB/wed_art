<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/koho/template/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 10:02:24 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedart</title>
  <!-- ico-font-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  <!--range picker-->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> 
  
</head>

<body>
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="loader"></div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include 'header.php'; ?>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <?php include 'sidebar.php'; ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>Payments Cleared</h3>
              </div>
            </div>
          </div>
        </div>


        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">

              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h3>Lead Types</h3>
                  </div>
                  <div class="card-body">
                    <div class="row mb-3" style="margin-left: 0.5em;">
                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead" id="wedding" checked type="radio" value="true" onchange="radioChange()">
                        <label class="form-check-label" for="wedding">General Photography</label>
                      </div>

                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead" id="baby" type="radio" value="false" onchange="radioChange()">
                        <label class="form-check-label" for="baby">Baby Photography</label>
                      </div>
                    </div>

                    

                    <div class="table-responsive">
                      <!-- class="table-responsive" -->
                      <table id="tbl">
                        <thead>
                          <tr style='text-align: center'>
                            <th scope="col">Quotation No</th>
                            <th scope="col">Lead No</th>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th>Blog</th>
                            <th>Blog Days</th>
                            <th>Total Amount</th>
                            <th>Pending Amount</th>
                            <th style="min-width: 100px;">Action</th>
                          </tr>
                        </thead>

                        <tbody>
                          <!--data-->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
      
        <!-- footer start-->
      <?php include 'footer.php'; ?>


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Payment History</h3>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <div class="table-responsive" id="pay_history">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Edit Payment</h3>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3" id="pay_history">
                    <label class="form-lable">Enter Total Amount</label>
                    <input class="form-control" id="tot_amt" value="0">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" type="button" data-bs-dismiss="modal" onclick="updateAmount()">Update Amount</button>
              <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Edit Payment</h3>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label class="form-lable">Enter Paid Amount</label>
                    <input class="form-control" id="paid_amt" value="0">
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="mb-3">
                    <label class="form-lable">Select Payment Method</label>
                    <select class="form-select" id="pay_meth">
                      <option value="BANK TRANSFER">Bank Transfer</option>
                      <option value="UPI">UPI</option>
                      <option value="CHECK">Check</option>
                      <option value="CASH">Cash</option>
                      <option value="DD">DD</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="mb-3">
                    <label class="form-lable">Enter Payment Remarks</label>
                    <input class="form-control" id="pay_remark" >
                  </div>
                </div>

                
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-success" type="button" data-bs-dismiss="modal" onclick="postNewPayment()">Post</button>
              <button class="btn btn-danger" type="button" data-bs-dismiss="modal" >Cancel</button>
            </div>
          </div>
        </div>
      </div>


      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>

    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
     
    
</body>




<script>
var lead;
var dataTable;
var editID;
var arrID;
var leads = [];
var newpayid;
function radioChange() {
    if (document.getElementById('wedding').checked) {
        lead = 'wedding';
    } else {
        lead = 'baby';
    }
    if (dataTable) {
        dataTable.destroy();
    }
    createTable();
}
radioChange();

function dispHistory(arg) {
    var clid = arg.getAttribute('id');
    console.log(clid);
    
    var temp_transaction_data; 
    leads.forEach(obj => {
        if (obj.id == clid) {
            temp_transaction_data = obj.history;
        }
    });

    var divid = document.getElementById('pay_history');
    var table = `
        <table class="table table-lg">
            <thead>
                <tr>
                    <td>Date</td>
                    <td>Paid Amount</td>
                    <td>Payment Method</td>
                    <td>Remarks</td>
                </tr>
            </thead>
            <tbody>
                ${temp_transaction_data.map(hob => {
                    return `
                        <tr>
                            <td>${hob.date}</td>
                            <td>${hob.paid_amount}</td>
                            <td>${hob.payment_method}</td>
                            <td>${hob.payment_remarks}</td>
                        </tr>`;
                }).join('')}
            </tbody>
        </table>`;
    divid.innerHTML = table;
}


function setid(id, amount){
  document.getElementById('tot_amt').value = amount;
  editID = id; 
}

function setaddpay(ar){
  newpayid = ar;
}


function createTable() {
  
    dataTable = $('#tbl').DataTable({
        "pageLength": 10
    });
    var fd = new FormData();
    fd.append('lead', lead)
    $.ajax({
        url: 'ajax/lead_closing/closed_lead_list.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response) {
            var result = JSON.parse(response);
            leads = result.data;
            var dataTableData = [];
            leads.forEach(obj => {
                    var paid = 0;
                    obj.history.forEach(ob => {
                        paid += parseInt(ob.paid_amount);
                    });
                    
                    var pend;  
                    if(obj.amount >= paid){
                      pend = parseInt(obj.amount) - paid;
                    } else {
                      var st = paid - parseInt(obj.amount);
                      pend = st + " - Extra Paid";
                    }
                    var dataRow = [
                        obj.id,
                        obj.lead_id,
                        obj.name,
                        obj.phone,
                        obj.blog_name,
                        obj.days_count,
                        obj.amount,
                        pend,
                        `<i 
                          data-bs-toggle="modal" data-original-title="test"
                          data-bs-target="#exampleModal" 
                          data-feather="list"
                          id="${obj.id}"
                          onclick="dispHistory(this)"
                          style="cursor: pointer"></i>`,
                    ];
                    if(obj.amount <= paid){
                      dataTableData.push(dataRow);
                    }
                });
            dataTable.clear().rows.add(dataTableData).draw();
            feather.replace();
        }
    });
}

function postNewPayment(){
  var pay_amt =    $('#paid_amt').val();
  var pay_method = $('#pay_meth').val();
  var pay_remark = $('#pay_remark').val();
  var fd = new FormData();
    if(pay_amt == '')
      {
        toastr.error('Enter Paid Amount');
      }
    else if (pay_method == ''){
      toastr.error('Select Payment Method');
    }
      else
      {
        fd.append('closed_leads_id', newpayid);
        fd.append('paid_amount', pay_amt);
        fd.append('payment_method', pay_method);
        fd.append('payment_remarks', pay_remark);
        $.ajax({
          url: 'ajax/lead_closing/payment_details_update.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              radioChange();
              newpayid= '';
              $('#paid_amt').val('');
              $('#pay_meth').val('');
              $('#pay_remark').val('');
            } else {
              toastr.error('Sry, Error with the Backend');
            }
          }
        })
      }
}

function updateAmount(){
  var totamt = $('#tot_amt').val();
  var fd = new FormData();
  if(totamt == '')
      {
        toastr.error('Enter Total Amount');
      }
      else
      {
        fd.append('amount', totamt);
        fd.append('id', editID)
        $.ajax({
          url: 'ajax/lead_closing/closing_lead_amount_update.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              radioChange();
              $('#tot_amt').val('');
            } else {
              toastr.error('Sry, Error with the Backend');
            }
          }
        })
      }
}


document.addEventListener('click', function(event) {
    if (event.target && event.target.classList.contains('edit-icon')) {
        var leadData = event.target.getAttribute('data-lead');
        window.location.href = `/wedart/template/manage_lead.php?dat=${leadData}`;
    }

    if (event.target && event.target.classList.contains('follow-up-icon')) {
        var leadData = event.target.getAttribute('data-lead');
        window.location.href = `/wedart/template/follow_up_entry.php?dat=${leadData}`;
    }
});

const observer = new MutationObserver(function(mutationsList, observer) {
    feather.replace();
});
const config = { childList: true, subtree: true };
observer.observe(document.body, config);
</script>
<style>
  i {
    cursor: pointer !important;
  }
  i:hover{
    color: blue !important;
  }
</style>


</html>