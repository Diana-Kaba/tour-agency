<?php
include "header.php";
?>
<div class="col-sm-4" style="margin: 0 auto;">
    <form method="post" action="countries.php" name="myform">
        <label for='formCountry'> Виберіть країну: </label>
        <select name="formCountry" class="form-select mt-2">
            <option value="US">США</option>
            <option value="UK">Великобританія</option>
            <option value="France">Франція</option>
            <option value="Mexico">Мексика</option>
            <option value="Japan">Японія</option>
        </select><br>
        <!-- <label for="price" class="form-label">Price (between 100 and 5000):</label>
        <input type="range" id="price" name="price" min="100" max="5000" class="form-range"
            oninput="outputRange.value = this.value">
        <output id="outputRange" name="outputRange" for="price"></output> -->
        <label for="price"> Choose price:</label><br>
        <input type="range" id="price" name="price" min="100" max="10000" step="50"
            oninput="outputRange.value = this.value" class="mt-2">
        <output id="outputRange" name="outputRange" for="price"><b>&#36;5000</b></output>
        <br>
        <label for="transport" class="mt-4">
            Choose your transport:</label>
        <select class="form-select transport-select mt-2" name="transport">
            <option value="Airplane">Airplane</option>
            <option value="Bus">Bus</option>
            <option value="Train">Train</option>
        </select>
        <br>
        <label for=" stars" class="form-label">Starts (between 1 and 5):</label>
        <input type="number" id="stars" name="stars" class="form-control" min="1" max="5" value="3">
        <br>
        <button name=" formSubmit" class="btn btn-primary">ОК</button>
    </form>
</div>

    <?php
include "footer.php";
?>