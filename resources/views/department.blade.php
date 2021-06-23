<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel 8 jquery ajax categories and subcategories, select dropdown</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
<div class="container" style="margin-top: 50px; margin-left: 300px">
<div class="row">
<div class="col-lg-6">
<form action="">
<h4>Category</h4>
<select class="browser-default custom-select" name="category" id="category">
<option selected>Select category</option>
@foreach ($departments as $item)
<option value="{{ $item->id }}">{{ $item->name }}</option>
@endforeach
</select>
<h4>Subcategory</h4>
<select class="browser-default custom-select" name="subcategory" id="subcategory">
</select>
</form>
</div>
</div>
</div>