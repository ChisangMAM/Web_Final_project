<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>
	<div align="center">
			<form method="post" action=>
					<fieldset> 
						  <legend>Payment method</legend>
						  <table cellspacing="8" > 
							  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
				
							  <tr>
								  <td align="left"><i class="fas fa-calendar-plus"></i></i> Please select your receive date:</td>
								  <td><input type="date" name="receivedate"></td>
							  </tr>
				
							  <tr>
								  <td align="left"><i class="fas fa-calendar-check"></i></i> Please select our pick up date:</i></td>
								  <td><input type="date" name="pickupdate"></td>
							  </tr>
				
							  <tr>
								  <td> <i class="fas fa-truck-loading"></i> Please select Delivery Company:
									  <select name="Delivery_company">
										  <optgroup label="Delivery_company">
											  <option value="Joonak">Joonak</option>
											  <option value="Kh express">Kh Express</option>
											  <option value="Grab">Grab</option>
										  </optgroup>
									  </select>
								  </td>
							  </tr>
				
							  <tr>
								  <td align="left"><i class="fab fa-cc-amazon-pay"></i> Please select your payment:
									  <select name="Payment">
										  <optgroup label="Payment">
											  <option value="Visa">Visa</option>
											  <option value="MasterCard">MasterCard</option>
											  <option value="Cash">Cash</option>
										  </optgroup>
									  </select>
				
									  
								  </td>
							  </tr>
				
							  <tr>
								  <td align="left"> <i class="fas fa-map-marked-alt"></i> Please pin your location:</td>
							  </tr>
							  <td align="">
									  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.6617884091133!2d104.92088061434893!3d11.576085691781975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095144cbde54c5%3A0x896f2f2425b11476!2zV2F0IFBobm9tLCDhnpXhn5Lhnpvhnrzhnpzhnpzhno_hn5Lhno_hnpfhn5LhnpPhn4YsIFBobm9tIFBlbmg!5e0!3m2!1sen!2skh!4v1552104170060" width="150%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
								  </td>
				
							  </tr>
				
						  </table>
						  <div align="right" id="confirm">
							  <div class="message">Thanks for use our service. Please come back again!</div>
							  <!-- <a href="A).web_project.html"><button class="yes" onclick="">Home</button></a> -->
							<a href="" class="yes btn btn-primary">Home</a>
						</div>
					
						<input style="background-color: pink" type = "button"  value = "Done!"  onclick = "functionAlert()"; >
					  </fieldset>
				
				
				</form>
	</div>
</body>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
         function functionAlert(msg, myYes) {
            var confirmBox = $("#confirm");
            confirmBox.find(".message").text(msg);
            confirmBox.find(".yes").unbind().click(function() {
               confirmBox.hide();
            });
            confirmBox.find(".yes").click(myYes);
            confirmBox.show();
         }
      </script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <link rel="stylesheet" type="text/css" href="styles/Allanimation.css">

</html>