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
                <h3>Blog</h3>
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
                  <h3>Blog Creation</h3>
                </div>

                <div class="card-body">

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" for="inpt">Enter Blog Name</label>
                        <input 
                          class="form-control" 
                          style="border: 1px solid #e0dddd" 
                          id="inpt1"
                          placeholder="Ex: Mornig Blog">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" for="inpt">Blog Link(URL)</label>
                        <input 
                          class="form-control" 
                          type="url" 
                          style="border: 1px solid #e0dddd" 
                          id="inpt2"
                          placeholder="Ex: www.blog.com">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label class="form-label" style="color:transparent;width:100%" id="dot">.</label>
                        <button class="btn btn-primary" id="addbtn" type="submit">Create Blog</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h3>All Blogs</h3>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="tbl">
                      <thead>
                        <tr>
                          <td>SNo</td>
                          <td>Blog Name</td>
                          <td>Blog Link</td>
                          <td>Action</td>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
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
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Action</h3>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-4">
                      <label class="form-label" for="editselect">Blog Name</label>
                      <input class="form-control" style="border: 1px solid #e0dddd" id="edit1">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label" for="edit">Enter Blog Url</label>
                      <input class="form-control" style="border: 1px solid #e0dddd" id="edit2">
                    </div>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-success" type="button" data-bs-dismiss="modal" onclick="editreq()">Edit</button>
              <button class="btn btn-danger" type="button" data-bs-dismiss="modal" onclick="deletereq()">Delete</button>
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
    <!--DataTable-->
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script> 

    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>  

    <!--Toster-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  

  <script>
    document.getElementById("addbtn").addEventListener("click", postreq);
    var data = [];
    var deleteid;
    var editname;
    var dataTable;

    function postreq() {  
      var inpt1 = $('#inpt1').val();
      var inpt2 = $('#inpt2').val();
      if(inpt1 == ''){
        toastr.error('Enter Blog name');
      } else if(inpt2 == '') {
        toastr.error('Entet Blog Url');
      } else {
        var fd = new FormData();
        fd.append('blog_name', inpt1);
        fd.append('blog_link', inpt2);
        $.ajax({
          url: 'ajax/blog/blog_creation.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              $('#inpt1').val('');$('#inpt2').val('');fetchdata();
              fetchdata();
            } else if (result.status == 'Available') {
              toastr.error(result.remarks);
            } else {
              toastr.error('Sry, Error with the Backend');
            }
          }
        })
      }
    }

    function fetchdata(){
      $.ajax({
      url: 'ajax/blog/blog_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        data = result.data;
        var count = 0; var temp = [];
        data.map(obj => {
          var tryed = `
                <i
                  onclick="setid('${obj.id}','${obj.blog_name}','${obj.blog_link}')" 
                  data-feather="edit-2" 
                  data-bs-toggle="modal" 
                  data-original-title="test"
                  data-bs-target="#exampleModal"
                  style="cursor:pointer">
                </i>`;
          var lnk = `
                    <button class="lnk" onclick="window.open('${obj.blog_link}')">${obj.blog_link}</button>`;
          temp.push(
            {
              'count': ++count,
              'b_name': obj.blog_name, 
              'b_link': lnk,
              'action': tryed})
          });
          if(dataTable){
            dataTable.destroy();
          }
        dataTable = $('#tbl').DataTable({
        "pageLength": 10,
        "columns": [
          {"data": "count"},  
          {"data": "b_name"},
          {"data": "b_link"}, 
          {"data": "action"}  
        ]
        });
        dataTable.clear().rows.add(temp).draw();
        feather.replace();
      }
    })
    };fetchdata();

    function editreq() {  
      var inpt1 = $('#edit1').val();
      var inpt2 = $('#edit2').val();
      if(inpt1 == ''){
        toastr.error('Enter Blog name');
      } else if(inpt2 == '') {
        toastr.error('Entet Blog Url');
      } else {
        var fd = new FormData();
        fd.append('id', deleteid);
        fd.append('blog_name', inpt1);
        fd.append('blog_link', inpt2);
        $.ajax({
          url: 'ajax/blog/blog_edit.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              $('#edit1').val('');$('#edit2').val('');
              fetchdata();
            } else {
              toastr.error('Sry, Error with the Backend');
            }
          }
        })
      }
    }

    function deletereq() {
      var fd = new FormData();
      fd.append('id', deleteid);
      $.ajax({
        url: 'ajax/blog/blog_remove.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function (response) {
          var result = JSON.parse(response);
          if(result.status == 'Success'){
              toastr.success(result.remarks);
              setid('');fetchdata();
          } else {
            toastr.error('Sry, Error with the Backend');
          }
        }
      })
    }

    function setid(id, name, link) {
      deleteid = id; 
      document.getElementById('edit1').value = name;
      document.getElementById('edit2').value = link; 
    }

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
    .ho{
      cursor: pointer;
    }
    @media only screen and (max-width: 991px) {
      #dot{
        display: none;
      }
    }
    .lnk{
      background: transparent;
      color:  blue !important;
      border: none;
    }
</style>

</body>

</html>