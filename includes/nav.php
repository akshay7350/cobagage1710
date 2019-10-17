 <!--============ Secondary Navigation ===============================================================-->
                <div class="secondary-navigation">
                    <div class="container">
                        <ul class="left">
                            <li>
                            <span>
                                <i class="fa fa-phone"></i> +1 123 456 789
                            </span>
                            </li>
                        </ul>
                        <!--end left-->
                        <ul class="right">
                             <?php if(isset($_SESSION['main_session'])){?>
                            <li>
                                <a href="my-ads.php">
                                    <i class="fa fa-heart"></i>My Ads
                                </a>
                            </li>
                            <li>
                               <?php } else {?>
                                 <li style="display: none;">
                                <a href="my-ads.php">
                                    <i class="fa fa-heart"></i>My Ads
                                </a>
                            </li>
                        <?php } ?>

                                <?php
                                 
                                 if(isset($_SESSION['main_session']))
                                {
                                   echo '<a href="my_profile.php">
                                    <i class="fa fa-sign-in"></i>'.$_SESSION['main_session'].'
                                </a>'; 
                                }
                                else{
                                    echo '<a href="sign-in.php">
                                    <i class="fa fa-sign-in"></i>Sign In
                                </a>';
                                }
                                ?>
                                
                            </li>
                             <?php if(!isset($_SESSION['main_session'])){?>
                            <li>
                               
                                <a href="register.php">
                                    <i class="fa fa-pencil-square-o"></i>Register
                                </a>
                                
                            
                            </li>
                            <?php } 
                            else{
                            ?>
                            <li style="display:none">
                               
                                <a href="register.php">
                                    <i class="fa fa-pencil-square-o"></i>Register
                                </a>
                                
                            
                            </li>
                            <?php }?>

                             <?php if(isset($_SESSION['main_session'])){?>
                            <li>
                                <a href="logout.php">
                                    <i class="fa fa-pencil-square-o"></i>logout
                                </a>
                            </li>
                        <?php } else{?>
                            <li style="display: none;">
                                <a href="logout.php">
                                    <i class="fa fa-pencil-square-o"></i>logout
                                </a>
                            </li>
                        <?php } ?>
                        </ul>
                        <!--end right-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Secondary Navigation ===========================================================-->
                <!--============ Main Navigation ====================================================================-->
                <div class="main-navigation">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <!--Main navigation list-->
<!--                                 <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Home</a>
                                       
                                    </li>
                                    
                                    
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <?php if(isset($_SESSION['main_session'])) {?>
                                        <a href="submit_ad.php" class="btn btn-primary text-caps btn-rounded btn-framed">Submit Ad</a>
                                    <?php } else{ ?>
                                        <a href="sign-in.php" title="Please Login To Post Ads" class="btn btn-primary text-caps btn-rounded btn-framed">Submit Ad</a>
                                   <?php } ?>
                                    </li>
                                   <li class="nav-item">
                                        <?php if(isset($_SESSION['main_session'])) {?>
                                        <a href="donation.php" class="btn btn-primary text-caps btn-rounded">Donation</a>
                                        <?php } else{ ?>
                                        <a href="sign-in.php" title="Please Login To Donation" class="btn btn-primary text-caps btn-rounded">Donation</a>
                                        <?php } ?>
                                    </li>
                                </ul> -->
                                 <ul class="navbar-nav">
                                    <li class="nav-item active ">
                                        <a class="nav-link" href="index.php">Home</a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="articles.php">Articles</a>
                                        
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="cobagage.php">Cobagaging</a>
                                        
                                    </li>
                                    
                                     <li class="nav-item">
                                        <a href="donation_ads.php" class="nav-link">Donation</a>
                                    </li>

                                     <li class="nav-item">
                                        <?php if(isset($_SESSION['main_session'])) {?>
                                        <a href="submit_ad.php" class="nav-link">Submit Ad</a>
                                    <?php } else{ ?>
                                        <a href="sign-in.php" title="Please Login To Post Ads" class="nav-link">Submit Ad</a>
                                   <?php } ?>
                                    </li>

                                   
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                   
                                </ul>
                                <!--Main navigation list-->
                            </div>
                            <!--end navbar-collapse-->
                            <a href="#collapseMainSearchForm" class="main-search-form-toggle" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseMainSearchForm">
                                <i class="fa fa-search"></i>
                                <i class="fa fa-close"></i>
                            </a>
                            <!--end main-search-form-toggle-->
                        </nav>
                        <!--end navbar-->
                        <ol class="breadcrumb">
                            <!--<li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active">Data</li>-->
                        </ol>
                        <!--end breadcrumb-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Main Navigation ===========================================================