@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon"><i class="fa fa-user-circle-o"></i></div>
               <div class="header-title">
                  <h1>Profile</h1>
                  <small>Show user data in clear profile design</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12 col-md-4">
                     <div class="card">
                        <div class="card-header">
                           <div class="card-header-headshot"></div>
                        </div>
                        <div class="card-content">
                           <div class="card-content-member text-center">
                              <h4 class="m-t-0">Alrazy</h4>
                              <p class="m-t-0">Dhaka</p>
                           </div>
                           <div class="card-content-languages">
                              <div class="card-content-languages-group">
                                 <div>
                                    <h4>Speaks:</h4>
                                 </div>
                                 <div>
                                    <ul>
                                       <li>
                                          English
                                          <div class="fluency fluency-4"></div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="card-content-languages-group">
                                 <div>
                                    <h4>Learning:</h4>
                                 </div>
                                 <div>
                                    <ul>
                                       <li>Spanish,</li>
                                       <li>Russian,</li>
                                       <li>German</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="card-content-summary">
                              <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p>
                           </div>
                        </div>
                        <div class="card-footer">
                           <div class="card-footer-stats">
                              <div>
                                 <p>PROJECTS:</p>
                                 <i class="fa fa-users"></i><span>241</span>
                              </div>
                              <div>
                                 <p>MESSAGES:</p>
                                 <i class="fa fa-coffee"></i><span>350</span>
                              </div>
                              <div>
                                 <p>Last online</p>
                                 <span class="stats-small">3 days ago</span>
                              </div>
                           </div>
                           <div class="card-footer-message">
                              <h4><i class="fa fa-comments"></i> Message me</h4>
                           </div>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
@endsection