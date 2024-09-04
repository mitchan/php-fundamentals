<?php
include './header_inc.php';
?>
<ul>
    <?php
    include './classes.php';
    $db = new DataBase();
    $exhibits = $db->execute('SELECT * from exhibits');

    $exhibit = $exhibits[$_GET['index'] ?? 0];
    ?>
    <article>
        <h2><?= $exhibit['title'] ?></h2>
        <p><?= $exhibit['description'] ?></p>
        <img src="gallery/<?= $exhibit['image'] ?>" fetchpriority="high" decoding="sync">
    </article>
</ul>
</main>
</body>

</html>