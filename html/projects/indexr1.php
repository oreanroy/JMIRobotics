<?php
require_once "../plugin/faisal_style.php";
require_once "../plugin/basic.php";
echo head("Projects || Robocon JMI");
echo basic_decp("JMI Robotics");
echo m_css();
echo c_head();
echo basic_nav($dcname,$theme);
?>

<main>
   <div class="outer-container">
      <div class="section">
        <div class="ft-project"> 
            <div class="col s12 m4" style="clear:both; margin-left:80px;">
               <span class="green-text" style="font-weight:lighter;font-size:40px; clear:both;">Featured Project</span>
               <div class="card card-upper" style="width:900px;height:460px;">
                  <div class="card-image waves-effect waves-block waves-light" > <img class="activator" style="overflow:hidden; height:400px;" src="<?php echo host();?>/images/projects/del_bot.jpg"> </div>
                  <div class="card-content" style="height:5opx;"> <span class="card-title activator grey-text text-darken-4">Delivery Bot<i class="material-icons right fa fa-chevron-up"></i></span></div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4">Delivery Bot<i class="material-icons right fa fa-chevron-down"></i></span> 
                     <p>We aim to build a wheeled robot capable of autonomous navigation around the Columbia Campus.</p>
                  </div>
            </div><br>
        </div>
        <div class="row">    
            <div class="col s12 m4 leftside" style="margin-left: 150px; ">
               <span class="green-text" style="font-weight:lighter;font-size:40px;">Past Projects</span><br>
               <span class="green-text" style="font-weight:lighter;font-size:30px;">2016-17</span>
               <div class="card" style="margin-bottom:40px;">
                  <div class="card-image waves-effect waves-block waves-light" > <img class="activator" src="<?php echo host();?>/images/projects/auto_drone.jpg"> </div>
                  <div class="card-content"> <span class="card-title activator grey-text text-darken-4">Autonomous Drone<i class="material-icons right fa fa-chevron-up"></i></span></div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4">Autonomous Drone<i class="material-icons right fa fa-chevron-down"></i></span> 
                     <p>Inspired by the <a href="http://www.aerialroboticscompetition.org/phpBB/">International Aerial Robotics Competition</a>, we aim to refit a quadcopter for autonomous flight.</p>
                  </div>
               </div>
               <div class="card" style="margin-bottom:40px;">
                  <div class="card-image waves-effect waves-block waves-light" > <img class="activator" src="<?php echo host();?>/images/projects/del_bot.jpg"> </div>
                  <div class="card-content"> <span class="card-title activator grey-text text-darken-4">Delivery Bot<i class="material-icons right fa fa-chevron-up"></i></span></div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4">Delivery Bot<i class="material-icons right fa fa-chevron-down"></i></span> 
                     <p>We aim to build a wheeled robot capable of autonomous navigation around the Columbia Campus.</p>
                  </div>
               </div>
            </div>
            <div class="col s12 m4 rightside" style="margin-left:50px;">
               <span class="green-text" style="font-weight:lighter;font-size:40px;">Past Projects</span><br>
               <span class="green-text" style="font-weight:lighter;font-size:30px;">2016-17</span>
               <div class="card" style="margin-bottom:40px;">
                  <div class="card-image waves-effect waves-block waves-light"> <img class="activator" src="<?php echo host();?>/images/projects/auto_drone.jpg"> </div>
                  <div class="card-content"> <span class="card-title activator grey-text text-darken-4">Autonomous Drone<i class="material-icons right fa fa-chevron-up"></i></span></div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4">Autonomous Drone<i class="material-icons right fa fa-chevron-down"></i></span> 
                     <p>Inspired by the <a href="http://www.aerialroboticscompetition.org/phpBB/">International Aerial Robotics Competition</a>, we aim to refit a quadcopter for autonomous flight.</p>
                  </div>
               </div>
               <div class="card" style="margin-bottom:40px;">
                  <div class="card-image waves-effect waves-block waves-light"> <img class="activator" src="<?php echo host();?>/images/projects/del_bot.jpg"> </div>
                  <div class="card-content"> <span class="card-title activator grey-text text-darken-4">Delivery Bot<i class="material-icons right fa fa-chevron-up"></i></span></div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4">Delivery Bot<i class="material-icons right fa fa-chevron-down"></i></span> 
                     <p>We aim to build a wheeled robot capable of autonomous navigation around the Columbia Campus.</p>
                  </div>
               </div>
            </div>
        </div>
         
      </div>
   </div>
   </div>
</main>
<?php
echo basic_foot($dcname,$theme);
echo m_js();
?>