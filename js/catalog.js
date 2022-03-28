/*
 Объект для организации AJAX подгрузки каталога
*/

catalog = {
    lastProductid: 20,

    async setProduct(product)
    {
        output = document.getElementById('Catalog');

        newDiv = document.createElement('div');
        newDiv.id = 'product' + product['id'];
        output.append(newDiv);
        /* Обновляем карточку товара */
        newDiv.innerHTML = '<div style="float: left;"> \
            <a href="?productid=' + product['id'] + '"> \
             ' + product['caption'] + '\
            </a> \
            <br /> \
            ' + product['price'] + '\
            <br /> \
            -' + product['discount'] + '% \
            <br /> \
            <a href="?catalog&categoryid=' + product['categoryid'] + '"> \
             ' + product['categorycaption'] + ' \
            </a> \
            <br /> \
            <a href="?catalog&producerid=' + product['producerid'] + '"> \
             ' + product['producercaption'] + '\
            </a> \
            </div>';
        catalog.lastProductid = parseInt(product['id']);
    },

    async addProducts(products)
    {
        let teststring = '';
        catalog.lastProductid += 20;
        products.forEach(function(entry) {
            catalog.setProduct(entry);
        });
    },

    async loadProducts()
    {
        let formData = new FormData();
        formData.append('lastProductid', catalog.lastProductid);

        /* Выполняем POST-запрос */
        let response = await fetch('handlers/catalog.php', {
            method: 'POST',
            body: formData
        });

        /* Получаем результат */
        let result = await response.json();

        /* Ставим полученные товары */
        catalog.addProducts(result);
    }
};
