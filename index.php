<?php
    include('includes/header.php');
?>

<div class="container-fluid mt-0" id="main-page">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 pl-0 pr-0" id="particles-js">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="home-slider-content">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <h1>Welcome to </h1><h1><span class="theme-color-text3">E</span> Visas Dubai Service Portal</h1>
                        </div>
                        <div class="col-12 col-md-12 mt-3">
                            <h4>Get your visa approved in <span class="theme-color-text3">3 easy steps.</span></h4>
                        </div>
                        <div class="col-12 col-md-12 mt-3">
                            <div class="row three-steps">
                                <div class="col-12 col-md-4 step-col">
                                    <div class="step-area">
                                        <p class="pt-3">Step 1</p>
                                        <p>Fill the Form</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 step-col">
                                    <div class="step-area">
                                        <p class="pt-3">Step 2</p>
                                        <p>Make the Payment</p>
                                    </div>    
                                </div>
                                <div class="col-12 col-md-4 step-col">
                                    <div class="step-area">    
                                        <p class="pt-3">Step 3</p>
                                        <p>Receive your Visa</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mt-3">
                            <a href="#" class="btn theme-btn">Get Visa Now</a>
                        </div>
                    </div>
                    
                </div>
                <video
                        id="my-video"
                        class="video-js"
                        preload="auto"
                        width="auto"
                        autoplay
                        loop
                        height="auto"
                        played
                        data-setup="{}"
                        loop
                        muted
                    >
                    <source src="assets/videos/slider-video.mp4" type="video/mp4" />
                    <source src="assets/videos/slider-video.mp4" type="video/webm" />
                    <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    </p>
                </video>

        </div>
    </div>
</div>

<div class="container mt-0" id="main-page">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 mt-4">
            <h1 class="main-title">Choose Your Visa</h1>
            <p class="main-paragraph">All visas are valid across the United Arab Emirates and can be used for all modes of transport.</p>
        </div>
        <div class="col-12 col-md-12 mt-4">
            <div class="row justify-content-center">
                <ul class="nav nav-pills mb-3 col-12 col-md-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Transit Visa</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Visit Visa</button>
                    </li>
                </ul>
                <div class="col-12 col-md-12 tab-content mt-3" id="pills-tabContent">
                    <div class="tab-pane fade w-100 show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="row justify-content-center">
                            
                            <div class="col-12 col-sm-6 col-md-4 pl-4 pr-4">                               
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12 pt-3  item-list">
                                        <div class="row">
                                            <div class="col-12 col-md-12 text-center">
                                                <h3>48 Hours</h3>
                                                <p>Single Visit Entry</p>
                                            </div>
                                            <!-- <div class="col-12 col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                    <div class="checkmark">
                                                        <p class="No name">Reguler</p>
                                                        <p class="Yes name">Express</p>
                                                    </div>
                                                </label>
                                            </div> -->
                                            <div class="col-12 col-md-12 text-center">
                                                <h1 class="item-amount">$10</h1>
                                            </div>
                                            <div class="col-12 col-md-12 item-lists mt-3">
                                                <table>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Service Type</p>
                                                            <p class="item-lists-sub">Visa-Single Entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Processing Time</p>
                                                            <p class="item-lists-sub">3 Business Days</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Validity</p>
                                                            <p class="item-lists-sub">60 days from date of issue</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Stay Period</p>
                                                            <p class="item-lists-sub">14 Days from date of entry to UAE.</p>
                                                        </td>
                                                    </tr>
                                                </table>                                                
                                            </div>
                                            <div class="col-12 col-md-12 mt-3 text-center">
                                                <a href="#" class="btn theme-btn">Get Visa Now</a>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>                              
                            </div>
                            
                            
                            <div class="col-12 col-sm-6 col-md-4 pl-4 pr-4">                               
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12 pt-3  item-list">
                                        <div class="row">
                                            <div class="col-12 col-md-12 text-center">
                                                <h3>48 Hours</h3>
                                                <p>Single Visit Entry</p>
                                            </div>
                                            <!-- <div class="col-12 col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                    <div class="checkmark">
                                                        <p class="No name">Reguler</p>
                                                        <p class="Yes name">Express</p>
                                                    </div>
                                                </label>
                                            </div> -->
                                            <div class="col-12 col-md-12 text-center">
                                                <h1 class="item-amount">$10</h1>
                                            </div>
                                            <div class="col-12 col-md-12 item-lists mt-3">
                                                <table>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Service Type</p>
                                                            <p class="item-lists-sub">Visa-Single Entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Processing Time</p>
                                                            <p class="item-lists-sub">3 Business Days</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Validity</p>
                                                            <p class="item-lists-sub">60 days from date of issue</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Stay Period</p>
                                                            <p class="item-lists-sub">14 Days from date of entry to UAE.</p>
                                                        </td>
                                                    </tr>
                                                </table>                                                
                                            </div>
                                            <div class="col-12 col-md-12 mt-3 text-center">
                                                <a href="#" class="btn theme-btn">Get Visa Now</a>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>                              
                            </div>
                            
                            
                            <div class="col-12 col-sm-6 col-md-4 pl-4 pr-4">                               
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12 pt-3  item-list">
                                        <div class="row">
                                            <div class="col-12 col-md-12 text-center">
                                                <h3>48 Hours</h3>
                                                <p>Single Visit Entry</p>
                                            </div>
                                            <!-- <div class="col-12 col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                    <div class="checkmark">
                                                        <p class="No name">Reguler</p>
                                                        <p class="Yes name">Express</p>
                                                    </div>
                                                </label>
                                            </div> -->
                                            <div class="col-12 col-md-12 text-center">
                                                <h1 class="item-amount">$10</h1>
                                            </div>
                                            <div class="col-12 col-md-12 item-lists mt-3">
                                                <table>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Service Type</p>
                                                            <p class="item-lists-sub">Visa-Single Entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Processing Time</p>
                                                            <p class="item-lists-sub">3 Business Days</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Validity</p>
                                                            <p class="item-lists-sub">60 days from date of issue</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="assets/images/check-icon-new.png" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Stay Period</p>
                                                            <p class="item-lists-sub">14 Days from date of entry to UAE.</p>
                                                        </td>
                                                    </tr>
                                                </table>                                                
                                            </div>
                                            <div class="col-12 col-md-12 mt-3 text-center">
                                                <a href="#" class="btn theme-btn">Get Visa Now</a>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>                              
                            </div>
                            <div class="col-12 col-sm-6 col-md-4"></div>
                            <div class="col-12 col-sm-6 col-md-4"></div> 

                        </div>
                    </div>
                    <div class="tab-pane fade w-100" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        
                    </div>
                </div>
            </div>
            
            
        </div>
        <div class="col-12 col-md-12 mt-4">
            
        </div>
        <div class="col-12 col-md-12 mt-4 mb-4">
            <div class="home-demo partners-list">
                <div class="row">
                    <div class="large-12 columns">                  
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="assets/images/partners/damrologo.png" alt="" class="img-fluid"/>
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/panasoniclogo.png" alt="" class="img-fluid"/>
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/samsunglogo.png" alt="" class="img-fluid"/>
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/hisenselogo.png" alt="" class="img-fluid"/>   
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/preethilogo.png" alt="" class="img-fluid"/> 
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/jacklogo.png" alt="" class="img-fluid"/>
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/innovex-logo-min.png" alt="" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
<?php
    include('includes/footer.php');
?>   