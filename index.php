<?php include "include/header.php" ?>

<div class="container py-5 mt-3 text-center text-white">
    <h1 class="display-1">Welcome To 4 Shop</h1>
    <h5>Trusted Website To Buy Games And Top Up</h5>
</div>

<!-- SECTION: Top Up Game -->
<div class="container-md text-white py-5">
    <div class="d-flex align-items-center border-bottom fs-1 mb-4">
        <i class="bi bi-controller me-2"></i>
        <h4 class="mb-0">Top Up Game</h4>
    </div>
    <div class="row g-3">
        <?php
        $games = [
            ['/mlpage', 'img/ml.png', 'Mobile Legends'],
            ['/ffpage', 'img/fflogo.png', 'Free Fire'],
            ['/robloxpage', 'img/roblox logo.png', 'Roblox'],
            ['genshinpage', 'img/Genshin Impact Logo.png', 'Genshin Impact'],
            ['valorantpage', 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Valorant_logo_-_pink_color_version.svg', 'Valorant'],
            ['pbpage', 'img/pb logo.png', 'Point Blank'],
            ['gtpage', 'img/GrowTopia Logo.png', 'Growtopia'],
            ['pubgpage', 'img/PUBG mobile logo.png', 'PUBG Mobile'],
        ];
        foreach ($games as $game) {
            echo '
            <div class="col-6 col-md-4 col-lg-2">
                <a href="' . $game[0] . '" class="text-decoration-none">
                    <div class="game-tile">
                        <img src="' . $game[1] . '" alt="' . $game[2] . '" class="img-fluid">
                        <p>' . $game[2] . '</p>
                    </div>
                </a>
            </div>';
        }
        ?>
    </div>
</div>

<!-- SECTION: Top Up Electronic -->
<div class="container-md text-white py-5">
    <div class="d-flex align-items-center border-bottom fs-1 mb-4">
        <i class="bi bi-wallet2 me-2"></i>
        <h4 class="mb-0">Top Up Electronic</h4>
    </div>
    <div class="row g-3">
        <?php
        $electronics = [
            ['emoneypage', 'img/emoney logo.png', 'E-Money'],
            ['flazzpage', 'img/flazz logo.png', 'Flazz'],
            ['steampage', 'https://upload.wikimedia.org/wikipedia/commons/8/83/Steam_icon_logo.svg', 'Steam'],
            ['pulsapage', 'img/logo pulsa.png', 'Pulsa'],
            ['tokenpage', 'img/Logo PLN.png', 'Token'],
        ];
        foreach ($electronics as $item) {
            echo '
            <div class="col-6 col-md-4 col-lg-2">
                <a href="' . $item[0] . '" class="text-decoration-none">
                    <div class="game-tile">
                        <img src="' . $item[1] . '" alt="' . $item[2] . '" class="img-fluid">
                        <p>' . $item[2] . '</p>
                    </div>
                </a>
            </div>';
        }
        ?>
    </div>
</div>


<?php include "include/footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>