<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Malaria-Survey</title>

    <!-- Global stylesheets -->
@include('partials.head')
    <!-- /global stylesheets -->
@include('partials.scripts')

</head>

<body class="navbar-top">

@include('partials.header')

<!-- Page content -->
<div class="page-content">

@include('partials.sidemenu')

<!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4> <span class="font-weight-semibold">Malaria</span> - Surveillance</h4>

                </div>


            </div>


        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <!-- Form layouts -->
            <div class="row">
                <div class="col-md-10">

@yield('content')

                </div>

            </div>
            <!-- /form layouts -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2019. <a href="#"></a> by Michael Kakande
					</span>


            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>