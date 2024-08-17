document.getElementById('search-input').addEventListener('keyup', function() {
    var searchQuery = this.value.toLowerCase();
    var rows = document.querySelectorAll('#patients-table .patient-row');
    
    rows.forEach(function(row) {
        var name = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
        var mobile = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
        var doctorName = row.querySelector('td:nth-child(5)').textContent.toLowerCase();
        var department = row.querySelector('td:nth-child(6)').textContent.toLowerCase();
        
        if (name.includes(searchQuery) || mobile.includes(searchQuery) || doctorName.includes(searchQuery) || department.includes(searchQuery)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});
