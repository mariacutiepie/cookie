let deleteButtons = document.querySelectorAll('.deleteBtn');

deleteButtons.forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();

        let student_name = this.dataset.name;
        let id = this.dataset.id;
        let response = confirm("Do you want to delete the product " + student_name + "?");
        if (response) {
            fetch('delete.php?id=' + id, {
                method: 'GET'
            })

            .then(response => response.text())
            .then(data => {
                if(data === 'success'){
                    window.location.href = 'course.php';
                }
            })
        }
    });
});