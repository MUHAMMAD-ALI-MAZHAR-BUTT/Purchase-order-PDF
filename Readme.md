# Purchase Order PHP Project

## Overview

This project is a simple PHP-based purchase order generation system that dynamically populates an HTML page using data stored in a PHP array. The page displays detailed information regarding the purchase order, including supplier details, order context, and item-wise breakdown.

The project uses **Fomantic UI** for styling and basic client-side JavaScript to handle the total calculation and PDF generation functionality.

---

## Features

- Displays purchase order details, including:
  - Supplier and order context information.
  - Item details such as SKU, cost, quantity, tax, etc.
  - Total ordered cost, total received cost, and total tax calculations.
- Uses **Fomantic UI** for responsive styling.
- JavaScript functionality to calculate total costs and tax from the items.
- Placeholder functionality for generating PDF (simply triggers the browser's print dialog).

---

## File Structure

```plaintext
.
├── logo.jpg                  # Company logo image
├── main.css                  # Custom CSS file for additional styling
├── index.php                 # Main PHP file for rendering purchase order (your provided file)
└── .gitignore                # Ignore specific files for version control (if using git)
```

---

## Requirements

- **PHP 7.4+** (or any version supporting PHP arrays and basic functionality)
- **Fomantic UI** (via CDN for styling)
- A browser to view the generated page

---

## Installation

1. Clone the repository or copy the contents to your server:
   ```bash
   git clone https://your-repository-url
   ```
2. Make sure the required files are in place (e.g., `index.php`, `logo.jpg`, `main.css`).

3. Open the `index.php` file in a browser or configure your web server to serve the file.

---

## PHP Code Breakdown

### Data Structure

```php
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
```

This data array contains details for the purchase order, including:

- **Location Information**: Code, name, supplier address, etc.
- **PO Context**: Order context, currency, revision number, etc.
- **Items**: SKU, description, ordered and received quantities, costs, taxes, etc.

---

### HTML Structure

The HTML structure defines a basic layout for displaying the data in a tabular format.

- **Supplier and Order Context Information**: Two separate tables are used for displaying the location and supplier details, as well as the purchase order context.
- **Item Details**: A detailed table is generated dynamically for each item, showing the SKU, cost, quantities, and more.

### JavaScript Calculation

The script at the bottom of the page calculates the totals for the ordered cost, received cost, and tax, and displays these values in a table:

```javascript
function calculateTotals(items) {
  let totalOrderedCost = 0;
  let totalReceivedCost = 0;
  let totalTax = 0;

  items.forEach((item) => {
    totalOrderedCost += item.totalOrderedCost;
    totalReceivedCost += item.totalReceivedCost;
    totalTax += item.tax;
  });

  const totalTable = document.getElementById("total-calculation");
  totalTable.innerHTML = `
  <tr>
    <td><strong>Total Ordered Cost</strong></td>
    <td colspan="3">${totalOrderedCost.toFixed(2)} SAR</td>
  </tr>
  <tr>
    <td><strong>Total Received Cost</strong></td>
    <td colspan="3">${totalReceivedCost.toFixed(2)} SAR</td>
  </tr>
  <tr>
    <td><strong>Total Tax</strong></td>
    <td colspan="3">${totalTax.toFixed(2)} SAR</td>
  </tr>`;
}
```

- The `calculateTotals` function iterates over each item in the `items` array, sums the relevant values, and then updates the table.

---

## How to Use

1. **Open the Page**: Once the files are set up on your server, simply visit the `index.php` file in a web browser.
2. **View the Purchase Order**: The page will display the purchase order information, including supplier and item details.
3. **Generate PDF**: Clicking the "Generate PDF" button will trigger the browser's print dialog, allowing you to print or save the page as a PDF.

---

## Styling and Customization

- The project uses **Fomantic UI** for pre-defined UI components like tables and buttons. You can customize the styling further by modifying the `main.css` file.
- You can replace the placeholder company logo (`logo.jpg`) with your own logo image.

---

## Conclusion

This simple PHP-based project is designed to handle the dynamic generation of a purchase order page. It pulls data from an array and populates it into an HTML table, making it easy to generate and view purchase order details. The JavaScript functions handle the calculation of totals, while Fomantic UI provides a modern, responsive layout.
