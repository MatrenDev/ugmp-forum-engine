<!DOCTYPE html>
<html style="font-size: 16px;" lang="pl-PL">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Forum, zaliczenie, CMS, PWSZ">
    <meta name="description" content="Forum na cele zaliczeniowe.">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Logowanie</title>
    <link rel="stylesheet" href="forumcms.css" media="screen">
<link rel="stylesheet" href="Logowanie.css" media="screen">
    <script class="u-script" type="text/javascript" src="forumcms.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Rubik:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <?php include('dbconn.php'); ?>
    <link href="jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"/>
	<script src="js/jquery-1.9.1.min.js"></script>

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Forum CMS"
}</script>
    <meta property="og:title" content="Logowanie">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Forum na cele zaliczeniowe.">
    <meta name="theme-color" content="#834496">
  </head>
  <body data-home-page="Logowanie.html" data-home-page-title="Logowanie" class="u-body">
    <section class="u-align-center u-clearfix u-section-1" id="sec-569c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-default u-preserve-proportions lazyload u-image-1" alt="" data-image-width="169" data-image-height="100" data-src="images/pwsz_logo.svg">
        <h3 class="u-text u-text-1">Logowanie</h3>
        <div class="u-form u-form-1">
          <form id="login_form" method="POST"  style="padding: 10px" source="custom" name="form">
            <div class="u-form-group u-form-group-1">
              <label for="text-3623" class="u-label">Login</label>
              <input type="text" id="text-3623" name="username" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white" required="required">
            </div>
            <div class="u-form-group u-form-group-2">
              <label for="text-c095" class="u-label">Hasło</label>
              <input type="text" placeholder="" id="text-c095" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white" required="required">
            </div>

            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-palette-2-base u-radius-50 u-btn-1">Zaloguj<br>
              </a>
              <input type="submit" name="login" value="submit" class="u-form-control-hidden">
            </div>
            <!-- <div class="u-form-send-message u-form-send-success"></div>
            <div class="u-form-send-error u-form-send-message"></div>
            <input type="hidden" value="" name="recaptchaResponse"> -->
          </form>
          <script>
			jQuery(document).ready(function(){
			jQuery("#login_form").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "login.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome Back!", { header: 'Access Granted' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'Forum.php'  }, delay);  
						}
						else
						{
						$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
						}
						}
						
					});
					return false;
				});
			});
			</script>  
        </div>
        <h3 class="u-text u-text-default u-text-2">Rejestracja</h3>
        <div class="u-form u-form-2">
          <form method="POST"  action="signup.php"  style="padding: 10px" id="signup">
            <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
              <label for="text-2670" class="u-label">Imię</label>
              <input type="text" placeholder="" id="text-2670" name="firstname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white">
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-group-5">
              <label for="text-6597" class="u-label">Nazwisko</label>
              <input type="text" placeholder="" id="text-6597" name="lastname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white">
            </div>
            <div class="u-form-group u-form-group-6">
              <label for="text-3623" class="u-label">Login</label>
              <input type="text" id="text-3623" name="username" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white">
            </div>
            <div class="u-form-group u-form-group-7">
              <label for="text-c095" class="u-label">Hasło</label>
              <input type="password" placeholder="" id="text-c095" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-palette-2-base u-radius-50 u-btn-2">Utwórz<br>
              </a>
              <input type="submit" name="save" value="submit" class="u-form-control-hidden">
            </div>
             <!-- <div class="u-form-send-message u-form-send-success"></div>
            <div class="u-form-send-error u-form-send-message"></div>
            <input type="hidden" value="" name="recaptchaResponse">  -->
          </form> 
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="footer"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 512 512" style="width: 1em; height: 1em;"><path d="m256 512c-68.378906 0-132.667969-26.628906-181.019531-74.980469-48.351563-48.351562-74.980469-112.640625-74.980469-181.019531s26.628906-132.667969 74.980469-181.019531c48.351562-48.351563 112.640625-74.980469 181.019531-74.980469s132.667969 26.628906 181.019531 74.980469c48.351563 48.351562 74.980469 112.640625 74.980469 181.019531s-26.628906 132.667969-74.980469 181.019531c-48.351562 48.351563-112.640625 74.980469-181.019531 74.980469zm0-472c-119.101562 0-216 96.898438-216 216s96.898438 216 216 216 216-96.898438 216-216-96.898438-216-216-216zm105.359375 321.359375-28.285156-28.285156c-42.5 42.5-111.648438 42.5-154.148438 0s-42.5-111.648438 0-154.148438 111.648438-42.5 154.148438 0l28.285156-28.285156c-58.097656-58.09375-152.625-58.09375-210.71875 0-58.09375 58.097656-58.09375 152.625 0 210.71875 29.046875 29.046875 67.203125 43.570313 105.359375 43.570313 38.152344 0 76.3125-14.523438 105.359375-43.570313zm0 0"></path></svg><img></span> Copyright PWSZ 2021
        </p>
      </div></footer>
      <?php include('scripts.php');?>

  </body>
</html>