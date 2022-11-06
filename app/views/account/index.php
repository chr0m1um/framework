<?php require ROUTE_APP . '/views/inc/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="col-md-8 mx-auto">
                <h1>Відвідувачі</h1>
                <form action="<?php echo ROUTE_URL; ?>/account/addVisitor" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Ім'я та прізвище" value="" required><br>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="" required><br>
                    </div>

                    <div class="form-group">
                        <input type="tel" name="phone" class="form-control" placeholder="Телефон" value="" required><br>
                    </div>

                    <div class="form-group">
                    <input type="submit" value="Додати відвідувача" class="btn btn-primary">
                    </div>
                </form>       
            </div>
        </div>
        <div class="col-md-8">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Ім'я та прізвище</th>
                    <th>Пошта</th>
                    <th>Телефон</th>
                    <th>Змінити</th>
                    <th>Видалити</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($data['users'] as $user) : ?>
            <tr>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->phone; ?></td>
                <td><a href="<?php echo ROUTE_URL; ?>account/editVisitor/<?php echo $user->id; ?>" class="btn btn-warning">Змінити</a></td>
                <td><a href="<?php echo ROUTE_URL; ?>account/deleteVisitor/<?php echo $user->id; ?>" class="btn btn-danger">Видалити</a></td>
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

