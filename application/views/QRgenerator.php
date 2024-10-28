<div class="container mt-5">
    <h2 class="mb-4">Senarai Kafe</h2>
    <div class="mb-4">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No. Kafe</th>
                    <th>Nama Kafe</th>
                    <th>Lokasi</th>
                    <!-- <th>Transaksi</th> -->
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cafe as $cafes): ?>
                    <tr>
                        <td><?php echo $cafes->NO_KAFE; ?></td>
                        <td><?php echo $cafes->NAMA_KAFE; ?></td>
                        <td><?php echo $cafes->LOKASI; ?></td>
                        <td>
                            <a class="btn btn-success mdi mdi mdi-qrcode menu-icon" href="<?php echo base_url();?>CafeController/transList/<?php echo $cafes->NAMA_KAFE; ?>">
                                View
                            </a>
                        </td>
                        <!-- <td>
                            <button data-toggle="modal" data-target="#modalEdit" class="btn btn-primary mdi mdi-square-edit-outline">
                                Sunting
                            </button>
                        </td> -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
