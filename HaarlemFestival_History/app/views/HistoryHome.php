<?php
require APPROOT . '../controllers/HistoryCon.php';
    if (isset($_POST['submit'])){
        $val = new HistoryCon($_POST);
        $data = $val->chLanguage();
    }
?>


<?php
require APPROOT . '/views/includes/head.php';
?>
<section class ="header1">
    <img src="img/historymain.jpg">
</section>
<h1>
    Let Us Guide You Through Haarlem
</h1>
<p>
    We provide guided and unguided tours for
    tourists and dutch citizens alike.
    Let us take you by stunning architecture,
    beautiful courtyards and historically important
    places throughout Haarlem.
</p>
<p>
    Our enthusiastic tour guides will tell you
    about the history of the city, the architecture,
    monuments, courtyards and of course the
    anecdotes of the locals and their surroundings.
</p>
<section class="historyimg">
    <img src="img/historic_02.jpg" style="width: 100%">
    <img src="img/haarlem-02.jpg" style="width: 100%">
    <img src="img/haarlem-03.jpg" style="width: 100%">
</section>
<section class="dropdown">
    <h2 class="header1">
        Historic Tours
    </h2>
    <form id="history-home"
          action="HistoryHome.php"
          method="POST"
    >
    <label for="language">Please choose tour language:</label>

    <select name="language_tour" id="tour_language">
        <option value="English">English</option>
        <option value="Dutch">Dutch</option>
        <option value="Chinese">Chinese</option>
    </select>
        <input type="submit" name="submit" value="Select Language"/>
    </form>
</section>
<section class="tours">
    <form action="HistoryHome.php" method="post">
        <table class="table">
            <tr>
                <th>Time</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <?php
            $check = 0;
            //$lang = $_POST(["tour_language"]);
            foreach ($data[0] as $value)
            {
                //var_dump($value);
                ?>
                    <h3><?php
                        if($check < 1) {
                            echo 'Tour Language:';
                            echo $value['language'];
                            $check++;
                            }?></h3>
            <tr>
                <td><?php echo $value['time']?></td>
                <td><?php echo $value['duration']?> hours</td>
                <td><?php echo $value['price']?> </td>
                <td><input type="text" id = "qauntity" name="quantity"></td>
                <td><button value="Add to cart" class="btn btn-primary"> Add to Cart</button></td>
            </tr>
                <?php
            }
                ?>
        </table>
    </form>
</section>
<?php
require APPROOT . '/views/includes/footer.php';
?>