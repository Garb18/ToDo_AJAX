<script src="js/list.js"></script>
<div id="pageContainer" class="container">
    <ul id="todoList"
<?php $todoListsObj = new todoLists($DBH); //Lets pass through our DB connection
  $listid = $_GET["id"]; //Set our list ID
  $listItems = $todoListsObj->getListItems($listid); //Call the getListItems function
  foreach ($listItems as $key => $value) { //Loop over returned items
    echo "<li>".$value['item_name']."</li>"; //Echo item to list
  }
?>
</ul>
    <form class="row">
      <div class="col-md-10">
        <input type="text" class="form-control" id="product" placeholder="milk">
      </div>
      <input type="hidden" class="form-control" id="listid" value=”<?php echo $_GET['id']; ?>”>
      <div class="col-md-2">
        <button type="button" class="btn btn-primary" id="addproduct">Add Item</button>
      </div>
    </form>
  </div>