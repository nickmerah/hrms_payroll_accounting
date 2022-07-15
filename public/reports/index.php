<?php  include 'head.php'; ?>  

       <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Reports</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Reports</li>
                        </ul>
                    </div>
                </div>
            </div>
             
            
            <div class="row clearfix">
                <!-- Linked Items -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card"> 
                        <div class="body">
                            <div class="list-group">
                                <a href="<?=$baseurl_links;?>/employees" onClick="return true;" class="list-group-item" target="_blank">
                                    Norminal Roll
                                </a>
                               
                                <a href="<?=$baseurl_links;?>/cashbook" onClick="return true;" class="list-group-item">Cash Book</a>
                                <a href="<?=$baseurl_links;?>/cashrecon" onClick="return true;" class="list-group-item">Cash Book Reconciliation</a>

<a href="<?=$baseurl_links;?>/cashreceipt" onClick="return true;" class="list-group-item">Cash Receipt</a>

<a href="<?=$baseurl_links;?>/weeklymandate" onClick="return true;" class="list-group-item">Weekly Mandate</a>

<a href="<?=$baseurl_links;?>/voucherregistrar" onClick="return true;" class="list-group-item">Voucher Registrar</a>

<a href="<?=$baseurl_links;?>/inventory" onClick="return true;" class="list-group-item">Inventory Profile</a>

<?PHP /*<a href="<?=$baseurl_links;?>/bin" onClick="return true;" class="list-group-item">BIN</a>*/?>

<a href="<?=$baseurl_links;?>/votting" onClick="return true;" class="list-group-item">Votting</a>

<a href="<?=$baseurl_links;?>/rexexp" onClick="return true;" class="list-group-item">Returns on Revenue & Expenditure</a>

<a href="<?=$baseurl_links;?>/budget" onClick="return true;" class="list-group-item">Returns Budget of Revenue & Expenditure</a>

<a href="<?=$baseurl_links;?>/retirement" onClick="return true;" class="list-group-item">Retirement</a>

 

                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Linked Items -->
            </div>
            
        </div>
    </section>
    <?php  include 'bottom.php'; ?>  