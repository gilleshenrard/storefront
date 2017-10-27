								<div class="portfolio-item timeline-image bg-light"
								     style="background: url('views/img/logo/<?php echo $company;?>.png') no-repeat #fff center center; background-size: contain">
									<a class="portfolio-link" data-toggle="modal" href="#modal<?php echo $company?>">
										<div class="portfolio-hover">
											<div class="portfolio-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
									</a>
								</div>
        						<div class="timeline-panel">
        							<div class="timeline-heading text-light">
        								<h4 class="timeline-title"><strong><?php echo $info['company'];?></strong><?php if (isset($info['contractor'])) echo " - ".$info['contractor'];?></h4>
								        <h5><i><?php echo $info['job'];?></i></h5>
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
						        </div>

								<div class="portfolio-modal modal fade" id="modal<?php echo $company?>" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="close-modal" data-dismiss="modal">
												<div class="lr">
													<div class="rl"></div>
												</div>
											</div>
											<div class="container">
												<div class="row">
													<div class="col-lg-8 mx-auto">
														<div class="modal-body">
															<h4 class="timeline-title"><strong><?php echo $info['company'];?></strong><?php if (isset($info['contractor'])) echo " - ".$info['contractor'];?></h4>
															<h5><i><?php echo $info['job'];?></i></h5>
															<p class="text-muted">
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
                                                            <?php if (isset($info['responsibilities']) or isset($info['technologies']) or isset($info['description'])){

                                                                if (isset($info['description'])){
                                                                    echo "<p>".$info['description']."</p>";
                                                                }

                                                                if (isset($info['responsibilities'])){
                                                                    echo "<hr class='primary'>";
                                                                    echo "<p>Responsibilities</p>";
                                                                    echo "<ul class='list-none'>";
                                                                    foreach ($info['responsibilities'] as $resp){
                                                                        echo "<li><small>".$resp."</small></li>";
                                                                    }
                                                                    echo "</ul>";
                                                                }

                                                                if (isset($info['technologies'])){
                                                                    echo "<hr class='primary'>";
                                                                    echo "<p>Technologies used</p>";
                                                                    echo "<ul class='list-none'>";
                                                                    foreach ($info['technologies'] as $tech){
                                                                        echo "<li><small>".$tech."</small></li>";
                                                                    }
                                                                    echo "</ul>";
                                                                }
                                                            }?>
															<button class="btn btn-primary" data-dismiss="modal" type="button">
																<i class="fa fa-times"></i>
																Close Project
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>