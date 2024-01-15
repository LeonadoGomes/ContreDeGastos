function toggleMenu() {
    var sidebar = document.getElementById('mySidebar');
    var content = document.getElementById('main-content');
    if (sidebar.style.width === '250px') {
        sidebar.style.width = '0';
        content.style.marginLeft = '0';
    } else {
        sidebar.style.width = '250px';
        content.style.marginLeft = '250px';
    }
}



