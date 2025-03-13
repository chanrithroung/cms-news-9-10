<?php 
    include('sidebar.php');
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Add Sport News</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post">
                                    <div class="form-group">
                                        <?php 
                                            if(isset($_GET['id'])) {
                                                $id = $_GET['id'];
                                                $category = getDetail('categories', 'category_id', $id);
                                            } else {
                                                header("Location: view-categories.php");
                                            }
                                        ?>
                                        <label>Category</label>
                                        <input value="<?php echo $category['name'] ?>" name="category" type="text" class="form-control">
                                    </div>
                                    <input name="update-category" type="submit" class="btn btn-primary" value="Update Category">
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