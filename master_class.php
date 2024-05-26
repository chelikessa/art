<?php
    include 'vendor/components/core.php';

    $mc_order = $link->query("SELECT * FROM `title_mc` ORDER BY `date`");

    $mc = $link->query("SELECT * FROM `title_mc`");

    include 'vendor/components/header.php';
?>

    <div class="master_class" id="margin_top">
        <div class="master_class_title" id="title">
            <p>Наши мастер-классы: живопись, керамика, скетчинг</p>
        </div>
        <!-- <div class="special_offer">
            <div class="special_offer_block">
                <div class="special_offer_text">
                    <div class="special_offer_title">
                        <p>Специальное предложение</p>
                    </div>
                    <div class="special_offer_desc">
                        <p>Живописные мастер-классы</p>
                    </div>
                </div>
                <div class="special_offer_img">
                    <div class="img">
                        <img src="assets/img/XXXL (2).webp" alt="offer">
                    </div>
                    <div class="img_2">
                        <img src="assets/img/XXXL (3).webp" alt="offer">
                    </div>
                </div>
                <div class="special_offer_text">
                    <div class="special_offer_title">
                        <p>Скидка</p>
                    </div>
                    <div class="special_offer_desc">
                        <p>10% при покупке 3 мест</p>
                        <p>15% при покупке 5 мест</p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="bloks_master_class">
        <?php foreach ($mc_order as $key => $value): ?>
            <div class="mc_1">
                <div class="img">
                    <img src="assets/img/add_img/<?=$value['img']?>" alt="mc">
                </div>
                <div class="mc_1_a">
                    <a href="https://wa.me/79012623728" class="white">Написать в WhatsApp</a>
                </div>
                <div class="mc_1_a">
                    <a href="#record" class="green" id="scroll">Оставить заявку</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="record" id="record">
        <h2>Запись на мастер-класс</h2>
        <div class="record_block">
            <div class="img">
                <img src="assets\img\record.svg" alt="record">
            </div>
            <div class="form_block">
                <div class="form" id="rec_mc">
                    <form action="vendor/actions/record/record_mc.php" method="post" onsubmit="return(Validate());" name="myform">
                        <select name="mc">
                            <option selected disabled value="">Выберите мастер-класс</option>
                            <?php foreach ($mc as $key => $value): ?>
                                <option value="<?= $value['id'] ?>">"<?= $value['title'] ?>"</option>
                            <?php endforeach; ?>
                        </select>
                        <div id="name_error" style="color:red"></div>
                        <?php if(!isset($_SESSION['user'])){ ?>
                            <a href="auth.php" class="like_button">Записаться</a>
                        <?php }else{ ?>
                            <button name="rec_mc">Записаться</button>
                        <?php } ?>
                        <p class="desc_for_input">Отправляя данные, вы соглашаетесь с утверждённой <a href="data_processing_policy.php">Политикой обработки данных на сайте</a></p>
                        <p style="color: green" class="session_res"><?php
                            if(isset($_SESSION['success']['rec_mc'])){
                                echo $_SESSION['success']['rec_mc'];
                                unset ($_SESSION['success']['rec_mc']);
                            }
                        ?></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'vendor/components/footer.php';
?>
<script src="assets/scripts/jquery.js"></script>
<script src="assets/scripts/maskedinput.js"></script>
<script src="assets/scripts/headroom/js/headroom.js"></script>
<script src="assets/scripts/script.js"></script>
<script>
    var myElement = document.querySelector("header");
    // запуск конструктора
    var headroom = new Headroom(myElement);
    // инициализация
    headroom.init();  
</script>
<script src="assets/scripts/WOW-master/dist/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>