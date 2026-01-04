document.addEventListener("DOMContentLoaded", fetchData);

const name = document.getElementById("name");
const email = document.getElementById("email");


function fetchData() {
  fetch("api.php", {
    method: "POST",
    body: new URLSearchParams({ action: "fetch" })
  })
  .then(res => res.json())
  .then(data => {
    let rows = "";
    data.forEach(item => {
      rows += `
        <tr>
          <td>${item.name}</td>
          <td>${item.email}</td>
          <td>
            <button class="btn btn-sm btn-danger" onclick="deleteData(${item.id})">Delete</button>
            <button class="btn btn-sm btn-info" onclick="editData(${item.id}, '${item.name}', '${item.email}')">Edit</button>
          </td>
        </tr>
      `;
    });
    document.getElementById("tableData").innerHTML = rows;
  });
}

function insertData() {
  fetch("api.php", {
    method: "POST",
    body: new URLSearchParams({
      action: "insert",
      name: name.value,
      email: email.value
    })
  }).then(fetchData);
}

function deleteData(id) {
  fetch("api.php", {
    method: "POST",
    body: new URLSearchParams({ action: "delete", id })
  }).then(fetchData);
}

function editData(id, n, e) {
  document.getElementById("id").value = id;
  name.value = n;
  email.value = e;
}

function updateData() {
  fetch("api.php", {
    method: "POST",
    body: new URLSearchParams({
      action: "update",
      id: document.getElementById("id").value,
      name: name.value,
      email: email.value
    })
  }).then(fetchData);
}
