<?php 
/**
 * Example Index Page
 *
 * Default Index Page for Example
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
<!doctype html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<title>Codeigniter Bootstrap Ajax Pagination</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/example.css" />
	</head>
	<body>
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="panel panel-primary" id="postList-book">
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
						</div>
						<div id="pagination-book" class="panel-footer">
							<?php 
							echo $pagination;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" crossorigin="anonymous"></script>
		<script src="<?php echo base_url()?>assets/script/example.js" type="text/javascript"></script>
		<script>
			Example.init();
		</script>
	</body>
</html>

					
						