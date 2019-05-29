        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->

            <h1 class="h3 mb-4 text-gray-800"><?= $judul['ulpl']; ?></h1>

            <h5>Total Daya Terpasang : <?= $total; ?> kW</h5>

            <div class="row">
                <div class="col-lg-6">
                    <form action="<?= base_url('pembangkit'); ?>" class="form-group" method="post">
                        <div class="row">
                            <table>
                                <th>Filter : </th>
                                <td><select class="form-control" name="filter" id="filter">
                                        <option value="">--Pilih PLTD--</option>
                                        <option value="0">TAMBORA</option>
                                        <option value="1">PLTD LABUHAN</option>
                                        <option value="2">PLTD ALAS</option>
                                        <option value="3">PLTD TALIWANG</option>
                                        <option value="4">PLTD EMPANG</option>
                                        <option value="5">PLTMH MAMAK</option>
                                        <option value="6">PLTD SEBOTOK</option>
                                        <option value="7">PLTD LABUHAN AJI</option>
                                        <option value="8">PLTD LEBIN</option>
                                        <option value="9">PLTD BUGIS MEDANG</option>
                                        <option value="10">PLTD KLAWIS</option>
                                        <option value="11">PLTD LUNYUK</option>
                                        <option value="12">PLTD LANTUNG</option>
                                        <option value="13">PLTD BIMA</option>
                                        <option value="14">PLTD NIU</option>
                                        <option value="15">PLTD DOMPU</option>
                                        <option value="16">PLTD SAPE</option>
                                        <option value="17">PLTD BAJO PULO</option>
                                        <option value="18">PLTD NGGELU</option>
                                        <option value="19">PLTD SAMPUNGU</option>
                                        <option value="20">PLTD KORE</option>
                                        <option value="21">PLTD KWANGKO</option>
                                        <option value="22">PLTD PEKAT</option>
                                        <option value="25">PLTMG BIMA</option>
                                        <option value="26">PLTMG SUMBAWA</option>
                                    </select></td>
                                <td><button class="form-control bg-primary">Cari</button></td>
                            </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
                <?php endif; ?>

                <?= $this->session->flashdata('message'); ?>


                <table class="table table-hover" style="font-size:13px;">
                    <thead class="table-info">
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