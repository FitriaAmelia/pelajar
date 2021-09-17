<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Inheritance</title>
</head>
<body>
    <fieldset> 
    <legend>Sistem Pembayaran GoFood</legend>
    <form action="" method="post">
    <table>
    <tr> 
    <th>Nama Barang</th> 
    <td>: <input type="text" name="barang"></td> 
    </tr> 

    <th>Harga Barang</th> 
    <td>: <input type="number" name="harga"></td> 
    </tr> 

    <th>Jumlah Pesanan</th> 
    <td>: <input type="text" name="jumlah"></td> 
    </tr> 

    <tr>
            <th> Sistem Pembayaran </th>
            <td> : </td>
            <td><select name="jenis">
                <option value="cash">Cash</option>
                <option value="mbanking">M-Banking</option>
                <option value="gopay">Gopay</option>
                <option value="pickup">pickUP</option>
            </select></tr>
        <tr></td>
        <tr> 
    <th>
    <td>
    <button type="submit" name="simpan">Submit</button> 
    <button type="reset">Reset</button>
    </td> 
    </tr> 
    </table> 
    </form> 
    </fieldset>
</body>
</html>
