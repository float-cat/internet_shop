function OrderFormController($scope){

    $scope.lastProductid = 20;

    $scope.products = allProducts;

    $scope.AddProduct = function(s){
        s.count++;
    };

    $scope.RemProduct = function(s){
        if(s.count > 0)
            s.count--;
	};

    $scope.AppendProducts = async function(){
        let formData = new FormData();
        formData.append('lastProductid', $scope.lastProductid);
        let url = (new URL(document.location)).searchParams;
        if (url.get('sort'))
            formData.append('sort', url.get('sort'));
        if (url.get('str'))
            formData.append('str', url.get('str'));

        let response = await fetch('handlers/catalog.php', {
            method: 'POST',
            body: formData
        });
        if (response.ok) {
            let json = await response.json();
            json.forEach(function(entry) {
                entry.count = 0;
                $scope.products.push(entry);
            });
            $scope.lastProductid += 20;
        }
        else
            alert('query fail - ' + response.status);
    };

    $scope.total = function(){

        var total = 0;

        angular.forEach($scope.products, function(s){
            total+= s.price * s.count;
        });

        return total;
    };

    $scope.totalCount = function(){

        var total = 0;

        angular.forEach($scope.products, function(s){
            total+= s.count;
        });

        return total;
    };
}
