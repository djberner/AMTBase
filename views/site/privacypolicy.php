<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Privacy Policy';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
  <div class="col-md-12">
    <div class="page-title-dark">
      <h1> Privacy Policy </h1>
    </div>
  </div>
</div>
<style>
/* Note: Try to remove the following lines to see the effect of CSS positioning */
.affix {
    top: 20px;
    z-index: 9999 !important;
    position:relative;
}
</style>
<section class="faq_answers">
  <div class="container">
  <div class="row">
    <nav class="col-sm-3">
      <ul class="nav-pills nav-stacked legal_pills affix-top" data-spy="affix" data-offset-top="980">
        <li class="legal_pill "><a href="/terms-and-conditions">Terms and Conditions</a></li>
        <li class="legal_pill"><a href="/complaints-procedure">Complaints Procedure</a> </li>
        <li class="legal_pill"><a href="/treating-customers-fairly">Treating Customers Fairly</a></li>
        <li class="legal_pill"><a href="/initial-disclosure">Initial Disclosure</a></li>
        <li class="legal_pill legal_active"><a href="/privacy-policy">Privacy Policy</a></li>
      </ul>
    </nav>
    <div class="col-sm-9">

      <div id="terms-and-conditions" class="terms_and_conditions_item">
      <h2> Privacy Policy </h2>



        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio quam, scelerisque non lectus eget, pretium accumsan diam. Mauris congue leo magna, ut porttitor elit maximus quis. Nulla sollicitudin nulla in arcu consequat, eget auctor odio aliquam. Vivamus sodales vestibulum turpis et accumsan. Mauris scelerisque neque ac odio tempor dapibus. Maecenas sit amet mauris magna. Donec scelerisque urna eu massa commodo euismod. Nulla tincidunt lectus at tellus hendrerit, non pulvinar urna commodo. </p>


        <p> Aliquam consequat est nulla, ut interdum ligula interdum eu. Maecenas tincidunt sem ac luctus porta. Etiam molestie pellentesque diam, quis maximus nisl pulvinar ac. Vestibulum varius venenatis faucibus. Nulla ut mollis tellus. Nullam sed dictum nisi. Cras convallis consequat egestas. Nullam id ornare arcu. Ut malesuada dolor ut est sollicitudin imperdiet. Aenean at ex facilisis, convallis elit vitae, blandit velit. Nulla non viverra lorem. Sed ac justo et lectus pellentesque dapibus. </p>


        <p> Fusce posuere, leo nec cursus malesuada, ligula metus finibus felis, nec fermentum leo ex vitae urna. Sed a ex maximus, sagittis mi et, faucibus nisi. Suspendisse aliquet arcu sit amet ultricies tristique. Sed convallis finibus sagittis. Mauris ullamcorper, sapien quis molestie pretium, libero metus ultrices ligula, et cursus sem arcu id felis. Aliquam augue massa, dignissim quis massa ac, efficitur volutpat est. Aliquam sit amet viverra ipsum, non fermentum sem. Sed a varius mi. Duis egestas nisi lacinia nisl porta, vel efficitur diam auctor. Donec id nunc erat. Donec non nibh dolor. Nunc in arcu et urna lacinia pellentesque consectetur nec justo. </p>
      </div>


        <div class="more_questions_faq">
        <h2 class="black">Have more questions?</h2>
        <p>Then give us a call to discuss, we're here to help!:</p>
        <h6><img src="images/icons/phone.svg">0113 350 9776</h6>
        </div>




    </div>




  </div>
</div>

</section>



<section class="customers-col">
<div class="container">
<div class="col-md-12">
<div class="title2">
<h1> Your Recently Viewed Vehicles </h1>
</div>
</div>
</div>

<?php include(CONST_ROOTDIR.'/views/site/recently_viewed_vehicles.php'); ?>
</section>


<?php include(CONST_ROOTDIR.'/views/site/newsletter.php'); ?>
