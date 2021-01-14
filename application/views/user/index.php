<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <br>
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['name']; ?></h5>
                    <p class="card-text"><?= $user['ttl']; ?></p>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><?= $user['religion']; ?></p>
                    <p class="card-text"><?= $user['address']; ?></p>
                    <p class="card-text"><?= $user['telephone']; ?></p>
                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div><br>
            </div>
        </div>
    </div>
 <!-- Brand Buttons -->
            <center>
              <div class="card shadow mb-4 col-lg-8">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Brand In my Company</h6>
                </div>
                <div class="card-body">
                  <p>Google and Facebook buttons are available featuring each company's respective brand color. They are used on the user login and registration pages.</p>
                  <p>You can create more custom buttons by adding a new color variable in the <code>_variables.scss</code> file and then using the Bootstrap button variant mixin to create a new style, as demonstrated in the <code>_buttons.scss</code> file.</p>
                  <a href="https://instagram.com/cacudin" class="btn btn-google btn-block"><i class="fab fa-instagram fa-fw"></i> @cacudin</a>
                  <a href="https://facebook.com/udincacu" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f fa-fw"></i>cacudin</a>

                </div>
              </div>

            </div>
        </center>
</div>
<!-- /.container-fluid -->


