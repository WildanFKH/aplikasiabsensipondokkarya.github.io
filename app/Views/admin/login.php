<?= $this->extend('templates/starting_page_layout'); ?>
<?= $this->section('content'); ?>
<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 m-auto">
        <div class="card" data-image="/path-to-your-image.jpg">
  <div class="card-body mx-5 my-3">
    <?= view('\App\Views\admin\_message_block') ?>
    <img src="<?= base_url('public/assets/img/logo_dashboard.png'); ?>" alt="Logo Sekolah" class="mx-auto d-block" />
    
    <!-- Tambahaan elemen <div> dengan padding untuk spasi -->
    <div style="padding: 20px;"></div>
    
    <form action="<?= url_to('login') ?>" method="post">
      <?= csrf_field() ?>
      <div class="row">
        <div class="col-md-12">
          <?php if ($config->validFields === ['email']) : ?>
            <div class="form-group">
              <label class="bmd-label-floating"><?= lang('Auth.email') ?></label>
              <input
                type="email"
                class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                name="login"
                autofocus
              />
              <div class="invalid-feedback">
                <?= session('errors.login') ?>
              </div>
            </div>
          <?php else : ?>
            <div class="form-group">
              <label class="bmd-label-floating"><?= lang('Auth.emailOrUsername') ?></label>
              <input
                type="text"
                class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                name="login"
                autofocus
              />
              <div class="invalid-feedback">
                <?= session('errors.login') ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Password</label>
            <input
              type="password"
              name="password"
              class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
            />
            <div class="invalid-feedback">
              <?= session('errors.password') ?>
            </div>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-primary btn-block">
        <?= lang('Auth.loginAction') ?>
      </button>

      <?php if ($config->activeResetter) : ?>
        <p>
          <a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
        </p>
      <?php endif; ?>
      <div class="clearfix"></div>
    </form>
  </div>
</div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
