<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="z-ua-compatible" content="ie=edge">
        <title>Name Search Data - Demo</title>
	<script src="assets/jquery/dist/jquery.min.js"></script>
	<script src="assets/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="assets/datatables.net/js/angular-datatables.min.js"></script>
	<script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
    </head>
    <body ng-app="myApp">

	<div class="container">
	    <nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
			<a class="navbar-brand" href="#">Search Listing</a>
		    </div>
		</div>
	    </nav>

	    <div class="row" ng-controller="customersCtrl">
		<div class="col-lg-12 table-responsive">
		    <!--tables for tabular data :) ... only-->
		    <table class="table table-bordered table-striped nowrap" datatable="ng">
			<thead>
			    <tr>
				<th class="text-center">Sl. No.</th>
				<th class="text-center">First Name</th>
				<th class="text-center">Last Name</th>
				<th class="text-center">Group No.</th>
				<th class="text-center">Exam No.</th>
				<th class="text-center">Agency Code</th>
				<th class="text-center">Agency Desc.</th>
				<th class="text-center">List No.</th>
				<th class="text-center">List Title Code</th>
				<th class="text-center">List Title Desc.</th>
				<th class="text-center">Adj Fa</th>
				<th class="text-center">Published Date</th>
				<th class="text-center">Anniversary Date</th>
				<th class="text-center">Established Date</th>
			    </tr>
			</thead>
			<tbody>
			    <tr ng-repeat="val in searchData">
				<td class="text-center"><b>{{ $index + 1}}.</b></td>
				<td>{{ val.first_name}}</td>
				<td>{{ val.last_name}}</td>
				<td class="text-center">{{ val.group_no}}</td>
				<td class="text-center">{{ val.exam_no}}</td>
				<td class="text-center">{{ val.list_agency_code}}</td>
				<td>{{ val.list_agency_desc}}</td>
				<td class="text-center">{{ val.list_no}}</td>
				<td class="text-center">{{ val.list_title_code}}</td>
				<td>{{ val.list_title_desc}}</td>
				<td class="text-center">{{ val.adj_fa}}</td>
				<td class="text-center">{{ val.published_date}}</td>
				<td class="text-center">{{ val.anniversary_date}}</td>
				<td class="text-center">{{ val.established_date}}</td>
			    </tr>
			</tbody>
		    </table> 
		</div>
	    </div>
	</div>
	<script>
            var app = angular.module('myApp', ['datatables']);
            app.controller('customersCtrl', function ($scope, $http) {
                $scope.getData = function () {
                    $http.get("https://data.cityofnewyork.us/resource/5scm-b38n.json")
                            .then(function (response) {
                                $scope.searchData = response.data;
                            });
                }
                $scope.getData();
            });
	</script>
    </body>
</html>