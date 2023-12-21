<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0; /* Updated background color */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #3498db; /* Updated heading color */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #3498db; /* Updated border color */
            border-radius: 4px;
        }

        button {
            background-color: #2ecc71; /* Updated button background color */
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #27ae60; /* Updated button hover color */
        }
    </style>
</head>
<body>
    <form action="proses.php" method="post">
        <h2>Tambah Data Barang</h2>
        <p><a href="list_produk.php">Daftar Produk</a></p>

        <label for="nama">Nama Barang:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="qty">Qty:</label>
        <input type="text" id="qty" name="qty" required>

        <label for="harga">Harga:</label>
        <input type="text" id="harga" name="harga" required>

        <label for="jenis_produk_id">Jenis Produk:</label>
        <select id="jenis_produk_id" name="jenis_produk_id" required>
            <option value="1">Elektronik</option>
            <option value="1">Fernature</option>
          
        </select>

        <button type="submit" name="submit" value="simpan">Tambah Barang</button>
    </form>
</body>
</html>
