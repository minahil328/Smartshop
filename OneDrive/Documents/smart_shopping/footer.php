<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Hello and welcome to Smart Shopping, the place to find the best for every taste and occasion. We thoroughly check the quality of our goods, working only with reliable suppliers so that you only receive the best quality product.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-phone"></i>+92-3355586702</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>minahil2002fatima@gmail.com</a></li>
									<li><a href="https://github.com/minahil328"><i class="fa fa-github" aria-hidden="true"></i>minahil328</a></li>
									<br>
									<h3 class="footer-title">Follow Us</h3>

									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>

								</ul>
							</div>
						
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Terms and Conditions</a></li>
									<li><a href="#">Return and Exchange</a></li>
									<li><a href="#">Shipping Charges</a></li>
									<li><a href="#">Private Policy</a></li>
								</ul>
							</div>
						</div>
				

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Mobiles</a></li>
									<li><a href="#">Men</a></li>
									<li><a href="#">Women</a></li>
									<li><a href="#">Kids</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
								
							</div>
						</div>
						
			
					<div class="col-md-3">
					<div class="footer">

					<h3 class="footer-title"> Subscription</h3>

						<div class="newsletter">

							<p>Sign Up for the <strong>OFFERUPDATES</strong></p>
							<form id="offer_form" onsubmit="return false">
								<input class="input" type="email" id="email" name="email" placeholder=" Email">
								<button class="newsletter-btn" value="Sign Up" name="signup_button" type="submit"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<div class="" id="offer_msg">
                                <!--Alert from signup form-->
                            </div>
							
						</div>
					</div>
			</div>
				
						
						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
			<center>
			<span class="copyright" >
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> SmartShopping |All rights reserved
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
</center>
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		
	
