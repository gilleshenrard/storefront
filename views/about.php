		<section class="bg-primary" id="about">
            <div id="about-slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#about-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#about-slider" data-slide-to="1"></li>
                    <li data-target="#about-slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner bg-light" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" id="car-item-about">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h2 class="section-heading">About me</h2>
                                    <hr />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <p class="text-dark">Easy going and adaptative, I easily find interest in new projects and challenges.
                                        My most valuable moments are when I have the chance to let my mind wander around tips and tricks to create something the most elegant way possible.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" id="car-item-interests">
                        <?php include 'controllers/interests.php';?>
                    </div>

                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" id="car-item-location">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#about-slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#about-slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
		</section>