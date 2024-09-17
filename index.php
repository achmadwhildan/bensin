<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <style>
        .container{
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 10px 10px 10px 10px lightblue;
            padding: 50px 70px;
            margin: 30px 30% 0 30%;
        }

        button{
            padding: 10px 40px;
            border-radius: 10px;
            border: none;
            background-color: lightblue;
        }

        select{
            width: calc(50% - -125px);
            padding: 10px;
        }
        input{
            width: calc(50% - -100px);
            padding: 10px;
        }
    </style>
<body>
    <div class="container">
        <div class="popup">
            <h2>Bahan Bakar</h2>
            <form method="post" action="result.php">
                <label for="jenis">Pilih Tipe Bahan Bakar :</label><br>
                <select name="jenis" id="jenis">
                    <option value="Shell Super">Shell Super</option>
                    <option value="Shell V-Power">Shell V-Power</option>
                    <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                    <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                </select><br><br>
                <label for="jumlah">Masukan Jumlah Liter :</label><br>
                <input type="number" name="jumlah" id="jumlah" ><br><br>
                <button type="submit" name="submit">Beli</button>
            </form>
        </div>
    </div>

    
</body>
</html>
