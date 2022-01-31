# jikan

## Annexe

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
*a bit of shitty ugly js ...*