<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EVAN HOTEL - Cek Harga</title>
    <style>
        .nav {
            background-image: url(header.png);
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: Cambria;
            text-shadow: 5px 5px 5px #888888;
            color: #FAFAD2;
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            text-shadow: 5px 5px 5px #888888;
            text-decoration: underline;
        }
        .content {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .price-form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        select, input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .price-summary {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .footer {
            background-image: url(header.png);
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="nav">
        <h1>EVAN HOTEL</h1>
        <div>
            <a href="home.php">Home</a>
            <a href="cekHarga.php">Cek Harga</a>
            <a href="index.php">Logout</a>
        </div>
    </div>
    
    <div class="content">
        <div class="price-form">
            <h2>Cek Harga</h2>
            <form id="priceForm">
                <div class="form-group">
                    <label for="lantai">Lantai</label>
                    <input type="number" id="lantai" name="lantai" min="1" value="1">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select id="type" name="type">
                        <option value="standard">Standard</option>
                        <option value="superior">Superior</option>
                        <option value="deluxe">Deluxe</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlahHari">Jumlah Hari</label>
                    <input type="number" id="jumlahHari" name="jumlahHari" min="1" value="1">
                </div>
                <div class="form-group">
                    <label for="diskon">Diskon</label>
                    <select id="diskon" name="diskon">
                        <option value="none">Tidak Ada</option>
                        <option value="member">Member</option>
                        <option value="promo">Promo HUT</option>
                    </select>
                </div>
                <button type="submit" class="btn-login">CHECK</button>
            </form>
            
            <div class="price-summary" id="priceSummary" style="display: none;">
                <h3>Total Transaksi</h3>
                <p>Total transaksi: <span id="totalPrice">0</span></p>
                <p>Total diskon: <span id="totalDiscount">0</span></p>
                <p>Yang harus dibayarkan: <span id="finalPrice">0</span></p>
            </div>
        </div>
    </div>
    
    <div class="footer">
        Website Footer
    </div>

    <script>
        const prices = {
            standard: 300000,
            superior: 400000,
            deluxe: 500000
        };

        document.getElementById('priceForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const lantai = parseInt(document.getElementById('lantai').value);
            const type = document.getElementById('type').value;
            const jumlahHari = parseInt(document.getElementById('jumlahHari').value);
            const diskon = document.getElementById('diskon').value;
            
            let basePrice = prices[type] * jumlahHari;
            
            if (lantai > 5) {
                basePrice += 50000;
            }
            
            let discount = 0;
            if (diskon === 'member') {
                discount = basePrice * 0.1; 
            } else if (diskon === 'promo') {
                discount = 100000;
            }
            
            const finalPrice = basePrice - discount;
            
            document.getElementById('totalPrice').textContent = `Rp ${basePrice.toLocaleString()}`;
            document.getElementById('totalDiscount').textContent = `Rp ${discount.toLocaleString()}`;
            document.getElementById('finalPrice').textContent = `Rp ${finalPrice.toLocaleString()}`;
            document.getElementById('priceSummary').style.display = 'block';
        });
    </script>
</body>
</html>