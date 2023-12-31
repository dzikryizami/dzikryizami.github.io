<!-- Add -->
<div class="modal fade" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Tambah Voters Baru</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="fullname" class="col-sm-3 control-label">Nama Lengkap</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama Lengkap" required>
            </div>
          </div>
          <div class="form-group">
            <label for="kelompok" class="col-sm-3 control-label">Kelompok</label>
            <div class="col-sm-9">
              <select class="form-control" id="kelompok" name="kelompok" required>
                <option value="" selected>- Pilih salah satu -</option>
                <option value="DevGenius">DevGenius</option>
                <option value="PixelPioneers">PixelPioneers</option>
                <option value="BugBusters">BugBusters</option>
                <option value="BitWizard">BitWizard</option>
                <option value="SyntaxStars">SyntaxStars</option>
                <option value="ByteBridges">ByteBridges</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="password" name="password" placeholder="4 Digit NIM terakhir" required>
            </div>
          </div>
          <!-- <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
        <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Edit Voters</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_edit.php">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="edit_fullname" class="col-sm-3 control-label">Nama Lengkap</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_fullname" name="fullname">
            </div>
          </div>
          
          <div class="form-group">
            <label for="edit_kelompok" class="col-sm-3 control-label">Kelompok</label>

            <div class="col-sm-9">
              <select class="form-control" id="edit_kelompok" name="kelompok" required>
                <option value="" selected>- Pilih salah satu -</option>
                <option value="DevGenius">DevGenius</option>
                <option value="PixelPioneers">PixelPioneers</option>
                <option value="BugBusters">BugBusters</option>
                <option value="BitWizard">BitWizard</option>
                <option value="SyntaxStars">SyntaxStars</option>
                <option value="ByteBridges">ByteBridges</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_password" class="col-sm-3 control-label">Password</label>

            <div class="col-sm-9">
              <input type="password" class="form-control" id="edit_password" name="password">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
        <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Perbarui</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Deleting...</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_delete.php">
          <input type="hidden" class="id" name="id">
          <div class="text-center">
            <p>DELETE VOTER?</p>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="photo" class="col-sm-3 control-label">Photo</label>

            <div class="col-sm-9">
              <input type="file" id="photo" name="photo" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
        </form>
      </div>
    </div>
  </div>
</div>