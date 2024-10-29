<div class="container mt-5">
    <h2 class="mb-4">Senarai Kafe</h2>
    <div class="mb-4">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No. Kafe</th>
                    <th>Nama Kafe</th>
                    <th>Lokasi</th>
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
                            <button data-toggle="modal" data-target="#modalQR" class="btn btn-primary mdi mdi-qrcode menu-icon">
                                View
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div id="modalQR" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Imej QR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="text-align: center;">
            <!-- <img id="qrImage" src="<?php echo base_url('CafeController/showQRImage/' . $cafes->NO_KAFE); ?>" alt="QR Code" class="img-fluid" /> -->
            <!-- <img id="qrImage" src="../assets/media/qrcode/687474703a2f2f6c6f63616c686f73742f706179736162696c2f506179436f6e74726f6c6c65722f7061793f636166653d4b41464531373330313734393437266d61747269636e6f3d64656661756c74.png" alt="QR Code" class="img-fluid" /> -->
            <p><?php echo site_url('CafeController/showQRImage/' . $cafes->NO_KAFE);?></p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success mdi mdi-download-outline">Muat Turun</button>
            </div>
        </div>
    </div>
</div>

