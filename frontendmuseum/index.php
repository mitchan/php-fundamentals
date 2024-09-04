<?php
include './header_inc.php';
?>
<ul>
    <?php
    include './classes.php';
    $db = new DataBase();
    $exhibits = $db->execute('SELECT * from exhibits');

    foreach ($exhibits as $i => $exhibit) :
    ?>
        <li>
            <a href="details.php?index=<?php echo $i ?>"><?php echo $exhibit["title"] ?></a>
        </li>
    <?php
    endforeach;
    ?>
</ul>
</main>
</body>

</html>