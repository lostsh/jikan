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
    var order = new Map();
    var stock = new Map();
    console.log("[+]\tStart faking the basket presence");

    var rows = Array.from(document.querySelectorAll("table tr"));
    // shift the row without picture
    rows.shift();

    // create stock
    //rows.forEach( r => stock.set(new Object(r.querySelector('img').getAttribute('src')), 30) );
    for(var r of rows){
        var p = new Object(r);
        p.init(30);
        //stock.set(p, 30);

        /*
        var btn = r.querySelectorAll('button');
        console.log(btn)
        btn[0].addEventListener("click", test);*/
        //addBasketField(r);
        //showOrderStock(rows, order, stock);
    }

    /*
    console.log(stock);

    for (const [key, value] of stock) {
        console.log(key.getName());
        console.log(value);
    }
    */
}

/*
function test(){
    console.log("test");
}
function addBasketField(row){
    console.log("Adding buttons");
    var buttons = document.createElement("div");
    buttons.className = "buttons"
    var less = document.createElement("button");
    var more = document.createElement("button");
    less.textContent = "-";
    more.textContent = "+";
    buttons.appendChild(less);
    buttons.appendChild(more);
    //put the buttons on the page
    row.querySelector("td").appendChild(buttons);

    console.log("Adding order stock column");
    var col = document.createElement("td");
    col.className = "order stock";
    row.appendChild(col);
}
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
        //put the buttons on the page
        this.row.querySelector("td").appendChild(buttons);

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
}

/*
function showOrderStock(rows, order, stock){
    //update stock and order values
    for(var r of rows){
        console.log(getRowObject(r, stock));
        r.querySelector("td:nth-last-child(1)").textContent = "0/0";
    }
}

function getRowObject(row, stock){
    var obj = row.querySelector('img').getAttribute('src');
    obj = obj.substring(obj.lastIndexOf('/')+1, obj.lastIndexOf('.'));
    for(var o of stock.keys()){
        if(o.getName() == obj) return o;
    }
    return null;
}
*/