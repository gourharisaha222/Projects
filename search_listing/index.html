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
        <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.progressBarTimer.js" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
    </head>
    <body>

        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Search Listing</a>
                    </div>
                </div>
            </nav>

            <div class="row">
                <div class="form-inline text-center">
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                    <input type="button" class="form-control" id="search" value="Search">
                </div> 
		<br>
                <div class="row mt-3" id="p_bar" style="display: none;">
		    <div class="col-md-12">
			<div id="progressBar"></div>
		    </div>
		</div>
                <div class="col-lg-12 table-responsive" id="tableData">
                    <!--tables for tabular data :) ... only-->
                </div>
            </div>
        </div>
        <script>
            $(function () {
                getData();
                $('#search').click(function () {
                    getData();
                });
            });
            function getData() {
                var strUrl = '';
                var fname = $("#fname").val();
                var lname = $("#lname").val();
                if (fname == '' && lname == '') {
                    strUrl = "https://data.cityofnewyork.us/resource/5scm-b38n.json";
                } else if (fname != '' && lname == '') {
                    strUrl = "https://data.cityofnewyork.us/resource/5scm-b38n.json?first_name=" + fname;
                } else if (fname == '' && lname != '') {
                    strUrl = "https://data.cityofnewyork.us/resource/5scm-b38n.json?last_name=" + lname;
                } else {
                    strUrl = "https://data.cityofnewyork.us/resource/5scm-b38n.json?first_name=" + fname + "&last_name=" + lname;
                }
                $("#p_bar").show();
                var progressBar = $('#progressBar').progressBarTimer({autoStart: true, smooth: true, animated: true, timeLimit: 3, label: {show: true, type: 'percent'}});
                $.ajax({
                    url: strUrl,
                    type: "GET",
                    async: true,
                    success: function (res) {
                        var i;
                        var tableData = '<table class="table table-bordered table-striped nowrap" id="example1"><thead><tr><th class="text-center">Sl. No.</th><th class="text-center">First Name</th><th class="text-center">Last Name</th><th class="text-center">Group No.</th><th class="text-center">Exam No.</th><th class="text-center">Agency Code</th><th class="text-center">Agency Desc.</th><th class="text-center">List No.</th><th class="text-center">List Title Code</th><th class="text-center">List Title Desc.</th><th class="text-center">Adj Fa</th><th class="text-center">Published Date</th><th class="text-center">Anniversary Date</th><th class="text-center">Established Date</th></tr></thead><tfoot><tr><th class="text-center">Sl. No.</th><th class="text-center">First Name</th><th class="text-center">Last Name</th><th class="text-center">Group No.</th><th class="text-center">Exam No.</th><th class="text-center">Agency Code</th><th class="text-center">Agency Desc.</th><th class="text-center">List No.</th><th class="text-center">List Title Code</th><th class="text-center">List Title Desc.</th><th class="text-center">Adj Fa</th><th class="text-center">Published Date</th><th class="text-center">Anniversary Date</th><th class="text-center">Established Date</th></tr></tfoot><tbody>';
                        $.each(res, function (key, val) {
                            i = parseInt(key + 1);
                            tableData += '<tr><td class="text-center"><b>' + i + '.</b></td><td>' + val.first_name + '</td><td>' + val.last_name + '</td><td class="text-center">' + val.group_no + '</td><td class="text-center">' + val.exam_no + '</td><td class="text-center">' + val.list_agency_code + '</td><td class="text-center">' + val.list_agency_desc + '</td><td class="text-center">' + val.list_no + '</td><td class="text-center">' + val.list_title_code + '</td><td>' + val.list_title_desc + '</td><td class="text-center">' + val.adj_fa + '</td><td class="text-center">' + val.published_date + '</td><td class="text-center">' + val.anniversary_date + '</td><td class="text-center">' + val.established_date + '</td></tr>';
                        });
                        tableData += '</tbody></table>';
                        $("#tableData").html(tableData);
                        $('#example1').DataTable();
                        $("#p_bar").hide();
                    }
                });
            }
        </script>
    </body>
</html>