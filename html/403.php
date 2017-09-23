<?php
require_once "plugin/faisal_style.php";
require_once "plugin/basic.php";
echo head("403 Opps || Robocon JMI");
echo basic_decp("RoBoCoN JMI");
echo m_css();
echo c_head();
echo basic_nav();
?>
<div class="main">
<div class="container">
    <div class="section">
      <div class="row">
      
      
        <div class="col s12 m4">
        <span class="green-text" style="font-weight:lighter;font-size:40px;">403</span><br>
  <span class="green-text" style="font-weight:lighter;font-size:30px;">Sorry, No Access</span>
  </div>
  </div>
  </div>
  </div>
</div>
</div>
<?php
echo basic_foot($dcname,$theme);
echo m_js();
?>