<?php echo form_open('');?>
<div class="ui-middle-screen">
	<div class="content-workorder">
		<div class="div-p"></div>
		<div class="ui-main-form">
			<div class="ui-main-form-header">
				<table align="center" height="40px" border="0">
					<tr>
						<td><span style="margin-left:10px;">New Release NOTE</span></td>
					</tr>
				</table>
			</div>
			<div class="n-req">Release Note number will be automatically generated by the system.</div>
			<div class="ui-main-form-5">
				<div class="middle_d">
					<table class="ui-content-form-reg">
						<tr style="color:white;" height="30px">
							<td colspan="2" class="ui-header-new"><b>Information</b></td>
						</tr>
						<tr >
							<td class="ui-desk-style-table">
								<div class="ui-main-form-1">
									<div class="middle_d">
										<table width="100%" class="ui-content-form-reg" style="">
											<tr >
												<td class="ui-desk-style-table">
													<table class="ui-content-form" width="100%" border="0">
														<tr>
															<td style="padding:10px;" valign="top" class="ui-w">Status  :</td>
														<?php if ($this->input->get('pro') == 'new' ){?>
														<td style="padding:10px;" valign="top">
															<?php 
																$Status_list = array(
																		  '0' => 'Submitted',
															
																	   );
																 ?>   
															<?php echo form_dropdown('n_Status_list', $Status_list ,'', 'class="dropdown n_wi-date2" style="display:inline-block; width:100px; height:30px;"'); ?>
															</td>
														<?php }elseif ($this->input->get('pro') == 'edit' ){?>
														<td style="padding:10px;" valign="top"> Send </td>
														<?php } ?>
														</tr>
														<tr>
															<td style="padding:10px;" valign="top">Release Note Type :   </td>
															<td style="padding:10px;" valign="top"> MRIN </td>
														</tr>
														<tr>
															<td style="padding-left:10px;" valign="top" colspan="2"><u>FROM</u>  </td>
														</tr>
														<tr>
															<td style="padding:10px;" valign="top">Contact Person :  </td>
															<td style="padding:10px;" valign="top"> nezam </td>
														</tr>
														<tr>
															<td style="padding:10px;" valign="top">Area  :  </td>
															<td style="padding:10px;" valign="top"> Head Office (HQ) </td>
														</tr>														
														<tr>
															<td style="padding-left:10px;" valign="top" colspan="2"><u>DELIVER TO</u>  </td>
														</tr>
														<tr>
															<td style="padding:10px;" valign="top">Contact Person :  </td>
															<td style="padding:10px;" valign="top"> nezam </td>
														</tr>
														<tr>
															<td style="padding:10px;" valign="top">Area  :  </td>
															<?php if ($this->input->get('pro') == 'new' ){?>
															<td style="padding:10px;" valign="top">
															
															<?php 
																$Area_list = array(
																		  '0' => 'IIUM',
															
																	   );
																 ?>   
															<?php echo form_dropdown('n_Area_list', $Area_list ,'', 'class="dropdown n_wi-date2" style="display:inline-block; width:100px; height:30px;"'); ?> </td>
															<?php }elseif ($this->input->get('pro') == 'edit' ){?>
															<td style="padding:10px;" valign="top"> IIUM </td>
															<?php } ?>
														</tr>														
													</table>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="ui-main-form-2">
									<div class="middle_d">
										<table class="ui-content-form-reg">
											<tr >
												<td class="ui-desk-style-table">
													<table class="ui-content-form" style="color:black;" width="100%" border="0">
														<tr>
															<td style="padding-left:10px;" valign="top" colspan="2"><u>SHIPPING INFO</u>  </td>
														</tr>
														<tr>
															<td style="padding:10px;" valign="top" class="ui-w">Shipment Type  :  </td>
															<?php if ($this->input->get('pro') == 'new' ){?>
															<td style="padding-left:10px;" valign="top"> 
															<?php 
																$Shipment_list = array(
																		  '0' => 'Courier',
																		  '1' => 'By hand',
															
																	   );
																 ?>   
															<?php echo form_dropdown('n_Shipment_list', $Shipment_list ,'', 'class="dropdown n_wi-date2" style="display:inline-block; width:100px; height:30px;"'); ?> </td>
															<?php }elseif ($this->input->get('pro') == 'edit' ){?>
															<td style="padding:10px;" valign="top"> Courier </td>
															<?php } ?>
															
														</tr>
														<tr>
															<td style="padding:10px;" valign="top">Courier Company  :  </td>
															<?php if ($this->input->get('pro') == 'new' ){?>
															<td style="padding-left:10px;" valign="top"> 
															<?php 
																$Courier_list = array(
																		  '0' => 'Other',
																		  '1' => 'ABX',
																		  '2' => 'CityLink',
																		  '3' => 'DHL',
															
																	   );
																 ?>   
															<?php echo form_dropdown('n_Courier_list', $Courier_list ,'', 'class="dropdown n_wi-date2" style="display:inline-block; width:100px; height:30px;"'); ?> </td>
															<?php }elseif ($this->input->get('pro') == 'edit' ){?>
															<td style="padding:10px;" valign="top"> Other </td>
															<?php } ?>
															
														</tr>
														<tr>
															<td style="padding:10px;" valign="top">Consignment Note :    </td>
															<?php if ($this->input->get('pro') == 'new' ){?>
															<td style="padding:10px;" valign="top"> <input type="text" name=""  value="" class="form-control-button2 n_wi-date2"></td>
															<?php }elseif ($this->input->get('pro') == 'edit' ){?>
															<td style="padding:10px;" valign="top"> N/A </td>
															<?php } ?>
														</tr>
														<tr>
															<td style="padding:10px;" valign="top">Consignment Date :    </td>
															<?php if ($this->input->get('pro') == 'new' ){?>
															<td style="padding:10px;" valign="top"> <input type="text" name=""  value="" id="date0" class="form-control-button2 n_wi-date2" readonly></td>
															<?php }elseif ($this->input->get('pro') == 'edit' ){?>
															<td style="padding:10px;" valign="top"> 	17/07/2012 </td>
															<?php } ?>
														</tr>
														<tr>
															<td style="padding-left:10px;" class="ui-w" valign="top">Accessories  :   </td>
															<td style="padding-left:10px;" ><textarea class="Input n_com2" name="n_summary"></textarea></td>
														</tr>														
													</table>
												</td>
											</tr>						
										</table>
									</div>
								</div>
							</td>
						</tr>						
					</table>
				</div>
				<div class="middle_d">
					<table class="ui-content-form-reg">
						<tr style="color:white;" height="30px">
							<td colspan="2" class="ui-header-new"><b>Item Specification</b></td>
						</tr>
						<tr >
							<td class="ui-desk-style-table">
								<?php if ($this->input->get('pro') == 'new' ){?>
								<table class="ui-content-form" style="color:black;" width="100%" border="0">
									<tr>
										<td style="padding:10px; width:15%;" valign="top">Item(s)   :   </td>
										<td style="padding:10px;"></td>
									</tr>
								</table>
								<?php }elseif ($this->input->get('pro') == 'edit' ){?>
								<style>table.wnctable th {background:#66b2b2 ;}</style>
								<table class="wnctable" border="1" style="text-align:center; margin:5px auto;" align="center">
									<tr>
										<th>No</th>
										<th>Item Code</th>
										<th>Item Name</th>
										<th>MRIN Ref No.</th>
										<th>Qty Req</th>
										<th>Qty Release</th>
									</tr>
									<tr>
										<td>1&nbsp;</td>
										<td><b>SPO2-A00004</b></a>&nbsp;</td>
										<td><b>Finger Sensor For Dolphine 2100</b></a>&nbsp;</td>
										<td><b>MRIN/NJ/BPH/00004/2012</b></a>&nbsp;</td>
										<td><b>1</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
									</tr>
									<tr class="">
										<td>2&nbsp;</td>
										<td class=""><b>SPO2-A00004</b></a>&nbsp;</td>
										<td class=""><b>Finger Sensor For Dolphine 2100</b></a>&nbsp;</td>
										<td class=""><b>MRIN/NJ/BPH/00005/2012</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
									</tr>
									<tr class="">
										<td>3&nbsp;</td>
										<td class=""><b>SPO2-A00004</b></a>&nbsp;</td>
										<td class=""><b>Finger Sensor For Dolphine 2100</b></a>&nbsp;</td>
										<td class=""><b>MRIN/NJ/BPH/00006/2012</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
									</tr>
									<tr class="">
										<td>4&nbsp;</td>
										<td class=""><b>SPO2-A00041</b></a>&nbsp;</td>
										<td class=""><b>Ext Cable for Nellcor EC-8/DEC-8</b></a>&nbsp;</td>
										<td class=""><b>MRIN/NJ/BPH/00010/2012</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
									</tr>
									<tr class="">
										<td>5&nbsp;</td>
										<td class=""><b>SPO2-A00002</b></a>&nbsp;</td>
										<td class=""><b>Finger Sensor Adult for Nellcor DS100 (9pin)</b></a>&nbsp;</td>
										<td class=""><b>MRIN/NJ/BPH/00010/2012</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
									</tr>
									<tr class="">
										<td>6&nbsp;</td>
										<td class=""><b>SPO2-A00002</b></a>&nbsp;</td>
										<td class=""><b>Finger Sensor Adult for Nellcor DS100 (9pin)</b></a>&nbsp;</td>
										<td class=""><b>MRIN/NJ/BPH/00015/2012</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
									</tr>
									<tr class="">
										<td>7&nbsp;</td>
										<td class=""><b>HEATE-A00003</b></a>&nbsp;</td>
										<td class=""><b>Temperature Probe MR858</b></a>&nbsp;</td>
										<td class=""><b>MRIN/NJ/BPH/00026/2012</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
									</tr>
									<tr class="">
										<td>8&nbsp;</td>
										<td class=""><b>SPO2-A00040</b></a>&nbsp;</td>
										<td class=""><b>Extansion Cable for Dolphine 1100</b></a>&nbsp;</td>
										<td class=""><b>MRIN/NJ/BPH/00111/2012</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
										<td class=""><b>1</b></a>&nbsp;</td>
									</tr>
								</table>
								<?php } ?>
							</td>
						</tr>						
					</table>
				</div>
			</div>
			<table align="center" height="40px" border="0" style="width:100%;" class="ui-main-form-footer">
				<tr>
					<td align="center">
						<input type="submit" class="btn-button btn-primary-button" name="mysubmit" value="Save" style="width:150px;"/>
						<input type="button" class="btn-button btn-primary-button" name="Cancel" value="Cancel" onclick="window.history.back()" style="width:150px;"/>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<style>
	.icon{
	 font-size:14px;
	 margin-right:5px;
	 margin-left:5px;
	 color:red;
	 display:iniline-block;
	}
	.icon2{
	 font-size:14px;
	 margin-left:5px;
	 color:green;
	}
</style>
</body>
<?php include 'content_jv_popup.php';?>
<?php echo form_close(); ?>
</html>
