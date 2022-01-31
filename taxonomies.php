<?php include 'inc/filter-data.php'; ?>

<div class="filter-form-wrap container">
    <form action="" method="post">
        <select name="taxonomies" id="">
        <?php foreach($taxonomies as $k => $v) : ?>
            <option value="<?= $v; ?>"><?= $v; ?></option>
        <?php endforeach; ?>
        </select>

        <select name="platforms" id="">
        <?php foreach($platforms as $k => $v) : ?>
            <option value="<?= $v; ?>"><?= $v; ?></option>
        <?php endforeach; ?>
        </select>

        <select name="sort_by_list" id="">
        <?php foreach($sort_by as $k => $v) : ?>
            <option value="<?= $v; ?>"><?= $v; ?></option>
        <?php endforeach; ?>
        </select>

        <button type="submit" name="filter-select">Filter</button>
    </form>
    <?php //err($taxonomies); ?>
</div>

<?php include 'inc/filtered-data.php'; ?>

