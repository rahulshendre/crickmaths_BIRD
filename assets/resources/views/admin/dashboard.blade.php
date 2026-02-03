@extends('layouts.admin_app')
@section('content')
<style type="text/css">
  .container-fluid {
   width: 100%;   
}
.page-header {
    margin-left: 2%;
}
.container-fluid {
    width: 100%;
    padding-right: 37px;
    padding-left: 266px;
    margin-right: auto;
    margin-left: auto;
}
@media (max-width: 475px){
  .container-fluid {
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
}
#dashtop{
  margin-top: 17%;
}
}
</style>
<body>
    
        <div class="container-fluid" id="dashtop">
                    <!-- Page Header -->
          <div class="page-header">
            <div style="margin-top: 13px;">
              <h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                
                   <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                
              </ol>
            </div>
          <!--   <div class="d-flex">
              <div class="mr-2">
                <a class="btn ripple btn-outline-primary dropdown-toggle mb-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <i class="fe fe-external-link"></i> Export <i class="fas fa-caret-down ml-1"></i>
                </a>
                <div class="dropdown-menu tx-13">
                  <a class="dropdown-item" href="#"><i class="far fa-file-pdf mr-2"></i>Export as Pdf</a>
                  <a class="dropdown-item" href="#"><i class="far fa-image mr-2"></i>Export as Image</a>
                  <a class="dropdown-item" href="#"><i class="far fa-file-excel mr-2"></i>Export as Excel</a>
                </div>
              </div>
              <div class="">
                <a href="#" class="btn ripple btn-secondary navresponsive-toggler mb-0" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fe fe-filter mr-1"></i>  Filter <i class="fas fa-caret-down ml-1"></i>
                </a>
              </div>
            </div> -->
          </div>
          <!-- End Page Header -->

          <!--Navbar-->
          <div class="responsive-background">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="advanced-search">
                <div class="row align-items-center">
                  <div class="col-md-4">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group mb-lg-0">
                          <label class="">From :</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fe fe-calendar lh--9 op-6"></i>
                              </div>
                            </div><input class="form-control fc-datepicker" placeholder="11/01/2019" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mb-lg-0">
                          <label class="">To :</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fe fe-calendar lh--9 op-6"></i>
                              </div>
                            </div><input class="form-control fc-datepicker" placeholder="11/08/2019" type="text">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group mb-lg-0">
                      <label class="">Sales By Country :</label>
                      <select class="form-control select2-flag-search" data-placeholder="Select Contry">
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="AD">Andorra</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AU">Australia</option>
                        <option value="AM">Armenia</option>
                        <option value="AO">Angola</option>
                        <option value="AR">Argentina</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BB">Barbados</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BE">Belgium</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BH">Bahrain</option>
                        <option value="BJ">Benin</option>
                        <option value="BN">Brunei</option>
                        <option value="BO">Bolivia</option>
                        <option value="BT">Bhutan</option>
                        <option value="BY">Belarus</option>
                        <option value="CD">Congo</option>
                        <option value="CA">Canada</option>
                        <option value="CF">Central African Republic</option>
                        <option value="CI">Cote d'Ivoire</option>
                        <option value="CL">Chile</option>
                        <option value="CM">Cameroon</option>
                        <option value="CN">China</option>
                        <option value="CO">Colombia</option>
                        <option value="CU">Cuba</option>
                        <option value="CV">Cabo Verde</option>
                        <option value="CY">Cyprus</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DK">Denmark</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EE">Estonia</option>
                        <option value="ER">Eritrea</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FI">Finland</option>
                        <option value="FJ">Fiji</option>
                        <option value="FR">France</option>
                        <option value="GA">Gabon</option>
                        <option value="GD">Grenada</option>
                        <option value="GE">Georgia</option>
                        <option value="GH">Ghana</option>
                        <option value="GH">Ghana</option>
                        <option value="HN">Honduras</option>
                        <option value="HT">Haiti</option>
                        <option value="HU">Hungary</option>
                        <option value="ID">Indonesia</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IN">India</option>
                        <option value="IQ">Iraq</option>
                        <option value="IR">Iran</option>
                        <option value="IS">Iceland</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JO">Jordan</option>
                        <option value="JP">Japan</option>
                        <option value="KE">Kenya</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="KI">Kiribati</option>
                        <option value="KW">Kuwait</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="LA">Laos</option>
                        <option value="LB">Lebanons</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LR">Liberia</option>
                        <option value="LS">Lesotho</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="LV">Latvia</option>
                        <option value="LY">Libya</option>
                        <option value="MA">Morocco</option>
                        <option value="MC">Monaco</option>
                        <option value="MD">Moldova</option>
                        <option value="ME">Montenegro</option>
                        <option value="MG">Madagascar</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MK">Macedonia (FYROM)</option>
                        <option value="ML">Mali</option>
                        <option value="MM">Myanmar (formerly Burma)</option>
                        <option value="MN">Mongolia</option>
                        <option value="MR">Mauritania</option>
                        <option value="MT">Malta</option>
                        <option value="MV">Maldives</option>
                        <option value="MW">Malawi</option>
                        <option value="MX">Mexico</option>
                        <option value="MZ">Mozambique</option>
                        <option value="NA">Namibia</option>
                        <option value="NG">Nigeria</option>
                        <option value="NO">Norway</option>
                        <option value="NP">Nepal</option>
                        <option value="NR">Nauru</option>
                        <option value="NZ">New Zealand</option>
                        <option value="OM">Oman</option>
                        <option value="PA">Panama</option>
                        <option value="PF">Paraguay</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PH">Philippines</option>
                        <option value="PK">Pakistan</option>
                        <option value="PL">Poland</option>
                        <option value="QA">Qatar</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SC">Seychelles</option>
                        <option value="SD">Sudan</option>
                        <option value="SE">Sweden</option>
                        <option value="SG">Singapore</option>
                        <option value="TG">Togo</option>
                        <option value="TH">Thailand</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TN">Tunisia</option>
                        <option value="TO">Tonga</option>
                        <option value="TR">Turkey</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TW">Taiwan</option>
                        <option value="UA">Ukraine</option>
                        <option value="UG">Uganda</option>
                        <option value="UM">United States of America</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VA">Vatican City (Holy See)</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VU">Vanuatu</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group mb-lg-0">
                      <label class="">Products :</label>
                      <select multiple="multiple" class="group-filter">
                        <optgroup label="Mens">
                          <option value="1">Foot wear</option>
                          <option value="2">Top wear</option>
                          <option value="3">Bootom wear</option>
                          <option value="4">Men's Groming</option>
                          <option value="5">Accessories</option>
                        </optgroup>
                        <optgroup label="Women">
                          <option value="1">Western wear</option>
                          <option value="2">Foot wear</option>
                          <option value="3">Top wear</option>
                          <option value="4">Bootom wear</option>
                          <option value="5">Beuty Groming</option>
                          <option value="6">Accessories</option>
                          <option value="7">Jewellery</option>
                        </optgroup>
                        <optgroup label="Baby & Kids">
                          <option value="1">Boys clothing</option>
                          <option value="2">Girls Clothing</option>
                          <option value="3">Toys</option>
                          <option value="4">Baby Care</option>
                          <option value="5">Kids footwear</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group mb-lg-0">
                      <label class="">Sales Type :</label>
                      <select multiple="multiple" class="multi-select">
                        <option value="1">Online</option>
                        <option value="2">Offline</option>
                        <option value="3">Reseller</option>
                      </select>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="text-right">
                  <a href="#" class="btn btn-primary" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Apply</a>
                  <a href="#" class="btn btn-secondary" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Reset</a>
                </div>
              </div>
            </div>
          </div>
          <!--End Navbar -->
          <div class="row row-sm">
            <div class="col-sm-6 col-md-3 col-xl-6">
              <div class="card custom-card">
                <div class="card-body text-center">
                  <div class="icon-service bg-secondary-transparent rounded-circle text-secondary">
                    <p class="text-center">{{$question}}<p>
                  </div>
                  <p class="mb-1 text-muted">Total Question</p>
                  <h3 class="mb-0"></h3>
                </div>
              </div>
            </div>
            
            <div class="col-sm-6 col-md-3 col-xl-6">
              <div class="card custom-card">
                <div class="card-body text-center">
                  <div class="icon-service bg-secondary-transparent rounded-circle text-secondary"><p style="margin: auto;font-size: 19px;">{{$student}}</p>
                    <!-- <i class="fa fa-rupee" aria-hidden="true"></i> -->
                  </div>
                  <p class="mb-1 text-muted">Total Student</p>
                  <h3 class="mb-0"><span></span></h3>
                </div>
              </div>
            </div>
            
          </div>
          <!--End  Row -->

           <div class="row row-sm">
            <div class="col-sm-4 col-md-3 col-xl-4">
              <div class="card custom-card">
                <div class="card-body text-center">
                  <div class="icon-service bg-secondary-transparent rounded-circle text-secondary">
                    <p class="text-center">{{$user}}<p>
                  </div>
                  <p class="mb-1 text-muted">Total User</p>
                  <h3 class="mb-0"></h3>
                </div>
              </div>
            </div>
            
            <div class="col-sm-4 col-md-3 col-xl-4">
              <div class="card custom-card">
                <div class="card-body text-center">
                  <div class="icon-service bg-secondary-transparent rounded-circle text-secondary"><p style="margin: auto;font-size: 19px;">{{$teacher}}</p>
                    <!-- <i class="fa fa-rupee" aria-hidden="true"></i> -->
                  </div>
                  <p class="mb-1 text-muted">Total Teacher</p>
                  <h3 class="mb-0"><span></span></h3>
                </div>
              </div>
            </div>

            <div class="col-sm-4 col-md-3 col-xl-4">
              <div class="card custom-card">
                <div class="card-body text-center">
                  <div class="icon-service bg-secondary-transparent rounded-circle text-secondary"><p style="margin: auto;font-size: 19px;">{{$current_month_count}}</p>
                    <!-- <i class="fa fa-rupee" aria-hidden="true"></i> -->
                  </div>
                  <p class="mb-1 text-muted">Total user play game current month</p>
                  <h3 class="mb-0"><span></span></h3>
                </div>
              </div>
            </div>
            
          </div>


      <canvas id="barChart" style="width:100%; height:400px;"></canvas>

          <canvas id="barChart_weekly" style="width:100%; height:400px;"></canvas>



     

         

        </div>
      </div>
      <!-- End Main Content-->
                <!-- Sidebar -->
      <div class="sidebar sidebar-right sidebar-animate">
        <div class="sidebar-icon">
          <a href="#" class="text-right float-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
        </div>
        <div class="sidebar-body">
          <h5>Todo</h5>
          <div class="d-flex p-2">
            <label class="ckbox"><input checked="" type="checkbox"><span>Hangout With friends</span></label>
            <span class="ml-auto">
              <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
              <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
            </span>
          </div>
          <div class="d-flex p-2 border-top">
            <label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
            <span class="ml-auto">
              <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
              <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
            </span>
          </div>
          <div class="d-flex p-2 border-top">
            <label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
            <span class="ml-auto">
              <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
              <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
            </span>
          </div>
          <div class="d-flex p-2 border-top">
            <label class="ckbox"><input checked="" type="checkbox"><span>System Updated</span></label>
            <span class="ml-auto">
              <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
              <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
            </span>
          </div>
          <div class="d-flex p-2 border-top">
            <label class="ckbox"><input type="checkbox"><span>Do something more</span></label>
            <span class="ml-auto">
              <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
              <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
            </span>
          </div>
          <div class="d-flex p-2 border-top">
            <label class="ckbox"><input type="checkbox"><span>System Updated</span></label>
            <span class="ml-auto">
              <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
              <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
            </span>
          </div>
          <div class="d-flex p-2 border-top">
            <label class="ckbox"><input type="checkbox"><span>Find an Idea</span></label>
            <span class="ml-auto">
              <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
              <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
            </span>
          </div>
          <div class="d-flex p-2 border-top mb-4 border-bottom">
            <label class="ckbox"><input type="checkbox"><span>Project review</span></label>
            <span class="ml-auto">
              <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
              <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
            </span>
          </div>
          <h5>Overview</h5>
          <div class="p-2">
            <div class="main-traffic-detail-item">
              <div>
                <span>Founder &amp; CEO</span> <span>24</span>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
              </div><!-- progress -->
            </div>
            <div class="main-traffic-detail-item">
              <div>
                <span>UX Designer</span> <span>1</span>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
              </div><!-- progress -->
            </div>
            <div class="main-traffic-detail-item">
              <div>
                <span>Recruitment</span> <span>87</span>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
              </div><!-- progress -->
            </div>
            <div class="main-traffic-detail-item">
              <div>
                <span>Software Engineer</span> <span>32</span>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
              </div><!-- progress -->
            </div>
            <div class="main-traffic-detail-item">
              <div>
                <span>Project Manager</span> <span>32</span>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
              </div><!-- progress -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

     
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script src="{{config('app.baseURL')}}/assets/plugins/peity/jquery.peity.min.js"></script>
  <script src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/plugins/jquery.flot/jquery.flot.pie.js"></script>


 

   <!--  <script>
        // Prepare the data from the controller to JavaScript
        const months = @json($months);
        const uniqueCounts = @json($monthlyUniqueCounts);

        // Set up the chart data
        const ctx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: months, // Months passed from the controller
                datasets: [{
                    label: 'Unique Users per Month',
                    data: uniqueCounts, // Monthly data passed from the controller
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return 'Users: ' + tooltipItem.raw;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Unique User Count'
                        }
                    }
                }
            }
        });
    </script> -->

    <script>
    // Prepare the data from the controller to JavaScript for Monthly chart
    const months = @json($months);  // Data for months
    const monthlyUniqueCounts = @json($monthlyUniqueCounts);  // Monthly data for unique users

    // Set up the chart data for the Monthly chart
    const ctxMonthly = document.getElementById('barChart').getContext('2d');
    const barChart = new Chart(ctxMonthly, {
        type: 'bar',
        data: {
            labels: months,  // Labels for months
            datasets: [{
                label: 'Unique Users per Month',
                data: monthlyUniqueCounts,  // Data for the monthly chart
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return 'Users: ' + tooltipItem.raw;
                        }
                    }
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Month'
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Unique User Count'
                    }
                }
            }
        }
    });

    // Prepare the data from the controller to JavaScript for Weekly chart
    const weeks = @json($weeks);  // Data for weeks
    const weeklyUniqueCounts = @json($weeklyUniqueCounts);  // Weekly data for unique users

    // Set up the chart data for the Weekly chart
    const ctxWeekly = document.getElementById('barChart_weekly').getContext('2d');
    const barChartWeekly = new Chart(ctxWeekly, {
        type: 'bar',
        data: {
            labels: weeks,  // Labels for weeks
            datasets: [{
                label: 'Unique Users per Week',
                data: weeklyUniqueCounts,  // Data for the weekly chart
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return 'Users: ' + tooltipItem.raw;
                        }
                    }
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Week'
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Unique User Count'
                    }
                }
            }
        }
    });
</script>



    

<script>
var xValues = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
var yValues = [10, 40, 30, 15, 15,25,80];
var barColors = ["green", "green","green","green","green","green", "green"];

new Chart("weeklybooking", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Booking In Weekly"
    }
  }
});
</script>
<script>
var xValues = ["Jan", "Feb", "Mar", "Apr", "May", "jun", "July", "Aug", "Sep","Oct","Nov","Dec"];
var yValues = [10, 40, 30, 15, 15,25,100,80,71,65,50,45];
var barColors = ["green", "green","green","green","green","green", "green","green","green","green","green","green"];

new Chart("Payment1", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Payment In 2022"
    }
  }
});
</script>

<script>
var xValues = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
var yValues = [10, 40, 30, 15, 15,25,80];
var barColors = ["green", "green","green","green","green","green", "green"];

new Chart("weeklyPayment", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Payment In Weekly"
    }
  }
});
</script>

<script>
var xValues = ["booking"];
var yValues = [30,70];
var barColors = [
    "#1e7145",
  
];

new Chart("myChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Booking In this Month"
    }
  }
});
</script>
<script>
var xValues = ["Payment"];
var yValues = [50,50];
var barColors = [
    "#1e7145",
  
];

new Chart("Payment", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Payment In this Month"
    }
  }
});
</script>
<script type="text/javascript">
$('#l1').removeClass('nav-item');
$('#l2').removeClass('nav-item');
$('#l3').removeClass('nav-item');
$('#l4').removeClass('nav-item');
$('#l5').removeClass('nav-item');
$('#l6').removeClass('nav-item');
$('#l7').removeClass('nav-item');
$('#l8').removeClass('nav-item');
$('#l15').addClass('nav-item');





</script>
<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>

  </body>





    




@endsection