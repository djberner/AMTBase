<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Further Answered Questions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
  <div class="col-md-12">
    <div class="page-title-dark">
      <h1> Frequently asked questions </h1>
    </div>
  </div>
</div>
<section class="faq_content">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 text-center faq_subtitle"><h3> Choose a category </h3></div>

      <div class="faq_nav">

          <div class="">

        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_left wow fadeIn">
          <a href="#about-leasing">
            <div class="faq_block">
            <img src="/images/icons/about_leasing.png"/> <span> About leasing </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
            </div>
          </a>
        </div>


        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_center wow fadeInLeft" data-wow-delay="0.2s">
          <a href="#choosing-the-right-option">
          <div class="faq_block">
            <img src="/images/icons/choosing_the_right_option.png"/> <span> Choosing the right leasing option </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
        </div>

        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_right wow fadeInDown" data-wow-delay="0.4s">
          <a href="#delivery">
          <div class="faq_block">
            <img src="/images/icons/delivery.png"/> <span> Delivery </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
        </div>
      </div>

      <div class="">
        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_left wow fadeInLeft" data-wow-delay="1.4s">
          <a href="#the-financials">
          <div class="faq_block">
            <img src="/images/icons/the_financials.png"/> <span> The financials </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
        </div>
        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_center wow fadeIn" data-wow-delay="1.6s">
          <div class="faq_block">
            <a href="#warranty-and-breakdown">
            <img src="/images/icons/warranty_and_breakdown.png"/> <span> Warranty and breakdown </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
        </div>

        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_right wow fadeInDown" data-wow-delay="0.6s">
          <a href="#mileage">
          <div class="faq_block">
            <img src="/images/icons/mileage.png"/> <span> Mileage </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
      </div>
    </div>

    <div class="">
        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_left wow fadeInUp" data-wow-delay="1.2s">
          <a href="#tax-and-insurance">
          <div class="faq_block">
            <img src="/images/icons/tax_and_insurance.png"/> <span> Tax and insurance </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
      </div>
        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_center wow fadeInLeft" data-wow-delay="1s">
          <a href="#maintenance-and-servicing">
          <div class="faq_block">
            <img src="/images/icons/maintenance_and_servicing.png"/> <span> Maintenance and servicing</span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
        </a>
      </div>
        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_right wow fadeInLeft" data-wow-delay="0.8s">
          <a href="#end-of-contract">
          <div class="faq_block">
            <img src="/images/icons/end_of_contract.png"/> <span> End of contract </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
        </a>
      </div>
    </div>

      </div>

    </div>
  </div>
</section>
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
      <ul class="nav-pills nav-stacked faq_pills affix-top" data-spy="affix" data-offset-top="980">
        <li class="faq_pill"><a href="#about-leasing">About Leasing</a></li>
        <li class="faq_pill"><a href="#choosing-the-right-option">Choosing the right leasing option</a> </li>
        <li class="faq_pill"><a href="#delivery">Delivery</a></li>
        <li class="faq_pill"><a href="#the-financials">The financials</a></li>
        <li class="faq_pill"><a href="#warranty-and-breakdown">Warranty and breakdown</a></li>
        <li class="faq_pill"><a href="#mileage">Mileage</a></li>
        <li class="faq_pill"><a href="#tax-and-insurance">Tax and insurance</a></li>
        <li class="faq_pill"><a href="#maintenance-and-servicing">Maintenance and servicing</a></li>
        <li class="faq_pill"><a href="#end-of-contract">End of contract</a></li>
      </ul>
    </nav>
    <div class="col-sm-9">

      <div id="about-leasing" class="faq_answer_item">
      <h2> About leasing </h2>


        <h3> What is leasing? </h3>
        <p> Leasing is an agreement between the funder and a customer which allows you to drive a brand-new car for a fixed term for an agreed initial payment and regular monthly payments for the term of contract. At the end of the contract, you simply return the car. </p>

        <h3> Why would you lease instead of buying a car or van? </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis cursus dolor. Ut dictum malesuada ipsum, et finibus enim fringilla a. Aliquam lorem turpis, accumsan nec tortor in, ultrices vestibulum augue. Fusce rutrum dolor libero, venenatis lacinia metus interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

        <h3> Why should I lease from AMT Leasing? </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis cursus dolor. Ut dictum malesuada ipsum, et finibus enim fringilla a. Aliquam lorem turpis, accumsan nec tortor in, ultrices vestibulum augue. Fusce rutrum dolor libero, venenatis lacinia metus interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
      </div>

      <div id="choosing-the-right-option" class="faq_answer_item">
      <h2> Choosing the right option </h2>

        <h3> Lorem Ipsum Title </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis cursus dolor. Ut dictum malesuada ipsum, et finibus enim fringilla a. Aliquam lorem turpis, accumsan nec tortor in, ultrices vestibulum augue. Fusce rutrum dolor libero, venenatis lacinia metus interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
      </div>

      <div id="delivery" class="faq_answer_item">
      <h2> Delivery </h2>

        <h3> Lorem Ipsum </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis cursus dolor. Ut dictum malesuada ipsum, et finibus enim fringilla a. Aliquam lorem turpis, accumsan nec tortor in, ultrices vestibulum augue. Fusce rutrum dolor libero, venenatis lacinia metus interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
      </div>

      <div id="the-financials" class="faq_answer_item">
      <h2> The Financials </h2>

        <h3> Lorem Ipsum </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis cursus dolor. Ut dictum malesuada ipsum, et finibus enim fringilla a. Aliquam lorem turpis, accumsan nec tortor in, ultrices vestibulum augue. Fusce rutrum dolor libero, venenatis lacinia metus interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
      </div>

      <div id="warranty-and-breakdown" class="faq_answer_item">
      <h2> Warranty and Breakdown </h2>

        <h3> Lorem Ipsum </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis cursus dolor. Ut dictum malesuada ipsum, et finibus enim fringilla a. Aliquam lorem turpis, accumsan nec tortor in, ultrices vestibulum augue. Fusce rutrum dolor libero, venenatis lacinia metus interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
      </div>


      <div id="mileage" class="faq_answer_item">
      <h2> Mileage </h2>

        <h3> Lorem Ipsum </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis cursus dolor. Ut dictum malesuada ipsum, et finibus enim fringilla a. Aliquam lorem turpis, accumsan nec tortor in, ultrices vestibulum augue. Fusce rutrum dolor libero, venenatis lacinia metus interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
      </div>
      <div id="tax-and-insurance" class="faq_answer_item">
      <h2> Tax and Insurance </h2>

        <h3> Lorem Ipsum </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis cursus dolor. Ut dictum malesuada ipsum, et finibus enim fringilla a. Aliquam lorem turpis, accumsan nec tortor in, ultrices vestibulum augue. Fusce rutrum dolor libero, venenatis lacinia metus interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
      </div>
      <div id="maintenance-and-servicing" class="faq_answer_item">
      <h2> Maintenance and Servicing </h2>

        <h3> Lorem Ipsum </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis cursus dolor. Ut dictum malesuada ipsum, et finibus enim fringilla a. Aliquam lorem turpis, accumsan nec tortor in, ultrices vestibulum augue. Fusce rutrum dolor libero, venenatis lacinia metus interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
      </div>
      <div id="end-of-contract" class="faq_answer_item">
      <h2> End of Contract </h2>

        <h3> Lorem Ipsum </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis cursus dolor. Ut dictum malesuada ipsum, et finibus enim fringilla a. Aliquam lorem turpis, accumsan nec tortor in, ultrices vestibulum augue. Fusce rutrum dolor libero, venenatis lacinia metus interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
      </div>


        <div class="more_questions_faq">
        <h2 class="black">Have more questions?</h2>
        <p>Then give us a call to discuss, we're here to help!:</p>
        <h6><img src="/images/icons/phone.svg">0113 350 9776</h6>
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
