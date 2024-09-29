<div class="container mt-5">
    <h2 class="mb-4">LAPORAN TRANSAKSI <?php echo urldecode($cafe); ?></h2>

    <form method="GET" action="<?php echo base_url('CafeController/transList/'.$cafe); ?>">
        <div class="form-container d-flex" style="display: flex; align-items: center; gap: 10px;">
            <div class="form-group">
                <label for="datePicker">Pilih Tarikh:</label>
                <input type="date" id="datePicker" name="datePicker" class="form-control"  
            value="<?php echo isset($selected_date) ? $selected_date : date('Y-m-d'); ?>" />
            </div>
    
            <div class="form-group">
                <label for="monthPicker">Pilih Bulan:</label>
                <select class="form-control" name="monthPicker" id="monthPicker">
                    <option value="" disabled selected>-- Pilih Bulan --</option>
                    <option value="January">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Mac">Mac</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Jun">Jun</option>
                    <option value="Julai">Julai</option>
                    <option value="Ogos">Ogos</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Disember">Disember</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mdi mdi-table-search">Cari</button>
            <a href="<?php echo site_url('CafeController/transList/'.$cafe); ?>" class="btn btn-secondary ">Clear</a>
        </div>
    
    
</form>


    <div class="mb-4">
        <table class="table table-striped">
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
