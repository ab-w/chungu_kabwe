<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Statement - Security Management Systems</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="/assets/css/line-awesome.min.css">

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="/assets/css/dataTables.bootstrap4.min.css">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="/assets/css/select2.min.css">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="/assets/css/bootstrap-datetimepicker.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="/assets/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="/assets/js/html5shiv.min.js"></script>
			<script src="/assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">

@include('includes.header')

@include('includes.sidebar')

			<!-- Page Wrapper -->
            <div class="page-wrapper">

				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Docket - Statement</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Statement</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Create Biometric</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					{{-- <!-- Search Filter -->
					<div class="row filter-row">
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<div class="form-group form-focus select-focus">
								<select class="select floating">
									<option value=""> -- Select -- </option>
									<option value="">Employee</option>
									<option value="1">Manager</option>
								</select>
								<label class="focus-label">Role</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<div class="form-group form-focus select-focus">
								<select class="select floating">
									<option> -- Select -- </option>
									<option> Pending </option>
									<option> Approved </option>
									<option> Rejected </option>
								</select>
								<label class="focus-label">Leave Status</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
                    </div>
					<!-- /Search Filter --> --}}

					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								
						<!-- Table -->
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Page Number</th>
                            <th>Full Name</th>
                            <th>Residential Address</th>
                            <th>Business Address</th>
                            <th>Occupation</th>
                            <th>Village</th>
                            <th>Identity Card</th>
                            <th>Chief</th>
                            <th>District</th>
                            <th>Nationality</th>
                            <th>Sex</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>Issued At</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($statementpad as $statements)
                        <tr>
                            <td>{{ $statements->page_number }}</td>
                            <td>{{ $statements->full_name }}</td>
                            <td>{{ $statements->residential_address }}</td>
                            <td>{{ $statements->business_address }}</td>
                            <td>{{ $statements->occupation }}</td>
                            <td>{{ $statements->village }}</td>
                            <td>{{ $statements->identity_card }}</td>
                            <td>{{ $statements->chief }}</td>
                            <td>{{ $statements->district }}</td>
                            <td>{{ $statements->nationality }}</td>
                            <td>{{ $statements->sex }}</td>
                            <td>{{ $statements->age }}</td>
                            <td>{{ $statements->date }}</td>
                            <td>{{ $statements->issued_at }}</td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_occurrence"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_occurrence"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

				<!-- Add Salary Modal -->
				<div id="add_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Stament</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
							<form action="{{ route('statement.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Page Number</label>
                        <input class="form-control" type="text" name="page_number">
                    </div>

                    <div class="form-group">
                        <label>Full Name</label>
                        <input class="form-control" type="text" name="full_name">
                    </div>

                    <div class="form-group">
                        <label>Residential Address</label>
                        <input class="form-control" type="text" name="residential_address">
                    </div>

                    <div class="form-group">
                        <label>Business Address</label>
                        <input class="form-control" type="text" name="business_address">
                    </div>

                    <div class="form-group">
                        <label>Occupation</label>
                        <input class="form-control" type="text" name="occupation">
                    </div>

                    <div class="form-group">
                        <label>Village</label>
                        <input class="form-control" type="text" name="village">
                    </div>

                    <div class="form-group">
                        <label>Identity Card</label>
                        <input class="form-control" type="text" name="identity_card">
                    </div>

                    <div class="form-group">
                        <label>Chief</label>
                        <input class="form-control" type="text" name="chief">
                    </div>

                    <div class="form-group">
                        <label>District</label>
                        <input class="form-control" type="text" name="district">
                    </div>

                    <div class="form-group">
                        <label>Nationality</label>
                        <input class="form-control" type="text" name="nationality">
                    </div>

                    <div class="form-group">
                        <label>Sex</label>
                        <input class="form-control" type="text" name="sex">
                    </div>

                    <div class="form-group">
                        <label>Age</label>
                        <input class="form-control" type="text" name="age">
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                        <input class="form-control" type="text" name="date">
                    </div>

                    <div class="form-group">
                        <label>Issued At</label>
                        <input class="form-control" type="text" name="issued_at">
                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Save</button>
                    </div>
                </form>
  
<!-- /Add Salary Modal -->

							</div>
						</div>
					</div>
				</div>
				<!-- /Add Salary Modal -->

				{{-- <!-- Edit Salary Modal -->
				<div id="edit_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Staff Salary</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
                            <div class="modal-body">
                                <form action="{{ route('backends.occurrence.update', $occurrence->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')


									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Ref</label>
												<input class="form-control" type="text" value="{{ $item->ref }}">
											</div>
										</div>
                                        <div class="col-sm-6">
											<div class="form-group">
												<label>Time</label>
												<input class="form-control" type="time" value="{{ $item->time }}">
											</div>
										</div>
                                        <div class="col-sm-12">

											<div class="form-group">
												<label>Subject</label>
												<input class="form-control" type="text" value="{{ $item->subject }}">
											</div>
										</div>
                                        <div class="col-sm-12">
											<div class="form-group">
												<label>Occurrence</label>
												<input class="form-control" type="text" value="{{ $item->occurrence }}">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
				<!-- /Edit Salary Modal --> --}}

				<!-- Delete Salary Modal -->
				<div class="modal custom-modal fade" id="delete_salary" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Salary</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Salary Modal -->

            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="/assets/js/jquery-3.5.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="/assets/js/jquery.slimscroll.min.js"></script>

		<!-- Select2 JS -->
		<script src="/assets/js/select2.min.js"></script>

		<!-- Datetimepicker JS -->
		<script src="/assets/js/moment.min.js"></script>
		<script src="/assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Datatable JS -->
		<script src="/assets/js/jquery.dataTables.min.js"></script>
		<script src="/assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->
		<script src="/assets/js/app.js"></script>

    </body>
</html>





<!-- Add Salary Modal -->
<div id="add_salary" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Docket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               