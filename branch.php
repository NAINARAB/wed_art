<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/koho/template/base-input.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 10:02:19 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedart</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
  <!-- ico-font-->
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
    <!-- Page Header Ends                              -->
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
                <h3>Branch</h3>
              </div>
            </div>
          </div>
        </div>

        <!--Raj Code-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h3>Branch Creation</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" for="inpt">Enter Branch</label>
                        <input class="form-control" style="border: 1px solid #e0dddd" id="inpt">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <label class="form-label" style="color:transparent">.</label>
                      <div>
                        <button class="btn btn-primary" id="addbtn" type="submit">Create Branch</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h3>All Branch</h3>
                </div>
                <div class="card-body" id="listdata">
                  
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
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Action</h3>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="edit">Branch Name</label>
                    <input class="form-control" style="border: 1px solid #e0dddd" id="edit">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" type="button" data-bs-dismiss="modal" onclick="editreq()">Edit</button>
              <button class="btn btn-danger" type="button" data-bs-dismiss="modal" onclick="deletesource()">Delete</button>
            </div>
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
  <script src="../assets/js/tooltip-init.js"></script>
  <!-- Theme js-->
  <script src="../assets/js/script.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script>
    document.getElementById("addbtn").addEventListener("click", postreq);
    var data;
    var deleteid;
    var editname;


    function postreq() {
      var inpt = $('#inpt').val();

      if(inpt == '')
      {
        toastr.error('Enter Branch');
      }
      else
      {
        var fd = new FormData();
        fd.append('branch', inpt);
        $.ajax({
          url: 'ajax/branch/branch_creation.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              $('#inpt').val('');fetchdata();
            } else if (result.status == 'Available') {
              toastr.error(result.remarks);
            } else {
              toastr.error('Sry, Error with the Backend');
            }
          }
        })
      }
      
    }

    function editreq() {
      var inpt = $('#edit').val();
      
      var fd = new FormData();
      fd.append('branch', inpt);
      fd.append('id',deleteid);
      $.ajax({
        url: 'ajax/branch/branch_edit.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function (response) {
          var result = JSON.parse(response);
          if (result.status == 'Success') {
            toastr.success(result.remarks);
            $('#edit').val('');fetchdata();
          } else if (result.status == 'Available') {
            toastr.error(result.remarks);
          } else {
            toastr.error('Sry, Error with the Backend');
          }
        }
        })
      
      
    }

    function deletesource() {
      var fd = new FormData();
      fd.append('id', deleteid);
      $.ajax({
        url: 'ajax/branch/branch_remove.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function (response) {
          var result = JSON.parse(response);
          if(result.status == 'Success')
          {
              toastr.success(result.remarks);
              setid('');fetchdata();
          } else
          {
            toastr.error('Sry, Error with the Backend');
          }
        }
      })
    }

    function setid(ob, name) {
      deleteid = ob; editname = name;
      document.getElementById('edit').value = name;
    }

    function fetchdata() {
      $.ajax({
      url: 'ajax/branch/branch_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        data = result.data;
        var mdv = document.createElement('div'); mdv.classList = 'bmain';
        mdv .innerHTML = 
          data.map(obj => (
            `<div 
                class="btag" 
                data-bs-toggle="modal" data-original-title="test"
                data-bs-target="#exampleModal" 
                onclick='setid("${obj.id}", "${obj.branch_name}")'>
                ${obj.branch_name} &nbsp; &nbsp; &nbsp;
                <i class="fa-solid fa-pen"></i>
              </div>`
          )).join('');
          document.getElementById('listdata').innerHTML = mdv.outerHTML;
          feather.replace()
      }
    })
    }fetchdata();
    const observer = new MutationObserver(function(mutationsList, observer) {
    feather.replace();
    });
    const config = { childList: true, subtree: true };
    observer.observe(document.body, config);
  </script>


<style>
  .badge:hover{
    cursor: pointer;
  }
  .bmain{
    box-sizing: border-box;
    display: flex;
    flex-wrap: wrap;
  }
  .btag{
    padding: 10px 25px; 
    border-radius: 30px;
    background-color: var(--theme-default) !important;
    color: #fff;
    margin-right:10px;
    margin-bottom: 10px;
    display: flex;
    min-width:fit-content;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }
</style>

</body>

</html>