<h1 class="page-title">Genres</h1>
<p class="page-description">All available genres</p>

<form class="search-form">
    <div class="search-form__group">
        <label class="search-form__label">
            Search genre
            <input class="search-form__input" type="text" name="search" placeholder="search" value="<?= $search ?>">
        </label>
    </div>
    <div class="search-form__actions">
        <input class="search-form__submit" type="submit" value="Search">
    </div>
</form>

<?php foreach ($genres as $genre) : ?>
    <div class="movie">
        <div class="movie-left">
            <h2 class="movie-title"><?= $genre->name ?></h2>
            <p class="movie__description"><?= $genre->description ?></p>
        </div>
        <div class="movie__right">
            <form method="POST" action="/genre/<?= $genre->id ?>/delete">
                <input type="submit" value="Delete">
            </form>
        </div>
    </div>
<?php endforeach; ?>