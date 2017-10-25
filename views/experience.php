		<section id="experience">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<h2 class="section-heading text-light">What I've done so far</h2>
						<hr class="light">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
        				<ul class="timeline">
        					<?php foreach ($experiences as $company => $info){
        					    if ($inverted)
        					       echo "<li class='timeline-inverted'>";
        					    else
        					        echo "<li>";
        					    
        					    include 'views/timeline-panel.php';
        					    
        					    echo "</li>";
        					    $inverted = !$inverted;
                            }?>
    						<li class="timeline-inverted">
    							<div class="timeline-image bg-light">
    								<h4 class="text-primary">
    									Be Part <br>Of Our <br>Story!
    								</h4>
    							</div>
    						</li>
        				</ul>
        			</div>
				</div>
			</div>
		</section>