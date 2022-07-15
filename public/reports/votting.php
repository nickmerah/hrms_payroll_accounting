<?php include 'head.php'; ?>  

       <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> VOTTING</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">VOTTING</a>
                            </li>
                            <li class="breadcrumb-item active">VOTTING Report</li>
                        </ul>
                    </div>
                </div>
            </div><div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>VOTTING</strong></h2>
                            
                        </div><form class="form-signin" method="post"    autocomplete="off">
                                <input name="show" type="hidden" value="1">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="vdate"  required="required" 
     >  
    
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
                                     <?PHP
									 
									 $vv="SELECT votting.*, surname, firstname,
                                                    othername 
                                                     from votting 
                                                   join employee ON employee.eid = votting.payee 
												   where  vdate  = '$_POST[vdate]' ";
 									$rv=mysqli_query($conn,$vv);
 									$r=mysqli_fetch_object($rv);
 ?>
                                       
                                        <tr>
                                          <th colspan="9" class="center">VOTTING</th>
                                        </tr>
                                       
                                        <tr>
                                          <th colspan="2" class="">Head No: <?= $r->headno ;?></th>
                                          <th colspan="2" class="">SubHead No: <?= $r->subheadno ;?></th>
                                          <th colspan="6" class="">Amount Authorized for Expenditure: <?= $r->authamt ;?></th>
                                        </tr> <tr>
                                          <th colspan="4" class="">Services: <?= $r->services ;?></th>
                                          <th colspan="5" class="">Expenditures: <?= $r->expenditures ;?></th>
                                        </tr>
                                        <tr> <th class=""> S/N</th>
                                            <th class=""> Date </th>
                                            
                                           
                                            <th class=""> Pv No </th>
                                            <th class=""> Payee</th>
                                             <th class=""> Payment </th>
                                              <th class="">  Cum </th>
                                               <th class=""> Balance </th>
                                                <th class=""> Particulars </th>
                                                 <th class=""> Remarks </th>
                                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php       $sql="SELECT votting.*, surname, firstname,
                                                    othername 
                                                     from votting 
                                                   join employee ON employee.eid = votting.payee 
												   where  vdate  = '$_POST[vdate]' ";
 $ret=mysqli_query($conn,$sql);
   $numm = mysqli_num_rows($ret);
while($cashbook=mysqli_fetch_object($ret)) { 
?>
                                        <tr class="odd gradeX">
                                            <td class="table-img center"><?= $i=$i+1;?></td> 
                                             <td class=""> <?=date('d-M-Y', strtotime($cashbook->vdate)) ;?> </td>
                                              
                                            <td class=""> <?= $cashbook->pvno ;?></td>
                                            <td class="">  <?= $cashbook->surname ;?> <?= $cashbook->firstname ;?> <?= $cashbook->othername ;?></td>
                                             
                                            <td class=""> <?= $cashbook->payment ;?></td>
                                            <td class="">  <?= $cashbook->cum ;?></td>
                                            <td class=""><?= $cashbook->balance;?> </td>
                                            <td class=""> <?= $cashbook->particulars ;?></td>

                                            <td class=""><?= $cashbook->remark ;?></td>
                                   
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