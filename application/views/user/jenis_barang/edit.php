<section class="section">
    <div class="section-header">
        <h1><?php echo $tittle; ?></h1>
    </div>

    <!-- flashdata message -->
    <div class="section-body">
        <div class="col-12 col-sm-8 col-lg-8">
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="section-body">
        <div class="col-12 col-sm-8 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url('jenis_barang/edit/') . $jenis_barang->id_barang ?>" method="post">
                        <label>ID Barang</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?php echo $jenis_barang->id_barang ?>">
                            <?php echo form_error('id_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <label>Nama Barang</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $jenis_barang->nama_barang ?>">
                            <?php echo form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <label>Detail</label>
                        <div class="form-group">
                            <textarea type="text" class="form-control" id="detail_barang" name="detail_barang"><?php echo $jenis_barang->detail_barang ?></textarea>
                            <?php echo form_error('detail_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <label>Distributor</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="distributor" name="distributor" value="<?php echo $jenis_barang->distributor ?>">
                            <?php echo form_error('distributor', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="card-footer text-right">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>