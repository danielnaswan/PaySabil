<div class="container mt-5">
    <h2 class="mb-4">Transaksi</h2>
    <div class="mb-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No. Transaksi</th>
                    <th>No. Matrik</th>
                    <th>Nama</th>
                    <th>No. Kafe</th>
                    <th>Kafe</th>
                    <th>Tarikh Perbelanjaan</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($transaction) != FALSE): ?>
                    <td colspan='6'>NO TRANSACTION RECORD</td>
                <?php else: ?>
                    <?php foreach($transaction as $trans): ?>
                        <td><?php $trans->NO_TRANSAKSI; ?></td>
                        <td><?php $trans->NO_MATRIK; ?></td>
                        <td><?php $trans->NAMA; ?></td>
                        <td><?php $trans->NO_KAFE; ?></td>
                        <td><?php $trans->NAMA_KAFE; ?></td>
                        <td><?php $trans->TARIKH_DIBELANJAKAN; ?></td>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->