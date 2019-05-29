 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="row">
         <div class="col-lg-3">
             <h1 class="h3 mb-4 text-gray-800">Daya Mampu : </h1>
         </div>
         <div class="col-lg-3">
             <h4><?= $date; ?></h4>
         </div>
         <div class="col-lg-6">
             <form class="form-group" action="<?= base_url('labuhan/roh'); ?>" method="post">
                 <table>
                     <tr>
                         <th>Cari data : </th>
                         <td><input class="form-control" type="date" name="tanggal"></td>
                         <td><button type="submit" class="form-control btn btn-primary btn-sm"> go </button></td>
                     </tr>
                 </table>
             </form>
         </div>
         <div class="row col-lg-10">
             <div class="col-lg-5">
                 <h5>Total Daya Terpasang : <?= $total; ?> kW </h5>
             </div>
         </div>

     </div>
     <div class="row">
         <div class="col-lg">
             <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
             <?php endif; ?>

             <?= $this->session->flashdata('message'); ?>

             <table class="table table-hover table-bordered table-responsive" style="font-size: 14px;">
                 <thead class="table-primary">
                     <tr>
                         <th rowspan="3">#</th>
                         <th rowspan="3">Mesin</th>
                         <th rowspan="3">
                             <center> Action</center>
                         </th>
                         <th colspan="3">
                             <center> Declare DM</center>
                         </th>
                     </tr>
                     <tr>
                         <th>Pagi (Subuh)</th>
                         <th>Siang</th>
                         <th>Sore (Malam)</th>
                     </tr>
                     <tr>
                         <th colspan="3">
                             <center> Kw</center>
                         </th>
                     </tr>
                 </thead>
                 <tbody class="table-success">

                     <tr>
                         <td> 1. </td>
                         <td><?= $mesin1['unit_pembangkit']; ?></td>
                         <td><a href="" class="badge badge-pill badge-success" data-toggle="modal" data-target="#unitModalpagi<?= $mesin1['id']; ?>">Pagi</a>|
                             <a href="" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#unitModalsiang<?= $mesin1['id']; ?>">Siang</a>|
                             <a href="" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#unitModalsore<?= $mesin1['id']; ?>">Sore</a>
                         </td>
                         <td><?= $roh['pagi']; ?></td>
                         <td><?= $roh['siang']; ?></td>
                         <td><?= $roh['sore']; ?></td>
                     </tr>
                     <tr>
                         <td> 2. </td>
                         <td><?= $mesin2['unit_pembangkit']; ?></td>
                         <td><a href="" class="badge badge-pill badge-success" data-toggle="modal" data-target="#unitModalpagi<?= $mesin2['id']; ?>">Pagi</a>|
                             <a href="" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#unitModalsiang<?= $mesin2['id']; ?>">Siang</a>|
                             <a href="" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#unitModalsore<?= $mesin2['id']; ?>">Sore</a>
                         </td>
                         <td><?= $roh2['pagi']; ?></td>
                         <td><?= $roh2['siang']; ?></td>
                         <td><?= $roh2['sore']; ?></td>
                     </tr>
                     <tr>
                         <td> 3. </td>
                         <td><?= $mesin3['unit_pembangkit']; ?></td>
                         <td><a href="" class="badge badge-pill badge-success" data-toggle="modal" data-target="#unitModalpagi<?= $mesin3['id']; ?>">Pagi</a>|
                             <a href="" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#unitModalsiang<?= $mesin3['id']; ?>">Siang</a>|
                             <a href="" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#unitModalsore<?= $mesin3['id']; ?>">Sore</a>
                         </td>
                         <td><?= $roh3['pagi']; ?></td>
                         <td><?= $roh3['siang']; ?></td>
                         <td><?= $roh3['sore']; ?></td>
                     </tr>
                     <tr>
                         <td> 4. </td>
                         <td><?= $mesin4['unit_pembangkit']; ?></td>
                         <td><a href="" class="badge badge-pill badge-success" data-toggle="modal" data-target="#unitModalpagi<?= $mesin4['id']; ?>">Pagi</a>|
                             <a href="" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#unitModalsiang<?= $mesin4['id']; ?>">Siang</a>|
                             <a href="" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#unitModalsore<?= $mesin4['id']; ?>">Sore</a>
                         </td>
                         <td><?= $roh4['pagi']; ?></td>
                         <td><?= $roh4['siang']; ?></td>
                         <td><?= $roh4['sore']; ?></td>
                     </tr>
                     <tr>
                         <td> 5. </td>
                         <td><?= $mesin5['unit_pembangkit']; ?></td>
                         <td><a href="" class="badge badge-pill badge-success" data-toggle="modal" data-target="#unitModalpagi<?= $mesin5['id']; ?>">Pagi</a>|
                             <a href="" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#unitModalsiang<?= $mesin5['id']; ?>">Siang</a>|
                             <a href="" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#unitModalsore<?= $mesin5['id']; ?>">Sore</a>
                         </td>
                         <td><?= $roh5['pagi']; ?></td>
                         <td><?= $roh5['siang']; ?></td>
                         <td><?= $roh5['sore']; ?></td>
                     </tr>
                     <tr>
                         <td> 6. </td>
                         <td><?= $mesin6['unit_pembangkit']; ?></td>
                         <td><a href="" class="badge badge-pill badge-success" data-toggle="modal" data-target="#unitModalpagi<?= $mesin6['id']; ?>">Pagi</a>|
                             <a href="" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#unitModalsiang<?= $mesin6['id']; ?>">Siang</a>|
                             <a href="" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#unitModalsore<?= $mesin6['id']; ?>">Sore</a>
                         </td>
                         <td><?= $roh6['pagi']; ?></td>
                         <td><?= $roh6['siang']; ?></td>
                         <td><?= $roh6['sore']; ?></td>
                     </tr>
                     <tr>
                         <td> 7. </td>
                         <td><?= $mesin7['unit_pembangkit']; ?></td>
                         <td><a href="" class="badge badge-pill badge-success" data-toggle="modal" data-target="#unitModalpagi<?= $mesin7['id']; ?>">Pagi</a>|
                             <a href="" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#unitModalsiang<?= $mesin7['id']; ?>">Siang</a>|
                             <a href="" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#unitModalsore<?= $mesin7['id']; ?>">Sore</a>
                         </td>
                         <td><?= $roh7['pagi']; ?></td>
                         <td><?= $roh7['siang']; ?></td>
                         <td><?= $roh7['sore']; ?></td>
                     </tr>
                     <tr>
                         <td> 8. </td>
                         <td><?= $mesin8['unit_pembangkit']; ?></td>
                         <td><a href="" class="badge badge-pill badge-success" data-toggle="modal" data-target="#unitModalpagi<?= $mesin8['id']; ?>">Pagi</a>|
                             <a href="" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#unitModalsiang<?= $mesin8['id']; ?>">Siang</a>|
                             <a href="" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#unitModalsore<?= $mesin8['id']; ?>">Sore</a>
                         </td>
                         <td><?= $roh8['pagi']; ?></td>
                         <td><?= $roh8['siang']; ?></td>
                         <td><?= $roh8['sore']; ?></td>
                     </tr>
                     <tr>
                         <td> 9. </td>
                         <td><?= $mesin9['unit_pembangkit']; ?></td>
                         <td><a href="" class="badge badge-pill badge-success" data-toggle="modal" data-target="#unitModalpagi<?= $mesin9['id']; ?>">Pagi</a>|
                             <a href="" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#unitModalsiang<?= $mesin9['id']; ?>">Siang</a>|
                             <a href="" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#unitModalsore<?= $mesin9['id']; ?>">Sore</a>
                         </td>
                         <td><?= $roh9['pagi']; ?></td>
                         <td><?= $roh9['siang']; ?></td>
                         <td><?= $roh9['sore']; ?></td>
                     </tr>
                     <tr>
                         <td colspan="3">
                             <center> Total Daya Mampu</center>
                         </td>
                         <td><?= $total_pagi; ?></td>
                         <td><?= $total_siang; ?></td>
                         <td><?= $total_sore; ?></td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->
 </div>
 <!-- Modal Pagi -->
 <?php foreach ($mesin as $m) : ?>
     <div class="modal fade bd-example-modal-lg" id="unitModalpagi<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog " role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Daya Mampu Pagi</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form action="<?= base_url('labuhan/updateDm_pagi'); ?>" method="post">
                         <div class="row">
                             <div class="col-lg-12">

                                 <div class="form-group">
                                     <label for="tanggal_id">Tanggal</label>

                                     <select name="tanggal_id" id="tanggal_id">

                                         <option value="">--pilih--</option>
                                         <?php foreach ($tanggal as $t) : ?>
                                             <option value="<?= $t['id']; ?>"><?= $t['tanggal']; ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="form-group">
                                     <label for="pagi"><?= $m['unit_pembangkit']; ?></label>
                                     <input type="hidden" name="mesin_id" id="mesin_id" value="<?= $m['id']; ?>">
                                     <input type="number" class="form-control" id="pagi" name="pagi">
                                 </div>
                             </div>
                         </div>



                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                 </form>
             </div>
         </div>
     </div>
 <?php
endforeach; ?>

 <!-- Modal Siang -->
 <?php foreach ($mesin as $m) : ?>
     <div class="modal fade bd-example-modal-lg" id="unitModalsiang<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog " role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Daya Mampu Siang</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form action="<?= base_url('labuhan/updateDm_pagi'); ?>" method="post">
                         <div class="row">
                             <div class="col-lg-12">

                                 <div class="form-group">
                                     <label for="tanggal_id">Tanggal</label>

                                     <select name="tanggal_id" id="tanggal_id">

                                         <option value="">--pilih--</option>
                                         <?php foreach ($tanggal as $t) : ?>
                                             <option value="<?= $t['id']; ?>"><?= $t['tanggal']; ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="form-group">
                                     <label for="siang"><?= $m['unit_pembangkit']; ?></label>
                                     <input type="hidden" name="mesin_id" id="mesin_id" value="<?= $m['id']; ?>">
                                     <input type="number" class="form-control" id="siang" name="siang">
                                 </div>
                             </div>
                         </div>



                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                 </form>
             </div>
         </div>
     </div>
 <?php
endforeach; ?>

 <!-- Modal Sore -->
 <?php foreach ($mesin as $m) : ?>
     <div class="modal fade bd-example-modal-lg" id="unitModalsore<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog " role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Daya Mampu Sore</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form action="<?= base_url('labuhan/updateDm_pagi'); ?>" method="post">
                         <div class="row">
                             <div class="col-lg-12">

                                 <div class="form-group">
                                     <label for="tanggal_id">Tanggal</label>

                                     <select name="tanggal_id" id="tanggal_id">

                                         <option value="">--pilih--</option>
                                         <?php foreach ($tanggal as $t) : ?>
                                             <option value="<?= $t['id']; ?>"><?= $t['tanggal']; ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="form-group">
                                     <label for="sore"><?= $m['unit_pembangkit']; ?></label>
                                     <input type="hidden" name="mesin_id" id="mesin_id" value="<?= $m['id']; ?>">
                                     <input type="number" class="form-control" id="sore" name="sore">
                                 </div>
                             </div>
                         </div>



                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                 </form>
             </div>
         </div>
     </div>
 <?php
endforeach; ?>