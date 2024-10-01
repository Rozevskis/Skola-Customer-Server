document.addEventListener("DOMContentLoaded", function () {
  const loadDataButton = document.getElementById("load-data-button");

  loadDataButton.addEventListener("click", function () {
    fetch("http://localhost:8002/")
      .then((response) => response.json())
      .then((data) => {
        const tbody = document.querySelector("#data tbody");
        tbody.innerHTML = ""; // Clear existing data

        data.data.forEach((item, index) => {
          const rowClass =
            index % 2 === 0
              ? "bg-white hover:bg-gray-100"
              : "bg-blue-50 hover:bg-blue-100"; // Even rows white, odd rows blue
          tbody.innerHTML += `
                        <tr class="border-b ${rowClass}">
                            <td class="py-3 px-6">${item.name}</td>
                            <td class="py-3 px-6">${item.age}</td>
                            <td class="py-3 px-6">${item.email}</td>
                            <td class="py-3 px-6">${item.location}</td>
                        </tr>
                    `;
        });
      })
      .catch((error) => {
        console.log("Error occurred: " + error);
      });
  });
});
