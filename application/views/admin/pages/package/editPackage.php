



    
    <!-- sidebar -->

        <!-- header -->
       
        <div class="content-header">
            <div>
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item"><a href="#">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Service</li>
                    </ol>
                </nav> -->
                <!-- <h4 class="content-title content-title-sm">Create Service</h4> -->
            </div>
        </div>
        <!-- content-header -->
        <div class=" content-card-body pd-b-15">
        <div class="card card-hover card-projects  card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >
   
				<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Update Package</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
								<div class="card-body">
                        <!-- <h5 id="section1 " class="tx-semibold ">Input Box</h5>
                        <p class="mg-b-25 ">A basic form control with disabled and readonly mode.</p> -->
					<form  class="all-form" action="<?php echo base_url();?>index.php/AdminPackage/updateItem" enctype="multipart/form-data" method="post">
					<?php foreach($items as $item){?>

						<input type="hidden" name="package_id" value="<?php echo $item->package_id?>">
					<div class="row row-sm">
							<div class="col-sm-4 mg-t-30">
                                <input type="text" value = "<?php echo $item->date?>"class="borderRa form-control  py-2 service-input-box" id="datepicker" placeholder="Date" name="date" style="border-radius:8px;width:34rem;"">
                            </div>
                            <div class="col-sm-5 ml-auto mg-t-30  rounded " style="margin-right: 110px; ">
								<input type="text" value = "<?php echo $item->created_by?>" name="created_by" class=" borderRa form-control  py-2 service-input-box" placeholder="Created By " style="border-radius:8px;width:35.5rem;">
                            </div>
                            <div class="col-sm-4 mg-t-30 ">
                                <input type="text" value = "<?php echo $item->name?>" name="name" class="borderRa form-control  py-2 service-input-box" placeholder="name " style="border-radius:8px;width:34rem;">
                            </div>
                            <div class="col-sm-5 ml-auto mg-t-30  rounded wd-md-50p" style="margin-right: 110px;border-radius:8px ">
							<select class="form-control borderRa  service-input-box"  name="category" style="width:35.5rem;">
								<option value="" class="text-light">--Choose Team--</option>
								<?php foreach($item3 as $item5){?>
									<option <?php if(($item5->team_id) ==( $item->team)){ echo "selected ";} ?>value="<?php echo $item5->team_id?>" class="text-dark"><?php echo $item5->name?></option>
								<?php	}?>
							</select>
                            </div>

							<div class=" col-sm-12 mg-t-30">
                                <div class="control-group" id="fields">
                                    <div class="controls1">

									<?php 
										if(empty($fileds)){?>

							<div class=" col-sm-10 mg-t-30" >
                                <div class="control-group" id="fields">
                                    <div class="controls1">
                                        <div class="entry1 input-group upload-input-group">
                                            <input class="form-control  borderRa py-2 service-input-box" name="fields[]" type="text"
                                                style="border-radius:10px;margin-right:10px;width:34rem;">
                                            <button class="btn btn-upload btn-all btn-add1 mt-1" type="button"
                                                style="margin-right: -90px;">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
										<?php } else { ?>


								<?php	foreach($fileds as $key => $value){	?>
                                      
											
											<input class="form-control  borderRa py-2 service-input-box" name="fields[]" type="text" value="<?php echo $value?>">
											<br/>

																					

										<?php }?>
										<div class="entry1 input-group upload-input-group">
                                            <input class="form-control  borderRa py-2 service-input-box" name="fields[]" type="text"
                                                style="border-radius:10px;margin-right: 20px;width:34rem;">
                                            <button class="btn btn-upload btn-all btn-add1 mt-0" type="button"
                                                style="margin-left: -10px;">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
									
								<?php	}?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mg-t-30" style="padding-right: 10px; ">
                                <textarea class="form-control  borderRa py-2 service-input-box" rows="4" placeholder="Description " name="description" style="border-radius:8px"><?php echo $item->description?></textarea>
                            </div>
							
                            <div class="col-sm-4 mg-t-30 " style="padding-right: 10px;border-radius:8px ">
								<select class="form-control  borderRa service-input-box"  name="currency">
								<option value="<?php echo $item->currency?>" class="text-dark"><?php if(($item->currency )== 1){ echo "LKR";}else{ echo "USD";} ?></option>
									<?php 
									if(($item->currency) == 1){?>
										<option value="2" >USD</option>	
									<?php } else { ?>
										<option value="1">LKR</option>
									<?php } ?>
								</select>  
                            </div>

							

							<div class="col-sm-4 mg-t-30 ml-auto" style="padding-right: 10px; ">
								<input type="text " value = "<?php echo $item->price?>" class=" borderRa form-control  py-2 service-input-box" style="padding-right: 120px;border-radius:8px " placeholder="Price" name="price">
                            </div>
							
							<div class="col-sm-4 mg-t-30 " style="padding-right: 10px;border-radius:8px ">
								<select class="form-control  borderRa service-input-box"  name="duration">
								<option value="<?php echo $item->currency?>" class="text-dark"><?php if(($item->currency )== 1){ echo "Annually";}else{ echo "Monthly";} ?></option>
									<?php 
									if(($item->pduration) == 1){?>
										<option value="2" >Monthly</option>	
									<?php } else { ?>
										<option value="1">Annually</option>
									<?php } ?>	
								</select>  
                            </div>
							<!-- <div class="col-md-12 mg-t-30 rounded mb-5">
								<div class="custom-file">
									<input type="file" class="custom-file-input " id="customFile" name="img" required>
									<label class="custom-file-label" for="customFile" style="border-radius:8px ">Choose file</label>
								</div>
                            </div> -->

                            <div class="all-btns" > 
                                <button type="submit" class="btn btn-all btn-submit btn-dark btn-new mt-5" style="item-align:center">Update</button>
                                <a href="<?php echo base_url();?>index.php/AdminPackage/allPackages"><button type="button" class="btn btn-all  btn-submit btn-all btn-dark btn-new mt-5 mx-2 px-5" >Back</button></a>
                            </div>
							
							
                        </div>
                        <!-- row -->
                    </div>
                </div>
								</div>
								<?php } ?>
				</form>
								
            </div>



            <!-- component-section -->
            <!-- row -->
        </div>
                                    </div>
        <!-- content-body -->
  
    <!-- content -->

    
<!-- <script src="<?php echo base_url();?>/lib/jquery/jquery.min.js "></script>
<script src="<?php echo base_url();?>/lib/bootstrap/js/bootstrap.bundle.min.js "></script>
<script src="<?php echo base_url();?>/lib/feather-icons/feather.min.js "></script>
<script src="<?php echo base_url();?>/lib/perfect-scrollbar/perfect-scrollbar.min.js "></script>
<script src="<?php echo base_url();?>/lib/js-cookie/js.cookie.js "></script>

<script src="<?php echo base_url();?>/assets/js/cassie.js "></script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(function() {

            'use strict'

        })
    </script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
 <script>
      $(function(){
        'use strict'

        // File Browser
      

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

      });
    </script>
</body>

</html> -->
