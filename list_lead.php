<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/koho/template/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 10:02:24 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Koho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Koho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <title>Wedart</title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
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
    <div class="page-header">
      <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
          <div class="form-group w-100">
            <div class="Typeahead Typeahead--twitterUsers">
              <div class="u-posRelative">
                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Koho .." name="q" title="" autofocus>
                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
              </div>
              <div class="Typeahead-menu"></div>
            </div>
          </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
          <div class="logo-wrapper"><a href="index.html">
              <!-- <img height="40" width="140" src="wedart.jpeg" alt="er"> -->
            </a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
          <div class="input-group" style="background-color: transparent;">
            <img class="img-fluid for-light" height="40" width="110" src="wedart.jpeg" alt="">
          </div>
        </div>
        <div class="nav-right col-6 pull-right right-header p-0">
          <ul class="nav-menus">

            <li class="profile-nav onhover-dropdown p-0 me-0">
              <div class="d-flex profile-media"><img class="b-r-50" src="../assets/images/dashboard/profile.png" alt="">
                <div class="flex-grow-1"><span>Helen Walter</span>
                  <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <li><a href="login.php"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper">
        <div>
          <div class="logo-wrapper">
            <a href="index.html" data-bs-original-title="" title="">
              <img class="img-fluid for-light" style="opacity: 0;" src="../assets/images/logo/logo.png" alt="">
              <img class="img-fluid for-dark" style="opacity: 0;" src="../assets/images/logo/logo-dark.png" alt="">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left status_toggle middle sidebar-toggle">
                <line x1="17" y1="10" x2="3" y2="10"></line>
                <line x1="21" y1="6" x2="3" y2="6"></line>
                <line x1="21" y1="14" x2="3" y2="14"></line>
                <line x1="17" y1="18" x2="3" y2="18"></line>
              </svg>
            </div>
          </div>
          <div class="logo-icon-wrapper">
            <a href="index.html" data-bs-original-title="" title="">
              <img class="img-fluid for-light" style="opacity: 0;" src="../assets/images/logo/logo-icon.png" alt="">
              <img class="img-fluid for-dark" style="opacity: 0;" src="../assets/images/logo/logo-icon-dark.png" alt="">
            </a>
          </div>
          <nav class="sidebar-main">
            <div class="left-arrow disabled" id="left-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
              </svg>
            </div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar" data-simplebar="init" style="display: block;">
                <div class="simplebar-wrapper" style="margin: 0px 0px -30px;">
                  <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                  </div>
                  <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px;bottom: 0px;height: 100vh;">
                      <div class="simplebar-content-wrapper" style="height: auto;overflow: hidden scroll;height: 100vh !important;">
                        <div class="simplebar-content" style="padding: 0px 0px 30px;">

                          <li class="back-btn"><a href="index.html" data-bs-original-title="" title=""><img class="img-fluid for-light" src="../assets/images/logo/logo-icon.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo-icon-dark.png" alt=""></a>
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                          </li>

                          <li class="sidebar-main-title">
                            <div>
                              <h4>User Navigations</h4>
                            </div>
                          </li>

                          <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="database"></i><span>Master Data</span></a>
                            <ul class="sidebar-submenu">
                              <li><a href="source.php">Source</a></li>
                              <li><a href="service_category.php">Service Category</a></li>
                              <li><a href="service.php">Service</a></li>
                              <li><a href="additional_service.php">Additional Service</a></li>
                              <li><a href="branch.php">Branch</a></li>
                              <li><a href="users.php">Users</a></li>
                              <li><a href="blog_creation.php">Blogs</a></li>
                              <li><a href="day_creation.php">Blog Days</a></li>
                              <li><a href="general_settings.php">General Settings</a></li>
                            </ul>
                          </li>

                          <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="trending-up"></i><span>Leads</span></a>
                            <ul class="sidebar-submenu">
                              <li><a href="lead_creation.php">Lead Creation</a></li>
                              <li><a href="list_lead.php">Leads & Baby Studio</a></li>
                              <li><a href="today_follow_up.php">Today FollowUp</a></li>
                              <li><a href="closed_lead.php">Closed Leads</a></li>
                            </ul>
                          </li>

                          <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="dollar-sign"></i><span>Transactions</span></a>
                            <ul class="sidebar-submenu">
                              <li><a href="transaction_report.php">Transaction Reports</a></li>
                            </ul>
                          </li>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="simplebar-placeholder" style="width: auto; height: 2453px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                  <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                  <div class="simplebar-scrollbar" style="height: 2551px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                </div>
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </nav>
        </div>
      </div>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>FollowUp Leads</h3>
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
                    <div class="row" style="margin-left: 0.5em;">
                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead" id="wedding" checked type="radio" value="true" onchange="radioChange()">
                        <label class="form-check-label" for="wedding">Adult Studio</label>
                      </div>

                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead" id="baby" type="radio" value="false" onchange="radioChange()">
                        <label class="form-check-label" for="baby">Baby Studio</label>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <!-- class="table-responsive" -->
                      <table id="tbl">
                        <thead>
                          <tr style='text-align: center'>
                            <th scope="col">Lead No</th>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th id="th1"></th>
                            <th id="th2"></th>
                            <th id="th3"></th>
                            <th>Service</th>
                            <th>Status</th>
                            <th>Action</th>
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
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-10 p-0 footer-left">
                <p class="mb-0">Copyright 2022 © Wedart</p>
              </div>
              <div class="col-2 p-0 footer-right"> <i class="fa fa-heart font-danger"> </i></div>
            </div>
          </div>
        </footer>
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
    <!-- <script src="../assets/js/datatable/datatables/datatable.custom.js"></script> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>

    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
</body>
<script>
  var link;
  var dataTable;

  function radioChange() {
    if (document.getElementById('wedding').checked) {
      link = 'ajax/lead_creation/lead_for_wedding.php';
    } else {
      link = 'ajax/lead_creation/lead_for_baby_list.php';
    }
    if (dataTable) {
      dataTable.destroy(); // Destroy the existing DataTable instance
    }
    createTable();
  }
  radioChange();

  document.addEventListener('click', function(event) {
    if (event.target && event.target.classList.contains('edit-icon')) {
      var leadData = event.target.getAttribute('data-lead');
      window.location.href = `manage_lead.php?dat=${leadData}`;
    }

    if (event.target && event.target.classList.contains('follow-up-icon')) {
      var leadData = event.target.getAttribute('data-lead');
      window.location.href = `follow_up_entry.php?dat=${leadData}`;
    }
  });

  const observer = new MutationObserver(function(mutationsList, observer) {
    feather.replace();
  });
  const config = {
    childList: true,
    subtree: true
  };
  observer.observe(document.body, config);



  function createTable() {
    dataTable = $('#tbl').DataTable({
      "pageLength": 10
    });
    $.ajax({
      url: link,
      type: 'get',
      contentType: false,
      processData: false,
      success: function(response) {
        var result = JSON.parse(response);
        var leads = result.data;
        var dataTableData = [];

        if (document.getElementById('wedding').checked) {
          document.getElementById('th1').textContent = 'Event';
          document.getElementById('th2').textContent = 'Event Date';
          document.getElementById('th3').textContent = 'Mandapam';
          leads.forEach(obj => {
            var test = JSON.parse(obj.service);
            var val = test.map(ob => (`
                        <span class="badge badge-pill badge-light"
                              style="color:black; background-color: lightgrey">
                              ${ob.service}
                        </span><br>`)).join('');
            var statusdisplay = document.createElement('span');
            if (obj.lead_status === 'open') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-warning');
            } else if (obj.lead_status === 'closed') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-danger');
            } else {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-success');
            }
            statusdisplay.style.cursor = 'pointer';
            statusdisplay.textContent = obj.lead_status;
            var dat = encodeURIComponent(JSON.stringify({
              'lead_id': obj.id,
              'lead': 'wedding'
            }))

            var dataRow = [
              obj.id,
              obj.name,
              obj.phone,
              obj.event,
              obj.event_date,
              obj.mandapam,
              val,
              statusdisplay.outerHTML,
              `
                            <i class="follow-up-icon"
                              data-lead="${dat}"
                              data-action="follow_up"
                              data-feather="message-circle"
                              style="cursor: pointer"
                              title=""></i>`
            ];
            dataTableData.push(dataRow);
            feather.replace();
          });
        } else {
          document.getElementById('th1').textContent = 'Age';
          document.getElementById('th2').textContent = 'Sex';
          document.getElementById('th3').textContent = 'Date & Time';
          leads.forEach(obj => {
            var test = JSON.parse(obj.service);
            var val = test.map(ob => (`
                        <span class="badge badge-pill badge-light"
                              style="color:black; background-color: lightgrey">
                              ${ob.service}
                        </span><br>`)).join('');
            var statusdisplay = document.createElement('span');
            if (obj.lead_status === 'open') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-warning');
            } else if (obj.lead_status === 'closed') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-danger');
            } else {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-success');
            }
            statusdisplay.style.cursor = 'pointer';
            statusdisplay.textContent = obj.lead_status;

            var dat = encodeURIComponent(JSON.stringify({
              'lead_id': obj.id,
              'lead': 'baby'
            }))
            var dataRow = [
              obj.id,
              obj.name,
              obj.phone,
              obj.age,
              obj.sex,
              obj.event_dateTime,
              val,
              statusdisplay.outerHTML,
              `
                          <i 
                            data-feather="message-circle"
                            onclick="window.location.href = 'follow_up_entry.php?dat=${dat}'"
                            style="cursor: pointer"
                            title=""></i>`
            ];

            dataTableData.push(dataRow);
          });
        }

        dataTable.clear().rows.add(dataTableData).draw();
        feather.replace();
      }
    });

  }
</script>
<style>
  i {
    cursor: pointer !important;
  }

  i:hover {
    color: blue !important;
  }
</style>


</html>