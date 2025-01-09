<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News List</title>
</head>

<body>
    <h1>News List</h1>

    <?php if (!empty($news) && is_array($news)) : ?>
        <ul>
            <?php foreach ($news as $news_item): ?>
                <li>
                    <a href="<?= site_url('news/view/' . $news_item['slug']) ?>">
                        <?= esc($news_item['title']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No news found.</p>
    <?php endif; ?>

</body>

</html>