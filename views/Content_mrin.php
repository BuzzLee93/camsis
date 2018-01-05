<div class="ui-middle-screen">
<div class="div-p"></div>
<div class="main-box">
	<div class="box">
	<?php $autocolor = array('bg-purple', 'bg-red', 'bg-yellow', 'bg-aqua', 'bg-light-blue'); shuffle($autocolor);?>
		<div class="small-box <?php echo $autocolor[0];?>">
			<div class="inner2" >
				<p>New MRIN</p>
			</div>
			<div class="icon"><i class="icon-file-text2"></i></div>
			<?php echo anchor ('Procurement?pro=new','<span class="ui-left_web">More Info <i class="icon-arrow-right"></i></span>','class="small-box-footer"'); ?>
		</div>
	</div>
</div>
	<div class="content-workorder">
		<table class="ui-content-middle-menu-workorder" border="0" height="" align="center">
<?php 
$procument = $this->input->get('tab');
switch ($procument) {
    case "1":
        $tulis = "Approved MRIN";
        break;
    case "2":
        $tulis = "Rejected, Returned MRIN";
        break;
	case "3":
        $tulis = "Pending MRIN";
        break;
    default:
        $tulis = "All MRIN";
} ?>
			<?php include 'content_pro_tab.php';?>
			<tr class="ui-color-desk desk2">
				<td colspan="4" class="t-header" style="color:black; height:40px; padding-left:10px;"><b><?= $tulis ?></b> <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?> <u>[Imaging Asset Only]</u></td>
			</tr>
			<tr class="ui-color-desk bg-red-blood"> 
				<td colspan="4">
					<table width="100%" class="ui-content-middle-menu-desk">
						<tr style="background:#B3130A;">
							<td width="3%" height="30px">
							<a href="?pro=mrin&y=<?= $year-1?>&m=<?= $month?>"><img src="<?php echo base_url(); ?>images/arrow-left2.png" alt="" class="ui-img-icon"/></a>
							</td>
							<td width="3%">
							<a href="?pro=mrin&y=<?= ($month-1 == 0) ? $year-1 :$year?>&m=<?= ($month-1 == 0) ? 12 :$month-1?>"><img src="<?php echo base_url(); ?>images/arrow-left.png" alt="" class="ui-img-icon"/></a>
							</td>
							<td width="88%" align="center">
							<?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?>
							</td>
							<td width="3%">
							<a href="?pro=mrin&y=<?= ($month+1 == 13) ? $year+1 :$year?>&m=<?= ($month+1 == 13) ? 1 :$month+1?>"><img src="<?php echo base_url(); ?>images/arrow-right.png" alt="" class="ui-img-icon"/></a>
							</td>
							<td width="3%">
							<a href="?pro=mrin&y=<?= $year+1?>&m=<?= $month?>"><img src="<?php echo base_url(); ?>images/arrow-right2.png" alt="" class="ui-img-icon"/></a>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="ui-color-contents-style-1">
				<td colspan="4" style="" valign="top" >
					<table class="ui-content-middle-menu-workorder2" width="100%">
						<tr class="ui-menu-color-header" style="color:white; font-size:12px;">
							<th >&nbsp;</th>
							<th style="text-align:left;">MRIN Reference No</th>
							<th >Work Order</th>
							<th >Asset</th>
							<th >Status</th>
							<th >Issue Date</th>
							<th >Remark</th>
						</tr>
						<style>
				.ui-content-middle-menu-workorder2 tr th {padding:8px;font-size:14px;}
				.ui-content-middle-menu-workorder2 tr td {padding:8px;font-size:14px;}
				.ui-content-middle-menu-workorder2 tr td.td-desk a{ font-weight:bold; font-size:14px;}
				</style>
							<?php if ($record){ ?>
							<?php $numrow = 1; foreach($record as $row): ?>
							<?php
							if ($user[0]->class_id == 1){
								if ($row->ApprStatusID == 6 || $row->ApprStatusID == 128){
									$pro = 'pending';
								}
								else {
									$pro = 'approved';
								}
							}
							else if ($user[0]->class_id == 2){
								if ($row->ApprStatusID == 6){
									$pro = 'pending';
								}
								else {
									$pro = 'approved';
								}
							}
							else if ($user[0]->class_id == 3){
								if ($row->ApprStatusIDx == 6 || $row->ApprStatusIDx == 128 || $row->ApprStatusIDx == NULL){
									$pro = 'pending';
								}
								else {
									$pro = 'approved';
								}
							}

							if ($row->ApprStatusID == 4 && $row->ApprStatusIDx == 4 && $row->ApprStatusIDxx == 4){
								$r_status = $row->ApprStatusID;
							}
							else if ($row->ApprStatusID == 4 && $row->ApprStatusIDx != 4 && $row->ApprStatusIDxx != 4){
								$r_status = $row->ApprStatusIDx;
							}
							else{
								$r_status = $row->ApprStatusID;
							}

							?>   			
		    				<tr align="center" <?= ($numrow%2==0) ?  'class="ui-color-color-color"' :  '' ?> >
		    					<td class="td-desk"><?=$numrow++?></td>
		    					<td class="td-desk" style="text-align:left;"><a href="<?php echo base_url();?>index.php/Procurement?mrinno=<?=$row->DocReferenceNo?>&pro=<?=$pro?>"><?=isset($row->DocReferenceNo) ? $row->DocReferenceNo : ''?></a></td>
		    					<td class="td-desk"><?=isset($row->WorkOfOrder) ? $row->WorkOfOrder : ''?></td>
		    					<td class="td-desk"><?=isset($row->V_Asset_no) ? $row->V_Asset_no : ''?></td>
		    					<?php foreach($status as $stat){ ?>
		    					<?php
		    					if ($row->ApprStatusID == $stat->StatusID){
		    						$s_AM = $stat->Status;
		    					}
		    					if ($row->ApprStatusIDx == $stat->StatusID){
		    						$s_Proc = $stat->Status;
		    					}
		    					else if ($row->ApprStatusIDx== NULL){
		    						$s_Proc = 'Pending';
		    					}
		    					if ($row->ApprStatusIDxx == $stat->StatusID){
		    						$s_Log = $stat->Status;
		    					}
		    					else if ($row->ApprStatusIDxx== NULL){
		    						$s_Log = 'Pending';
		    					}
		    					?>
		    					<?php if ($r_status == $stat->StatusID) { ?>
		    					<td class="td-desk"><a rel="nofollow" title="AM : <?=$s_AM?> ON <?=isset($row->DateApproval) ? date("d/m/Y H:i:s",strtotime($row->DateApproval)) : ''?> &#13;Procument : <?=$s_Proc?> ON <?=isset($row->DateApprovalx) ? date("d/m/Y H:i:s",strtotime($row->DateApprovalx)) : ''?> &#13;Logistic : <?=$s_Log?> ON <?=isset($row->DateApprovalxx) ? date("d/m/Y H:i:s",strtotime($row->DateApprovalxx)) : ''?>"><?=isset($stat->Status) ? $stat->Status : ''?></a></td>
		    					<?php } ?>
		    					<?php } ?>
		    					<td class="td-desk"><?=isset($row->DateCreated) ? date("d M Y",strtotime($row->DateCreated)) : ''?></td>
		    					<td class="td-desk"><?=isset($row->Comments) ? $row->Comments : ''?></td>
		        			</tr>
		        			<?php endforeach; ?>
		        			<?php } else { ?>
							<tr align="center" style="height:200px; background:white;">
								<td colspan="10" class="default-NO">NO <?php if($tulis == "All MRIN" ){ echo "MRIN";}else{ echo $tulis;}?> FOUND FOR <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?></td>
							</tr>
							<?php } ?>
				</table>
			</td>	
		</tr>
		<tr class="ui-header-new" style="height:5px;">
				<td align="center" colspan="4">
				</td>
			</tr>
	</table>	
	</div>
</div>
</body>
</html>