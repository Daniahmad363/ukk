<!DOCTYPE html>
<html lang="id">
<hed>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Barang Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }
        .form-container label {
            font-size: 14px;
            color: #555;
        }
        .form-container input, .form-container select, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        .form-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Pendataan Barang Perpustakaan</h1>

    <div class="form-container">
        <form id="dataBarangForm">
            <label for="namaBarang">Nama Barang</label>
            <input type="text" id="namaBarang" name="namaBarang" required>

            <label for="kategoriBarang">Kategori Barang</label>
            <select id="kategoriBarang" name="kategoriBarang" required>
                <option value="Buku">Buku</option>
                <option value="Majalah">Majalah</option>
                <option value="Alat Tulis">Alat Tulis</option>
                <option value="Peralatan Lainnya">Peralatan Lainnya</option>
            </select>

            <label for="jumlahBarang">Jumlah</label>
            <input type="number" id="jumlahBarang" name="jumlahBarang" required>

            <label for="deskripsiBarang">Deskripsi Barang</label>
            <textarea id="deskripsiBarang" name="deskripsiBarang" rows="4"></textarea>

            <button type="submit">Simpan Data Barang</button>
        </form>
    </div>

    <script>
        // Menangani submit form
        document.getElementById('dataBarangForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Mengambil data dari form
            const namaBarang = document.getElementById('namaBarang').value;
            const kategoriBarang = document.getElementById('kategoriBarang').value;
            const jumlahBarang = document.getElementById('jumlahBarang').value;
            const deskripsiBarang = document.getElementById('deskripsiBarang').value;

            // Menampilkan data yang disubmit
            alert(`Data Barang Disimpan:\nNama Barang: ${namaBarang}\nKategori: ${kategoriBarang}\nJumlah: ${jumlahBarang}\nDeskripsi: ${deskripsiBarang}`);
            
            // Reset form setelah disubmit
            document.getElementById('dataBarangForm').reset();
        });
    </script>

</body>
</html>
