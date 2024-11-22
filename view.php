<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Order</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
    <link rel="stylesheet" href="./assets/scss//main.css">


</head>

<body>
    <div class="custom-po-container" id="elementToCapture">
        <div class="top-header">
            <div class="img-wrapper">
                <img src="./assets/images/logo.jpg" alt="Logo">
            </div>
            <div class="heading-wrapper">
                <h1>Panda Retail Company</h1>
                <p>Purchase Order - 60647</p>
            </div>
            <div class="header-details-wrapper">
                <div class="date-time-wrapper">
                    Report Date: 10/3/2024 12:04:09 PM
                </div>
                <div class="po-source">
                    <h4>PO Source Ref No -</h4>
                    <p>Page: 1 OF 1</p>
                </div>
            </div>
        </div>

        <!-- Supplier & Order Context Information Table -->
        <div class="supplier-order-context ui segment">
            <table class="ui celled table">
                <tbody>
                    <!-- 1 -->
                    <tr>
                        <td><strong>Location Code</strong></td>
                        <td id="locCode">

                        </td>
                        <td><strong>Supplier Site</strong></td>
                        <td id="locSupplierSite">
                        </td>
                        <td><strong>Supplier No.</strong></td>
                        <td id="locSupplierNo">
                        </td>
                    </tr>
                    <!-- 2 -->
                    <tr>
                        <td><strong>Location Name</strong></td>
                        <td id="locName">
                        </td>
                        <td><strong>Supplier Site Name</strong></td>
                        <td colspan="3" id="locSupplierSiteName">
                        </td>
                    </tr>
                    <!-- 3 -->
                    <tr>
                        <td><strong>Address</strong></td>
                        <td id="locAddress">
                        </td>
                        <td><strong>Supplier Address</strong></td>
                        <td colspan="3" id="locSupplierAddress">
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="orders-details ui table">
                <tbody>
                    <!-- 1 -->
                    <tr>
                        <td><strong>PO Context</strong></td>
                        <td id="poContext">
                        </td>
                        <td><strong>Not Before Date</strong></td>
                        <td id="poNotBeforeDate">
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <!-- 2 -->
                    <tr>
                        <td><strong>Order</strong></td>
                        <td id="poOrder">
                        </td>
                        <td><strong>Not After Date</strong></td>
                        <td id="poNotAfterDate">
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <!-- 3 -->
                    <tr>
                        <td><strong>Currency</strong></td>
                        <td id="poCurrency">
                        </td>
                        <td colspan="5"></td>
                    </tr>
                    <!-- 4 -->
                    <tr>
                        <td><strong>Revision No</strong></td>
                        <td id="poRevisionNo">
                        </td>
                        <td><strong>Promo Week</strong></td>
                        <td id="poPromoWeek">
                        </td>
                        <td><strong>PO Creation Date</strong></td>
                        <td id="poCreationDate">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Item Details Table -->
        <div class="item-details ui segment">
            <div class="ui-celled-table-wraper">
                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>SKU No</th>
                            <th>Item Description</th>
                            <th>Size Desc</th>
                            <th>Barcode</th>
                            <th>VPN / Supplier Label</th>
                            <th>Cost (SAR)</th>
                            <th>Unit Cost (SAR)</th>
                            <th>Ordered Qty (pcs)</th>
                            <th>Received Qty (pcs)</th>
                            <th>Case Cost (SAR)</th>
                            <th>QTY Ordered (cases)</th>
                            <th>QTY Received (cases)</th>
                            <th>Total Ordered Cost (SAR)</th>
                            <th>Total Received Cost (SAR)</th>
                            <th>Tax (SAR)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="md-th">SKU No</span><span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">Item Description</span><span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">Size Desc</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">Barcode</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">VPN / Supplier Label</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">Cost (SAR)</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">Unit Cost (SAR)</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">Ordered Qty (pcs)</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">Received Qty (pcs)</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">Case Cost (SAR)</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">QTY Ordered (cases)</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">QTY Received (cases)</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">Total Ordered Cost (SAR)</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">Total Received Cost (SAR)</span> <span class="md-th-val">
                                </span></td>
                            <td><span class="md-th">Tax (SAR)</span> <span class="md-th-val">
                                </span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <strong>FOB -</strong>
            </div>
            <div>
                <strong>POB Note -</strong>
            </div>
            <div class="total-section ui segment">
                <div class="total-heading">

                    <button id="download-pdf" class="ui primary button no-print">
                        <i class="download icon"></i> Download PDF
                    </button>
                </div>
                <table class="ui table" id="total-calculation">
                    <tbody>
                        <!-- Total calculations populated by JS -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="./assets/js/main.js"></script>

</body>

</html>