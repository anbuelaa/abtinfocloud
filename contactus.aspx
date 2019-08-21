<%@ Page Language="C#" AutoEventWireup="true" CodeFile="contactus.aspx.cs" Inherits="contactus" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <META name="description" content="ABT Info Systems, 180 Race Course Road, Coimbatore - 641018, Tamil Nadu, INDIA." />
    <META name="keywords" content="ABT Info Systems company address, ABT Info contact details" />
    <META name="abstract" content="ABT Info systems" />
    <META name="distribution" content="global" />
    <Meta name="robots" content="index,follow" />
    <Meta name="revisit-after" content="7 days" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ABT Info Systems - Contact</title>


    <script lang="javascript">
    function echeck(str) {
        var at = "@"
        var dot = "."
        var lat = str.indexOf(at)
        var lstr = str.length
        var ldot = str.indexOf(dot)
        if (str.indexOf(at) == -1) {
            alert("Invalid E-mail ID")
            return false
        }
        if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr) {
            alert("Invalid E-mail ID")
            return false
        }
        if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr) {
            alert("Invalid E-mail ID")
            return false
        }
        if (str.indexOf(at, (lat + 1)) != -1) {
            alert("Invalid E-mail ID")
            return false
        }
        if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot) {
            alert("Invalid E-mail ID")
            return false
        }
        if (str.indexOf(dot, (lat + 2)) == -1) {
            alert("Invalid E-mail ID")
            return false
        }
        if (str.indexOf(" ") != -1) {
            alert("Invalid E-mail ID")
            return false
        }
        return true
    }
    </script>
 <script lang="javascript">
     function mcheck(str) {
         var x = str;
         if (isNaN(x) || x.indexOf(" ") != -1) {
             alert("Enter numeric value"); return false;
         }
         if (x.length > 10 || x.length < 10) {
             alert("Enter 10 Numbers"); return false;
         }
         /*  if (x.charAt(0)!="9" || x.charAt(0)!="2"){
                   alert("it should start with 9 or 2 ");
                   return false
              } */
     }
    </script>
<script lang="javascript">
    function validate() {
        if (document.getElementById('contactname').value == "") {
            alert("Name is required");
            document.getElementById('contactname').focus();
            return false;
        }
        x = document.getElementById('contactname').value;
        if ((x < 65 || x > 90) && (x < 97 || x > 122) && (x != 8) && (x != 30) && (x != 13)) {
            alert("Enter the Character in the name field:");
            document.getElementById('contactname').value == "";
            document.getElementById('contactname').focus();
            return false;
        }
        if (document.getElementById('designation').value == "") {
            alert("Designation is required");
            document.getElementById('designation').focus();
            return false;
        }
        if (document.getElementById('company').value == "") {
            alert("Company Name is required");
            document.getElementById('company').focus();
            return false;
        }

        if (document.getElementById('phone').value == "") {
            alert("Phone or Mobile Number is required");
            document.getElementById('phone').focus();
            return false;
        }

        if (mcheck(document.getElementById('phone').value) == false) {
            document.getElementById('phone').value = "";
            document.getElementById('phone').focus();
            return false;
        }
        if (document.getElementById('email').value == "") {
            alert("Email-ID is required");
            document.getElementById('email').focus();
            return false;
        }
        var emailID = document.getElementById('email');
        if (echeck(emailID.value) == false) {
            emailID.value = "";
            emailID.focus();
            return false;
        }

        if (document.getElementById('message').value == "") {
            alert("Please fill your Message");
            document.getElementById('message').focus();
            return false;
        }

    }
</script>


<script lang="javascript" type="text/javascript">
    function OnLoad() {
        new CSEOverlay("003101372368174294211:8lhunbh3wvu",
                       document.getElementById("searchbox_003101372368174294211:8lhunbh3wvu"),
                       document.getElementById("results_003101372368174294211:8lhunbh3wvu"));
    }
    function fnremove(arg, val) {
        if (arg.value == '') { arg.value = val }
    }
    function fnshow(arg, val) {
        if (arg.value == val) { arg.value = '' }
    }
    function fnhidcombo() {
        if (!(window.XMLHttpRequest)) {
            document.getElementById("div_hid_combo1").style.display = "none";
            document.getElementById("div_hid_combo2").style.display = "none";
            document.getElementById("drop_tech").style.display = "none";
        }
    }
    function fnshowcombo() {
        if (!(window.XMLHttpRequest)) {
            document.getElementById("drop_tech").style.display = "block";
            document.getElementById("div_hid_combo1").style.display = "block";
            document.getElementById("div_hid_combo2").style.display = "block";
        }
    }

    jQuery.fn.topLink = function (settings) {
        settings = jQuery.extend({
            min: 1,
            fadeSpeed: 100,
            ieOffset: 95
        }, settings);
        return this.each(function () {
            //listen for scroll
            var el = $(this);
            el.css('display', 'none'); //in case the user forgot
            $(window).scroll(function () {
                if (!jQuery.support.hrefNormalized) {
                    el.css({
                        'position': 'absolute',
                        'top': $(window).scrollTop() + $(window).height() - settings.ieOffset
                    });
                }
                if ($(window).scrollTop() >= settings.min) {
                    el.fadeIn(settings.fadeSpeed);
                }
                else {
                    el.fadeOut(settings.fadeSpeed);
                }
            });
        });
    };

    $(document).ready(function () {
        $("#btnQuoteSubmit").click(function () {
            validate();
            return false;
        });
        $('#top-link').topLink({
            min: 100,
            fadeSpeed: 500
        });
        //smoothscroll
        $('#top-link').click(function (e) {
            e.preventDefault();
            $.scrollTo(0, 1500);
        });
    });
</script>

    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/chromestyle.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/ABTstyle.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/feedback_1.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/chrome.js"></script>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    

         <div class="top">
        
        <div class="navi">
            <nav class="main-menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li>
                        <a href="#">Services</a>
                        <ul>
                            <li><a href="software.html">Software Solutions</a></li>
                            <li><a href="datacenter.html">Internet Data Center</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="whyabt.html">Why ABT?</a></li>
                    <li><a href="http://sakthigroup.com/" target="_blank">Sakthi Group</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="https://www.abtinfocloud.com" target="_blank">Cloud Solutions</a></li>
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
                <img src="images/contact.jpg" class="contact_sakthibuldg" />
                <p>
                    <strong>
                        <br />
                        ABT INFO SYSTEMS,<br />
                    </strong>180, Race Course Road, <br />
                    Coimbatore - 641 018, <br />
                    TamilNadu,                  INDIA.
                </p>
                <p>
                    Tel  : +91 422 4322 397<br />
                    Fax	: +91 422 4322 434
                </p>
                <p><strong> Email : <a href="mailto:info@abtinfo.com" class="blue">info@abtinfo.com</a></strong></p>
            </div>

            <div id="contact-wrapper1">
                      <h3>Feed back	/ Enquiry</h3>

                <div class="contactdiv">
                  <label for="name">Name</label>
                  <input type="text" size="50" name="contactname" id="contactname" value="" class="quotetext" runat="server" />
                </div>
                    <div class="contactdiv">
                  <label for="designation">Designation</label>
                  <input type="text" size="50" name="designation" id="designation" value="" class="quotetext" runat="server" />
                </div>
                <div class="contactdiv">
                  <label for="company">Company</label>
                  <input type="text" size="50" name="company" id="company" value="" class="quotetext" runat="server" />
                </div>
                  <div class="contactdiv">
                  <label for="phone">Phone</label>
                  <input type="text" size="50" name="phone" id="phone" value="" class="quotetext" runat="server" />
                </div>
               
                <div class="contactdiv">
                  <label for="email">Email</label>
                  <input type="text" size="50" name="email" id="email" value="" class="quotetext" runat="server" />
                </div>
               
                <div class="contactdiv">
                  <label for="message">Message</label>
                  <textarea rows="5" cols="50" name="message" id="message" class="quotetextarea" runat="server" ></textarea>
                </div>
                <div class="contactdiv">
                      <label for="message">Submit</label>
                <input name="submit" type="submit" onclick="return validate();" class="btn" value="Submit" style="display:none;" />
                <asp:Button ID="btnSubmit" runat="server" Text="Submit" OnClientClick="return validate();" OnClick="btnSubmit_Click" />
</div>
            </div>
        </div>
        <div class="contact_table_content">
            <iframe width="100%" height="350px" frameborder="1" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=abt+info+systems&amp;aq=&amp;sll=11.016845,76.955832&amp;sspn=0.388892,0.676346&amp;ie=UTF8&amp;hq=abt+info+systems&amp;hnear=&amp;t=m&amp;cid=8432630132515701681&amp;ll=11.099578,77.003174&amp;spn=0.23583,0.652313&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>
        </div>
    </div>
    <div class="footerout">
  <div class="footerleft">&copy; 2014. ABT Info Systems, India.</div>
  <div class="footerright"><a href="index.html">Home</a> | <a href="profile.html">Profile</a> | <a href="software.html">Software Solutions</a> | <a href="datacenter.html">Data Center</a> | <a href="whyabt.html">Why ABT?</a> | <a href="sitemap.html">Site Map</a> | <a href="contactus.aspx">Contact</a></div>
</div>


    </div>
    </form>
</body>
</html>
