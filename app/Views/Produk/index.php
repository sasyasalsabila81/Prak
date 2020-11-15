<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Produk</title>
</head>
<body>
<h1>Table Produk</h1>
<table border = "2">
                    <thead>
                        <tr>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Deskripsi Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>
                        <?php foreach ($data as $key => $keluar) { ?>
                            <tr>
                                <td><?php echo $keluar['nama_produk'];  ?></td>
                                <td><?php echo $keluar['deskripsi_produk'];  ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    </tr>
                    </tbody>
                </table>
                    
</body>
</html>