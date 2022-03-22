<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
</head>
<body>
    <p>Product</p>
        <div>
            <h4>{{$product->title}}</h4>
            <label>{{$product->description}}</label><br>
            <label for="">{{$product->created_at->format('d/m/Y')}}</label>
            <strong>{{$product->getFormatPrice()}}</strong>
            <a href="{{route('products.show', $product->slug)}}">Voir l'article</a>            
            <img src="{{$product->image}}" alt="product">
            <form action="" method="post">
                <button type="submit">Ajouter au panier</button>
            </form>
        </div>
</body>
</html>