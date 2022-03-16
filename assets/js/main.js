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


    document.addEventListener("DOMContentLoaded", function() {
        basketFake();
    });
}

function basketFake(){
    console.log("[+]\tStart faking the basket presence");

    var rows = Array.from(document.querySelectorAll("table tr"));
    // shift the row without picture
    rows.shift();

    for(var r of rows){
        var p = new Object(r);
        p.init(30);
    }
}

/**
 * This object contains the row manipulate product stock
 * @param {*} row html element <tr> containing a product
 */
function Object(row){

    this.row = row;
    var that = this;

    this.init = function(initialStock){
        this.name = row.querySelector('img').getAttribute('src');
        this.name = this.name.substring(this.name.lastIndexOf('/')+1, this.name.lastIndexOf('.'));
        this.stock = initialStock;
        this.order = 0;

        //adding buttons
        var colBtn = document.createElement("td");
        var buttons = document.createElement("div");
        buttons.className = "buttons"
        var less = document.createElement("button");
        less.addEventListener("click", this.removeFromCard);
        var more = document.createElement("button");
        more.addEventListener("click", this.addToCard);
        less.textContent = "-";
        more.textContent = "+";
        buttons.appendChild(less);
        buttons.appendChild(more);
        colBtn.appendChild(buttons);
        //put the buttons on the page
        this.row.insertBefore(colBtn, row.querySelector(":nth-child(2)"));

        //adding order column
        var col = document.createElement("td");
        col.className = "order stock";
        this.row.appendChild(col);

        //update the stock / order display
        this.update();
    }

    this.getName = function(){
        return this.name;
    }

    /**
     * Update the order / stock column display
     */
    this.update = function(){
        this.row.querySelector("td:nth-last-child(1)").textContent = this.order+"/"+(this.stock-this.order);
    }

    this.addToCard = function(){
        if(that.order+1 <= that.stock) that.order++;
        that.update();
    }

    this.removeFromCard = function(){
        if(that.order-1 >= 0) that.order--;
        that.update();
    }

    this.zoom = function(){
        //zoom into the picture
    }
}