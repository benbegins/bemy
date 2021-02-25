const cursor = () => {
    const cursor = document.querySelector('.cursor');
    const links = document.querySelectorAll('a, button, .nav-burger');

    // Remove hover on page transition
    if (cursor.classList.contains('hover')) {
        removeClasses();
    }


    if (window.innerWidth >= 1024) {
        // Cursor follow
        window.addEventListener('mousemove', function (e) {
            cursor.style.transform = "translate(" + e.clientX + "px, " + e.clientY + "px)";
        });

        // Add hover effect
        links.forEach(link => {
            link.addEventListener('mouseover', function (e) {
                cursor.classList.add('hover');
                if (link.classList.contains('cursor-image')) {
                    cursor.classList.add('image');
                }
            });
            link.addEventListener('mouseout', function (e) {
                removeClasses();
            });
        });
    }

    // Fonction remove classes
    const removeClasses = () => {
        cursor.classList.remove('hover');
        cursor.classList.remove('image');
    }

}

window.addEventListener('load', cursor);
window.addEventListener('resize', cursor);

export default cursor;