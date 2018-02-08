<?php include 'header.php';?>

<div class="container">
  <div class="jumbotron">
    <h1>Create Purchase Orders</h1>
    <form name="myForm" action="create_expense.php" method="post">
    <h6 class="p-3 mb-4 mt-4 bg-primary text-white">1. General Information</h2>
    <div class="form-group">
      <label>Choose a supplier</label>
      <select name="supplier" class="form-control">
        <option value="Sup 1">Sup 1</option>
        <option value="Sup 2">Sup 2</option>
        <option value="Sup 3">Sup 3</option>
        <option value="Sup 4">Sup 4</option>
        <option value="Sup 5">Sup 5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="">Shipping Address</label>
      <textarea name="shipping" class="form-control" rows="3" required="required"></textarea>
      
    </div>
    <div id="nonblank"></div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Purchase Order Date</label>
      <input name="purchaseDate" type="date" class="form-control" id="exampleFormControlInput1" placeholder="dd/mm/yy">
    </div>
    <h6 class="p-3 mb-4 mt-4 bg-primary text-white">2. Item Details</h2>
    <div id="items">
      <div class="form-row">
        <div class="form-group col-md-2">
          <label>Product</label>
          <input name="product[]" type="text" class="form-control" onblur="checkProduct()">
        </div>
        <div id="nonblank"></div>
        <div class="form-group col-md-7">
          <label>Description</label>
          <input name="desc[]" type="text" class="form-control" required="required" onblur="checkDesc()">
        </div>
        <div class="form-group col-md-1">
          <label>QTY</label>
          <input name="qty[]" type="number" class="form-control" required="required" onblur="checkQty()">
        </div>
        <div class="form-group col-md-2">
          <label>Cost/Unit (in baht)</label>
          <input name="cost[]" type="number" class="form-control" required="required" onblur="checkCost()">
        </div>
      </div>
    </div>
  <button id="moreItems" type="button" class="btn btn-info">+Add more items</button>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
<script src="js/Expense.js">
  
</script>

<?php include 'footer.php';?>
