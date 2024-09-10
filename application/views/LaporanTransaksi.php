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
                <?php if(is_array($transaction) && count($transaction) > 0): ?>
                    <?php foreach($transaction as $trans): ?>
                        <tr>
                            <td><?php echo $trans->NO_TRANSAKSI; ?></td>
                            <td><?php echo $trans->NO_MATRIK; ?></td>
                            <td><?php echo $trans->NAMA; ?></td>
                            <td><?php echo $trans->NO_KAFE; ?></td>
                            <td><?php echo $trans->NAMA_KAFE; ?></td>
                            <td><?php echo $trans->TARIKH_DIBELANJAKAN; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">NO TRANSACTION RECORD</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
