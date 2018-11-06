<?php
	
	$_isIE = ( strpos($ua,"msie")!==false );
	$pthand = "cursor: ".(($_isIE)?('hand;'):('pointer;'));
	echo('#acur {'.$pthand.'} ');

	$cssFontType = " font-family: 'Lucida Sans Unicode', Verdana, Tahoma, 'Arial';";
	$cssFontDefSize = "font-size:9pt;";	
	$cssFontBigSize = "font-size:14pt;";	
	$cssFontMidSize = "font-size:11pt;";	
	$cssHeadHeight = (($_isIE)?('25px'):('22px')); //same source as where php will take in other scrips
	$cssGridHeight = $cssHeadHeight; //same source as where php will take in other scrips
	$cssTabHeight=20;
	$cssHighCol='#0C248D';
	$cssOpCol='#0C2EB6';
	
	//print("cssFontType -> $cssFontType , cssFontDefSize -> $cssFontDefSize , cssFontBigSize -> $cssFontBigSize , cssFontMidSize -> $cssFontMidSize , cssHeadHeight -> $cssHeadHeight , cssGridHeight -> $cssGridHeight , cssTabHeight -> $cssTabHeight , cssHighCol -> $cssHighCol, cssOpCol -> $cssOpCol ");
?>

body
{
	padding: 0px;
	margin: 0px;
	background-color: #fff;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

button
{
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
	border: #9D9D9D 1px solid;
}

input
{
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
	border: #9D9D9D 1px solid;
}

select
{
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
	border: #9D9D9D 1px solid;
}

table
{
	border-collapse: collapse;
	border-spacing: 0px;
	margin: 0px;
	padding: 0px;
}

#txt
{
	color: #000;
	text-align: left;
	white-space: nowrap;	
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

.txt
{
	color: #000;
	text-align: left;
	white-space: nowrap;	
	<?php echo($cssFontType.$cssFontDefSize); ?>
}

.lngtxt
{
	color: #000;
	text-align: left;
	white-space: wrap;
	width:335px;

}

#lgtxt
{
	color: #000;
	text-align: left;
	white-space: nowrap;	
	font-weight: 700;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontBigSize); ?>
}

#mgtxt
{
	color: #000;
	text-align: left;
	white-space: nowrap;	
	font-weight: 700;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontMidSize); ?>
}
#gtxt
{
	color: #48484A;
	text-align: left;
	white-space: normal;	
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

#rtxt
{
	color: #9D0000;
	text-align: left;
	white-space: normal;	
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

#orgtxt
{
	color: #fff;
	text-align: right;
	white-space: nowrap;	
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

div.txt
{
	color: #000;
	text-align: left;
	white-space: normal;	
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

.ltxt
{
	<?php echo($cssFontType); ?>
	font-size:10pt;
	float:left;
	width:80px;
	white-space: nowrap;
}

.bltxt
{
	<?php echo($cssFontType); ?>
	font-size:10pt;
	font-weight: 700;
	float:left;
	width:80px;
	white-space: nowrap;
}


div.gridhead, div.gridheadNo
{
        float:left;
        clear: right;
        overflow:hidden;
        text-align: left;
        white-space: nowrap;
		font-weight: 700;
        background-color: #f8f8f8;
		color: #4a7d8e;
        border-top:1px outset #eef;
        border-left:1px outset #eef;
        border-right:1px outset #999;
        border-bottom:1px outset #999;
        height: <?php echo($cssGridHeight) ?> ;
        <?php echo($cssFontType); ?>
        <?php echo($cssFontDefSize); ?>
}

div.gridcell
{
        color: #000;
        background-color:#fff;
        padding:0px;
        float:left;
        clear: right;
        overflow:hidden;
        text-align: left;
        white-space: nowrap;
        text-decoration: none;
        border-top:1px solid #eef;
        border-left:1px solid #eef;
        border-right:1px solid #9D9D9D;
        border-bottom:1px solid #9D9D9D;
        height: <?php echo($cssGridHeight) ?> ;
        <?php echo($cssFontType); ?>
        <?php echo($cssFontDefSize); ?>
}

a.gridcell
{
        color: #000;
        background-color:#fff;
        text-align: left;
        white-space: nowrap;
        text-decoration: none;
        height: <?php echo($cssGridHeight) ?> ;
        <?php echo($cssFontType); ?>
        <?php echo($cssFontDefSize); ?>
}

div.menurow
{
	<?php echo($cssFontType); ?>
	font-size:10pt;
	width:100%;
	height: 22px;
	background-color:#9D9D9D;
	border-bottom: #000 1px solid;
	overflow:hidden;
}

div.menurow div
{
	padding: 2px 5px 2px 5px;	
	<?php echo($cssFontType); ?>
	font-size:10pt;
}

div.msgcon
{
	position:absolute;
	left:0px;
	top:0px;
	width:100%;
	white-space: nowrap;
	text-align: right;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

div.msgcon span
{
	padding: 0px 4px 0px 4px;
	color:#FFFFFF;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

a:visited.awhite, a:link.awhite, a:active.awhite
{
	color: #FFF;
	text-decoration: none;
	font-weight:400;
	white-space: nowrap;
	<?php echo($cssFontType); ?>
	font-size:10pt;
}

a:hover.awhite
{
	text-decoration: underline;
}

a:visited.ashift, a:link.ashift, a:active.ashift
{
	position:relative;
	z-index:1;
	color: #000;
	text-decoration: none;
	font-weight:400;
	white-space: nowrap;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontMidSize); ?>
}

a:hover.ashift
{
	text-decoration: none;
}

.ashiftcover
{
	position:relative;
	z-index:2;
	float:left;
	background-color: #f00;
}

div.menurow a:visited.menu, a:link.menu, a:active.menu
{
	display:block;
	color: #000;
	margin: 0px;
   	padding: 0px;
	text-decoration: none;
	height: 100%;
	float: left;
	font-weight:400;
	text-align: center;
	white-space: nowrap;
	<?php echo($cssFontType); ?>
	font-size:10pt;
}

div.menurow a:hover.menu
{
	color: #FFFFFF;
	background-color: <?php echo($cssHighCol); ?>
}

div.menurow a:visited.smenu, a:link.smenu, a:active.smenu
{
	display:block;
	color: #000;
	margin: 0px;
	padding: 0px;
	text-decoration: none;
	height: 100%;
	float: left;
	font-weight:400;
	text-align: center;
	white-space: nowrap;
	<?php echo($cssFontType); ?>
	font-size:10pt;
}

div.menurow a:hover.smenu
{
	color: #FFFFFF;
	background-color:#808080;
}

div.contextmenu
{
	position:absolute;
	color: #000;
	background-color:#dddddd;
	border: #9D9D9D 2px ridge;
	<?php echo($cssFontType); ?>
	font-size:10pt;
}

div.contextmenu div
{
	height: <?php echo($cssHeadHeight) ?> ;
	<?php echo($cssFontType); ?>
	font-size:10pt;
}

div.contextmenu a:visited.acontextmenu, a:link.acontextmenu, a:active.acontextmenu
{
	display:block;
	color: #000;
	margin: 0px;
	padding: 0px;
	text-decoration: none;
	width: 100%;
	height: 100%;
	font-weight:400;
	text-align: left;
	white-space: nowrap;
	border: #dddddd 1px solid;
	<?php echo($cssFontType); ?>
	font-size:10pt;
}

div.contextmenu a:hover.acontextmenu
{
	color: #FFFFFF;
	background-color:<?php echo($cssHighCol); ?>
}

div.winHeadCon
{	
	font-weight:700;
	white-space: nowrap;
	overflow: hidden;
	border-bottom: #9D9D9D 2px ridge;
	width: 100%;
	height: <?php echo($cssHeadHeight) ?> ;
}

div.blockerHead
{
	background-color: <?php echo($cssHighCol); ?>;
	white-space: nowrap;
	overflow: hidden;
	width: 100%;
	border-bottom: #9D9D9D 1px solid;
	text-align:left;
	color:#000;
	position:relative;
	height: <?php echo($cssHeadHeight) ?> ;
}

div.blockerHead td
{
	<?php echo($cssFontType); ?>
	font-size:10pt;
	color: #fff;
	font-weight:700;
	padding-top: 2px;
	padding-right: 3px;
}

div.winHeadCon td
{
	<?php echo($cssFontType); ?>
	font-size:10pt;
	padding-top: 2px;
	padding-right: 3px;
}

div.winBody
{
	background-color: #FFFFFF;
	border: 0px;
	overflow: auto;
	width: 100%;
}

div.conbp
{
	overflow: hidden;
	text-align: left;
	width:100%;
	clear:right;
	padding-top: 10px;
	padding-bottom: 10px;
}

div.conlg
{
	text-align: left;
	width:100%;
	padding: 10px;
}

div.icheight
{
	<?php 
		if(!$_isIE)
			echo('height:40px;');
	?>
}

div.conheight
{
	height: <?php echo($cssHeadHeight) ?> ;
}

div.genconnp
{
	overflow: hidden;
	text-align: left;
	white-space: nowrap;
	width:100%;
	padding: 0px;
	clear:right;
}

div.gencon
{
	overflow: hidden;
	text-align: left;
	white-space: nowrap;
	width:100%;
	padding: 0px;
	clear:right;
}

.bademail
{
	font-family: Lucida Sans Unicode, Verdana, Tahoma, Arial;
	font-size:9pt;
}

div.gensideblock
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	padding:4px;
	overflow: hidden;
}

div.asb
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	padding:0px;
	overflow: hidden;
}

div.asin
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
}


div.asbl
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	padding-left:10px;
	padding-right:10px;
	overflow: hidden;
	width: 100px;
}

div.asp
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	padding:4px;
	overflow: hidden;
}

div.aspl
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	padding:4px;
	overflow: hidden;
	width: 150px;
}


div.gensidemaxblock
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	padding:6px;
}

div.gentl
{
	float:left;
	text-align: left;
	margin: 0px;
	padding:6px;
}

div.lbf
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	overflow: hidden;
	width:100px;
	height: <?php echo($cssGridHeight); ?>
}

div.tabinblock
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	overflow: hidden;
}

div.spsideblock
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	padding: 3px;
}

div.tab
{
	text-align: left;
	white-space: nowrap;
}

div.tabhR
{
	float:left;
	clear: right;
	text-align: left;
	white-space: nowrap;
	width: 5px;
	height:20px;
	position:relative;
	z-index:20;
}

div.tabhL
{
	float:left;
	clear: right;
	text-align: left;
	white-space: nowrap;
	width: 22px;
	height:20px;
	position:relative;
	z-index:30;
}

div.tabh
{
	float:left;
	clear: right;
	text-align: left;
	white-space: nowrap;
	height:20px;
	position:relative;
	z-index:30;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

div.tabView
{
	text-align: left;
	overflow:auto;
	white-space: nowrap;	
}

div.tabHeadCon
{	
	display:block;
	overflow:hidden;
	text-align: left;
	white-space: nowrap;
}

a.op
{
	color: <?php echo( $cssOpCol ); ?>
	text-align: left;
	white-space: nowrap;
	text-decoration: none;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

a.acur
{
	color: #000;
	text-align: left;
	white-space: nowrap;
	text-decoration: none;
	<?php echo($pthand.$cssFontType.$cssFontDefSize); ?>	
}
	
a.wl
{
	color: #000;
	text-align: left;
	white-space: nowrap;
	text-decoration: none;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

.rviewcell
{
	border-right: #9D9D9D 1px solid;
}

.lviewcell
{
	border-left: #9D9D9D 1px solid;
}

.tviewcell
{
	border-top: #9D9D9D 1px solid;
}

.bviewdash
{
	border-bottom: #9D9D9D 1px dashed;
}

.tviewdash
{
	border-top: #9D9D9D 1px dashed;
}

.rviewdash
{
	border-right: #9D9D9D 1px dashed;
}

.bviewcell
{
	border-bottom: #9D9D9D 1px solid;
}

#basp
{
	border: #9D9D9D 1px solid;
	padding: 5px;
}

.whmax
{
	height:100%;
	width:100%;
}

.toph
{
	height: 25px
}

.posrel
{
	position: relative;
}

.mail_ext
{
	color: #fff;
	background-color: #4E4E7C;
	text-align: left;
	white-space: nowrap;	
	border-bottom: #9D9D9D 1px solid;
	padding-top: 3px;
	padding-bottom: 3px;
	font-weight: 700;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>	
}

.roundbutton
{
	position:relative;
	left:0px;top:0px;
	background-color: #818181;
	color: #fff;
	border: #818181 1px solid;	
	border-radius : 4px;
	<?php echo($pthand.$cssFontType.$cssFontDefSize); ?>
}

.main_back
{
	background-color: #C5161D;
}

a.awtxt
{
	color: #000;
	text-decoration: none;
	text-align: left;
	white-space: nowrap;	
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>
}

a.awtxt:hover
{
	text-decoration: underline;
}

div.comp_resp
{
	color: #fff;
	background-color: #4E4E7C;
	text-align: left;
	white-space: nowrap;	
	padding-top: 3px;
	padding-bottom: 3px;
	font-weight: 700;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>	
}

div.comp_exp
{
	color: #fff;
	background-color: #9797BD;
	text-align: left;
	white-space: nowrap;	
	padding-top: 3px;
	padding-bottom: 3px;
	font-weight: 700;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>	
}

div.comp_upl
{
	background-color: #6363A8;
	color: #fff;
	text-align: left;
	font-weight: 700;
	white-space: nowrap;	
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>	
}

div.comp_img
{
	background-color: #7979D3;
	color: #fff;
	text-align: left;
	font-weight: 700;
	white-space: nowrap;	
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}


div.comp-cur-img
{
	color: #fff;
	background-color: #7979D3;
	text-align: left;
	font-weight: 700;
	white-space: nowrap;	
	border-bottom: #9D9D9D 1px solid;
	padding-top: 3px;
	padding-bottom: 3px;
	<?php echo($cssFontType.$cssFontDefSize); ?>	
}

div.lists-bck
{
	background-color: #876E52;
	color: #fff;
	text-align: left;
	white-space: nowrap;	
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>
}

div.lists-expose-bck
{
	background-color: #705A43;
	color: #fff;
	text-align: left;
	white-space: nowrap;	
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>
}

.lists_ext
{
	color: #fff;
	background-color: #876E52;
	text-align: left;
	white-space: nowrap;	
	border-bottom: #9D9D9D 1px solid;
	padding-top: 3px;
	padding-bottom: 3px;
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>	
}

.lists_special
{
	color: #fff;
	background-color: #AE9579;
	text-align: left;
	white-space: nowrap;	
	border-bottom: #9D9D9D 1px solid;
	padding-top: 3px;
	padding-bottom: 3px;
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>	
}

.camp_ext
{
	color: #fff;
	background-color: #48484A;
	text-align: left;
	white-space: nowrap;	
	border-bottom: #9D9D9D 1px solid;
	padding-top: 3px;
	padding-bottom: 3px;
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>	
}

button.comp
{
	position:relative;
	left:0px;top:0px;
	background-color: #060646;
	color: #fff;
	border: #4E4E7C 1px solid;	
	<?php echo($pthand.$cssFontType.$cssFontDefSize); ?>
}

button.comp:hover
{
	position:relative;
	left:-1px;top:-1px;
}

a.comp
{
	color: #060646;
	text-decoration: none;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

a.comp:hover
{
	text-decoration: underline;
}

button.lists
{
	position:relative;
	left:0px;top:0px;
	background-color: #876E52;
	color: #fff;
	border: #978168 1px solid;	
	<?php echo($pthand.$cssFontType.$cssFontDefSize); ?>
}

button.lists:hover
{
	position:relative;
	left:-1px;top:-1px;
}

a.lists
{
	color: #876E52;
	text-decoration: none;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

a.lists:hover
{
	text-decoration: underline;
}

button.camp
{
	position:relative;
	left:0px;top:0px;
	background-color: #090909;
	color: #fff;
	border: #978168 1px solid;	
	<?php echo($pthand.$cssFontType.$cssFontDefSize); ?>
}

button.camp:hover
{
	position:relative;
	left:-1px;top:-1px;
}

div.camp-new-bck
{
	background-color: #757578;
	color: #fff;
	text-align: left;
	white-space: nowrap;	
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>
}

button.admin
{
	position:relative;
	left:0px;top:0px;
	background-color: #F37022;
	color: #fff;
	border: #F69962 1px solid;	
	<?php echo($pthand.$cssFontType.$cssFontDefSize); ?>
}

button.details
{
	position:relative;
	left:0px;top:0px;
	background-color: #008000;
	color: #fff;
	border: #F69962 1px solid;	
	<?php echo($pthand.$cssFontType.$cssFontDefSize); ?>
}

button.admin:hover
{
	position:relative;
	left:-1px;top:-1px;
}

div.admin-bck
{
	background-color: #F37022;
	color: #fff;
	text-align: left;
	white-space: nowrap;	
	border-bottom: #9D9D9D 1px solid;
	padding-top: 3px;
	padding-bottom: 3px;
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>	
	<?php echo($pthand.$cssFontType.$cssFontDefSize); ?>
}

div.admin_sub
{
	background-color: #e55803;
	color: #fff;
	text-align: left;
	white-space: nowrap;	
	border-bottom: #9D9D9D 1px solid;
	padding-top: 3px;
	padding-bottom: 3px;
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>	
	<?php echo($pthand.$cssFontType.$cssFontDefSize); ?>
}

.admin_ext
{
	color: #fff;
	background-color: #e55803;
	text-align: left;
	white-space: nowrap;	
	border-bottom: #9D9D9D 1px solid;
	padding-top: 3px;
	padding-bottom: 3px;
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>	
}

.detail_ex
{
	color: #fff;
	background-color: #008000;
	text-align: left;
	white-space: nowrap;	
	border-bottom: #9D9D9D 1px solid;
	padding-top: 3px;
	padding-bottom: 3px;
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>	
}

div.camp-stat-bck
{
	background-color: #46464A;
	color: #fff;
	text-align: left;
	white-space: nowrap;	
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>
}

div.list-special
{
	background-color: #AE9579;
	color: #fff;
	text-align: left;
	white-space: nowrap;	
	font-weight: 700;
	<?php echo($cssFontType.$cssFontDefSize); ?>
}

.cont_ser_table
{
	table-layout:fixed;
	width:90%;
	word-wrap:break-word;
}

.btm_ln_conts_sld
{
	border-bottom: #9D9D9D 1px solid;
}

.side_ln_conts_sld
{
	border-right: #9D9D9D 1px solid;
}

.side_ln_conts_dsd
{
	border-right: #9D9D9D 1px dashed;
}

.cont_anc
{
	text-decoration: none;
	color: #9797bd;
	cursor: pointer;
}

.cont_table_bg
{
	background-color:#F0F0F0;
}
.btm_ln_conts_dsd
{
	border-bottom: #9D9D9D 1px dashed;
}

.txtconts
{
	text-align: left;
	<?php echo($cssFontType); ?>
	<?php echo($cssFontDefSize); ?>
}

.headconts
{
	background-color: #876E52;
	color: #fff;
	text-align: left;
}

.headtrial
{
	background-color: #060646;
	color: #fff;
	text-align: left;
}

.txtheadwithbg
{
	padding-bottom: 5px;
	padding-left: 10px;
	background-color: #f8f8f8;
	color: #4a7d8e;
	font-weight: 700;
}

.txtheadwith
{
	padding-bottom: 5px;
	padding-left: 10px;
	color: #4a7d8e;
	font-weight: 700;
}

.txthead
{
	color: #4a7d8e;
	font-weight: 400;
}

.buttonmenuwithbg
{
	padding-top:5px;
	padding-bottom:5px;
	background: #fff url("../images/bgrad.png") repeat-x scroll left bottom;
}
#follow-scroll.fixed { //Added for scroll following save button
    position: fixed ;
    top: 0 ;
    left: 0 ;
    z-index: 1 ;
    width: 100% ;
    border-bottom: 5px solid #ffffff ;
}

/* modify country , state , city info css*/
	.formHeader { margin:auto;width:80%;background-color:#ccc; }	
		
		#errorC , #errorD , #errorStateC , #errorStateD , #errorCityC , #errorCityD
		{
			width:80%;
			margin:auto;
			color:#fff;
			margin:auto;
			background: #4a1371;
			border: 3px double #aaa;
			border-radius: 6px;
			padding: 2px;
			font-size: 100%;
		}
		
		#success
		{
			width:80%;
			margin:auto;
			color:#fff;
			margin: auto;
			background: #458B00;
			border: 3px double #aaa;
			border-radius: 6px;
			padding: 2px;
			font-size: 100%;
		}
		
		#addDiv , #addStateDiv , #addCityDiv
		{
			width:50%;float:left;border-right:1px solid #ccc;height:100%;
		}
		
		#delDiv
		{
			width:48%;float:left;
		}
		
		#formHeader
		{
			width:90%;
			margin:auto;
			color:#fff;
			margin: auto;
			background: #4A4A4A;
			border: 3px double #aaa;
			border-radius: 6px;
			padding: 2px;
			font-size: 100%;
			
		}
		
		#billHeader
		{
			width:90%;
			color:#fff;
			background: #4A4A4A;
			border: 3px double #aaa;
			border-radius: 2px;
			padding: 2px;
			font-size: 100%;
			
		}
		.tinymce-content p {
			padding: 0;
			margin: 2px 0;
		}
		.mceContentBody p {padding:0; margin:0;}

/* modify country , state , city info css ends*/

#ui-datepicker-div { display:none }

div.genlabblock
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	padding:5px;
	overflow: hidden;
	width:200px;
	height: <?php echo($cssGridHeight); ?>
}
.clear {
	clear: both;
}


/*hcx lite product csss */
.product_lite_edit_button_div{
	position:absolute;
	right:58px;
	width: 66px;
}
.product_lite_appl_button_div {
	right:130px;
	position:absolute;
	width: 66px;
}

#is_verified {
	margin-left:5px;
	
	float:left;
}

.txtlabel
{
	color:#8e8e8e;
}

.roundborder
{
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}