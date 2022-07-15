<?php include 'head.php'; ?>  

       <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Budget Returns of Revenue and Expenditure  </h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Budget Revenue and Expenditure  </a>
                            </li>
                            <li class="breadcrumb-item active"> Budget Revenue and Expenditure Report</li>
                        </ul>
                    </div>
                </div>
            </div><div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Budget Revenue and Expenditure </strong> Report</h2>
                            
                        </div><form class="form-signin" method="post"    autocomplete="off">
                                <input name="show" type="hidden" value="1">
                        <div class="body">
                            <div class="row clearfix">
                                 
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
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
                         <div class="header">
                            <h5>
                               TEACHERS CONTINUOUS TRAINING INSTITUTE, BIASE
                               </h5>
                               
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                             
                                <table class="table table-bordered" style="font-size:12px">
                         
                              
                                    <thead>
                                     
                                       
                                        <tr>
                                          <th colspan="13" class="center">Budget Returns of Revenue and Expenditure for the Month of <?php $mth = $_POST['pmonth'];?><?= strtoupper(date("F", mktime(0, 0, 0, $mth, 1)));?></th>
                                        </tr>
                                        <tr>
                                            <th class="">S/N</th>
                                     
                                            <th class=""> Date </th>
                                             <th class=""> Revenue Code </th>
                                             <th class="">Description</th>
                                            <th class="">Approve Budget</th>
                                            <th class=""> Monthly Target </th>
                                            <th class=""> Actual Rev/Exp </th>
                                            <th class=""> Monthly Variance </th>
                                            <th class=""> Cumm. Target </th>
                                            <th class=""> Cumm. Rev/Exp to Date </th>
                                            <th class=""> Cumm. Variance </th>
                                            <th class=""> Vote Book Balance </th>
                                            <th class="">  %Cumm on Target</th>
                                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php   $sql="SELECT returns_budget.*, rname 
                                                     from returns_budget 
                                                   join revenuecode ON revenuecode.rcode = returns_budget.rcode 
												   where  MONTH(bdate)  = '$mth' ";
 $ret=mysqli_query($conn,$sql);
   $numm = mysqli_num_rows($ret);
while($cashbook=mysqli_fetch_object($ret)) { 
?>
                                        <tr class="odd gradeX">
                                            <td class="table-img center"><?= $i=$i+1;?></td> 
                                           
                                              <td class=""> <?= date('d-M-Y', strtotime($cashbook->bdate)) ;?> </td>
                                             <td class=""> <?= $cashbook->rcode ;?></td>
                                              <td class=""> <?= $cashbook->description ;?></td>
                                            <td class=""> <?= $cashbook->appbudget ;?></td>
                                            <td class="">  <?= $cashbook->mtarget ;?></td>
                                            <td class=""><?= $cashbook->actualrev_exp ;?> </td>
                                             <td class=""><?= $cashbook->mvariance ;?> </td>
                                              <td class=""><?= $cashbook->cum_target ;?> </td>
                                               <td class=""><?= $cashbook->cum_rev_todate ;?> </td>
                                                <td class=""><?= $cashbook->cvariance ;?> </td>
                                                 <td class=""><?= $cashbook->vbook_bal ;?> </td>
                                                  <td class=""><?= $cashbook->pcum_target ;?> </td>
                                 
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