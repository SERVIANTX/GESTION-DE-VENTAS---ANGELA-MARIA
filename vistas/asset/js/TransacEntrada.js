const form = document.getElementById("transactionForm");

form.addEventListener("submit", function (event) {
	event.preventDefault();
	let transactionFormData = new FormData(form);
	let transactionTableRef = document.getElementById("TransactionTable");
	let newTransactionRowRef = transactionTableRef.insertRow(-1);
	let newTypeCellRef = newTransactionRowRef.insertCell(0);
	newTypeCellRef.textContent = transactionFormData.get("TProductos");
	newTypeCellRef = newTransactionRowRef.insertCell(1);
	newTypeCellRef.textContent = transactionFormData.get("TCantidadC");
	newTypeCellRef = newTransactionRowRef.insertCell(2);
	newTypeCellRef.textContent = transactionFormData.get("TPrecioC");
	newTypeCellRef = newTransactionRowRef.insertCell(3);
	newTypeCellRef.textContent = transactionFormData.get("TPrecioV");
	newTypeCellRef = newTransactionRowRef.insertCell(4);
	newTypeCellRef.textContent = transactionFormData.get("TLotec");
	newTypeCellRef = newTransactionRowRef.insertCell(5);
	newTypeCellRef.textContent = transactionFormData.get("TFecha");

})