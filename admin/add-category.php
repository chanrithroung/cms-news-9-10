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
                                            if(isset($_GET['message'])) {
                                                echo '<div class="'.$_GET['message'].'-message">'.$_GET['message'].' to craete category</div>';
                                            }
                                        ?>
                                        <label>Category</label>
                                        <input name="category" type="text" class="form-control">
                                    </div>
                                    <input name="add-category" type="submit" class="btn btn-primary" value="Create category">
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