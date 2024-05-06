<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Rapid Response</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="/assets/css/line-awesome.min.css">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="/assets/css/select2.min.css">

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
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Horizontal Form</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Horizontal Form</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->


					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Enter Employee Information</h4>
								</div>
								<div class="card-body">
									<h4 class="card-title">Personal Information</h4>
                                    <form action="{{ route('occurrence.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- @method('PUT') --}}
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Shift</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="shift">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">REF</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="ref">
													</div>
												</div>
                                                <div class="form-group row">
													<label class="col-lg-3 col-form-label">Entry</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="entry">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Time</label>
													<div class="col-lg-9">
														<input type="datetime-local" class="form-control" name="date_time">
													</div>
												</div>
                                                <div class="form-group row">
													<label class="col-lg-3 col-form-label">Subject</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="subject">
													</div>
												</div>
                                                <div class="form-group row">
													<label class="col-lg-3 col-form-label">Occurrence</label>
													<div class="col-lg-9">
														<input type="occurrence" class="form-control" name="occurrence">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Officer</label>
													<div class="col-lg-9">
														<select class="select" name="officer_id">
															<option>Select</option>
															@foreach ($officer as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                            @endforeach
														</select>
													</div>
												</div>
											</div>



										<div class="text-left">
											<button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
			<!-- /Main Wrapper -->

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

		<!-- Custom JS -->
		<script  src="/assets/js/app.js"></script>

    </body>
</html>
