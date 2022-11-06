<?php require ROUTE_APP . '/views/inc/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4 mx-auto">
                <h1>Видача</h1>
                <form action="<?php echo ROUTE_URL; ?>account/addIssue" method="POST">
                <div class="form-group">
                        <input type="text" name="name_issue" class="form-control" placeholder="Ім'я та прізвище" value="" required><br>
                </div>

                <div class="form-group">
                    <input type="text" name="genre_issue" class="form-control" placeholder="Жанр" value="" required><br>
                </div>

                <div class="form-group">
                    <input type="text" name="book_issue" class="form-control" placeholder="Книга" value="" required><br>
                </div>

                <div class="form-group">
                    <input type="submit" id="issue" value="Видати книгу" class="btn btn-primary">
                </div>      
            </div>
        </div>
        <div class="col-md-12">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Ім'я та прізвище</th>
                    <th>Жанр</th>
                    <th>Книга</th>
                    <th>Видано</th>
                    <th>Статус</th>
                    <th>Повернено</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($data['issues'] as $issue) : ?>
            <tr>
                <td><?php echo $issue->name_issue; ?></td>
                <td><?php echo $issue->genre_issue; ?></td>
                <td><?php echo $issue->book_issue; ?></td>
                <td><?php echo $issue->date_out; ?></td>
                <td><?php if($issue->status ==0) {
                    echo '<p><a href="status/'.$issue->status .'" class="btn btn-success">Видано</a></p>';
                } else {
                    echo '<p><a href="status/'.$issue->status .'"class="btn btn-danger disabled">Повернено</a></p>';
                } ?></td>
                <td></td>
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