/*************************************************************
 * This script is developed by Arturs Sosins aka ar2rsawseen, http://webcodingeasy.com
 * Feel free to distribute and modify code, but keep reference to its creator
 *
 * Image Selector class creates an image selector input with image preview based on select element. 
 * Images can be changed using select element itself or by clicking on image. 
 * Additionally this class provides API to select first, last, next or previous images or an image with specific index. 
 * It also can regenerate preview images for dynamical input manipulations.
 *
 * For more information, examples and online documentation visit: 
 * http://webcodingeasy.com/JS-classes/Input-for-selecting-images-with-preview
**************************************************************/
var image_selector = function(id, config){
    var elem = (typeof id == "string") ? document.getElementById(id) : id;
    var input = document.createElement("div");
    var opts = [];
    var cur = 0;
    var ob = this;
    var conf = {
        width: 100,
        height: 100,
        changeOnClick: true,
        hideInput: false
    };
    
    this.construct = function(){
        for(var opt in config){
            conf[opt]= config[opt];
        }
        
        input.style.width = conf.width + "px";
        input.style.height = conf.height + "px";
        
        if(conf.hideInput)
        {
            elem.style.display = "none";
        }
        else
        {
            add_event(elem, "change", function(){
                ob.select(elem.selectedIndex);
            });
        }
        input.style.overflow = "hidden";
        this.reset();
        input.setAttribute("id", "image_selector_input");
        var wrapper = document.createElement("div");
        elem.parentNode.insertBefore(wrapper, elem);
        wrapper.appendChild(input);
        wrapper.appendChild(elem);
        wrapper.setAttribute("id", "image_selector_wrapper");
        if(conf.changeOnClick)
        {
            add_event(input, "click", function(){
                cur++;
                ob.select(cur);                    
            });
        }
    };
    
    this.next = function(){
        this.select(++cur);
    };
    
    this.prev = function(){
        cur = (cur == 0) ? opts.length-1 : --cur;
        this.select(cur);
    };
    
    this.first = function(){
        this.select(0);
    };
    
    this.last = function(){
        this.select(opts.length-1);
    };
    
    this.select = function(index){
        var l = opts.length;
        index = index%l;
        cur = index;
        for(var i = 0; i < l; i++)
        {
            if(index != i)
            {
                opts[i].img.style.display = "none";
            }
            else
            {
                opts[i].img.style.display = "block";
                opts[i].opt.selected = true;
            }
        }
    };
    
    this.reset = function(){
        opts = [];
        empty();
        var options = elem.getElementsByTagName("option");
        for(var j in options)
        {
            if(options[j] && options[j].nodeName && options[j].nodeName.toLowerCase() == "option")
            {
                var img = new Image();
                img.setAttribute("alt", options[j].text);
                img.setAttribute("width", conf.width + "px");
                img.setAttribute("height", conf.height + "px");
                img.style.padding = "none";
                img.style.margin = "none";
                var o = new Object();
                o.img = img;
                o.opt = options[j];
                opts.push(o);
                input.appendChild(img);
                if(options[j].selected)
                {
                    cur = j;
                    this.select(cur);    
                }
                img.src = options[j].value;
            }
        }
    };
    
    var empty = function(){
        var imgs = input.getElementsByTagName("img");
        var l = imgs.length;
        for(var i = 0; i < l; i++)
        {
            input.removeChild(imgs[i]);
        }
    };
    //add event
    var add_event = function(element, type, listener){
        if(element.addEventListener)
        {
            element.addEventListener(type, listener, false);
        }
        else
        {
            element.attachEvent('on' +  type, listener);
        }
    };
    
    this.construct();
}