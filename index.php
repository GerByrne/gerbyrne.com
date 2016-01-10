<?php
	$errName = null;
	$errEmail = null;
	$errMessage = null;
	$errHuman = null;
	$result = null;

	if ($_POST["submit"]) {
		$name = ($_POST['name']);
		$email = ($_POST['email']);
		$message = ($_POST['message']);
		$human = intval($_POST['human']);
		$from = 'GerByrne.com Contact Form'; 
		$to = 'ger@gerbyrne.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

			
		// If there are no errors, send the email
		if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Thank You! Ger will be in touch soon</div>';
			} else {
				$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
			}
		}
		
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ger Byrne</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
        <link href = "css/styles.css" rel = "stylesheet">
		<link rel="icon" href="img/favicon.png" type="image/png">  				
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <!-- Respond is a fast & lightweight polyfill for min/max-width CSS3 Media Queries (for IE 6-8, and more) -->
        <script src = "js/respond.min.js"></script>
	</head>
	<body>       
		
	<!-- Home Section ----------------------------------------------------------------------------------->
	<section id="home" class="section-full">	
		<div class = "container-fluid">             
              <nav class = "navbar navbar-default navbar-static-top">
                 <a href = "#" class="navbar-brand">Ger Byrne</a> 
                   <div class="navbar-header">
                      <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                         <span class = "icon-bar"></span>
                         <span class = "icon-bar"></span>
                         <span class = "icon-bar"></span>
                      </button>
                   </div>

                   <div class = "collapse navbar-collapse navHeaderCollapse"> <!-- navHeaderCollapse -->
                      <ul class = "nav navbar-nav navbar-right">                         
                          <li><a href="#education">Education</a></li>                       
                          <li><a href="#skills">Skills</a></li>                           
                          <li class = "dropdown">							
                              <a href = "#" class = "dropdown-toggle text-center" data-toggle = "dropdown">Projects <i class="fa fa-caret-down"></i></a>
                              <ul class = "dropdown-menu">
                                 <li><a href="#projects-group">Group</a></li>                                 		                
                                 <li><a href="#projects-thesis">Thesis</a></li>                                 
                                 <li class="divider hidden-sm hidden-md hidden-lg"></li>
                              </ul>						
                           </li>						
                           <li><a href = "#contact">Contact</a></li>
                        </ul>				
                    </div>				                
			</nav><!-- end navbar -->
		</div><!-- end container fluid -->
	
		<div class="container"> 
            <div class="row text-center">
                <div class="jumbotron col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                    <h1><span class="hello-greeting">Hello<br>there</span><br><span class="name-intro">I'm Ger</span></h1>
					<div id="intro-text-para"></div><!-- loaded from content.html file -->
                    <p><a href="files/CV - Ger Byrne.pdf" class="btn btn-custom btn-md"><span class="chevron_toggleable glyphicon glyphicon-chevron-down"></span> Download My C.V.</a></p>                 
                </div><!-- end column -->
            </div><!-- end row -->
		</div><!-- end container -->
	</section>

	<!-- Education Section ------------------------------------------------------------------------------>
	<section id="education" class="section-full shaded_bg">	
		<div class="container"> 		   
            <div class="row">                
                <div class="jumbotron col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2">
                    <h3>Education</h3>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12">
                            <p class="text-center img-paragraph"><a href="http://fit.ie/"><img src="img/fitlogo.png" alt="FIT logo" class="img-responsive img-thumbnail"></a></p>
                            <h4>Computer &amp; Network Maintenance</h4>
                            <div id="comp-net-text-para"></div><!-- loaded from content.html file -->
							<span class="custom-divider visible-xs visible-sm"></span>
                        </div>                
                        <div class="col-md-4 col-lg-4 col-sm-12 valign-heading">
                            <p class="text-center img-paragraph"><a href="http://certification.comptia.org/getCertified/certifications/a.aspx"><img src="img/AplusCompTIALogo.png" alt="Aplus logo" class="img-responsive img-thumbnail"></a></p>
                            <h4>CompTIA</h4>
                            <div id="comptia-aplus-text-para"></div><!-- loaded from content.html file -->
                            <p class="text-center" style="text-indent: 0px; margin-top:30px;"><a href="http://certification.comptia.org/getCertified/certifications/network.aspx"><img src="img/NetCompTIALogo.png" alt="Netplus logo" class="img-responsive img-thumbnail"></a></p>                      
       						<div id="comptia-netplus-text-para"></div><!-- loaded from content.html file -->                     
							<span class="custom-divider visible-xs visible-sm"></span>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 valign-heading">
                            <p class="text-center img-paragraph" style="text-indent: -20px;"><a href="http://www.itb.ie/StudyatITB/bn104.html"><img src="img/itblogo.png" alt="ITB logo" class="img-responsive img-thumbnail"></a></p>
                            <h4>Computer Science</h4>
                    		<div id="comp-science-text-para"></div><!-- loaded from content.html file -->
                        </div>
                    </div><!-- end jumotron row -->
                </div><!-- end outer col -->   
            </div><!-- end row -->	
		</div><!-- end container -->
	</section>
	
	<!-- Skills Section --------------------------------------------------------------------------------->
	<section id="skills" class="section-full">	
		<div class="container"> 
            <div class="row">
                <div class="col-lg-8 col-xs-10 col-xs-offset-1 col-lg-offset-2">
                    <div class="row content">
                        <h3>Skills</h3>                        
                        <div class="col-md-4 col-xs-12">
                            <div class="thumbnail">
                                <div class="caption">
                                    <div><i class="fa fa-code"></i></div> 
                                    <h4>Coding</h4>
                                    <div id="code-text-para"></div><!-- loaded from content.html file -->  
                                </div>
                            </div>
                        </div>
                        <span class="custom-divider visible-xs visible-sm"></span>
                        <div class="col-md-4 col-xs-12">
                             <div class="thumbnail">
                                <div class="caption">
                                    <div><i class="fa fa-windows"></i></div>
                                    <h4>Tools</h4>
                                    <div id="tools-text-para"></div><!-- loaded from content.html file -->                         
                                </div>
                            </div>
                        </div>
                        <span class="custom-divider visible-xs visible-sm"></span>                        
                        <div class="col-md-4 col-xs-12">
                            <div class="thumbnail">
                                <div class="caption">
                                    <div><i class="fa fa-hdd-o"></i></div> 
                                    <h4>Technical</h4>
                                    <div id="technical-text-para"></div><!-- loaded from content.html file -->
                                </div>
                            </div>
                        </div>
                    </div><!-- end inner row -->
                </div><!-- end outer column -->
            </div><!-- end outer row -->                
        </div> <!-- end container -->	
	</section>	
	
	<!-- Projects - Group Section -------------------------------------------------------------------->
	<section id="projects-group" class="section-full shaded_bg">	
		<div class="container"> 			
            <div class="row">            
                <header class="col-md-6 col-md-offset-3 ">
                    <h2 class="text-center">Premier Game Predictor</h2>                    
                </header>
            </div>
            
            <div class="row">            
                <article class="col-md-8 col-md-offset-2">
					<div id="group-text"></div><!-- loaded from content.html file -->             
                    <div class="hidden-xs">
	                    <button id="group-read-toggle" type="button" class="btn btn-custom btn-sm group-read-more" data-toggle="collapse" data-target="#group-hidden">
							<span class="text">Read More </span>
							<span class="fa fa-chevron-down"></span>
						</button>                        
                        <!----------------------------------------- Hidden Group Text ---------------------------------------------------------->                        
                        <!-- group-hidden also indentifies the text that is loaded from the content.html file -->
                        <div id="group-hidden" class="collapse"></div>                        
                        <!--------------------------------------------------------------------------------------------------------------------------------->
                    </div>
                </article>                
            </div><!-- end row -->             
		</div> <!-- end container -->		
	</section>
    
    <!-- Projects - Thesis Section -------------------------------------------------------------------->
	<section id="projects-thesis" class="section-full alt-shaded-bg">		
		<div class="container">            
            <div class="row">         
                <header class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Investigation into the Extent and Limitations of Dynamism and Interaction through Web Apps</h2>                    
                </header>                
            </div><!-- end row -->
                    
            <div class="row">         
                <article class="col-md-8 col-md-offset-2">
                    <div class="row">
                    	<div class="col-xs-12 col-md-12 thesis-text-para1"><!-- thesis text loaded from content.html file --></div><!-- end col -->
                    </div><!-- end row -->                    
                    <div class="row">
                    	<div class="col-xs-12 col-md-12 thesis-text-para2"><!-- thesis text loaded from content.html file --></div><!-- end col -->
                    </div><!-- end row -->                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-8 image-paragraph thesis-text-para3"><!-- thesis text loaded from content.html file --></div><!-- end col --> 
                        <div class="col-xs-12 col-sm-4 col-md-4"> 
                            <div class="thumbnail">
                                <div align="center" >
                                        <div id="imageRotator">
                                            <div class="current"><img src="img/web-app1.png" alt="HTML5 app" class="img-responsive img-rounded"></div>
                                            <div><img src="img/native-app1.png" alt="Native app" class="img-responsive img-rounded"></div>
                                            <div><img src="img/native-app2.png" alt="Native app" class="img-responsive img-rounded"></div>
                                            <div><img src="img/web-app2.png" alt="HTML5 app" class="img-responsive img-rounded"></div>
                                            <div><img src="img/web-app3.png" alt="HTML5 app" class="img-responsive img-rounded"></div>
                                            <div><img src="img/web-scoreboard.png" alt="HTML5 app" class="img-responsive img-rounded"></div>
                                        </div>
                                </div>
                                <p class="caption text-center">The native and HTML5 web app.</p>
                            </div>
                        </div><!-- end col -->                        
                     </div><!-- end row --> 
                     <div class="row">
                     	<div class="col-xs-12 col-md-12 thesis-text-para4"><!-- thesis text loaded from content.html file --></div><!-- end col -->
                        <div class="hidden-xs"><!-- Hidden xs -->
	                        <button id="thesis-read-toggle" type="button" class="btn btn-custom btn-sm thesis-read-more" data-toggle="collapse" data-target="#thesis-hidden">
								<span class="text">Read More </span>
								<span class="fa fa-chevron-down"></span>
							</button>
                            <!----------------------------------------- Hidden Thesis Text ---------------------------------------------------------->                            
                            <!-- thesis-hidden also indentifies the text that is loaded from the content.html file -->
                            <div id="thesis-hidden" class="collapse col-xs-12 col-md-12"></div>                            
                            <!--------------------------------------------------------------------------------------------------------------------------------->
                        </div>        
                    </div><!-- end row -->
                </article>            
            </div><!-- end row -->         
		</div> <!-- end container -->		
	</section>	
    
    <!-- Contact Section -------------------------------------------------------------------------------->
	<section id="contact" class="section-full shaded_bg">
		<div class="container"><!-- contact_subsection_top --> 			
            <div class="row">                
                <div class="contact_subsection_top col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">  
                    <div class="jumbotron">
                    <h2>Get in Touch</h2>
                        <p>Thank You for Visiting</p>
                    </div> 
                    
                    <!----------------------------- Form -------------------------------->                    
                    <form class="form-horizontal" role="form" method="post" action="index.php">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                <?php echo "<p class='text-danger'>$errHuman</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-custom btn-md">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <?php echo $result; ?>	
                            </div>
                        </div>
                    </form>
                    <!-------------------------------------------------------------------->
                    
              </div><!-- end col -->                
          </div><!-- end form row -->	       
	</div> <!-- end container -->	 
    
    <footer class="contact_subsection_bottom" style="height:100%">
      <div class="container">        
          <div class="row footer-info">
             <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                 <div class="row">
                    <div class="col-sm-4 col-sm-offset-2 text-center">
		   			    <div class="copyright-text"><small><i class="fa fa-copyright"></i> Ger Byrne 2015</small></div> 
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="social">
                            <a href="https://twitter.com/Ger_Byrne" title="Follow Me on Twitter"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="https://ie.linkedin.com/in/gbyrne/" title="Connect with Me on Linkedin"><i class="fa fa-linkedin-square fa-lg"></i></a>
                            <a href="https://github.com/gerbyrne" title="Visit Me on GitHub"><i class="fa fa-github fa-lg"></i></a>
                            <a href="mailto:gerbyrne.ie@gmail.com" title="Email Me with Client"><i class="fa fa-envelope fa-lg"></i></a>    	    
                        </div>
                    </div>
                 </div> <!-- end inner row -->  
             </div>
          </div> <!-- end row -->
      </div>
    </footer>      
               
	</section>   
        
    <a href="#" class="scrollup">Scroll</a>
		
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
	<script src = "js/bootstrap.min.js"></script>
	<script src = "js/script.js"></script>	
	</body>
</html>
