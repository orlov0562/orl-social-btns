function jsBookmark(el) {
    if (window.sidebar && window.sidebar.addPanel) { // Firefox <23
            window.sidebar.addPanel(document.title,window.location.href,'');
    } else if(window.external && ('AddFavorite' in window.external)) { // Internet Explorer
            window.external.AddFavorite(location.href,document.title);
    } else if(window.opera && window.print) { // Opera <15
            var elem = document.createElement('a');
            //elem.setAttribute('href',window.location.href);
            elem.setAttribute('title',document.title);
            elem.setAttribute('rel','sidebar');
            elem.click();
            return true;
    } else { // For the other browsers
        alert('Чтобы добавить страницу в закладки, нажмите ' + (navigator.userAgent.toLowerCase().indexOf('mac') != - 1 ? 'Command/Cmd' : 'CTRL') + ' + D на клавиатуре');
    }
    return false;
}

function jsWin(url, width, height) {
    window.open(url,'targetWindow','toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width='+width+', height='+height);
}
