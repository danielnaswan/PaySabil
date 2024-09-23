<div class="container mt-5">
    <h1 class="mb-4">Senarai Pelajar</h1>

    <!-- Search form -->
    <form method="get" action="">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="no_matrik">No Matrik:</label>
                <input type="text" class="form-control" id="no_matrik" name="no_matrik" value="<?php echo isset($_GET['no_matrik']) ? $_GET['no_matrik'] : ''; ?>">
            </div>

            <div class="form-group col-md-6">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo isset($_GET['nama']) ? $_GET['nama'] : ''; ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="sesi">Sesi:</label>
                <select class="form-control" id="sesi" name="sesi">
                    <option value="">--Pilih Sesi--</option>
                    <?php foreach ($sesi_options as $key => $value): ?>
                        <option value="<?php echo $key; ?>" <?php echo (isset($_GET['sesi']) && $_GET['sesi'] == $key) ? 'selected' : ''; ?>>
                            <?php echo $value; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="sem">Semester:</label>
                <!-- <input type="text" class="form-control" id="sem" name="sem" value="<?php echo isset($_GET['sem']) ? $_GET['sem'] : ''; ?>"> -->
                <select class="form-control" id="sem" name="sem">
                    <option value="">--Pilih Sem--</option>
                    <?php foreach ($sem_options as $key => $value): ?>
                        <option value="<?php echo $key; ?>" <?php echo (isset($_GET['sem']) && $_GET['sem'] == $key) ? 'selected' : ''; ?>>
                            <?php echo $value; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Search</button>
        <a href="<?php echo site_url('StudentController'); ?>" class="btn btn-secondary ml-2">Clear</a>
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