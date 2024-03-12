<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumber Berkah Group</title>
    <link rel="stylesheet" href="gaya.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><i>Sumber Berkah Grosir</i></h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="transaksi.php">Transaksi</a></li>
                    <li><a href="history.php">Hisory</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <h2>Login Kasir</h2>
    <form id="formTransaksi" action="process_transaksi.php" method="POST">
        <td><label for="Username">Username:</label><br></td>
        <td><input type="text" id="Username" name="Username" value=""><br></td>
        <td><label for="Password">Password:</label><br></td>
        <td><input type="password" id="password" name="password"><br></td>
        <button type="submit" id="submitBtn">Submit</button>
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("transaksi").addEventListener("submit", function(event) {
                // Mengarahkan pengguna ke tab berikutnya setelah submit form
                var currentTabIndex = document.activeElement.tabIndex;
                var nextTabIndex = currentTabIndex + 1;
                var nextTabElement = document.querySelector('[transaksi.php="' + nextTabIndex + '"]');
                
                if (nextTabElement) {
                    nextTabElement.focus();
                }

                // Menghentikan pengiriman form secara default
                event.preventDefault();
            });
        });
    </script>
</body>
</html>
