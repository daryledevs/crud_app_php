<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Students</title>
</head>
<body>
  <div class="m-1">
    <ul>
      <h1 class="text-3xl underline my-1">
       Student Tutorial
      </h1>
      
      @foreach ($students as $student)
        {{-- topics 1 to 3 --}}
        <li>{{ $student -> first_name }} {{ $student -> last_name }} {{ $student -> age }}</li>

        {{-- topics for 4 --}}
        {{-- <li>{{ $student -> gender }} {{ $student -> gender_count }}</li> --}}
      @endforeach
    </ul>
  </div>
</body>
</html>