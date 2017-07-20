<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">

<title>Page de test</title>

   <link rel="stylesheet" href="styleCoul.css" />
   <script src="vivus/dist/vivus.js"></script>

   <style>
   .coulureanim {
       width: 600px;
       height: 600px;
       position: relative;
       background-color: black;
       animation-name: coulureanim;
       -webkit-animation-fill-mode: forwards;
       animation-delay: 1s;
       animation-duration: 5s;

   }


   @keyframes coulureanim {
   0% {fill: transparent;}
   100% {fill: white;}
   }

   </style>
</head>
<body>

     <!-- <object id="line" type="image/svg+xml" data="element4.svg"></object>
     <object id="line2" type="image/svg+xml" data="element6.svg"></object> -->

<section>
    <div class="coulureanim">
 <object id="svg" type="image/svg+xml" data="hybride.svg"></object>
    <div>
</section>
  <script>
  var calig= new Vivus('svg', {
    type: 'delayed',
    duration: 150,
    animTimingFunction: Vivus.EASE
  });
</script>

</body>
</html>
