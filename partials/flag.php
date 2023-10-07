<html class="h-full">
    <body class="h-full">

      <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css" rel="stylesheet">
      <div class="h-full w-full overflow-scroll">
   		<div class="flex justify-center">
  			<h1 class="text-3xl">World Flags</h1>
  		</div>

        <section class="countries-box" id="countries-box">
        </section>
    </body>
    <script>
fetchCountries = async () => {
    const response = await fetch('https://restcountries.com/v2/all');
    const myJson = await response.json(); //extract JSON from the http response
    console.log(myJson);
    localStorage['jsonData'] = JSON.stringify(myJson);
    debugger
    for (var i = 0; i < myJson.length; i++) {
        const div = document.createElement('div');
        div.classList.add('country-item');
        const img = document.createElement('img');
        img.classList.add('flag');
        img.setAttribute('src', myJson[i].flag);
        img.setAttribute('alt', "flag-img");
        const h3 = document.createElement('h3');
        h3.textContent = myJson[i].name;
        div.appendChild(img);
        div.appendChild(h3);
        var c_box = document.querySelector('#countries-box');
        c_box.appendChild(div);
    }
}

fetchCountries();
    
 
     
      
    </script>
</html>
