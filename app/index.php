<?php include 'mail.php'; ?>

<!doctype html>
<html class="no-js" lang="">
  <head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>physicaltherapy</title>

	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- build:css styles/vendor.css -->
	<!-- bower:css -->
	<!-- endbower -->
	<!-- endbuild -->

	<!-- build:css styles/main.css -->
	<link rel="stylesheet" href="styles/main.css">
	<!-- endbuild -->
	
	<!-- build:js scripts/vendor/modernizr.js -->
	<script src="/bower_components/modernizr/modernizr.js"></script>

	<!-- endbuild -->
  </head>
  <body>
	<!--[if IE]>
	  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
<div class="fluid-container">
	<div class="header ">
		<h3 class="">physicalTherapy</h3>
		<div class="menu-mobile-icon  visible-xs">
			<div class="mobile-menu"></div>
		</div>
		<ul class="nav nav-pills menu-options closed">
			<li class="nav-item">
				<a class="nav-link home" href="#">Home</a>
			</li>
			<li>
				<a class="nav-link techniques" href="#">Techniques</a>
			</li>
			<li>
				<a class="nav-link location" href="#">Location</a>
			</li>
			<li>
				<a class="nav-link contact-us" href="#">Contact</a>
			</li>
		</ul>
	</div>

	<section id="home" class="">
		<div class="video">
			<video id="bgvid" poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" playsinline autoplay muted loop>
				  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
				<source src="http://thenewcode.com/assets/videos/atlantic-light.webm" type="video/webm">
				<source src="http://thenewcode.com/assets/videos/atlantic-light.mp4" type="video/mp4">
			</video>			
		</div>
		<div class="home-general-info">
			<div class="card about">
				<div class="card-image">
					<img class="img-responsive" src="http://painspecialties.com/wp-content/uploads/2016/05/medsmanagement2.jpg">
					<div class="card-info"> 
						<h2>Dr. Richard L. Smith</h2>
						<h5>Anesthesiology and Pain Management</h5>
						<h4>MD board certified</h4>
					</div>
				</div>
				<div class="card-content">
					<p>A Harvard fellowship trained physician, double board certified in anesthesiology and pain management.</p>
					<p>More than 10,000 patients helped<br>Over 20 years pain management</p>
				</div>
			</div>
			<div class="card techniques">
				<div class="card-image">
					<img class="img-responsive" src="http://painspecialties.com/wp-content/uploads/2016/05/forest-couple-walking.jpg">
					<div class="card-info"> 
						<h3>We combine different techniques to help your relief</h3>
					</div>
				</div>
				<div class="card-content">
					<ul>
						<li>physical therapy</li>
						<li>massage</li>
						<li>acupuncture</li>
						<li>biofeedback</li>
					</ul>
				</div>
			</div>
			<div class="card bio">
				<div class="card-image">
					<img class="img-responsive" src="http://painspecialties.com/wp-content/uploads/2016/05/officepic.jpg">
					<div class="card-info"> 
						<h2 class="experience">More than 20 Years of experience</h2>
					</div>
				</div>
				<div class="card-content">
					<p>Our skilled therapists approach each patients symptoms from a variety of angles and develop a personalized plan to ensure the best outcome for our patients.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="techniques">
		<div class="fluid-container">
			<div class="row">
				<div class="col-md-2">
					<div class="nav-sidebar">
						
						<ul class="nav " role="tablist">

							<li class="nav-item"><a href="#acupuncture" role="tab" data-toggle="tab">Acupuncture</a></li>
							<li class="nav-item"><a href="#biofeedback" role="tab" data-toggle="tab">Biofeedback</a></li>
							<li class="nav-item"><a href="#electrotherapy" role="tab" data-toggle="tab">Electrotherapy</a></li>
							<li class="nav-item"><a href="#stretching" role="tab" data-toggle="tab">General Stretching</a></li>
							<li class="nav-item"><a href="#massage" role="tab" data-toggle="tab">Massage Therapy</a></li>
							<li class="nav-item"><a href="#tens" role="tab" data-toggle="tab">TENS</a></li>
							<li class="nav-item"><a href="#yoga" role="tab" data-toggle="tab">Yoga</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-10">

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active text-style" id="acupuncture">
						  <h2>Acupuncture</h2>
							   
							   <p>Acupuncture therapy is believed to have started in ancient China. Acupuncture therapy is the balancing of energies through the pathways of the body promoting the flow of natural healing, and this is done by inserting needles at very precise acupuncture points. </p>
							   <p>Therefore, acupuncture can help the body’s internal organs to correct imbalances in the digestions, absorption, and energy production activities. </p>
							   <p>The modern scientific explanation is that needling the acupuncture points stimulates the nervous system to release chemicals in the muscles, spinal cord, and brain. </p>
							   <p>These chemicals will either change the experience of pain, or they will trigger the release of other chemicals and hormones, which influence the body’s own internal regulation system. Acupuncture used in conjunction with other therapies can increase the healing process as well as decrease pain. </p>
						</div>
						<div class="tab-pane text-style fade in" id="biofeedback">
						  <h2>Biofeedback</h2>
						   <p>Biofeedback is a technique to train the patient to become better connected to their physiological processes and their ability to control them. It can contribute significantly to the patient’s ability to relax and ease the patient to overcome the feeling of helplessness that frequently accompanies the chronic pain state.</p> 
						   
						   <p>As a therapy that can help individuals appreciate the sources of their stress and reduce that stress by quieting the mind and using it to mobilize the body to heal itself is one of the reasons biofeedback is a therapy for many different conditions.</p> 

						   <p>The biofeedback process begins by the patient watching the monitoring device, which sends physiological information to the patients they are otherwise unaware of. Then by trial and error, the patients can learn to adjust their thinking and other mental processes to help control the bodily function of interest. Many patients like biofeedback because it puts them in charge, giving them a sense of self-reliance over their illness and health. </p>

						   <p>Certified biofeedback therapists can show you how to focus on signals from your own body that indicate your level of stress or relaxation. External sensors placed on your body measure specific stress responses, such as muscle tension, temperature and perspiration into signals you can see or hear. The goal is to change the physical response through relaxation, thus altering the signal.</p> 

						   <p>Biofeedback can be used to treat a wide variety of conditions and diseases ranging from stress, alcohols, and other addictions, sleep disorders, epilepsy, respiratory problems and fecal and urinary incontinence to muscle spasms, partial paralysis or muscle dysfunction caused by injury, migraine headaches, hypertension, and a variety of vascular disorders.</p>
						</div>
						<div class="tab-pane text-style fade in" id="electrotherapy">
						  <h2>What is electrotherapy?</h2>
						  <p> Electricity has been used to treat pain for over 100 years, but recent scientific studies have proven that electricity can reduce both acute and chronic pain. The exact mechanism of electrical stimulation’s beneficial effect remains controversial. Electrical stimulation may directly block transmission of pain signals along nerves. In addition, electrical stimulation has been shown to promote the release of endorphins, which are natural painkillers produced by the body.
							</p>
							<p>Several different electrical stimulation devices exist, each producing different frequencies, waveforms, and effects.
							</p>
							<b>Electrical modalities include</b>
							<ul>
								<li>Transcutaneous Electrical Nerve Stimulation (TENS) (the most commonly used)</li>
								<li>Interferential Current (IFC)</li>
								<li>Galvanic Stimulation (GS)</li>
							</ul>
							<p>
							Common characteristics of electrotherapy stimulation TENS, IFC, and GS all apply electrical stimulation to nerves and muscles via adhesive pads placed on the skin. These devices are powered by batteries, and some units have an adapter that allows powering from an outlet.</p>
						</div>
						<div class="tab-pane text-style fade in" id="stretching">
							   
						   <h3>General Stretching Guidelines</h3>
						   <p>Stretching is very important in managing chronic pain. Stretching helps increase flexibility and help prevent injury or cramping. Stretching should be performed every single day to see the best results.</p>

						   <strong>Below are some tips for stretching correctly:</strong>
						   <ol>
							<li>Move into the stretch slowly</li>
							<li>Hold the stretch for 10-30 seconds</li>
							<li>Do not bounce</li>
							<li> Keep your breathing slow</li>
							<li>Stretching should not be painful (a mild comfortable pull is acceptable)</li>
						   </ol>
						</div>
						<div class="tab-pane text-style fade in" id="massage">
						  <h2>Massage Therapy</h2>
						   <p>Massage therapy is used to break the chronic pain cycle by treating the soft tissue structures. The process of massage includes stroking and kneading the soft tissues of the body in order to induce relaxation, correct vertebral misalignment and release of body tensions that are generally caused by muscle imbalances.</p> 
						   <p>Research has shown that the therapeutic physical massage induces a reduced heart rate and lowers blood pressure by releasing of endorphins, which are a form of natural narcotics of the brain that help create a sense of well-being.</p>
						</div>
						<div class="tab-pane text-style fade in" id="electrotherapy">
						  <h2>What is electrotherapy?</h2>
						  <p> Electricity has been used to treat pain for over 100 years, but recent scientific studies have proven that electricity can reduce both acute and chronic pain. The exact mechanism of electrical stimulation’s beneficial effect remains controversial. Electrical stimulation may directly block transmission of pain signals along nerves. In addition, electrical stimulation has been shown to promote the release of endorphins, which are natural painkillers produced by the body.
							</p>
							<p>Several different electrical stimulation devices exist, each producing different frequencies, waveforms, and effects.
							</p>
							<p>Electrical modalities include
							  <ul>
								<li>Transcutaneous Electrical Nerve Stimulation (TENS) (the most commonly used)</li>
								<li>Interferential Current (IFC)</li>
								<li>Galvanic Stimulation (GS)</li>
							  </ul>
							</p>
							<p>
							Common characteristics of electrotherapy stimulation TENS, IFC, and GS all apply electrical stimulation to nerves and muscles via adhesive pads placed on the skin. These devices are powered by batteries, and some units have an adapter that allows powering from an outlet.</p>
							<hr>
							<div class="col-xs-6 col-md-3">
							  <img src="http://placehold.it/150x150" class="img-rounded pull-right">
						  </div>
						</div>

						<div class="tab-pane text-style fade in" id="tens">
							<h2>Transcutaneous Electrical Nerve Stimulation (TENS)</h2>
							<p>Transcutaneous electrical nerve stimulation is the administration of an electrical stimulus to the skin. The theory of TENS is as follows: when a non-painful stimulus is applied, it literally inhibits the perception of pain by closing the gate and blocking the transmission of a painful stimulus at spinal cord levels. </p>
							<p>Lead wires attach to the stimulator and lead to 2 to 4 electrodes that are taped to the skin. Electrodes can be placed over the painful area, surrounding the painful area, over the nerve supplying the painful area, or even on the opposite side of the body. The patient then adjusts the voltage so that sensation is perceptible but not painful. </p>
							<p>The stimulator can be used constantly, or intermittently, depending on the response of the patient. The patient may use a TENS unit at home for back pain relief on a long-term basis. High frequency stimulation, sometimes called “conventional”, is tolerable for hours, but the resultant pain relief lasts for a shorter period of time. </p>
							<p>Low-frequency stimulation, sometimes called “acupuncture-like”, is more uncomfortable and tolerable for only 20-30 minutes, but the resultant pain relief lasts longer.</p>
						</div>

						<div class="tab-pane text-style fade in" id="yoga">
							<h2>Yoga</h2>
							<p>The meaning of the word Yoga is “union”: the integration of physical, mental, and spiritual energies that enhance health and wellbeing. </p>
							<p>Yoga teaches a basic principle of mind /body unity, if the mind is chronically restless and agitated the health of the body will be compromised; and if the body is in poor health, mental strength and clarity will be adversely affected.</p>
							<p>The practice of yoga can counter these ill effects, restoring mental and physical health. The physical posture, breathing exercise, and meditation practices of yoga have been proven to reduce stress, lower blood pressure, regulate heart rate, and even retard the aging process. Yoga therapy is useful in management of pain. </p>
							<p>Yoga requires one to focus on the energies within to harmonize the body, mind, and spirit. By focusing on your inner energy you can bring yourself to a higher level of awareness. There are many different styles of yoga. The difference in styles is the emphasis or focus, and no style is better than the other, but a matter of personal choice. </p>				
							<p>Some styles focus on body alignment, movement; breathe coordination, flow from one posture to another, or just holding a posture.</p>
						</div>
					</div>
					
				</div>
			</div>

		</div>
	</section>

	<section id="new-patients">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>New Patients</h2>
					<p>We are pleased to have you as our patient. We are committed to provide the best treatment for our patients. Attached you will find a New Patient questionnaire which you need to fill out entirely.</p>
					<p>Do not leave any blank spaces, please write N/A where appropriate. Once completed, please send it to our offices via email, Fax, or in a postage pre-paid envelope.</p>
					<p>IT MUST BE RECEIVED PRIOR TO YOUR APPOINTMENT, in order for the information to be entered into the NEW Electronic Medical Record System, which is required at the time of your appointment.</p>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
							<div class="forms">
								<div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_2">
									 <strong>Patient Form Download</strong> 
								</div> <!-- .et_pb_text --><div class="et_pb_button_module_wrapper et_pb_module">
									<a class="et_pb_button et_pb_custom_button_icon  et_pb_button_0 et_pb_module et_pb_bg_layout_light" href="http://painspecialties.com/wp-content/uploads/2016/06/New-Patient-Packet-Pain-Specialties-v1.pdf" data-icon="">New Patient Packet - PDF</a>
								</div><div class="et_pb_button_module_wrapper et_pb_module">
									<a class="et_pb_button et_pb_custom_button_icon  et_pb_button_1 et_pb_module et_pb_bg_layout_light" href="http://painspecialties.com/wp-content/uploads/2016/06/NewPatientPacket2014.doc" data-icon="">New Patient Packet - Word</a>
								</div><div class="et_pb_button_module_wrapper et_pb_module">
									<a class="et_pb_button et_pb_custom_button_icon  et_pb_button_2 et_pb_module et_pb_bg_layout_light" href="http://painspecialties.com/wp-content/uploads/2016/06/HIPAA-disclosure.pdf" data-icon="">HIPPA Privacy Notice</a>
								</div><div class="et_pb_button_module_wrapper et_pb_module">
									<a class="et_pb_button et_pb_custom_button_icon  et_pb_button_3 et_pb_module et_pb_bg_layout_light" href="http://painspecialties.com/wp-content/uploads/2016/08/Rehab-Referral-Form.pdf" data-icon="">Rehab Referral Form</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<ul>
							<li>Aetna</li>
							<li>Assurant</li>
							<li>AvMed</li>
							<li>Beechstreet</li>
							<li>Blue Cross Blue Shield</li>
							<li>Champva</li>
							<li>Cigna</li>
							<li>First Health</li>
							<li>Humana</li>
							<li>Multiplan</li>
							</ul>
						</div>
						<div class="col-md-4 col-sm-6">
							<ul>
							<li>Medicare Part B</li>
							<li>PHCS</li>
							<li>Secure Horizons</li>
							<li>Tricare</li>
							<li>UMR</li>
							<li>United Health Care</li>
							<li>Healthnet</li>
							<li>Workers Compensation</li>
							<li>Now Accepting All Auto Insurance</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="location">
		<div class="fluid-container">
			<div class="row">
				<div id="map" class=" col-sm-8"></div>
				<div class="comercial-info col-sm-4">

					<div class="row">
						<div class=" col-md-12">
							<form>
							<legend><span class="glyphicon glyphicon-globe"></span> Physical Teraphy</legend>
							<address>
								 <i class="fa fa-map-marker" aria-hidden="true"></i>
								138 E. Gore Street,<br>
								  &emsp;Orlando, FL. 
								32806<br>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<a href="phone:407-650-0033">407-650-0033</a><br>
								 <i class="fa fa-envelope" aria-hidden="true"></i>
								<a href="mailto:painspecialties@gmail.com">painspecialties@gmail.com</a>
							</address>
							</form>
						</div>

						<div class=" col-md-12">
							<div class="well well-sm">
								<form action="" method="post"">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" name="name" id="name" placeholder="Your name" required="required" />
											</div>
											<div class="form-group">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i>
													</span>
													<input type="email" class="form-control" name="email" id="email" placeholder="Your email" required="required" /></div>
											</div>
											<div class="form-group">
												<textarea name="message" name="message" id="message" class="form-control" rows="9" cols="25" required="required"
													placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
												Send Message</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<div id="contact-us">
		<p>♥ from the Yeoman team</p>
	</div>
</div>

	
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAX-v3hrquL6bEudfpKZmzbisgCwmkKZ7E&callback=initMap">
	</script>
	
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
	  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	  e.src='https://www.google-analytics.com/analytics.js';
	  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	  ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>



	<!-- build:js scripts/vendor.js -->
	<!-- bower:js -->
	<script src="/bower_components/jquery/dist/jquery.js"></script>
	<script src="/bower_components/modernizr/modernizr.js"></script>
	<!-- endbower -->
	<!-- endbuild -->
	
	<!-- build:js scripts/plugins.js -->
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/affix.js"></script>
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/alert.js"></script>
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/dropdown.js"></script>
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/tooltip.js"></script>
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/modal.js"></script>
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/transition.js"></script>
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/button.js"></script>
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/popover.js"></script>
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/carousel.js"></script>
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/scrollspy.js"></script>
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/collapse.js"></script>
	<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/tab.js"></script>
	<!-- endbuild -->
	
	<!-- build:js scripts/main.js -->
	

	<script src="scripts/main.js"></script>

	<!-- endbuild -->
  </body>
</html>
