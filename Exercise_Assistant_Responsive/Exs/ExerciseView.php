
<!doctype html>
<html>
<head>
<link href="e_css/style.css" rel='stylesheet' type='text/css' />
<!-- .............. -->
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../assets/css/style.css" rel="stylesheet" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="../css/table.css" rel="stylesheet" type="text/css">
	<!--DatePicker Css-->
 <link rel="stylesheet" href="../CSS/jquery-ui.css">
	<!--DatePicker Css-->

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

	<!--DatePicker js-->
<script src="../js/jquery-ui.js"></script>
<!--  -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/exer_alarm.js"></script>

<!-- //grid-slider -->
</head>
<body>
 <!-- start header_top -->
 <div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-3 col-md-3 col-xs-12 hidden-xs">
        <div class="logo"> <a href="#"><img src="../images/logo.png" class="img-responsive" alt=""/></a> </div>
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
        <div class="logo"> <a href="#"><img src="../images/logo.png" class="img-responsive"  alt=""/></a> </div>
      </div>
    </div>
 </div>
</div>
 
          <!-- /.navbar-collapse --> 
	<div class="header1">
	   <div class="container">
		  <div class="header-text">
			<h1>Don't Get worried </h1>
			<h2>Fitness Solutions Are there For u</h2>
			<br>
			<br>

			<div class="banner_btn"  >
				<a  data-toggle="modal" data-target="#myModal" href="#">Reminder</a>
				<a  data-toggle="modal" data-target="#myModal1 " href="#">Fats</a>
				<a href="#">Workouts</a>
				
			</div>
		  </div>
		  <!-- Model -->
	 <div class="col-lg-12 contact-form">
      <div class="clearfix"></div>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">
                <h3> Exercise Reminder</h3>
              </h4>
            </div>
            <div class="modal-body">
              <form role="form"  data-toggle="validator" method="post" name="form1" id="form1">
                <div class="form-group">
                 <label>Reminder</label>
                  <input  type="time" data-minlength="6"  placeholder="Reminder" required name='daliy_reminder2' id='daliy_reminder2'></input>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" onclick="return validate_form3();"   class="btn pull-right">Save</button> <!-- button pull right will pull the button right -->
            </div>
          </div>
        </div>
      </div>
    </div>
		  <!--Model1  -->
		  
		   <!-- Model -->
	 <div class="col-lg-12 contact-form">
      <div class="clearfix"></div>
      <!-- Modal -->
      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">
                <h3>Calculate Your Body FATS Here</h3>
              </h4>
            </div>
            
            
            <!-- Form Table-->
             <table    id="cal_data"  name="cal_data" >
             
                   <tr>
                   <td><input class="cal_text"  placeholder="Height" type="number"  min="0" name="txtHeight" size="20" ></td>
                   <td><select class="cal_option" name="opHeight">
                         <option value="0">Cm</option>
                         <option value="1">Inch</option>
                         </select></td>
                   </tr>
                   <tr>
                  
                   <td><input class="cal_text"  placeholder="Neck"type="number"  min="0" name="txtNeck" size="20" ></td>
                        <td><select class="cal_option" name="opNeck">
                         <option value="0">Cm</option>
                          <option value="1">Inch</option>
                          </select></td>
                   </tr>
                  <tr>
                  <td><input class="cal_text"    placeholder="Waist" type="number" min="0" name="txtWaist" size="20" ></td>
                  <td><select class="cal_option" name="opWaist">
                  <option value="0">Cm</option>
                  <option value="1">Inch</option>
                  </select></td>
                 </tr>
                 <tr>
                  <td><input class="cal_text" type="number" placeholder="Hip size(Female):" name="txtHip" size="20" ></td>
                  <td><select class="cal_option" name="opHip">
                   <option value="0">Cm</option>
                   <option value="1">Inch</option>
                   </select></td>
                 </tr>
                 <tr>
                 <td><input class="cal_text" type="number"  placeholder="Weight"  name="txtWeight" size="20" ></td>
                <td><select class="cal_option" name="opWeight">
                <option value="0">Kg</option>
                <option value="1">Pound</option>
                </select></td>
               </tr>
               </table>
               <table>
             <tr>
              <select id="Select7" class="cal_option" placeholder="Select Activity"  style="width:72%;border: solid 1px silver; name="opActivity">
               <option selected="selected" value="">Select Activity</option>
              <option value="selected" value="0">Sedentary (Very little or no exercise)</option>
              <option value="1">Lightly active (light exercise/sports 1-3 days/week)</option>
              <option value="2">Moderately active (moderate exercise/sports 3-5 days/week)</option>
             <option value="3">Very active (hard exercise/sports 6-7 days a week)</option>
             <option value="4">Extra active (very hard exercise)</option>
            </select>
              </tr>
              
             <br >
             <tr>
             <select class="cal_option" placeholder="Gender"  style="width:72%;border: solid 1px silver;" name="opGender">
              <option selected="selected" value="">Select </option>
              <option value="0">Male</option>
              <option value="1">Female</option>
              </select><br ><br >
              </tr>
              <tr>
              <input class="cal_text" placeholder="Age"  style="width:60%;border: solid 1px silver;" type="number" name="txtAge" size="20" > 
              </tr>
            
             </table>
            <div class="modal-footer">
               <input onclick="Calculate()" class="cal_button" type="button" value="Calculate" >&nbsp;<input type="reset" class="cal_button" value="Reset" onclick="resetAll()" >&nbsp;<input name="btnDownload" type="button" class="cal_button" disabled value="Download" onclick="download()" >
              <br>
              </div>
          </div>
        </div>
      </div>
    </div>
		  <!--Model1  -->
		  
		  
		  
		  
		  <div class="header-arrow">
		     <a href="#menu" class="class scroll"><span> </span </a>
		  </div>
	    </div>
	  </div>
	
	<!-- end header_bottom -->
	<!-- start menu -->
    <div class="menu" id="menu">
	  <div class="container">
		 
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
	 <div class="main">
	 	 <div class="container">
			<!-- start content-top -->
			<div class="row content-top">
				 <div class="col-md-5">
				  <img src="e_images/pic.png" class="img-responsive" alt=""/> 
			     </div>
				 <div class="col-md-7 content_left_text">
				   <h3>Lorem ipsum dolor sit!</h3>
				   <p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				 </div>
            </div>
		 </div>
		<!-- end content-top -->
		<div class="container">
		    <div class="row content-middle">
		      <!-- start content-middle -->
	 	    	<div class="col-md-4"><a href="pricing.html">
	 	    		<ul class="spinning">
	 	    			<li class="live">YOGA</li>
	 	    			
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="e_images/pic3.jpg" class="img-responsive" alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				 <div class="col-md-4"><a href="pricing.html">
	 	    		<ul class="spinning">
	 	    			<li class="live">Ab & Mucsles</span></li>
	 	    			
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="e_images/pic2.jpg" class="img-responsive"  alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				 <div class="col-md-4"><a href="pricing.html">
	 	    		<ul class="spinning">
	 	    			<li class="live">GYM </li>
	 	    			
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="e_images/pic1.jpg" class="img-responsive" alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				<div class="clear"></div>
		   </div>
		  
	     </div>
	     <Script>
	     function validate_form3()
	     {
	     	error_message = 'Please enter correct values for below mentioned fields.\n';
	     	var daliy_reminder2= document.getElementById('daliy_reminder2').value;
	     		
	     	
	     	
	     	if( daliy_reminder2== '')
	     		{
	     			error_message += 'reminder\n';
	     		}
	     	
	     	
	     	
	     	if(error_message=='Please enter correct values for below mentioned fields.\n')
	     	{
	     		alert('data saved');
	    		
	    		$.ajax({
	    			url: 'function_exs.php',
	    			type: 'POST',
	    			dataType: 'json',
	    			data: {daliy_reminder2:daliy_reminder2},
	    		})
	    		.done(function(data) {
	    				alert(data.responce_message);
	    				window.location.reload();
	    		})
	    		.fail(function() {
	    			console.log("error");
	    		})
	    		.always(function() {
	    			console.log("complete");
	    		});
	    		return true;
	     		
	     		
	 

	     	}
	     	
	     	
	     	else
	     		{
	     		alert(error_message);
	     		return false;
	     		}
	     }


	   
	     </Script>
</body>
<!--  <script>
window.setInterval(function(){
	var d=new Date();
	var nhour=d.getHours(),nmin=d.getMinutes(),ap;
	     if(nhour==0){ap=" AM";nhour=12;}
	else if(nhour<12){ap=" AM";}
	else if(nhour==12){ap=" PM";}
	else if(nhour>12){ap=" PM";nhour-=12;}

	if(nmin<=9) nmin="0"+nmin;
	var time=""+nhour+":"+nmin+ap+"";
	//alert(time);
	 
	  $.ajax({
			url: 'check_exs.php?txt_account_no='+time,
			 type: 'POST',
		 success: function (response) {
			 if(response.trim() == '1'){
				 alert("Its time for excercise.");
			 }
			 //document.getElementById('showHtml').innerHTML = response;
                
		    },
			error: function (xhr, status) {
                alert("error34");
            }
                 
			
		})
	}, 5000);
	     </script>
	     -->
	     
	<div id="showHtml">
    sdsdsdsd
	</div>
</html>