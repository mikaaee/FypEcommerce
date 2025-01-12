<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Body</title>
  <link href="https://fonts.googleapis.com/css2?family=Gabarito&display=swap" rel="stylesheet">

<style type="text/css">
/*general*/
body{
  font-family: 'Gabarito', sans-serif !important;
}

/*card section*/
.card {
    background-color: #fff; /* Black background */
    border-radius: 40px; /* 30px curve */
    color: #000 !important; /* black text color */
}
.card-body {
    padding: 20px; /* Optional: Add padding for spacing inside the card */
}

.icon-box-success {
    text-align: center; /* Center the icon inside the box */
}

.icon-item {
    font-size: 60px; /* Adjust icon size */
    color: #000; /* White icon color */
}
.card-title{
  font-size: 19px;
  color: #000 !important;
}
.card h3 {
    color: #000;
    font-weight: bold; 
    font-size: 20px;
}

.card h6 {
    color: #000; /* Lighter color for the label text */
}

.text-success {
    color: #28a745; /* Green color for positive percentage */
}

.text-muted {
    color: #aaa !important; /* Muted color for labels */
    font-size: 17px;
}

/*badge section*/
.badge{
  border-radius: 30px;
  font-family: 'Gabarito', sans-serif;
}

/*table section*/
.table th {
    background-color: #ace7f8; /* Set to black or your preferred color */
    color: #000 !important; /* Set text color to white for contrast */
    font-weight: bold !important;
}

/* Change font color for table data cells */
.table td {
    color: #000; /* Set font color to a darker shade */
}

/* Optional: Customize row hover effect */
.table tr:hover {
    background-color: #ace7f8; /* Light grey background on row hover */
}

/* To do list part
Style the checkbox itself */
.checkbox {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 20px;
    height: 20px;
    border: 2px solid #007bff; /* Border color */
    border-radius: 50%; /* Make the checkbox round */
    position: relative;
    margin-right: 10px;
    background-color: #fff;
    cursor: pointer;
}

/* Style the checkbox when checked */
.checkbox:checked {
    background-color: #007bff; /* Change background color when checked */
    border-color: #007bff; /* Border color when checked */
}

/* Create a tick mark inside the checkbox when checked */
.checkbox:checked::after {
    content: '';
    position: absolute;
    top: 4px;
    left: 6px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg);
    background-color: transparent; /*  no background is covering the tick */
}


/* Add a hover effect to the checkbox */
.checkbox:hover {
    border-color: #0056b3; /* Change border color on hover */
}

/* Optional: Style the label text for a better alignment */
.form-check-label {
    display: flex;
    align-items: center;
    color: #fff; /* Text color */
}
/*add btn*/
.custom-btn {
    border-radius: 25px; /* Make the button more rounded */
    border: 3px solid #007bff;
    background-color: #007bff; /* Change background color */
    color: #fff; /* Change text color */
    transition: background-color 0.5s ease; /* Smooth transition for hover effect */
}

.custom-btn:hover {
    background-color: #ace7f8; /* Darker shade on hover */
    border: 3px solid #ace7f8;
}

/*search field*/
.custom-input {
    background-color: #fff; /* Change background color to white */
    border: 2px solid #ccc; /* Optional: Add a border with a light color */
    padding: 10px 15px; /* Add some padding inside the input field */
    font-size: 16px; /* Adjust font size */
    transition: border-color 0.3s ease; /* Smooth transition for border color */
}

.custom-input:focus {
    border-color: #ccc; /* Change border color on focus */
    outline: none; /* Remove default focus outline */
}



</style>
</head>
<body>
  
<div class="main-panel">
    <div class="content-wrapper" style="background-color: rgb(225, 225, 225);">

        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">N/A</h3>
                                    <p class="text-muted ml-2 mb-0 font-weight-medium">Data not available</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-warning">
                                    <span class="mdi mdi-cart icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">New Order</h6>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">N/A</h3>
                                    <p class="text-muted ml-2 mb-0 font-weight-medium">Data not available</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-warning">
                                    <span class="mdi mdi-cash icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total Sales</h6>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">N/A</h3>
                                    <p class="text-muted ml-2 mb-0 font-weight-medium">Data not available</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-warning">
                                    <span class="mdi mdi-cash-usd icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Daily Income</h6>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">N/A</h3>
                                    <p class="text-muted ml-2 mb-0 font-weight-medium">Data not available</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-warning">
                                    <span class="mdi mdi-account icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Client</h6>
                    </div>
                </div>
            </div>
            

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Orders</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-muted m-0">
                                            </div>
                                        </th>
                                        <th> Client Name </th>
                                        <th> Order No </th>
                                        <th> Product Cost </th>
                                        <th> Payment Mode </th>
                                        <th> Date Order </th>
                                        <th> Payment Status </th>
                                    </tr>
                                </thead>
                                 
                                <tbody>
                                    <!-- Display message when no orders exist -->
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            <strong>No orders available</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- New Transaction History Section 
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Transaction History</h4>
                        <canvas id="transaction-history" class="transaction-chart"></canvas>
                        <div
                        class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3" style="background-color: rgb(225, 225, 225);">
                            <div class="text-md-center text-xl-left">
                                <h6 class="mb-1">Transfer to Paypal</h6>
                                <p class="text-muted mb-0">07 Jan 2025, 09:12AM</p>
                            </div>
                            <div
                                class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                <h6 class="font-weight-bold mb-0">RMXX</h6>
                            </div>
                        </div>
                        <div
                            class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3" style="background-color: rgb(225, 225, 225)";>
                            <div class="text-md-center text-xl-left">
                                <h6 class="mb-1">Tranfer to Stripe</h6>
                                <p class="text-muted mb-0">07 Jan 2025, 09:12AM</p>
                            </div>
                            <div
                                class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                <h6 class="font-weight-bold mb-0">RMXX</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- content-wrapper ends -->
    <!-- partial -->
</div>
<!-- main-panel ends -->
</body>
</html>
