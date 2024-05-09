<script src="includes/Home/backend/ajax.js"></script>
<div class="container-fluid d-lg-flex flex-row">

    <div class="rounded container-lg mx-2 my-3 align-items-center">

        <div class="card">
            <div class="h4 card-header py-2 px-4 text-white bg-secondary">
                <i class="fa-solid fa-bag-shopping text-dark "></i> Purchases
            </div>

            <div class="card-body">
                <div class="table-responsive-lg overflow-y-scroll" id="saleList" style="width:100%; height:510px;">

                </div>
            </div>
        </div>
    </div>

    <div class="rounded container-lg mx-2 my-3 align-items-center">
        <div class="d-flex flex-column">
            <div class="card mb-4">
                <div class="h4 card-header py-2 px-4 text-white bg-secondary">
                    </i> <i class="fa-solid fa-plus text-dark"></i> Add Purchase
                </div>
                <div class="card-body">
                    <form method="post" id="addTransaction" class="d-flex flex-column bg-transparent">
                        <input type="hidden" id="price">
                        <div class="d-lg-flex flex-row">
                            <div class="form-group mb-3 flex-fill mx-2">
                                <label for="items" class='fw-bold mb-2'>Select Product</label>
                                <select class="border-dark" name="item" id="items" class="border-dark" required>

                                </select>
                            </div>

                            <div class="from-group mb-3 mx-2">
                                <label for="qty" class='fw-bold mb-2'>Quantity</label>
                                <input class="form-control shadow-sm" type="number" name="qty" id="qty" required>
                            </div>
                        </div>

                        <div class="d-lg-flex flex-row">
                            <div class="from-group flex-fill mb-3 mx-2">
                                <label for="prc" class='fw-bold mb-2'>Price</label>
                                <input class="form-control shadow-sm" type="number" name="prc" id="prc" readonly>
                            </div>

                            <div class="form-group mb-3 mx-2 flex-fill align-self-end">
                                <button type="submit" class="btn btn-primary float-end">Add Transaction</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-4">
                <div class="h4 card-header pt-2 px-4 text-white bg-secondary">
                    <i class="fa-solid fa-chart-line text-dark"></i> Daily Income
                </div>
                <div class="card-body">
                    <canvas class="rounded" style="width:100%; height: 200px; background-color:white; " id="DailyChart">
                    </canvas>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="js/DailyChart.js"></script>