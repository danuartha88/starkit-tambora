        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <?php foreach ($title as $t) : ?>
                <h1 class="h3 mb-4 text-gray-800"><?= $t['ulpl']; ?></h1>
            <?php endforeach; ?>
            <h5>Total Daya Terpasang : <?= $total; ?> kW</h5>


            <div class="row">
                <div class="col-lg">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
                    <?php endif; ?>

                    <?= $this->session->flashdata('message'); ?>

                    <table class="table table-hover" style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Type</th>
                                <th scope="col">No Seri</th>
                                <th scope="col">Daya Terpasang</th>
                                <th scope="col">Satuan</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pembangkit as $k) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $k['unit_pembangkit']; ?></td>
                                    <td><?= $k['type']; ?></td>
                                    <td><?= $k['no_seri']; ?></td>
                                    <td><?= $k['daya_terpasang']; ?></td>
                                    <td>kW</td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>