        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        </div>
        <!-- /.container-fluid -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <a href="<?= base_url('admin/role'); ?>">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem; height: 16rem;">
                  <div class="card-header bg-info"><span class="fas fa-user-shield"> Role</span></div>
                  <div class="card-body">
                    <h5 class="card-title">Role Access User</h5>
                    <p class="card-text">Menu Role adalah menu yang memungkinkan anda untuk membatasi akses setiap user yang anda inginkan.</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4">
              <a href="<?= base_url('admin/userstatus'); ?>">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem; height: 16rem;">
                  <div class="card-header bg-success"><span class="fas fa-user-cog"> User Activation</span></div>
                  <div class="card-body">
                    <h5 class="card-title">Menu User Activation</h5>
                    <p class="card-text">Menu User Activation adalah menu yang memungkinkan anda untuk aktivasi user dan memberikan akses yang sesuai pada user tersebut.</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4">
              <a href="<?= base_url('user'); ?>">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem; height: 16rem;">
                  <div class="card-header bg-warning">User</div>
                  <div class="card-body">
                    <h5 class="card-title">Menu User Setting</h5>
                    <p class="card-text">Menu User Setting adalah menu yang memungkinkan anda untuk melakukan konfigurasi pada akun anda.</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>





        </div>
        <!-- End of Main Content -->