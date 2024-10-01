document.addEventListener("DOMContentLoaded", function () {
  const loadDataButton = document.getElementById("load-data-button");

  loadDataButton.addEventListener("click", function () {
    fetch("http://127.0.0.1:8000/api/customers")
      .then((response) => response.json())
      .then((data) => {
        const tbody = document.querySelector("#data tbody");
        tbody.innerHTML = ""; // Clear existing data

        data.forEach((item, index) => {
          // Handle each customer
          const rowClass =
            index % 2 === 0
              ? "bg-white hover:bg-gray-100"
              : "bg-blue-50 hover:bg-blue-100"; // Even rows white, odd rows blue

          // Create a row for the customer
          tbody.innerHTML += `
              <tr class="border-b ${rowClass} drop-shadow-lg">
                <td class=" font-bold py-3 px-6">${item.first_name} ${item.last_name}</td>
                <td class="py-3 px-6">${item.points}</td>
                <td class="py-3 px-6">${item.customer_id}</td>
                <td class="py-3 px-6">${item.city}, ${item.state}</td>
              </tr>
            `;

          // Check if there are orders for this customer
          if (item.orders && item.orders.length > 0) {
            // Create a nested row for orders
            item.orders.forEach((order) => {
              tbody.innerHTML += `
                  <tr class="border-b ${rowClass}">
                    <td class="py-3 px-6 pl-12">Order ID: ${order.order_id}</td>
                    <td class="py-3 px-6">Date: ${order.order_date}</td>
                    <td class="py-3 px-6">Status: ${order.status}</td>
                    <td class="py-3 px-6" colspan="1">Comments: ${
                      order.comments || "N/A"
                    }</td>
                  </tr>
                `;
            });
          }
        });
      })
      .catch((error) => {
        console.log("Error occurred: " + error);
      });
  });
});
