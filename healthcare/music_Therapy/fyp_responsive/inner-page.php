<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inner Page</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/table.css" rel="stylesheet" type="text/css">
	

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--DatePicker js-->
<script src="js/jquery-ui.js"></script>
	<!--DatePicker js-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
		<script src="assets/js/script.js"></script>

</head>
<body>
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-3 col-md-3 col-xs-12 hidden-xs">
        <div class="logo"> <a href="#"><img src="images/logo.png" class="img-responsive" alt=""/></a> </div>
      </div>
      <div class="col-lg-8 col-sm-9 col-md-9 col-xs-12 no-padding">
        <nav class="navbar navbar-default bg" role="navigation"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Medicine Assistant</a></li>
              <li class="active"><a href="#">Exercise Assistant</a></li>
              <li class="active"><a href="#">Food Assistant</a></li>
              <li class="active"><a href="#">Social Activities</a></li>
              <li class="active"><a href="#">Account</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
          
        </nav>
      </div>
      <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 hidden-lg hidden-sm hidden-md">
        <div class="logo"> <a href="#"><img src="images/logo.png" class="img-responsive"  alt=""/></a> </div>
      </div>
    </div>
  </div>
</div>
<div class="inner-page">
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
      <div class="post">
        <div class="post-img"> <i class="fa fa-heart"></i> </div>
        <div class="post-content">
          <p>Medicine Assistant</p>
        </div>
      </div>
    </div>
    <div class="col-lg-9">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec nibh odio. Ut tempus diam nisl, et ultricies quam dapibus interdum. Aenean tempor dapibus pretium. Vivamus nibh mi, condimentum sed faucibus in, blandit ac risus. Donec mattis sem justo, at interdum urna aliquet non. Curabitur lacus mauris, vehicula ut laoreet eget, euismod a diam. Duis eleifend nunc in fringilla sodales. Etiam ac elit quis nulla imperdiet pellentesque et et augue. Vivamus id porttitor lorem.</p>
    </div>
    <!-- *********************************************************FORM1************************************************************************* -->
    <div class="col-lg-12 contact-form">
      <button type="submit"   class="btn pull-right" data-toggle="modal" data-target="#myModal ">ADD</button>
	  
	  
      <div class="clearfix"></div>
      
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">
                <h3> Documents</h3>
              </h4>
            </div>
            <div class="modal-body">
			 <form role="form"  method="post" name="form1" id="form1" action='Doc_Func.php'>
             
                <div class="form-group">
                  <input type="text"  class="form-control" name ="doc_name" id="doc_name" placeholder="Name">
                </div>
                <div class="form-group">
                  <div class="select-field select-field custom-dropdown custom-dropdown--white select-field-2 no-margin-right"  >
                    <select class="form-control custom-dropdown__select custom-dropdown__select--white" name="doc_type" id="doc_type" required>
                      <option>-- Please Select Type --</option>
                      <option>Discharge Summary (DS)</option>
                      <option>Operative Note or Report (OP)</option>
                      <option>Consultation Report (CONSULTS).</option>
                      <option> Pathology Report (PATH)</option>
                      <option>Radiology Report (x rays or radiographs).</option>
                      <option>others </option>
                    </select>
                  </div>
                </div>
				
				<div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Description"  name='des' id ="des"></textarea>
                </div>
                <div class="form-group">
                  <input type="date" id="datepicker"  class="form-control"  placeholder="Date" required>
                </div>
                
                <div class="form-group">
                    <div class="form-control cover-logo">
                    <input type="file" multiple id="userfile" name="userfile">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" onclick="return validate_form1();"   class="btn pull-right">Save</button> <!-- button pull right will pull the button right -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Table 1 -->
   
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h3 id="myModalLabel">Delete</h3>
                        </div>
                        <div class="modal-body">
                            <p></p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                            <button data-dismiss="modal" class="btn red" id="btnYes">Confirm</button>
                        </div>
   </div>
   <div class="table-container">
   <table class="table table-striped table-hover table-users"  name ="table1" id="table1">
    <caption >
           Documents
        </caption>
    			<thead id="thead1">
        				<tr>
    					
    					<th >name</th>
    					<th>Type</th>
    					<th>Descryption</th>
    					<th >Date</th>
    					<th >File</th>
    					<th> Actions</th>
    				</tr>
    			</thead>

    			<tbody>
    				
    				<tr>
                        
    					<td >johnny</td>
    					<td>john</td>
    					<td>doe</td>
    					<td >dsd@gmail.com</td>
    					<td class="hidden-phone">active</td>
    					<td><a class="btn mini blue-stripe" href="#">Edit</a><a href="#" class="confirm-delete btn mini red-stripe" role="button" data-title="johnny" data-id="1">Delete</a><a href="#" class="confirm-view btn mini red-stripe" role="button" data-title="johnny2" data-id="2">View</a></td>

                       
                    </tr>
				
	               </tbody>

    		</table>
      </div>
      
      <!--   ********************************************************** FORM2************************************************************************** -->
      
<div class="col-lg-12 contact-form">
      <button type="button" id="checkbox-unchecked" class="btn pull-right" data-toggle="modal" data-target="#myModal1" >ADD</button>
       <div class="clearfix"></div>
      <!-- Modal -->
      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">
                <h3> Medicine</h3>
              </h4>
            </div>
            <div class="modal-body">
              <form role="form"  method="post" name="form2" id="form2" action='Medicine_Fun.php'>
                <div class="form-group">
                  <input type="text"  class="form-control"  placeholder="Name" name="form2_name" id="form2_name">
                </div>
                <div class="form-group">
                  <input type="text" data-minlength="6" class="form-control"  placeholder="Disease" name="form2_disease" id="form2_disease" required>
                </div>
                <div class="form-group">
                  <label> Stock
                    <input type="checkbox" value="1" name="click_stock" id="click_stock">
                  </label>
                </div>
                <div class="number-field">
                  <div class="form-group">
                    <label>Number of pills</label>
                    <input type="number"  class="form-control" id="pills" name="pills" placeholder="Number of pills" max="1000" min="0"  required>
                  </div>
                  <div class="form-group">
                    <label>Remind me after</label>
                    <input type="number"  class="form-control" id="remind" name="remind" placeholder="Remind me after" max="1000" min="0" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="number"  class="form-control" id="dossage" name="dossage" placeholder="Dosage"  max="1000" min="0"  required>
                </div>
                <div class="number-field1">
                  <div class="form-group">
                    <label>Number of pills</label>
                    <input type="number"  class="form-control" id="number_of_pills" name="number_of_pills" placeholder="Number of pills" max="1000" min="0"  required>
                  </div>
                </div>
                <!--       2nd form  started    -->
               <!-- <div class="form-group">
                  <input type="text" data-minlength="6" class="form-control" id="instruction" name="instruction" placeholder="Instruction" required>
                </div>-->
                  <label>Instruction</label>
                <div !class="number-field2">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios" value="option1" checked>
                     Before food </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios" value="option2">
                      After food </label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Reminder</label>
                  <input  type="time" data-minlength="6"  placeholder="Reminder" required name='daily_reminder' id='daily_reminder'></input>
                                  <div class="checklist">
                                  <label>Sun</label>
                <INPUT TYPE="Checkbox" Name="SUNDAY" ID="SUNDAY" Value="sun">
                 <label>Mon</label>
                <INPUT TYPE="Checkbox" Name="MONDAY" ID="MONDAY" Value="Mon">
                 <label>Tues</label>
                <INPUT TYPE="Checkbox" Name="TUESDAY" ID="TUESDAY" Value="tues">
                 <label>Wed</label>
                <INPUT TYPE="Checkbox" Name="WEDNESDAY" ID="WEDNESDAY" Value="wed">
                 <label>Thurs</label>
                <INPUT TYPE="Checkbox" Name="THURSDAY" ID="THURSDAY" Value="thur">
                 <label>Fri</label>
                <INPUT TYPE="Checkbox" Name="FRIDAY" ID="FRIDAY" Value="Fri">
                 <label>Sat</label>
                <INPUT TYPE="Checkbox" Name="SATURDAY" ID="SATURDAY" Value="Sat">
				</div>
                <div>
                  
                
                </div>
              </form>
            </div>
            <div class="modal-footer">
            <input type="hidden" name="ischeckedValue" id="ischeckedValue" value="">
              <button type="submit" class="btn pull-right" onclick="return validate_form2();">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <!-- Table code-->
      <div class="table-container">
   <table class="table table-striped table-hover table-users"  name ="table1" id="table1">
    <caption >
          Medicine
        </caption>
    			<thead id="thead1">
        				<tr>
    					
    					<th >name</th>
    					<th>Disease</th>
    					<th>Stock</th>
    					<th >Date Posted</th>
    					<th >Dosage</th>
    					<th> instruction</th>
    					<th> Alarm</th>
    					<th>Actions</th>
    				</tr>
    			</thead>

    			<tbody>
    				
    				<tr>
                        
    					
    					<td>john</td>
    					<td>doe</td>
    					<td >johnny</td>
    					<td>john</td>
    					<td>doe</td>
    					<td >dsd@gmail.com</td>
    					
    					<td class="hidden-phone">active</td>
    					<td><a class="btn mini blue-stripe" href="#">Edit</a><a href="#" class="confirm-delete btn mini red-stripe" role="button" data-title="johnny" data-id="1">Delete</a><a href="#" class="confirm-view btn mini red-stripe" role="button" data-title="johnny2" data-id="2">View</a></td>

                       
                    </tr>
				
	               </tbody>

    		</table>
      </div>
</div>

      
    </div>
  </div>
  


<script>
$(document).ready(function(e) {
 $(".number-field").hide();
 $(".number-field1").hide();
 //$(".number-field2").hide();
 $('input:checkbox').removeAttr('checked');
});
$("#click_stock").click( function() {
    $(this).is(":checked");
	if($(this).is(":checked"))
	{
		$("#ischeckedValue").val('1');
	}
	else
	{
			$("#ischeckedValue").val('');
	}
});

$( "#click_stock" ).click(function() {

$( ".number-field" ).slideToggle( "slow" );
});

$( "#instruction" ).click(function() {

$( ".number-field2" ).slideToggle( "slow" );
});
$( "#checkbox-unchecked" ).click(function() {
$('input:checkbox').removeAttr('checked');
$(".number-field").hide();
$(".number-field1").hide();
$(".number-field2").hide();
});
// ***************************************************************************validation for form1********************************************************//
function validate_form1()
{
	error_message = 'Please enter correct values for below mentioned fields.\n';
	var documentname = document.getElementById('doc_name').value;
	var document_type = document.getElementById('doc_type').value;
	var descryption= document.getElementById('des').value;
	var datepicker= document.getElementById('datepicker').value;
	var userfile= document.getElementById('userfile').value;
	
	if( documentname== '')
	{
		error_message += 'Name\n';
	}
	if(document_type == ''){
		error_message += 'Type\n';
	}
	if(descryption == ''){
		error_message += 'descryption\n';
	}
	if(datepicker=='')
	{
		error_message += 'date\n';
	}
	if(userfile=='')
	{
			error_message += 'file\n';
		
	}
	if(userfile!="")
	{
		if((userfile.lastIndexOf(".png"))==-1)
			{
				if((userfile.lastIndexOf(".jpg"))==-1)
				{
					if((userfile.lastIndexOf(".jpeg"))==-1)
					{
						if((userfile.lastIndexOf(".gif"))==-1)
						{
							error_message += 'file\n';
						}
					}
				}
			}	
	}
	if(error_message=='Please enter correct values for below mentioned fields.\n')
	{
		document.form1.submit();
		return true;
		
	
// 		$.ajax({
// 			url: 'Doc_Func.php',
// 			type: 'POST',
// 			dataType: 'json',
// 			data: {},
// 		})
// 		.done(function(data) {
// 				alert(data.responce_message);
// 				window.location.reload();
// 		})
// 		.fail(function() {
// 			console.log("error");
// 		})
// 		.always(function() {
// 			console.log("complete");
// 		});
		

	}
	
	
	else
		{
		alert(error_message);
		return false;
		}
}

function validate_form2()
{
	error_message = 'Please enter correct values for below mentioned fields.\n';
	var form2_name = document.getElementById('form2_name').value;
	var form2_disease = document.getElementById('form2_disease').value;
	var click_stock = document.getElementById('click_stock').value;
	var pills= document.getElementById('pills').value;
	var remind= document.getElementById('remind').value;
	var dossage= document.getElementById('dossage').value;
	var optionsRadios= document.getElementById('optionsRadios').value;
	var daily_reminder= document.getElementById('daily_reminder').value;
	var days= document.getElementById('SUNDAY').value;
	var days= document.getElementById('MONDAY').value;
	var days= document.getElementById('TUESDAY').value;
	var days= document.getElementById('WEDNESDAY').value;
	var days= document.getElementById('THURSDAY').value;
	var days= document.getElementById('FRIDAY').value;
	var days= document.getElementById('SATURDAY').value;
	
	
	
		
	
	if( form2_name== '')
	{
		error_message += 'Name\n';
	}
	if( form2_disease== '')
	{
		error_message += 'Disease\n';
	}
	if( dossage== '')
	{
		error_message += 'Dossage\n';
	}
	
	if($("#ischeckedValue").val()!="")
	{
		if( pills== '')
		{
			error_message += 'pills\n';
		}
		if( remind== '')
		{
			error_message += 'Reminder\n';
		}

		
	}
	if( daily_reminder== '')
		{
			error_message += 'Daily reminder\n';
		}
	
	
	
	if(error_message=='Please enter correct values for below mentioned fields.\n')
	{
		document.form2.submit();
		return true;
		
	
// 		$.ajax({
// 			url: 'Medicine_Fun.php',
// 			type: 'POST',
// 			dataType: 'json',
// 			data: {},
// 		})
// 		.done(function(data) {
// 				alert(data.responce_message);
// 				window.location.reload();
// 		})
// 		.fail(function() {
// 			console.log("error");
// 		})
// 		.always(function() {
// 			console.log("complete");
// 		});
		

	}
	
	
	else
		{
		alert(error_message);
		return false;
		}
}


</script>
</body>
</html>

