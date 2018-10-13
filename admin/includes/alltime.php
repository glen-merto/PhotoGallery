<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        All Time Data Table</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Photographer</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Upload Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Photographer</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Upload Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $query = "SELECT * FROM table_name";
                    $read_query = mysqli_query($con, $query);

                    while($row = mysqli_fetch_assoc($read_query)){
                        $id = $row['id'];
                        $title = $row['title'];
                        $photographer = $row['photographer'];
                        $category = $row['category'];
                        $image = $row['image'];
                        $description = $row['description'];
                        $update_date = $row['upload_date'];

                        echo "<tr>";
                        echo "<td>{$id}</td>";
                        echo "<td>{$title}</td>";
                        echo "<td>{$photographer}</td>";
                        echo "<td>{$category}</td>";
                        echo "<td>
                                <a href='../images/{$image}' data-lightbox='AllTime' data-title='{$title}'>
                                <img src='../images/{$image}' width='100px'>
                                </a>
                            </td>";
                        echo "<td>{$description}</td>";
                        echo "<td>{$update_date}</td>";
                        echo "<td><a href='update.php?userid={$id}'>Edit</a></td>";
                        echo "<td><a href='delete.php?userid={$id}'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>