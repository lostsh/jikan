# jikan

| HTML | CSS | JS |
|:----:|:---:|:--:|
| Native 5.0  | 3   | Vanilla 2015 | 

## API

[Medias](lostsh.github.io/jikan-media/)

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
