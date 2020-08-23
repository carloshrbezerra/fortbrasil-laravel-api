<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>PDF</title>
 <style>
   .header{
    border: 1px solid #000;
    padding: 20px;
   }
   .conteudo{
    margin-top: 5px;
   }
 </style>
</head>
<body>
  <div class="header">
    <div style="font-size: 22px; font-weight: bold;">ARIS</div>
    <div>@yield('title')</div>
  </div>
  <div class="conteudo">@yield('conteudo')</div>
</body>
</body>
</html>