        						<!--div class="timeline-badge" style="background: url('views/img/logo/<?php echo $company;?>.png') no-repeat #fff center center; background-size: contain">
        						</div-->
								<div class="timeline-image bg-light">
    								<img class="rounded-circle img-fluid" src="views/img/logo/<?php echo $company;?>.png" alt="">
    							</div>
        						<div class="timeline-panel">
        							<div class="timeline-heading text-light">
        								<h4 class="timeline-title"><?php echo $info['job'];?></h4>
        								<h5><strong><?php echo $info['company'];?></strong><?php if (isset($info['contractor'])) echo " - ".$info['contractor'];?></h5>
        								<p>
        									<small><i class="fa fa-calendar-o"></i>
        										<?php echo $info['period'];?></small>
        									<br/>
        									<small><i class="fa fa-map-o"></i>
        										<?php echo $info['location'];?></small>
        									<br/>
        									<small><i class="fa fa-comments-o"></i>
        										<?php foreach ($info['languages'] as $lang){
        										    echo $lang."  ";
        										}?></small>
        								</p>
        							</div>
        							<div class="timeline-body text-light text-center">
        								<?php if (isset($info['responsibilities']) or isset($info['technologies']) or isset($info['description'])){
        								    echo "<i class='fa fa-2x fa-plus-circle text-light sr-icons' id='btn-".$company."' data-toggle='collapse' data-target='#".$company."'></i>
                                                  <div class='collapse' id='".$company."'>";
        								    
        								    if (isset($info['description'])){
        								        echo "<p>".$info['description']."</p>";
        								    }
        								    
        								    if (isset($info['responsibilities'])){
        								        echo "<hr class='primary'>";
        								        echo "<p>Responsibilities</p>";
        										echo "<ul>";
        										foreach ($info['responsibilities'] as $resp){
        										    echo "<li><small>".$resp."</small></li>";
        										}
        								        echo "</ul>";
        								    }
        								    
        								    if (isset($info['technologies'])){
        								        echo "<hr class='light'>";
        								        echo "<p>Technologies used</p>";
        								        echo "<ul>";
        								        foreach ($info['technologies'] as $tech){
        								            echo "<li><small>".$tech."</small></li>";
        								        }
        								        echo "</ul>";
        								    }
        								    echo "</div>";
        								}?>
        							</div>
        						</div>