<?= $this->extend('_template/_admin/template') ?>

<?= $this->section('content') ?>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-user-circle'></i> User Details
        </h1>
    </div>
    <div class="row">
      <div class="flashdata" data-flashdata="<?= session()->getFlashdata('xMSG'); ?>"></div>
      <?php if (session()->getFlashdata('xMSG')): ?>
        <div class="col-12">
          <div class="alert alert-primary" role="alert">
            Data Succesfully
            <strong><?= session()->getFlashdata('xMSG') ?></strong>
          </div>
        </div>
      <?php endif; ?>
        <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">
            <!-- profile summary -->
            <div class="card mb-g rounded-top">
                <div class="row no-gutters row-grid">
                    <div class="col-12">
                        <div class="d-flex flex-column align-items-center justify-content-center p-4">
                            <img src="<?= base_url('_assets/_images/_users/'.$user['image']); ?>" class="shadow-2 img-thumbnail" alt="">
                            <div class="container mt-3 text-center">
                              <form class="d-inline" action="<?= base_url('user/edit'); ?>" method="post">
                                <input type="hidden" name="xUID" value="<?= $user['userid'] ?>">
                                <button type="submit" name="button" class="btn btn-secondary">Edit</button>
                              </form>
                              <form class="d-inline" action="<?= base_url('user/delete'); ?>" method="post">
                                <input type="hidden" name="xUID" value="<?= $user['userid'] ?>">
                                <button type="submit" name="button" class="btn btn-warning" onclick="return confirm('delete?')">Delete</button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $bday = new DateTime($user['dob']);
        $today = new DateTime(date('y-m-d'));
        $diff = $today->diff($bday);
         ?>
        <div class="col-lg-9 col-xl-9 order-lg-3 order-xl-2">
            <div class="card mb-g">
                <div class="card-body pb-0 px-4">
                    <div class="d-flex flex-row pb-3 pt-2  border-top-0 border-left-0 border-right-0">
                        <h1 class="mb-0 flex-1 text-dark fw-500">
                            <?= $user['fullname'] ?>
                            <small class="m-0 l-h-n">
                                "<?= $user['role'] ?>"
                            </small>
                        </h1>
                        <hr>
                    </div>
                    <div class="pb-3 pt-2 border-top-0 border-left-0 border-right-0">
                      <div class="row h3">
                        <div class="col-12 col-md-4">Active</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= ($user['active'] == 1) ? 'Yes' : 'No' ; ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">UID</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= $user['userid'] ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Role</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= $user['role'] ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Full Name</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= $user['fullname'] ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Nickname</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= $user['nickname']; ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">E-mail</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= $user['email']; ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Mobile</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= $user['mobile'] ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Place of Birth</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= $user['pob'] ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Date of Birth</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= date_format(new DateTime($user['dob']), "d/m/Y") ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Age</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?php printf('%d year(s), %d month(s), %d day(s)', $diff->y, $diff->m, $diff->d); ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Gender</div>
                        <div class="col-1 col-md-1">:</div>
                        <?php if ($user['gender'] == 'Male'): ?>
                          <div class="col-11 col-md-7"><i class="fas fa-male"></i> <?= $user['gender']; ?></div>
                        <?php else: ?>
                          <div class="col-11 col-md-7"><i class="fas fa-female"></i> <?= $user['gender']; ?></div>
                        <?php endif; ?>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Facebook</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= $user['facebook'] ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Twitter</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= $user['twitter'] ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Instagram</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= $user['instagram'] ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Created</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= date_format(new DateTime($user['created_at']), "d/m/Y h:m:s A") ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Updated</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= date_format(new DateTime($user['updated_at']), "d/m/Y h:m:s A") ?></div>
                      </div>
                      <div class="row h3">
                        <div class="col-12 col-md-4">Deleted</div>
                        <div class="col-1 col-md-1">:</div>
                        <div class="col-11 col-md-7"><?= date_format(new DateTime($user['deleted_at']), "d/m/Y h:m:s A") ?></div>
                      </div>
                    </div>
                </div>
                <div class="card-footer">
                  <a href="<?= base_url('user/user_list'); ?>" class="card-link">&laquo; &laquo; Back to user list</a>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
