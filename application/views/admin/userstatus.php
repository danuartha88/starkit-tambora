        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="row">
                <div class="col-lg">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
                    <?php endif; ?>

                    <?= $this->session->flashdata('message'); ?>

                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Image</th>
                                <th scope="col">Role</th>
                                <th scope="col">Member Since</th>
                                <th scope="col">Level</th>
                                <th scope="col">Active</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($member as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><img src="<?= base_url('assets/img/profile/') . $row['image']; ?>" class="card-img"></td>
                                    <td>
                                        <?php if ($row['role_id'] > 1) { ?>
                                            <a href="" class="badge badge-success" data-toggle="modal" data-target="#roleModal<?= $row['id']; ?>">Change Role</a>
                                        <?php } ?>


                                        <?= $row['role']; ?>
                                    </td>
                                    <td><?= date('d F Y', $row['date_created']); ?></td>
                                    <td>
                                        <?php
                                        if ($row['role_id'] > 1) {

                                            echo $row['level'];

                                            ?><br>
                                            <a href="" class="badge badge-success" data-toggle="modal" data-target="#levelModal<?= $row['id']; ?>">Change Level</a>
                                        <?php
                                    } else {
                                        echo "";
                                    }
                                    ?>

                                    </td>
                                    <td><?php
                                        if ($row['role_id'] > 1) {
                                            $active = $row['is_active'];
                                            if ($active > 0) { ?>
                                                <a onclick="return confirm('Do you want to banned this account?');" href="<?= base_url('admin/userdisactivated/') . $row['id']; ?>" class="badge badge-success">Active</a>
                                            <?php  } else { ?>
                                                <a onclick="return confirm('Do you want to activate this account?');" href="<?= base_url('admin/useractivated/') . $row['id']; ?>" class="badge badge-warning">Not Active</a>
                                            <?php  }
                                    } else {
                                        echo "Active";
                                    }
                                    ?> </td>
                                    <?php if ($row['role_id'] > 1) { ?>
                                        <td>
                                            <a onclick="return confirm('Are you sure to delete this account?');" href="<?= base_url('admin/deleteuser/') . $row['id'];  ?>" class="badge badge-danger">delete</td>
                                    <?php  }
                                ?>
                                </tr> <?php $i++; ?> <?php endforeach; ?> </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Modal Level -->
        <?php foreach ($member as $row) : ?>
            <div class="modal fade" id="levelModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="levelModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="levelModalLabel">Change Level</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/ganti_level/') . $row['id']; ?>" method="post">
                            <div class="form-group">
                                <select class="custom-select form-control form-control-sm" id="level_id" name="level_id">

                                    <option value="">--Pilih Level--</option>

                                    <?php foreach ($level as $lvl) : ?>
                                        <option value="<?= $lvl['id']; ?>"><?= $lvl['level']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php foreach ($member as $row) : ?>
            <div class="modal fade" id="roleModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Change Role</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/newadmin/') . $row['id']; ?>" method="post">
                            <div class="form-group">
                                <select class="custom-select form-control form-control-sm" id="role_id" name="role_id">

                                    <option value=""><?= $row['role']; ?></option>

                                    <?php foreach ($role as $r) : ?>
                                        <option value="<?= $r['id']; ?>"><?= $r['role']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>