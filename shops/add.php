<!DOCTYPE html>
<html>
<head>
  <title>Sales Rep Master</title>
  <link rel="stylesheet" type="text/css" href="master.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 500%%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
fieldset { margin: 0 0 22px 0; border: 1px solid #095D92; padding: 12px 17px; background-color: #cc0099; }
legend { font-size: 1.1em; background-color: #095D92; color: #FFFFFF; font-weight: bold; padding: 4px 8px; }

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin-left: 200px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
    width: 500px;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
.btn {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
   }

/* Darker background on mouse-over */
.btn:hover {
    background-color: RoyalBlue;
   }
 }
</style>
</head>
<body>
<div class="sidenav">

  <button class="dropdown-btn">Master File
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="group.html">Group</a>
    <a href="type.html">Type</a>
    <a href="category.html">Category</a>
	<a href="item_locations.html">Locations</a>
	<a href="sales_rep.html">Sales Reps</a>
	<a href="engineers.html">Engineers</a>
	<a href="suppliers.html">Suppliers</a>
	<a href="items.html">Items</a>
	<a href="#customergroup">Customer Group</a>
	<a href="#suppliergroup">Supplier Group</a>

  </div>
  <a href="#transactions">Transactions</a>
  <a href="#process">Process</a>
  <a href="#reports">Reports</a></br></br></br></br></br>
  <a href="Master.html"><button class="btn"><i class="fa fa-home"></i> Home</button></a>

</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>


<fieldset>
<div class="container">
<h2>Sales Rep Master</h2>
  <form action="sales_rep.php" method = "POST">
    <label for="rcode" >Rep Code</label>
    <input type="text" style="margin-left:53px" id="rcode" name="rcode" placeholder="REP0"> </br>
	<label for="name">Name</label>
    <input type="text" style="margin-left:80px" id="name" name="name" placeholder="REP 00 NAME"> </br>
	<label for="mno">Mobile Number</label>
    <input type="text" style="margin-left:17px" id="mno" name="mno" placeholder="XXX XXXXXXX"> </br>
	<label for="com">Commission</label>
    <input type="text" style="margin-left:33px" id="com" name="com" placeholder="0.00%"> </br>

	<label for="remarks">Remarks</label>
    <textarea id="remarks" name="remarks" style="width:500px; height:50px; margin-left:59px"></textarea></br>
	<label class="container-wrapper" style="margin-left:40px">Active</label>
    <input type="checkbox" style="margin-left:30px" checked="checked" id="on" value ="1" name = "true" style="margin-right: 200px">
    <span class="checkmark"></span>
    </label>

    <input type="radio" style="margin-left:100px"  name="type" value="true"><label for="type"style="margin-left:10px">Staff </label>
    <input type="radio" style="margin-left:30px" name="type" value="false"><label for="type"style="margin-left:10px">Outside</label> </br></br>

    <input type="submit" value="Save"> </td> <input type="submit" value="New">
  </form>
</div>
</fieldset>
<fieldset>
<div class="container">
<label for="name2">Name</label>
    <input type="text" style="margin-left:83px" id="name2" name="name2">
	<div class="container-wrapper"><table class="table">
    <thead>
      <tr>
        <th>Code</th>
        <th>Name</th>
		<th>Active</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>REP0</td>
        <td>REP 00 NAME</td>
		<td class="container">
        <input type="checkbox" checked="checked" id="a" name="a">
        <span class="checkmark"></span>
        </td>

      </tr>




    </tbody>
  </table>


  </div>
</div>
</fieldset>



</body>
</html>
