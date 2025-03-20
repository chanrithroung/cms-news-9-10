<?php 
    include('sidebar.php');
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <?php 
                                if (isset($_GET['status'])) {
                                    if($_GET['status'] === 'success') {
                                        echo '<div class="success-message"> New is created successfully! </div>';
                                    }
                                }
                            ?>  
                            <h3>Add News</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input name="title" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select name="category_id" class="form-select">
                                           <?php getCategories(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pin</label>
                                        <input name="pin" type="checkbox" class="form-check-input">
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input name="thumbnail" type="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="btn-add-news" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>