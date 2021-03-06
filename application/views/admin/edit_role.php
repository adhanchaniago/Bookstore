<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
<div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('admin/role_update'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $role->id ?>">
            <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" id="role" name="role" value="<?= $role->role ?>">
                    <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save Change</button>
                    <a href="<?= base_url('admin/role'); ?>"><div class="btn btn-danger">Cancel</</a>
            </div>
                </div>
            </form>

        </div>

</div>

</div>
<!-- /.container-fluid -->
  </div>
<!-- End of Main Content -->