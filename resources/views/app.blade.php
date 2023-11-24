<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset ('css/app.css') }}" >
  <link rel="stylesheet" href="{{ asset ('css/app.js') }}" >
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <h1 class="text-3xl text-red-500 justify-center font-bold underline">
    Hello world!
  </h1>
</body>

<footer
class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
<p class="ml-2"></p>
<div class="flex justify-center text-center">
  <p>  copyrights. &copy; All rights reserved. 
    <?php use Carbon\Carbon;
  $dt = Carbon::now();
  echo $dt->format('Y'); ?>  </p>
   </div>

<a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
</footer>

</html>