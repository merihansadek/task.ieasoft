<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Photo Maker</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-ar.css">
</head>
<body>
<div class="container" style="text-align: center;">
    <div class="content" style="padding: 15px;margin-bottom: 40px">
        <div class="title" style=" font-size: 16px;">
            <h2>Welcome Admin {{$name}}</h2>
            {!! Form::open(array('route' => 'changes.store','method'=>'post')) !!}
           Image-1 <input type="text" name='slider_image_1' placeholder="type image url">
           Image-2 <input type="text" name='slider_image_2'placeholder="type image url">
           Image-3 <input type="text" name='slider_image_3'placeholder="type image url">
           Footer-1 <input type="text" name='footer_1'placeholder="type i class">
           Footer-2 <input type="text" name='footer_2'placeholder="type i class">
           Footer-3 <input type="text" name='footer_3'placeholder="type i class">
           Footer-4 <input type="text" name='footer_4'placeholder="type i class">
           Footer-5 <input type="text" name='footer_5'placeholder="type i class">
           Footer-6 <input type="text" name='footer_6'placeholder="type i class">
           Footer-7 <input type="text" name='footer_7'placeholder="type i class">
           Footer-8 <input type="text" name='footer_8'placeholder="type i class">
           Contact-Mail <input type="text" name='contact_mail'placeholder="type contact mail">
           Contact-Phone <input type="text" name='contact_phone'placeholder="type contact phone">
           <input type="submit" value="Update" style="border: 5px solid skyblue">
            {!! Form::close() !!}
        </div>
    </div>
</div>
</body>
</html>
