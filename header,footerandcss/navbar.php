<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$loggedIn = isset($_SESSION['userEmail']);

if ($loggedIn) {
    $membershipStatus = isset($_SESSION['membershipStatus']) ? $_SESSION['membershipStatus'] : 'unpaid';
} else {
    $membershipStatus = 'unpaid';
}

?>

<nav class="shadow navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            

        <?php if ($loggedIn): ?>
            <?php if ($membershipStatus === 'paid'): ?>
                <li class="nav-item ms-3">
                    <a class="nav-link" aria-current="page" href="index.php"><img src="./img/lion.png" id="logo" alt=""></a>
                </li>
                <li class="nav-item pt-3 ms-5">
                    <a class="nav-link" href="football_news.php">Football News</a>
                </li>
                <li class="nav-item pt-3 ms-3">
                    <a class="nav-link" href="live_football_match.php">Live Football Match</a>
                </li>
                <li class="nav-item pt-3 ms-3">
                    <a class="nav-link" href="live_football_training.php">Live Football Training</a>
                </li>
                <li class="nav-item pt-3 ms-5">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                    <?php else: ?>
                        <li class="nav-item ms-2">
                            <a class="nav-link" aria-current="page" href="index.php"><img src="./img/lion.png" id="logo" alt=""></a>
                        </li>
                        <li class="nav-item pt-3 ms-3">
                            <a class="nav-link" href="football_news.php">Football News</a>
                        </li>
                        <li class="nav-item pt-3 ms-3">
                            <a class="nav-link" href="membership.php">Membership Payment</a>
                        </li>
                        <li class="nav-item pt-3 ms-3">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item pt-3 ms-3">
                            <a class="nav-link" href="membership.php?tab=join">For Today</a>
                        </li>
                        <li class="nav-item pt-3 ms-3">
                            <a class="nav-link" href="membership.php?tab=join">Training</a>
                        </li>
                    <?php endif; ?>
                        <li class="nav-item pt-3 ms-3">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item pt-3 ms-3">
                            <span class="nav-link">
                                <b style="color:white;">Welcome <?php echo htmlspecialchars($_SESSION['userName']); ?></b>
                            </span>
                        </li>
                    <?php else: ?>
                    <li class="nav-item ms-2">
                        <a class="nav-link" aria-current="page" href="index.php"><img src="./img/lion.png" id="logo" alt=""></a>
                    </li>
                    <li class="nav-item pt-3 ms-3">
                        <a class="nav-link" href="football_news.php">Football News</a>
                    </li>
                    <li class="nav-item pt-3 ms-3">
                        <a class="nav-link" href="membership.php">Membership Payment</a>
                    </li>
                    <li class="nav-item pt-3 ms-3">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item pt-3 ms-3">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>    
            <?php endif; ?>

        </ul>
    </div>
</nav>
