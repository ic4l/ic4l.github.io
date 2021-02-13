<?= $this->extend('_template/_admin/template') ?>

<?= $this->section('content') ?>
<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-table'></i> User <span class='fw-300'>List</span>
    </h1>
</div>

<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-container show">
                <div class="panel-content">

                    <!-- datatable start -->
                    <table id="tbl1" class="table table-bordered table-hover table-striped w-100">
                        <thead>
                          <tr>
                              <th>ID</th>
                              <th>Full Name</th>
                              <th>E-mail</th>
                              <th>Role</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php foreach ($users as $u): ?>
                            <tr>
                                <td><?= $u['userid']; ?></td>
                                <td><a href="<?= base_url('user/'.$u['userid']); ?>"><?= $u['fullname']; ?></a></td>
                                <td><?= $u['email']; ?></td>
                                <td><?= $u['role']; ?></td>
                            </tr>
                          <?php endforeach; ?>

                        </tbody>
                        <tfoot>
                          <tr>
                              <th>ID</th>
                              <th>Full Name</th>
                              <th>E-mail</th>
                              <th>Role</th>
                          </tr>
                        </tfoot>
                    </table>
                    <!-- datatable end -->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
