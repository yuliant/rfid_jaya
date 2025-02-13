<div class="modal fade" id="addBarangModal" tabindex="-1" role="dialog" aria-labelledby="addBarangModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBarangModalLabel">Tambah Jenis Barang</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?php echo base_url('jenis_barang/add'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>ID Barang</label>
                        <input type="number" class="form-control" id="id_barang" name="id_barang">
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <textarea type="text" class="form-control" id="detail_barang" name="detail_barang"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Distributor</label>
                        <input type="text" class="form-control" id="distributor" name="distributor">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-dark" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>