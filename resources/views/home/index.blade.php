@extends('layouts.main')

@section('title', 'Homepage Title')



@section('content')

<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <!-- Header -->
    <header id="header" >
        <div class="row">
            
            
            <div class="large-4 desktop-4" role="navigation">
                
                <a href="/" title="Home" class="kilo" ><span class="sprite icon"></span> Kara<strong>.Guru</strong></a>
                
            </div>
            
            <div class="large-8 desktop-8" role="navigation">
                
                
                <ul class="subnav">
                    <li><a href="/" title="Home">Home</a></li>
                    <li><a href="/#pricing" title="Pricing">Plans and Pricing</a></li>
                    <li><a href="/#welcome" title="Home">Introduction</a></li>
                    <li><a href="/#how" title="Home">How it works</a></li>
                    <li><a href="/#features" title="Home">Features</a></li>
                    <li><a href="/#about" title="About">About</a></li>
                    <li><a href="/#contact" title="Contact">Contact</a></li>
                </ul>
                
            </div>
        </div>
        <div class="row text-center info">
		
            <h2><strong>Kara<strong>.Guru</strong></strong> for you</h2>
          
            <h3 class="search-header">Have a Question?</h3>
            <p class="search-tag-line">If you have any question you can ask below or enter what you are looking for!</p>

            <form id="search-form" class="search-form clearfix" method="get" action="#" autocomplete="off" 
                  novalidate="novalidate" _lpchecked="1">
                <input class="search-term required" type="text" id="s" name="s" placeholder="Type your search terms here" title="* Please enter a search term!" autocomplete="off">
                <input class="search-btn" type="submit" value="Search">
                
            </form>
            
        </div>
        
    </header>



    
    
    <!-- Features -->
    <section class="section features">
          
            
            
            <div class="row">
            <a id="welcome"></a>
                <h2 class="kilo text-center">Get Any Solution of Windows Related Problems</h2>
                <p class="text-lead text-center">Kara.Guru is a plaftform for getting help on windows issues/problems. </p>
            </div>
            
            
              <header class="text-center">
                <div class="row">
                    <div class="mobile-12 tablet-10 tablet-offset-1 large-8 large-offset-2">
                        <h2>Get Help In Troubleshooting Windows Problems</h2>
                        <p>
                            Don't waste your time searching internet or forums. We have single place where 
                            you can search or get professional help on Windows Issues / Problems.
                        </p>
                    </div>
                </div>
            </header>
            <div class="row text-center">
                <div class="desktop-4 tablet-4 i">
                    <i class="material-icons md-64">desktop_windows</i>
                    <h2>Windows <strong>Problem Solutions</strong></h2>
                    <p>Expand for free with your Dropbox, Google Drive and OneDrive accounts or use the extra free space on your hard drive.</p>
                </div>
                <div class="desktop-4 tablet-4 i">
                    <i class="material-icons md-64">developer_board</i>
                    <h2>Windows <strong>Dedicated Articles</strong></h2>
                    <p>Tips, Tricks and latest windows information related articles.</p>
                </div>
                <div class="desktop-4 tablet-4 i">
                    <i class="material-icons md-64">nature_people</i>
                    <h2>Windows <strong>On Demand Solutions</strong></h2>
                    <p>Works with all modern browsers, iOS, Android, Windows Phone, OS X, Windows, Linux, WebDAV and more.</p>
                </div>
            </div>
    </section>
    
    <!-- Functions -->
    <section class="section gray functions">
            
            
            
    <a id="how"></a>
				<div class="row">
        	   	<h2 class="kilo text-center">How It <strong>Works</strong></h2>
						<p class="lead text-center">Unlike other file sharing solutions, Kara.Guru doesn't distribute copies of your data but grants access to it instead:</p>

					<div class="mobile-4 desktop-4 large-4 text-center">
							<img src="/img/features/how_works1.png" class="img-responsive center-block" alt="">
							<h4>Add recipients <br> and create workgroups</h4>
					</div>
					<div class="mobile-4 desktop-4 large-4 text-center">
							<img src="/img/features/how_works2.png" class="img-responsive center-block" alt="">
							<h4>Choose files for sharing. <br> Your data stays where it is</h4>
					</div>
					<div class="mobile-4 desktop-4 large-4 text-center">
							<img src="/img/features/how_works3.png" class="img-responsive center-block" alt="">
							<h4>Group members can access data, collaborate and discuss it all in one place</h4>
					</div>
				</div>

            
                
   <!--             <div class="tabs tabs-vert large-12 desktop-12 tablet-12">
                    <ul class="tab-nav js-nav">
                        <li class="tab-nav-item js-nav-item"><a href="#ex2-tab1">First tab</a></li>
                        <li class="tab-nav-item js-nav-item"><a href="#ex2-tab2">Second tab</a></li>
                        <li class="tab-nav-item js-nav-item"><a href="#ex2-tab3">Third tab</a></li>
                        <li class="tab-nav-item js-nav-item"><a href="#ex2-tab4">Fourth tab</a></li>
                    </ul>
                    <div id="ex2-tab1" class="tab-pane js-tab"><img src="http://lorempixel.com/800/250/sports/2" alt="">
                        <div class="tab-info">
                            <p>Some info about this item.<a href="#">A link</a></p>
                        </div>
                    </div>
                    <div id="ex2-tab2" class="tab-pane js-tab"><img src="http://lorempixel.com/800/250/fashion/2" alt="">
                        <div class="tab-info">
                            <p>Some info about this item<a href="#">A link</a></p>
                        </div>
                    </div>
                    <div id="ex2-tab3" class="tab-pane js-tab"><img src="http://lorempixel.com/800/250/transport/1" alt="">
                        <div class="tab-info">
                            <p>Some info about this item</p>
                        </div>
                    </div>
                    <div id="ex2-tab4" class="tab-pane js-tab"><img src="http://lorempixel.com/800/250/nature/2" alt=""></div>
                </div>
                -->
                
                
    </section>
    
    <!-- Testimonials -->
    <div class="section testimonials">
        
        
        <a id="features"></a>
        <div class="row">
            <h2 class="kilo text-center">We're building <strong>Relationships</strong></h2>
            
            
            

						<div class="desktop-4 large-4text-center">
							<img style="margin-top: 25px" src="/img/features/share_securely.png" class="img-responsive center-block" alt="">
						</div>
						<div class="desktop-8 large-8">
							<h3>Share large files securely</h3>
							<p>Send files larger than 20 GB from your computer or NAS device and control exactly who and when sees your files.</p>
						</div>

						<div class="desktop-4 large-4text-center">
							<img style="margin-top: 15px" src="/img/features/why_1.png" class="img-responsive center-block" alt="">
						</div>
						<div class="desktop-8 large-8">
							<h3>Take back control of your shared files</h3>
							<p>Public Guru solutions, like Dropbox, let users create open links to share files.  Use your existing Guru offering as a personal backup and manage access to your files through Kara Guru’s simple and secure access controls.</p>
						</div>

						<div class="desktop-4 large-4text-center">
							<img style="margin-top: 24px" src="/img/features/why_2.png" class="img-responsive center-block" alt="">
						</div>
						<div class="desktop-8 large-8">
							<h3>Effectively manage group communication and collaboration</h3>
							<p>One location to share files and communicate effectively, your conversations are saved and stored through the Kara Guru application to help you keep track of projects and collaborate effectively.</p>
						</div>

						<div class="desktop-4 large-4text-center">
							<img style="margin-top: 30px" src="/img/features/why_3.png" class="img-responsive center-block" alt="">
						</div>
						<div class="desktop-8 large-8">
							<h3>Leverage your existing infrastructure. Don't pay for sync anymore.</h3>
							<p>Use your existing NAS storage or our stylish software for syncing, backing up and sharing your files, even if your PC, Mac or Linux machine is currently off.</p>
						</div>

            
            <!--
                <div class="mobile-10 mobile-offset-1 tablet-6  desktop-4 large-4">
                    <img src="img/80x80.jpg" alt="#" width="80" height="80" class="image">
                    <h3>George Doe</h3>
                    <h4>– Blackhorse owner –</h4>
                    <p>Publishing your users stories abount your product can be usefull for your next clients. You can describe how your clients use your product to increase theirs busssinesses. Tempalte is ready to display information from your social media sites.
                    </p>
                </div>
                
                <div class="mobile-10 mobile-offset-1  tablet-6  desktop-4 large-4">
                    <img src="img/80x80.jpg" alt="#" width="80" height="80" class="image">
                    <h3>Nick Doe</h3>
                    <h4>– Digiapple owner –</h4>
                    <p>Publishing your users stories abount your product can be usefull for your next clients. You can describe how your clients use your product to increase theirs busssinesses. Tempalte is ready to display information from your social media sites.</p>
                </div>
                
                <div class="mobile-10 mobile-offset-1  tablet-6  desktop-4 large-4">
                    <img src="img/80x80.jpg" alt="#" width="80" height="80" class="image">
                    <h3>Andrew Doe</h3>
                    <h4>– T-crowd owner –</h4>
                    <p>Publishing your users stories abount your product can be usefull for your next clients. You can describe how your clients use your product to increase theirs busssinesses. Tempalte is ready to display information from your social media sites.</p>
                    
                    
                </div>-->
            
            
       </div>
        
    </div>
    
    <!-- Clients -->
    <section class="section clients">
    
    <a id="pricing"></a>
    
    <div class="pricing-table pricing-three-column row">
    
    <h2 class="text-center kilo">Plans</h2>
    
        <div class="plan mobile-12  desktop-3 large-3">
          <div class="plan-name-bronze">
            <h2>Bronze</h2>
            <span>$8.99 / Month</span>
          </div>
          <ul>
            <li class="plan-feature">10 Users</li>
            <li class="plan-feature">5TB Disk Space</li>
            <li class="plan-feature"><a href="#" class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i> Select</a></li>
          </ul>
        </div>
        <div style="z-index:55;" class="plan mobile-12 desktop-3  large-3">
          <div class="plan-name-silver">
            <h2>Silver <span class="badge badge-danger">Popular</span></h2>
            <span><strike>$10.99</strike>   <font color="#c63172">$9.99 - <span class="label label-warning">Sale</span></font></span>
          </div>
          <ul>
            <li class="plan-feature">50 Users</li>
            <li class="plan-feature">10TB Disk Space</li>
            <li class="plan-feature"><a href="#" class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i> Select</a></li>
          </ul>
        </div>
        <div class="plan mobile-12 desktop-3  large-3">
          <div class="plan-name-gold">
            <h2>Gold</h2>
            <span>$15.99 / Month</span>
          </div>
          <ul>
            <li class="plan-feature">Unlimited Users</li>
            <li class="plan-feature">Unlimited Space</li>
            <li class="plan-feature"><a href="#" class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i> Select</a></li>
          </ul>
        </div>
    </div>
    
        <p>&nbsp;</p>
        <header class="text-center">
            <div class="row">
                <div class="mobile-12 tablet-10 tablet-offset-1 desktop-8 desktop-offset-2 large-8 large-offset-2">
                    <h2 class="kilo">Clients</h2>
                    <p>Decent listing with your clients.</p>
                </div>
            </div>
        </header>
        
        <div class="row">
            <div class="mobile-4 tablet-4 desktop-2 large-2 i">
                    <img src="img/clients/digiapple.png" alt="#" width="69" height="102" class="img-responsive">
            </div>
            <div class="mobile-4 tablet-4 desktop-2 large-2 i">
                    <img src="img/clients/backhorse-digital.png" alt="#" width="106" height="119">
            </div>
            <div class="mobile-4 tablet-4 desktop-2 large-2 i">
                    <img src="img/clients/veagle-technologies.png" alt="#" width="117" height="106">
            </div>
            <div class="mobile-4 tablet-4 desktop-2 large-2 i">
                    <img src="img/clients/coffetwist.png" alt="#" width="77" height="106">
            </div>
            <div class="mobile-4 tablet-4 desktop-2 large-2 i">
                    <img src="img/clients/diagonal.png" alt="#" width="128" height="87">
            </div>
            <div class="mobile-4 tablet-4 desktop-2 large-2 i">
                    <img src="img/clients/t-crowd.png" alt="#" width="75" height="103">
            </div>
        </div>
        
    </section>
    
    <!-- Business theme -->
    <div class="section businessTheme">
        <div class="container text-center">
            <h2 class="">Get started now for free</h2>
            <a href="#" title="#" class="btn btn-lg btn-yellow btn-effect">Contact Kara.Guru <span>Invitation only</span></a>
        </div>
    </div>
    
  


  <!-- Footer -->
    <footer id="footer">
        <div class="wrap">
            <a id="contact"></a>
            <a id="about"></a>
            <div class="row">
                <div class="mobile-12 tablet-6 desktop-4 large-4 i">
                    <h2>KaraGuru</h2>
                    <div class="content">
                        199 e Montgomery ave, suite 100<br>
                        rockville, Maryland 20850
                        info@Kara.Guru
                    </div>
                </div>
                <div class="mobile-12 tablet-6 desktop-4 large-4 i">
                    <h2>Quick Links</h2>
                    <ul>
                      <li> <a href="#">Thabo Companies LLC</a> </li> 
                      <li> <a href="terms.php">Terms</a> </li> 
                      <li> <a href="privacy.php">Privacy Policy</a> </li>
                    </ul>
                    
                </div>
               
                <div class="mobile-12 tablet-6 desktop-4 large-4 i">
                    <h2>About</h2>
                    <p>
                        Kara.Guru is an unlimited online storage service designed for the future era. 
                        It allows users to store everything, share anything and play anywhere, effectively 
                        extending the storage capacity of their any devices. 
                     
      </p>
                   
                </div>
            </div>
            
        </div>
        
        <!-- Copyright -->
        <div class="copyright">
            
            <div class="row">
                <div class="mobile-6 i">Copyright &copy; 2014 - All Rights Reserved  <a href="/" title="Kara.Guru">Kara.Guru</a></div>
                
            </div>
            
        </div>
    </footer>


  
@endsection
    
    
    
