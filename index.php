<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
   <meta http-equiv="content-script-type" content="text/javascript" />
   <meta http-equiv="content-style-type" content="text/css" />
   <meta http-equiv="content-language" content="nl" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta name="author" content="Christopher D. Robison" />
   <meta name="description" content="I am Christopher Robison, a full-stack web/mobile engineer and software architect" />
   <meta name="robots" content="index, follow" />
   <meta name="revisit-after" content="14 days" />
   <meta property="og:title" content="The Work of Christopher Robison" />
   <meta property="og:type" content="website" />
   <meta property="og:url" content="http://cdr2.com/resume2/" />
   <meta property="og:image" content="http://cdr2.com/resume2/img/cdr.png" />
   <title>Christopher D. Robison - Interactive Resume</title>
   <!-- Bootstrap core CSS -->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
   <link href="css/bootstrap.min.css" rel="stylesheet" />
   <link href="style.css" rel="stylesheet" />
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
   <link rel="icon" href="/favicon.ico" type="image/x-icon" />
   <!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body data-spy="scroll" data-target="#navbar-example">
   <script>
     window.fbAsyncInit = function() {
       FB.init({
         appId      : '1725664954411970',
         xfbml      : true,
         version    : 'v2.8'
       });
       FB.AppEvents.logPageView();
     };

     (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      
      document.addEventListener("DOMContentLoaded", function() {
         var imgs = ['dt', 'fog', 'bridge'];
         var bg = imgs[Math.round(Math.random()*2)];
         var t = document.getElementById('top');
         console.log(`Going with ${bg} background`);
         if (t) {
            t.classList.add(bg);
            t.dataset.src = "img/sf-" + bg + "-small.gif";
         }
      });
   </script>
   <div id="top" class="jumbotron" data-src="img/sf-fog-small.gif" data-position="center right">
      <div class="container">
         <h1>Christopher D. Robison</h1>
         <p class="lead">Curriculum Vitae / Résumé</p>
      </div>
      <div class="overlay"></div>
      <a href="#profile" class="scroll-down">
         <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
   </div>
   <nav class="navbar navbar-default" id="navbar-example" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
         <ul class="nav navbar-nav">
            <li class="active"><a href="#profile">Profile</a></li>
            <li><a href="#experiences">Experience</a></li>
            <li><a href="#abilities">Abilities</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#contact">Contact</a></li>
         </ul>
      </div>
      <!-- /.navbar-collapse -->
   </nav>
   <div class="background-white">
      <div id="profile" class="container">
         <h2>Profile</h2>
         <p class="lead">I am a Full-Stack Web &amp; Mobile Engineer.</p>
         <hr />
         <div class="row">
            <div class="col-md-4 text-center">
               <img src="img/cdr.png" alt="Christopher D. Robison" width="250" height="250" />
            </div>
            <div class="col-md-8">
               <h3>Details</h3>
               <p>
                  <strong>Name:</strong><br /> Christopher D. Robison<br />
                  <strong>Location:</strong><br /> San Francisco, California, USA</p>
               <a href="https://twitter.com/thechrisrobison" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @thechrisrobison</a>
               <script>
                  ! function(d, s, id) {
                     var js, fjs = d.getElementsByTagName(s)[0],
                        p = /^http:/.test(d.location) ? 'http' : 'https';
                     if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                     }
                  }(document, 'script', 'twitter-wjs');
               </script>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <h3>About me</h3>
               <p>
                  I have a passion for technology. Not the mindless upgrading simply because it exists, mind you. I'm talking about a passion for leveraging technology to solve
                  real problems affecting real people, in the real world, today.  I am a full stack engineer who is just as comfortable configuring a Linux server, 
                  adminstrating a database or adding CSS3 transitions to a website as I am depoying a Java application or writing a websocket server for node.js.  
                  I also have experience in mobile development with apps published for both iOS and Android environments.  
               </p>
               <p>I am one of those rare, personable engineers who actually listens and understands how to balance business needs with those of the end user.  I have enough 
                  experience to be able to see the big picture yet still hands-on enough to implement everything myself if necessary.  While I have experience managing 
                  software development teams and received nothing but positive feedback by both my managers and my reports, I am not seeking a purely managerial 
                  role.  I am currently looking for my next career adventure someplace where my extensive experience and skillset can be used to its fullest capacity.
               </p>
            </div>
         </div>

      </div>
   </div>
   <div id="experiences" class="container">
      <h2>Experience</h2>
      <p class="lead">
         &ldquo;Protons give an atom its identity, electrons its personality.&rdquo;<br />- Bill Bryson, A short history of nearly everything
      </p>
      <hr />
      <h3>Career</h3>
      <div class="experiences">
<?php
   $tpl = file_get_contents("jobs/template.html");

   $dh = opendir("jobs/");
   $obj = array();
   while ($file = readdir($dh)) {
      if (preg_match("/\.txt/", $file)) {
         $jobs[] = $file;
         $obj[$file] = array();
         $tmp = file("jobs/$file");
         foreach ($tmp as $line) {
            $parts  = preg_split("/:/", $line, 2);
            if (count($parts)==2) {
               $obj[$file][$parts[0]] = $parts[1];
            }
         }
         if (!$obj[$file]['Location']) {
            $obj[$file]['Location'] = "San Francisco, CA";
         }
         if (!$obj[$file]['URL']) {
            $obj[$file]['URL'] = "";
            $obj[$file]['Link'] = " style='display:none;'";
         } else {
            $obj['file']['Link'] = "";
         }

      }
   }
   rsort($jobs);
   foreach ($jobs as $job) {
      $out = preg_replace('/\%\%(\w+)\%\%/e', '$obj[$job]["$1"]', $tpl);
      print $out ."\n";
   }
?>
      </div>
      <hr />
      <h3>Education</h3>
      <div class="experiences">
         <div class="experience row">
            <div class="col-md-4">
               <h4>California State University, Chico ("Chico State")</h4>
               <p class="experience-period">Aug 1988 - Jun 1991</p>
            </div>
            <div class="col-md-8">
               <p>
                  <strong>Computer Science</strong>
                  <span class="hidden-phone"> </span>
                  <span class="experience-details">
					   <span class="location">
						   <span class="glyphicon glyphicon-map-marker"></span> Chico, CA</span>
                  </span>
               </p>
            </div>
         </div>
         <div class="experience row">
            <div class="col-md-4">
               <h4>Butte Community College</h4>
               <p class="experience-period">Aug 1989 - Jun 1991</p>
            </div>
            <div class="col-md-8">
               <p>
                  <strong>Computer Science / General Education</strong>
                  <span class="hidden-phone">
                  </span>
                  <span class="experience-details">
					      <span class="location">
						      <a href="https://www.google.com/maps/place/Butte+College/@39.647498,-121.6450627,15z/data=!4m5!3m4!1s0x0:0xd5fdc493057bab2f!8m2!3d39.647498!4d-121.6450627" target="_blank"><span class="glyphicon glyphicon-map-marker"></span> Oroville, CA</span></a>
                     </span>
                  </span>
               </p>
            </div>
         </div>
      </div>
      <hr />
   </div>
   <div class="background-white">
      <div id="abilities" class="container">
         <h2>Abilities</h2>
         <p class="lead">
            &ldquo;Life without knowledge is death in disguise.&rdquo;<br />- Talib Kweli
         </p>
         <hr />
         <h3>Skills</h3>
         <div class="row">
            <div class="col-md-6">
               <ul class="no-bullets">
                  <li>
                     <span class="ability-title">Javascript</span>
                     <span class="ability-score">
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">PHP</span>
                     <span class="ability-score">
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Apache Server</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">iOS</span>
                     <span class="ability-score">
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Android</span>
                     <span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
                     <span class="glyphicon glyphicon-star filled"></span>
                     <span class="glyphicon glyphicon-star filled"></span>
                     <span class="glyphicon glyphicon-star filled"></span>
                     <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">HTML5</span>
                     <span class="ability-score">
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">CSS3</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Swift</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
               </ul>
            </div>
            <div class="col-md-6">
               <ul class="no-bullets">
                  <li>
                     <span class="ability-title">Perl</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Bash/other shells</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">ReactJS</span>
                     <span class="ability-score">
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star "></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Node.js</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star "></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Java</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star "></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Python</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Ruby</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">AngularJS</span>
                     <span class="ability-score">
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
         <hr />
         <h3>Tools</h3>
         <div class="row">
            <div class="col-md-6">
               <ul class="no-bullets">
                 <li>
                     <span class="ability-title">Git / Git Flow </span>
                     <span class="ability-score">
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Subversion</span>
                     <span class="ability-score">
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star "></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Gulp/Grunt</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Stash</span>
                     <span class="ability-score">
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star "></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">VIm</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Xcode</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Android Studio</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star "></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Eclipse</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star "></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Adobe Photoshop</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
               </ul>
            </div>
            <div class="col-md-6">
               <ul class="no-bullets">
                  <li>
                     <span class="ability-title">Jira</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Bugzilla</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">MS Office</span>
                     <span class="ability-score">
					      <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Linux (various distros)</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">FreeBSD</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">OS X</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Windows</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
                  <li>
                     <span class="ability-title">Solaris</span>
                     <span class="ability-score">
					         <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                        <span class="glyphicon glyphicon-star filled"></span>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div id="projects" class="container">
      <h2>Projects</h2>
      <p class="lead">
         &ldquo;You can do anything you set your mind to.&rdquo;<br />- Benjamin Franklin
      </p>
      <hr />
      <div class="row">
         <div class="col-md-6 col-sm-12 col-xs-12">
            <figure class="effect">
               <img src="img/ttw.png" alt="Tic-Tac-Whoa!" />
               <figcaption>
                  <h3>Tic-Tac-Whoa!</h3>
                  <p>An online multiplayer variation on the old classic. Simple yet fun!</p>
                  <p><strong>Tags:</strong> <br />Development, Games, Messaging</p>
                  <a href="http://tictacwoah.com/mobile.html" target="_blank">Check it out...</a>
                  <span class="icon"><span class="glyphicon glyphicon-new-window"></span></span>
               </figcaption>
            </figure>
         </div>
         <div class="col-md-6 col-sm-12 col-xs-12">
            <figure class="effect">
               <img src="img/hfb.png" alt="Helen Frazee Bower Poetry" />
               <figcaption>
                  <h3>A Lifetime in Verse: The Poetry of Helen Frazee-Bower</h3>
                  <p>A labor of love, this website is a compilation of published poetry written by my great-grandmother, Helen Frazee-Bower, during the 1920's and 1930's.</p>
                  <p><strong>Tags:</strong> <br />Development, Poetry, HTML5</p>
                  <a href="http://helenfrazeebower.com/" target="_blank">Check it out...</a>
                  <span class="icon"><span class="glyphicon glyphicon-new-window"></span></span>
               </figcaption>
            </figure>
         </div>
         <div class="col-md-6 col-sm-12 col-xs-12">
            <figure class="effect">
               <img src="img/twd.png" alt="The Word Drop" />
               <figcaption>
                  <h3>TheWordDrop</h3>
                  <p>This game is what would happen if Tetris and Scrabble had a baby. Available in the App Store and Google Play.</p>
                  <p><strong>Tags:</strong> <br />Development, Games, Mobile, App</p>
                  <a href="http://theworddrop.com/" target="_blank">Check it out...</a>
                  <span class="icon"><span class="glyphicon glyphicon-new-window"></span></span>
               </figcaption>
            </figure>
         </div>
      </div>
   </div>
   <div class="background-white">
      <div id="testimonials" class="container">
         <h2>Testimonials</h2>
         <p class="lead">
            &ldquo;Your most important work is always ahead of you, never behind you.&rdquo;<br />-Stephen Covey
         </p>
         <hr />
         <div class="row">
            <div class="col-md-6">
               <ul class="list no-bullets">
                  <li><h3>Communication</h3>
                     <ul class="show">
                        <li><span class="quote">One of Chris' most important skills is his ability to effective communicate complex topics. Over the past year, this ability has been very useful for the company and has helped alleviate several problems which arose.</span><cite>Jack Abbott, President<br>Inter@ctivate, Inc.</cite><br clear="both"></li>
                        <li><span class="quote">Christopher always asks for immediate feedback to ensure he is on task and performing his work correctly.</span><cite>Jose Munne, VP Engineering<br>Genetic Savings &amp; Clone</cite><br clear="both"></li>
                        <!--li><span class="quote">One of Chris' strengths is his ability to provide candor and effectively communicate change with his co-workers and reports.</span><cite>Lou Hawthorne, CEO<br>Genetic Savings &amp;; Clone</cite><br clear="both"></li-->
                        <li><span class="quote">Every project that Christopher has worked on has garnered high praise of the work performed partially due to the way he communicates and encourages communication.</span><cite>Dwaine Robison, CEO<br>True World Access, Inc.</cite><br clear="both"></li>
                        <!--li><span class="quote">Chris treats people with dignity and respect.</span><cite>Frank Mansour, CEO<br>The Finanacial Cafe</cite><br clear="both"></li-->
                        <!--li><span class="quote">Mr. Robison is very adept at resolving conflict and resolving problems before they escalate.</span><cite>Reed Sandberg, Director Software Engineering<br>Mediaplex</cite><br clear="both"></li-->
                     </ul>
                  </li>
                  <li><h3>Innovation</h3>
                     <ul>
                        <!--li><span class="quote">Christopher is a great example of how innovation and creativity can significantly improve a company"s performance. Christopher"s willingness to take chances was shown with the rich media ad technology he developed which no one thought would scale, but it has proved to be very successful.</span><cite>Rodney Webster, VP Product Services<br>Conversant, Inc.</cite><br clear="both"></li-->
                        <li><span class="quote">Mr. Robison took many steps to improve processes for the team over the past year. These steps were innovative and resulted in a 40% reduction of production support requests.</span><cite>Reed Sandberg, Director Software Engineering<br>Mediaplex</cite><br clear="both"></li>
                        <li><span class="quote">A great attribute of Christopher is his ability to quickly come up with solutions to obstacles as they present themselves.</span><cite>Joe Mendoza, Engineering Director<br>Conversant, Inc.</cite><br clear="both"></li>
                        <li><span class="quote">Chris found a creative workaround to the customer billing issues; This improved revenues by 32%.</span><cite>Ted Glenwright, CEO<br>Slip.Net</cite><br clear="both"></li>
                     </ul>
                  </li>
                  <li><h3>General</h3>
                     <ul>
                        <!--li><span class="quote">Any company, big or small, would be lucky to get him to work for them.</span><cite>Gary Hallock, VP Engineering<br>The Financial Cafe</cite><br clear="both"></li-->
                        <li><span class="quote">One can not say enough good things about Chris.</span><cite>Jack Abbott, President<br>Inter@ctivate, Inc.</cite><br clear="both"></li>
                        <li><span class="quote">I find that he prefers to work under minimal supervision and the possibility of hiring more employees like him should be discussed immediately.</span><cite>Lou Hawthorne, CEO<br>Genetic Savings &amp; Clone</cite><br clear="both"></li>
                        <!--li><span class="quote">Mr. Robison always creates a positive and inclusive work environment.</span><cite>Linda Mamet, VP Marketing<br>Inter@ctivate, Inc.</cite><br clear="both"></li-->
                        <li><span class="quote">Christopher is willing to do whatever it takes to get the job done – even perform tasks or jobs that are not his own.</span><cite>Ted Glenwright, CEO<br>Slip.Net</cite><br clear="both"></li>
                     </ul>
                  </li>
                  <li><h3>Job Knowledge</h3>
                     <ul>
                        <li><span class="quote">Mr. Robison demonstrates his extensive breadth of knowledge and experience on a daily basis. His insight in invaluable</span><cite>Reed Sandberg, Director Software Engineering<br>Mediaplex</cite><br clear="both"></li>
                        <li><span class="quote">Chris is quite adept at demonstrating his job knowledge and technical abilities, of which he seems to have no limit.</span><cite>Mike Garzillo, VP Marketing<br>Mindjet</cite><br clear="both"></li>
                        <li><span class="quote">Christopher consistently keeps up with the latest trends and industry best practices and applies these to his day-to-day work.</span><cite>Jack Abbott, President<br>Inter@ctivate, Inc.</cite><br clear="both"></li>
                        <!--li><span class="quote">Mr. Robison has a thorough understanding of the job skills required to perform his job.</span><cite>Rodney Webster, Product Services Director<br>Conversant, Inc.</cite><br clear="both"></li-->
                     </ul>
                  </li>
               </ul>
            </div>
            <div class="col-md-6">
               <ul class="list no-bullets">
                  <li><h3>Management</h3>
                     <ul>
                        <!--li><span class="quote">The feedback Mr. Robison provides his coworkers has been essential in how the team has improved over the past year.</span><cite>Reed Sandberg, Director Software Engineering<br>Mediaplex</cite><br clear="both"></li-->
                        <li><span class="quote">One of the more effective things about Chris's management style is his ability to build consensus. This has helped cut down on the animosity between the team members over the past year and improved productivity significantly.</span><cite>Reed Sandberg, Director Software Engineering<br>Mediaplex</cite><br clear="both"></li>
                        <!--li><span class="quote">Chris creates an atmosphere where people can share their thoughts – good and bad – and not fear retribution or intimidation.</span><cite>Scott Raskin, CEO<br>Mindjet</cite><br clear="both"></li-->
                        <li><span class="quote">Christopher is very good at making team members feel included. The inclusion has improved his team"s productivity dramatically.</span><cite>Kent McIntosh, HR Director<br>Inter@ctivate, Inc.</cite><br clear="both"></li>
                        <!--li><span class="quote">Christopher promotes a team-centered environment.</span><cite>Reed Sandberg, Director Software Engineering<br>Mediaplex</cite><br clear="both"></li-->
                        <li><span class="quote">Mr. Robison coordinates individual workers together to meet deadlines and work effectively as a team.</span><cite>Frank Mansour, CEO<br>The Finanacial Cafe</cite><br clear="both"></li>
                     </ul>
                  </li>
                  <li><h3>Problem Solving</h3>
                     <ul>
                        <li><span class="quote">Christopher is very effective at identifying problems, coming up with multiple solutions and quickly implementing a chosen solution.</span><cite>Joe Mendoza, Engineering Director<br>Conversant, Inc.</cite><br clear="both"></li>
                        <!--li><span class="quote">Christopher resolves problems in a timely manner.</span><cite>Rodney Webster, Product Services Director<br>Conversant, Inc.</cite><br clear="both"></li-->
                        <li><span class="quote">Mr. Robison is very proactive at getting in front of problems and stopping them before they escalate.</span><cite>Frank Mansour, CEO<br>The Finanacial Cafe</cite><br clear="both"></li>
                        <li><span class="quote">Christopher is very good at sharing knowledge and information during a problem to increase the chance it will be resolved quickly.</span><cite>Heath Kornblum, Software Engineer<br>NetOasis</cite><br clear="both"></li>
                     </ul>
                  </li>
                  <li><h3>Teamwork</h3>
                     <ul>
                        <li><span class="quote">Chris has been responsible for many changes to our group dynamic.</span><cite>Rodney Webster, <br>Conversant</cite><br clear="both"></li>
                        <li><span class="quote">Christopher is very good at working effectively in cross-departmental teams.</span><cite>Paige Donovan, VP Marketing<br>Inter@ctivate, Inc.</cite><br clear="both"></li>
                        <!--li><span class="quote">Chris is an asset because he can effectively work with other teams and departments.</span><cite>Ted Glenwright, CEO<br>Slip.Net</cite><br clear="both"></li-->
                        <li><span class="quote">Chris gives of himself to make sure the job is well done.</span><cite>Gregg Dessen, Web Engineering Manager<br>Mindjet</cite><br clear="both"></li>
                        <!--li><span class="quote">Mr. Robison makes a positive contribution to morale.</span><cite>Frank Mansour, CEO<br>The Finanacial Cafe</cite><br clear="both"></li-->
                     </ul>
                  </li>
               </ul>
         </div>
      </div>
   </div>
   <div class="background-gray">
      <div id="contact" class="container">
         <h2>Contact</h2>
         <p class="lead">
            &ldquo;If I had asked people what they wanted, they would have said faster horses. &rdquo;<br />- Henry Ford
         </p>
         <hr />
         <div class="row">
            <div class="col-md-6">
               <ul class="no-bullets">
                  <li>
                     <a href="http://twitter.com/thechrisrobison" target="_blank">
                        <span class="icon icon-twitter"></span> http://twitter.com/thechrisrobison</a>
                  </li>
                  <li>
                     <a href="https://linkedin.com/in/crobison" target="_blank">
                        <span class="icon icon-linkedin"></span> https://linkedin.com/in/crobison </a>
                  </li>
               </ul>
            </div>
            <div class="col-md-6">
               <ul class="no-bullets">
                  <li>
                     <a href="mailto:cdr@cdr2.com">
                        <span class="icon icon-email"></span>
                        <span style="unicode-bidi:bidi-override; direction: rtl;">moc.2rdc@rdc</span>
                     </a>
                  </li>
                  <li>
                     <a href="tel:4153000180">
                        <span class="icon icon-tel"></span>
                        <span>(415) 300-0180</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <hr />
         <div class="text-center">
            <a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-text="Check out the resume of Christopher Robison; This guy knows web engineering!" data-url="http://cdr2.com/resume2/" data-via="thechrisrobison" data-hashtags="cdr" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
         </div>
      </div>
   </div>
   <!-- Bootstrap core JavaScript -->
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript" src="js/script.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="/asteroids.js"></script>
</body>
</html>
