<div class="container mt-5">
    <h2 class="mb-4">LAPORAN TRANSAKSI <?php echo urldecode($cafe); ?></h2>

    <form method="POST" action="<?php echo base_url('CafeController/transList/'.$cafe); ?>">
        <div class="mb-4">
            <label for="datePicker">Pilih Tarikh:</label>
            <input type="date" id="datePicker" name="datePicker" class="form-control" style="width: 200px;" 
                value="<?php echo isset($selected_date) ? $selected_date : date('Y-m-d'); ?>" />
        </div>
        <button type="submit" class="btn btn-primary mb-4">Cari Transaksi</button>
        
    </form>

    <div class="mb-4">
        <table class="table">
            <thead class="thead-dark ">
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
                            <td>
                                <?php
                                    $date = new DateTime($trans->TARIKH_DIBELANJAKAN);
                                    echo $date->format('d/m/Y');
                                ?>
                            </td>
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
