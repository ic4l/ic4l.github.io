<?= $this->extend('_template/_admin/template') ?>

<?= $this->section('content') ?>
  <div class="subheader">
      <h1 class="subheader-title">
          <i class="fas fa-tools"></i> Web Configuration
      </h1>
  </div>

  <div class="row">
    <div class="flashdata" data-flashdata="<?= session()->getFlashdata('xMSG'); ?>"></div>
    <?php if (session()->getFlashdata('xMSG')): ?>
      <div class="col-12">
        <div class="alert alert-success" role="alert">
          Role Succesfully
          <strong><?= session()->getFlashdata('xMSG') ?></strong>
        </div>
      </div>
    <?php endif; ?>
    <?php if (isset($validation)): ?>
      <div class="col-12">
        <div class="alert alert-danger" role="alert">
          <?= $validation->listErrors() ?>
          <h1></h1>
        </div>
      </div>
    <?php endif; ?>
    <div class="col">
      <div class="panel-container show">
          <div class="panel-content">
              <div class="card m-auto border">
                  <div class="card-body col">
                    <?= form_open_multipart(base_url('user/update')) ?>
                    <input type="hidden" name="uid" value="<?= $wconfig['id'] ?>">
                    <div class="form-group">
                      <label class="form-label" for="simpleinput">Web Name</label>
                      <input name="username" type="text" value="<?= $wconfig['name'] ?>" id="simpleinput" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="simpleinput">Web Description</label>
                      <input name="username" type="text" value="<?= $wconfig['description'] ?>" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="example-textarea">Visi</label>
                        <textarea name="visi" class="form-control" id="example-textarea" rows="5"><?= $wconfig['visi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="example-textarea">Misi</label>
                        <textarea name="misi" class="form-control" id="example-textarea" rows="5"><?= $wconfig['misi'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="simpleinput">E-mail</label>
                      <input name="email" type="text" value="<?= $wconfig['email'] ?>" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="simpleinput">Whatsapp</label>
                        <input name="xMobile" type="text" value="<?= $wconfig['whatsapp'] ?>" id="simpleinput" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="simpleinput">Facebook</label>
                        <input name="xFacebook" type="text" value="<?= $wconfig['facebook'] ?>" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="simpleinput">Twitter</label>
                        <input name="xTwitter" type="text" value="<?= $wconfig['twitter'] ?>" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="simpleinput">Instagram</label>
                        <input name="xInstagram" type="text" value="<?= $wconfig['instagram'] ?>" id="simpleinput" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url('user/'.$wconfig['id']); ?>" class="btn btn-success">Cancel</a>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-3">
      <div class="panel-container show">
          <div class="panel-content">
              <div class="card m-auto border">
                  <div class="card-header">
                      Web Logo
                  </div>
                  <div class="card-body col">
                    <img src="<?= base_url('_assets/_admin/img/favicon/'.$wconfig['logo']); ?>" class="shadow-2 img-thumbnail bg-dark rounded mx-auto d-block" alt="">
                    <div class="form-group mb-0 mt-3">
                        <label class="form-label">Change Image</label>
                        <div class="custom-file">
                            <input name="xFile" type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <?= form_close(); ?>
                  </div>
              </div>
          </div>
      </div>
      <div class="panel-container show mt-3">
          <div class="panel-content">
              <div class="card m-auto border">
                  <div class="card-header">
                      Web Icon
                  </div>
                  <div class="card-body col">
                    <img src="<?= base_url('_assets/_admin/img/favicon/'.$wconfig['icon']); ?>" class="shadow-2 img-thumbnail bg-dark rounded mx-auto d-block" alt="">
                    <div class="form-group mb-0 mt-3">
                        <label class="form-label">Change Image</label>
                        <div class="custom-file">
                            <input name="xFile" type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <?= form_close(); ?>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>
