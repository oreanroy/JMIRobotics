<?php
require_once "../plugin/faisal_style.php";
require_once "../plugin/basic.php";
echo head("Our Team || Robocon JMI");
echo basic_decp("RoBoCoN JMI");
echo m_css();
echo c_head();
echo basic_nav($dcname,$theme);
?>
<main>
 <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m4 l4 xl4">
        
    <span class="green-text" style="font-weight:lighter;font-size:40px;">Our Team..</span>
    <p>
    Columbia University Robotics Club is for any Columbia student interested in robotics, autonomous systems, artificial intelligence, and more. We welcome undergraduates, graduate students, faculty, and staff of all majors and backgrounds to join us in learning from each other and working with each other in these exciting and rapidly growing fields.
    </p>
        </div>


<div class="col s12 m8 l8 xl8">
<ul class="tabs"> <li class="tab col s3"><a href="#mteam" class="active black-text">Main Team</a></li> <li class="tab col s3"><a href="#wteam" class="black-text">Web Team</a></li></ul>
<span id="mteam">
        <span class="green-text" style="font-weight:lighter;font-size:40px;">Main Team</span><br>
  <span class="green-text" style="font-weight:lighter;font-size:30px;">2017-18</span>
<ul class="collection">
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/smi.png" alt="" class="circle"> <span class="title">Faisal Manzer</span> <p>B.Tech 1st Year <br>Jamia Millia Islamia</p>
</li>
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/smi.png" alt="" class="circle"> <span class="title">Faisal Manzer</span> <p>B.Tech 1st Year <br>Jamia Millia Islamia</p>
</li>
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/smi.png" alt="" class="circle"> <span class="title">Faisal Manzer</span> <p>B.Tech 1st Year <br>Jamia Millia Islamia</p>
</li>
</ul>
</span>

<span id="wteam">
        <span class="green-text" style="font-weight:lighter;font-size:40px;">Web Development Team</span><br>
  <span class="green-text" style="font-weight:lighter;font-size:30px;">2017-18</span>
<ul class="collection">
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/smi.png" alt="" class="circle"> <span class="title">Faisal Manzer</span> <p>B.Tech 1st Year <br>Jamia Millia Islamia</p>
</li>
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/smi.png" alt="" class="circle"> <span class="title">Faisal Manzer</span> <p>B.Tech 1st Year <br>Jamia Millia Islamia</p>
</li>
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/smi.png" alt="" class="circle"> <span class="title">Faisal Manzer</span> <p>B.Tech 1st Year <br>Jamia Millia Islamia</p>
</li>
</ul>
</span>
</div>
     </div>
 </div>
</main>
<?php
echo basic_foot($dcname,$theme);
echo m_js();
?>