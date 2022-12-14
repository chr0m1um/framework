<?php require ROUTE_APP . '/views/inc/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1>Змінити дані</h1>
            <form action="<?php echo ROUTE_URL; ?>account/editBook/<?php $data['id_book'] ?>" method="POST">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Назва книги" value="<?php echo $data['title']; ?>" required><br>
                </div>

                <div class="form-group">
                    <input type="text" name="author" class="form-control" placeholder="Email" value="<?php echo $data['author']; ?>" required><br>
                </div>

                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Телефон" value="<?php echo $data['year']; ?>" required><br>
                </div>

                <div class="d-flex justify-content-between">
                    <input type="submit" value="Змінити книгу" class="btn btn-primary">
                    <a href="<?php echo ROUTE_URL; ?>account/books" class="btn btn-danger">Назад</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require ROUTE_APP . '/views/inc/footer.php'; ?>