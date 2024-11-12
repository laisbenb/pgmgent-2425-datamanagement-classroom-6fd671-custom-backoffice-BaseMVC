<h1 class="page-title">Add genre</h1>

<form class="form_style" method="POST">
    <div class="form__group">
        <label class="form__label">
            Name
            <input class="form__input" type="text" name="name" placeholder="name" required>
        </label>
    </div>
    <div class="form__group">
        <label class="form__label">
            Description
            <textarea class="form__textarea" name="description" rows="6"></textarea>
        </label>
    </div>
    <div class="form__actions">
        <input class="form__submit" type="submit" value="Save">
    </div>
</form>