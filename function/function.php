<?php
// Connect to the database
$db = mysqli_connect("localhost", "root", "", "portofolio");


function query($query) {
    global $db;

    $result = mysqli_query($db, $query);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

?>


            <article class="blog-box reveal">
                <div class="blog-img">
                <img src="images/<?= $blog_row["gambar"]; ?>" alt="<?= $blog_row["keterangan"]; ?>">
                </div>
                <h2><?= $blog_row["judul"]; ?></h2>
                <div class="blog-text">
                    <p><?= $blog_row["teks"]; ?></p>
                    <a href="">Read More</a>
                </div>
            </article>
        