/*
 Объект для организации AJAX подгрузки каталога
*/

catalog = {

    async loadByScroll()
    {
        let elem = window;
        let scrollBtn = document.getElementById('nextBtn');
        elem.addEventListener('scroll', function() {
            let windowRelativeBottom =
                document.documentElement.getBoundingClientRect().bottom;
            if (windowRelativeBottom < document.documentElement.clientHeight + 50)
            {
                scrollBtn.click();
            }
        })
    }
};


document.addEventListener("DOMContentLoaded", () => {
    catalog.loadByScroll();
});
