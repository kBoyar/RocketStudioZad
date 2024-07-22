document.addEventListener('DOMContentLoaded', function() {
    const link = document.getElementById('popupLink');
    const menu = document.getElementById('popupMenu');

    const link2 = document.getElementById('popupLink2');
    const menu2 = document.getElementById('popupMenu2');
    
    link.addEventListener('click', function(event) {
        event.preventDefault();

        if (menu.style.display === 'block') {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'block';
            menu.style.left = `${link.offsetLeft}px`;
            menu.style.top = `${link.offsetTop + link.offsetHeight}px`;
        }
    });

    document.addEventListener('click', function(event) {
        if (!link.contains(event.target) && !menu.contains(event.target)) {
            menu.style.display = 'none';
        }
    });

    link2.addEventListener('click', function(event) {
        event.preventDefault();

        if (menu2.style.display === 'block') {
            menu2.style.display = 'none';
        } else {
            menu2.style.display = 'block';
            menu2.style.left = `${link2.offsetLeft}px`;
            menu2.style.top = `${link2.offsetTop + link2.offsetHeight}px`;
        }
    });

    document.addEventListener('click', function(event) {
        if (!link2.contains(event.target) && !menu2.contains(event.target)) {
            menu2.style.display = 'none';
        }
    });

    /*form.addEventListener('submit_uni', function(event) {
        event.preventDefault(); 

        const formData = new FormData(this);

        fetch('create.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    });
    form.addEventListener('submit_skill', function(event) {
        event.preventDefault(); 

        const formData = new FormData(this);

        fetch('create.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    });
    */
    
});

function returnHome(event) {
    event.preventDefault();
    window.location.href = 'index.php';
}
