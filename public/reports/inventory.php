<?php include 'head.php'; ?>  

       <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Inventory/Data/Stock  </h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Inventory/Data/Stock  </a>
                            </li>
                            <li class="breadcrumb-item active">Inventory/Data/Stock Profile</li>
                        </ul>
                    </div>
                </div>
            </div><div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Inventory/Data/Stock </strong> Profile</h2>
                            
                        </div><form class="form-signin" method="post"    autocomplete="off">
                                <input name="show" type="hidden" value="1">
                        <div class="body">
                            <div class="row clearfix">
                                 
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select class="form-control select2" data-placeholder="Select" name="dept"  required="required" >
                                            <option value="">Select Directorate</option>
                                            
                             <?php
                                                    $query = "
													SELECT deptid, deptname FROM departments group by deptid ";
                                                    $result = mysqli_query($conn,$query)
                                                    or die(mysqli_error());
													 
													
													
													
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                         
                                                        ?>               
                                           <option value="<?=$row['deptid']; ?>"><?=$row['deptname']; ?></option>
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
                         <div class="header">
                            <h5>
                               TEACHERS CONTINUOUS TRAINING INSTITUTE, BIASE<BR>INVENTORY/DATA/STOCK PROFILE
                               </h5>
                               <BR>
                              
                            <h6>DIRECTORATE: <?= getdeptname($_POST['dept']); ?><br> <BR>
                               LOCATION: .........................
                               </h6>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                             
                                <table class="table table-bordered" style="font-size:12px">
                         
                              
                                    <thead>
                                     
                                       
                                        <tr>
                                          <th colspan="8" class="center"></th>
                                        </tr>
                                        <tr>
                                            <th class="">S/N</th>
                                     
                                            <th class=""> Item </th>
                                             <th class=""> Quantity </th>
                                             <th class=""> Unit Price</th>
                                            <th class="">Total Cost</th>
                                            <th class=""> Remarks </th>
                                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php    $dept=$_POST['dept'];   $sql="SELECT inventory.*, deptname 
                                                     from inventory 
                                                   join departments ON departments.deptid = inventory.dept 
												   where  dept = '$dept'  ";
 $ret=mysqli_query($conn,$sql);
   $numm = mysqli_num_rows($ret);
while($cashbook=mysqli_fetch_object($ret)) { 
?>
                                        <tr class="odd gradeX">
                                            <td class="table-img center"><?= $i=$i+1;?></td> 
                                           
                                              <td class=""> <?= $cashbook->item ;?></td>
                                            <td class=""> <?= $cashbook->qty ;?></td>
                                            <td class="">  <?= $cashbook->uprice ;?></td>
                                            <td class=""><?= $cashbook->tcost ;?> </td>
                                           <td class=""> <?= $cashbook->remarks ;?></td>
                                 
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