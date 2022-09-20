const form = document.getElementById("transacForm");

form.addEventListener("submit", function (event) {
	event.preventDefault();
	let transactionFormData = new FormData(form);
	let transactionTableRef = document.getElementById("TransacTable");
	let newTransactionRowRef = transactionTableRef.insertRow(-1);
	let newTypeCellRef = newTransactionRowRef.insertCell(0);
	newTypeCellRef.textContent = transactionFormData.get("TProducto");
	newTypeCellRef = newTransactionRowRef.insertCell(1);
	newTypeCellRef.textContent = transactionFormData.get("TPrecio");
	newTypeCellRef = newTransactionRowRef.insertCell(2);
	newTypeCellRef.textContent = transactionFormData.get("TCantidad");
	newTypeCellRef = newTransactionRowRef.insertCell(3);
	newTypeCellRef.textContent = transactionFormData.get("TStock");
	newTypeCellRef = newTransactionRowRef.insertCell(4);
	newTypeCellRef.textContent = transactionFormData.get("TLote");

})