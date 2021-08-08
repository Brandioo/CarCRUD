<!DOCTYPE html>
<html>
<?php require "updatefomcss.php" ?>
<body>
<div>
    <form action="/save" method="POST">
        <label></label>
        <input class="form-control" hidden type="number" name="id" value="<?= $data['carID'] ?>"/>
        Firm: <input class="form-control" type="text" name="firm" value="<?= $data['firm'] ?>"/>
        Type: <input class=" form-control" type="text" name="type" value="<?= $data['type'] ?>"/>
        Year of Production: <input class="form-control" type="number" name="number"
                                   value="<?= $data['yearOfProduction'] ?>"/>
        KM-Done: <input class="form-control" type="number" name="kmdone" value="<?= $data['KMDone'] ?>"/>
        Transmission: <input class="form-control" type="text" name="transmission"
                             value="<?= $data['transmission'] ?>"/>
        Price: <input class="form-control" type="number" name="price" value="<?= $data['price'] ?>"/>
        State: <input class="form-control" type="text" name="state" value="<?= $data['state'] ?>"/>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
