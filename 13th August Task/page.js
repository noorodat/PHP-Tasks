// Handle showing the add product form
let showAddBtn = document.getElementById("showAdd");
let addForm = document.querySelector(".add-form");

showAddBtn.onclick = () => {
    addForm.classList.toggle("active");
}

/* ----------------------------------------*/

// Handle Update button
let updateProductBtn = document.getElementsByClassName("updateBtn");
let confirmUpdate = document.getElementsByClassName("confirm-update")
let deleteBtn = document.getElementsByClassName("deleteBtn")
let noBtn = document.getElementsByClassName("no");
let updateInputs = document.querySelectorAll("table td input");
let selectCategory = document.querySelectorAll("table td select");



// ...

Array.from(updateProductBtn).forEach((updateBtn, index) => {
    updateBtn.onclick = () => {
        updateBtn.style.display = "none";
        confirmUpdate[index].style.display = "inline-block";
        deleteBtn[index].style.display = "none";

        // Get the corresponding table row
        let row = updateBtn.closest('tr');

        // Find input elements within the row
        let inputElements = row.querySelectorAll('input');
        let selectElement = row.querySelector('select');

        // Display the input fields
        inputElements.forEach((input) => {
            input.style.display = "inline";
        });

        // Display the select element
        selectElement.style.display = "inline";

        // Hide other inputs and selects within the same column
        Array.from(updateInputs).forEach((input) => {
            if (!inputElements.includes(input)) {
                input.style.display = "none";
            }
        });

        Array.from(selectCategory).forEach((select) => {
            if (select !== selectElement) {
                select.style.display = "none";
            }
        });
    }
});

// ...


// ...

Array.from(noBtn).forEach((no, index) => {
    no.onclick = () => {
        console.log("clicked")
        confirmUpdate[index].style.display = "none";
        updateProductBtn[index].style.display = "inline-block";
        deleteBtn[index].style.display = "inline-block";

        // Get the corresponding table row
        let row = no.closest('tr');

        // Find input elements within the row
        let inputElements = row.querySelectorAll('input');
        let selectElement = row.querySelector('select');

        // Hide the input fields
        inputElements.forEach((input) => {
            input.style.display = "none";
        });

        // Hide the select element
        selectElement.style.display = "none";
    }
});

// ...

let dontDelete = document.getElementById("dontDelete");
let confirmDelete = document.getElementById("confirmDelete");
dontDelete.onclick = () => {
    confirmDelete.style.display = "none";
}


Array.from(deleteBtn).forEach(db => {
    db.onclick = () => {
        confirmDelete.style.display = "flex";
    }
});

/* ------------------------------- */

