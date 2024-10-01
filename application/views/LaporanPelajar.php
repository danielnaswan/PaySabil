<div class="container mt-5">
    <h2 class="mb-4">Senarai Pelajar</h2>

    <!-- Search form -->
    <form method="get" action="">
    <div class="form-container" style="display: flex; align-items: center; gap: 10px;">
        <div class="form-group">
            <label for="no_matrik">No Matrik:</label>
            <input class="form-control" type="text" id="no_matrik" name="no_matrik" style="width: 150px;" value="<?php echo isset($_GET['no_matrik']) ? $_GET['no_matrik'] : ''; ?>">
        </div>

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input class="form-control" type="text" id="nama" name="nama" style="width: 150px;" value="<?php echo isset($_GET['nama']) ? $_GET['nama'] : ''; ?>">
        </div>

        <div class="form-group">
            <label for="sesi">Sesi:</label>
            <select class="form-control" id="sesi" name="sesi" style="width: 150px;">
                <option value="">--Pilih Sesi--</option>
                <?php foreach ($sesi_options as $key => $value): ?>
                    <option value="<?php echo $key; ?>" <?php echo (isset($_GET['sesi']) && $_GET['sesi'] == $key) ? 'selected' : ''; ?>>
                        <?php echo $value; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="sem">Semester:</label>
            <select class="form-control" id="sem" name="sem" style="width: 150px;">
                <option value="">--Pilih Sem--</option>
                <?php foreach ($sem_options as $key => $value): ?>
                    <option value="<?php echo $key; ?>" <?php echo (isset($_GET['sem']) && $_GET['sem'] == $key) ? 'selected' : ''; ?>>
                        <?php echo $value; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mdi mdi-table-search">Cari</button>
        <a href="<?php echo site_url('StudentController'); ?>" class="btn btn-secondary">Clear</a>
    </div>
    </form>

    <!-- Display the search results -->
    <?php if (!empty($students)): ?>
        <h2 class="mt-5"></h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No Matrik</th>
                        <th>Nama</th>
                        <th>Sesi</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?php echo $student['NO_MATRIK']; ?></td>
                            <td><?php echo $student['NAMA']; ?></td>
                            <td><?php echo $student['SESI']; ?></td>
                            <td><?php echo $student['SEM']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-warning mt-5">No student records found.</div>
    <?php endif; ?>
</div>