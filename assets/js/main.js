/**
 * This function replace normal pic with glitched
 * on mouse hover
 */
function main(){
    console.log("[+]\tAdding event listener on pictures");

    /**
     * Get all img container tr tags of the table
     */
    var images = document.querySelectorAll("table tr");

    /**
     * For each image add an anonymous fct
     * onhover: replace img path with glitched path
     * onout  : replace img path with normal path
     */
    images.forEach( e => e.addEventListener("mouseover", function(e){
        var img = e.target.getElementsByTagName("img");
        //maybe you hovered a child of tr, and tr depth is at max 1
        if(img.length != 1) img = e.target.parentElement.getElementsByTagName("img");
        if(img.length != 1) return; //if th row does not contains image skip it
        //get the img item
        img = img.item(0);
        img.src = img
        .getAttribute('src')
        .replace("normal", "glitch");
    }));

    images.forEach( e => e.addEventListener("mouseout", function(e){
        var img = e.target.getElementsByTagName("img");
        if(img.length != 1) img = e.target.parentElement.getElementsByTagName("img");
        if(img.length != 1) return;
        img = img.item(0);
        img.src = img
        .getAttribute('src')
        .replace("glitch", "normal");
    }));
}