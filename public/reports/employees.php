<?php include 'headr.php'; ?>  

<body class="light">
 
   <div class="container-fluid"><div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h5>
                               TEACHERS CONTINUOUS TRAINING INSTITUTE, BIASE<BR>NORMINALL ROLL <?=date('Y');?></h5>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-bordered" style="font-size:12px">
                         
                              
                                    <thead>
                                     
                                       
                                        <tr>
                                            <th class="center">S/N</th>
                                            
                                            <th class="center">NAME</th>
                                            <th class="center">DIRECTORATE</th>
                                            <th class="center"> PRESENT POSITION</th>
                                             <th class="center"> SALARY GRADE/LEVEL</th>
                                              <th class="center"> SALARY STRUCTURE</th>
                                               <th class="center"> DATE OF FIRST APPOINTMENT</th>
                                                <th class="center"> QUALIFICATION</th>
                                                 <th class="center"> DATE OF BIRTH</th>
                                                  <th class="center"> STATE OF ORIGIN</th>
                                                   <th class="center"> LGA</th>
                                                    <th class="center">GENDER</th>
                                                     <th class="center"> PHONE NO</th>
                                                     <th class="center">SENT.ZONE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php      $sql="SELECT employee.*, deptname, positionname,
                                                    sgradename, slevelname, structurename,
                                                    sdname, state_name,lga_name
                                                     from employee 
                                                   join departments ON employee.dept = departments.deptid
                                                   join position ON employee.position = position.pid 
                                                   join salarygrade ON employee.position = salarygrade.sid 
                                                   join salarylevel ON employee.position = salarylevel.lid 
                                                   join salarystructure ON employee.position = salarystructure.sid 
                                                   join senatorialdistrict ON employee.position = senatorialdistrict.id 
                                                   join `state` ON employee.position = `state`.`state_id`
                                                   join lga ON employee.position = lga.lga_id ";
 $ret=mysqli_query($conn,$sql);
   $numm = mysqli_num_rows($ret);
while($d=mysqli_fetch_assoc($ret)) { 
?>
                                        <tr class="odd gradeX">
                                            <td class="table-img center"><?= $i=$i+1;?></td> 
                                            <td class="center"><?= $d[surname];?> <?= $d[firstname];?> <?= $d[othername];?></td>
                                            <td class="center"><?= $d[deptname];?></td>
                                            <td class="center"><?= $d[positionname];?></td>
                                            <td class="center"><?= $d[sgradename];?>/<?= $d[slevelname];?></td>
                                            <td class="center"><?= $d[structurename];?></td>
                                            <td class="center"><?= date('d.m.Y', strtotime($d[dateofappointment]));?></td>
                                            <td class="center"><?= $d[qualification];?></td>
                                            <td class="center"><?= date('d.m.Y', strtotime($d[dob]));?></td>
                                            <td class="center"><?= $d[state_name];?></td>
                                            <td class="center"><?= $d[lga_name];?></td>
                                            <td class="center"><?= $d[gender];?></td>
                                            <td class="center"><?= $d[gsm];?></td>
                                            <td class="center"><?= $d[sdname];?></td>
                                        </tr>  <?php } ?>    
                                    </tbody>
                                    
                                </table>
                            </div>
                           
                            </div>
              </div> <div align = "center"><strong>Export to Excel</strong></div>
                    </div>
                
        </div>

     
</body>
   