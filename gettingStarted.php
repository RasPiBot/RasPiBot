<?php include "header.php" ?>
	<!-- PAGELOADER -->
	<div id="page-loader">
		<div class="page-loader-inner">
			<div class="loader-logo"><img src="files/images/RasPiBotLogoHorizontal.png" alt="Logo"/></div>
			<div class="loader-icon"><span class="spinner"></span><span></span></div>
		</div>
	</div>
	<!-- PAGELOADER -->

	<!-- PAGEBODY -->
	<div class="page-body">
		<!-- ABOUT -->
		<section id="about">
			<div class="section-inner">

				<div class="wrapper">

					<div class="section-title">
						<h2><img src="files/images/RasPiBotLogoHorizontal.png" class="teamRasPiBot"> Getting started</h2>
						<div class="seperator size-small"><span></span></div>
						<h4 class="subtitle">You are just a few steps away from coding your robot</h4>
					</div>

					<div class="column-section clearfix">
						<div class="column one-half sr-animation sr-animation-fromleft" data-delay="200">
							<!--<img src="files/uploads/550x350.jpg" alt="IMAGENAME"/>-->
							<iframe src="https://www.youtube.com/embed/IGaSea9yCwA" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="column one-half last-col">
							<h4><strong>Step 1 Assembling the robot</strong></h4>
							<ul>
								<li><a href="index.php#portfolio">Select your robot</a></li>
								<li><a href="index.php#store">Buy parts</a></li>
								<li><a href="index.php#portfolio">Print all 3D models you will need</a></li>
								<li><a href="https://www.youtube.com/watch?v=IGaSea9yCwA" target="_blank">Solder Adafruit 16 channels motor hat (look at the video)</a></li>
								<li><a href="https://www.ez-robot.com/Tutorials/Lesson/61?courseId=1" target="_blank">Follow this plan to build your robot</a></li>
							</ul>
						</div>
					</div> <!-- END .column-section -->

					<div class="column-section clearfix">
						<div class="column one-half">
							<h4><strong>Step 2 Setting up the Raspberry Pi</strong></h4>
							<ul>
								<li><a href="https://www.raspberrypi.org/downloads/raspbian/" target="_blank">Install Linux Raspbian on your Pi</a></li>
								<li><a href="https://www.raspberrypi.org/documentation/remote-access/vnc/README.md" target="_blank">Setting up VNC</a></li>
								<li><a href="https://www.raspberrypi.org/documentation/remote-access/ssh/README.md" target="_blank">Installing SSH</a></li>
								<li><a href="https://www.raspberrypi.org/documentation/linux/usage/commands.md" target="_blank">Learn to use Linux Commands</a></li>
							</ul>
						</div>
						<div class="column one-half last-col sr-animation sr-animation-fromright" data-delay="400">
							<a href="https://www.raspberrypi.org/documentation/" target="_blank"><img src="files/images/LinuxTutorials.PNG" alt="Raspberry Pi Linux tutorials"/></a>
						</div>
					</div> <!-- END .column-section -->

					<div class="spacer spacer-big"></div>

					<div class="column-section clearfix">
						<div class="column one-half sr-animation sr-animation-fromleft" data-delay="200">
							<img src="files/images/raspberry_pi_i2cdetect.png" alt="Adafruit i2c detect"/>
							Image source : Adafruit.com
						</div>
						<div class="column one-half last-col">
							<h4><strong>Step 3 Configuring Adafruit 16-Channel PWM/Servo HAT</strong></h4>
							<ul>
								<li><a href="https://learn.adafruit.com/adafruits-raspberry-pi-lesson-4-gpio-setup/configuring-i2c" target="_blank">Installing Kernel Support (with Raspi-Config)</a></li>
								<li><a href="https://learn.adafruit.com/adafruit-16-channel-pwm-servo-hat-for-raspberry-pi/attach-and-test-the-hat#step-2-configure-your-pi-to-use-i2c-devices" target="_blank">Testing the configuration</a></li>
								<ul>
									<li>In terminal, enter command : <b>sudo i2cdetect -y 1</b></li>
								</ul>
							</ul>
						</div>
					</div> <!-- END .column-section -->

					<div class="column-section clearfix">
						<div class="column one-half">
							<h4><strong>Step 4 Setting up GitHub</strong></h4>
							<ul>
								<li>In the terminal, enter the following commands :</li>
								<ul>
									<li><b>sudo apt-get install git</b> (install git client for terminal)</li>
									<li><b>cd</b> (go to home folder)</li>
									<li><b>mkdir RasPiBot_GitHub</b> (create a folder)</li>
									<li><b>cd RasPiBot_GitHub</b> (go into RasPiBot_GitHub directory)</li>
									<li><b>git clone https://github.com/RasPiBot/RasPiBot.git</b> (download Library from GitHub)</li>
									<li><b>cd RasPiBot</b>(move to the code directory)</li>
									<li><b>python RasPiBot.py</b>(your robot should move is neck)</li>
								</ul>
							</ul>
						</div>
						<div class="column one-half last-col sr-animation sr-animation-fromright" data-delay="400">
							<a href="https://github.com/RasPiBot/RasPiBot/" target="_blank"><img src="files/images/Constantes.PNG" alt="RasPiBot constantes"/></a>
						</div>
					</div> <!-- END .column-section -->

					<div class="spacer spacer-big"></div>

					<div class="column-section clearfix">
						<div class="column one-half sr-animation sr-animation-fromleft" data-delay="200">
							<iframe src="https://www.youtube.com/embed/sUhSxqq0oLE" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="column one-half last-col">
							<h4><strong>Step 5 It's time to have fun! CODING!!!!</strong></h4>
							<ul>
								<li><b>sudo nano RasPiBot.py</b> (press down arrow until you reach end of file)</li>
							</ul>
							<p>Demo code is really simple. We instanciate a robot with :<br/>
							<b>robot = RasPiBot()</b><br/><br/>
							Then we call a rotation method on the NECK.<br/>
							<b>robot.Rotate(RasPiBot.NECK,10)</b><br/><br/>
							We wait 2 seconds.<br/>
							<b>time.sleep(2)</b><br/><br/>
							Then we rotate the head back.<br/>
							<b>robot.Rotate(RasPiBot.NECK,-10)</b><br/><br/>

							It's enough to have fun! You can now play with any motors and code any movements you need. More tutorials are coming in the next few days like "Object Programming", "Inheritance" and "Controlling your robot with a web application".
							</p>
						</div>
					</div> <!-- END .column-section -->
					<div class="spacer spacer-big"></div>
				</div> <!-- END .wrapper> -->

			</div> <!-- END .section-inner-->
		</section>
		<!-- ABOUT -->

		<?php include "footer.php" ?>