<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .notify{
            position: absolute;
            top: -8px;
            right: -7px;
        }
    </style>
        
</head>
<body class="container">
	<div class="jumbotron text-center">
        <h2>Mini Car Inventory System<h2>
    </div>
    <div class="notify" id="alerts" style="display:none;">
    </div>
    <div id="tabs">
        <ul>
            <li><a href="#manufacturer">Add Manufacturer</a></li>
            <li><a href="#model" onclick="loadManufacturer()">Add Model</a></li>
            <li><a href="#inventory" onclick="loadInventories()">View Inventory</a></li>
        </ul>
        <div id="inventory">
            <table id="inventory-table" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Serial Number</th>
                        <th>Manufacturer Name</th>
                        <th>Model Name</th>
                        <th>Count</th>
                    </tr>
                </thead>
            </table>
            <!-- Trigger the modal with a button -->
            <button style="display:none;" id="model-button" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>

        </div>
        <div id="manufacturer">
            <form action="#">
                <div class="form-group">
                    <label for="manufacturer_name">Manufacturer:</label>
                    <input type="text" class="form-control" id="manufacturer_name" placeholder="Enter Manufacturer Name" name="manufacturer_name" required>
                </div>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-default" onclick="addManufacturere()">Add</button>
                </div>
            </form>
        </div>
        <div id="model">
            <form id="model-form">
                <div>
                    <div class="form-group">
                        <label for="model-name">Model Name:</label>
                        <input type="text" class="form-control input-sm" id="model-name">
                    <div>
                    <div class="form-group">
                        <label for="select-manufacturer">Select Manufacturer:</label>
                        <select class="form-control input-sm" id="select-manufacturer">
                        </select>
                    </div>
                <div>
                <div class="form-group">
                    <label for="model-color">Color:</label>
                    <input type="text" class="form-control input-sm" id="model-color">
                <div>
                <div class="form-group">
                    <label for="model-year">Manufacturing Year:</label>
                    <input type="text" class="form-control input-sm" id="model-year">
                <div>
                <div class="form-group">
                    <label for="model-reg-no">Registration Number:</label>
                    <input type="text" class="form-control input-sm" id="model-reg-no">
                <div>
                <div class="form-group">
                    <label for="model-note">Note:</label>
                    <input type="text" class="form-control input-sm" id="model-note">
                <div>
                <div class="form-group">
                    <label for="model-count">Count:</label>
                    <input type="number" class="form-control input-sm" id="model-count" min="0" value="0">
                <div>
                <div class="form-group">
                    <label for="image-1">Picture 1:</label>
                    <input type="file" name="image" id="image-1" accept="image/*"  required>
                </div>
                <div class="form-group">
                    <label for="image-2">Picture 2:</label>
                    <input type="file" name="image" id="image-2" accept="image/*"  required>
                </div>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-default" onclick="addModel()">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    $( function() {
        $( "#tabs" ).tabs();
    } );
    
</script>
<script src="js/manufacturer.js"></script>
<script src="js/add_model.js"></script>
<script src="js/inventory.js"></script>
</html>