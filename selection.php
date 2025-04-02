<?php include 'game-logic.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Choose Your Briefcase</h2>
    <div class="briefcase-grid">
        <?php foreach ($_SESSION['cases'] as $index => $value): ?>
            <form action="play.php" method="post">
                <input type="hidden" name="selected_case" value="<?= $index ?>">
                <button type="submit" class="briefcase" name="select">
                    <span><?= $index + 1 ?></span>
                </button>
            </form>
        <?php endforeach; ?>
    </div>
</body>
</html>