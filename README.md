# jikan

| HTML | CSS | JS |
|:----:|:---:|:--:|
| Native 5.0  | 3   | Vanilla 2015 | 

## Configuration

To lighten the site, I created and host an API allowing to put the images of the site online.

:warning: *Need internet to load pictures files.*

### This is the light version, so every media are hosted online, you may experments some slowdowns.

API and doc available at [this address](https://lostsh.github.io/jikan-media/).
This cute API is handmade with love by me, so take a look at the doc it's cool.

## Recommendations

For the last page, since it's the light version, and fruits gif are pretty heavy, 
you need to stay a bit longer on each row to let you browser download the glitch gif.

## Annex
Old and first version of the js glitch handler. Now the script loads glitch effect on row hover, the logic is pretty cool you can take a look at it `assets/js/main.js`.
```js
/**
 * This function replace normal pic with glitched
 * on mouse hover
 */
function main(){
    console.log("[+]\tAdding event listener on pictures");

    /**
     * Get all img tags of the table
     */
    var images = document.querySelectorAll("table img");

    /**
     * For each image add an anonymous fct
     * onhover: replace img path with glitched path
     * onout  : replace img path with normal path
     */
    images.forEach( e => e.addEventListener("mouseover", function(e){
        //console.log("current image url : %s", e.target.getAttribute('src'));
        e.target.src = e.target.getAttribute('src').replace("normal", "glitch");
    }));

    images.forEach( e => e.addEventListener("mouseout", function(e){
        //console.log("current image url : %s", e.target.getAttribute('src'));
        e.target.src = e.target.getAttribute('src').replace("glitch", "normal");
    }));
}
```
*a bit of ugly js ...*


<br>

### <center>Thanks for reading ~</center>
## <center>ᓚᘏᗢ</center>