<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage NEXUS_Clinical
 * @since NEXUS Clinical 1.0
 */
get_header();
?>

<!------- SLIDER -------->
<section class="slider clearfix">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/slider1.png" class="d-block w-100" alt="Slider">
                <div class="carousel-caption d-none d-md-block row text-start">
                    <div class="col-sm-8">
                        <h2 class="mb-3">Set yourself free from daily burn-out. Focus on Patient Care & Increase your Revenue</h2>
                        <h4 class="mb-3 mt-4">A Unified Solution for all your Clinical & Billing needs.</h4>
                        <h5 class="mt-4">Easy & Quick documentation l Focused Patient Care <br> Improved Patient Turnout l Better Revenue Cycle.</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/slider2.png" class="d-block w-100" alt="Slider">
                <div class="carousel-caption d-none d-md-block row text-start">
                    <div class="col-sm-7 offset-5">
                        <h2 class="mb-3">Set yourself free from daily burn-out. Focus on Patient Care & Increase your Revenue</h2>
                        <h4 class="mb-3 mt-4">A Unified Solution for all your Clinical & Billing needs.</h4>
                        <h5 class="mt-4">Easy & Quick documentation l Focused Patient Care <br> Improved Patient Turnout l Better Revenue Cycle.</h5>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!------- CONTACT -------->
<section class="mt-5 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-md-3 col-6"><img src="<?php echo get_template_directory_uri()?>/assets/images/onc_certified.png" class="img-fluid" alt="ONC Certified Hit"></div>
                    <div class="col-md-3 col-6"><img src="<?php echo get_template_directory_uri()?>/assets/images/dr_certified.png" class="img-fluid" alt="Drummond Certified"></div>
                </div>
                <h5 class="title">Talk to one of our experts to understand how to:</h5>
                <ul class="list-unstyled contact_icons mt-3">
                    <li><img src="<?php echo get_template_directory_uri()?>/assets/images/contact_icon_1.png" alt="Use templates for easy charting" class="me-2">Enhance overall workflow</li>
                    <li><img src="<?php echo get_template_directory_uri()?>/assets/images/contact_icon_2.png" alt="Use templates for easy charting" class="me-2">Use templates for easy charting</li>
                    <li><img src="<?php echo get_template_directory_uri()?>/assets/images/contact_icon_3.png" alt="Enhance patient experience via patient portal" class="me-2">Enhance patient experience via patient portal</li>
                    <li><img src="<?php echo get_template_directory_uri()?>/assets/images/contact_icon_4.png" alt="Manage billing with integrated Clearing house" class="me-2 ms-2">Manage billing with integrated Clearing house</li>
                </ul>
            </div>
            <div class="col-sm-5 watch_a_demo">
                <div class="text-center mb-3">
                    <h2>Watch a Demo</h2>
                    <p>Nexus Clinical is built for US-based medical practices.</p>
                </div>
                <form method="post">
                    <div class="mb-3">
                        <label>First Name<span class="asterisk">*</span></label>
                        <input type="text" name="firstname" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Last Name<span class="asterisk">*</span></label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Email<span class="asterisk">*</span></label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Business Phone<span class="asterisk">*</span></label>
                        <input type="text" name="business_phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Job Role<span class="asterisk">*</span></label>
                        <select name="job_role" class="form-control">
                            <option value="">-Please Select-</option>
                            <option value="1">Role 1</option>
                            <option value="2">Role 2</option>
                        </select>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!------- CLINICAL WORKFLOW -------->
<section class=" clearfix">

</section>

<!------- TESTIMONIAL -------->
<section class=" clearfix">
    <div></div>
</section>

<!------- FEATURED -------->
<section class="featured mt-5 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row mb-3">
                    <div class="col-2"><img src="<?php echo get_template_directory_uri()?>/assets/images/feature_1.png" class="img-fluid" alt="Practice Management"></div>
                    <div class="col-9"><b>Practice Management</b><br>
                        Simple scheduling, Easy workflows,Claim processing and AR management.</div>
                </div>
                <div class="row mb-3">
                    <div class="col-2"><img src="<?php echo get_template_directory_uri()?>/assets/images/feature_2.png" class="img-fluid" alt="Patient Portal & Self-Services"></div>
                    <div class="col-9"><b>Patient Portal & Self-Services</b><br>
                        Interactive Patient Kiosk. Stay connected.Minimize staff workload.</div>
                </div>
                <div class="row mb-3">
                    <div class="col-2"><img src="<?php echo get_template_directory_uri()?>/assets/images/feature_3.png" class="img-fluid" alt="Extensive Document Management"></div>
                    <div class="col-9"><b>Extensive Document Management</b><br>
                        Customize office & clinical forms. Import, scan and store documents on Nexus cloud.</div>
                </div>
                <div class="row mb-3">
                    <div class="col-2"><img src="<?php echo get_template_directory_uri()?>/assets/images/feature_4.png" class="img-fluid" alt="Excellent Support"></div>
                    <div class="col-9"><b>Excellent Support</b><br>
                        Customize office & clinical forms. Import, scan and store documents on Nexus cloud.</div>
                </div>                        
            </div>
            <div class="col-sm-6">
                <div class="row mb-3">
                    <div class="col-2"><img src="<?php echo get_template_directory_uri()?>/assets/images/feature_5.png" class="img-fluid" alt="Telemedicine"></div>
                    <div class="col-9"><b>Telemedicine</b><br>
                        Simple eVisit interface, seamless integration with scheduling and appointment reminders.</div>
                </div>
                <div class="row mb-3">
                    <div class="col-2"><img src="<?php echo get_template_directory_uri()?>/assets/images/feature_6.png" class="img-fluid" alt="eFax"></div>
                    <div class="col-9"><b>eFax</b><br>
                        Get your faxes in your EHR with our eFax module</div>
                </div>
                <div class="row mb-3">
                    <div class="col-2"><img src="<?php echo get_template_directory_uri()?>/assets/images/feature_7.png" class="img-fluid" alt="Direct Messaging"></div>
                    <div class="col-9"><b>Direct Messaging</b><br>
                        Connect with healthcare network to send/receive referrals and secure data transfer</div>
                </div>
                <div class="row mb-3">
                    <div class="col-2"><img src="<?php echo get_template_directory_uri()?>/assets/images/feature_8.png" class="img-fluid" alt="Rapid Charting"></div>
                    <div class="col-9"><b>Rapid Charting</b><br>
                        Complete patient visit documentation in minutes.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!------- IMPROVE YOUR PRACTICE -------->
<section class="improve_your_practice p-5 clearfix">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <h3>Improve your practice</h3>
                <h5>It only takes few clicks to help your practice be more efficient and grow</h5>
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
