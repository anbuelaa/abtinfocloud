<?php
//If the form is submitted
if(isset($_POST['submit'])) {
	//Check to make sure that the name field is not empty
/*	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the phone field is not empty
	if(trim($_POST['phone']) == '') {
		$hasError = true;
	} else {
		$phone = trim($_POST['phone']);
	}
	//Check to make sure sure that a valid email address is submitted
	
		$email = trim($_POST['email']);
	
	//Check to make sure that the division field is not empty
	if(trim($_POST['company']) == '') {
		$hasError = true;
	} else {
		$division = trim($_POST['company']);
	}
	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	} */

	//If there is no error, send the email
$name = trim($_POST['contactname']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$company = trim($_POST['company']);
$comments = trim($_POST['message']);

	if(!isset($hasError)) {
		$emailTo = 'info@abtinfo.net, info@abtinfo.com, rajeswarik@abtinfo.net'; //Put your own email address here     
		$emailFrom = 'feedback@abtinfo.com';                 
		$subject = 'abtinfo.com feed back';       
		
		$body = "Name: $name \n\nPhone: $phone \n\nEmail: $email \n\nCompany: $company \n\nMessage: $comments";
		$headers = 'From: ABT Info Systems Website <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META name="description" content="ABT Info Systems, 180 Race Course Road, Coimbatore - 641018, Tamil Nadu, INDIA.">
<META name="keywords" content="ABT Info Systems company address, ABT Info contact details">
<META name="abstract" content="ABT Info systems">
<META name="distribution" content="global">
<Meta name="robots" content="index,follow">
<Meta name="revisit-after" content="7 days">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ABT Info Systems - Contact</title>
<script language="javascript">
function echeck(str) {
		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}
		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }
		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
 		 return true					
	}
    </script>
 <script language="javascript">   
	function mcheck(str)
{
        var x = str;
        if(isNaN(x)|| x.indexOf(" ")!=-1)
		{
             alert("Enter numeric value");return false; 
		}
       if (x.length>10 || x.length<10)
		{
             alert("Enter 10 Numbers"); return false;
        }
      /*  if (x.charAt(0)!="9" || x.charAt(0)!="2"){
                alert("it should start with 9 or 2 ");
                return false
           } */
}
    </script>
<script language="javascript">
function validate()
{
  if (document.contactform.contactname.value == "")
    {
        alert("Name is required");
		document.contactform.contactname.focus();
        return false;
    }
	x=document.contactform.contactname.value;
	if((x<65||x>90)&&(x<97||x>122)&&(x!=8)&&(x!=30)&&(x!=13))
	{
		alert("Enter the Character in the name field:");
		document.contactform.contactname.value == "";
		document.contactform.contactname.focus();
		return false;
	}
	 if (document.contactform.phone.value == "")
    {
        alert("Phone or Mobile Number is required");
		document.contactform.phone.focus();
        return false;
    }
	  
	  if (mcheck(document.contactform.phone.value)==false)
			{
			document.contactform.phone.value="";
			document.contactform.phone.focus();
			return false;
			}
	 if (document.contactform.email.value == "")
    {
        alert("Email-ID is required");
		document.contactform.email.focus();
        return false;
    }
	var emailID=document.contactform.email;
	if (echeck(emailID.value)==false)
	{
		emailID.value="";
		emailID.focus();
		return false;
	}
	 if (document.contactform.company.value == "")
    {
        alert("Company Name is required");
		document.contactform.company.focus();
        return false;
    }
	 	 if (document.contactform.message.value == "")
    {
        alert("Please fill your Message");
		document.contactform.message.focus();
        return false;
    }
	
}
</script>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/chromestyle.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/ABTstyle.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/feedback.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/chrome.js"></script> 
</head>
<body>
<div class="top">
<div class="search">
<form id ="searchbox_004493423383838345466:p6x_7unqogi" action="search.html">
  <table >
  <tr>
    <td align="right" valign="middle"><input type="hidden" name="cx" value="004493423383838345466:p6x_7unqogi" /> <input type="hidden" name="cof" value="FORID:9" />   <input name="q" type="text" id="search" value="Search here ..." onFocus="if(this.value == 'Search here ...'){this.value = '';}" onBlur="if(this.value == ''){this.value = 'Search here ...';}"  />  
    <input name="sa" type="submit" class="searchicon" value="" /></td>
  </tr>
  </table> </form>
  </div>
<div class="navi">
<nav class="main-menu">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="profile.html">Profile</a></li>
<li><a href="#">Services</a>
<ul>
<li><a href="software.html">Software Solutions</a></li>
<li><a href="eso.html">Architectural & Engineering Services Outsourcing (ESO)</a></li>
<li><a href="embedded.html">Embedded Solutions</a></li>
<li><a href="datacenter.html">Internet Data Center</a></li>
<li><a href="video.html">Video Conferencing</a></li>
</ul>
</li>
<li><a href="whyabt.html">Why ABT?</a></li>	
<li><a href="http://sakthigroup.com/" target="_blank">Sakthi Group</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</nav>



     <!-- <div class="chromestyle" id="chromemenu">
<ul>
<li id="navihighlight">Home</li>
<li><a href="profile.html">Profile</a></li>
<li><a href="#" rel="dropmenu1">Services</a>
</li>
<li><a href="whyabt.html">Why ABT?</a></li>	
<li><a href="http://sakthigroup.com/" target="_blank">Sakthi Group</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>
<div id="dropmenu1" class="dropmenudiv">
<a href="software.html">Software Solutions</a>
<a href="eso.html">Architectural & Engineering Services Outsourcing (ESO)</a>
<a href="embedded.html">Embedded Solutions</a>
<a href="datacenter.html">Internet Data Center</a>
<a style="border-bottom:none;" href="video.html">Video Conferencing</a>
</div>
<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>-->
  </div>
<div class="logo"><a href="http://www.abtinfo.com"><img src="images/logosmall.jpg" width="160" height="78" /></a></div>
</div>
<div class="subbanner"> <div class="subbannertitle" style="background-image:url(images/contactbanner.jpg); background-repeat:no-repeat; background-position:right center;"> Join us to lead tension-free business </div></div>
<div class="pagetitle">Contact us</div>
<div class="contents">
  <div class="contact_table_content">
    <div class="contact_table_content1">
    <img src="images/contact.jpg" class="contact_sakthibuldg"  />
    <p ><strong><br />
        ABT INFO SYSTEMS,<br />
        </strong>180, Race Course Road, <br />
        Coimbatore - 641 018, <br />
        TamilNadu,                  INDIA.
        </p>
    <p>Tel  : +91 422 4322 397<br />
      Fax	: +91 422 4322 434</p>
    <p><strong> Email : <a href="mailto:info@abtinfo.com" class="blue">info@abtinfo.com</a></strong></p>
    </div>
 
  <div class="contact_table_content2">
  <table width="100%"  border="0" cellpadding="0" cellspacing="0" >
          <tr>
            <td width="409" height="209" valign="top"><div id="contact-wrapper">
              <form method="post" onsubmit="return validate();" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform" name="contactform">
                <div>
                  <label for="name"><strong>Name <span class="starb">*</span></strong></label>
                  <input type="text" size="50" name="contactname" id="contactname" value="" class="txtbx" />
                </div>
                <div>
                  <label for="phone"><strong>Phone <span class="starb">*</span></strong></label>
                  <input type="text" size="50" name="phone" id="phone" value="" class="txtbx" />
                </div>
                <div>
                  <label for="email"><strong>Email</strong> <span class="starb">*</span></label>
                  <input type="text" size="50" name="email" id="email" value="" class="txtbx" />
                </div>
                <div>
                  <label for="company"><strong>Company <span class="starb">*</span></strong></label>
                  <input type="text" size="50" name="company" id="company" value="" class="txtbx" />
                </div>
                <div>
                  <label for="message"><strong>Message <span class="starb">*</span></strong></label>
                  <textarea rows="5" cols="50" name="message" id="message" class="txtarea"></textarea>
                </div>
                <input style="margin:0 0 0 100px;" name="submit" type="submit" class="btn" value="Submit" />
              </form>
              <span class="starb">*</span> Mandatory
              <?php if(isset($hasError)) { //If errors are found ?>
              <!-- <p class="error">Please check if you've filled all the fields with valid information. Thank you.</p> -->
              <script type="text/javascript"> 
    alert("Please fill all the fields with valid information."); 
    history.back(); 
        </script>
              <?php } ?>
              <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
              <script type="text/javascript"> 
    alert("Feed back sent successfully!"); 
	document.contactform.contactname.value = "";
	document.contactform.phone.value = "";
	document.contactform.email.value = "";
	document.contactform.company.value = "";
	document.contactform.message.value = "";
	//document.getElementById('phone').value = "";
	//document.getElementById('email').value = "";
	//document.getElementById('company').value = "";
	//document.getElementById('message').value = "";
    // history.back(); 
	    </script>
              <?php } ?>
            </div></td>
          </tr>
      </table>
  
  </div>
</div>
  <div class="contact_table_content">
   <iframe width="100%" height="350px"  frameborder="1" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=abt+info+systems&amp;aq=&amp;sll=11.016845,76.955832&amp;sspn=0.388892,0.676346&amp;ie=UTF8&amp;hq=abt+info+systems&amp;hnear=&amp;t=m&amp;cid=8432630132515701681&amp;ll=11.099578,77.003174&amp;spn=0.23583,0.652313&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>
</div>
 </div>
<div class="footerout">
<div class="footerleft">© 2014 ABT Info Systems, India.</div>
  <div class="footerright"><a href="index.html">Home</a> | <a href="profile.html">Profile</a> | <a href="software.html">Software Solutions</a> |<a href="eso.html"> Architectural & Engineering Services (ESO)</a> | <a href="embedded.html">Embedded Solutions</a> | <a href="datacenter.html">Data Center</a> | <a href="video.html">Video Conferencing</a> | <a href="whyabt.html">Why ABT?</a> | <a href="sitemap.html">Site Map</a> | <a href="contact.php">Contact</a></div></div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49958148-1', 'abtinfo.com');
  ga('send', 'pageview');

</script>
</body>
</html>
