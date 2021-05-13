<!DOCTYPE html>
<html>
	<head>
		<link href="styles.css" rel="stylesheet" media="screen" />
	</head>
	<body>
		<div class="container" style="margin-bottom: 20px;">
			<div class="row">
				<div class="col-xs-6">
					<form
					 class="form-horizontal"
					 id="frmVoucher"
					 method="post"
					 action="voucherGen.php">
						<h1>Build-a-Voucher&trade;</h1>
						<div class="form-group">
							<input
							 type="text"
							 name="inBkgImg"
							 class="form-control"
							 placeholder="Background Image">
						</div>
						<div class="form-group">
							<input
							 type="text"
							 name="inEventName"
							 class="form-control"
							 placeholder="Event Name">
						</div>
						<div class="form-group">
							<input
							 type="text"
							 name="inHeadline"
							 class="form-control"
							 placeholder="Headline">
						</div>
						<div class="form-group">
							<textarea
							 name="inOpening"
							 class="form-control"
							 style="min-height: 130px;"
							 placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<textarea
							 name="inQuote"
							 class="form-control"
							 style="min-height: 130px;"
							 placeholder="Trite quote to include..."></textarea>
						</div>
						<div class="form-group">
							<input
							 type="text"
							 name="inAttrib"
							 class="form-control"
							 placeholder="Quote attribution">
						</div>
						<div class="form-group">
							<label for="fonts1">Choose font for Headline</label>
							<select name="fonts1">
								<option value="Sans">Sans</option>
								<option value="Serif">Serif</option>
								<option value="Fancy" selected>Fancy</option>
							</select>
						</div>
						<div class="form-group">
							<label for="fonts2">Choose font for Opening</label>
							<select name="fonts2">
								<option value="Sans" selected>Sans</option>
								<option value="Serif">Serif</option>
								<option value="Fancy">Fancy</option>
							</select>
						</div>
						<div class="form-group">
							<label for="fonts3">Choose font for Quote</label>
							<select name="fonts3">
								<option value="Sans">Sans</option>
								<option value="Serif">Serif</option>
								<option value="Fancy" selected>Fancy</option>
							</select>
						</div>
						<div class="form-group">
							<label for="fonts4">Choose font for Attribution</label>
							<select name="fonts4">
								<option value="Sans" selected>Sans</option>
								<option value="Serif">Serif</option>
								<option value="Fancy">Fancy</option>
							</select>
						</div>
						<div class="form-group">
							<label for="inFrDate">Date offer is good from</label>
							<input type="date" name="inFrDate">
						</div>
						<div class="form-group">
							<label for="inToDate">Date offer is good until</label>
							<input type="date" name="inToDate">
						</div>
						<div class="form-group">
							<textarea
							 name="inOffer1"
							 class="form-control"
							 style="min-height: 130px;"
							 placeholder="Description of Offer 1"></textarea>
						</div>
						<div class="form-group">
							<textarea
							 name="inAdditional1"
							 class="form-control"
							 style="min-height: 130px;"
							 placeholder="Additonal terms for Offer 1"></textarea>
						</div>
						<div class="form-group">
							<textarea
							 name="inOffer2"
							 class="form-control"
							 style="min-height: 130px;"
							 placeholder="Description of Offer 2"></textarea>
						</div>
						<div class="form-group">
							<textarea
							 name="inAdditional2"
							 class="form-control"
							 style="min-height: 130px;"
							 placeholder="Additonal terms for Offer 2"></textarea>
						</div>
						<div class="form-group">
							<input
							 type="text"
							 name="inQrSize"
							 class="form-control"
							 placeholder="QR width as an integer (eg: 200)">
						</div>
						<div class="form-group">
							<textarea
							 name="inQrData1"
							 class="form-control"
							 style="min-height: 130px;"
							 placeholder="QR Data for Offer 1"></textarea>
						</div>
						<div class="form-group">
							<textarea
							 name="inQrData2"
							 class="form-control"
							 style="min-height: 130px;"
							 placeholder="QR Data for Offer 2"></textarea>
						</div>
						<button
						 type="submit"
						 class="btn btn-success">
							BUILD IT
						</button>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</html>
















