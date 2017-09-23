<?php
require_once "../plugin/faisal_style.php";
require_once "../plugin/basic.php";
echo head("Contact || Robocon JMI");
echo basic_decp("RoBoCoN JMI");
echo m_css();
echo c_head();
echo basic_nav($dcname,$theme);
?>
<main>
<div class="container">
    <div class="section">
      <div class="row">
      
      
        <div class="col s12 m4">
        <span class="green-text" style="font-weight:lighter;font-size:40px;">Contact Us</span><br>
        <ul class="collapsible popout" data-collapsible="accordion"> <li> <div class="collapsible-header"><i class="material-icons fa fa-envelope"></i>Email</div> <div class="collapsible-body"><span><a href="mailto:roboconjmi@gmail.com" class=" black-text">roboconjmi@gmail.com</a></span></div> </li> <li> <div class="collapsible-header"><i class="material-icons fa fa-whatsapp"></i>WhatsApp</div> <div class="collapsible-body"><span><a href="https://chat.whatsapp.com/8wEuvZY4aUy6NfuZQPrvgY" class="black-text">Click Here To Join Our Guest Group</a></span></div> </li> 
        
         <li> <div class="collapsible-header"><i class="material-icons fa fa-phone"></i>Call Us</div> <div class="collapsible-body">Faisal: <span><a href="tel:+919097718815" class="black-text">+919097718815</a></span></div> </li> 
        
         <li> <div class="collapsible-header"><i class="material-icons fa fa-map-pin"></i>Address</div> <div class="collapsible-body">Faculty of Engineering and Technology, Jamia Millia Islamia, Jamia Nagar, Okhla, New Delhi, Delhi 110025
         <div id="saru" style="height:200px;width:100%"></div></div> </li> 
        
        
        
         </ul>
        </div>
       </div>
     </div>
</div>
</main>
<?php
echo basic_foot($dcname,$theme);
echo m_js();
echo l_js("contact/saru.js");
echo r_js("https://maps.googleapis.com/maps/api/js?key=AIzaSyAa9zBvf8Afp-ObmQ9Yz1WylnDqrGXhbRo&callback=initMap","async defer");
?>