<!DOCTYPE html>
<html>
<head>
  <title>{{ $slide->title }}</title>
</head>
<body style="margin: 0px;background: #000;">
  <img src="/storage/{{ substr($slide->image,7) }}" style="width:100%;height:auto;object-fit:cover;margin-bottom:  -3px;" />
</body>
</html>
