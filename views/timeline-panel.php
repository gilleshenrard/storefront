        						<div class="timeline-badge" style="background: url('views/img/logo/<?php echo $company;?>.png') no-repeat #fff center center; background-size: contain">
        						</div>
        						<div class="timeline-panel">
        							<div class="timeline-heading">
        								<h4 class="timeline-title"><?php echo $info['job'];?></h4>
        								<h5><strong><?php echo $info['company'];?></strong><?php if (isset($info['contractor'])) echo " - ".$info['contractor'];?></h5>
        								<p>
        									<small class="text-muted"><i class="fa fa-calendar-o"></i>
        										<?php echo $info['period'];?></small>
        									<br/>
        									<small class="text-muted"><i class="fa fa-compass"></i>
        										<?php echo $info['location'];?></small>
        								</p>
        							</div>
        							<div class="timeline-body">
        								<?php if (isset($info['responsibilities']) or isset($info['technologies']) or isset($info['description'])){
        								    echo "<i class='fa fa-2x fa-plus-circle text-primary sr-icons' id='btn-".$company."' data-toggle='collapse' data-target='#".$company."'></i>
                                                  <div class='collapse' id='".$company."'>";
        								    
        								    if (isset($info['description'])){
        								        echo "<p>".$info['description']."</p>";
        								    }
        								    
        								    if (isset($info['responsibilities'])){
        								        echo "<p>Responsibilities :<br/>".$info['responsibilities']."</p>";
        								    }
        								    
        								    if (isset($info['technologies'])){
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