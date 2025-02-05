<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
        }
        button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tabel Buku Perpustakaan Digital</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Harry Potter and the Sorcerer's Stone</td>
                <td>J.K. Rowling</td>
                <td>Scholastic</td>
                <td>1997</td>
                <td><button>Pinjam</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>To Kill a Mockingbird</td>
                <td>Harper Lee</td>
                <td>J.B. Lippincott & Co.</td>
                <td>1960</td>
                <td><button>Pinjam</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>The Great Gatsby</td>
                <td>F. Scott Fitzgerald</td>
                <td>Charles Scribner's Sons</td>
                <td>1925</td>
                <td><button>Pinjam</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>1984</td>
                <td>George Orwell</td>
                <td>Secker & Warburg</td>
                <td>1949</td>
                <td><button>Pinjam</button></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
