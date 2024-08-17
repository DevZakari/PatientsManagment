document.getElementById('search-doctors').addEventListener('keyup', function() {
    var searchQuery = this.value.toLowerCase();
    var doctors = document.querySelectorAll('.doctor-item');
    
    doctors.forEach(function(doctor) {
        var doctorName = doctor.querySelector('strong').textContent.toLowerCase();
        var doctorDepartment = doctor.querySelector('p').textContent.toLowerCase();
        
        if (doctorName.includes(searchQuery) || doctorDepartment.includes(searchQuery)) {
            doctor.style.display = '';
        } else {
            doctor.style.display = 'none';
        }
    });
});
