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
    <style>
        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
            padding: 8px;
            vertical-align: top;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-bordered tbody + tbody {
            border-top: 2px solid #dee2e6;
        }
    </style>
</head>
<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <!-- Page Content -->
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Occurrence Management System Reports</h3>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <!-- Any additional content here -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered custom-table datatable">
                                <thead>
                                    <tr>      
										 <th>Number</th>
                                        <th>Signatory</th>
                                 
                                        <th>Shift</th>
                                        <th>Time</th>
                                        <th>OB No.</th>
                                        <th>Ref No.</th>
                                        <th>Subject</th>
                                        <th>Occurrence</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($occurrences as $item)
                                    <tr>
									<td>{{ $item->id }}</td>
                                        <td>{{ $item->officer->name }}</td>
                                       
                                        <td>{{ $item->shift }}</td>
                                        <td>{{ date('Y-m-d H:i:s', strtotime($item->date_time)) }}</td>
                                        <td>{{ $item->ref }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ $item->entry }}</td>
                                        <td>{{ $item->occurrence }}</td>
                                        <td class="text-right">
                                            <!-- Add actions if needed -->
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
