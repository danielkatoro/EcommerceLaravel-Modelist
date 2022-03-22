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
            <form action="{{route('cart.store')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="hidden" name="title" value="{{$product->title}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <button type="submit">Ajouter au panier</button>
            </form>
        </div>
</body>
</html>