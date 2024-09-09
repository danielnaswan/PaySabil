<div class="container mt-5">
    <h2 class="mb-4">Cafe Listings</h2>
    <div class="mb-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No. Kafe</th>
                    <th>Nama Kafe</th>
                    <th>Lokasi</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cafe as $cafes): ?>
                    <tr>
                        <td><?php echo $cafes->NO_KAFE; ?></td>
                        <td><?php echo $cafes->NAMA; ?></td>
                        <td><?php echo $cafes->LOKASI; ?></td>
                        <td><button class="btn btn-success">view</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->