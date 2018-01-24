

<script>

$( document ).ready(function() {

    $( "select" ).change(function() {

	  var venue = this.value ;


	  if (venue==="paysec"){
		  $(".venue_name").html("PaySec");
		  $(".emailfield").html("@paysec.com");
	  }

	   if (venue==="sappaya"){
		  $(".venue_name").html("Sappaya");
		  $(".emailfield").html("@sappaya.com");
	  }

	   if (venue==="tappit"){
		  $(".venue_name").html("Tappit");
		  $(".emailfield").html("@justtappit.com");
	  }

    if (venue==="pago"){
     $(".venue_name").html("PAGO");
     $(".emailfield").html("@pagoglobal.com");
   }


	});
});
</script>


 <?php
    $hosting_url = "http://e-newsletters.net.au/Sappaya/email-signature/";

    $json = '{
              	"paysec" : {
              		 "name" : "PaySec",
              		 "email" : "@paysec.com",
              		 "logo" : "PaySec_Email-Signature_03.jpg",
              		 "color_name" : "#dd3c30",
                   "color_role" : "#77787b",
                   "color_add" : "#77787b",
                   "color_tpsmew" : "#77787b",
              		 "website" : "paysec.com"

              	},

              	"sappaya" : {
              		 "name" : "Sappaya",
              		 "email" : "@sappaya.com",
              		 "logo" : "Sappaya-Email-Signature_03.jpg",
              		 "color_name" : "#000001",
                   "color_role" : "#77787b",
                   "color_add" : "#77787b",
                   "color_tpsmew" : "#000001",
              		 "website" : "sappaya.com"

              	},

                "tappit" : {
              		 "name" : "Tappit",
              		 "email" : "@justtappit.com",
              		 "logo" : "Tappit_Email-Signature_03.jpg",
              		 "color_name" : "#000001",
                   "color_role" : "#000001",
                   "color_add" : "#000001",
                   "color_tpsmew" : "#000001",
              		 "website" : "justtappit.com"

              	},

                "pago" : {
                   "name" : "PAGO",
                   "email" : "@pagoglobal.com",
                   "logo" : "Pago_Email-Signature_03.jpg",
                   "color_name" : "#d22d1c",
                   "color_role" : "#000001",
                   "color_add" : "#58595b",
                   "color_tpsmew" : "#000001",
                   "website" : "pagoglobal.com"

                },

                "intrapay" : {
                   "name" : "Intrapay",
                   "email" : "@intrapay.com",
                   "logo" : "Intrapay-Email-Signature.jpg",
                   "color_name" : "#5a9a98",
                   "color_role" : "#000001",
                   "color_add" : "#58595b",
                   "color_tpsmew" : "#000001",
                   "website" : "Intrapay.com"

                }



              }';

    $venue_info = json_decode($json, true);



    if(  isset($_POST['venue']) && ($_POST['venue'] !='') ){


        $select_venue = $_POST['venue'];

        $venue_name = $venue_info[$select_venue]['name'];

        $email = $venue_info[$select_venue]['email'];

        $website = $venue_info[$select_venue]['website'];

        $logo_url =  $hosting_url.'images/'.$venue_info[$select_venue]['logo'];

        $color_name =  $venue_info[$select_venue]['color_name'];

        $color_role =  $venue_info[$select_venue]['color_role'];

        $color_add =  $venue_info[$select_venue]['color_add'];

        $color_tpsmew =  $venue_info[$select_venue]['color_tpsmew'];


    }


    if(isset($_POST['generate']) && isset($_POST['html_only'])) : ?>
    <style type="text/css">body{background:#fff}a[x-apple-data-detectors],a,a:link{color:inherit!important;text-decoration:none!important;font-size:inherit!important;font-family:inherit!important;font-weight:inherit!important;line-height:inherit!important}</style><table width="100%" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td> <table width="340" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td> <table width="100%" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td width="100%" valign="top" bgcolor="#ffffff" style="padding:0px"> <table width="100%" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td width="700" valign="top" colspan="1" style="font-family:Calibri,Arial,Helvetica,sans-serif;color:#000;padding-bottom:10px"> <table width="340" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td width="340" valign="top" colspan="1" align="right" style="padding-bottom:0;padding-top:5px"> <table width="340" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td valign="top" colspan="5" align="left"> <a href="http://<?php echo $venue_info[$select_venue]['website']; ?>"><img src="<?php echo $logo_url; ?>" alt="<?php echo $venue_name; ?> logo" border="0" style="display:block"></a> </td> </tr> </table> </td> </tr> <tr> <td style="padding:12px 0 12px 0;mso-line-height-rule:exactly" valign="top"> <table width="100%" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td style="padding:0;line-height:20px;mso-line-height-rule:exactly"> <span style="font-family:Calibri,Arial,Helvetica,sans-serif;font-size:18px;font-weight:bold;color:<?php echo $color_name; ?>"><?php echo $_POST['name']; ?></span><br> <span style="font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:<?php echo $color_role; ?>"><?php echo $_POST['role']; ?></span> </td> </tr> </table> </td> </tr> <tr> <td style="padding:0 0 5px 0;line-height:14px;mso-line-height-rule:exactly"> <span style="font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;color:<?php echo $color_add; ?>"> <?php echo $_POST['add1']; ?> </span> </td> </tr> <?php if($_POST['add2']) { ?> <tr> <td style="padding:0;line-height:14px;mso-line-height-rule:exactly"> <span style="font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;color:<?php echo $color_add; ?>"> <?php echo $_POST['add2']; ?> </span> </td> </tr> <?php } ?> <tr> <td valign="middle" colspan="1" style="padding:10px 0 20px 0;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:12px;color:#6d6e70;line-height:13px"> <table width="340" cellpadding="0" cellspacing="0" border="0" align="left"> <?php if ($_POST['phone'] !=''): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style="color:<?php echo $color_tpsmew; ?>">T</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;padding-bottom:4px;color:<?php echo $color_add; ?>"> <a href="tel:<?php echo $_POST['phone']; ?>" style="text-decoration:none;color:<?php echo $color_add; ?>"><?php echo $_POST['phone']; ?></a> </td> </tr> <?php endif; ?> <?php if ($_POST['dayphone'] !=''): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style="color:<?php echo $color_tpsmew; ?>">P</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;padding-bottom:4px;color:<?php echo $color_add; ?>"> <a href="tel:<?php echo $_POST['dayphone']; ?>" style="text-decoration:none;color:<?php echo $color_add; ?>"><?php echo $_POST['dayphone']; ?></a> </td> </tr> <?php endif; ?> <?php if ($_POST['mobile'] !=''): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style="color:<?php echo $color_tpsmew; ?>">M</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;padding-bottom:4px;color:<?php echo $color_add; ?>"> <a href="tel:<?php echo $_POST['mobile']; ?>" style="text-decoration:none;color:<?php echo $color_add; ?>"><?php echo $_POST['mobile']; ?></a> </td> </tr> <?php endif; ?> <?php if ($_POST['skype'] !=''): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style="color:<?php echo $color_tpsmew; ?>">S</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;padding-bottom:4px;color:<?php echo $color_add;?>"> <a href="skype:<?php echo $_POST['skype']; ?>?chat" style="text-decoration:none;color:<?php echo $color_add; ?>"><?php echo $_POST['skype']; ?></a> </td> </tr> <?php endif; ?> <?php if ($_POST['email'] !=''): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style=";color:<?php echo $color_tpsmew; ?>">E</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;padding-bottom:4px;color:<?php echo $color_add; ?>"> <a href="mailto:<?php echo $_POST['email'].$email; ?>" style="text-decoration:none;color:<?php echo $color_add; ?>"><?php echo $_POST['email'].$email; ?></a> </td> </tr> <?php endif; ?> <?php if ($select_venue =='sappaya'): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style=";color:<?php echo $color_tpsmew; ?>">W</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;color:<?php echo $color_add; ?>"> <a href="http://<?php echo $website; ?>" style="color:<?php echo $color_add; ?>;text-decoration:none;line-height:14px"><?php echo $website; ?></a> </td> </tr> <?php endif; ?> </table> </td> </tr> <?php if ($select_venue =='sappaya'): ?> <tr> <td width="340" valign="top" colspan="1" align="left" style="padding-top:5px"> <table width="340" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td width="94" valign="top" align="left"> <a href="http://www.clickdebit.com/" style="display:block"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_06.jpg" alt="clickdebit" width="94" height="46" border="0"></a> </td> <td width="73" valign="top" align="left"> <a href="http://www.justtappit.com/"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_3_04.jpg" alt="tapit" width="73" height="46" border="0" style="display:block"></a> </td> <td width="72" valign="top" align="left"> <a href="http://www.pagoglobal.com/"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_08.jpg" alt="pago" width="72" height="46" border="0" style="display:block"></a> </td> <td width="26" valign="top" align="left"> <a href="http://www.paysec.com/"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_09.jpg" alt="paysec" width="85" height="46" border="0" style="display:block"></a> </td> <td></td> </tr> </table> </td> </tr> <?php else: ?> <tr> <td width="340" style="padding:0 0 10px 0;font-size:14px;font-family:Calibri,Arial,Helvetica,sans-serif;line-height:14px;font-weight:bold;color:<?php echo $color_role; ?>"> <a href="http://<?php echo $website; ?>" style="color:<?php echo $color_role; ?>;font-family:Calibri,Arial,Helvetica,sans-serif;text-decoration:none;font-weight:bold"><?php echo $website; ?></a> </td> </tr> <?php endif; ?> <tr> <td width="320" style="padding:16px 0 20px 0"> <span style="font-family:Calibri,Arial,Helvetica,sans-serif;font-size:11px;line-height:14px;font-weight:normal;color:#838383"> This message is solely for the intended recipient and may contain confidential information. If you are not the intended recipient, please notify the sender, delete the message from your system immediately and do not disclose the contents to any other party. </span> </td> </tr> </table> </td> </tr> </table>
<?php exit; else : ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Email Signature</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="http://getbootstrap.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

        <form action="" method="POST" class="form-horizontal">
        <fieldset>

        <!-- Form Name -->
        <legend><span class="venue_name"></span> Email Signature</legend>



        <div class="form-group">
          <label class="col-md-2 control-label" for="name">Please select company</label>
          <div class="col-md-10">
			         <select name="venue" id="venue_opt" class="form-control input-md">
        					<option value="">--</option>
        					<option value="paysec">PaySec</option>
        					<option value="sappaya">Sappaya</option>
        					<option value="tappit">Tappit</option>
                  <option value="pago">PAGO</option>
                  <option value="intrapay">Intrapay</option>
        			  </select>

          </div>
        </div>



        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="name">Name</label>
          <div class="col-md-10">
          <input id="name" name="name" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="role">Role</label>
          <div class="col-md-10">
          <input id="role" name="role" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Text input-->
         <div class="form-group">
          <label class="col-md-2 control-label" for="add1">Address line 1</label>
          <div class="col-md-10">
          <input id="add1" name="add1" type="text" placeholder="" class="form-control input-md" value="PO Box 000, Suburb, State, Country 1234">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="add2">Address line 2</label>
          <div class="col-md-10">
          <input id="add2" name="add2" type="text" placeholder="" class="form-control input-md" >

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group phone">
          <label class="col-md-2 control-label" for="phone">Telephone Number</label>
          <div class="col-md-10">
            <div class="input-group">
               <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md">
            </div>

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group dayphone">
          <label class="col-md-2 control-label" for="dayphone">Day Phone Number</label>
          <div class="col-md-10">
            <div class="input-group">
               <input id="dayphone" name="dayphone" type="text" placeholder="" class="form-control input-md">
            </div>

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="mobile">Mobile</label>
          <div class="col-md-10">
            <div class="input-group">
               <input id="mobile" name="mobile" type="text" placeholder="" class="form-control input-md">
            </div>

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group skype">
          <label class="col-md-2 control-label" for="skype">Skype</label>
          <div class="col-md-10">
            <div class="input-group">
              <input id="skype" name="skype" type="text" placeholder="" class="form-control input-md">
            </div>

          </div>
        </div>

        
        <div class="form-group">
          <label class="col-md-2 control-label" for="email">Email</label>
          <div class="col-md-4">
            <div class="input-group">
              <input id="email" name="email" class="form-control" placeholder="name" type="text">
              <span class="input-group-addon emailfield">@sappaya.com</span>
            </div>

          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="html_only">HTML Only</label>
          <div class="col-md-10">
            <input type="checkbox" id="html_only" name="html_only" value="1">
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="generate"></label>
          <div class="col-md-10">
            <button type="submit" id="generate" name="generate" class="btn btn-primary">Generate</button>
          </div>
        </div>

        </fieldset>
        </form>





<?php if( (isset($_POST['generate'])) && ($_POST['venue'] !='') ) : ?>

    <div class="col-md-12">

        <style type="text/css">body{background:#fff;} a[x-apple-data-detectors], a, a:link {color: inherit !important;text-decoration: none !important;font-size: inherit !important;font-family: inherit !important;font-weight: inherit !important;line-height: inherit !important;}</style>
        <table width="100%" cellpadding="0" cellspacing="0" border="0" align="left">
        	<tr>
            	<td>
                    <table width="340" cellpadding="0" cellspacing="0" border="0" align="left">
                    	<tr>
                        	<td>
                                	<table width="100%" cellpadding="0" cellspacing="0" border="0" align="left">
                                    	<tr>
                                        	<td width="100%" valign="top" bgcolor="#ffffff" style="padding:0px;">
                                            	<table width="100%" cellpadding="0" cellspacing="0" border="0" align="left">
                                                    <tr>

                                                        <td width="700"   valign="top" colspan="1" style="font-family:Calibri, Arial, Helvetica, sans-serif; color:#000000; padding-bottom:10px;">

                                                        	<table width="340" cellpadding="0" cellspacing="0" border="0" align="left">
                                                         		 <tr>
                                                               	<td width="340" valign="top" colspan="1"   align="right" style="padding-bottom:0px; padding-top:5px;">
                                                                      <table width="340" cellpadding="0" cellspacing="0" border="0" align="left">
                                                                          <tr>
                                                                              <td  valign="top" colspan="5" align="left">
                                                                                  <a href="http://<?php echo $venue_info[$select_venue]['website']; ?>"><img src="<?php echo $logo_url; ?>" alt="<?php echo $venue_name; ?> logo"  border="0" style="display:block;"></a>
                                                                              </td>

                                                                          </tr>
                                                                      </table>
                                                                  </td>
                                                               </tr>
                                                              <tr>
                                                                	<td  style="padding:12px 0 12px 0; mso-line-height-rule: exactly;" valign="top">
                                                                   		<table width="100%" cellpadding="0" cellspacing="0" border="0" align="left">
                                        																	<tr>
                                        																		<td style="padding:0px 0 0px 0; line-height:20px;mso-line-height-rule: exactly;">
                                        																			<span style="font-family:Calibri, Arial, Helvetica, sans-serif;font-size:18px; font-weight:bold;color:<?php echo $color_name; ?>"><?php echo $_POST['name']; ?></span><br>
                                        																			<span style="font-family:  Calibri ,Arial, Helvetica, sans-serif;font-size:14px; font-weight:bold;color:<?php echo $color_role; ?>"><?php echo $_POST['role']; ?></span>
                                        																		</td>
                                        																	</tr>
                                        																</table>
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                	<td style="padding:0px 0 5px 0; line-height:14px;mso-line-height-rule: exactly;">
                                                                    	<span style="font-family:Calibri ,Arial, Helvetica, sans-serif;font-size:14px;  font-weight:normal;color:<?php echo $color_add; ?>">
                                                                         <?php echo $_POST['add1']; ?>
                                                                       </span>
                                                                    </td>
                                                                </tr>
                                                                <?php if($_POST['add2']) { ?>
                                                                <tr>
                                                               	   <td style="padding:0px 0 0px 0; line-height:14px;mso-line-height-rule: exactly;">
                                                                    	<span style="font-family:Calibri ,Arial, Helvetica, sans-serif;font-size:14px;  font-weight:normal;color:<?php echo $color_add; ?>">
                                                                        <?php echo $_POST['add2']; ?>
                                                                       </span>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                                <tr>
                                                                    <td  valign="middle" colspan="1" style="padding:10px 0 20px 0px;font-family:Calibri, Arial, Helvetica, sans-serif; font-size:12px; color:#6d6e70; line-height:13px; " >
                                                                    	 <table width="340" cellpadding="0" cellspacing="0" border="0" align="left">

                                                                           <!--Phone-->
                                                                           <?php if ($_POST['phone'] !=''): ?>
                                                                           	<tr>
                                                                               <td width="35" valign="top" style="line-height:14px;padding-bottom: 4px;font-family:Calibri, Arial, Helvetica, sans-serif;font-size:14px; font-weight:bold;">
                                                                                    <span style="color:<?php echo $color_tpsmew; ?>">T</span>
                                                                              </td>
                                                                              <td  valign="top" style="line-height:14px;font-family:Calibri, Arial, Helvetica, sans-serif; font-size:14px; padding-bottom: 4px;color:<?php echo $color_add; ?>;">
                                                                                   <a href="tel:<?php echo $_POST['phone']; ?>" style="text-decoration:none;color:<?php echo $color_add; ?>;"><?php echo $_POST['phone']; ?></a>
                                                                              </td>
                                                                            </tr>
                                                                            <?php endif; ?>
                                                                            <!--end of Phone-->

                                                                            <!--Day phone-->
                                                                            <?php if ($_POST['dayphone'] !=''): ?>
                                                                            <tr>
                                                                                 <td width="35" valign="top" style="line-height:14px;padding-bottom: 4px;font-family:Calibri, Arial, Helvetica, sans-serif;font-size:14px; font-weight:bold;">
                                                                                      <span style="color:<?php echo $color_tpsmew; ?>">P</span>
                                                                                </td>
                                                                                <td  valign="top" style="line-height:14px;font-family:Calibri, Arial, Helvetica, sans-serif; font-size:14px; padding-bottom: 4px;color:<?php echo $color_add; ?>;">
                                                                                  <a href="tel:<?php echo $_POST['dayphone']; ?>" style="text-decoration:none;color:<?php echo $color_add; ?>;"><?php echo $_POST['dayphone']; ?></a>
                                                                                </td>
                                                                             </tr>
                                                                             <?php endif; ?>
                                                                             <!--end of Day phone-->

 															                                              <!--Mobile-->
                                                                            <?php if ($_POST['mobile'] !=''): ?>
                                                                            <tr>
                                                                               <td width="35" valign="top" style="line-height:14px;padding-bottom: 4px;font-family:Calibri, Arial, Helvetica, sans-serif;font-size:14px; font-weight:bold;">
                                                                                    <span style="color:<?php echo $color_tpsmew; ?>">M</span>
                                                                              </td>
                                                                              <td  valign="top" style="line-height:14px;font-family:Calibri, Arial, Helvetica, sans-serif; font-size:14px; padding-bottom: 4px;color:<?php echo $color_add; ?>;">
                                                                                <a href="tel:<?php echo $_POST['mobile']; ?>" style="text-decoration:none;color:<?php echo $color_add; ?>;"><?php echo $_POST['mobile']; ?></a>
                                                                              </td>
                                                                            </tr>
                                                                            <?php endif; ?>
                                                                            <!--end of Mobile-->

                                                                            <!--Skype-->
                                                                            <?php if ($_POST['skype'] !=''): ?>
                                                                            <tr>
                                                                                <td width="35" valign="top" style="line-height:14px;padding-bottom: 4px;font-family:Calibri, Arial, Helvetica, sans-serif;font-size:14px; font-weight:bold;">
                                                                                    <span style="color:<?php echo $color_tpsmew; ?>">S</span>
                                                                              </td>
                                                                              <td  valign="top" style="line-height:14px;font-family:Calibri, Arial, Helvetica, sans-serif; font-size:14px;padding-bottom: 4px;color:<?php echo $color_add;?>;">
                                                                                     <a href="skype:<?php echo $_POST['skype']; ?>?chat" style="text-decoration:none;color:<?php echo $color_add; ?>;"><?php echo $_POST['skype']; ?></a>
                                                                                </td>
                                                                            </tr>
                                                                            <?php endif; ?>
                                                                            <!--End of Skype-->

                                                                            <!--Email-->
                                                                            <?php if ($_POST['email'] !=''): ?>
                                                                            <tr>
                                                                              <td width="35" valign="top" style="line-height:14px;padding-bottom: 4px;font-family:Calibri, Arial, Helvetica, sans-serif;font-size:14px; font-weight:bold">
                                                                                    <span style=";color:<?php echo $color_tpsmew; ?>">E</span>
                                                                              </td>
                                                                              <td  valign="top" style="line-height:14px;font-family:Calibri, Arial, Helvetica, sans-serif; font-size:14px;padding-bottom: 4px;color:<?php echo $color_add; ?>;">
                                              																			<a href="mailto:<?php echo $_POST['email'].$email; ?>"  style=" text-decoration:none;color:<?php echo $color_add; ?>;"><?php echo $_POST['email'].$email; ?></a>
                                                                                </td>
                                                                            </tr>
                                                                            <?php endif; ?>
                                                                            <!--End of email-->

                                                                            <?php if ($select_venue =='sappaya'): ?>
                                                                            <tr>
                                                                              <td width="35" valign="top" style="line-height:14px;padding-bottom: 4px;font-family:Calibri, Arial, Helvetica, sans-serif;font-size:14px; font-weight:bold">
                                                                                    <span style=";color:<?php echo $color_tpsmew; ?>">W</span>
                                                                              </td>
                                                                              <td  valign="top" style="line-height:14px;font-family:Calibri, Arial, Helvetica, sans-serif; font-size:14px;color:<?php echo $color_add; ?>;">
                                                                                     <a href="http://<?php echo $website; ?>" style="color:<?php echo $color_add; ?>; text-decoration: none;line-height:14px;"><?php echo $website; ?></a>
                                                                                </td>
                                                                            </tr>
  																		                                      <?php endif; ?>
                                                                      </table>

                                                                    </td>
                                                                 </tr>


                                                                 <?php if ($select_venue =='sappaya'): ?>
                                                                  <tr>
                                                                 	  <td width="340" valign="top" colspan="1"  align="left" style="padding-top:5px;">
                                                                        <table width="340" cellpadding="0" cellspacing="0" border="0" align="left">
                                                                            <tr>
                                                                                <td width="94" valign="top"  align="left" >
                                                                                    <a href="http://www.clickdebit.com/" style="display:block;"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_06.jpg" alt="clickdebit" width="94" height="46"  border="0" ></a>
                                                                                </td>
                                                                                <td width="73" valign="top"  align="left" >
                                                                                    <a href="http://www.justtappit.com/"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_3_04.jpg" alt="tapit" width="73" height="46"  border="0" style="display:block;"></a>
                                                                                </td>
                                                                                <td width="72" valign="top"  align="left" >
                                                                                    <a href="http://www.pagoglobal.com/"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_08.jpg" alt="pago" width="72" height="46"  border="0" style="display:block;"></a>
                                                                                </td>
                                                                                <td width="26" valign="top" align="left" >
                                                                                    <a href="http://www.paysec.com/"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_09.jpg" alt="paysec" width="85" height="46"  border="0" style="display:block;"></a>
                                                                                </td>
                                                                                <td></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                 </tr>
                                                                 <?php else: ?>
                                                                  <tr>
                                                                    	<td width="340" style="padding:0px 0px 10px 0;font-size:14px;font-family:Calibri, Arial, Helvetica, sans-serif; line-height: 14px; font-weight:bold;color:<?php echo $color_role; ?>;">
                                                                            <a href="http://<?php echo $website; ?>" style="color:<?php echo $color_role; ?>;font-family:Calibri, Arial, Helvetica, sans-serif;  text-decoration: none;font-weight:bold;"><?php echo $website; ?></a>
                                                                        </td>
                                                                  </tr>
                                                                  <?php endif; ?>
                                                                   <tr>
                                                                    	<td width="320" style="padding:16px 0px 20px 0;">

                                                                          <span style="font-family:Calibri, Arial, Helvetica, sans-serif;font-size:11px; line-height: 14px;  font-weight:normal; color:#838383; ">
                                                                            This message is solely for the intended recipient and may contain confidential information. If you are not the intended recipient, please notify the sender, delete the message from your system immediately and do not disclose the contents to any other party.
                                                                          </span>

                                                                      </td>
                                                                  </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                     </table>
                                 </td>
                            </tr>
                    </table>

                     </td>
                </tr>
        </table>

    </div>

          <div class="jumbotron col-md-12">
              <div class="form-horizontal">
              <fieldset>
                <div class="form-group">
                  <label class="col-md-12 control-label" for="html">HTML</label>
                  <div class="col-md-12">
                    <textarea class="form-control" id="html" name="html" rows="50"><style type="text/css">body{background:#fff}a[x-apple-data-detectors],a,a:link{color:inherit!important;text-decoration:none!important;font-size:inherit!important;font-family:inherit!important;font-weight:inherit!important;line-height:inherit!important}</style><table width="100%" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td> <table width="340" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td> <table width="100%" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td width="100%" valign="top" bgcolor="#ffffff" style="padding:0px"> <table width="100%" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td width="700" valign="top" colspan="1" style="font-family:Calibri,Arial,Helvetica,sans-serif;color:#000;padding-bottom:10px"> <table width="340" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td width="340" valign="top" colspan="1" align="right" style="padding-bottom:0;padding-top:5px"> <table width="340" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td valign="top" colspan="5" align="left"> <a href="http://<?php echo $venue_info[$select_venue]['website']; ?>"><img src="<?php echo $logo_url; ?>" alt="<?php echo $venue_name; ?> logo" border="0" style="display:block"></a> </td> </tr> </table> </td> </tr> <tr> <td style="padding:12px 0 12px 0;mso-line-height-rule:exactly" valign="top"> <table width="100%" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td style="padding:0;line-height:20px;mso-line-height-rule:exactly"> <span style="font-family:Calibri,Arial,Helvetica,sans-serif;font-size:18px;font-weight:bold;color:<?php echo $color_name; ?>"><?php echo $_POST['name']; ?></span><br> <span style="font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;color:<?php echo $color_role; ?>"><?php echo $_POST['role']; ?></span> </td> </tr> </table> </td> </tr> <tr> <td style="padding:0 0 5px 0;line-height:14px;mso-line-height-rule:exactly"> <span style="font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;color:<?php echo $color_add; ?>"> <?php echo $_POST['add1']; ?> </span> </td> </tr> <?php if($_POST['add2']) { ?> <tr> <td style="padding:0;line-height:14px;mso-line-height-rule:exactly"> <span style="font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;color:<?php echo $color_add; ?>"> <?php echo $_POST['add2']; ?> </span> </td> </tr> <?php } ?> <tr> <td valign="middle" colspan="1" style="padding:10px 0 20px 0;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:12px;color:#6d6e70;line-height:13px"> <table width="340" cellpadding="0" cellspacing="0" border="0" align="left"> <?php if ($_POST['phone'] !=''): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style="color:<?php echo $color_tpsmew; ?>">T</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;padding-bottom:4px;color:<?php echo $color_add; ?>"> <a href="tel:<?php echo $_POST['phone']; ?>" style="text-decoration:none;color:<?php echo $color_add; ?>"><?php echo $_POST['phone']; ?></a> </td> </tr> <?php endif; ?> <?php if ($_POST['dayphone'] !=''): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style="color:<?php echo $color_tpsmew; ?>">P</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;padding-bottom:4px;color:<?php echo $color_add; ?>"> <a href="tel:<?php echo $_POST['dayphone']; ?>" style="text-decoration:none;color:<?php echo $color_add; ?>"><?php echo $_POST['dayphone']; ?></a> </td> </tr> <?php endif; ?> <?php if ($_POST['mobile'] !=''): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style="color:<?php echo $color_tpsmew; ?>">M</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;padding-bottom:4px;color:<?php echo $color_add; ?>"> <a href="tel:<?php echo $_POST['mobile']; ?>" style="text-decoration:none;color:<?php echo $color_add; ?>"><?php echo $_POST['mobile']; ?></a> </td> </tr> <?php endif; ?> <?php if ($_POST['skype'] !=''): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style="color:<?php echo $color_tpsmew; ?>">S</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;padding-bottom:4px;color:<?php echo $color_add;?>"> <a href="skype:<?php echo $_POST['skype']; ?>?chat" style="text-decoration:none;color:<?php echo $color_add; ?>"><?php echo $_POST['skype']; ?></a> </td> </tr> <?php endif; ?> <?php if ($_POST['email'] !=''): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style=";color:<?php echo $color_tpsmew; ?>">E</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;padding-bottom:4px;color:<?php echo $color_add; ?>"> <a href="mailto:<?php echo $_POST['email'].$email; ?>" style="text-decoration:none;color:<?php echo $color_add; ?>"><?php echo $_POST['email'].$email; ?></a> </td> </tr> <?php endif; ?> <?php if ($select_venue =='sappaya'): ?> <tr> <td width="35" valign="top" style="line-height:14px;padding-bottom:4px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold"> <span style=";color:<?php echo $color_tpsmew; ?>">W</span> </td> <td valign="top" style="line-height:14px;font-family:Calibri,Arial,Helvetica,sans-serif;font-size:14px;color:<?php echo $color_add; ?>"> <a href="http://<?php echo $website; ?>" style="color:<?php echo $color_add; ?>;text-decoration:none;line-height:14px"><?php echo $website; ?></a> </td> </tr> <?php endif; ?> </table> </td> </tr> <?php if ($select_venue =='sappaya'): ?> <tr> <td width="340" valign="top" colspan="1" align="left" style="padding-top:5px"> <table width="340" cellpadding="0" cellspacing="0" border="0" align="left"> <tr> <td width="94" valign="top" align="left"> <a href="http://www.clickdebit.com/" style="display:block"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_06.jpg" alt="clickdebit" width="94" height="46" border="0"></a> </td> <td width="73" valign="top" align="left"> <a href="http://www.justtappit.com/"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_3_04.jpg" alt="tapit" width="73" height="46" border="0" style="display:block"></a> </td> <td width="72" valign="top" align="left"> <a href="http://www.pagoglobal.com/"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_08.jpg" alt="pago" width="72" height="46" border="0" style="display:block"></a> </td> <td width="26" valign="top" align="left"> <a href="http://www.paysec.com/"><img src="<?php echo $hosting_url; ?>Sappaya-Email-Signature_09.jpg" alt="paysec" width="85" height="46" border="0" style="display:block"></a> </td> <td></td> </tr> </table> </td> </tr> <?php else: ?> <tr> <td width="340" style="padding:0 0 10px 0;font-size:14px;font-family:Calibri,Arial,Helvetica,sans-serif;line-height:14px;font-weight:bold;color:<?php echo $color_role; ?>"> <a href="http://<?php echo $website; ?>" style="color:<?php echo $color_role; ?>;font-family:Calibri,Arial,Helvetica,sans-serif;text-decoration:none;font-weight:bold"><?php echo $website; ?></a> </td> </tr> <?php endif; ?> <tr> <td width="320" style="padding:16px 0 20px 0"> <span style="font-family:Calibri,Arial,Helvetica,sans-serif;font-size:11px;line-height:14px;font-weight:normal;color:#838383"> This message is solely for the intended recipient and may contain confidential information. If you are not the intended recipient, please notify the sender, delete the message from your system immediately and do not disclose the contents to any other party. </span> </td> </tr> </table> </td> </tr> </table></textarea>
                  </div>
                </div>
                </fieldset>
            </div>
          </div>

      <?php endif; ?>

        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="http://getbootstrap.com/assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
      </body>
    </html>
<?php endif; ?>
