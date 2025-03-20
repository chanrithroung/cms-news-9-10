<?php 
    include('header.php');

    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $news = getDetail($id);

        $thumbnail = $news['thumbnail'];
        $title = $news['title'];
        $created_at = $news['created_at'];
        $description = $news['description'];
        $viewer = $news['viewer'];
    } else {
        header("Location: index.php");
    }

?>


<main class="news-detail">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="main-news">
                        <div class="thumbnail">
                            <img src="<?php echo $BASE_URL.$thumbnail ?>">
                        </div>
                        <div class="detail">
                            <h3 class="title"><?php echo $title ?></h3>
                            <div class="date d-flex">
                                <div> 
                                    <i class="bi bi-calendar3 me-3"></i> 
                                    <span><?php echo $created_at ?></span>
                                </div>  
                                
                                <div class="d-flex justify-content-end">
                                    <span class="d-block  w-25">
                                        <i class="bi bi-eye-fill"></i> 
                                        <?php echo $viewer ?> 
                                    </span>
                                </div>
                           
                            </div>

                            <div class="description">
                                <?php echo $description ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="relate-news">
                        <h3 class="main-title">Related News</h3>
                        <figure>
                            <a href="">
                                <div class="thumbnail">
                                    <img src="https://via.placeholder.com/350x200" alt="">
                                </div>
                                <div class="detail">
                                    <h3 class="title">Kloppថា​ Liverpool ត្រូវ​ធ្វើ​បែប​នេះ​ ក្រោយ​អស់​ពី​ Mane</h3>
                                    <div class="date">17/July/2022</div>
                                    <div class="description">
                                        លោក​ Jorgen Klopp អ្នកចាត់ការ​ក្លឹប​ Liverpool បាន​និយាយ​នៅ​ក្នុង​ថ្ងៃ​នេះ​ថា​ បន្ទាប់​ពី​ខ្សែ​ប្រយុទ្ធ​ Sadio Mane ចាកចេញ​ទៅ​កាន់​ Bayern Munich ក្រុម​របស់​លោក​ត្រូវ​តែ​ខិត​ខំ​សហការ​គ្នា​ជា​ធ្លុង​មួយសារ​ជា​ថ្មី​​នឹង​កីឡាករ​ដែល​កំពុង​មាន​វត្តមាន​ស្រាប់​នៅ​ក្លឹប​លោក​។
                                    </div>
                                </div>
                            </a>
                        </figure>
                        <figure>
                            <a href="">
                                <div class="thumbnail">
                                    <img src="https://via.placeholder.com/350x200" alt="">
                                </div>
                                <div class="detail">
                                    <h3 class="title">Kloppថា​ Liverpool ត្រូវ​ធ្វើ​បែប​នេះ​ ក្រោយ​អស់​ពី​ Mane</h3>
                                    <div class="date">17/July/2022</div>
                                    <div class="description">
                                        លោក​ Jorgen Klopp អ្នកចាត់ការ​ក្លឹប​ Liverpool បាន​និយាយ​នៅ​ក្នុង​ថ្ងៃ​នេះ​ថា​ បន្ទាប់​ពី​ខ្សែ​ប្រយុទ្ធ​ Sadio Mane ចាកចេញ​ទៅ​កាន់​ Bayern Munich ក្រុម​របស់​លោក​ត្រូវ​តែ​ខិត​ខំ​សហការ​គ្នា​ជា​ធ្លុង​មួយសារ​ជា​ថ្មី​​នឹង​កីឡាករ​ដែល​កំពុង​មាន​វត្តមាន​ស្រាប់​នៅ​ក្លឹប​លោក​។
                                    </div>
                                </div>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>