<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      width: 10%;
      margin-bottom: 15px;
    }
  </style>
</head>

<body>

  <h1>Menu</h1>
  <table border="2">
    <tbody>
      <tr>
        <td>Order</td>
        <td>Amount</td>
      </tr>
      <tr>
        <td>Burger</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Fries</td>
        <td>75</td>
      </tr>
      <tr>
        <td>Steak</td>
        <td>150</td>
      </tr>
    </tbody>
  </table>
  <form action="handleform.php" method="get">
    <label for="food_item">Select an order</label>
    <select name="food_item" id="food_item">
      <option value="burger">Burger</option>
      <option value="fries">Fries</option>
      <option value="steak">Steak</option>
    </select>
    <p>Quantity <input type="number" name="order_quantity" required></p>
    <p>Cash <input type="text" name="cash_received" required></p>
    <input type="submit" value="Submit">
  </form>
</body>

</html>
