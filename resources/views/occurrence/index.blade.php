<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Occurrence - Security Management System</title>

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
								<h3 class="page-title">Occurrences</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Occurrence</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Create Occurrence</a>
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
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Signatory</th>
                                            <th>ID</th>
											<th>Time</th>
                                            <th>Ref</th>
											<th>Subject</th>
                                            <th>Occurrence</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($occurrence as $item)
										<tr>
											<td>{{ $item->officer->name }}</td>
											<td>{{ $item->id }}</td>
											<td>{{ $item->date_time }}</td>
											<td>{{ $item->ref }}</td>
											<td>{{ $item->subject }}</td>
											<td>{{ $item->occurrence }}</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
								<h5 class="modal-title">Create Occurrence</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
                                <form action="{{ route('occurrence.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label>Officer on Duty <span class="text-danger">*</span></label>
                                            <select class="select" name="officer_id">
                                                <option >Select Officer on Duty</option>
                                                @foreach ($officer as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Date and Time <span class="text-danger"></span></label>
                                            <div class="cal-icon">
                                                <input class="form-control" type="time" name="date_time">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Shift <span class="text-danger"></span></label>

                                                <input class="form-control" type="text" name="shift">

                                        </div>
                                        <div class="form-group">
                                            <label>Entry <span class="text-danger"></span></label>

                                                <input class="form-control" type="text" name="entry">

                                        </div>
                                        <div class="form-group">
                                            <label>REF <span class="text-danger"></span></label>

                                                <input class="form-control" type="text" name="ref">

                                        </div>
                                        <div class="form-group">
                                            <label>Subject <span class="text-danger"></span></label>
                                            <div class="cal-icon">
                                                <input class="form-control" type="text" name="subject">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Occurrence <span class="text-danger">*</span></label>
                                            <textarea rows="4" class="form-control" name="occurrence"></textarea>
                                        </div>
                                        <div class="submit-section">
                                            <button class="btn btn-primary submit-btn">Save</button>
                                        </div>
                                    </form>
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