<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<style>
	#stockLabel{
		font-style: normal;
		font-size: 15px;
		text-align: center;
	}
	.first_search{
		background-color: white;
		border-radius: 10px;
	}

	.second_search{
		background-color: white;
		border-radius: 10px;
	}

	#headPanel{
		padding-left: 2%;
		padding-right: 2%;
	}
	
	#imagelogo{
		width: 180px;
		height: 25px;
	}

	#stockTable{
		padding-left: 2%;
		padding-right: 2%;
	}

	#refButton{
		margin-left: 9px;
	}

	#nextPageButton{
		margin-left: 4px;
	}

	.marketLogo{
		padding-right: 9%;
		padding-bottom: 1%;
	}

	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<script language='javascript'>	
	</script>
	<body style="background-color: #1F5577; margin: auto;">
		<br>
		<br>
		<div class="container">
			<div class="first_search">
				<br>
				<h4><center>Stock Market Search<center></h4>
					<form class="form-group" id="stockSearch" action="" method="GET">
						<br>
						<div class="form-group col-lg-3" id="inputLabelId">
							<label for="inputId" id="stockLabel">Enter Stock name of symbol<span style="color:red">*</span></label>
						</div>
						<div class="form-group col-lg-5" id="inputBoxId">
							<input type="text" class="form-control" id="inputid" placeholder="Apple Inc or AAPL">
						</div>
						<div class="form-group col-lg-3" id="inputButtonId">
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Get Quote</button>
							<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Clear</button>
						</div>
					</form>
				<div class="marketLogo">
					<div align="right">Powered By:<a href="http://dev.markitondemand.com/MODApis/" target="_blank"><img id="imagelogo" src="http://cs-server.usc.edu:45678/hw/hw8/images/mod-logo.png" ></a></div>
				</div>
			</div>
			<div class="line">
				<hr>
			</div>
			<div class="second_search">
					<br>
					<div id="headPanel">
						<div id="ismdb" class="carousel slide" data-interval="false" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="panel panel-default">
										<div class="panel-heading">
											Favorite List
											<div class="btn-group pull-right">
												<div>
													Automatic Refresh:
													<input type="checkbox" data-toggle="toggle" data-size="small">
													<a href="#ismdb" data-slide-to="1"><button  id ="nextPageButton" type="button" class="btn btn-sm btn-default pull-right"><span class="glyphicon glyphicon-chevron-right"></span></button></a>
													<button type="button" id="refButton" class="btn btn-sm btn-default pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
												</div>
											</div>
										</div>
										<div id="stockTable">
										<br>
										<table class="table table-bordred table-striped">
											<tbody>
												<tr>
													<th>Symbol</th>
													<th>Company Name</th>
													<th>Stock Price</th>
													<th>Change (Change Percent)</th>
													<th>Market Cap</th>
													<th></th>
												</tr>
												<tr>
													<td>AAPL</td>
													<td>Apple Inc</td>
													<td>456.78</td>
													<td>5%</td>
													<td>500 Billion</td>
													<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-default btn-sm" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
												</tr>
											</tbody>
										</table>
										</div>
									</div>
  								</div>
  								<div class="item">
  									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="btn-group pull-left">
												<a href="#ismdb" data-slide-to="0"><button type="button" class="btn btn-sm btn-default pull-right"><span class="glyphicon glyphicon-chevron-left"></span></button></a>
											</div>
											<div align="center">
												Stock Details
											</div>
										</div>
										<table class="table">

										</table>
									</div>
  								</div>
							</div>
						</div>
					</div>
					<br>
			</div>
	</body>
</html>