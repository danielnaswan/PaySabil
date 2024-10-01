<div class="container mt-5">
    <h2>Tambah Kafe</h2>
    <form action="<?= site_url('cafecontroller/addCafe') ?>" method="post">
        <!-- Cafe Name -->
        <div class="form-group">
            <label for="cafeName">Nama Kafe:</label>
            <input type="text" class="form-control" id="cafeName" name="cafeName" pattern="[^\']+" placeholder="Masukkan nama kafe" required>
            <?php echo form_error('cafeName', '<div class="alert alert-danger">', '</div>'); ?>
        </div>

        <!-- Location (Collapsible Options) -->
        <div class="form-group">
            <label for="location">Lokasi:</label>
            <select class="form-control" id="location" name="location" onchange="checkLocation()" required>
                <option value="" disabled selected>--Pilih Lokasi--</option>
                <option value="hep">HEP</option>
                <option value="kktdi">KKTDI</option>
                <option value="kktf">KKTF</option>
                <option value="arked">ARKED</option>
                <option value="other">Other</option>
            </select>
            <?php echo form_error('location', '<div class="alert alert-danger">', '</div>'); ?>
        </div>

        <!-- If 'Other' is selected -->
        <div id="otherLocationDiv" class="form-group" style="display: none;">
            <label for="otherLocation">Other Location:</label>
            <input type="text" class="form-control" id="otherLocation" name="otherLocation" placeholder="Masukkan nama lokasi">
        </div>

        <!-- Menu Section -->
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

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Hantar</button>
    </form>
</div>

<!-- JavaScript for dynamic functionality -->
<script>
    // Show 'Other Location' input if 'Other' is selected in the dropdown
    function checkLocation() {
        var locationSelect = document.getElementById('location');
        var otherLocationDiv = document.getElementById('otherLocationDiv');
        if (locationSelect.value === 'other') {
            otherLocationDiv.style.display = 'block';
        } else {
            otherLocationDiv.style.display = 'none';
        }
    }

    // Add new menu item input when 'Add Menu Item' button is clicked
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
</script>
