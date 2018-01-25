<div class="cpost_vdtlshead">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="vdtls_hdng"><h3>Vehicle details </h3></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="vdtls_dbtn"><button  type="submit">Download Spec sheet</button></div>
        </div>
    </div>
</div><!--cpost_vdtlshead-->

<div class="cpost_speclist">

    <ul>

        <li>
            <figure><img src="/images/icons/MPG.svg"></figure>
            <h4>MPG</h4>
            <h5><?= $content["urbanmpg"] ?> - <?=$content["extraurbanmpg"] ?> </h5>
        </li>
        <li>
            <figure><img src="/images/icons/transmission.svg"></figure>
            <h4>Transmission</h4>
            <h5><?=$content["Derivative_Transmission"] ?></h5>
        </li>

        <li>
            <figure><img src="/images/icons/max-occupancy.svg"></figure>
            <h4>Max. occupancy</h4>
            <h5><?= $content["numseats"] ?></h5>
        </li>

        <li>
            <figure><img src="/images/icons/fuel-typecp.svg"></figure>
            <h4>Fuel type</h4>
            <h5><?=$content["Derivative_Fuel_Type"] ?></h5>
        </li>
        <li>
            <figure><img src="/images/icons/Insurance-group.svg"></figure>
            <h4>Insurance group</h4>
            <h5><?= $content["insgroup"] ?> </h5>
        </li>
        <li>
            <figure><img src="/images/icons/CO2.svg"></figure>
            <h4>Co2</h4>
            <h5><?= $content["co2"] ?> g/km</h5>
        </li>

        <li>
            <figure><img src="/images/icons/piggy-bank.svg"></figure>
            <h4>Bik tax (20%40%)</h4>
            <h5>£35.47 / £70.93 p/m</h5>
        </li>

        <li>
            <figure><img src="/images/icons/0-60.svg"></figure>
            <h4>0 - 62</h4>
            <h5><?= $content["zeroto62"] ?> seconds</h5>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>