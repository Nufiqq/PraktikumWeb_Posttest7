<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCart.css">
    <title>Cart</title>
</head>
<body>
    <div class="form-style-3">
        <form action="cart.php" method="POST" >
            <fieldset>
                <legend>Cart</legend>
                <label for="field1"><span>Menu Name</span><input type="text" class="input-field" name="field1" value="" /></label>
                <label for="field2"><span>Price</span><input type="text" class="input-field" name="field2" value="" /></label>
                <label for="field3"><span>Quantity</span><input type="number" class="input-field" name="field3" value="" /></label>
                <label for="field4"><span>Size</span>
                    <input type="radio" class="input-field" name="field4" value="Grande" /> Grande
                    <input type="radio" class="input-field" name="field4" value="Tall" /> Tall
                    <input type="radio" class="input-field" name="field4" value="Short" /> Short
                </label>
                <label for="field5"><span>Topping</span><br>
                    <input type="checkbox" class="input-field" name="field5" value="Whipped Cream" /> Whipped Cream
                    <input type="checkbox" class="input-field" name="field5" value="Vanilla Syrup" /> Vanilla Syrup <br>
                    <input type="checkbox" class="input-field" name="field5" value="Salted Caramel Syrup" /> Salted Caramel Syrup
                    <input type="checkbox" class="input-field" name="field5" value="Ice Cream" /> Ice Cream <br>
                    <input type="checkbox" class="input-field" name="field5" value="Extra Shot" /> Extra Shot
                    <input type="checkbox" class="input-field" name="field5" value="Caramel Sauce" /> Caramel Sauce <br><br>
                </label>
                <label><span>&nbsp;</span><input type="submit" name="Submit" value="Submit"/></label>
            </fieldset>
            
            <fieldset>
                <legend>Pesanan</legend>
                <label for="field1"><span>Menu Name </span>: <?php echo $_POST['field1']; ?></label>
                <label for="field2"><span>Price </span>: <?php echo $_POST['field2']; ?></label>
                <label for="field3"><span>Quantity</span>: <?php echo $_POST['field3']; ?></label>
                <label for="field4"><span>Size</span>: <?php echo $_POST['field4']; ?></label>
                <label for="field5"><span>Topping</span>: <?php echo $_POST['field5']; ?></label>
            </fieldset>
        </form>
    </div>
</body>
</html>