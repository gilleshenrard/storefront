		<section id="experience">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<h2 class="section-heading text-light">What I've done so far</h2>
						<hr class="light">
        				<ul class="timeline">
        					<?php foreach ($experiences as $company => $info){
        					    if ($inverted)
        					       echo "<li class='timeline-inverted  sr-panel-left'>";
        					    else
        					        echo "<li class='sr-panel-right'>";
        					    
        					    include 'views/timeline-panel.php';
        					    
        					    echo "</li>";
        					    $inverted = !$inverted;
                            }?>
        				</ul>
        			</div>
				</div>
			</div>
		</section>