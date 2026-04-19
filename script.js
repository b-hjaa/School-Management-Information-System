function validateRegistrationForm() {
    const grade = document.querySelector('input[name="grade"]').value;
    if (grade < 1 || grade > 12) {
        alert("Grade must be between 1 and 12!");
        return false;
    }
    return true;
}

function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this record?")) {
        window.location.href = 'deleteRecord.php?id=' + id;
    }
}