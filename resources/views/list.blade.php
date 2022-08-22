@extends('layouts.admin')
@section('content')

    
<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

            <!-- vendor List Section Start -->
            <div class="page-body">
                <div class="title-header">
                    <h5>User List</h5>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <!-- Table Start -->
                                <div class="card-body">
                                    <div class="table-responsive table-desi">
                                        <table class="user-table vendor-table table table-striped">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Sr.No</th>
                                                    <th>first name</th>
                                                    <th>last name</th>
                                                    <th>City</th>
                                                    <th>mobile no.</th>
                                                    <th>experince</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            
                                                        </span>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block">1</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <img src="assets/images/users/1.jpg" alt="users">
                                                        </span>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block">khalid </span>
                                                        </a>
                                                    </td>

                                                    <td>shaikh</td>

                                                    <td>latur</td>

                                                    <td class="font-primary">9999999</td>

                                                    <td>2</td>

                                                

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href="order-detail.html">
                                                                    <span class="lnr lnr-eye"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <span class="lnr lnr-pencil"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <span class="lnr lnr-trash"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- Table End -->

                                <!-- Pagination Start -->
                                <div class="pagination-box">
                                    <nav class="ms-auto me-auto " aria-label="...">
                                        <ul class="pagination pagination-primary">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)">Previous</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Pagination End -->
                            </div>
                        </div>
                    </div>
                </div>

              
            </div>
            <!-- vendor List Section End -->
        </div>
        <!-- Page Body Start-->

        <!-- Modal Start -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                        <p>Are you sure you want to log out?</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="button-box">
                            <button type="button" class="btn btn--no " data-bs-dismiss="modal">No</button>
                            <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
    </div>
    <!-- page-wrapper End-->
@endsection