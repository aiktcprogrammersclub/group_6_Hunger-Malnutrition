


<html>





<head>
<title>Body Mass Index (BMI) Calculator | Medindia</title>
<meta NAME="description" CONTENT="Body Mass Index (BMI) Calculator indicates whether your body weight is appropriate for your height and tells you the associated risk factors and gives you suggestions to reduce your weight.">
<meta NAME="keywords" CONTENT="Body mass index calculator, bmi calculator, excess body fat, waist to hip ratio , Medindia">
<link rel="canonical" href="http://www.medindia.net/doctors/clinical_cal/bmi.asp" />

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<![endif]-->

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<meta name="google-translate-customization" content="b702322eee69b7d4-2d87d30331f00dd8-g6e3d12430e42c0dc-10" />
<!--[if IE]>
<script src="http://www.medindia.net/includes-rwd/js/html5.js"></script>
<script src="http://www.medindia.net/includes-rwd/js/css3-mediaqueries.js"></script>
<![endif]-->
<!--[if (gte IE 6)&(lte IE 8)]><script src="http://www.medindia.net/includes-rwd/js/selectivizr-min.js"></script><![endif]-->

	<link rel="stylesheet" type="text/css" href="http://www.medindia.net/includes-rwd/css/main-v2.css" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1044053-1', 'medindia.net');
  ga('send', 'pageview');

</script>
<!-- Begin comScore Tag -->
<script>
  var _comscore = _comscore || [];
  _comscore.push({ c1: "2", c2: "18296060" });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
    el.parentNode.insertBefore(s, el);
  })();
</script>
<noscript>
  <img src="http://b.scorecardresearch.com/p?c1=2&amp;c2=18296060&amp;cv=2.0&amp;cj=1" alt=''/>
</noscript>
<!-- End comScore Tag -->

<meta property="og:image" content="http://www.medindia.net/patients/calculators/images/300_250/body-mass-index.jpg"/>
<link rel="image_src" href="http://www.medindia.net/patients/calculators/images/300_250/body-mass-index.jpg" / >

 <script language=javascript>
function calcsearch_valid()
{  
var _input=document.getElementById('calcsearch').value.trim()
if (_input.length<3){alert("Enter atleast 3 characters");return false;}
return true;
document.frmcalc_search.submit();
}

function getsearchcalc(url1)
{
var calc_input = document.getElementById('calcsearch');
var _list = document.getElementById('calcsearchlist').childNodes.length;
document.getElementById('calcsearchlist').style.display=_list < 1 ? 'none':'block';
calc_input.onkeyup = function() {
document.getElementById('calcsearchdiv').style.display ="none";
if (calc_input.value.length>0)  
{
document.getElementById('calcsearchdiv').style.display ="block";
getcalclist(url1,calc_input.value);
}
}
}

function getcalclist(serviceurl,txt) {
	$.getJSON(serviceurl+'/includes-rwd/widgets/calculator/getcalc-search-details.asp?txt='+txt, function(data) {
		$('#calcsearchlist a').remove();
		$.each(data.items, function(index, calc) {
							
			$('#calcsearchlist').append('<a href="' + calc.url + '">' + calc.calname + '</a>');
		});
		if($("#calcsearchlist a").length < 1){
			$('#calcsearchlist').css('display','none');	
			$('.ajax-bx-close').css("display","none");
		} else {
			$('#calcsearchlist').css('display','block');
			$('.ajax-bx-close').css("display","block");
		}
	});
}

</script>


<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_336x280', [[300, 250], [336, 280]], 'div-gpt-ad-1397109153354-0').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_336x280_IN', [[300, 250], [336, 280]], 'div-gpt-ad-1397109153354-1').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_336x280_ROS', [[300, 250], [336, 280]], 'div-gpt-ad-1397109153354-2').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_336x280_US', [[300, 250], [336, 280]], 'div-gpt-ad-1397109153354-3').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_Left_Bottom_160x600', [160, 600], 'div-gpt-ad-1397109153354-4').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_Left_Top_160x600', [160, 600], 'div-gpt-ad-1397109153354-5').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_Left_Top_160x600_IN', [160, 600], 'div-gpt-ad-1397109153354-6').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_Left_Top_160x600_ROS', [160, 600], 'div-gpt-ad-1397109153354-7').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_Left_Top_160x600_US', [160, 600], 'div-gpt-ad-1397109153354-8').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_Top_336x280', [[300, 250], [336, 280]], 'div-gpt-ad-1397109153354-9').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_Top_336x280_IN', [[300, 250], [336, 280]], 'div-gpt-ad-1397109153354-10').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_Top_336x280_ROS', [[300, 250], [336, 280]], 'div-gpt-ad-1397109153354-11').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_Top_336x280_US', [[300, 250], [336, 280]], 'div-gpt-ad-1397109153354-12').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Middle_Top_Analysis_336x280', [300, 250], 'div-gpt-ad-1397109153354-13').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Right_300x600', [300, 600], 'div-gpt-ad-1397109153354-14').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Right_300x250_IN', [300, 250], 'div-gpt-ad-1399370127367-0').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Right_300x250_ROS', [300, 250], 'div-gpt-ad-1399370127367-1').addService(googletag.pubads());
googletag.defineSlot('/1055806/Medindia_Calculator_Right_300x250_US', [300, 250], 'div-gpt-ad-1399370127367-2').addService(googletag.pubads());
googletag.enableServices();
});
</script>


</head>







<?php
/* This calculator is your for free by Calendarscripts.info. You have no obligations for anything - you can modify, redistribute, sell it or whatever you want to do.
We will appreciate if you don't remove the link at the bottom, but that's not required. */
/* Feel free to modify the CSS and the texts below. - no problem at all. Just don't touch the PHP code or the specual codes which are surrounded with %% unless you know what you are doing. */
session_start();
$firsttext="Your Body Mass Index (BMI) is %%BMI%%. This means your weight is within the %%BMIMSG%% range.";
$normaltext="You seem to keep your weight normal. Well done!";
$lowertext="Your current BMI is lower than the recommended range of <strong>18.5</strong> to <strong>24.9</strong>. <br>To be within the right range for your height, you should weigh between <strong>%%LOWERLIMIT%% lbs</strong> / <strong>%%LOWERLIMITKG%% kg</strong> and <strong>%%UPPERLIMIT%% lbs</strong> / <strong>%%UPPERLIMITKG%% kg</strong>";
$uppertext="Your current BMI is greater than the recommended range of <strong>18.5</strong> to <strong>24.9</strong>. <br>To be within the right range for your height, you should weigh between <strong>%%LOWERLIMIT%% lbs</strong> / <strong>%%LOWERLIMITKG%% kg</strong> and <strong>%%UPPERLIMIT%% lbs</strong> / <strong>%%UPPERLIMITKG%% kg</strong>";
?>
<style type="text/css">
.calculator_div
{
font-size:11px;
font-family:verdana, arial, sans-serif;
border:2pt solid #4444FF;
padding:25px;
margin:auto;
width:300px;
}
.calculator_div label
{
display:block;
float:left;
width:100px;
}
</style>
<?php
if(!empty($_POST['calculator_ok']))
{
// set vars in session
foreach($_POST as $key=>$var)
{
$_SESSION['bmi_calc_'.$key]=$var;
}
if($_POST['system']=='english')
{
$height=$_POST['height_ft_en']*12+$_POST['height_in_en'];
$bmi=($_POST['weight_en']*703) / ($height*$height);
}
else
{
$height=$_POST['height_met']/100;
$bmi=$_POST['weight_met'] / round(($height*$height),2);
}
$bmi=number_format($bmi,1,".","");
// prepare message for the user
if($bmi<=18.5)
{
$bmimsg="Underweight";
}
if($bmi>18.5 and $bmi<=24.9)
{
$bmimsg="Normal";
}
if($bmi>=25 and $bmi<=29.9)
{
$bmimsg="Overweight";
}
if($bmi>=30)
{
$bmimsg="Obese";
}
// what is the weight range?
if($bmimsg!='Normal')
{
if($_POST['system']=='english')
{
$lowerlimit=number_format(( 18.5 * ($height*$height) ) / 703);
$lowerlimitkg=number_format($lowerlimit*0.453,1,".","");
$upperlimit=number_format(( 24.9 * ($height*$height) ) / 703);
$upperlimitkg=number_format($upperlimit*0.453,1,".","");
}
else
{
$lowerlimit=number_format( 18.5 * ($height*$height) * 2.204 );
$lowerlimitkg=number_format(18.5 * ($height*$height),1,".","");
$upperlimit=number_format( 24.9 * ($height*$height) * 2.204 );
$upperlimitkg=number_format(24.9 * ($height*$height),1,".","");
}
}
//prepare texts
$firsttext=str_replace("%%BMI%%",$bmi,$firsttext);
$firsttext=str_replace("%%BMIMSG%%",$bmimsg,$firsttext);
$lowertext=str_replace("%%LOWERLIMIT%%",$lowerlimit,$lowertext);
$lowertext=str_replace("%%LOWERLIMITKG%%",$lowerlimitkg,$lowertext);
$lowertext=str_replace("%%UPPERLIMIT%%",$upperlimit,$lowertext);
$lowertext=str_replace("%%UPPERLIMITKG%%",$upperlimitkg,$lowertext);
$uppertext=str_replace("%%LOWERLIMIT%%",$lowerlimit,$uppertext);
$uppertext=str_replace("%%LOWERLIMITKG%%",$lowerlimitkg,$uppertext);
$uppertext=str_replace("%%UPPERLIMIT%%",$upperlimit,$uppertext);
$uppertext=str_replace("%%UPPERLIMITKG%%",$upperlimitkg,$uppertext);
}
?>




<form method="post">
<div class="calculator_div">
<div><input type="radio" value="english" name="system" <?php if($_SESSION['bmi_calc_system']=="" or $_SESSION['bmi_calc_system']=='english') echo "checked='true'";?> onclick="changeSystem('english');"> English
&nbsp;
<input type="radio" value="metric" name="system" <?php if($_SESSION['bmi_calc_system']!='' and $_SESSION['bmi_calc_system']=='metric') echo "checked='true'";?> onclick="changeSystem('metric');"> Metric</div>
<div><label>Your Weight:</label>
<span id="englishWeight" style="display:<?php echo ($_SESSION['bmi_calc_system']=='' or $_SESSION['bmi_calc_system']=='english')?'block':'none'?>;"><input type="text" name="weight_en" size="6" value="<?php echo !empty($_SESSION['bmi_calc_weight_en'])?$_SESSION['bmi_calc_weight_en']:""?>"> lbs</span>
<span id="metricWeight" style="display:<?php echo (($_SESSION['bmi_calc_system']=="" or $_SESSION['bmi_calc_system']=='english'))?'none':'block'?>;"><input type="text" name="weight_met" size="6" value="<?php echo !empty($_SESSION['bmi_calc_weight_met'])?$_SESSION['bmi_calc_weight_met']:""?>"> kg</span>
</div>
<div><label>Your Height:</label>
<span id="englishHeight" style="display:<?php echo (($_SESSION['bmi_calc_system']=='' or $_SESSION['bmi_calc_system']=='english'))?'block':'none'?>;"><input type="text" size="6" name="height_ft_en" value="<?php echo !empty($_SESSION['bmi_calc_height_ft_en'])?$_SESSION['bmi_calc_height_ft_en']:""?>"> ft
&nbsp; <input type="text" size="6" name="height_in_en" value="<?php echo ($_SESSION['bmi_calc_height_in_en']!='')?$_SESSION['bmi_calc_height_in_en']:""?>"> in</span>
<span id="metricHeight" style="display:<?php echo ($_SESSION['bmi_calc_system']=='' or $_SESSION['bmi_calc_system']=='english')?'none':'block'?>;">
<input type="text" name="height_met" size="6" value="<?php echo ($_SESSION['bmi_calc_height_met']!='')?$_SESSION['bmi_calc_height_met']:""?>"> cm
</span>
</div>
<div align="center">
<input type="hidden" name="calculator_ok" value="ok">
<input type="submit" value="Are You Overweight?">
</div>
<div align="center"><a href="http://calendarscripts.info/bmr-calculator.html">BMR calculator</a></div>
</div>
</form>













<?php if(!empty($_POST['calculator_ok'])):?>
<div class="calculator_table">
<p><?=$firsttext?></p>
<?php	
switch($bmimsg)
{
case 'Normal':
// you can echo here if you want for normal weight people
break;
case 'Underweight':
echo $lowertext;
break;
default:
echo $uppertext;
break;
}
?>
<p align="center"><a href="http://<?=$_SERVER['HTTP_HOST'];?><?=$_SERVER['REQUEST_URI']?>">Calculate again</a></p>
</div>
<?php endif;?>
<script type="text/javascript">
function changeSystem(s)
{
if(s=='english')
{
document.getElementById('englishWeight').style.display='block';
document.getElementById('englishHeight').style.display='block';
document.getElementById('metricWeight').style.display='none';
document.getElementById('metricHeight').style.display='none';
}
else
{
document.getElementById('englishWeight').style.display='none';
document.getElementById('englishHeight').style.display='none';
document.getElementById('metricWeight').style.display='block';
document.getElementById('metricHeight').style.display='block';
}
}
</script>

  

