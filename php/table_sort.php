<script>

grid.addEventListener('click', e => {
if (e.target.tagName !== 'TH') return;

const tbody = grid.querySelector('tbody');
const rows = Array.from(tbody.rows);
const col = e.target.cellIndex;

rows.sort((rowA, rowB) => {
const cellA = rowA.cells[col].textContent;
const cellB = rowB.cells[col].textContent;

if (+cellA) return cellA - cellB;
else return cellA.localeCompare(cellB, ['ru', 'en']);
});

tbody.append(...rows);
});
</script>