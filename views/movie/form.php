<h1 class="page-title">Add movie</h1>

<form class="form_style" method="POST">
    <div class="form__group">
        <label class="form__label">
            Title
            <input class="form__input" type="text" name="title" placeholder="title" required>
        </label>
    </div>
    <div class="form__group">
        <label class="form__label">
            Description
            <textarea class="form__textarea" name="description" rows="6"></textarea>
        </label>
    </div>
    <div class="form__group">
        <label class="form__label">
            Short description
            <textarea class="form__textarea" name="short_description" rows="6"></textarea>
        </label>
    </div>
    <div class="form__group">
        <label class="form__label">
            Rating on 10
            <input class="form__input" type="number" name="rating" required>
        </label>
    </div>
    <div class="form__group">
        <label class="form__label">
            Duration in minutes
            <input class="form__input" type="number" name="duration" required>
        </label>
    </div>
    <div class="form__group">
        <label class="form__label">
            Genre
            <select class="form__select" name="genre_id" required>
                <?php foreach ($genres as $genre) : ?>
                    <option value="<?= $genre->id ?>"><?= $genre->name ?></option>
                <?php endforeach; ?>
            </select>
        </label>
    </div>
    <div class="form__actions">
        <input class="form__submit" type="submit" value="Save">
    </div>
</form>