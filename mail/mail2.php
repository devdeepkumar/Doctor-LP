<?php
if(isset($_REQUEST['submit_new'])) 
{
      // $email_to = "himanshu.lifelinkr@gmail.com, dm.shrutisharma@gmail.com";
      $email_to = "engmates.tilaknagar@gmail.com, rk.abhishekbakshi@gmail.com ";
    $email_subject = "Query from English Institute in Tilak Nagar Long LP (Footer)";
    
    if(!isset($_POST['mbl_no'])) {
        die('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $mblno = $_POST['mbl_no']; // required

    // Retrieve the full URL of the referring page
    $full_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'N/A';

    // Extract UTM parameters from the URL
    $utm_source = 'N/A';
    $utm_medium = 'N/A';
    $utm_campaign = 'N/A';

    if ($full_url !== 'N/A') {
        $url_components = parse_url($full_url);
        
        if (isset($url_components['query'])) {
            parse_str($url_components['query'], $query_params);
            $utm_source = isset($query_params['utm_source']) ? $query_params['utm_source'] : 'N/A';
            $utm_medium = isset($query_params['utm_medium']) ? $query_params['utm_medium'] : 'N/A';
            $utm_campaign = isset($query_params['utm_campaign']) ? $query_params['utm_campaign'] : 'N/A';
        }
    }

    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    $email_message = "Mobile: " . clean_string($mblno) . "\n";
    $email_message .= "IP: " . clean_string($ip) . "\n";
    $email_message .= "Full URL: " . clean_string($full_url) . "\n";
    $email_message .= "UTM Source: " . clean_string($utm_source) . "\n";
    $email_message .= "UTM Medium: " . clean_string($utm_medium) . "\n";
    $email_message .= "UTM Campaign: " . clean_string($utm_campaign) . "\n";

    $headers = "From: leads@engmates.com \r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    
    @mail($email_to, $email_subject, $email_message, $headers); 
}
?>
<html>

<style>
  *{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body{
background: #ffffff;
background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
    height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
h1{
    font-family: 'Kaushan Script', cursive;
  font-size:4em;
  letter-spacing:3px;
  color: #c77201 ;
  margin:0;
  margin-bottom:20px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.go-home{
  color:#fff;
  background: #c77201;
  border:none;
  padding:10px 50px;
  margin:30px 0;
  border-radius:30px;
  text-transform:capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}
.footer-like{
  margin-top: auto; 
  background:#D7E6FE;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#5892FF;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight:600;
}

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
}
  
}
  </style>
<body>

<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1>Thank you !</h1>
      <p>We have received your query.  </p>
      <p>Our team member will contact you soon  </p>
      <button class="go-home"><a href="tel:+91 8010263263" style="color:white; text-decoration:none;">
      Call Now
      </button>
    </div>
</div>
</div>



<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">

</body>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N567M9X8');</script>
<!-- End Google Tag Manager -->


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N567M9X8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<script>
			window.onload = function() {       
    setTimeout(function(){
    window.location.href='https://engmates.com/';
},3000); 
}
</script>

</html>

