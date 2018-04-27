<?php include "header.php" ?>
	    
	<!-- PAGEBODY -->
	<div class="page-body">
    
		<!-- BLOG SECTION -->
		<section id="blog">
			<div class="section-inner wrapper clearfix">	 
                                     
				<div class="section-title">
                	<h2><img src="files/images/RasPiBotLogoHorizontal.png" class="teamRasPiBot"> NEWS</h2>
              		<div class="seperator style-solid size-small seperator-light"><span></span></div>
              		<h4 class="subtitle">Stay up to date and take a look at our latest News</h4>
              	</div>
				
           	<div class="main-content left-float">

	            <div id="blog-entries">
		            <!-- BLOG POST STANDARD -->
		            <div class="blog-entry clearfix">
			            <div class="blog-date">
				            <span class="date-day">30</span>
				            <span class="date-month">March 2017</span>
			            </div>

			            <div class="blog-content">
				            <div class="entry-media blog-media">
					            <img src="files/images/RasPiBotBrainV2.jpg" alt="RasPiBot Brain V2"/>
					            <img src="files/images/RasPiBotBrainV3.jpg" alt="RasPiBot Brain V3"/>
				            </div> <!-- END .entry-media -->

				            <div class="blog-headline">
					            <h3 class="post-name"><a href="blog-single.html"><strong>New controllers V2 & V3</strong></a></h3>
					            <h6 class="post-meta">By RasPiBot</h6>
				            </div>

				            <p class="blog-intro">
					            We released 2 new controllers. The second version adds a 3.5 touchscreen monitor. Version 3 uses a PiZeroW with a generic hat. The advantage of the V3 is that it's really affordable ($12 USD).
				            </p>
			            </div>
		            </div>




						<!-- BLOG POST STANDARD -->
						<div class="blog-entry clearfix">
							<div class="blog-date">
								<span class="date-day">20</span>
								<span class="date-month">Feb 2017</span>
							</div>

							<div class="blog-content">
								<div class="entry-media blog-media">
                                    <img src="files/images/robots/RasPiBotJD.jpg" alt="RasPiBot JD"/>
								</div> <!-- END .entry-media -->

								<div class="blog-headline">
									<h3 class="post-name"><a href="blog-single.html"><strong>I present you JD Pi</strong></a></h3>
									<h6 class="post-meta">By RasPiBot</h6>
								</div>

								<p class="blog-intro">
									JD Pi is the first prototype of RasPiBot. We learned a lot in the process, especially about the world of 3D printing.
                                    First of all, never print a robot with PLA filament. You should always use ABS.
                                    PLA is too fragile and the pieces often break. We choose JD because of his EZ-Clip system that makes him the easiest to assemble.
                                    The EZ-Clip system works great with real plastic pieces but aren't optimized for the printed one. Still, JD is up and running but I wouldn't bet my life on his longevity.
                                    However, the good news is that if a piece breaks, you only need to print it again and you are back in business.
								</p>
                                <p>
                                    The next steps are to attach all the sensors, the touchscreen monitor on his chest and the camera in his head. Come back to this section to see our progress and feel free to contact us at anytime if you have any questions or want to share your projects.
                                </p>
							</div>
						</div>

				<!-- IL MANQUE LA BARRE HR ENTRE LES POSTES DE BLOGUES
					<section id="HelloWorld">
						<div id="blog-entries">

							<!-- BLOG POST STANDARD -->
							<div class="blog-entry clearfix">
								<div class="blog-date">
									<span class="date-day">17</span>
									<span class="date-month">Feb 2017</span>
								</div>

							<div class="blog-content">
									<div class="entry-media blog-media">
                                        <img src="files/images/RasPiBotLogo.png" alt="RasPiBot logo"/>
									</div> <!-- END .entry-media -->

								<div class="blog-headline">
										<h3 class="post-name"><a href="blog-single.html"><strong>Print ("Hello RasPiBot World!)</strong></a></h3>
										<h6 class="post-meta">By RasPiBot</h6>
									</div>

								 <p class="blog-intro">
									RasPiBot is alive! We are proud to announce that our Website is officially online. RasPiBot is born 2 years ago when I wanted to teach coding with humanoid robots in a computer science class. I started shopping for an affordable robot and realised that the price asked was a scam. 600$ CAD for 1 controler, 16 servomotors and some sensors is way too much.<br/><br/> Project RasPiBot is all about <b>paying a fair price</b> for a robot.
									 <ul>
										<li>We found cheap servomotors (it represents half the price of a robot).</li>
										<li>We programmed a Raspberry Pi controller with a Python library.</li>
										<li>We modified 3D files to make them compatible with our servomotors.</li>
										<li>We build tutorials to improve your experience.</li>
									</ul>

								 </p>
								</div>
							</div> <!-- END .blog-entry -->
							<!-- BLOG POST STANDARD -->

						<!-- END #blog-entries

              		<ul id="entries-pagination" class="clearfix">
                    	<li class="prev"><a href="#">Prev Page</a></li>
                    	<li class="next"><a href="#">Next Page</a></li>
                	</ul> <!-- END #entries-pagination -->
	            </div> <!-- END .blog-entry -->
            	</div> <!-- END .main-content -->

              
			  	<!-- SIDEBAR -->  
              	<aside class="right-float">

                	<div class="widget recentpost-widget">
                    <h6 class="widget-title"><strong>Recent Posts</strong></h6>
                    <ul>
	                    <li><a href="#controllers">New controllers V2 & V3</a></li>
                        <li><a href="#JDPi">I present you JD Pi</a></li>
                        <li><a href="#HelloWorld">Print ("Hello RasPiBot World!)</a></li>
                    </ul>
                	</div> <!-- End recentpost-widget -->
                    
             	</aside>  <!-- END aside --> 
				<!-- SIDEBAR --> 
				
				<div class="clear"></div> <!-- it's a must because the siblings elements are floating and the element below would'nt apply -->
				<div class="spacer spacer-big"></div>
				
			</div> <!-- END .section-inner-->
		</section> <!-- END SECTION #blog-->

		<!-- BLOG SECTION -->
<?php include "footer.php" ?>