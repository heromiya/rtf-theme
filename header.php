<?php
$lang=$_GET['lang'];
if($lang==NULL) $lang = 'en';
//日本語記事かどうかの判別 > post id から投稿のメタ情報を拾ってきて判別
$category_English_id =  $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'English'")->term_id;
$category_Japanese_id =  $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'Japanese'")->term_id;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<script type="text/javascript" src="<?php bloginfo('home') ?>/js/ui.tabs/jquery-1.2.6.js"></script>
	<script type="text/javascript" src="<?php bloginfo('home') ?>/js/ui.tabs/ui.core.js"></script>
	<script type="text/javascript" src="<?php bloginfo('home') ?>/js/ui.tabs/ui.tabs.js"></script>
	<link href="<?php bloginfo('home') ?>/js/ui.tabs/ui.tabs.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
	$(function() {
		$('#ui-tab > ul').tabs();
	});
	</script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-46702585-1', 'knowledgesolution.org');
  ga('send', 'pageview');
</script>
</head>

<body>
	<div id="lang-nav">
		<ul>
		<?php
			if($lang == 'en') {
				echo '<li><a href="'.home_url().'/?lang=en">Top</a></li><li><a href="'.home_url().'/?lang=ja">Japanese</a></li>';
			}elseif($lang == 'ja'){
				echo '<li><a href="'.home_url().'/?lang=ja">トップ</a></li><li><a href="'.home_url(). '/?lang=en">English</a></li>';
			}
		?>
		</ul>
	</div>
<div id="wrapper" class="hfeed">
	<div id="header">
		<h1><i><?php bloginfo('name')?></i></h1>
		<div align="center"><?php bloginfo('description') ?></div>
		</div><!--  #header -->
	<div id="nav-country">
	<ul class="menu">
		<?php 
			if($lang == 'en') {
				echo '<li id="item-header" style=" width:10em;">By Country/Region</li>';
			}elseif($lang == 'ja'){
				echo '<li id="item-header" style="width:5em;">国・地域別</li>';
			}
		?>
<?php
echo '<li>A<ul>';
if ($lang == 'en') {echo '<a title="Afghanistan" href="'.home_url().'/?lang=en&tag_index=Afghanistan"><li>Afghanistan</li></a>
';}elseif($lang == 'ja'){echo '<a title="Afghanistan" href="'.home_url().'/?lang=ja&tag_index=Afghanistan"><li>Afghanistan</li></a>
';}if ($lang == 'en') {echo '<a title="Armenia" href="'.home_url().'/?lang=en&tag_index=Armenia"><li>Armenia</li></a>
';}elseif($lang == 'ja'){echo '<a title="Armenia" href="'.home_url().'/?lang=ja&tag_index=Armenia"><li>Armenia</li></a>
';}if ($lang == 'en') {echo '<a title="ASEAN" href="'.home_url().'/?lang=en&tag_index=ASEAN"><li>ASEAN</li></a>
';}elseif($lang == 'ja'){echo '<a title="ASEAN" href="'.home_url().'/?lang=ja&tag_index=ASEAN"><li>ASEAN</li></a>
';}if ($lang == 'en') {echo '<a title="Australia" href="'.home_url().'/?lang=en&tag_index=Australia"><li>Australia</li></a>
';}elseif($lang == 'ja'){echo '<a title="Australia" href="'.home_url().'/?lang=ja&tag_index=Australia"><li>Australia</li></a>
';}if ($lang == 'en') {echo '<a title="Austria" href="'.home_url().'/?lang=en&tag_index=Austria"><li>Austria</li></a>
';}elseif($lang == 'ja'){echo '<a title="Austria" href="'.home_url().'/?lang=ja&tag_index=Austria"><li>Austria</li></a>
';}if ($lang == 'en') {echo '<a title="Azerbaijan" href="'.home_url().'/?lang=en&tag_index=Azerbaijan"><li>Azerbaijan</li></a>
';}elseif($lang == 'ja'){echo '<a title="Azerbaijan" href="'.home_url().'/?lang=ja&tag_index=Azerbaijan"><li>Azerbaijan</li></a>
';}echo '</ul></li>';
echo '<li>B<ul>';
if ($lang == 'en') {echo '<a title="Bangladesh" href="'.home_url().'/?lang=en&tag_index=Bangladesh"><li>Bangladesh</li></a>
';}elseif($lang == 'ja'){echo '<a title="Bangladesh" href="'.home_url().'/?lang=ja&tag_index=Bangladesh"><li>Bangladesh</li></a>
';}if ($lang == 'en') {echo '<a title="Belgium" href="'.home_url().'/?lang=en&tag_index=Belgium"><li>Belgium</li></a>
';}elseif($lang == 'ja'){echo '<a title="Belgium" href="'.home_url().'/?lang=ja&tag_index=Belgium"><li>Belgium</li></a>
';}if ($lang == 'en') {echo '<a title="Bhutan" href="'.home_url().'/?lang=en&tag_index=Bhutan"><li>Bhutan</li></a>
';}elseif($lang == 'ja'){echo '<a title="Bhutan" href="'.home_url().'/?lang=ja&tag_index=Bhutan"><li>Bhutan</li></a>
';}if ($lang == 'en') {echo '<a title="BIMP-EAGA" href="'.home_url().'/?lang=en&tag_index=BIMP-EAGA"><li>BIMP-EAGA</li></a>
';}elseif($lang == 'ja'){echo '<a title="BIMP-EAGA" href="'.home_url().'/?lang=ja&tag_index=BIMP-EAGA"><li>BIMP-EAGA</li></a>
';}if ($lang == 'en') {echo '<a title="Brunei" href="'.home_url().'/?lang=en&tag_index=Brunei"><li>Brunei</li></a>
';}elseif($lang == 'ja'){echo '<a title="Brunei" href="'.home_url().'/?lang=ja&tag_index=Brunei"><li>Brunei</li></a>
';}echo '</ul></li>';
echo '<li>C<ul>';
if ($lang == 'en') {echo '<a title="CAREC" href="'.home_url().'/?lang=en&tag_index=CAREC"><li>CAREC</li></a>
';}elseif($lang == 'ja'){echo '<a title="CAREC" href="'.home_url().'/?lang=ja&tag_index=CAREC"><li>CAREC</li></a>
';}if ($lang == 'en') {echo '<a title="Cambodia" href="'.home_url().'/?lang=en&tag_index=Cambodia"><li>Cambodia</li></a>
';}elseif($lang == 'ja'){echo '<a title="Cambodia" href="'.home_url().'/?lang=ja&tag_index=Cambodia"><li>Cambodia</li></a>
';}if ($lang == 'en') {echo '<a title="Canada" href="'.home_url().'/?lang=en&tag_index=Canada"><li>Canada</li></a>
';}elseif($lang == 'ja'){echo '<a title="Canada" href="'.home_url().'/?lang=ja&tag_index=Canada"><li>Canada</li></a>
';}if ($lang == 'en') {echo '<a title="Cook Islands" href="'.home_url().'/?lang=en&tag_index=Cook Islands"><li>Cook Islands</li></a>
';}elseif($lang == 'ja'){echo '<a title="Cook Islands" href="'.home_url().'/?lang=ja&tag_index=Cook Islands"><li>Cook Islands</li></a>
';}echo '</ul></li>';
echo '<li>D<ul>';
if ($lang == 'en') {echo '<a title="Denmark" href="'.home_url().'/?lang=en&tag_index=Denmark"><li>Denmark</li></a>
';}elseif($lang == 'ja'){echo '<a title="Denmark" href="'.home_url().'/?lang=ja&tag_index=Denmark"><li>Denmark</li></a>
';}echo '</ul></li>';
echo '<li>F<ul>';
if ($lang == 'en') {echo '<a title="Fiji" href="'.home_url().'/?lang=en&tag_index=Fiji"><li>Fiji</li></a>
';}elseif($lang == 'ja'){echo '<a title="Fiji" href="'.home_url().'/?lang=ja&tag_index=Fiji"><li>Fiji</li></a>
';}if ($lang == 'en') {echo '<a title="Finland" href="'.home_url().'/?lang=en&tag_index=Finland"><li>Finland</li></a>
';}elseif($lang == 'ja'){echo '<a title="Finland" href="'.home_url().'/?lang=ja&tag_index=Finland"><li>Finland</li></a>
';}if ($lang == 'en') {echo '<a title="France" href="'.home_url().'/?lang=en&tag_index=France"><li>France</li></a>
';}elseif($lang == 'ja'){echo '<a title="France" href="'.home_url().'/?lang=ja&tag_index=France"><li>France</li></a>
';}echo '</ul></li>';
echo '<li>G<ul>';
if ($lang == 'en') {echo '<a title="Georgia" href="'.home_url().'/?lang=en&tag_index=Georgia"><li>Georgia</li></a>
';}elseif($lang == 'ja'){echo '<a title="Georgia" href="'.home_url().'/?lang=ja&tag_index=Georgia"><li>Georgia</li></a>
';}if ($lang == 'en') {echo '<a title="GMS" href="'.home_url().'/?lang=en&tag_index=GMS"><li>GMS</li></a>
';}elseif($lang == 'ja'){echo '<a title="GMS" href="'.home_url().'/?lang=ja&tag_index=GMS"><li>GMS</li></a>
';}echo '</ul></li>';
echo '<li>I<ul>';
if ($lang == 'en') {echo '<a title="India" href="'.home_url().'/?lang=en&tag_index=India"><li>India</li></a>
';}elseif($lang == 'ja'){echo '<a title="India" href="'.home_url().'/?lang=ja&tag_index=India"><li>India</li></a>
';}if ($lang == 'en') {echo '<a title="Indonesia" href="'.home_url().'/?lang=en&tag_index=Indonesia"><li>Indonesia</li></a>
';}elseif($lang == 'ja'){echo '<a title="Indonesia" href="'.home_url().'/?lang=ja&tag_index=Indonesia"><li>Indonesia</li></a>
';}if ($lang == 'en') {echo '<a title="Island" href="'.home_url().'/?lang=en&tag_index=Island"><li>Island</li></a>
';}elseif($lang == 'ja'){echo '<a title="Island" href="'.home_url().'/?lang=ja&tag_index=Island"><li>Island</li></a>
';}echo '</ul></li>';
echo '<li>J<ul>';
if ($lang == 'en') {echo '<a title="Japan" href="'.home_url().'/?lang=en&tag_index=Japan"><li>Japan</li></a>
';}elseif($lang == 'ja'){echo '<a title="Japan" href="'.home_url().'/?lang=ja&tag_index=Japan"><li>Japan</li></a>
';}echo '</ul></li>';
echo '<li>K<ul>';
if ($lang == 'en') {echo '<a title="Kazakhstan" href="'.home_url().'/?lang=en&tag_index=Kazakhstan"><li>Kazakhstan</li></a>
';}elseif($lang == 'ja'){echo '<a title="Kazakhstan" href="'.home_url().'/?lang=ja&tag_index=Kazakhstan"><li>Kazakhstan</li></a>
';}if ($lang == 'en') {echo '<a title="Kenya" href="'.home_url().'/?lang=en&tag_index=Kenya"><li>Kenya</li></a>
';}elseif($lang == 'ja'){echo '<a title="Kenya" href="'.home_url().'/?lang=ja&tag_index=Kenya"><li>Kenya</li></a>
';}if ($lang == 'en') {echo '<a title="Korea" href="'.home_url().'/?lang=en&tag_index=Korea"><li>Korea</li></a>
';}elseif($lang == 'ja'){echo '<a title="Korea" href="'.home_url().'/?lang=ja&tag_index=Korea"><li>Korea</li></a>
';}if ($lang == 'en') {echo '<a title="Kyrgyz" href="'.home_url().'/?lang=en&tag_index=Kyrgyz"><li>Kyrgyz</li></a>
';}elseif($lang == 'ja'){echo '<a title="Kyrgyz" href="'.home_url().'/?lang=ja&tag_index=Kyrgyz"><li>Kyrgyz</li></a>
';}echo '</ul></li>';
echo '<li>L<ul>';
if ($lang == 'en') {echo '<a title="Lao" href="'.home_url().'/?lang=en&tag_index=Lao"><li>Lao</li></a>
';}elseif($lang == 'ja'){echo '<a title="Lao" href="'.home_url().'/?lang=ja&tag_index=Lao"><li>Lao</li></a>
';}if ($lang == 'en') {echo '<a title="Lithuania" href="'.home_url().'/?lang=en&tag_index=Lithuania"><li>Lithuania</li></a>
';}elseif($lang == 'ja'){echo '<a title="Lithuania" href="'.home_url().'/?lang=ja&tag_index=Lithuania"><li>Lithuania</li></a>
';}echo '</ul></li>';
echo '<li>M<ul>';
if ($lang == 'en') {echo '<a title="Malaysia" href="'.home_url().'/?lang=en&tag_index=Malaysia"><li>Malaysia</li></a>
';}elseif($lang == 'ja'){echo '<a title="Malaysia" href="'.home_url().'/?lang=ja&tag_index=Malaysia"><li>Malaysia</li></a>
';}if ($lang == 'en') {echo '<a title="Maldives" href="'.home_url().'/?lang=en&tag_index=Maldives"><li>Maldives</li></a>
';}elseif($lang == 'ja'){echo '<a title="Maldives" href="'.home_url().'/?lang=ja&tag_index=Maldives"><li>Maldives</li></a>
';}if ($lang == 'en') {echo '<a title="Micronesia" href="'.home_url().'/?lang=en&tag_index=Micronesia"><li>Micronesia</li></a>
';}elseif($lang == 'ja'){echo '<a title="Micronesia" href="'.home_url().'/?lang=ja&tag_index=Micronesia"><li>Micronesia</li></a>
';}if ($lang == 'en') {echo '<a title="Mongolia" href="'.home_url().'/?lang=en&tag_index=Mongolia"><li>Mongolia</li></a>
';}elseif($lang == 'ja'){echo '<a title="Mongolia" href="'.home_url().'/?lang=ja&tag_index=Mongolia"><li>Mongolia</li></a>
';}if ($lang == 'en') {echo '<a title="Myanmar" href="'.home_url().'/?lang=en&tag_index=Myanmar"><li>Myanmar</li></a>
';}elseif($lang == 'ja'){echo '<a title="Myanmar" href="'.home_url().'/?lang=ja&tag_index=Myanmar"><li>Myanmar</li></a>
';}echo '</ul></li>';
echo '<li>N<ul>';
if ($lang == 'en') {echo '<a title="Nepal" href="'.home_url().'/?lang=en&tag_index=Nepal"><li>Nepal</li></a>
';}elseif($lang == 'ja'){echo '<a title="Nepal" href="'.home_url().'/?lang=ja&tag_index=Nepal"><li>Nepal</li></a>
';}if ($lang == 'en') {echo '<a title="Netherlands" href="'.home_url().'/?lang=en&tag_index=Netherlands"><li>Netherlands</li></a>
';}elseif($lang == 'ja'){echo '<a title="Netherlands" href="'.home_url().'/?lang=ja&tag_index=Netherlands"><li>Netherlands</li></a>
';}if ($lang == 'en') {echo '<a title="New Zealand" href="'.home_url().'/?lang=en&tag_index=New Zealand"><li>New Zealand</li></a>
';}elseif($lang == 'ja'){echo '<a title="New Zealand" href="'.home_url().'/?lang=ja&tag_index=New Zealand"><li>New Zealand</li></a>
';}if ($lang == 'en') {echo '<a title="Norway" href="'.home_url().'/?lang=en&tag_index=Norway"><li>Norway</li></a>
';}elseif($lang == 'ja'){echo '<a title="Norway" href="'.home_url().'/?lang=ja&tag_index=Norway"><li>Norway</li></a>
';}echo '</ul></li>';
echo '<li>P<ul>';
if ($lang == 'en') {echo '<a title="Pacific" href="'.home_url().'/?lang=en&tag_index=Pacific"><li>Pacific</li></a>
';}elseif($lang == 'ja'){echo '<a title="Pacific" href="'.home_url().'/?lang=ja&tag_index=Pacific"><li>Pacific</li></a>
';}if ($lang == 'en') {echo '<a title="Pakistan" href="'.home_url().'/?lang=en&tag_index=Pakistan"><li>Pakistan</li></a>
';}elseif($lang == 'ja'){echo '<a title="Pakistan" href="'.home_url().'/?lang=ja&tag_index=Pakistan"><li>Pakistan</li></a>
';}if ($lang == 'en') {echo '<a title="Palau" href="'.home_url().'/?lang=en&tag_index=Palau"><li>Palau</li></a>
';}elseif($lang == 'ja'){echo '<a title="Palau" href="'.home_url().'/?lang=ja&tag_index=Palau"><li>Palau</li></a>
';}if ($lang == 'en') {echo '<a title="Papua New Guinea" href="'.home_url().'/?lang=en&tag_index=Papua New Guinea"><li>Papua New Guinea</li></a>
';}elseif($lang == 'ja'){echo '<a title="Papua New Guinea" href="'.home_url().'/?lang=ja&tag_index=Papua New Guinea"><li>Papua New Guinea</li></a>
';}if ($lang == 'en') {echo '<a title="Philippines" href="'.home_url().'/?lang=en&tag_index=Philippines"><li>Philippines</li></a>
';}elseif($lang == 'ja'){echo '<a title="Philippines" href="'.home_url().'/?lang=ja&tag_index=Philippines"><li>Philippines</li></a>
';}if ($lang == 'en') {echo '<a title="Portugal" href="'.home_url().'/?lang=en&tag_index=Portugal"><li>Portugal</li></a>
';}elseif($lang == 'ja'){echo '<a title="Portugal" href="'.home_url().'/?lang=ja&tag_index=Portugal"><li>Portugal</li></a>
';}if ($lang == 'en') {echo '<a title="PRC" href="'.home_url().'/?lang=en&tag_index=PRC"><li>PRC</li></a>
';}elseif($lang == 'ja'){echo '<a title="PRC" href="'.home_url().'/?lang=ja&tag_index=PRC"><li>PRC</li></a>
';}echo '</ul></li>';
echo '<li>R<ul>';
if ($lang == 'en') {echo '<a title="Regional" href="'.home_url().'/?lang=en&tag_index=Regional"><li>Regional</li></a>
';}elseif($lang == 'ja'){echo '<a title="Regional" href="'.home_url().'/?lang=ja&tag_index=Regional"><li>Regional</li></a>
';}if ($lang == 'en') {echo '<a title="Russia" href="'.home_url().'/?lang=en&tag_index=Russia"><li>Russia</li></a>
';}elseif($lang == 'ja'){echo '<a title="Russia" href="'.home_url().'/?lang=ja&tag_index=Russia"><li>Russia</li></a>
';}echo '</ul></li>';
echo '<li>S<ul>';
if ($lang == 'en') {echo '<a title="Samoa Island" href="'.home_url().'/?lang=en&tag_index=Samoa Island"><li>Samoa Island</li></a>
';}elseif($lang == 'ja'){echo '<a title="Samoa Island" href="'.home_url().'/?lang=ja&tag_index=Samoa Island"><li>Samoa Island</li></a>
';}if ($lang == 'en') {echo '<a title="SASEC" href="'.home_url().'/?lang=en&tag_index=SASEC"><li>SASEC</li></a>
';}elseif($lang == 'ja'){echo '<a title="SASEC" href="'.home_url().'/?lang=ja&tag_index=SASEC"><li>SASEC</li></a>
';}if ($lang == 'en') {echo '<a title="Singapore" href="'.home_url().'/?lang=en&tag_index=Singapore"><li>Singapore</li></a>
';}elseif($lang == 'ja'){echo '<a title="Singapore" href="'.home_url().'/?lang=ja&tag_index=Singapore"><li>Singapore</li></a>
';}if ($lang == 'en') {echo '<a title="Solomon Islands" href="'.home_url().'/?lang=en&tag_index=Solomon Islands"><li>Solomon Islands</li></a>
';}elseif($lang == 'ja'){echo '<a title="Solomon Islands" href="'.home_url().'/?lang=ja&tag_index=Solomon Islands"><li>Solomon Islands</li></a>
';}if ($lang == 'en') {echo '<a title="Spain" href="'.home_url().'/?lang=en&tag_index=Spain"><li>Spain</li></a>
';}elseif($lang == 'ja'){echo '<a title="Spain" href="'.home_url().'/?lang=ja&tag_index=Spain"><li>Spain</li></a>
';}if ($lang == 'en') {echo '<a title="Sri Lanka" href="'.home_url().'/?lang=en&tag_index=Sri Lanka"><li>Sri Lanka</li></a>
';}elseif($lang == 'ja'){echo '<a title="Sri Lanka" href="'.home_url().'/?lang=ja&tag_index=Sri Lanka"><li>Sri Lanka</li></a>
';}if ($lang == 'en') {echo '<a title="Sweden" href="'.home_url().'/?lang=en&tag_index=Sweden"><li>Sweden</li></a>
';}elseif($lang == 'ja'){echo '<a title="Sweden" href="'.home_url().'/?lang=ja&tag_index=Sweden"><li>Sweden</li></a>
';}echo '</ul></li>';
echo '<li>T<ul>';
if ($lang == 'en') {echo '<a title="Tajikistan" href="'.home_url().'/?lang=en&tag_index=Tajikistan"><li>Tajikistan</li></a>
';}elseif($lang == 'ja'){echo '<a title="Tajikistan" href="'.home_url().'/?lang=ja&tag_index=Tajikistan"><li>Tajikistan</li></a>
';}if ($lang == 'en') {echo '<a title="Thailand" href="'.home_url().'/?lang=en&tag_index=Thailand"><li>Thailand</li></a>
';}elseif($lang == 'ja'){echo '<a title="Thailand" href="'.home_url().'/?lang=ja&tag_index=Thailand"><li>Thailand</li></a>
';}if ($lang == 'en') {echo '<a title="Timor-Leste" href="'.home_url().'/?lang=en&tag_index=Timor-Leste"><li>Timor-Leste</li></a>
';}elseif($lang == 'ja'){echo '<a title="Timor-Leste" href="'.home_url().'/?lang=ja&tag_index=Timor-Leste"><li>Timor-Leste</li></a>
';}if ($lang == 'en') {echo '<a title="Tonga" href="'.home_url().'/?lang=en&tag_index=Tonga"><li>Tonga</li></a>
';}elseif($lang == 'ja'){echo '<a title="Tonga" href="'.home_url().'/?lang=ja&tag_index=Tonga"><li>Tonga</li></a>
';}if ($lang == 'en') {echo '<a title="Turkmenistan" href="'.home_url().'/?lang=en&tag_index=Turkmenistan"><li>Turkmenistan</li></a>
';}elseif($lang == 'ja'){echo '<a title="Turkmenistan" href="'.home_url().'/?lang=ja&tag_index=Turkmenistan"><li>Turkmenistan</li></a>
';}echo '</ul></li>';
echo '<li>U<ul>';
if ($lang == 'en') {echo '<a title="UK" href="'.home_url().'/?lang=en&tag_index=UK"><li>UK</li></a>
';}elseif($lang == 'ja'){echo '<a title="UK" href="'.home_url().'/?lang=ja&tag_index=UK"><li>UK</li></a>
';}if ($lang == 'en') {echo '<a title="US" href="'.home_url().'/?lang=en&tag_index=US"><li>US</li></a>
';}elseif($lang == 'ja'){echo '<a title="US" href="'.home_url().'/?lang=ja&tag_index=US"><li>US</li></a>
';}if ($lang == 'en') {echo '<a title="Uzbekistan" href="'.home_url().'/?lang=en&tag_index=Uzbekistan"><li>Uzbekistan</li></a>
';}elseif($lang == 'ja'){echo '<a title="Uzbekistan" href="'.home_url().'/?lang=ja&tag_index=Uzbekistan"><li>Uzbekistan</li></a>
';}echo '</ul></li>';
echo '<li>V<ul>';
if ($lang == 'en') {echo '<a title="Vanuatu" href="'.home_url().'/?lang=en&tag_index=Vanuatu"><li>Vanuatu</li></a>
';}elseif($lang == 'ja'){echo '<a title="Vanuatu" href="'.home_url().'/?lang=ja&tag_index=Vanuatu"><li>Vanuatu</li></a>
';}if ($lang == 'en') {echo '<a title="Viet Nam" href="'.home_url().'/?lang=en&tag_index=Viet Nam"><li>Viet Nam</li></a>
';}elseif($lang == 'ja'){echo '<a title="Viet Nam" href="'.home_url().'/?lang=ja&tag_index=Viet Nam"><li>Viet Nam</li></a>
';}echo '</ul></li>';
 ?>

	</div>	
	<div id="nav-sector">
	<ul class="menu">
		<?php 
			if($lang == 'en') {
				echo '<li id="item-header" style="width:10em;">By Sector</li>';
			}elseif($lang == 'ja'){
				echo '<li id="item-header" style="width:5em;">セクター別</li>';
			}
		
if($lang=='en'){echo '<li>Policy <ul>';}elseif($lang=='ja'){echo '<li>政策<ul>';}
if($lang=='en'){echo '<a title="Energy Policy" href="'.home_url().'/?lang=en&tag_index=Energy Policy"><li>Energy Policy</li></a>';}elseif($lang=='ja'){echo '<a title="エネルギー政策" href="'.home_url().'/?lang=ja&tag_index=エネルギー政策"><li>エネルギー政策</li></a>';}
if($lang=='en'){echo '<a title="Unbundling" href="'.home_url().'/?lang=en&tag_index=Unbundling"><li>Unbundling</li></a>';}elseif($lang=='ja'){echo '<a title="発送分離" href="'.home_url().'/?lang=ja&tag_index=発送分離"><li>発送分離</li></a>';}
if($lang=='en'){echo '<a title="Power Trade" href="'.home_url().'/?lang=en&tag_index=Power Trade"><li>Power Trade</li></a>';}elseif($lang=='ja'){echo '<a title="電力取引" href="'.home_url().'/?lang=ja&tag_index=電力取引"><li>電力取引</li></a>';}
if($lang=='en'){echo '<a title="Power Retail" href="'.home_url().'/?lang=en&tag_index=Power Retail"><li>Power Retail</li></a>';}elseif($lang=='ja'){echo '<a title="電力小売" href="'.home_url().'/?lang=ja&tag_index=電力小売"><li>電力小売</li></a>';}
if($lang=='en'){echo '<a title="Power Sector Reform" href="'.home_url().'/?lang=en&tag_index=Power Sector Reform"><li>Power Sector Reform</li></a>';}elseif($lang=='ja'){echo '<a title="電力自由化" href="'.home_url().'/?lang=ja&tag_index=電力自由化"><li>電力自由化</li></a>';}
if($lang=='en'){echo '<a title="Tariff Reform" href="'.home_url().'/?lang=en&tag_index=Tariff Reform"><li>Tariff Reform</li></a>';}elseif($lang=='ja'){echo '<a title="料金制度改革" href="'.home_url().'/?lang=ja&tag_index=料金制度改革"><li>料金制度改革</li></a>';}
if($lang=='en'){echo '<a title="Gas Sector Reform" href="'.home_url().'/?lang=en&tag_index=Gas Sector Reform"><li>Gas Sector Reform</li></a>';}elseif($lang=='ja'){echo '<a title="ガス自由化" href="'.home_url().'/?lang=ja&tag_index=ガス自由化"><li>ガス自由化</li></a>';}
if($lang=='en'){echo '<a title="Environment Technology" href="'.home_url().'/?lang=en&tag_index=Environment Technology"><li>Environment Technology</li></a>';}elseif($lang=='ja'){echo '<a title="環境技術" href="'.home_url().'/?lang=ja&tag_index=環境技術"><li>環境技術</li></a>';}
if($lang=='en'){echo '<a title="Climate Change" href="'.home_url().'/?lang=en&tag_index=Climate Change"><li>Climate Change</li></a>';}elseif($lang=='ja'){echo '<a title="気候変動" href="'.home_url().'/?lang=ja&tag_index=気候変動"><li>気候変動</li></a>';}
if($lang=='en'){echo '<a title="Regional Cooperation" href="'.home_url().'/?lang=en&tag_index=Regional Cooperation"><li>Regional Cooperation</li></a>';}elseif($lang=='ja'){echo '<a title="国際協力" href="'.home_url().'/?lang=ja&tag_index=国際協力"><li>国際協力</li></a>';}
if($lang=='en'){echo '<a title="APEC" href="'.home_url().'/?lang=en&tag_index=APEC"><li>APEC</li></a>';}elseif($lang=='ja'){echo '<a title="エイペック" href="'.home_url().'/?lang=ja&tag_index=エイペック"><li>エイペック</li></a>';}
if($lang=='en'){echo '<a title="East Asia" href="'.home_url().'/?lang=en&tag_index=East Asia"><li>East Asia</li></a>';}elseif($lang=='ja'){echo '<a title="東アジア連携" href="'.home_url().'/?lang=ja&tag_index=東アジア連携"><li>東アジア連携</li></a>';}
if($lang=='en'){echo '<a title="RECEP" href="'.home_url().'/?lang=en&tag_index=RECEP"><li>RECEP</li></a>';}elseif($lang=='ja'){echo '<a title="アールセップ" href="'.home_url().'/?lang=ja&tag_index=アールセップ"><li>アールセップ</li></a>';}
if($lang=='en'){echo '<a title="WTO" href="'.home_url().'/?lang=en&tag_index=WTO"><li>WTO</li></a>';}elseif($lang=='ja'){echo '<a title="WTO" href="'.home_url().'/?lang=ja&tag_index=WTO"><li>WTO</li></a>';}
if($lang=='en'){echo '<a title="System Export" href="'.home_url().'/?lang=en&tag_index=System Export"><li>System Export</li></a>';}elseif($lang=='ja'){echo '<a title="インフラ輸出" href="'.home_url().'/?lang=ja&tag_index=インフラ輸出"><li>インフラ輸出</li></a>';}
if($lang=='en'){echo '<a title="JCM" href="'.home_url().'/?lang=en&tag_index=JCM"><li>JCM</li></a>';}elseif($lang=='ja'){echo '<a title="二国間クレジット" href="'.home_url().'/?lang=ja&tag_index=二国間クレジット"><li>二国間クレジット</li></a>';}
if($lang=='en'){echo '<a title="GCF" href="'.home_url().'/?lang=en&tag_index=GCF"><li>GCF</li></a>';}elseif($lang=='ja'){echo '<a title="緑の気候基金" href="'.home_url().'/?lang=ja&tag_index=緑の気候基金"><li>緑の気候基金</li></a>';}
if($lang=='en'){echo '<a title="Globalization" href="'.home_url().'/?lang=en&tag_index=Globalization"><li>Globalization</li></a>';}elseif($lang=='ja'){echo '<a title="グローバリゼーション" href="'.home_url().'/?lang=ja&tag_index=グローバリゼーション"><li>グローバリゼーション</li></a>';}
if($lang=='en'){echo '</ul></li><li>Innovation<ul>';}elseif($lang=='ja'){echo '</ul></li><li>イノベーション<ul>';}
if($lang=='en'){echo '<a title="Distribution Smart grid" href="'.home_url().'/?lang=en&tag_index=Distribution Smart grid"><li>Distribution Smart grid</li></a>';}elseif($lang=='ja'){echo '<a title="スマートコミュニテイ" href="'.home_url().'/?lang=ja&tag_index=スマートコミュニテイ"><li>スマートコミュニテイ</li></a>';}
if($lang=='en'){echo '<a title="Smart Meter" href="'.home_url().'/?lang=en&tag_index=Smart Meter"><li>Smart Meter</li></a>';}elseif($lang=='ja'){echo '<a title="スマートメータ" href="'.home_url().'/?lang=ja&tag_index=スマートメータ"><li>スマートメータ</li></a>';}
if($lang=='en'){echo '<a title="Urban Microgrid" href="'.home_url().'/?lang=en&tag_index=Urban Microgrid"><li>Urban Microgrid</li></a>';}elseif($lang=='ja'){echo '<a title="都市型マイクログリッド" href="'.home_url().'/?lang=ja&tag_index=都市型マイクログリッド"><li>都市型マイクログリッド</li></a>';}
if($lang=='en'){echo '<a title="Rural Microgrid" href="'.home_url().'/?lang=en&tag_index=Rural Microgrid"><li>Rural Microgrid</li></a>';}elseif($lang=='ja'){echo '<a title="農村型マイクログリッド" href="'.home_url().'/?lang=ja&tag_index=農村型マイクログリッド"><li>農村型マイクログリッド</li></a>';}
if($lang=='en'){echo '<a title="Agribusiness" href="'.home_url().'/?lang=en&tag_index=Agribusiness"><li>Agribusiness</li></a>';}elseif($lang=='ja'){echo '<a title="アグリビジネス" href="'.home_url().'/?lang=ja&tag_index=アグリビジネス"><li>アグリビジネス</li></a>';}
if($lang=='en'){echo '<a title="Battery Storage" href="'.home_url().'/?lang=en&tag_index=Battery Storage"><li>Battery Storage</li></a>';}elseif($lang=='ja'){echo '<a title="電池" href="'.home_url().'/?lang=ja&tag_index=電池"><li>電池</li></a>';}
if($lang=='en'){echo '<a title="Hydrogen" href="'.home_url().'/?lang=en&tag_index=Hydrogen"><li>Hydrogen</li></a>';}elseif($lang=='ja'){echo '<a title="水素" href="'.home_url().'/?lang=ja&tag_index=水素"><li>水素</li></a>';}
if($lang=='en'){echo '<a title="Fuel Cell Battery" href="'.home_url().'/?lang=en&tag_index=Fuel Cell Battery"><li>Fuel Cell Battery</li></a>';}elseif($lang=='ja'){echo '<a title="燃料電池" href="'.home_url().'/?lang=ja&tag_index=燃料電池"><li>燃料電池</li></a>';}
if($lang=='en'){echo '<a title="Big Data" href="'.home_url().'/?lang=en&tag_index=Big Data"><li>Big Data</li></a>';}elseif($lang=='ja'){echo '<a title="電力ビッグデータ" href="'.home_url().'/?lang=ja&tag_index=電力ビッグデータ"><li>電力ビッグデータ</li></a>';}
if($lang=='en'){echo '<a title="Transmission Smart grid" href="'.home_url().'/?lang=en&tag_index=Transmission Smart grid"><li>Transmission Smart grid</li></a>';}elseif($lang=='ja'){echo '<a title="送電スマートグリッド" href="'.home_url().'/?lang=ja&tag_index=送電スマートグリッド"><li>送電スマートグリッド</li></a>';}
if($lang=='en'){echo '<a title="Share" href="'.home_url().'/?lang=en&tag_index=Share"><li>Share</li></a>';}elseif($lang=='ja'){echo '<a title="シェア" href="'.home_url().'/?lang=ja&tag_index=シェア"><li>シェア</li></a>';}
if($lang=='en'){echo '<a title="bitcoin" href="'.home_url().'/?lang=en&tag_index=bitcoin"><li>bitcoin</li></a>';}elseif($lang=='ja'){echo '<a title="仮想通貨" href="'.home_url().'/?lang=ja&tag_index=仮想通貨"><li>仮想通貨</li></a>';}
if($lang=='en'){echo '<a title="Smartgrid" href="'.home_url().'/?lang=en&tag_index=Smartgrid"><li>Smartgrid</li></a>';}elseif($lang=='ja'){echo '<a title="スマートグリッド" href="'.home_url().'/?lang=ja&tag_index=スマートグリッド"><li>スマートグリッド</li></a>';}
if($lang=='en'){echo '<a title="robot" href="'.home_url().'/?lang=en&tag_index=robot"><li>robot</li></a>';}elseif($lang=='ja'){echo '<a title="ロボット" href="'.home_url().'/?lang=ja&tag_index=ロボット"><li>ロボット</li></a>';}
if($lang=='en'){echo '<a title="ccs" href="'.home_url().'/?lang=en&tag_index=ccs"><li>ccs</li></a>';}elseif($lang=='ja'){echo '<a title="ＣＯ2回収" href="'.home_url().'/?lang=ja&tag_index=ＣＯ2回収"><li>ＣＯ2回収</li></a>';}
if($lang=='en'){echo '<a title="Health" href="'.home_url().'/?lang=en&tag_index=Health"><li>Health</li></a>';}elseif($lang=='ja'){echo '<a title="ヘルスケア" href="'.home_url().'/?lang=ja&tag_index=ヘルスケア"><li>ヘルスケア</li></a>';}
if($lang=='en'){echo '</ul></li><li>Generation<ul>';}elseif($lang=='ja'){echo '</ul></li><li>電力<ul>';}
if($lang=='en'){echo '<a title="Clean Energy" href="'.home_url().'/?lang=en&tag_index=Clean Energy"><li>Clean Energy</li></a>';}elseif($lang=='ja'){echo '<a title="クリーンエネルギー" href="'.home_url().'/?lang=ja&tag_index=クリーンエネルギー"><li>クリーンエネルギー</li></a>';}
if($lang=='en'){echo '<a title="Nuclear Power Generation" href="'.home_url().'/?lang=en&tag_index=Nuclear Power Generation"><li>Nuclear Power Generation</li></a>';}elseif($lang=='ja'){echo '<a title="原子力" href="'.home_url().'/?lang=ja&tag_index=原子力"><li>原子力</li></a>';}
if($lang=='en'){echo '<a title="Thermal Power" href="'.home_url().'/?lang=en&tag_index=Thermal Power"><li>Thermal Power</li></a>';}elseif($lang=='ja'){echo '<a title="火力発電" href="'.home_url().'/?lang=ja&tag_index=火力発電"><li>火力発電</li></a>';}
if($lang=='en'){echo '<a title="Coal Power Generation" href="'.home_url().'/?lang=en&tag_index=Coal Power Generation"><li>Coal Power Generation</li></a>';}elseif($lang=='ja'){echo '<a title="石炭火力" href="'.home_url().'/?lang=ja&tag_index=石炭火力"><li>石炭火力</li></a>';}
if($lang=='en'){echo '<a title="IGCC" href="'.home_url().'/?lang=en&tag_index=IGCC"><li>IGCC</li></a>';}elseif($lang=='ja'){echo '<a title="石炭ガス化" href="'.home_url().'/?lang=ja&tag_index=石炭ガス化"><li>石炭ガス化</li></a>';}
if($lang=='en'){echo '<a title="Shale Gas Power Generation" href="'.home_url().'/?lang=en&tag_index=Shale Gas Power Generation"><li>Shale Gas Power Generation</li></a>';}elseif($lang=='ja'){echo '<a title="シェールガス" href="'.home_url().'/?lang=ja&tag_index=シェールガス"><li>シェールガス</li></a>';}
if($lang=='en'){echo '<a title="Cogeneration" href="'.home_url().'/?lang=en&tag_index=Cogeneration"><li>Cogeneration</li></a>';}elseif($lang=='ja'){echo '<a title="コジェネ" href="'.home_url().'/?lang=ja&tag_index=コジェネ"><li>コジェネ</li></a>';}
if($lang=='en'){echo '<a title="LNG" href="'.home_url().'/?lang=en&tag_index=LNG"><li>LNG</li></a>';}elseif($lang=='ja'){echo '<a title="ガス発電" href="'.home_url().'/?lang=ja&tag_index=ガス発電"><li>ガス発電</li></a>';}
if($lang=='en'){echo '<a title="Heating" href="'.home_url().'/?lang=en&tag_index=Heating"><li>Heating</li></a>';}elseif($lang=='ja'){echo '<a title="熱供給事業" href="'.home_url().'/?lang=ja&tag_index=熱供給事業"><li>熱供給事業</li></a>';}
if($lang=='en'){echo '<a title="Combined Cycle" href="'.home_url().'/?lang=en&tag_index=Combined Cycle"><li>Combined Cycle</li></a>';}elseif($lang=='ja'){echo '<a title="コンバインドサイクル発電" href="'.home_url().'/?lang=ja&tag_index=コンバインドサイクル発電"><li>コンバインドサイクル発電</li></a>';}
if($lang=='en'){echo '<a title="Hydro" href="'.home_url().'/?lang=en&tag_index=Hydro"><li>Hydro</li></a>';}elseif($lang=='ja'){echo '<a title="水力発電" href="'.home_url().'/?lang=ja&tag_index=水力発電"><li>水力発電</li></a>';}
if($lang=='en'){echo '<a title="Retail" href="'.home_url().'/?lang=en&tag_index=Retail"><li>Retail</li></a>';}elseif($lang=='ja'){echo '<a title="電力小売" href="'.home_url().'/?lang=ja&tag_index=電力小売"><li>電力小売</li></a>';}
if($lang=='en'){echo '<a title="Home Appliance" href="'.home_url().'/?lang=en&tag_index=Home Appliance"><li>Home Appliance</li></a>';}elseif($lang=='ja'){echo '<a title="家電" href="'.home_url().'/?lang=ja&tag_index=家電"><li>家電</li></a>';}
if($lang=='en'){echo '<a title="TEPCO" href="'.home_url().'/?lang=en&tag_index=TEPCO"><li>TEPCO</li></a>';}elseif($lang=='ja'){echo '<a title="東京電力" href="'.home_url().'/?lang=ja&tag_index=東京電力"><li>東京電力</li></a>';}
if($lang=='en'){echo '</ul></li><li>Renewable Energy<ul>';}elseif($lang=='ja'){echo '</ul></li><li>再生可能エネルギー<ul>';}
if($lang=='en'){echo '<a title="RE" href="'.home_url().'/?lang=en&tag_index=RE"><li>RE</li></a>';}elseif($lang=='ja'){echo '<a title="再生可能エネルギー" href="'.home_url().'/?lang=ja&tag_index=再生可能エネルギー"><li>再生可能エネルギー</li></a>';}
if($lang=='en'){echo '<a title="PV" href="'.home_url().'/?lang=en&tag_index=PV"><li>PV</li></a>';}elseif($lang=='ja'){echo '<a title="太陽光発電" href="'.home_url().'/?lang=ja&tag_index=太陽光発電"><li>太陽光発電</li></a>';}
if($lang=='en'){echo '<a title="CSP" href="'.home_url().'/?lang=en&tag_index=CSP"><li>CSP</li></a>';}elseif($lang=='ja'){echo '<a title="太陽熱発電" href="'.home_url().'/?lang=ja&tag_index=太陽熱発電"><li>太陽熱発電</li></a>';}
if($lang=='en'){echo '<a title="Biomass" href="'.home_url().'/?lang=en&tag_index=Biomass"><li>Biomass</li></a>';}elseif($lang=='ja'){echo '<a title="バイオマス発電" href="'.home_url().'/?lang=ja&tag_index=バイオマス発電"><li>バイオマス発電</li></a>';}
if($lang=='en'){echo '<a title="Wind" href="'.home_url().'/?lang=en&tag_index=Wind"><li>Wind</li></a>';}elseif($lang=='ja'){echo '<a title="風力発電" href="'.home_url().'/?lang=ja&tag_index=風力発電"><li>風力発電</li></a>';}
if($lang=='en'){echo '<a title="Geothermal" href="'.home_url().'/?lang=en&tag_index=Geothermal"><li>Geothermal</li></a>';}elseif($lang=='ja'){echo '<a title="地熱発電" href="'.home_url().'/?lang=ja&tag_index=地熱発電"><li>地熱発電</li></a>';}
if($lang=='en'){echo '<a title="MSW" href="'.home_url().'/?lang=en&tag_index=MSW"><li>MSW</li></a>';}elseif($lang=='ja'){echo '<a title="ゴミ発電" href="'.home_url().'/?lang=ja&tag_index=ゴミ発電"><li>ゴミ発電</li></a>';}
if($lang=='en'){echo '<a title="Mini-hydro" href="'.home_url().'/?lang=en&tag_index=Mini-hydro"><li>Mini-hydro</li></a>';}elseif($lang=='ja'){echo '<a title="小水力発電" href="'.home_url().'/?lang=ja&tag_index=小水力発電"><li>小水力発電</li></a>';}
if($lang=='en'){echo '</ul></li><li>Energy Efficiency<ul>';}elseif($lang=='ja'){echo '</ul></li><li>省エネ<ul>';}
if($lang=='en'){echo '<a title="Energy Efficiency" href="'.home_url().'/?lang=en&tag_index=Energy Efficiency"><li>Energy Efficiency</li></a>';}elseif($lang=='ja'){echo '<a title="省エネ" href="'.home_url().'/?lang=ja&tag_index=省エネ"><li>省エネ</li></a>';}
if($lang=='en'){echo '<a title="Demand Response" href="'.home_url().'/?lang=en&tag_index=Demand Response"><li>Demand Response</li></a>';}elseif($lang=='ja'){echo '<a title="デマンドレスポンス" href="'.home_url().'/?lang=ja&tag_index=デマンドレスポンス"><li>デマンドレスポンス</li></a>';}
if($lang=='en'){echo '<a title="EMS" href="'.home_url().'/?lang=en&tag_index=EMS"><li>EMS</li></a>';}elseif($lang=='ja'){echo '<a title="エネルギーマネージメントシステム" href="'.home_url().'/?lang=ja&tag_index=エネルギーマネージメントシステム"><li>エネルギーマネージメントシステム</li></a>';}
if($lang=='en'){echo '<a title="Energy Service Company" href="'.home_url().'/?lang=en&tag_index=Energy Service Company"><li>Energy Service Company</li></a>';}elseif($lang=='ja'){echo '<a title="エスコ" href="'.home_url().'/?lang=ja&tag_index=エスコ"><li>エスコ</li></a>';}
if($lang=='en'){echo '</ul></li><li>Telecommunication<ul>';}elseif($lang=='ja'){echo '</ul></li><li>通信<ul>';}
if($lang=='en'){echo '<a title="Telecommunication " href="'.home_url().'/?lang=en&tag_index=Telecommunication "><li>Telecommunication </li></a>';}elseif($lang=='ja'){echo '<a title="通信網" href="'.home_url().'/?lang=ja&tag_index=通信網"><li>通信網</li></a>';}
if($lang=='en'){echo '<a title="Smart Phone" href="'.home_url().'/?lang=en&tag_index=Smart Phone"><li>Smart Phone</li></a>';}elseif($lang=='ja'){echo '<a title="スマートフォン" href="'.home_url().'/?lang=ja&tag_index=スマートフォン"><li>スマートフォン</li></a>';}
if($lang=='en'){echo '</ul></li><li>Transport<ul>';}elseif($lang=='ja'){echo '</ul></li><li>交通<ul>';}
if($lang=='en'){echo '<a title="Green Transport" href="'.home_url().'/?lang=en&tag_index=Green Transport"><li>Green Transport</li></a>';}elseif($lang=='ja'){echo '<a title="グリーントランスポート" href="'.home_url().'/?lang=ja&tag_index=グリーントランスポート"><li>グリーントランスポート</li></a>';}
if($lang=='en'){echo '<a title="EV" href="'.home_url().'/?lang=en&tag_index=EV"><li>EV</li></a>';}elseif($lang=='ja'){echo '<a title="電気自動車" href="'.home_url().'/?lang=ja&tag_index=電気自動車"><li>電気自動車</li></a>';}
if($lang=='en'){echo '<a title="Fuel Cell Car" href="'.home_url().'/?lang=en&tag_index=Fuel Cell Car"><li>Fuel Cell Car</li></a>';}elseif($lang=='ja'){echo '<a title="燃料電池車" href="'.home_url().'/?lang=ja&tag_index=燃料電池車"><li>燃料電池車</li></a>';}
if($lang=='en'){echo '<a title="Car" href="'.home_url().'/?lang=en&tag_index=Car"><li>Car</li></a>';}elseif($lang=='ja'){echo '<a title="エコカー" href="'.home_url().'/?lang=ja&tag_index=エコカー"><li>エコカー</li></a>';}
if($lang=='en'){echo '<a title="PHV" href="'.home_url().'/?lang=en&tag_index=PHV"><li>PHV</li></a>';}elseif($lang=='ja'){echo '<a title="ハイブリッド車" href="'.home_url().'/?lang=ja&tag_index=ハイブリッド車"><li>ハイブリッド車</li></a>';}
if($lang=='en'){echo '<a title="Small Vehicle" href="'.home_url().'/?lang=en&tag_index=Small Vehicle"><li>Small Vehicle</li></a>';}elseif($lang=='ja'){echo '<a title="小型自動車" href="'.home_url().'/?lang=ja&tag_index=小型自動車"><li>小型自動車</li></a>';}
if($lang=='en'){echo '<a title="Automatic Drive" href="'.home_url().'/?lang=en&tag_index=Automatic Drive"><li>Automatic Drive</li></a>';}elseif($lang=='ja'){echo '<a title="自動運転" href="'.home_url().'/?lang=ja&tag_index=自動運転"><li>自動運転</li></a>';}
if($lang=='en'){echo '<a title="Transport Policy" href="'.home_url().'/?lang=en&tag_index=Transport Policy"><li>Transport Policy</li></a>';}elseif($lang=='ja'){echo '<a title="交通システム" href="'.home_url().'/?lang=ja&tag_index=交通システム"><li>交通システム</li></a>';}
if($lang=='en'){echo '<a title="Urban Transport" href="'.home_url().'/?lang=en&tag_index=Urban Transport"><li>Urban Transport</li></a>';}elseif($lang=='ja'){echo '<a title="都市交通" href="'.home_url().'/?lang=ja&tag_index=都市交通"><li>都市交通</li></a>';}
if($lang=='en'){echo '<a title="Multi-Modal Transport" href="'.home_url().'/?lang=en&tag_index=Multi-Modal Transport"><li>Multi-Modal Transport</li></a>';}elseif($lang=='ja'){echo '<a title="複合交通" href="'.home_url().'/?lang=ja&tag_index=複合交通"><li>複合交通</li></a>';}
if($lang=='en'){echo '<a title="Railway" href="'.home_url().'/?lang=en&tag_index=Railway"><li>Railway</li></a>';}elseif($lang=='ja'){echo '<a title="鉄道" href="'.home_url().'/?lang=ja&tag_index=鉄道"><li>鉄道</li></a>';}
if($lang=='en'){echo '<a title="Air Transport" href="'.home_url().'/?lang=en&tag_index=Air Transport"><li>Air Transport</li></a>';}elseif($lang=='ja'){echo '<a title="空運" href="'.home_url().'/?lang=ja&tag_index=空運"><li>空運</li></a>';}
if($lang=='en'){echo '<a title="Water Transport" href="'.home_url().'/?lang=en&tag_index=Water Transport"><li>Water Transport</li></a>';}elseif($lang=='ja'){echo '<a title="水運" href="'.home_url().'/?lang=ja&tag_index=水運"><li>水運</li></a>';}
if($lang=='en'){echo '<a title="Ship" href="'.home_url().'/?lang=en&tag_index=Ship"><li>Ship</li></a>';}elseif($lang=='ja'){echo '<a title="ハイブリッド船" href="'.home_url().'/?lang=ja&tag_index=ハイブリッド船"><li>ハイブリッド船</li></a>';}
if($lang=='en'){echo '<a title="Port" href="'.home_url().'/?lang=en&tag_index=Port"><li>Port</li></a>';}elseif($lang=='ja'){echo '<a title="港湾" href="'.home_url().'/?lang=ja&tag_index=港湾"><li>港湾</li></a>';}
if($lang=='en'){echo '<a title="Logistics" href="'.home_url().'/?lang=en&tag_index=Logistics"><li>Logistics</li></a>';}elseif($lang=='ja'){echo '<a title="ロジスティクス" href="'.home_url().'/?lang=ja&tag_index=ロジスティクス"><li>ロジスティクス</li></a>';}
if($lang=='en'){echo '<a title="Cross-border Road" href="'.home_url().'/?lang=en&tag_index=Cross-border Road"><li>Cross-border Road</li></a>';}elseif($lang=='ja'){echo '<a title="国際道路" href="'.home_url().'/?lang=ja&tag_index=国際道路"><li>国際道路</li></a>';}
if($lang=='en'){echo '<a title="Cross-border Railway" href="'.home_url().'/?lang=en&tag_index=Cross-border Railway"><li>Cross-border Railway</li></a>';}elseif($lang=='ja'){echo '<a title="国際鉄道" href="'.home_url().'/?lang=ja&tag_index=国際鉄道"><li>国際鉄道</li></a>';}
if($lang=='en'){echo '<a title="District Road" href="'.home_url().'/?lang=en&tag_index=District Road"><li>District Road</li></a>';}elseif($lang=='ja'){echo '<a title="幹線道路" href="'.home_url().'/?lang=ja&tag_index=幹線道路"><li>幹線道路</li></a>';}
if($lang=='en'){echo '<a title="Rural Road" href="'.home_url().'/?lang=en&tag_index=Rural Road"><li>Rural Road</li></a>';}elseif($lang=='ja'){echo '<a title="地方道路" href="'.home_url().'/?lang=ja&tag_index=地方道路"><li>地方道路</li></a>';}
if($lang=='en'){echo '<a title="Safety" href="'.home_url().'/?lang=en&tag_index=Safety"><li>Safety</li></a>';}elseif($lang=='ja'){echo '<a title="安全" href="'.home_url().'/?lang=ja&tag_index=安全"><li>安全</li></a>';}
if($lang=='en'){echo '<a title="Traffic Demand management" href="'.home_url().'/?lang=en&tag_index=Traffic Demand management"><li>Traffic Demand management</li></a>';}elseif($lang=='ja'){echo '<a title="交通量管理" href="'.home_url().'/?lang=ja&tag_index=交通量管理"><li>交通量管理</li></a>';}
if($lang=='en'){echo '<a title="Custom" href="'.home_url().'/?lang=en&tag_index=Custom"><li>Custom</li></a>';}elseif($lang=='ja'){echo '<a title="関税" href="'.home_url().'/?lang=ja&tag_index=関税"><li>関税</li></a>';}
if($lang=='en'){echo '</ul></li><li>Urban and Water<ul>';}elseif($lang=='ja'){echo '</ul></li><li>都市<ul>';}
if($lang=='en'){echo '<a title="Urban" href="'.home_url().'/?lang=en&tag_index=Urban"><li>Urban</li></a>';}elseif($lang=='ja'){echo '<a title="都市" href="'.home_url().'/?lang=ja&tag_index=都市"><li>都市</li></a>';}
if($lang=='en'){echo '<a title="Water Supply" href="'.home_url().'/?lang=en&tag_index=Water Supply"><li>Water Supply</li></a>';}elseif($lang=='ja'){echo '<a title="水供給" href="'.home_url().'/?lang=ja&tag_index=水供給"><li>水供給</li></a>';}
if($lang=='en'){echo '<a title="Sanitation" href="'.home_url().'/?lang=en&tag_index=Sanitation"><li>Sanitation</li></a>';}elseif($lang=='ja'){echo '<a title="下水道" href="'.home_url().'/?lang=ja&tag_index=下水道"><li>下水道</li></a>';}
if($lang=='en'){echo '<a title="Waste Management" href="'.home_url().'/?lang=en&tag_index=Waste Management"><li>Waste Management</li></a>';}elseif($lang=='ja'){echo '<a title="ゴミ処理" href="'.home_url().'/?lang=ja&tag_index=ゴミ処理"><li>ゴミ処理</li></a>';}
if($lang=='en'){echo '<a title="Urban Planning" href="'.home_url().'/?lang=en&tag_index=Urban Planning"><li>Urban Planning</li></a>';}elseif($lang=='ja'){echo '<a title="都市計画" href="'.home_url().'/?lang=ja&tag_index=都市計画"><li>都市計画</li></a>';}
if($lang=='en'){echo '<a title="Low-carbon City" href="'.home_url().'/?lang=en&tag_index=Low-carbon City"><li>Low-carbon City</li></a>';}elseif($lang=='ja'){echo '<a title="低炭素都市" href="'.home_url().'/?lang=ja&tag_index=低炭素都市"><li>低炭素都市</li></a>';}
if($lang=='en'){echo '</ul></li><li>Thematic<ul>';}elseif($lang=='ja'){echo '</ul></li><li>テーマ<ul>';}
if($lang=='en'){echo '<a title="PPP for Infrastructure" href="'.home_url().'/?lang=en&tag_index=PPP for Infrastructure"><li>PPP for Infrastructure</li></a>';}elseif($lang=='ja'){echo '<a title="官民パートナーシップ" href="'.home_url().'/?lang=ja&tag_index=官民パートナーシップ"><li>官民パートナーシップ</li></a>';}
if($lang=='en'){echo '<a title="Innovative Finance" href="'.home_url().'/?lang=en&tag_index=Innovative Finance"><li>Innovative Finance</li></a>';}elseif($lang=='ja'){echo '<a title="革新的金融" href="'.home_url().'/?lang=ja&tag_index=革新的金融"><li>革新的金融</li></a>';}
if($lang=='en'){echo '<a title="Microfinance" href="'.home_url().'/?lang=en&tag_index=Microfinance"><li>Microfinance</li></a>';}elseif($lang=='ja'){echo '<a title="マイクロファイナンス" href="'.home_url().'/?lang=ja&tag_index=マイクロファイナンス"><li>マイクロファイナンス</li></a>';}
if($lang=='en'){echo '<a title="SMEfinance" href="'.home_url().'/?lang=en&tag_index=SMEfinance"><li>SMEfinance</li></a>';}elseif($lang=='ja'){echo '<a title="中小企業金融" href="'.home_url().'/?lang=ja&tag_index=中小企業金融"><li>中小企業金融</li></a>';}
if($lang=='en'){echo '<a title="Cloud Funding" href="'.home_url().'/?lang=en&tag_index=Cloud Funding"><li>Cloud Funding</li></a>';}elseif($lang=='ja'){echo '<a title="クラウドファンディング" href="'.home_url().'/?lang=ja&tag_index=クラウドファンディング"><li>クラウドファンディング</li></a>';}
if($lang=='en'){echo '<a title="Green Financing Instrument" href="'.home_url().'/?lang=en&tag_index=Green Financing Instrument"><li>Green Financing Instrument</li></a>';}elseif($lang=='ja'){echo '<a title="グリーンファイナンス" href="'.home_url().'/?lang=ja&tag_index=グリーンファイナンス"><li>グリーンファイナンス</li></a>';}
if($lang=='en'){echo '<a title="Innovative Policy" href="'.home_url().'/?lang=en&tag_index=Innovative Policy"><li>Innovative Policy</li></a>';}elseif($lang=='ja'){echo '<a title="革新的政策" href="'.home_url().'/?lang=ja&tag_index=革新的政策"><li>革新的政策</li></a>';}
if($lang=='en'){echo '<a title="Innovative Procurement" href="'.home_url().'/?lang=en&tag_index=Innovative Procurement"><li>Innovative Procurement</li></a>';}elseif($lang=='ja'){echo '<a title="革新的入札" href="'.home_url().'/?lang=ja&tag_index=革新的入札"><li>革新的入札</li></a>';}
if($lang=='en'){echo '<a title="Governance" href="'.home_url().'/?lang=en&tag_index=Governance"><li>Governance</li></a>';}elseif($lang=='ja'){echo '<a title="統治" href="'.home_url().'/?lang=ja&tag_index=統治"><li>統治</li></a>';}
if($lang=='en'){echo '<a title="Environmental Management" href="'.home_url().'/?lang=en&tag_index=Environmental Management"><li>Environmental Management</li></a>';}elseif($lang=='ja'){echo '<a title="環境管理" href="'.home_url().'/?lang=ja&tag_index=環境管理"><li>環境管理</li></a>';}
if($lang=='en'){echo '<a title="Trade Facilitation" href="'.home_url().'/?lang=en&tag_index=Trade Facilitation"><li>Trade Facilitation</li></a>';}elseif($lang=='ja'){echo '<a title="貿易振興" href="'.home_url().'/?lang=ja&tag_index=貿易振興"><li>貿易振興</li></a>';}
if($lang=='en'){echo '<a title="Technical and vocational education and training" href="'.home_url().'/?lang=en&tag_index=Technical and vocational education and training"><li>Technical and vocational education and training</li></a>';}elseif($lang=='ja'){echo '<a title="技術職業教育訓練" href="'.home_url().'/?lang=ja&tag_index=技術職業教育訓練"><li>技術職業教育訓練</li></a>';}
if($lang=='en'){echo '<a title="Ecommerce" href="'.home_url().'/?lang=en&tag_index=Ecommerce"><li>Ecommerce</li></a>';}elseif($lang=='ja'){echo '<a title="イーコマース" href="'.home_url().'/?lang=ja&tag_index=イーコマース"><li>イーコマース</li></a>';}
if($lang=='en'){echo '<a title="Ominichannel" href="'.home_url().'/?lang=en&tag_index=Ominichannel"><li>Ominichannel</li></a>';}elseif($lang=='ja'){echo '<a title="オムニチャンネル" href="'.home_url().'/?lang=ja&tag_index=オムニチャンネル"><li>オムニチャンネル</li></a>';}
if($lang=='en'){echo '<a title="Showrooming" href="'.home_url().'/?lang=en&tag_index=Showrooming"><li>Showrooming</li></a>';}elseif($lang=='ja'){echo '<a title="ショールーミング" href="'.home_url().'/?lang=ja&tag_index=ショールーミング"><li>ショールーミング</li></a>';}
if($lang=='en'){echo '<a title="Knowledge Management" href="'.home_url().'/?lang=en&tag_index=Knowledge Management"><li>Knowledge Management</li></a>';}elseif($lang=='ja'){echo '<a title="ナレッジ" href="'.home_url().'/?lang=ja&tag_index=ナレッジ"><li>ナレッジ</li></a>';}
if($lang=='en'){echo '<a title="Social Media" href="'.home_url().'/?lang=en&tag_index=Social Media"><li>Social Media</li></a>';}elseif($lang=='ja'){echo '<a title="ソーシャルメディア" href="'.home_url().'/?lang=ja&tag_index=ソーシャルメディア"><li>ソーシャルメディア</li></a>';}
if($lang=='en'){echo '</ul></li><li><ul>';}elseif($lang=='ja'){echo '</ul></li><li>社会<ul>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="税制" href="'.home_url().'/?lang=ja&tag_index=税制"><li>税制</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="関税" href="'.home_url().'/?lang=ja&tag_index=関税"><li>関税</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="健康保険" href="'.home_url().'/?lang=ja&tag_index=健康保険"><li>健康保険</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="生活保護" href="'.home_url().'/?lang=ja&tag_index=生活保護"><li>生活保護</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="年金保険" href="'.home_url().'/?lang=ja&tag_index=年金保険"><li>年金保険</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="介護保険" href="'.home_url().'/?lang=ja&tag_index=介護保険"><li>介護保険</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="外交" href="'.home_url().'/?lang=ja&tag_index=外交"><li>外交</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="就職" href="'.home_url().'/?lang=ja&tag_index=就職"><li>就職</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="転職" href="'.home_url().'/?lang=ja&tag_index=転職"><li>転職</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="労働" href="'.home_url().'/?lang=ja&tag_index=労働"><li>労働</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="障碍者雇用" href="'.home_url().'/?lang=ja&tag_index=障碍者雇用"><li>障碍者雇用</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="大学" href="'.home_url().'/?lang=ja&tag_index=大学"><li>大学</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="中等教育" href="'.home_url().'/?lang=ja&tag_index=中等教育"><li>中等教育</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="少子化" href="'.home_url().'/?lang=ja&tag_index=少子化"><li>少子化</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="起業" href="'.home_url().'/?lang=ja&tag_index=起業"><li>起業</li></a>';}
if($lang=='en'){echo '</ul></li><li><ul>';}elseif($lang=='ja'){echo '</ul></li><li>経済<ul>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="規制緩和" href="'.home_url().'/?lang=ja&tag_index=規制緩和"><li>規制緩和</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="金融政策" href="'.home_url().'/?lang=ja&tag_index=金融政策"><li>金融政策</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="財政政策" href="'.home_url().'/?lang=ja&tag_index=財政政策"><li>財政政策</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="外国為替" href="'.home_url().'/?lang=ja&tag_index=外国為替"><li>外国為替</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="市場" href="'.home_url().'/?lang=ja&tag_index=市場"><li>市場</li></a>';}
if($lang=='en'){echo '<a title="" href="'.home_url().'/?lang=en&tag_index="><li></li></a>';}elseif($lang=='ja'){echo '<a title="投資" href="'.home_url().'/?lang=ja&tag_index=投資"><li>投資</li></a>';}


?>
</ul></li>
	</ul>
	</div>