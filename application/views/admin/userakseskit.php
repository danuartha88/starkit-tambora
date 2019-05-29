        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="row">
                <div class="col-lg-6">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
                    <?php endif; ?>

                    <?= $this->session->flashdata('message'); ?>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($member as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $row['name']; ?></td>
                                    <td><a href="<?= base_url('admin/akses_kit/') . $row['id']; ?>" class="badge badge-warning">Access</a></td>
                                </tr> <?php $i++; ?> <?php endforeach; ?> </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->