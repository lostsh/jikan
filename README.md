# jikan

| HTML | CSS | JS | PHP | MYSQL server |
|:----:|:---:|:--:|:----:|:-----------:|
| Native 5.0  | 3   | Vanilla 2015 | PHP 7.4.* | 8 |

## database
To setup the website, you need to have an user named `root` with **empty** password.
In order to setup the database use the following command : 

*setup the database*:<br>
```mysql -u root < jikan.sql```

*insert data* :<br>
```mysql -u root < jikan_data.sql```

To modify credentials, update the `connection.php` file.


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

```js
fetch('../model/getStock.php?stock='+(this.stock-this.order)+'&id='+this.id)
.then(function(response){
    return response.json();
})
.then(function(resp){
    this.stock = resp;
});
```
*this ugly js is used to live update stock from database*

<br>

### <center>Thanks for reading ~</center>
## <center>ᓚᘏᗢ</center>