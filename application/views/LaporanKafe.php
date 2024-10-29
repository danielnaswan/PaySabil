<div class="container mt-5">
    <h2 class="mb-4">Senarai Kafe</h2>
    <div class="mb-4">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No. Kafe</th>
                    <th>Nama Kafe</th>
                    <th>Lokasi</th>
                    <th>Transaksi</th>
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
                            <a class="btn btn-success mdi mdi-eye-outline" href="<?php echo base_url();?>CafeController/transList/<?php echo $cafes->NAMA_KAFE; ?>">
                                View
                            </a>
                        </td>
                        <td>
                            <button data-toggle="modal" data-target="#modalEdit" class="btn btn-primary mdi mdi-square-edit-outline">
                                Sunting
                            </button>
                            <a class="btn btn-danger mdi mdi-trash-can-outline" href="<?php echo base_url();?>CafeController/deleteCafe/<?php echo $cafes->NO_KAFE; ?>">
                                Buang
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.12.0.js"></script>

<!-- <?php
    // $this->load->view('modal-edit');
?> -->

<div id="modalEdit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Suntingan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url();?>CafeController/editCafe/<?php echo $cafes->NO_KAFE; ?>" method='post'>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cafeName">Nama Kafe:</label>
                        <input type="text" class="form-control" id="cafeName" name="cafeName" pattern="[^\']+" placeholder="Masukkan nama kafe" required>
                        <?php echo form_error('cafeName', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="location">Lokasi:</label>
                        <select class="form-control" id="location" name="location" onchange="checkLocation()">
                            <option disabled selected>--Pilih Lokasi--</option>
                            <option value="hep">HEP</option>
                            <option value="kktdi">KKTDI</option>
                            <option value="kktf">KKTF</option>
                            <option value="arked">ARKED</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div id="otherLocationDiv" class="form-group" style="display: none;">
                        <label for="otherLocation">Other Location:</label>
                        <input type="text" class="form-control" id="otherLocation" name="otherLocation" placeholder="Masukkan nama lokasi">
                    </div>

                    <div class="form-group">
                        <label for="menu">Menu:</label>
                            <div id="menuList">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" name="menu[]" pattern="[^\'\\\/<>|\:;\?\*\\]+" placeholder="Masukkan menu" required>
                                    <input type="number" class="form-control" name="price[]" placeholder="Masukkan harga" min='1' required>
                                    <div class="input-group-append">
                                        <button class="btn btn-danger removeMenuBtn" type="button">&times;</button>
                                    </div>
                                </div>
                            </div>
                        <button type="button" class="btn btn-success mdi mdi-plus-outline" id="addMenuBtn">Tambah</button>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Function to check the selected location and display/hide the other location input
function checkLocation() {
    var locationSelect = document.getElementById('location');
    var otherLocationDiv = document.getElementById('otherLocationDiv');

    if (locationSelect.value === 'other') {
        otherLocationDiv.style.display = 'block';
    } else {
        otherLocationDiv.style.display = 'none';
    }
}

// Ensure the script runs after the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
    checkLocation(); // Run once on load in case of pre-selected value

    document.getElementById('addMenuBtn').addEventListener('click', function() {
        var menuList = document.getElementById('menuList');
        var newMenuItem = document.createElement('div');
        newMenuItem.classList.add('input-group', 'mb-2');
        newMenuItem.innerHTML = `
            <input type="text" class="form-control" name="menu[]" pattern="[^\'\\\/<>|\:;\?\*\\]+" placeholder="Masukkan menu" required>
            <input type="number" class="form-control" name="price[]" min='1' placeholder="Masukkan harga" required>
            <div class="input-group-append">
                <button class="btn btn-danger removeMenuBtn" type="button">&times;</button>
            </div>
        `;
        menuList.appendChild(newMenuItem);
    });

    // Remove a menu item input when the remove button is clicked
    document.getElementById('menuList').addEventListener('click', function(e) {
        if (e.target.classList.contains('removeMenuBtn')) {
            e.target.closest('.input-group').remove();
        }
    });
});
</script>


