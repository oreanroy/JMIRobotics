<?php
$cname="JMI Robotics";
$dcname='<span style="font-weight:lighter">RoBoCoN&nbsp;</span><b>JMI</b>';
$theme="green";
function host()
{
return "http://".$_SERVER['HTTP_HOST'];
}
function l_js($file,$extra="")
{
return r_js(host().'/js/'.$file,$extra);
}
#l_js("file","extra");
function r_js($file,$extra="")
{
return '<script src="'.$file.'" '.$extra.' ></script>';
}
#echo htmlspecialchars(l_js("file","extra"));
function m_js()
{
$tor='';
$tor.=r_js('https://code.jquery.com/jquery-2.1.1.min.js');
$tor.=r_js('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js');
$tor.=r_js('https://use.fontawesome.com/b2e9621515.js');
$tor.=l_js("init.js");
return $tor;
}
#echo htmlspecialchars(m_js());
function l_css($file,$extra="")
{
return r_css(host().'/css/'.$file,$extra);
}
function r_css($file,$extra="")
{
$tor='';
$tor.='<link href="'.$file.'" type="text/css" rel="stylesheet" '.$extra.' />';
return $tor;
}
#echo htmlspecialchars(l_css("fils","rxtra"));
function m_css()
{
$tor='';
$tor.=r_css("https://fonts.googleapis.com/icon?family=Material.Icons");
$tor.=r_css("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css",'media="screen,projection"');
$tor.=l_css('style.css');
#$tor.=l_css("font-awesome.min.css");
#$tor.=r_css('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
#$tor.=l_css('materialize.css');
#$tor.=l_css('style.css');
#$tor.=l_css('font-awesome.min.css');
#$tor.=l_css('animate.css');
return $tor;
}
#echo htmlspecialchars (m_css());
function head($title,$extra='')
{
/*

*/
$t="";
$t='<!DOCTYPE html>
<html lang="en" manifest="'.host().'/cache.appcache">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viwport" content="width=device-width, initial-scale=1"/>
  <title>'.$title.'</title> '.$extra.' ';
return $t;
}
#echo htmlspecialchars (head("title","extra"));
function c_head()
{
return '</head><body>';
}
#echo htmlspecialchars (c_head());
function s_nav($dcname='',$class_bar, $class_logo='',$class_nav='')
{
$t='';
$t.=' <nav class="z-depth-0 '.$class_bar.'" role="navigation">';
$t.=div('nav-wrapper container');
$t.=anc('#','brand-logo '.$class_logo);
$t.=$dcname;
$t.=c_anc();
$t.=ul("side-nav fixed ".$class_nav,'id="slide-out"');
return $t;
}
#echo htmlspecialchars (s_nav($dcname,$theme,$theme));
function c_s_nav()
{
return '</nav>';
}
function div($class='',$extra='')
{
$t='';
$t.='<div class="'.$class.'" ';
$t.=$extra.' >'; 
return $t;
}
function c_div()
{
return '</div>';
}
function anc($href='#',$class='',$extra='')
{
return '<a href="'.$href.'" class="'.$class.'" '.$extra.' >';
}
function l_anc($href='#',$class='',$extra='')
{
return anc(host()."/".$href,$class,$extra);
}
function r_anc($href='#',$class='',$extra='')
{
return anc("http://".$href,$class,$extra);
}
#echo htmlspecialchars (anc("href","class","extra"));
function ul($class='',$extra='')
{
return '<ul class="'.$class.'" '.$extra.' >';
}
#echo htmlspecialchars(ul("class","extrA"));
function c_ul()
{
return "</ul>";
}
function c_anc()
{
return '</a>';
}
function para($class='',$extra='')
{
return '<p class="'.$class.'" '.$extra.' >';
}
function c_para()
{
return "</p>";
}
function he($type, $class='', $extra='')
{
return '<h'.$type.' class="'.$class.'" '.$extra.' >';
}
function c_he($type)
{
return '</h'.$type.'>';
}
function fa($name,$class='',$extra='')
{
return '<i class="'.$class.' fa fa-'.$name.'" aria-hidden="true" '.$extra.'></i>';
}
function foot($class='',$extra='')
{
return '<footer class="page-footer '.$class.'" '.$extra.'>';
}
function c_foot()
{
	return "</footer>";
}
function r_img($src,$class='',$extra='')
{
return '<img src="'.$src.'" class="'.$class.'" '.$extra.' >';
}
function l_img($src,$class='',$extra='')
{
return r_img(host()."/images/".$src,$class,$extra);
}
function li($class='',$extra='')
{
return '<li class="'.$class.'" '.$extra.' >';
}
function c_li()
{
return '</li>';
}
function span($class='',$extra='')
{
return '<span class="'.$class.'" '.$extra.' >';
}
function c_span()
{
return "</span>";
}
?>
