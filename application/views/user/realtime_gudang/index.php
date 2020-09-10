<section class="section">
    <div class="section-body">

        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <h3><?php echo $tittle; ?></h3>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active bg-danger btn-sm ml-3" href="<?php echo base_url('user/RealtimeGudang/delete') ?>" onclick="return confirm('Apakah anda yakin ingin menghapus semua data realtime gudang?');">Hapus Data</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- flashdata message -->
        <?php echo $this->session->flashdata('message'); ?>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-md" id="table-pendaftar">
                        <thead>
                            <tr>
                                <th class="bg-dark text-white">No</th>
                                <th class="bg-dark text-white">Nama Barang</th>
                                <th class="bg-dark text-white">Distributor</th>
                                <th class="bg-dark text-white">Keterangan</th>
                                <th class="bg-dark text-white">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody class="show_product">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>