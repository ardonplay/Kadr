<?

/******************************************************************************
 * Init some variables with values from $_POST so we don't have to keep typing*
 * the full array list name whenever we want to use the values.               *
 * ****************************************************************************/

$bkgImg		=	'/assets/img/' . $_POST['inBkgImg'];
$eventName	=	$_POST['inEventName'];
$headline	=	$_POST['inHeadline'];
$opening	=	$_POST['inOpening'];
$quote		=	$_POST['inQuote'];
$attrib		=	$_POST['inAttrib'];
$font1		=	$_POST['fonts1'];
$font2		=	$_POST['fonts2'];
$font3		=	$_POST['fonts3'];
$font4		=	$_POST['fonts4'];
$dateFr		=	$_POST['inFrDate'];
$dateTo		=	$_POST['inToDate'];
$textOffer1	=	$_POST['inOffer1'];
$addOffer1	=	$_POST['inAdditional1'];
$textOffer2	=	$_POST['inOffer2'];
$addOffer2	=	$_POST['inAdditional2'];
$qrSize		=	$_POST['inQrSize'];
$qrData1	=	$_POST['inQrData1'];
$qrData2	=	$_POST['inQrData2'];

if($font1=="Sans"){
	$font1	=	'Questrial';
} else if($font1=="Serif"){
	$font1	=	'Oranienbaum';
} else if($font1=="Fancy"){
	$font1 = 	'Dancing Script';
}

if($font2=="Sans"){
	$font2	=	'Questrial';
} else if($font2=="Serif"){
	$font2	=	'Oranienbaum';
} else if($font2=="Fancy"){
	$font2 = 	'Dancing Script';
}

if($font3=="Sans"){
	$font3	=	'Questrial';
} else if($font3=="Serif"){
	$font3	=	'Oranienbaum';
} else if($font3=="Fancy"){
	$font3 = 	'Dancing Script';
}

if($font4=="Sans"){
	$font4	=	'Questrial';
} else if($font4=="Serif"){
	$font4	=	'Oranienbaum';
} else if($font4=="Fancy"){
	$font4 = 	'Dancing Script';
}


/******************************************************************************
 * Build a page generator string using the values passed from form.           *
 ******************************************************************************/

$strOut	=	'<!DOCTYPE html>'
		.	'<html style=' . "'" . 'background: url("' . $bkgImg . '") '
		.	'no-repeat center center fixed; background-size: 100% 100%;' . "'>"
		.	'<head>'
		.	'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'
		.	'<title>title of the page would go here</title>'
		.	'<link href="assets/css/bootstrap.css" rel="stylesheet" />'
		.	'<link href="assets/css/custom.css" rel="stylesheet" />'
		.	'<link href="http://fonts.googleapis.com/css?'
		.	'family=Oranienbaum|Questrial|Dancing+Script:700" '
		.	'rel="stylesheet" type="text/css">'
		.	'<!-- Oranienbaum = serif, Questrial = sans, DancingSript = fancy -->'
		.	'</head>';

$strOut	=	$strOut
		.	'<body>'
		.	'<div id="main" class="container" '
		.	'style="z-index:2; '
		.	'margin-top: 50px; '
		.	'min-height:600px; '
		.	'padding: 22px;">'
		.	'<h1 style="font-family:' . $font1 . ';">' . $headline . '</h1>'
		.	'<div class="row">'
		.	'<div class="col-lg-7">'
		.	'<p style="font-family:' . $font2 . ';">' . $opening . '</p>'
		.	'<div class="row" style="margin-top:20px">'
		.	'<div class="col-lg-5" '
		.	'style="border: 2px dashed #000000; padding: 4px;">'
		.	'<p  style="font-weight:bold;">' . $textOffer1 . '</p>'
		.	'<p>' . $addOffer1 . '</p>'
		.	'<img src="https://chart.googleapis.com/chart?chl=' . $qrData1
		.	'&chs=' . $qrSize . 'x' . $qrSize . '&cht=qr" alt="Voucher 1" />'
		.	'</div>'
		.	'<div class="col-lg-1 hidden-sm hidden-xs">&nbsp;</div>'
		.	'<div class="col-lg-5" '
		.	'style="border: 2px dashed #000000; padding: 4px;">'
		.	'<p  style="font-weight:bold;">' . $textOffer2 . '</p>'
		.	'<p>' . $addOffer2 . '</p>'
		.	'<img src="https://chart.googleapis.com/chart?chl=' . $qrData2
		.	'&chs=' . $qrSize . 'x' . $qrSize . '&cht=qr" alt="Voucher 2" />'
		.	'</div></div></div>'
		.	'<div class="col-lg-5">'
		.	'<p style="margin-top:40px; font-family:' . $font3 . ';font-size:3em;">'
		.	$quote . '</p>'
		.	'<p style="font-family:' . $font4 . ';">' . $attrib . '</p>'
		. 	'</div></div></div>'
		.	'</body>'
		.	'<script src="assets/js/jquery.js"></script>'
		.	'<script src="assets/js/bootstrap.js"></script>'
		.	'</html>';

/******************************************************************************
 * Create a text file to accept the output string					          *
 ******************************************************************************/
$f = fopen("voucher.html", "w"); 
fwrite($f, $strOut); 
fclose($f);  


/******************************************************************************
 * Give some feedback and a test link                                         *
 ******************************************************************************/
echo('<a href="voucher.html">Click here</a> to test if the build worked.');


?>



