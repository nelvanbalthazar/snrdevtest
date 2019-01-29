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
<!-- jQuery Form Validation code -->
<script type="text/javascript" language="JavaScript">

function isNumberKey(event)
      {
        var key = window.event ? event.keyCode : event.which;
 if (event.keyCode == 8 || event.keyCode == 46
|| event.keyCode == 37 || event.keyCode == 39) {
 return true;
  }
  else if ( key < 48 || key > 57 ) {
      return false;
  }
  else return true;
  };

//File upload button
$(function() {

    
  // We can attach the `fileselect` event to all file inputs on the page
  

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
}); 


// Form Validation
$(function () {
   
$("#frmFormMail").validate({
        ignore: ".ignore",
        
        // Specify the validation rules
        rules: {
            field_0: { // Name
                required: true, // true required - false not required
            },
            field_1: { // Age
                required: true,
            },
            field_6: { // Select Job
                required: true,
            },
            field_7: { // Job full part time
                required: true,
            },
			
			
           
       },
        // Specify the validation error messages
        messages: {
	        field_10: {
                required: "Required field", // Required will only show up if rules are set to true required above
                accept: "File type is not accepted"
            },
			
        },
   });

});

// Textarea Countdown
function limitTextCount(limitField_id, limitCount_id, limitNum)
{
    var limitField = document.getElementById(limitField_id);
    var limitCount = document.getElementById(limitCount_id);
    var fieldLEN = limitField.value.length;

    if (fieldLEN > limitNum)
    {
        limitField.value = limitField.value.substring(0, limitNum);
    }
    else
    {
        limitCount.innerHTML = (limitNum - fieldLEN) + ' Countdown';
    }
}
// Submit button Please Wait... and loading gif
$(function () {
    $('#frmFormMail').submit(function () {
        if($(this).valid()) {
          $("#btn").val("Please Wait... ");
		  $('#divMsg').show();
        }
    });
});
</script>
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
  font-size:20px;
  font-weight:normal;
  background-color:#2e3192; /* Header Backgroung Colour  */
  color:white; /* Header Text Colour  */
  max-width:100%;
  padding:10px;
}
.sub-header {
  font-size:24px;
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
    <div class="header">Tax Calculation</div>
    <div>&nbsp;</div>
    <form name="frmFormMail" id="frmFormMail" action='<?php echo base_url();?>index.php/CalculationResult' method='post' enctype='multipart/form-data' autocomplete="on">
      <input type='hidden' name='formmail_submit' value='Y'>
      <input type='hidden' name='mod' value='ajax'>
      <input type='hidden' name='func' value='submit'>
      <!-- Left Column -->
      <div class="section group">
        <div class="col span_1_of_2">
          <div class="sub-header">Personal Information</div>
          <div>&nbsp;</div>
          <div class="input-row">
            <label class="control-label" for="field_0">Full Name <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="field_0" id="field_0" value="" maxlength="50" class="form-control" placeholder="Your Name" required>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_0" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_1">Age <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="field_1" id="field_1" value="" maxlength="50" class="form-control" placeholder="Your Age" required>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; font-size:12px; margin-top:5px;" class="error" for="field_1" generated="true"></label>
            </div>
          </div>
          
        </div>
        <!-- Right Column -->
        <div class="col span_1_of_2">
          <div class="sub-header">Your Income</div>
          <div>&nbsp;</div>
          <div class="input-row">
            <label class="control-label" for="field_6"> Monthly Salary <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <input type="text" name="field_6" id="field_6" value="" maxlength="50" class="form-control" placeholder="Monthly Salary" required onkeypress="return isNumberKey(event)">
             
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_6" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_7">Tax Relief <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="field_7" id="field_7" class="form-control" required>
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="TK0">TK0 - Single</option>
                  <option value="K0">K0 - Married with No Dependant</option>
                  <option value="K1">K1 - Married with One Dependant</option>
                  <option value="K2">K2 - Married with Two Dependants</option>
                  <option value="K3">K3 - Married with Three Dependants</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_7" generated="true"></label>
            </div>
          </div>
          
        </div>
      </div>
      
          <div class="input-row" style="margin-bottom:-40px;">
            <div class="inputGroupContainer">
              <!-- For blue button change btn-default to btn-primary - You can remove button width:100%; to standard size -->
              <input type="submit" name="submit" value="Submit" id="btn" class="btn btn-primary btn-lg">
		      <div id="divMsg" style="display:none;"><img src="<?php echo base_url();?>assets/img/loading-bar.gif" alt="Please wait.." width="160" /></div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>
