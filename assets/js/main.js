document.addEventListener("DOMContentLoaded", async () => {
  try {
    // Fetch data from the API
    const response = await fetch("api/data.php");

    // Check if the response is okay
    if (!response.ok) {
      throw new Error("Network response was not ok");
    }

    // Parse the JSON response
    const data = await response.json();
    console.log("This is API DATA -> ", data);

    // Pass the data to a function to populate HTML
    populateHTML(data);
  } catch (error) {
    console.error("There was a problem with the fetch operation:", error);
  }
});

function populateLocationData(loc) {
  //? This is for the Location
  // 1
  document.getElementById("locCode").textContent = loc.code;
  document.getElementById("locSupplierSite").textContent = loc.supplierSite;
  document.getElementById("locSupplierNo").textContent = loc.supplierNo;

  // 2
  document.getElementById("locName").textContent = loc.name;
  document.getElementById("locSupplierSiteName").textContent =
    loc.supplierSiteName;

  // 3
  document.getElementById("locAddress").textContent = loc.address;
  document.getElementById("locSupplierAddress").textContent =
    loc.supplierAddress;
}

function populatePoContext(po) {
  // ?  Order Details PO
  // 1
  document.getElementById("poContext").textContent = po.context;
  document.getElementById("poNotBeforeDate").textContent = po.notBeforeDate;
  // 2
  document.getElementById("poOrder").textContent = po.order;
  document.getElementById("poNotAfterDate").textContent = po.notAfterDate;
  // 3
  document.getElementById("poCurrency").textContent = po.currency;
  // 4
  document.getElementById("poRevisionNo").textContent = po.revisionNo;
  document.getElementById("poPromoWeek").textContent = po.promoWeek;
  document.getElementById("poCreationDate").textContent = po.creationDate;
}

//! Example of a function to populate HTML
function populateHTML(data) {
  populateLocationData(data.location);
  populatePoContext(data.poContext);
  populateItemsTable(data.items);
  calculateTotals(data.items);
}

function populateItemsTable(items) {
  const tableBody = document.querySelector(
    ".ui-celled-table-wraper table tbody"
  );

  // Clear existing rows
  tableBody.innerHTML = "";

  // Populate rows
  items.forEach((item) => {
    const row = document.createElement("tr");

    row.innerHTML = `
            <td><span class="md-th">SKU No</span><span class="md-th-val">${
              item.sku
            }</span></td>
            <td><span class="md-th">Item Description</span><span class="md-th-val">${
              item.description
            }</span></td>
            <td><span class="md-th">Size Desc</span><span class="md-th-val">${
              item.sizeDesc
            }</span></td>
            <td><span class="md-th">Barcode</span><span class="md-th-val">${
              item.barcode
            }</span></td>
            <td><span class="md-th">VPN / Supplier Label</span><span class="md-th-val">${
              item.vpnSupplierLabel
            }</span></td>
            <td><span class="md-th">Cost (SAR)</span><span class="md-th-val">${item.cost.toFixed(
              2
            )}</span></td>
            <td><span class="md-th">Unit Cost (SAR)</span><span class="md-th-val">${item.unitCost.toFixed(
              2
            )}</span></td>
            <td><span class="md-th">Ordered Qty (pcs)</span><span class="md-th-val">${
              item.orderedQty
            }</span></td>
            <td><span class="md-th">Received Qty (pcs)</span><span class="md-th-val">${
              item.receivedQty
            }</span></td>
            <td><span class="md-th">Case Cost (SAR)</span><span class="md-th-val">${item.caseCost.toFixed(
              2
            )}</span></td>
            <td><span class="md-th">QTY Ordered (cases)</span><span class="md-th-val">${
              item.qtyOrdered
            }</span></td>
            <td><span class="md-th">QTY Received (cases)</span><span class="md-th-val">${
              item.qtyReceived
            }</span></td>
            <td><span class="md-th">Total Ordered Cost (SAR)</span><span class="md-th-val">${item.totalOrderedCost.toFixed(
              2
            )}</span></td>
            <td><span class="md-th">Total Received Cost (SAR)</span><span class="md-th-val">${item.totalReceivedCost.toFixed(
              2
            )}</span></td>
            <td><span class="md-th">Tax (SAR)</span><span class="md-th-val">${item.tax.toFixed(
              2
            )}</span></td>
        `;

    tableBody.appendChild(row);
  });
}

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
 <td><strong>Total Received Cost</strong></td>
<td colspan="3">${totalReceivedCost.toFixed(2)} SAR</td>
<td><strong>Total Tax</strong></td>
<td colspan="3">${totalTax.toFixed(2)} SAR</td> 
</tr>  
`;
}

// PDF Button Handler (Placeholder)
document.getElementById("download-pdf").addEventListener("click", () => {
  window.print();
});
