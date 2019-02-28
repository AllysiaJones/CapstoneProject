<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php") ?>

<body onload="insertRows()">
    <div id="dashboard_info">
        <?php include("includes/nav.php") ?>
        <div id="dashboard_main">
            <div id="dashboard_heading">
                <h1 id="section_name">Inventory List</h1>
                <button>+ Add Product</button>
            </div>
            <table id="inventory_table">
                <tr>
                    <th class="table_header">Product #</th>
                    <th class="table_header">Product</th>
                    <th class="table_header">Quantity</th>
                    <th class="table_header">Price</th>
                    <th class="table_header">Quantity Sold</th>
                    <th class="table_header">Quantity Remaining</th>
                    <th class="table_header">Low Stock Level</th>
                </tr>
            </table>
        </div>
    </div>
    <script type="text/javascript" src="inventory.js"></script>
    <script type="text/javascript" src="product.js"></script>
</body>

</html>