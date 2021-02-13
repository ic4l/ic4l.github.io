<?= $this->extend('_template/_admin/template') ?>

<?= $this->section('content') ?>
<main id="js-page-content" role="main" class="page-content">
  <ol class="breadcrumb page-breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0);">Segotech</a></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item active">Edit</li>
      <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
  </ol>
  <div class="subheader">
      <h1 class="subheader-title">
          <i class='subheader-icon fal fa-edit'></i> Edit User Profile
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
                    <?= form_open_multipart(base_url('user/role_update')) ?>
                    <input type="hidden" name="uid" value="<?= $user['userid'] ?>">
                    <div class="form-group">
                        <label class="form-label" for="inputGroupSelect04">Role</label>
                        <div class="input-group">
                            <select name="xRole" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                              <option value="<?= $user['role'] ?>" selected><?= $user['role'] ?></option>
                              <?php foreach ($groups as $g): ?>
                                <?php if ($g['name'] !== $user['role']): ?>
                                  <option value="<?= $g['id']; ?>" <?= set_select('xRole', $g['id']); ?>><?= $g['name']; ?></option>
                                <?php endif; ?>
                              <?php endforeach; ?>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-default" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                    <?= form_close(); ?>
                    <?= form_open_multipart(base_url('user/update')) ?>
                    <input type="hidden" name="uid" value="<?= $user['userid'] ?>">
                    <div class="form-group">
                      <label class="form-label" for="simpleinput">Username</label>
                      <input readonly name="username" type="text" value="<?= $user['username'] ?>" id="simpleinput" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="simpleinput">E-mail</label>
                      <input readonly name="email" type="text" value="<?= $user['email'] ?>" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="simpleinput">Full Name*</label>
                        <input name="xFullname" type="text" value="<?= $user['fullname'] ?>" id="simpleinput" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="simpleinput">Nickname*</label>
                        <input name="xNickname" type="text" value="<?= $user['nickname'] ?>" id="simpleinput" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="simpleinput">Mobile*</label>
                        <input name="xMobile" type="text" value="<?= $user['mobile'] ?>" id="simpleinput" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="simpleinput">Place of Birth*</label>
                      <input name="xPOB" type="text" value="<?= $user['pob'] ?>" id="simpleinput" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Date of Birth*</label>
                      <input name="xDOB" id="datepicker-4-1" type="text" placeholder="dd/mm/yyyy" value="<?= date_format(new DateTime($user['dob']), "d/m/Y") ?>" data-inputmask="'mask': '99/99/9999'" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="simpleinput">Facebook</label>
                        <input name="xFacebook" type="text" value="<?= $user['facebook'] ?>" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="simpleinput">Twitter</label>
                        <input name="xTwitter" type="text" value="<?= $user['twitter'] ?>" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="simpleinput">Instagram</label>
                        <input name="xInstagram" type="text" value="<?= $user['instagram'] ?>" id="simpleinput" class="form-control">
                    </div>
                    <label class="form-label mb-2">Gender</label>
                    <div class="form-group">
                        <div class="custom-control custom-radio-rounded custom-control-inline">
                            <input value="Male" type="radio" class="custom-control-input" id="GRadio1" name="xGender" <?= ($user['gender'] == 'Male' ? 'checked' : null)  ?> autocomplete="off">
                            <label class="custom-control-label" for="GRadio1">Male</label>
                        </div>
                        <div class="custom-control custom-radio-rounded custom-control-inline">
                            <input value="Female" type="radio" class="custom-control-input" id="GRadio2" name="xGender" <?= ($user['gender'] == 'Female' ? 'checked' : null)  ?>>
                            <label class="custom-control-label" for="GRadio2">Female</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url('user/'.$user['userid']); ?>" class="btn btn-success">Cancel</a>
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
                      Profile Image
                  </div>
                  <div class="card-body col">
                    <img src="<?= base_url('_assets/_images/_users/'.$user['image']); ?>" class="shadow-2 img-thumbnail" alt="">
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
</main>
<?= $this->endSection() ?>
