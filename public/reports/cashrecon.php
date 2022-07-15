<?php include 'head.php'; ?>  

       <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> CashBook Reconciliation</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">CashBook Reconciliation</a>
                            </li>
                            <li class="breadcrumb-item active">CashBook Reconciliation Report</li>
                        </ul>
                    </div>
                </div>
            </div><div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Cashbook Reconciliation</strong> Report</h2>
                            
                        </div><form class="form-signin" method="post"    autocomplete="off">
                                <input name="show" type="hidden" value="1">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          
     <select class="form-control select2" data-placeholder="Select" name="pmonth"  required="required" >
                                            <option value="">Select Month</option>
                                           <option value="1">January</option>
                                           <option value="2">February</option>
                                           <option value="3">March</option>
                                           <option value="4">April</option>
                                           <option value="5">May</option>
                                           <option value="6">June</option>
                                           <option value="7">July</option>
                                           <option value="8">August</option>
                                           <option value="9">September</option>
                                           <option value="10">October</option>
                                           <option value="11">November</option>
                                           <option value="12">December</option>
                                   
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select class="form-control select2" data-placeholder="Select" name="year"  required="required" >
                                            <option value="">Select Year</option>
                                            
                             <?php
                                                    $query = "SELECT YEAR(rdate) as year FROM reconciliation group by YEAR(rdate) ";
                                                    $result = mysqli_query($conn,$query)
                                                    or die(mysqli_error());
													 
													
													
													
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                         
                                                        ?>               
                                           <option value="<?=$row['year']; ?>"><?=$row['year']; ?></option>
                                           <?php } ?>
                                   
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="col-lg-8">
                                        <button class="btn btn-default submit">View Report</button>
                                    </div>
                                </div>
                            </div>
                        </div></form>
                    </div>
                </div>
            </div>
            <?php if ($_POST ['show']) { ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        
                        <div class="body">
                            <div class="table-responsive">
                             
                                <table class="table table-bordered" style="font-size:12px">
                         
                              
                                    <thead>
                                     
                                       
                                        <tr>
                                          <th colspan="11" class="center">CASH BOOK RECONCILIATION - <?php $mth = $_POST['pmonth'];?><?= strtoupper(date("F", mktime(0, 0, 0, $mth, 1)));?>, <?= $yr = $_POST['year'];?></th>
                                        </tr>
                                        <tr>
                                         <th class=""> S/N </th>
                                            <th class=""> Date </th>
                                             <th class=""> Particulars </th>
                                             <th class=""> PVS No</th>
                                            <th class="">RV No</th>
                                            <th class=""> Cheque No </th>
                                            <th class=""> Memo Amount </th>
                                            <th class=""> Debit </th>
                                            <th class=""> Credit</th>
                                            <th class="">CumBalance</th>
                                             <th class="">Account Code</th>
                                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php      $sql="SELECT * 
                                                     from reconciliation 
                                                  
												   where MONTH(rdate) = '$mth' and YEAR(rdate) = '$yr' ";
 $ret=mysqli_query($conn,$sql);
   $numm = mysqli_num_rows($ret);
while($d=mysqli_fetch_object($ret)) { 
?>
                                        <tr class="odd gradeX">
                                            <td class="table-img center"><?= $i=$i+1;?></td> 
                                            <td class="center"><?= date('d-M-Y', strtotime($d->rdate));?> </td>
                                            <td class="center"><?= $d->particulars;?></td>
                                            <td class="center"><?= $d->pvsno;?></td>
                                            <td class="center"><?= $d->rvno;?></td>
                                            <td class="center"><?= $d->chequeno;?></td>
                                            <td class="center"><?= $d->memoamt;?></td>
                                            <td class="center"><?= $d->debit;?></td>
                                            <td class="center"><?= $d->credit;?></td>
                                            <td class="center"><?= $d->cumbalance;?></td>
                                 			<td class="center"><?= $d->acctcode;?></td>
                                        </tr>  <?php } ?>    
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><?php } ?>
        </div>
    </section>
    <?php include 'bottom.php'; ?>  