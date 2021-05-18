<div class="panel panel-default">
					<div class="panel panel-heading" style="background-color:#284761; color:#fff;">
						 <span class="glyphicon glyphicon-envelope"></span>&nbsp;Category
					</div>
							<div class="panel panel-body" style="background-color:rgba(128, 128, 128, 0.08); margin-left:10px;margin-right:10px;">
								<div class="container-fluid">
										<div class="row">
										<!-------post----->
											 <?php
			   
			   include('db.php');
			   $r1="select * from add_category ";

			$select1=$db->query($r1);
				

				while($rows=mysqli_fetch_array($select1)){
				
									
									//echo $rows['0'];
									$sel_topic="select category_id from topic where category_id='".$rows['0']."'  ";
																			
									$sel_T=$db->query($sel_topic);
																
																			
									$count_t=mysqli_num_rows($sel_T);
									//post
									
									
									$sel_topic1="select post_id from post where category_id='".$rows['0']."'  ";
																			
									$sel_T1=$db->query($sel_topic1);
																
											$rowsss=mysqli_num_rows($sel_topic1);
									$count_ter=mysqli_num_rows($sel_T1);
																						
									
								
									$sel_photo="select * from admin";
																			
									$sel_T11=$db->query($sel_photo);
																	
										$rows_p1=mysqli_fetch_array($sel_T11);		
												
									
													//	echo $rows_p1['photo'];		
																
													if(!empty($rows_p1['photo']))
													{
													$photo="<img src='../forum/admin/".$rows_p1['photo']."'  style='margin-top:3%;' class='img-circle' alt='Cinque Terre' width='80px' height='80px'>							"	;
													}else{
													
													$photo="<img src='dummy.jpg'  style='margin-top:5%;' class='img-circle' alt='Cinque Terre' width='80px' height='80px'>								";
													}
									
																							
																		
									
				echo  "  <div class='col-md-12'>
												
												<div class='panel panel-default' style=' margin-top:20px; margin-bottom:0px;'>	
														<div class='row'>
														<div class='col-md-4'>
																
																<h4 class='text-primary' style='margin-left:10px; margin-top:30px;'>
																	<a href='topic.php?Topic_id=".$rows['0']."' style='text-decoration:none;'><span class='glyphicon glyphicon-arrow-right'></span>
																	".ucfirst($rows['1'])."
																	</a>
																</h4>
											
																
											
															</div>
														<div class='col-md-2'>
																
															</div>
															<div class='col-md-3'>
																<ul style='margin-top:20px;list-style:none;'>
																	<li>
																		<strong>
																		".$count_t."	
																		</strong>Topic
																	</li>
																	
																	<li>
																		<strong>
																			".$count_ter."
																		</strong>post
																	</li>
																</ul>
															</div>
															<div class='col-md-3'>
													
													".$photo."
																									</div>
														</div>
												</div>
											</div>";
											?>
			
	
				<?php	
					
					}

			   ?>
										</div>							
								</div>
				</div>		
						
										<!---end of col md-->
												
										<!-----end of row----->
										
										
									<!----end- of container------------>
									
							<!---------end of wref------------->
								
						<!-------end of paenl body--------->
					
						
				<!----------	---->
						
					<!---end of panel---->	
	</div>