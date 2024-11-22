<?php
header('Content-Type: application/json');

// Sample data, replace with your database query
$data = [
    "location" => [
        "code" => 2601,
        "name" => "W - WH #991 RABIGH-Virtual",
        "address" => "Rabigh KAEC City - JEDDAH - SA",
        "supplierSite" => 798,
        "supplierSiteName" => "BINZAGR UNILEVER DISTRIBUTION CO. LTD.",
        "supplierAddress" => "King Abdulaziz Branch Road Ash Shati District City - Jeddah State - SA",
        "supplierNo" => 9412,
    ],
    "poContext" => [
        "context" => "Regular",
        "order" => "SAR",
        "currency" => "SAR",
        "revisionNo" => "202438",
        "notBeforeDate" => "05-SEP-2024",
        "notAfterDate" => "07-SEP-2024",
        "promoWeek" => "202438",
        "creationDate" => "27-AUG-2024",
    ],
    "items" => [
        [
            "sku" => 1756513,
            "description" => "HELLMANN'S LIGHT MAYONNAISE",
            "sizeDesc" => 12,
            "barcode" => "6281006872163",
            "vpnSupplierLabel" => "/",
            "cost" => 12.0,
            "unitCost" => 12.0,
            "orderedQty" => 480,
            "receivedQty" => 480,
            "caseCost" => 144.0,
            "qtyOrdered" => 40,
            "qtyReceived" => 40,
            "totalOrderedCost" => 5760.0,
            "totalReceivedCost" => 5760.0,
            "tax" => 288.0,
        ],
        [
            "sku" => 1786519,
            "description" => "HELLMANN'S MAYONNAISE",
            "sizeDesc" => 12,
            "barcode" => "6281006877400",
            "vpnSupplierLabel" => "/",
            "cost" => 13.0,
            "unitCost" => 13.0,
            "orderedQty" => 576,
            "receivedQty" => 576,
            "caseCost" => 156.0,
            "qtyOrdered" => 48,
            "qtyReceived" => 48,
            "totalOrderedCost" => 7488.0,
            "totalReceivedCost" => 7488.0,
            "tax" => 374.4,
        ],
    ],
];

echo json_encode($data);