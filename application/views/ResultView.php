<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Tax Calculation</title>
<!-- Add to Head -->
<meta name="viewport" content="width=device-width,initial-scale=1.0" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet" />
<script language="JavaScript" type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/html5reset.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/col.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/1cols.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/2cols.css" media="all">

<style type="text/css">
/* THIS FORM IS RESPONSIVE - MOBILE FRIENDLY */
.margin {
   margin:8px; /* Form outside margin */
}
.form-container{
	max-width:800px; /* change this to get your desired form width */
    width:100%;
	margin: 0 auto;
	border:solid 1px #7b7edb; /* Remove outer border if wished */
	padding:10px;
	margin-top:5px;
	margin-bottom:40px;
	padding-bottom:30px;
}
.header {
  font-size:24px;
  font-weight:normal;
  background-color:#2e3192; /* Header Backgroung Colour  */
  color:white; /* Header Text Colour  */
  max-width:100%;
  padding:10px;
}
.sub-header {
  font-size:20px;
  font-weight:normal;
  background-color:;
  border-bottom:solid 1px #2e3192; /* Divider Border Colour  */
  color:#2e3192; /* Sub-heading Text Text Colour  */
  max-width:100%;
  padding:5px;
}
/* Placeholder disappears on focus */
input:focus::-webkit-input-placeholder  {color:transparent !IMPORTANT;}
input:focus::-moz-placeholder   {color:transparent !IMPORTANT;}
input:-moz-placeholder   {color:transparent !IMPORTANT;}
textarea:focus::-webkit-input-placeholder  {color:transparent !IMPORTANT;}
textarea:focus::-moz-placeholder   {color:transparent !IMPORTANT;}
textarea:-moz-placeholder   {color:transparent !IMPORTANT;}
textarea{ height:70px !IMPORTANT;}
input[type="file"] {
  color:#000 !IMPORTANT;    
}
input.file[type="text"] {
  background-color:white !IMPORTANT;
}
.control-label {font-size:14px; font-weight:bold; margin-bottom:5px; !IMPORTANT;}
.input-row {
  display:block;
  min-height:85px;
  margin-bottom:-5px;
}
input:-webkit-autofill {
    -webkit-box-shadow:0 0 0 50px white inset !important; /* Change the color to your own background color */
    -webkit-text-fill-color: #333 !important;
}
input:-webkit-autofill:focus {
    -webkit-box-shadow: /*your box-shadow*/,0 0 0 50px white inset !important;
    -webkit-text-fill-color: #333 !important;
}
</style>
</head>
<body>
<div class="margin">
  <div class="form-container">
    <div>&nbsp;</div>
    <div class="header"><center>Calculation Result</center></div>
    <div>&nbsp;</div>

    <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:25px;">
                    <center>
                    <h1> Tax Without Relief &nbsp;:&nbsp;<?php echo "Rp ".number_format($TaxResult[0],0,',','.'); ?> </h1><br>
                    <h1> Tax With Relief &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo "Rp ".number_format($TaxResult[1],0,',','.'); ?> </h1>
                    </center>
                    <br>
                    <br>
          </div>
        </div>
  </div>
</div>
</body>
</html>
