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

    document.querySelectorAll("img").forEach(i => i.addEventListener("click", zoom));
    


    //start faking basket presence
    //basketFake();
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
}

function zoom(e){
    var pop = document.querySelector("popup-zoom");
    // get image url with normal url
    var imgUrl = e.target.getAttribute("src").replace("glitch", "normal");
    pop.setAttribute("image", imgUrl);
    pop.update();
    pop.style.display = "block";
}


class popup extends HTMLElement{

    constructor(){
        super();
        this.attachShadow({ mode: 'open' });
        this.shadowRoot.appendChild(this.customTemplate(template.content));
    }

    customTemplate(template){
        //console.log(template);
        template.querySelector("#close").addEventListener("click", this.remove);
        template.querySelector(".zoom-background").addEventListener("click", this.remove);
        var that = this;
        document.onkeydown = function(e){
            if(e.key=='Escape'||e.key=='Esc'||e.keyCode==27) that.remove();
        }
        return template;
    }

    remove(){
        /*
        //remove element
        console.log("Remove the popup");
        document.body.removeChild(document.querySelector("popup-zoom"));
        document.onkeydown = null;
        */
        // hide popup
        document.querySelector("popup-zoom").style.display = "none";
    }

    update(){
        if(this.hasAttribute("image")) {
            this.shadowRoot.querySelector("img").setAttribute("src", this.getAttribute("image"));
        }
    }

    /*
    connectedCallback(){
        this.innerHTML = ``;
    }*/
}

customElements.define('popup-zoom', popup);

const template = document.createElement("template");
template.innerHTML = `
<style>
.zoom-container,popup-zoom{position:absolute;top:0;left:0;margin:0}
.zoom-background{opacity:.6;background-color:#000;position:absolute;width:100vw;height:100vh;margin:0}
#close{position:absolute;right:-12px;top:-12px;background-color:#0d1015;border-radius:100%;border:1px solid #4a595b;width:25px;height:25px;display:flex;align-items:center;justify-content:center}
#close div{clip-path:polygon(10% 0,50% 40%,90% 0,100% 10%,60% 50%,100% 90%,90% 100%,50% 60%,10% 100%,0 90%,40% 50%,0 10%);background-color:#4a595b;width:15px;height:15px}
.zoom{position:absolute;margin:10vh 10vw;width:80vw;height:80vh;border-radius:8px;background-color:#0d1015;border:1px solid #4a595b;background-image:url(../assets/img/dotted-back.svg);background-size:200px 200px;display:flex;justify-content:center;align-items:center}
.zoom img{margin:5vh 5vw;width:min(70vw,70vh);height:min(70vw,70vh);border-radius:8px}
</style>
<div class="zoom-container">
    <div class="zoom-background"></div>
    <div class="zoom">
        <div id="close"><div></div></div>
        <img src="https://lostsh.github.io/jikan-media/birds/normal/hen.gif" alt="zoomed image">
    </div>
</div>
`;