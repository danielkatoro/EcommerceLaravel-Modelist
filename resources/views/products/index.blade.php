<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <p>Ecommerce</p> <label for="">{{Cart::count()}}</label>
    @if(session('success'))
        <h4>{{session('success')}}</h4>
    @endif

    @foreach($products as $product)
        <div>
            <h4>{{$product->title}}</h4>
            <label>{{$product->subtitle}}</label>
            <label for="">{{$product->created_at->format('d/m/Y')}}</label>
            <strong>{{$product->getFormatPrice()}}</strong>
            <a href="{{route('products.show', $product->slug)}}">Voir l'article</a>            
            <img src="{{$product->image}}" alt="product">
        </div>
    @endforeach
</body>
</html>