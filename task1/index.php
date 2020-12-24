
<img src = "image.php"/>
<img src = "image.php"/>
<img src = "image.php"/>
<img src = "image.php"/>


<script>

  const imgs = document.querySelectorAll("img")
  let n = 0;

  for (let i = 0; i < imgs.length;i++)
    if(imgs[i].src.match('image.php')) n++;
  

  alert(n)

</script>



