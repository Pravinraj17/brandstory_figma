<<<<<<< HEAD
		<?php
        include './New folder/connect.php';

        if (isset($_POST['submit'])) {

        	$name=$_POST['name'];
        	$bio=$_POST['bio'];
        	$profession=$_POST['profession'];
        	$user_image=$_FILES['user_image']['name'];
        	$tmp_image=$_FILES['user_image']['tmp_name'];
            move_uploaded_file($tmp_image,"./images/$user_image");


        	$insert_query="insert into `brand_story` (name,bio,image,profession) values ('$name','$bio','$user_image','$profession')";
              
             $result=mysqli_query($con,$insert_query);
        	
        }

		?>
=======
>>>>>>> 7e3eafc (Removing dynamic method and change into static)

		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>BrandStory</title>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
			<link href="https://fonts.googleapis.com/css2?family=Emblema+One&family=Ga+Maamli&family=Nova+Round&family=Platypi:ital,wght@0,300..800;1,300..800&family=Playwrite+FR+Moderne:wght@100..400&family=Suranna&display=swap" rel="stylesheet">

				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="./css/style.css">
		</head>
		<body>

			

			<div class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<div class="nav-brand">
						<a href="javascript:void(0)" class="text-decoration-none text-danger mx-4">EQUENCE</a>
					</div>

					<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mynavbar"><i class="bi bi-list"></i></button>

					<div class="navbar-collapse collapse" id="mynavbar">

						<ul class="navbar-nav">

							<li class="nav-item mx-lg-4 mx-sm-0">
								<a href="javascript:void(0)" class="nav-link"> <i class="bi bi-house-fill d-lg-block d-lg-none mx-2"></i> Home</a>
							</li>

							<li class="nav-item mx-lg-4 mx-sm-0">
								<a href="javascript:void(0)" class="nav-link"> <i class="bi bi-cart4 d-lg-block d-lg-none mx-2"></i> Product</a>
							</li>

							<li class="nav-item mx-lg-4 mx-sm-0">
								<a href="javascript:void(0)" class="nav-link"><i class="bi bi-lightbulb-fill d-lg-block d-lg-none mx-2"></i> Solutions</a>
							</li>

							<li class="nav-item mx-lg-4 mx-sm-0">
								<a href="javascript:void(0)" class="nav-link"> <i class="bi bi-building-fill d-lg-block d-lg-none mx-2"></i> Company</a>
							</li>

							<li class="nav-item mx-lg-4 mx-sm-0">
								<a href="javascript:void(0)" class="nav-link"><i class="bi bi-files-alt d-lg-block d-lg-none mx-2"></i> Resources</a>
							</li>

							<li class="nav-item mx-lg-4 mx-sm-0 d-lg-block d-lg-none">
								<a href="javascript:void(0)" class="nav-link"> <i class="bi bi-telephone-fill d-lg-block d-lg-none mx-2"></i> Contact us</a>
							</li>
						</ul>

					</div>
					<ul class="navbar-nav d-sm-block d-none">
						<a href="javascript:void(0)" class="btn btn-primary btn-sm me-4 ">Contact us</a>

					</ul>
				</div>

			</div>

			<section id="home">
				<div class="container-fluid mt-3 ">

					<div class="row">
						<div class="col-md-6  mt-lg-5">
							<div class="mt-md-5">
								<h3>Built For Businesses Where A unified CPaaS Dominion Elevates the Synergy of <span class="text-danger"><br> Communication</span></h3>
							</div>
							<p class="mt-3">Harness our AI-powered CPaaS platform for automated, personalized customer communication, driving enhanced engagement and business success.</p>
						
						<div class="my-4 cta">
							<a href="javascript:void(0)" class="text-danger me-5">CTA 1</a>
						    <a href="javascript:void(0)" class="text-danger">CTA 2</a>
						</div>
						</div>


						<div class="col-md-6 d-md-block d-none">
							<div class="mx-2 section1_img">
								<img src="./project_images/img1.JPG">
							</div>
						</div>
					</div>
				<div class="vector_img d-md-block d-none">
				  <img src="./project_images/Capture1.png">
			    </div>

				</div>


			</section>
			

			<section id="solution">
				<div class="container-fluid mt-5">
					<div class="text-center">
						<h2 class="text-danger">Solutions</h2>
					</div>
					<div class="container">
					<div class="solution_box d-sm-block d-none"></div>
					<div class="row mt-3">
						
						<div class="col-md-4 border rounded-top">
							<div class="solution_box1">
								<div class="border-bottom">
									<h6 class="text-danger my-2">MARKETING</h6>
									<h5>Your path to profitable marketing</h5>
								</div>
								<div class="my-2">
									<img class="" src="./project_images/img2.JPG">
								</div>
							</div>
						</div>

						<div class="col-md-4 border rounded-top">
							<div class="solution_box1">
							<div class="border-bottom">
									<h6 class="text-danger my-2">PRODUCT & ENGINEERING</h6>
									<h5>Built to deliver an exceptional experience</h5>
								</div>
								<div class="my-2">
									<img class="" src="./project_images/img3.JPG">
								</div>
							</div>

						</div>
						<div class="col-md-4 border rounded-top">
							<div class="solution_box1">
							<div class="border-bottom">
									<h6 class="text-danger my-2">CUSTOMER ENGAGEMENT PLATFORM</h6>
									<h5>All about personalization and engagement</h5>
								</div>
								<div class="my-2">

									<img class="" src="./project_images/img4.JPG">
								</div>
						</div>
					</div>
					</div>
					</div>
				
				</div>
			</section>

			<section id="products">
				<div class="container-fluid">
					<div class="mt-4 text-center">
						<h3 class="">Power up Your Business With <span class="text-danger"> One Comprehensive Suite</span></h3>
					</div>
					<div class="row">
					<div class="col-md-2 d-flex justify-content-center">
						<div class="spinner-border text-primary" role="status">
                           <span class="sr-only "></span>
                        </div> 

					</div>
					<div class="col-md-10 my-3">
						<p class="text-center">Explore our products that seamlessly integrate into your existing solutions, delivering exemplary performance across multiple platforms to bridge the gap between you and your customers with personalized conversation and successful engagement.</p>
					</div>
					</div>


					<div class="row channels align-items-center">
						
                       <div class="col-md-4 mt-sm-0">
                       	<div class="my-5">
                       		<a href="javascript:void(0)" class="text-decoration-underline nav-link">Communication Channels</a>
                       	</div>
                       	<div class="my-5">
                       		<a href="javascript:void(0)" class="text-decoration-underline nav-link">Two Factor authentication API</a>
                       	</div>
                       	<div class="my-5">
                       		<a href="javascript:void(0)" class="text-decoration-underline nav-link">Omni-channel Programable API</a>
                       	</div>
                       	<div class="my-5">
                       		<a href="javascript:void(0)" class="text-decoration-underline nav-link">EMD - Equence Message Dispatcher</a>
                       	</div>
                       	<div class="my-5">
                       		<a href="javascript:void(0)" class="text-decoration-underline nav-link">ECM - Equence Campaign Manager</a>
                       	</div>
                       	<div class="my-5">
                       		<a href="javascript:void(0)" class="text-decoration-underline nav-link">Short & Long Code for 2-way Messaging</a>
                       	</div>
                       </div>
                       <div class="col-md-8 border rounded">
                       	
                       	<div class="mt-2">
                       		<h3>Communication Channels</h3>
                       		<p>Create omnichannel conversations with customers, build a potential user base, and encourage frequent interactions that drive customer satisfaction and promote business growth globally.</p>
                       	</div>


	                       <div class="line-container my-3">
	                            <span>Message</span>
	                          <div class="line"></div>
	                          <i class="bi bi-arrow-down-circle"></i>
	                          </div>
	                          <div class="row">

	                          	<div class="col-md-6">
	                          		<div>
	                          			<h4><i class="bi bi-chat-dots-fill text-warning"></i> SMS</h4>
	                          			<p>Deliver timely updates along with personalized messages to customers without fear of network connection and engagement barriers.</p>
	                          		</div>
	                          		<div>
	                          			<h4><i class="bi bi-people-fill text-primary"></i> Rich Communication Service</h4>
	                          			<p>Create branded and engaging conversations without the need for specific carrier agreements.</p>
	                          		</div>
	                          		<div>
	                          			<h4><i class="bi bi-whatsapp text-success"></i> WhatsApp Messaging Service</h4>
	                          			<p>Tap into the chatbot that initiates human-like conversations and replies to queries about product information, pricing details, and general assistance.</p>
	                          		</div>
	                          	</div>


	                          	<div class="col-md-6">
	                          		<div>
	                          			<h4><i class="bi bi-phone-flip text-primary"></i> SMS Over IP</h4>
	                          			<p>Deliver timely updates along with personalized messages to customers without fear of network connection and engagement barriers.</p>
	                          		</div>
	                          		<div>
	                          			<h4><i class="bi bi-google text-warning"></i> Google Verified Message</h4>
	                          			<p>Deliver timely updates along with personalized messages to customers without fear of network connection and engagement barriers.</p>
	                          		</div>
	                          		<div>
	                          			<h4><i class="bi bi-telegram text-info"></i>Telegram Messaging</h4>
	                          			<p>Deliver timely updates along with personalized messages to customers without fear of network connection and engagement barriers.</p>
	                          		</div>
	                          		
	                          	</div>

	                          </div>

	                       <div class="line-container my-3">
	                            <span>Voice</span>
	                          <div class="line"></div>
	                          <i class="bi bi-arrow-right-circle"></i>
	                          </div>

	                       <div class="line-container my-3">
	                            <span>Email</span>
	                          <div class="line"></div>
	                          <i class="bi bi-arrow-right-circle"></i>
	                          </div>

	                       <div class="line-container my-3">
	                            <span>Mobile-in app notification</span>
	                          <div class="line"></div>
	                          <i class="bi bi-arrow-right-circle"></i>
	                          </div>

                       </div>

					</div>



					</div>

			</section>


					<div class="container-fluid img-thumbnail mt-5">
						<div class="mt-4">
							<h2 class="text-danger text-center">Clients</h2>
						</div>

						<div class="text-center">
							<a href="javascript:void(0)"><img src="./project_images/img5.JPG"></a>
							<a href="javascript:void(0)"><img src="./project_images/img6.JPG"></a>
							<a href="javascript:void(0)"><img src="./project_images/img7.JPG"></a>
							<a href="javascript:void(0)"><img src="./project_images/img8.JPG"></a>
							<a href="javascript:void(0)"><img src="./project_images/img9.JPG"></a>
							<a href="javascript:void(0)"><img src="./project_images/img10.JPG"></a>
							<a href="javascript:void(0)"><img src="./project_images/img11.JPG"></a>
						</div>
					</div>

					<div class="container-fluid mt-5 img-thumbnail">
						<div class="row">
						<div class="col-md-1  d-flex justify-content-center mt-5">
							<div class="spinner-border text-warning" role="status">
                           <span class="sr-only "></span>
                        </div> 
						</div>
						<div class="col-md-5 mt-5">
							<div class="text-center">
								<h3>Building Trust through<span class="text-danger"> Credentials</span></h3>
								<p>Embrace Equence and embark on a journey of successful campaigns and high-revenue marketing</p>
							</div>
						</div>
						<div class="col-md-3 mt-5">
							<a href="javascript:void(0)"><img src="./project_images/img12.JPG"></a>
						</div>
						<div class="col-md-3 d-flex align-items-center mt-5">
							<a href="javascript:void(0)" class="btn btn-primary">Know more</a>
						</div>
					</div>

					<div class="row text-center mt-5 bg-light">
						<div class="col-md-4">
							<div class="">
								<h3 class="text-danger">40 Million</h3>
								<p>Unique customer connections</p>
							</div>
						</div>
						<div class="col-md-4">

							<div class="">
								<h3 class="text-danger">800 +</h3>
								<p>Brands</p>
							</div>
						</div>
						<div class="col-md-4">

							<div class="">
								<h3 class="text-danger">100%</h3>
								<p>Brand Retention</p>
							</div>
						</div>
					</div>


					</div>

					<section id="personalize">
						<div class="container-fluid mt-5">
							<div class="row">
								<div class="col-md-2 d-flex justify-content-center">
									
									
									<div class="spinner d-sm-block d-none">
                                         <div class="dot"></div>
                                         <div class="dot"></div>
                                         <div class="dot"></div>
                                         <div class="dot"></div>
                                         <div class="dot"></div>
                                         <div class="dot"></div>
                                         <div class="dot"></div>
                                         <div class="dot"></div>
                                         <div class="dot"></div>
                                         <div class="dot"></div>
                                         <div class="dot"></div>
                                         <div class="dot"></div>
                                       </div>


								</div>
								<div class="col-md-10">
									<div class="text-center">
										<h2>Personalize Communication Across<span class="text-danger"> All Sectors</span></h2>
										<p>As every industry is customer-centric, we empower your business to streamline workflow and tailor solutions that foster strong user engagement and adoption.</p>
									</div>
									<div class="container">

									<div class="row">
										<div class="col-md-6 learnmore">
											<div class="p-2 border rounded">
												<div class="mb-3">
											<span class="border rounded p-2 bg-primary text-white">Ecommerce</span>
										</div>
											<p>Automated chatbots initiate conversations and help gather insights into customer preferences that help engage them at critical points in the shopping journey. </p>
											<p>Foster customer loyalty and repeat business interactions on their preferred channels.</p>
											<div class="my-5">
												<a href="javascript:void(0)" class="text-danger">Learn More</a>
											</div>
											</div>

										</div>
										<div class="col-md-6 learnmore">
											<div class="p-2 border rounded">
												<div class="mb-3">
											<span class="border rounded p-2 bg-primary text-white">Fin-Tech</span>
										</div>
											<p>Automated chatbots initiate conversations and help gather insights into customer preferences that help engage them at critical points in the shopping journey. </p>
											<p>Foster customer loyalty and repeat business interactions on their preferred channels.</p>
												<div class="my-5">
												<a href="javascript:void(0)" class="text-danger">Learn More</a>
											</div>
											</div>

											
										</div>
									</div>

									<div class="row">
										<div class="col-md-6 learnmore">
											<div class="p-2 border rounded">
											<div class="mb-3">
											<span class=" border rounded p-2 bg-primary text-white">Education</span>
											</div>
											<p>Automated chatbots initiate conversations and help gather insights into customer preferences that help engage them at critical points in the shopping journey. </p>
											<p>Foster customer loyalty and repeat business interactions on their preferred channels.</p>
											<div class="my-5">
												<a href="javascript:void(0)" class="text-danger">Learn More</a>
											</div>
											</div>

										</div>
										<div class="col-md-6 rounded learnmore">
											<div class="p-2 border rounded">
												<div class="mb-3">
											<span class="border rounded p-2 bg-primary text-white">Healthcare</span>
										</div>
											<p>Automated chatbots initiate conversations and help gather insights into customer preferences that help engage them at critical points in the shopping journey. </p>
											<p>Foster customer loyalty and repeat business interactions on their preferred channels.</p>
												<div class="my-5">
												<a href="javascript:void(0)" class="text-danger">Learn More</a>
											</div>
											</div>

										</div>
									</div>
                                    </div>

									
								</div>
							</div>
							
						</div>
					</section>

					<section id="testimonials">
						
						<div class="container-fluid mt-4 bg-secondary bg-opacity-50 rounded">
							<div class="text-center mt-3">
								<h3>Testinomials</h3>
							</div>

							<div class="row ">
								<div class="col-sm-4 review d-flex justify-content-center my-4">
									<img src="./images/blank-profile-picture-973460_640(1).png" class="rounded-circle">
								</div>
								<div class="col-md-8">
									
									<div class="my-2 quotes">
										<i class="bi bi-quote"></i>
									</div>
									<div>
										<p>The Equence platform was instrumental in our path to becoming the 4th largest diagnostic company in India. Their invaluable support in our lead generation campaigns generated a strong ROI. Their real-time analytics were pivotal for conducting effective A/B testing and optimizing our marketing initiatives when needed. I wholeheartedly recommend their services.</p>
									</div>
									<div class="row">
									<div class="col-md-6 my-4">
										<h5>Guest</h5>
										<label>Group Chief Operating Officer</label>
									</div>
									<div class="col-md-6">
										<div class="nav-brand d-flex justify-content-center">
											<h4>LOGO</h4>
										</div>
									</div>
									</div>

								</div>
							</div>


						</div>

					</section>
					<section id="client_wins">
						<div class="container-fluid">
							<div class="my-3 text-center">
								<h3>Client<span class="text-danger"> Wins</span></h3>
							</div>
							<div class="client_wins d-flex justify-content-center">
								<a href="javascript:void:0" class="text-decoration-none mx-4">Connect and Heal</a>
								<a href="javascript:void:0" class="text-decoration-none mx-4">Mahindra</a>
								<a href="javascript:void:0" class="text-decoration-none mx-4">ICICI Bank</a>
							</div>
                           
                           <div class="row">
                           	<div class="col-md-4 text-center border rounded mt-3">
                           		
                           		<div class="p-2 border-bottom bg-light">
                           		<h4 class="text-primary"> <i class="bi bi-emoji-laughing-fill"></i> Connect & Heal </h4>
                           		</div>
                           		<div class="mt-5">
                           			<h3> Connect And Heal</h3>
                           			<p>We wanted to bring about a change in our customer’s health and how they can keep track of their health. With Equence’s help, we were able to build a patient-centric work model that helped us and our customers have a win-win situation.</p>
                           		</div>
                           	</div>
                           	<div class="col-md-8 mt-3 border rounded">
                           		<div class="  text-center p-3">
                           			<h3 class="text-primary">Increased Patient Engagement Via WhatsApp ChatBot</h3>
                           			<p>Connect and Heal implemented Equence’s WhatsApp ChatBot, which transformed the way patients approach healthcare services. Through this, remote health monitoring and real-time tracking and reminding of patients' health data witnessed remarkable user engagement and gained a competitive edge in the industry.</p>
                           		</div>
                           		<div class="row text-center mt-3">
                           			<div class="col-md-4 border-end">
                           				<h5 class="text-danger">--</h5>
                           				<div class="">
                           					<p>no of real-time data generated</p>
                           				</div>
                           			</div>
                           			<div class="col-md-4 border-end">
                           				<h5 class="text-danger">--</h5>
                           				<div class="">
                           					<p>of reminders were achieved</p>
                           				</div>
                           			</div>
                           			<div class="col-md-4 border-end">
                           				<h5 class="text-danger">40%</h5>
                           				<div class="">
                           					<p>increase in patient engagement</p>
                           				</div>
                           			</div>
                           		</div>
                           	</div>
                           </div>

						</div>
					</section>

					<div class="container bg-primary p-1 mt-3 rounded">
						<div class="my-3 text-center text-white">
							<h3>Experience the Power of Uninterrupted and </h3>
							<h3>Insightful Communications Today with Equence</h3>
						</div>
						<div class="my-3 text-center">
							<p class=" text-white"> Built for your business. Sign up and Stay Competitive</p> 
						</div>
						<div class="text-center">
							<a href="javascript:void(0)" class="btn btn-light">Contact Us</a>
						</div>
					</div>

					<section id="footer">
						<footer class="mt-3">
							<div class="container-fluid border bg-light rounded p-2">
							<div class="row align-items-center">
								<div class="col-md-6 text-center my-3">
									<a href="javascript:void(0)">Menu</a>
									<a href="javascript:void(0)">Menu1</a>
									<a href="javascript:void(0)">Menu2</a>
									<a href="javascript:void(0)">Menu3</a>
								</div>
								<div class="col-md-6 text-center">
									<a href="javascript:void(0)">Facebook</a>
									<a href="javascript:void(0)">LinkedIn</a>
									<a href="javascript:void(0)">Youtube</a>
									<a href="javascript:void(0)">Twitter</a>

								</div>

								
							</div>
							<hr>
							<div class="text-center">
								All Rights Reserved &copy 2024 Equence
							</div>
							</div>


						</footer>
					</section>



		</body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

		</html>
