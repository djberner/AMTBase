<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Glossary';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
  <div class="col-md-12">
    <div class="page-title-dark">
      <h1 class="wow fadeInUp"> Glossary </h1>
      <p class="wow fadeInUp" data-wow-delay="0.2s"> The leasing industry is awash with jargon and acronyms! We want to be as transparent as possible so we've put together a handy glossary to help you out. </p>
    </div>
  </div>
</div>
<section class="glossary_content">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 text-center glossary_subtitle"><h3>Select a term to be taken to the description </h3></div>

      <div class="glossary_nav">
        <div class="col-md-4 col-xs-4 col-lg-4 col-sm-4">
          <h4> A - C </h4>

          <li><a class="wow fadeInUp" data-wow-delay="0.4s" href="#lipsum1"> Annual mileage </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.4s" href="#lipsum1"> Balloon Payment </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.4s" href="#lipsum1"> BIK (Benefit in kind) </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.4s" href="#lipsum1"> Business Contract Hire (BCH) </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.4s" href="#lipsum1"> Business Contract Purchase (BCP) </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.4s" href="#lipsum1"> Business Finance Lease (BFL) </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.4s" href="#lipsum1"> BVRLA </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.4s" href="#lipsum1"> Contract Hire </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.4s" href="#lipsum1"> Contract Length </a></li>
        </div>

        <div class="col-md-4 col-xs-4 col-lg-4 col-sm-4">
          <h4> D - K </h4>

          <li><a class="wow fadeInUp" data-wow-delay="0.5s" href="#lipsum2"> Depreciation </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.5s" href="#lipsum2"> Document Fee </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.5s" href="#lipsum2"> Excess Mileage Charge </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.5s" href="#lipsum2"> Fleet Management </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.5s" href="#lipsum2"> Funder </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.5s" href="#lipsum2"> GAP Insurance </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.5s" href="#lipsum2"> Hire Purchase </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.5s" href="#lipsum2"> Initial Payment </a></li>

        </div>
        <div class="col-md-4 col-xs-4 col-lg-4 col-sm-4">
          <h4> L - Z </h4>

          <li><a class="wow fadeInUp" data-wow-delay="0.6s" href="#lipsum3"> Lease Purchase (LP) </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.6s" href="#lipsum3"> Maintenance </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.6s" href="#lipsum3"> Manufacturer Warranty </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.6s" href="#lipsum3"> Personal Contract Hire (PCH)</a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.6s" href="#lipsum3"> Processing Fee </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.6s" href="#lipsum3"> Residual Fee </a></li>
          <li><a class="wow fadeInUp" data-wow-delay="0.6s" href="#lipsum3"> Wear and Tear </a></li>
        </div>

      </div>

    </div>
  </div>
</section>
<section class="glossary_terms wow fadeInUp">
<div class="container">

  <div class="glossary_items">

  <div class="glossary_item" id="lipsum1">
    <h3> Annual mileage </h3>
    <p> As part of your leasing contract you will agree to stick to an annual mileage limit. This is because the
mileage you do is closely linked to the depreciation of the vehicle, and the monthly fee you pay is for t
depreciation of the vehicle over time. The annual mileage is normally anything from 5,000 to 50,000
miles per year. </p>
  </div>

  <div class="glossary_item" id="lipsum2">
    <h3> Balloon payment </h3>
    <p> A feature of Contract Purchases and Personal Contract Purchase, this is a final payment that is agreed a
the start of the contract but not made until the end. The payment is of higher value than your regular
payment charges and once paid, you take ownership of the vehicle. </p>
  </div>

  <div class="glossary_item" id="lipsum3">
    <h3> BIK (benefit in kind) </h3>
    <p> Benefit in kind are benefits which employees or directors receive from their employment but which are
not included in their salary cheque or wage. If you use a company car for private use, you will have to
pay benefit in kind tax. How much depends on a number of factors, use our BIK calculator to estimate
how much you will pay. </p>
  </div>

  <div class="glossary_item" id="lipsum3">
    <h3> Business contract hire (BCH) </h3>
    <p> A business contract hire agreement allows you to lease a vehicle a set period of time which is typically
between 24 and 60 months. During that time you pay an agreed monthly fee and then vehicle is then
returned at the end of the term. </p>
  </div>

</div>

</div>
</section>

<div class="container">
  <div class="more_questions wow fadeInUp">
  <h2 class="black">Have more questions?</h2>
  <p>Then give us a call to discuss, we're here to help!:</p>
  <h6><img src="/images/icons/phone.svg">0113 350 9776</h6>
  </div>
</div>

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
