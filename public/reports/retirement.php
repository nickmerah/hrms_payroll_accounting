<?php include 'head.php'; ?>  

       <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Retirement </h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Retirement </a>
                            </li>
                            <li class="breadcrumb-item active">Retirement Report</li>
                        </ul>
                    </div>
                </div>
            </div><div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Retirement</strong> Report</h2>
                            
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
                               TEACHERS CONTINUOUS TRAINING INSTITUTE, BIASE<BR>RETIREMENT
                               </h5>
                               
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                             
                                <table class="table table-bordered" style="font-size:12px">
                         
                              
                                    <thead>
                                     
                                       
                                        <tr>
                                          <th colspan="8" class="center">Retirement for the Month of <?php $mth = $_POST['pmonth'];?><?= strtoupper(date("F", mktime(0, 0, 0, $mth, 1)));?></th>
                                        </tr>
                                        <tr>
                                            <th class="">S/N</th>
                                     
                                           <th class=""> Approved Date </th>
                                             <th class=""> Directorate </th>
                                             <th class="">Item No</th>
                                            <th class="">Description</th>
                                            <th class=""> Revenue Code </th>
                                            <th class=""> Amount </th>
                                            <th class=""> PV No </th>
                                            
                                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php    $dept=$_POST['dept'];   $sql="SELECT retirement.*, deptname 
                                                     from retirement 
                                                   join departments ON departments.deptid = retirement.dept 
												   where  MONTH(appdate)  = '$mth'  ";
 $ret=mysqli_query($conn,$sql);
   $numm = mysqli_num_rows($ret);
while($cashbook=mysqli_fetch_object($ret)) { 
?>
                                        <tr class="odd gradeX">
                                            <td class="table-img center"><?= $i=$i+1;?></td> 
                                           
                                             <td class=""> <?= date('d-M-Y', strtotime($cashbook->appdate)) ;?> </td>
                                             <td class=""> <?= $cashbook->deptname ;?></td>
                                              <td class=""> <?= $cashbook->itemno ;?></td>
                                            <td class=""> <?= $cashbook->description ;?></td>
                                            <td class="">  <?= $cashbook->rcode ;?></td>
                                            <td class=""><?= $cashbook->amount ;?> </td>
                                             <td class=""><?= $cashbook->pvno ;?> </td>
                                 
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