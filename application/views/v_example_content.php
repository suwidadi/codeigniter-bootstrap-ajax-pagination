<?php 
/**
 * Index Content Page
 *
 * Page which load Content and Pagination for Ajax Pagination
 *
 * @package		codeigniter-bootstrap-ajax-pagination
 * @author		Suwi D. Utomo
 * @copyright	Copyright (c) 2016, Brainsofmedia.com.
 * @license		MIT License
 * @link		http://www.brainsoftmedia.com
 * @since		Version 1.0
 *
 */
?>
<div class="panel-heading">
                                LIST STUDENTS
                            </div>
							<div id="idRecords-book" class="panel-body">
								<div class="table-responsive">
	                            		<table class="table table-bordered table-hover table-striped">
	                            			<thead>
	                            				<tr>
	                            					<th>No</th>
	                            					<th>Name</th>
	                            					<th>Address</th>
	                            					<th>Marital Status</th>
	                            				</tr>
	                            			</thead>
	                            			<tbody>
												<?php 
											for($i=0;$i<count($records);$i++){
												$a = $i+1;
											?>
											<tr>
                            					<td>
													<?php echo $a?>
												</td>
												<td>
													<?php echo $records[$i]->name?>
												</td>
												<td>
													<?php echo $records[$i]->address?>
												</td>
												<td>
													<?php echo $records[$i]->email?>
												</td>
											</tr>
											<?php 
											}
											?>
										</tbody>
									</table>
								</div>
								<div id="pagination-book" class="panel-footer">
							<?php 
							echo $pagination;
							?>
						</div>
