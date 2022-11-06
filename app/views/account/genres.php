<?php require ROUTE_APP . '/views/inc/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-8 mx-auto">
                <h1>Жанри</h1>
                <form action="<?php echo ROUTE_URL; ?>/account/addGenre" method="POST">
                    <div class="form-group">
                        <input type="text" name="genre" class="form-control" placeholder="Жанр" value="" required><br>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Додати жанр" class="btn btn-primary">
                    </div>
                </form>       
            </div>
        </div>
        <div class="col-md-6">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Жанр</th>
                    <th>Змінити</th>
                    <th>Видалити</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($data['genres'] as $genre) : ?>
            <tr>
                <td><?php echo $genre->genre; ?></td>
                <td><a href="<?php echo ROUTE_URL; ?>account/editGenre/<?php echo $genre->id_genre; ?>" class="btn btn-warning">Змінити</a></td>
                <td><a href="<?php echo ROUTE_URL; ?>account/deleteGenre/<?php echo $genre->id_genre; ?>" class="btn btn-danger">Видалити</a></td>
            </tr>
        <?php endforeach; ?>
            </tbody>
            </table><br><br>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

<?php require ROUTE_APP . '/views/inc/footer.php'; ?>