<h1 class="page-title">Choose your movie!</h1>
<p class="page-description">Full list of all movies to watch</p>

<form class="search-form">
    <div class="search-form__group">
        <label class="search-form__label">
            Search movie
            <input class="search-form__input" type="text" name="search" placeholder="search" value="<?= $search ?>">
        </label>
    </div>
    <div class="search-form__actions">
        <input class="search-form__submit" type="submit" value="Search">
    </div>
</form>

<?php foreach ($movies as $movie) : ?>
    <div class="movie">
        <div class="movie__left">
            <h2 class="movie__title"><?= $movie->title ?></h2>
            <div class="movie__info">
                <p class="movie__duration"><?= $movie->duration ?>min</p>
                <p> | </p>
                <p class="movie__rating"><?= $movie->rating ?>/10</p>
            </div>
            <p class="movie__description"><?= $movie->short_description ?></p>
        </div>
        <div class="movie__right">
            <a class="movie__link" href="/movie/<?= $movie->id ?>">Read more</a>
            <form method="POST" action="/movie/<?= $movie->id ?>/delete">
                <input type="submit" value="Delete">
            </form>
            <?= $movie->genre_id ?>
        </div>
    </div>
<?php endforeach; ?>