<?php $array = [['contentcontroller/assets/'],
				['contentcontroller/assetstatutory/'],
				['contentcontroller/assetlicenses/'],
				['contentcontroller/assetlicenses/'],
				['contentcontroller/assetPPMjob/'],
				['contentcontroller/assetaccessories/'],
				['contentcontroller/personnelinvolved/'],
]?>
<?php foreach ($array as $list) {?>
<?php if($list[0] == $this->uri->slash_segment(1) .$this->uri->slash_segment(2)){?>
<!DOCTYPE html>
<?php } }?>
<html>
<head>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>images/iconcam.png" type="image/x-icon" />
	<link rel="STYLESHEET" type="text/css" media='all' href="<?php echo base_url(); ?>css/popup-contact.css">
	<link rel="stylesheet" type='text/css' media='all' href="<?php echo base_url(); ?>icon/style.css">
	<link rel='stylesheet' type='text/css' media='all' href="<?php echo base_url(); ?>css/style.css"> 
	<link rel='stylesheet' type='text/css' media='all' href="<?php echo base_url(); ?>css/jquery-ui-1.10.0.custom.css"> 
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url(); ?>css/Color-skin3.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type='text/css' media='all' href="<?php echo base_url(); ?>icon/style.css">
	<script src="<?php echo base_url(); ?>js/jquery.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="HandheldFriendly" content="true" />
	<!--untuk flip text-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/wodry.css">
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
    <script src="<?php echo base_url(); ?>js/wodry.min.js"></script>
	<!--untuk flip text-->
	<!--<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>-->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ias.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.js"></script>
	<?php 
	$array = [['contentcontroller/acg_modulesf/'],['contentcontroller/acg/'],['contentcontroller/acg_report/'],['customize_search_ctrl//']];
	//echo "lkllk : ".$this->uri->slash_segment(1) .$this->uri->slash_segment(2);
	foreach ($array as $list) {
	if( $list[0] == $this->uri->slash_segment(1) .$this->uri->slash_segment(2)){ ?>
	<link rel='stylesheet' type='text/css' media='all' href="<?php echo base_url(); ?>css/acg.css">
	<?php } } ?>
	<link rel="stylesheet" type='text/css' media='all' href="<?php echo base_url(); ?>css/animsition.min.css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/animsition.min.js"></script>
<script>

function myFunction(a) {
    var w = window.open(a, 'name', 'width=900,height=500,left=' + ((screen.width - 900) / 2) +',top=' + ((screen.height - 600) / 2));
    w.onload = w.print;
    w.focus();
  }

$(document).ready(function() {
$("#date0,#date1,#date2,#date3,#date4,#date5,#date6,#date7,#date8,#date9,#date10,#date11,#date12,#date13,#date14,#date15").datepicker({ dateFormat: 'dd-mm-yy' });
});
  //$(document).ready(function() {
   // var href=$(this).attr('href');
   // $('body').animsition();
   // $('body').append('<span id="load">LOADING...</span>');
   // $('body').load(href, function() {
    //  $('body').show();
   // });
 // });
$(document).ready(function() {
    $body = $("body");                     

    $('tr.ui-content-color-style2 td a,tr.ui-content-color-style td a,tr.ui-left_web td a,<?php if ($this->uri->slash_segment(2) != 'fail_bank/') { echo 'tr.ui-color-contents-style-1 td .btn-button';} ?>,tr.ui-rpt-color-style a,tr.ui-rpt-color-style2 a,div#cssmenu ul li a').click(function(){
                                  
        //var toLoad = $(this).attr('href')+' #content';
        $('#content').hide('fast',loadContent);
        $('#load').remove();
        $($body).append('<span id="load">LOADING...</span>');
        $('#load').fadeIn('normal');
        window.location = $(this).attr('href').substr(0,$(this).attr('href').length);
        function loadContent() {
           // alert('test');
           // $('#content').load(toLoad,'',showNewContent())
        }
       
         return false;
    });

});
// Login Form

$(function() {
    var button = $('#loginButton');
    var box = $('#loginBox');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(login) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login) {
        if(!($(login.target).parent('#loginButton').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});
function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
   document.getElementById('show').style.display = "none";
   document.getElementById('show2').style.display = "none";
}
function showDiv2() {
   document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('show').style.display = "block";
   document.getElementById('show2').style.display = "table";
}
</script>
<style>
#load {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 ) 
                url('<?php echo base_url();?>images/pIkfp.gif') 
                50% 50% 
                no-repeat;
}
</style>
<?php if($this->uri->slash_segment(2) == 'workorder/'){ ?>
<script>
$( window ).load(function() {
  $("#myElem").show();
  setTimeout(function() { $("#myElem").hide(); }, 20000);
});
function blinker() {
	$('.blinking').fadeOut(500);
	$('.blinking').fadeIn(500);
}
setInterval(blinker, 1000);
</script>
 <style>
    .onloadworkorder{
    margin:5px auto;
	border-collapse:collapse;
	background:#46eace;
	width:98%;
    }
</style>
<?php }?>

</head>
