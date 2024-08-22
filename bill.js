window.addEventListener('DOMContentLoaded', (event) => {
    const itemPrices = document.querySelectorAll('.item td:last-child');
    let total = 0;

    itemPrices.forEach((price) => {
        const priceValue = parseInt(price.textContent.trim().slice(2));
        total += priceValue;
    });

    const totalRow = document.createElement('tr');
    const totalLabel = document.createElement('td');
    const totalAmount = document.createElement('td');

    totalLabel.textContent = 'Total:';
    totalLabel.setAttribute('colspan', '1');
    totalLabel.style.fontWeight = 'bold';

    totalAmount.textContent = `₹ ${total}`;
    totalAmount.setAttribute('colspan', '2');
    totalAmount.style.textAlign = 'right';
    totalAmount.style.fontWeight = 'bold';

    totalRow.classList.add('heading');
    totalRow.appendChild(totalLabel);
    totalRow.appendChild(totalAmount);

    const invoiceTable = document.querySelector('.invoice-box table');
    invoiceTable.appendChild(totalRow);
});
