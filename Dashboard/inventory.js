function insertRows(){
    let table = document.getElementById("inventory_table");
    const numOfHeaders = document.getElementsByClassName("table_header").length;
    for(let i = 1; i < 15; i++){
        let row = table.insertRow(i);
        for(let j = 0; j < numOfHeaders; j++) {
            let cell = row.insertCell(j);
            // getCell(cell, j);
            // fill out empty cells
            cell.innerHTML = " ";
        }
    }
}

function getCell(cell, index){
    switch (index) {
        case 0 :
            getProductId();
            break;
        case 1 :
            getProductName();
            break;
        case 2: 
            getQuantity();
            break;
        case 3:
            getPrice();
            break;
        case 4: 
            getQuantitySold();
            break;
        case 5:
            getQuantityRemaining();
            break;
        case 6:
            getLowStockLevel();
            break;
    }
}