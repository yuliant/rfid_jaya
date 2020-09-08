<section class="section">
    <div class="section-body">

        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <h3><?php echo $tittle; ?></h3>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active bg-primary btn-sm ml-3" href="#" data-toggle="modal" data-target="#addBarangModal">Tambah Barang</a>
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
                                <th class="bg-dark text-white">ID Barang</th>
                                <th class="bg-dark text-white">Nama Barang</th>
                                <th class="bg-dark text-white">Detail</th>
                                <th class="bg-dark text-white">Distributor</th>
                                <th class="bg-light text-dark text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($jenis_barang as $key => $data) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data->id_barang ?></td>
                                    <td><?php echo $data->nama_barang ?></td>
                                    <td><?php echo $data->detail_barang ?></td>
                                    <td><?php echo $data->distributor ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('jenis_barang/delete/') . $data->id_barang ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini?');" class="badge badge-danger btn-xs">Hapus</a>
                                        <a href="<?php echo base_url('jenis_barang/edit/') . $data->id_barang ?>" class="badge badge-warning btn-xs">Edit</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $modal ?>